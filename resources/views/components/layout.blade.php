<!-- resources/views/components/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>
@include("components._nav")

<div class="container">
    {{ $slot }}
</div>

@vite(['resources/js/app.js'])
</body>
</html>
