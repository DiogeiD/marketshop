<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{ $title ?? 'Markshop' }}</title>
</head>
<body data-theme="light" class="bg-gray-50 min-h-screen">

<h1></h1>
        <hr/>
        {{ $slot }}    





</body>
</html>