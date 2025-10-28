<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio Saya')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-primary { background-color: #e0f2fe; }
        .text-primary { color: #0284c7; }
        .border-primary { border-color: #0284c7; }
        .hover-bg-primary:hover { background-color: #bae6fd; }
    </style>
</head>
<body class="bg-white text-gray-800 font-sans">
    @include('partials.navbar')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')
</body>
</html>