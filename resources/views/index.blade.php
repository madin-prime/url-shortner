<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
</head>
<body>

<div class="container">

<form action="shortener" method="post">
    @csrf
    <input type="text" name="url" class="url" placeholder="Enter the link here">
    <button type="submit">Shorten URL</button>
</form>

</div>

</body>
</html>
