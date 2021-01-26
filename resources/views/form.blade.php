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
    <div>
        <div class="inline-block w-36">
            {{-- input --}}
            <div class="select py-2">
                <label class="text-gray-500 text-sm"> مدل کاری </label>
                <div class="relative">
                    <div class="z-10 w-32 absolute border rounded-md border-gray-300">
                        <div
                            class="relative flex items-center rounded-md pr-2.5 pl-10 h-9 w-full cursor-pointer bg-white">
                            <span class="text-sm relative top-0"> گزینه </span>
                        </div>
                        <div class="absolute top-0 left-0 w-9 h-9 flex justify-center items-center transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                        <div
                            class="absolute top-10 right-0 w-full overflow-y-auto bg-white border border-gray-400 rounded-md transition-all opacity-100 change">
                            <div class="relative h-full w-full bg-whiite">
                                <div class="relative flex bg-white h-10 hover:bg-gray-100">
                                    <input type="radio" name="type"
                                        class="absolute top-0 right-0 h-full w-full opacity-0 cursor-pointer" />
                                    <div class="p-3 w-full flex items-center">
                                        <span class="block font-medium text-gray-700 text-xs mr-4">
                                            گزینه اول
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inline-block w-36">
            {{-- input --}}
            <div class="select py-2">
                <label class="text-gray-500 text-sm"> مدل شغلی </label>
                <div class="relative">
                    <div class="z-10 w-32 absolute border rounded-md border-gray-300">
                        <div
                            class="relative flex items-center rounded-md pr-2.5 pl-10 h-9 w-full cursor-pointer bg-white">
                            <span class="text-sm relative top-0"> گزینه </span>
                        </div>
                        <div class="absolute top-0 left-0 w-9 h-9 flex justify-center items-center transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                        <div
                            class="absolute top-10 right-0 w-full overflow-y-auto bg-white border border-gray-400 rounded-md transition-all opacity-100 change">
                            <div class="relative h-full w-full bg-whiite">
                                <div class="relative flex bg-white h-10 hover:bg-gray-100">
                                    <input type="radio" name="type"
                                        class="absolute top-0 right-0 h-full w-full opacity-0 cursor-pointer" />
                                    <div class="p-3 w-full flex items-center">
                                        <span class="block font-medium text-gray-700 text-xs mr-4">
                                            گزینه اول
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="inline-block mt-32 w-80">
        {{-- input --}}
        <div class="select py-2">
            <label class="text-gray-500 text-sm"> مدل شغلی </label>
            <div class="relative">
                <div class="z-10 w-11/12 mx-auto absolute border rounded-md border-gray-300">
                    <div class="relative flex items-center rounded-md pr-2.5 pl-10 h-9 w-full cursor-pointer bg-white">
                        <span class="text-sm relative top-0"> گزینه </span>
                    </div>
                    <div class="absolute top-0 left-0 w-9 h-9 flex justify-center items-center transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                    <div
                        class="absolute top-10 right-0 w-full overflow-y-auto bg-white border border-gray-400 rounded-md transition-all opacity-100 change">
                        <div class="relative h-full w-full bg-whiite">
                            <div class="relative flex bg-white h-10 hover:bg-gray-100">
                                <input type="radio" name="type"
                                    class="absolute top-0 right-0 h-full w-full opacity-0 cursor-pointer" />
                                <div class="p-3 w-full flex items-center">
                                    <span class="block font-medium text-gray-700 text-xs mr-4">
                                        گزینه اول
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- checkbox --}}
    <div class="relative mt-32 w-64">
        <span class="block text-sm text-gray-500 mr-4"> برام ایمیل کن </span>
        <label class="radio text-md text-gray-500 relative inline-block w-5/12 cursor-pointer p-2">
            <input type="radio" name="notification_selection" checked="" class="absolute cursor-pointer opacity-0 transition-all" />
            <span></span>
            بله
        </label>
        <label class="radio text-md text-gray-500 inline-block w-5/12 is-outlined is-primary relative cursor-pointer p-2">
            <input type="radio" name="notification_selection" class="absolute cursor-pointer opacity-0 transition-all" />
            <span></span>
            نه
        </label>
    </div>
    {{-- button --}}
    <button class="rounded-md transition-all duration-300 text-sm text-white bg-purple-700 hover:bg-purple-800 hover:shadow-2xl px-5 py-2 outline-none focus:outline-none mx-0.5">
        ذخیره تغییرات    
    </button>
    <button class="rounded-md transition-all duration-300 text-sm text-gray-900 bg-gray-100 hover:bg-gray-200 px-5 py-2 outline-none focus:outline-none mx-0.5">
        برگشت
    <i class="fa fa-arrow-left my-auto"></i>
    </button>
    {{-- textarea --}}
    <div class="mt-2">
        <textarea name="" id="" cols="50" rows="5" class="outline-none focus:outline-none">
            متن زیاد
        </textarea>
    </div>
</body>

</html>
