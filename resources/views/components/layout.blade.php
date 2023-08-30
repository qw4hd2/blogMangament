<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Name</title>

    <!-- Add your CSS and Bootstrap links here -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

</head>
<body>
    @include('./components/navbar')
    {{ $slot }}

</body>
</html>
