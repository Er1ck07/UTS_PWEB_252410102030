<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiteraStore - General Bookstore</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f7eade; color: #2c2a29; }
        .serif-title { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between">

    @include('components.navbar')

    <main class="container mx-auto px-4 sm:px-8 py-8 flex-grow">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>