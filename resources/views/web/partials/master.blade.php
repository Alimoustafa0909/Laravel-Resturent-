<!DOCTYPE html>
<html lang="en">

@include('web.partials.head')
<body>
{{--header--}}


<div class="super_container">
    @include('web.partials.header')
{{--  Content  --}}
    @yield('content')

{{-- Footer  --}}
    @include('web.partials.footer')
</div>


{{--foot--}}
@include('web.partials.foot')

</body>
</html>
