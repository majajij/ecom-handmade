<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;

class Product extends Model
{
    use HasFactory;

    public static $sort = [
        0 => 'Default',
        1 => 'Name, A to Z',
        2 => 'Name, Z to A',
        3 => 'Price low to high',
        4 => 'Price high to low',
    ];
    // public static $show = [10, 15, 20, 50];
    public static $show = [2, 5, 8, 10];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }

    public function hasPromo()
    {
        foreach ($this->promotions()->get() as $key => $promo) {
            $date_now = date('Y-m-d', strtotime(now()));
            //echo $paymentDate; // echos today!
            $starting_date = date('Y-m-d', strtotime($promo->start_date));
            $ending_date = date('Y-m-d', strtotime($promo->end_date));
            if ($date_now >= $starting_date && $date_now <= $ending_date) {
                return [
                    'promo' => true,
                    'new_price' => $promo->new_price,
                ];
            }
        }
        return [
            'promo' => false,
            'new_price' => null,
        ];
    }

    public function inStock()
    {
        foreach ($this->stocks()->get() as $key => $stock) {
            if ($stock->qty > 0) {
                return true;
            }
        }

        return false;
    }

    public function qtyStock()
    {
        //returns array of keys values (wh_id => qty)
        return $this->stocks->pluck('qty', 'wh_id');
    }

    public function getProductDetails()
    {
        //verify if the product has a promotion
        $has_promo = $this->hasPromo();
        $this['promo'] = $has_promo['promo'];
        if ($has_promo['promo']) {
            $this->old_price = round($this->price, 2);
            $this->price = (float) $has_promo['new_price'];
            $this->promo_percent = (int) (($this->price * $this->old_price) / 100);
        }
        //get images of product
        $this['images'] = $this->images()->get(['images.id', 'images.path']);
        //get categories of product
        $this['categories'] = $this->categories()->get(['categories.id', 'categories.name']);
        //verify if the product in stock
        $this->in_stock = $this->inStock();
        //verify if the product is new or not (threshold = 90 days)
        $d1 = new DateTime();
        $d2 = new DateTime($this->created_at);
        $this->new = $d1->diff($d2)->days < 90;
    }

    public static function filterProduct($request)
    {
        $products = self::query();

        if ($request->has('category')) {
            $products->with('categories:id,name')->whereHas('categories', function ($query) use ($request) {
                $query->where('categories.id', $request->category);
            });
        }

        if ($request->has('sort')) {
            switch ($request->sort) {
                case 1:
                    $products->orderBy('name', 'ASC');
                    break;

                case 2:
                    $products->orderBy('name', 'DESC');
                    break;

                case 3:
                    $products->orderBy('price', 'ASC');
                    break;

                case 4:
                    $products->orderBy('price', 'DESC');
                    break;
            }
        } else {
            $products->orderBy('name', 'ASC');
        }

        return $request->has('show') ? $products->paginate($request->show) : $products->paginate(self::$show[0]);
    }
}
