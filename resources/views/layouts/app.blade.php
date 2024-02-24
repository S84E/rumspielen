<!doctype html>
<html lang="de">

@include('layouts.head')

<body>
@include('layouts.navbar')

<div class="container min-vh-100 pt-5">
    <div class="content-container pt-2">
    @yield('content')
    </div>
</div>

</body>

</html>
