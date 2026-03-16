<!doctype html>
<html lang="en">
<head>
    @include('partials.frontend.head')
</head>
<body>
<div class="page-wrapper">

    @include('partials.frontend.header')

    <main class="main-wrapper">
        @yield('content')
    </main>

    @include('partials.frontend.footer')
</div>

@include('partials.frontend.script')
</body>
</html>
