<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="/app.css">
    
    <title>{{ $title }}</title>
</head>
<body>
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

@include('parsials.navbar')
@include('parsials.sidebar')
@yield('container')

</div>
</div>  


<script>
    let alert = document.getElementById('alert');
    if(alert.classList.contains('alert') ){
        setTimeout(function(){
        alert.classList.add('hidden');
        }, 1500);
    }
    
</script>
</body>
</html>