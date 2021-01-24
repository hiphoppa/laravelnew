<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{--
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v27.2.0/dist/font-face.css" rel="stylesheet"
        --}} {{-- type="text/css" />
    --}}
    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Laravel</title>
</head>

<body>
    <div class="buttons w-full h-screen bg-gray-100">
        <div class="h-buttons">
            <button
                class="rounded-md border hover:border-gray-400 transition-all duration-300 text-sm text-gray-700 bg-white px-6 py-2 outline-none focus:outline-none mx-0.5">
                دکمه </button>
            <a href="#"
                class="rounded-md border hover:border-gray-400 transition-all duration-300 text-sm text-gray-700 bg-white px-6 py-2 outline-none focus:outline-none mx-0.5">
                لینک </a>
            <button
                class="rounded-full border hover:border-gray-400 transition-all duration-300 text-sm text-gray-700 bg-white px-6 py-2 outline-none focus:outline-none mx-0.5">
                دکمه </button>
            <a href="#"
                class="rounded-full border hover:border-gray-400 transition-all duration-300 text-sm text-gray-700 bg-white px-6 py-2 outline-none focus:outline-none mx-0.5">
                لینک </a>
        </div>
        <div class="solid-buttons mt-2">
            <button
                class="rounded-md transition-all duration-300 text-sm text-white bg-purple-700 hover:bg-purple-800 px-6 py-2 outline-none focus:outline-none mx-0.5">
                بنفش </button>
            <a href="#"
                class="rounded-md transition-all duration-300 text-sm bg-lightBlue-400 text-white px-6 py-2 outline-none focus:outline-none mx-0.5">
                لینک </a>
        </div>
    </div>

</body>

</html>
