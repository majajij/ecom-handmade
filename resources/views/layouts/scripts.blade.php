<!-- Vendor JS -->
<script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>

<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>

<!--Plugins JS-->
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/countdown.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/venobox.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/ajax-mail.js') }}"></script>

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
{{-- <script src="{{ asset('assets/js/vendor/vendor.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/plugins.min.js')}}"></script> --}}

<!-- Main Js -->
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{ asset('assets/js/main.js') }}"></script>

{{-- Toastr --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
