<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Sample App')</title>
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="shortcut icon" href="http://www.zgtxcj.com/Application/Home/Common/index/img/tubiao.ico" type="image/x-icon">
</head>
<body>
@include('layout/_header')

<div class="container">
    @include('shared._message')
    <div class="yield-con">
        @yield('content')
    </div>

</div>
<div class="container">
    <hr />
@include('layout/_footer')
</div>
</body>
<script src="/js/app.js"></script>
</html>