@extends('base')
@section('content')
    <form action="{{ route('payment') }}" method="post">
        @csrf
        <input type="number" id="amount" name="amount">
        <button type="submit">Pay</button>
    </form>
@endsection
