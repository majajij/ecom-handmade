{{-- Toast Start --}}
@if (session()->has('alert'))
    @switch(session()->get('alert')['type'])
        @case('info')
            {!! '<script>toastr.info("' . session()->get('alert')['message'] . '")</script>' !!}
        @break

        @case('success')
            {!! '<script>toastr.success("' . session()->get('alert')['message'] . '")</script>' !!}
        @break

        @case('warning')
            {!! '<script>toastr.warning("' . session()->get('alert')['message'] . '")</script>' !!}
        @break

        @case('error')
            {!! '<script>toastr.error("' . session()->get('alert')['message'] . '")</script>' !!}
        @break
    @endswitch
@endif
{{-- Toast End --}}
