<!DOCTYPE html>
<html lang="en" class="min-h-full h-[130vh] bg-[#c7d2fe]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>E-Commerce</title>
</head>

<body class="h-fit w-[80%] mx-auto">
    <header>
        <x-nav-bar />

        {{ $heading }}
    </header>
    <main class="flex flex-col self-center w-[80%] h-screen mx-auto">
        {{ $slot }}
    </main>

</body>


</html>
