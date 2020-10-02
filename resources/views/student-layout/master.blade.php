<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
<h1>@yield('header')</h1>
<h2>@yield('navbar')</h2>
@yield('main')
<h1>@yield('footer')</h1>
</body>

</html>
