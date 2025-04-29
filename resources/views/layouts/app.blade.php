<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', '기본 제목')</title>
</head>
<body>

@include('layouts.partials.header')

<main>
    @yield('content')
</main>

@include('layouts.partials.footer')

</body>
</html>
