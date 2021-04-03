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
    <link rel="stylesheet" href="./css/font-awesome.css">
    <link rel="stylesheet" href="/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Laravel</title>
</head>

<body>
    
    {{-- checkbox --}}
    <div class="relative mt-32 w-64">
        <span class="block text-sm text-gray-500 mr-4"> برام ایمیل کن </span>
        <label class="radio text-md text-gray-500 relative inline-block w-5/12 cursor-pointer p-2">
            <input type="radio" name="notification_selection" checked="" class="absolute cursor-pointer opacity-0 transition-all rounded-full inline-block p-0 bg-white border border-gray-300 w-6 h-6 my-0 mr-2 ml-0 -top-px" />
            <span class="rounded-full inline-block p-0 bg-white border border-gray-300 w-6 h-6 my-0 mr-2 ml-0 -top-px"></span>
            بله
        </label>
        <label class="radio text-md text-gray-500 inline-block w-5/12 is-outlined is-primary relative cursor-pointer p-2">
            <input type="radio" name="notification_selection" class="absolute cursor-pointer opacity-0 transition-all rounded-full inline-block p-0 bg-white border border-gray-300 w-6 h-6 my-0 mr-2 ml-0 -top-px" />
            <span class="rounded-full inline-block p-0 bg-white border border-gray-300 w-6 h-6 my-0 mr-2 ml-0 -top-px"></span>
            نه
        </label>
    </div>
    
</body>

</html>
