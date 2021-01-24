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
    <div class="buttons w-full h-screen bg-white">
        <div class="h-buttons pt-2">
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
                class="rounded-md transition-all duration-300 text-sm bg-lightBlue-400 hover:bg-lightBlue-500 text-white px-6 py-2 outline-none focus:outline-none mx-0.5">
                لینک </a>
                <button
                class="rounded-md transition-all duration-300 text-sm text-white bg-emerald-400 hover:bg-emerald-500 px-6 py-2 outline-none focus:outline-none mx-0.5">
                سبز </button>
                <button
                class="rounded-md transition-all duration-300 text-sm text-gray-900 bg-amber-400 hover:bg-amber-500 px-6 py-2 outline-none focus:outline-none mx-0.5">
                زرد </button>
                <button
                class="rounded-md transition-all duration-300 text-sm text-white bg-rose-500 hover:bg-rose-600 px-6 py-2 outline-none focus:outline-none mx-0.5">
                قرمز </button>
                <button
                class="rounded-md transition-all duration-300 text-sm text-gray-900 bg-gray-100 hover:bg-gray-200 px-6 py-2 outline-none focus:outline-none mx-0.5">
                روشن </button>
                <button
                class="rounded-md transition-all duration-300 text-sm text-gray-900 bg-gray-50 hover:bg-gray-100 px-6 py-2 outline-none focus:outline-none mx-0.5">
                روشن </button>
        </div>
        <div class="light-buttons mt-2">
            <button
                class="rounded-md transition-all duration-300 text-sm text-purple-700 bg-purple-50 hover:bg-purple-100 px-6 py-2 outline-none focus:outline-none mx-0.5">
                بنفش </button>
            <a href="#"
                class="rounded-md transition-all duration-300 text-sm bg-lightBlue-50 hover:bg-lightBlue-100 text-lightBlue-400 px-6 py-2 outline-none focus:outline-none mx-0.5">
                لینک </a>
                <button
                class="rounded-md transition-all duration-300 text-sm text-emerald-500 bg-emerald-50 hover:bg-emerald-100 px-6 py-2 outline-none focus:outline-none mx-0.5">
                سبز </button>
                <button
                class="rounded-md transition-all duration-300 text-sm text-amber-600 bg-amber-50 hover:bg-amber-100 px-6 py-2 outline-none focus:outline-none mx-0.5">
                زرد </button>
                <button
                class="rounded-md transition-all duration-300 text-sm text-rose-600 bg-rose-50 hover:bg-rose-100 px-6 py-2 outline-none focus:outline-none mx-0.5">
                قرمز </button>
        </div>
        <div class="outline-buttons mt-2">
            <button
                class="rounded-md transition-all duration-300 text-sm text-purple-700 hover:text-white border border-purple-700 bg-white hover:bg-purple-700 px-6 py-2 outline-none focus:outline-none mx-0.5">
                بنفش </button>
            
            <a href="#"
                class="rounded-md transition-all duration-300 text-sm text-lightBlue-500 hover:text-white bg-white hover:bg-lightBlue-400 border border-lightBlue-400 px-6 py-2 outline-none focus:outline-none mx-0.5">
                لینک </a>
                
                <button
                class="rounded-md transition-all duration-300 text-sm text-emerald-500 hover:text-white bg-white hover:bg-emerald-400 border border-emerald-400 px-6 py-2 outline-none focus:outline-none mx-0.5">
                سبز </button>
                <button
                class="rounded-md transition-all duration-300 text-sm text-amber-500 hover:text-white bg-white hover:bg-amber-400 border border-amber-400 px-6 py-2 outline-none focus:outline-none mx-0.5">
                زرد </button>
                <button
                class="rounded-md transition-all duration-300 text-sm text-rose-500 hover:text-white bg-white hover:bg-rose-500 border border-rose-500 px-6 py-2 outline-none focus:outline-none mx-0.5">
                قرمز </button>
        </div>
    </div>

</body>

</html>
