<!DOCTYPE html>
<html>
<head>
    <title>Website ABC</title>
</head>
<body>
<header>
    <ul>
        <li><a href="{{ URL::to('/') }}">Trang chủ</a></li>
        <li><a href="{{ URL::to('/about') }}">About</a></li>
    </ul>
</header>
<section>
    {!!$content!!}
</section>
</body>
</html>