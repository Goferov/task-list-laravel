<!DOCTYPE html>
<html>
<head>
    <title>Laravel task list</title>
    @yield('style')
</head>
<body>
@if(session()->has('success'))
    <div>{{ session('success') }}</div>
@endif
    <h1>@yield('title')</h1>
    <div>@yield('content')</div>
</body>
</html>
