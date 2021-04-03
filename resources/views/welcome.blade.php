<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v27.2.0/dist/font-face.css" rel="stylesheet" --}} {{-- type="text/css" /> --}}
    <link rel="stylesheet" href="./css/font-awesome.css">
    <link rel="stylesheet" href="/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Laravel</title>
</head>


<body class="bg-white">
    <div class="buttons">
        <div class="h-buttons pt-2">
            <button
                class="rounded-md border hover:border-gray-400 transition-all duration-300 text-sm text-gray-700 bg-white px-5 py-2 outline-none focus:outline-none mx-0.5">
                دکمه </button>
            <button
                class="rounded-md border hover:border-gray-400 transition-all duration-300 text-sm text-gray-700 bg-white px-5 py-2 outline-none focus:outline-none mx-0.5">
                <i class="fa fa-eye"></i>
                نمایش
            </button>
            <button
                class="rounded-md border hover:border-gray-400 transition-all duration-300 text-sm text-gray-700 bg-white px-5 py-2 outline-none focus:outline-none mx-0.5">
                <i class="fa fa-edit"></i>
                تغییر
            </button>
            <a href="#"
                class="rounded-md border hover:border-gray-400 transition-all duration-300 text-sm text-gray-700 bg-white px-5 py-2 outline-none focus:outline-none mx-0.5">
                لینک </a>
            <button
                class="rounded-full border hover:border-gray-400 transition-all duration-300 text-sm text-gray-700 bg-white px-5 py-2 outline-none focus:outline-none mx-0.5">
                دکمه </button>
            <a href="#"
                class="rounded-full border hover:border-gray-400 transition-all duration-300 text-sm text-gray-700 bg-white px-5 py-2 outline-none focus:outline-none mx-0.5">
                لینک </a>
        </div>
        <div class="solid-buttons mt-2">
            <button
                class="rounded-md transition-all duration-300 text-sm text-white bg-purple-700 hover:bg-purple-800 px-5 py-2 outline-none focus:outline-none mx-0.5">
                بنفش </button>
            <a href="#"
                class="rounded-md transition-all duration-300 text-sm bg-lightBlue-400 hover:bg-lightBlue-500 text-white px-5 py-2 outline-none focus:outline-none mx-0.5">
                لینک </a>
            <button
                class="rounded-md transition-all duration-300 text-sm text-white bg-emerald-400 hover:bg-emerald-500 px-5 py-2 outline-none focus:outline-none mx-0.5">
                سبز </button>
            <button
                class="rounded-md transition-all duration-300 text-sm text-gray-900 bg-amber-400 hover:bg-amber-500 px-5 py-2 outline-none focus:outline-none mx-0.5">
                زرد </button>
            <button
                class="rounded-md transition-all duration-300 text-sm text-white bg-rose-500 hover:bg-rose-600 px-5 py-2 outline-none focus:outline-none mx-0.5">
                قرمز </button>
            <button
                class="rounded-md transition-all duration-300 text-sm text-gray-900 bg-gray-100 hover:bg-gray-200 px-5 py-2 outline-none focus:outline-none mx-0.5">
                روشن </button>
            <button
                class="rounded-md transition-all duration-300 text-sm text-gray-900 bg-gray-50 hover:bg-gray-100 px-5 py-2 outline-none focus:outline-none mx-0.5">
                روشن </button>
        </div>
        <div class="light-buttons mt-2">
            <button
                class="rounded-md transition-all duration-300 text-sm text-purple-700 bg-purple-50 hover:bg-purple-100 px-5 py-2 outline-none focus:outline-none mx-0.5">
                بنفش </button>
            <a href="#"
                class="rounded-md transition-all duration-300 text-sm bg-lightBlue-50 hover:bg-lightBlue-100 text-lightBlue-400 px-5 py-2 outline-none focus:outline-none mx-0.5">
                لینک </a>
            <button
                class="rounded-md transition-all duration-300 text-sm text-emerald-500 bg-emerald-50 hover:bg-emerald-100 px-5 py-2 outline-none focus:outline-none mx-0.5">
                سبز </button>
            <button
                class="rounded-md transition-all duration-300 text-sm text-amber-600 bg-amber-50 hover:bg-amber-100 px-5 py-2 outline-none focus:outline-none mx-0.5">
                زرد </button>
            <button
                class="rounded-md transition-all duration-300 text-sm text-rose-600 bg-rose-50 hover:bg-rose-100 px-5 py-2 outline-none focus:outline-none mx-0.5">
                قرمز </button>
        </div>
        <div class="outline-buttons mt-2">
            <button
                class="rounded-md transition-all duration-300 text-sm text-purple-700 hover:text-white border border-purple-700 bg-white hover:bg-purple-700 px-5 py-2 outline-none focus:outline-none mx-0.5">
                بنفش </button>

            <a href="#"
                class="rounded-md transition-all duration-300 text-sm text-lightBlue-500 hover:text-white bg-white hover:bg-lightBlue-400 border border-lightBlue-400 px-5 py-2 outline-none focus:outline-none mx-0.5">
                لینک </a>

            <button
                class="rounded-md transition-all duration-300 text-sm text-emerald-500 hover:text-white bg-white hover:bg-emerald-400 border border-emerald-400 px-5 py-2 outline-none focus:outline-none mx-0.5">
                سبز </button>
            <button
                class="rounded-md transition-all duration-300 text-sm text-amber-500 hover:text-white bg-white hover:bg-amber-400 border border-amber-400 px-5 py-2 outline-none focus:outline-none mx-0.5">
                زرد </button>
            <button
                class="rounded-md transition-all duration-300 text-sm text-rose-500 hover:text-white bg-white hover:bg-rose-500 border border-rose-500 px-5 py-2 outline-none focus:outline-none mx-0.5">
                قرمز </button>
        </div>
        <div class="spin-buttons mt-2">
            <button
                class="rounded-md transition-all duration-300 text-sm border border-gray-200 text-white bg-white px-5 py-2 outline-none focus:outline-none mx-0.5"
                disabled>
                <svg id="svg-spinner" class="animate-spin w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="48"
                    height="48" viewBox="0 0 48 48">
                    <circle cx="24" cy="4" r="4" fill="#dbdbdb" />
                    <circle cx="12.19" cy="7.86" r="3.7" fill="#dbdbdb" />
                    <circle cx="5.02" cy="17.68" r="3.4" fill="#dbdbdb" />
                    <circle cx="5.02" cy="30.32" r="3.1" fill="#dbdbdb" />
                    <circle cx="12.19" cy="40.14" r="2.8" fill="#dbdbdb" />
                    <circle cx="24" cy="44" r="2.5" fill="#dbdbdb" />
                    <circle cx="35.81" cy="40.14" r="2.2" fill="#dbdbdb" />
                    <circle cx="42.98" cy="30.32" r="1.9" fill="#dbdbdb" />
                    <circle cx="42.98" cy="17.68" r="1.6" fill="#dbdbdb" />
                    <circle cx="35.81" cy="7.86" r="1.3" fill="#dbdbdb" />
                </svg>
            </button>
            <button
                class="rounded-md transition-all duration-300 text-sm text-white bg-purple-700 px-5 py-2 outline-none focus:outline-none mx-0.5"
                disabled>
                <svg id="svg-spinner" class="animate-spin w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="48"
                    height="48" viewBox="0 0 48 48">
                    <circle cx="24" cy="4" r="4" fill="#fff" />
                    <circle cx="12.19" cy="7.86" r="3.7" fill="#fff" />
                    <circle cx="5.02" cy="17.68" r="3.4" fill="#fff" />
                    <circle cx="5.02" cy="30.32" r="3.1" fill="#fff" />
                    <circle cx="12.19" cy="40.14" r="2.8" fill="#fff" />
                    <circle cx="24" cy="44" r="2.5" fill="#fff" />
                    <circle cx="35.81" cy="40.14" r="2.2" fill="#fff" />
                    <circle cx="42.98" cy="30.32" r="1.9" fill="#fff" />
                    <circle cx="42.98" cy="17.68" r="1.6" fill="#fff" />
                    <circle cx="35.81" cy="7.86" r="1.3" fill="#fff" />
                </svg>
            </button>

            <button
                class="rounded-md transition-all duration-300 text-sm text-white bg-lightBlue-500 px-5 py-2 outline-none focus:outline-none mx-0.5">
                <svg id="svg-spinner" class="animate-spin w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="48"
                    height="48" viewBox="0 0 48 48">
                    <circle cx="24" cy="4" r="4" fill="#fff" />
                    <circle cx="12.19" cy="7.86" r="3.7" fill="#fff" />
                    <circle cx="5.02" cy="17.68" r="3.4" fill="#fff" />
                    <circle cx="5.02" cy="30.32" r="3.1" fill="#fff" />
                    <circle cx="12.19" cy="40.14" r="2.8" fill="#fff" />
                    <circle cx="24" cy="44" r="2.5" fill="#fff" />
                    <circle cx="35.81" cy="40.14" r="2.2" fill="#fff" />
                    <circle cx="42.98" cy="30.32" r="1.9" fill="#fff" />
                    <circle cx="42.98" cy="17.68" r="1.6" fill="#fff" />
                    <circle cx="35.81" cy="7.86" r="1.3" fill="#fff" />
                </svg>
            </button>

            <button
                class="rounded-full transition-all duration-300 text-sm text-white bg-emerald-500 px-5 py-2 outline-none focus:outline-none mx-0.5"
                disabled>
                <svg id="svg-spinner" class="animate-spin w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="48"
                    height="48" viewBox="0 0 48 48">
                    <circle cx="24" cy="4" r="4" fill="#fff" />
                    <circle cx="12.19" cy="7.86" r="3.7" fill="#fff" />
                    <circle cx="5.02" cy="17.68" r="3.4" fill="#fff" />
                    <circle cx="5.02" cy="30.32" r="3.1" fill="#fff" />
                    <circle cx="12.19" cy="40.14" r="2.8" fill="#fff" />
                    <circle cx="24" cy="44" r="2.5" fill="#fff" />
                    <circle cx="35.81" cy="40.14" r="2.2" fill="#fff" />
                    <circle cx="42.98" cy="30.32" r="1.9" fill="#fff" />
                    <circle cx="42.98" cy="17.68" r="1.6" fill="#fff" />
                    <circle cx="35.81" cy="7.86" r="1.3" fill="#fff" />
                </svg>
            </button>
            <button
                class="rounded-full transition-all duration-300 text-sm text-white bg-amber-500 px-5 py-2 outline-none focus:outline-none mx-0.5"
                disabled>
                <svg id="svg-spinner" class="animate-spin w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="48"
                    height="48" viewBox="0 0 48 48">
                    <circle cx="24" cy="4" r="4" fill="#000" />
                    <circle cx="12.19" cy="7.86" r="3.7" fill="#000" />
                    <circle cx="5.02" cy="17.68" r="3.4" fill="#000" />
                    <circle cx="5.02" cy="30.32" r="3.1" fill="#000" />
                    <circle cx="12.19" cy="40.14" r="2.8" fill="#000" />
                    <circle cx="24" cy="44" r="2.5" fill="#000" />
                    <circle cx="35.81" cy="40.14" r="2.2" fill="#000" />
                    <circle cx="42.98" cy="30.32" r="1.9" fill="#000" />
                    <circle cx="42.98" cy="17.68" r="1.6" fill="#000" />
                    <circle cx="35.81" cy="7.86" r="1.3" fill="#000" />
                </svg>
            </button>
            <button
                class="rounded-full transition-all duration-300 text-sm text-white bg-rose-500 px-5 py-2 outline-none focus:outline-none mx-0.5"
                disabled>
                <svg id="svg-spinner" class="animate-spin w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="48"
                    height="48" viewBox="0 0 48 48">
                    <circle cx="24" cy="4" r="4" fill="#fff" />
                    <circle cx="12.19" cy="7.86" r="3.7" fill="#fff" />
                    <circle cx="5.02" cy="17.68" r="3.4" fill="#fff" />
                    <circle cx="5.02" cy="30.32" r="3.1" fill="#fff" />
                    <circle cx="12.19" cy="40.14" r="2.8" fill="#fff" />
                    <circle cx="24" cy="44" r="2.5" fill="#fff" />
                    <circle cx="35.81" cy="40.14" r="2.2" fill="#fff" />
                    <circle cx="42.98" cy="30.32" r="1.9" fill="#fff" />
                    <circle cx="42.98" cy="17.68" r="1.6" fill="#fff" />
                    <circle cx="35.81" cy="7.86" r="1.3" fill="#fff" />
                </svg>
            </button>
        </div>
        <div class="fontawesome-buttons mt-2">
            <button
                class="rounded-md custom-shadow-twitter transition-all duration-300 text-sm text-white  bg-purple-700 hover:bg-purple-800 px-4 py-2 outline-none focus:outline-none mx-0.5">
                <i class="fa fa-twitter my-auto"></i> &nbsp;
                توییت کن
            </button>


            <button
                class="rounded-full custom-shadow-save transition-all duration-300 text-sm text-white bg-emerald-500 hover:bg-emerald-600 px-5 py-2 outline-none focus:outline-none mx-0.5"
                disabled>
                <i class="fa fa-check"></i>
                ذخیره تغییرات
            </button>
            <button
                class="rounded-full custom-shadow-commit transition-all duration-300 text-sm text-white bg-rose-500 px-5 py-2 outline-none focus:outline-none mx-0.5"
                disabled>
                <i class="fa fa-gitlab"></i>
                کامیت کن
            </button>
            <button
                class="rounded-md border border-gray-300 transition-all duration-300 text-sm text-black  bg-white px-3 py-2 outline-none focus:outline-none mx-0.5">
                <i class="fa fa-twitter my-auto"></i>
            </button>
            <button
                class="rounded-full border border-gray-300 transition-all duration-300 text-sm text-white  bg-purple-700 px-3 py-2 outline-none focus:outline-none mx-0.5">
                <i class="fa fa-linkedin my-auto"></i>
            </button>
        </div>
    </div>
    <div class="mb-4">
        {{-- save --}}
        <div class="flex m-2">
            <button
                class="text-sm  rounded-r-none focus:outline-none flex justify-center px-5 py-2 rounded cursor-pointer border">
                <div class="flex leading-5">
                    <i class="fa fa-save my-auto"></i>&nbsp;
                    ذخیره
                </div>
            </button>
            <button
                class="text-sm rounded-l-none rounded-r-none border-l-0 border-r-0 focus:outline-none flex justify-center px-5 py-2 rounded cursor-pointer border">
                <div class="flex leading-5">
                    <i class="fa fa-edit my-auto"></i>&nbsp;
                    تغییر
                </div>
            </button>
            <button
                class="text-sm rounded-l-none focus:outline-none text-gray-900 flex justify-center px-5 py-2 rounded cursor-pointer  border">
                <div class="flex leading-5">
                    <i class="fa fa-eye my-auto"></i> &nbsp;
                    نمایش
                </div>
            </button>
        </div>
        {{-- avatars --}}
        <div class="flex gap-4 items-end">
            <img src="img/8.jpg" alt="" class="w-32 h-32 rounded-full">
            <img src="img/8.jpg" alt="" class="w-28 h-28 rounded-full">
            <img src="img/8.jpg" alt="" class="w-24 h-24 rounded-full">
            <img src="img/8.jpg" alt="" class="w-20 h-20 rounded-full">
            <img src="img/8.jpg" alt="" class="w-16 h-16 rounded-full">
            <img src="img/8.jpg" alt="" class="w-12 h-12 rounded-full">
        </div>
        {{-- square avatars --}}
        <div class="flex gap-4 items-end">
            <img src="img/8.jpg" alt="" class="w-32 h-32 rounded-3xl">
            <img src="img/8.jpg" alt="" class="w-28 h-28 rounded-3xl">
            <img src="img/8.jpg" alt="" class="w-24 h-24 rounded-3xl">
            <img src="img/8.jpg" alt="" class="w-20 h-20 rounded-3xl">
            <img src="img/8.jpg" alt="" class="w-16 h-16 rounded-3xl">
            <img src="img/8.jpg" alt="" class="w-12 h-12 rounded-3xl">
        </div>
        {{-- rounded avatar dots --}}
        <div class="flex gap-4 items-end">
            <div class="relative">
                <img src="img/8.jpg" alt="" class="w-32 h-32 rounded-full">
                <div class="w-6 h-6 rounded-full bg-green-500 absolute top-2 right-2 border-2 border-white"></div>
            </div>
            <div class="relative">
                <img src="img/8.jpg" alt="" class="w-28 h-28 rounded-full">
                <div class="w-6 h-6 rounded-full bg-green-500 absolute top-2 right-2 border-2 border-white"></div>
            </div>
            <div class="relative">
                <img src="img/8.jpg" alt="" class="w-24 h-24 rounded-full">
                <div class="w-5 h-5 rounded-full bg-green-500 absolute top-1.5 right-1.5 border-2 border-white"></div>
            </div>
            <div class="relative">
                <img src="img/8.jpg" alt="" class="w-20 h-20 rounded-full">
                <div class="w-4 h-4 rounded-full bg-green-500 absolute top-1.5 right-1.5 border-2 border-white"></div>
            </div>
            <div class="relative">
                <img src="img/8.jpg" alt="" class="w-16 h-16 rounded-full">
                <div class="w-3.5 h-3.5 rounded-full bg-green-500 absolute top-1 right-1 border-2 border-white"></div>
            </div>
            <div class="relative">
                <img src="img/8.jpg" alt="" class="w-12 h-12 rounded-full">
                <div class="w-3 h-3 rounded-full bg-green-500 absolute top-1 right-1 border-2 border-white"></div>
            </div>
        </div>
        {{-- square avatar dots --}}
        <div class="flex gap-4 items-end mr-4">
            <div class="relative">
                <img src="img/8.jpg" alt="" class="w-32 h-32 rounded-3xl">
                <div class="w-6 h-6 rounded-full bg-green-500 absolute -top-1 -right-1 border-2 border-white"></div>
            </div>
            <div class="relative">
                <img src="img/8.jpg" alt="" class="w-28 h-28 rounded-3xl">
                <div class="w-6 h-6 rounded-full bg-green-500 absolute -top-1 -right-1 border-2 border-white"></div>
            </div>
            <div class="relative">
                <img src="img/8.jpg" alt="" class="w-24 h-24 rounded-3xl">
                <div class="w-5 h-5 rounded-full bg-green-500 absolute -top-1 -right-1 border-2 border-white"></div>
            </div>
            <div class="relative">
                <img src="img/8.jpg" alt="" class="w-20 h-20 rounded-2xl">
                <div class="w-4 h-4 rounded-full bg-green-500 absolute top-0 right-0 border-2 border-white"></div>
            </div>
            <div class="relative">
                <img src="img/8.jpg" alt="" class="w-16 h-16 rounded-xl">
                <div class="w-3.5 h-3.5 rounded-full bg-green-500 absolute -top-0.5 -right-0.5 border-2 border-white">
                </div>
            </div>
            <div class="relative">
                <img src="img/8.jpg" alt="" class="w-12 h-12 rounded-xl">
                <div class="w-3 h-3 rounded-full bg-green-500 absolute -top-0.5 -right-0.5 border-2 border-white"></div>
            </div>
        </div>
        {{-- accordions --}}
        <ul class="list-none mt-8 ltr w-40">
            <li class="accordion-header cursor-pointer mb-4">
                <div class="text-base accordion-title">
                    accordion header
                </div>
                <div class="accordion-content max-h-0 overflow-y-hidden transition-all duration-300">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi
                </div>
            </li>
            <li class="accordion-header cursor-pointer mb-4">
                <div class="text-base accordion-title">
                    accordion header
                </div>
                <div class="accordion-content max-h-0 overflow-y-hidden transition-all duration-300">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi
                </div>
            </li>
            <li class="accordion-header cursor-pointer mb-4">
                <div class="text-base accordion-title">
                    accordion header
                </div>
                <div class="accordion-content max-h-0 overflow-y-hidden transition-all duration-300">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi
                </div>
            </li>
        </ul>
        {{-- breadcrumbs --}}
        <ul class="list-none flex gap-4 ltr">
            <li class="text-lg cursor-pointer text-gray-500 hover:text-blue-600">home</li>
            <li class="text-lg cursor-pointer text-gray-500">/</li>
            <li class="text-lg cursor-pointer text-gray-500 hover:text-blue-600">start</li>
            <li class="text-lg cursor-pointer text-gray-500">/</li>
            <li class="text-lg cursor-pointer text-gray-500 hover:text-blue-600">here</li>
        </ul>
        {{-- breadcrumb with before --}}
        <ul class="list-none flex gap-4 ltr">
            <li class="text-lg flex cursor-pointer text-gray-500 hover:text-blue-600">home</li>
            <li class="text-lg flex custom-breadcrumb cursor-pointer text-gray-500 hover:text-blue-600">start</li>
            <li class="text-lg flex custom-breadcrumb cursor-pointer text-gray-500 hover:text-blue-600">here</li>
        </ul>
        {{-- massages --}}
        <div class="block w-full">
            <div class="relative w-3/4 h-48 py-4 px-4 bg-yellow-100 ltr border border-yellow-200 rounded-md">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus
                aenean vel elit scelerisque In egestas erat imperdiet sed euismod nisi porta lorem mollis
                <a href="#" class="absolute top-4 right-4">
                    <i class="fa fa-close"></i>
                </a>
            </div>
        </div>
        {{-- icon box --}}
        <div class="flex gap-4 items-end">
            <div class="w-32 h-32 rounded-full flex justify-center items-center bg-gray-500">
                <i class="fa fa-pencil text-blue-700 text-6xl"></i>
            </div>
            <div class="w-28 h-28 rounded-3xl flex justify-center items-center bg-gray-500">
                <i class="fa fa-pencil text-blue-700 text-5xl"></i>
            </div>
            <div class="w-24 h-24 rounded-full flex justify-center items-center bg-gray-500">
                <i class="fa fa-pencil text-blue-700 text-4xl"></i>
            </div>
            <div class="w-20 h-20 rounded-2xl flex justify-center items-center bg-gray-500">
                <i class="fa fa-pencil text-blue-700 text-3xl"></i>
            </div>
            <div class="w-16 h-16 rounded-full flex justify-center items-center bg-gray-500">
                <i class="fa fa-pencil text-blue-700 text-2xl"></i>
            </div>
            <div class="w-12 h-12 rounded-xl flex justify-center items-center bg-gray-500">
                <i class="fa fa-pencil text-blue-700 text-xl"></i>
            </div>
        </div>
        {{-- modals --}}
        modal
        {{-- center-action --}}
        <div class="ltr">
            <a href="#" class="modal-open px-4 py-2 border border-gray-500 rounded-full">center action</a>
            <div
                class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-20">
                <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

                <div
                    class="modal-container bg-white dark:bg-gray-700 max-w-screen-sm w-full mx-auto rounded shadow-lg z-50 overflow-y-auto">

                    <div
                        class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                        <span class="text-sm">(Esc)</span>
                    </div>
                    <div class="modal-content">
                        <div class="flex justify-between px-4 py-4 border-b border-gray-400">
                            <h3 class="">did you know?</h3>
                            <i class="fa fa-close modal-close cursor-pointer"></i>
                        </div>
                        <div class="pb-4">
                            <div class="flex justify-center">
                                <img src="img/huro.svg" alt="empty" class="h-44">
                            </div>
                            <div class="flex justify-center gap-4">
                                <button class="px-4 py-2 rounded-full bg-indigo-700 text-white">confirm</button>
                                <button class="px-4 py-2 rounded-full bg-gray-300">cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- progressbar --}}
        progressbar
        <div>
            <div class="relative pt-1 w-96">
                <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-pink-200">
                    <div style="width:30%"
                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500 rounded-full">
                    </div>
                </div>
            </div>
            <div class="relative pt-1 w-96">
                <div class="overflow-hidden h-4 mb-4 text-xs flex rounded-full bg-blue-200">
                    <div style="width:65%"
                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500 rounded-full">
                    </div>
                </div>
            </div>
        </div>



        {{-- checkboxes --}}
        checkboxes
        <div class="mt-4 w-28">
            <div class="checkbox w-full relative block text-gray-400 text-sm">
                <input type="checkbox" id="checkbox" name="" value="" class="w-auto opacity-5 absolute left-0" />
                <label for="checkbox" class="relative block pl-10 mb-0 font-normal cursor-pointer">
                    <span class="absolute top-2/4"> گزینه 1 </span>
                </label>
            </div>
            <div class="rounded-checkbox w-full relative block text-gray-400 text-sm">
                <input type="checkbox" id="checkbox2" name="" value="" class="w-auto opacity-5 absolute left-0" />
                <label for="checkbox2" class="relative block pl-10 mb-0 font-normal cursor-pointer">
                    <span>Checkbox</span>
                </label>
            </div>
            <div class="checkbox-primary w-full relative block text-gray-400 text-sm">
                <input type="checkbox" id="checkbox3" name="" value="" class="w-auto opacity-5 absolute left-0" />
                <label for="checkbox3" class="relative block pl-10 mb-0 font-normal cursor-pointer">
                    <span>Checkbox</span>
                </label>
            </div>
            <div class="square-checkbox-primary w-full relative block text-gray-400 text-sm">
                <input type="checkbox" id="checkbox4" name="" value="" class="w-auto opacity-5 absolute left-0" />
                <label for="checkbox4" class="relative block pl-10 mb-0 font-normal cursor-pointer">
                    <span>Checkbox</span>
                </label>
            </div>
            <div class="rounded-checkbox-primary w-full relative block text-gray-400 text-sm">
                <input type="checkbox" id="checkbox5" name="" value="" class="w-auto opacity-5 absolute left-0" />
                <label for="checkbox5" class="relative block pl-10 mb-0 font-normal cursor-pointer">
                    <span>Checkbox</span>
                </label>
            </div>
        </div>
        {{-- toggle --}}
        toggle checkbox
        <div class="custom-tags mt-4">
            <div class="flex items-center">
                <span class="text-gray-400 text-md ml-4">ذخیره</span>
                <div class="control inline-block w-12">
                    <label class="form-switch relative inline-block cursor-pointer">
                        <input type="checkbox" class="is-switch absolute opacity-0 cursor-default" checked="">
                        <i class="relative inline-block rounded-full transition-all bg-gray-200"></i>
                    </label>
                </div>
            </div>
        </div>
        {{-- <div class="mt-4">
            <div class="thin-switch is-primary block mr-4">
                <input id="thin-switch-2" class="input hidden h-10 transition-all" type="checkbox" checked="">
                <label for="thin-switch-2"
                    class="slider relative inline-block h-2 w-8 rounded-md cursor-pointer transition-all bg-gray-300"></label>
            </div>
        </div> --}}
        {{-- dropdown --}}
        <div class="my-8">
            {{-- input --}}
            <div class=" py-2">
                <label class="text-gray-500 text-sm"> مدل کاری </label>
                <div class="relative">
                    <div class="z-10 w-32 absolute border rounded-md border-gray-300">
                        <div class="custom-choose">
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
                        </div>

                        <div
                            class="custom-input-items max-h-0 absolute top-10 right-0 w-full overflow-y-hidden bg-gray-200 rounded-md transition-all duration-300 opacity-100 change">
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
                                <div class="relative flex bg-white h-10 hover:bg-gray-100">
                                    <input type="radio" name="type"
                                        class="absolute top-0 right-0 h-full w-full opacity-0 cursor-pointer" />
                                    <div class="p-3 w-full flex items-center">
                                        <span class="block font-medium text-gray-700 text-xs mr-4">
                                            گزینه دوم
                                        </span>
                                    </div>
                                </div>
                                <div class="relative flex bg-white h-10 hover:bg-gray-100">
                                    <input type="radio" name="type"
                                        class="absolute top-0 right-0 h-full w-full opacity-0 cursor-pointer" />
                                    <div class="p-3 w-full flex items-center">
                                        <span class="block font-medium text-gray-700 text-xs mr-4">
                                            گزینه سوم
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- table with flexbox --}}
        <div class="mt-64 bg-transparent w-11/12 mx-auto h-full text-center">
            <div class="title md:flex hidden py-2 text-sm text-gray-500 px-2">
                <span class="flex-1 text-right">شرکت</span>
                <span class="flex-1 text-right">نوع</span>
                <span class="flex-1 text-right">صنعت</span>
                <span class="flex-1 text-right">وضعیت</span>
                <span class="flex-1 text-right">مخاطبین</span>
                <span class="flex-1 text-left">عملیات</span>
            </div>
            {{-- body --}}
            <div class="flex flex-col md:flex-row bg-white border border-gray-400 mt-2 px-2 rounded-md py-3">
                <div class="md:flex-1 justify-between flex px-4 md:px-0 mb-2 md:mb-0">
                    <span class="flex md:absolute md:hidden text-sm text-gray-500">شرکت</span>
                    <span class=" font-medium my-auto text-gray-800">نام شرکت</span>
                </div>
                <div class="md:flex-1 justify-between flex px-4 md:px-0 mb-2 md:mb-0">
                    <span class="flex md:absolute md:hidden font-normal text-sm text-gray-500">نوع</span>
                    <span class=" text-sm text-gray-500 my-auto">استارت آپ</span>
                </div>
                <div class="md:flex-1 justify-between flex px-4 md:px-0 mb-2 md:mb-0">
                    <span class="flex md:absolute md:hidden font-normal text-sm text-gray-500">صنعت</span>
                    <span class=" text-sm text-gray-500 my-auto">نرم افزار</span>
                </div>
                <div class="md:flex-1 justify-between flex px-4 md:px-0 mb-2 md:mb-0">
                    <span class="flex md:absolute md:hidden font-normal">وضعیت</span>
                    <span class="py-2 px-4 bg-emerald-400 text-white rounded-full text-xs m-1 inline-block">فعال</span>
                </div>
                <div class="md:flex-1 justify-between flex px-4 md:px-0 mb-4 md:mb-0">
                    <span class="flex md:absolute md:hidden font-normal">مخاطبین</span>
                    <div class="w-32 relative">
                        <img src="./img/8.jpg" alt="logo"
                            class="w-8 inline-block rounded-full absolute left-0 right-auto md:left-auto md:right-0">
                        <img src="./img/8.jpg" alt="logo"
                            class="w-8 inline-block rounded-full absolute left-6 right-auto md:left-auto md:right-6">
                        <img src="./img/8.jpg" alt="logo"
                            class="w-8 inline-block rounded-full absolute left-12 right-auto md:left-auto md:right-12">
                    </div>
                </div>
                <div class="md:flex-1 justify-between md:justify-end flex  px-4 md:px-0 mb-2 md:mb-0">
                    <span class="my-auto relative p-2 rounded-full hover:bg-gray-100 transition-all cursor-pointer">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 item" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                            </svg>
                        </div>
                        <div
                            class="w-64 items border border-gray-500 rounded-md absolute left-auto right-0 md:right-auto md:left-0 bottom-full hidden">
                            <a href="#"
                                class="py-2 px-4 transition-all flex rounded-md items-center text-right bg-white z-10 hover:bg-gray-100 cursor-pointer">
                                <div class="inline-block">
                                    <i class="fa fa-eye text-lg text-gray-700"></i>
                                </div>
                                <div class="inline-block mr-4">
                                    <span class="text-sm text-gray-700 block">نمایش</span>
                                    <span class="text-xs text-gray-400 block">زیرنویس محتوای نمایش</span>
                                </div>
                            </a>
                            <a href="#"
                                class="py-2 px-4 transition-all flex rounded-md items-center text-right bg-white z-10 hover:bg-gray-100 cursor-pointer">
                                <div class="inline-block">
                                    <i class="fa fa-dollar text-lg text-gray-700"></i>
                                </div>
                                <div class="inline-block mr-4">
                                    <span class="text-sm text-gray-700 block">قرارداد</span>
                                    <span class="text-xs text-gray-400 block">بستن یک قرار داد تازه</span>
                                </div>
                            </a>
                            <a href="#"
                                class="pt-2 pb-4 px-4 mb-2 transition-all flex rounded-md items-center text-right bg-white z-10 hover:bg-gray-100 cursor-pointer">
                                <div class="inline-block">
                                    <i class="fa fa-calendar text-lg text-gray-700"></i>
                                </div>
                                <div class="inline-block mr-4">
                                    <span class="text-sm text-gray-700 block">برنامه ریزی</span>
                                    <span class="text-xs text-gray-400 block">برنامه ریزی برای ملاقات</span>
                                </div>
                            </a>
                            <hr />
                            <a href="#"
                                class="pb-2 pt-4 px-4 transition-all flex rounded-md items-center text-right bg-white z-10 hover:bg-gray-100 cursor-pointer">
                                <div class="inline-block">
                                    <i class="fa fa-trash-o text-lg text-gray-700"></i>
                                </div>
                                <div class="inline-block mr-4">
                                    <span class="text-sm text-gray-700 block">حذف</span>
                                    <span class="text-xs text-gray-400 block">حذف از لیست</span>
                                </div>
                            </a>
                        </div>
                    </span>
                    <span class="flex md:absolute md:hidden text-sm text-gray-500 my-auto">فعالیت</span>
                </div>
            </div>
        </div>
        {{-- tabs --}}
        <div>
            <div class="mt-8 pb-16 w-full">
                <ul class="list-reset flex border-b border-gray-300">
                    <li class="-mb-px mr-1">
                        <button onclick="tabs(event, 'London')"
                            class="bg-white transition-all isactive inline-block py-2 px-4 font-semibold outline-none focus:outline-none text-gray-500 hover:text-gray-600 focus:text-purple-800"
                            href="#">لندن</button>
                    </li>
                    <li class="mr-1">
                        <button onclick="tabs(event, 'Paris')"
                            class="bg-white transition-all isactive inline-block py-2 px-4 hover:text-blue-darker font-semibold outline-none focus:outline-none text-gray-500 hover:text-gray-600 focus:text-purple-800"
                            href="#">پاریس</button>
                    </li>
                    <li class="mr-1">
                        <button onclick="tabs(event, 'Tokyo')"
                            class="bg-white transition-all isactive inline-block py-2 px-4 hover:text-blue-darker font-semibold outline-none focus:outline-none text-gray-500 hover:text-gray-600 focus:text-purple-800"
                            href="#">توکیو</button>
                    </li>
                </ul>
                <div id="London"
                    class="tabcontent overflow-hidden w-0 h-0 transition-all delay-500 ease-in duration-200 text-right">
                    <p>لندن پایتخت انگلستان است.</p>
                </div>

                <div id="Paris"
                    class="tabcontent overflow-hidden w-0 h-0 transition-all delay-500 ease-in duration-200 text-right">
                    <p>پاریس پایتخت فرانسه است.</p>
                </div>

                <div id="Tokyo"
                    class="tabcontent overflow-hidden w-0 h-0 transition-all delay-500 ease-in duration-200 text-right">
                    <p>توکیو پایتخت ژاپن است.</p>
                </div>
            </div>
            <div class="mt-8 pb-16 w-full">
                <ul class="list-reset flex justify-center border-b border-gray-300">
                    <li class="-mb-px mr-1">
                        <button onclick="centerTabs(event, 'Tehran')"
                            class="centered bg-white transition-all inline-block py-2 px-4 font-semibold outline-none focus:outline-none text-gray-500 hover:text-gray-600 focus:text-purple-800"
                            href="#">تهران</button>
                    </li>
                    <li class="mr-1">
                        <button onclick="centerTabs(event, 'Karaj')"
                            class="centered bg-white transition-all inline-block py-2 px-4 hover:text-blue-darker font-semibold outline-none focus:outline-none text-gray-500 hover:text-gray-600 focus:text-purple-800"
                            href="#">کرج</button>
                    </li>
                    <li class="mr-1">
                        <button onclick="centerTabs(event, 'Ghom')"
                            class="centered bg-white transition-all inline-block py-2 px-4 hover:text-blue-darker font-semibold outline-none focus:outline-none text-gray-500 hover:text-gray-600 focus:text-purple-800"
                            href="#">قم</button>
                    </li>
                </ul>
                <div id="Tehran"
                    class="centertabs overflow-hidden w-0 h-0 transition-all delay-500 ease-in duration-200 mx-auto">
                    <p>تهران پایتخت ایران است.</p>
                </div>

                <div id="Karaj"
                    class="centertabs overflow-hidden w-0 h-0 transition-all delay-500 ease-in duration-200 mx-auto">
                    <p>کرج همسایه تهران است.</p>
                </div>

                <div id="Ghom"
                    class="centertabs overflow-hidden w-0 h-0 transition-all delay-500 ease-in duration-200 mx-auto">
                    <p>قم کنار کرج است.</p>
                </div>
            </div>
            <div class="mt-8 pb-16 w-full">
                <ul class="list-reset flex border-b border-gray-300">
                    <li class="-mb-px mr-1">
                        <button onclick="BoxedTabs(event, 'BMW')"
                            class="BoxedTab rounded-t-md bg-white transition-all inline-block py-2 px-4 font-semibold outline-none focus:outline-none text-gray-500 hover:text-gray-600 focus:text-purple-800 activeBox"
                            href="#">بی ام و</button>
                    </li>
                    <li class="mr-1">
                        <button onclick="BoxedTabs(event, 'Benz')"
                            class="BoxedTab rounded-t-md bg-white transition-all inline-block py-2 px-4 hover:text-blue-darker font-semibold outline-none focus:outline-none text-gray-500 hover:text-gray-600 focus:text-purple-800"
                            href="#">بنز</button>
                    </li>
                    <li class="mr-1">
                        <button onclick="BoxedTabs(event, 'Pride')"
                            class="BoxedTab rounded-t-md bg-white transition-all inline-block py-2 px-4 hover:text-blue-darker font-semibold outline-none focus:outline-none text-gray-500 hover:text-gray-600 focus:text-purple-800"
                            href="#">پراید</button>
                    </li>
                </ul>
                <div id="BMW" class="Boxed overflow-hidden transition-all delay-500 ease-in duration-200">
                    <p class="text-right">بی ام و محصول کشور آلمان ایت.</p>
                </div>

                <div id="Benz" class="Boxed overflow-hidden w-0 h-0 transition-all delay-500 ease-in duration-200">
                    <p class="text-right">بنز محصول آلمان است.</p>
                </div>

                <div id="Pride" class="Boxed overflow-hidden w-0 h-0 transition-all delay-500 ease-in duration-200">
                    <p class="text-right">پراید محصول خودمونه.</p>
                </div>
            </div>
            {{-- toggle tabs --}}
            <div class="mt-8 pb-16 w-full">
                <ul class="list-reset flex">
                    <li class="border border-gray-300 rounded-r-md">
                        <button onclick="toggleTabs(event, 'ronaldo')"
                            class="toggleTabs toggletabs bg-white rounded-r-md hover:bg-gray-100 transition-all inline-block py-2 px-4 font-semibold outline-none focus:outline-none text-gray-500 hover:text-gray-600"
                            href="#">رونالدو</button>
                    </li>
                    <li class="border border-gray-300 -mr-px">
                        <button onclick="toggleTabs(event, 'messi')"
                            class="toggleTabs bg-white hover:bg-gray-100 transition-all inline-block py-2 px-4 font-semibold outline-none focus:outline-none text-gray-500 hover:text-gray-600"
                            href="#">مسی</button>
                    </li>
                    <li class="border border-gray-300 rounded-l-md -mr-px">
                        <button onclick="toggleTabs(event, 'ramos')"
                            class="toggleTabs rounded-l-md bg-white hover:bg-gray-100 transition-all inline-block py-2 px-4 font-semibold outline-none focus:outline-none text-gray-500 hover:text-gray-600"
                            href="#">راموس</button>
                    </li>
                </ul>
                <div id="ronaldo" class="toggle overflow-hidden w-auto transition-all delay-500 ease-in duration-200">
                    <p class="text-right">رونالدو اهل پرتغاله.</p>
                </div>

                <div id="messi"
                    class="toggle overflow-hidden w-auto transition-all delay-500 ease-in duration-200 hidden">
                    <p class="text-right">مسی اهل آرژانتینه.</p>
                </div>

                <div id="ramos"
                    class="toggle overflow-hidden w-auto transition-all delay-500 ease-in duration-200 hidden">
                    <p class="text-right">راموس اهل اسپانیاس.</p>
                </div>
            </div>
            {{-- rounded toggle tabs --}}
            <div class="mt-8 pb-16 w-full">
                <ul class="list-reset flex">
                    <li class="border border-gray-300 rounded-r-full">
                        <button onclick="roundedtoggleTabs(event, 'shahrokh')"
                            class="roundedtoggleTabs roundedtoggletabs bg-white rounded-r-full hover:bg-gray-100 transition-all inline-block py-2 px-4 font-semibold outline-none focus:outline-none text-gray-500 hover:text-gray-600"
                            href="#">شاهرخ خان</button>
                    </li>
                    <li class="border border-gray-300 -mr-px">
                        <button onclick="roundedtoggleTabs(event, 'golshifte')"
                            class="roundedtoggleTabs bg-white hover:bg-gray-100 transition-all inline-block py-2 px-4 font-semibold outline-none focus:outline-none text-gray-500 hover:text-gray-600"
                            href="#">گلشیفته</button>
                    </li>
                    <li class="border border-gray-300 rounded-l-full -mr-px">
                        <button onclick="roundedtoggleTabs(event, 'leo')"
                            class="roundedtoggleTabs rounded-l-full bg-white hover:bg-gray-100 transition-all inline-block py-2 px-4 font-semibold outline-none focus:outline-none text-gray-500 hover:text-gray-600"
                            href="#">دیکاپریو</button>
                    </li>
                </ul>
                <div id="shahrokh"
                    class="roundedtoggle overflow-hidden w-auto transition-all delay-500 ease-in duration-200">
                    <p class="text-right">شاهرخ خان اهل هندوستانه.</p>
                </div>

                <div id="golshifte"
                    class="roundedtoggle overflow-hidden w-auto transition-all delay-500 ease-in duration-200 hidden">
                    <p class="text-right">گلشیفته اهل ایرانه.</p>
                </div>

                <div id="leo"
                    class="roundedtoggle overflow-hidden w-auto transition-all delay-500 ease-in duration-200 hidden">
                    <p class="text-right">دیکاپریو نمیدونم کجاییه.</p>
                </div>
            </div>
        </div>
        {{-- snack --}}
        snacks
        <br />
        <div>
            <div class="inline-block align-top h-10 rounded-full bg-gray-200 cursor-pointer ltr hover:shadow-lg transition border border-gray-300">
                <img src="img/8.jpg" alt="" class="h-full rounded-full inline-block">
                <span class="text-base mx-1">corporate</span>
                <i class="fa fa-close ml-2 mr-4"></i>
            </div>
            <div class="inline-block align-top h-10 rounded-full bg-white ltr cursor-pointer hover:shadow-lg transition border border-gray-300">
                <img src="img/8.jpg" alt="" class="h-full rounded-full inline-block">
                <span class="text-base mx-1">slicer</span>
                <i class="fa fa-plus ml-2 mr-4"></i>
            </div>
            <div class="inline-block align-top h-10 rounded-full bg-white ltr cursor-pointer hover:shadow-lg transition border border-gray-300">
                <div class="inline-block">
                    <div class="flex justify-center items-center h-10 w-10 border border-gray-300 rounded-full ">
                        <i class="fa fa-smile-o"></i>
                    </div>
                </div>
                <span class="text-base mx-1">slicer</span>
                <i class="fa fa-close ml-2 mr-4"></i>
            </div>
            <div class="inline-block align-top h-10 rounded-full bg-white ltr cursor-pointer hover:shadow-lg transition border border-gray-300">
                <div class="inline-block">
                    <div class="flex justify-center items-center h-10 w-10 border border-indigo-700 rounded-full ">
                        <i class="fa fa-smile-o text-indigo-700"></i>
                    </div>
                </div>
                <span class="text-base mx-1">slicer</span>
                <i class="fa fa-close ml-2 mr-4"></i>
            </div>
            <div class="inline-block align-top h-10 rounded-full bg-gray-100 ltr cursor-pointer hover:shadow-lg transition border border-gray-300">
                <div class="inline-block">
                    <div class="flex justify-center items-center h-10 w-10 border border-indigo-700 bg-indigo-700 rounded-full ">
                        <i class="fa fa-smile-o text-white"></i>
                    </div>
                </div>
                <span class="text-base mx-1">slicer</span>
                <i class="fa fa-close ml-2 mr-4"></i>
            </div>
        </div>
        badge
        <br />
        <div class="flex gap-4">
            <div class="px-2 py-1 rounded-full bg-blue-700 text-white text-base">primary</div>
            <div class="px-2 py-1 rounded-full bg-yellow-400 text-gray-900 text-base">warning</div>
            <div class="px-2 py-1 rounded-full bg-gray-100 text-red-600 text-base border border-red-600">danger</div>
        </div>
    </div>
    <script>
        function tabs(e, city) {
            let i;
            let tabcity = document.querySelectorAll('.tabcontent');
            for (i = 0; i < tabcity.length; i++) {
                tabcity[i].style.height = '0px';
                tabcity[i].style.width = '0px';
                console.log(i)
            }
            let list = document.getElementsByClassName('isactive');
            for (i = 0; i < list.length; i++) {
                list[i].className = list[i].className.replace(' active', '')
            }
            document.getElementById(city).style.height = '48px';
            document.getElementById(city).style.width = '256px';
            e.currentTarget.className += ' active'
        }

        function centerTabs(e, city) {
            let i;
            let tabcity = document.querySelectorAll('.centertabs');
            for (i = 0; i < tabcity.length; i++) {
                tabcity[i].style.height = '0px';
                tabcity[i].style.width = '0px';
                console.log(i)
            }
            let list = document.getElementsByClassName('centered');
            for (i = 0; i < list.length; i++) {
                list[i].className = list[i].className.replace(' active', '')
            }
            document.getElementById(city).style.height = '48px';
            document.getElementById(city).style.width = '256px';
            e.currentTarget.className += ' active'
        }

        function BoxedTabs(e, city) {
            let i;
            let tabcity = document.querySelectorAll('.Boxed');
            for (i = 0; i < tabcity.length; i++) {
                tabcity[i].style.height = '0px';
                tabcity[i].style.width = '0px';
                console.log(i)
            }
            let list = document.getElementsByClassName('BoxedTab');
            for (i = 0; i < list.length; i++) {
                list[i].className = list[i].className.replace(' activeBox', '')
            }
            document.getElementById(city).style.height = '48px';
            document.getElementById(city).style.width = '256px';
            e.currentTarget.className += ' activeBox'
        }

        function toggleTabs(e, city) {
            let i;
            let tabcity = document.querySelectorAll('.toggle');
            for (i = 0; i < tabcity.length; i++) {
                tabcity[i].style.display = 'none';
                console.log(i)
            }
            let list = document.getElementsByClassName('toggleTabs');
            for (i = 0; i < list.length; i++) {
                list[i].className = list[i].className.replace(' toggletabs', '')
            }
            document.getElementById(city).style.display = 'block';
            e.currentTarget.className += ' toggletabs'
        }

        function roundedtoggleTabs(e, city) {
            let i;
            let tabcity = document.querySelectorAll('.roundedtoggle');
            for (i = 0; i < tabcity.length; i++) {
                tabcity[i].style.display = 'none';
                console.log(i)
            }
            let list = document.getElementsByClassName('roundedtoggleTabs');
            for (i = 0; i < list.length; i++) {
                list[i].className = list[i].className.replace(' roundedtoggletabs', '')
            }
            document.getElementById(city).style.display = 'block';
            e.currentTarget.className += ' roundedtoggletabs'
        }
        // accordion
        const accordions = document.querySelectorAll('.accordion-header')
        for (let i = 0; i < accordions.length; i++) {
            accordions[i].addEventListener('click', function() {
                accordions[i].classList.toggle('is-active')
            })
        }
        // select input
        const custom_select = document.querySelector('.custom-choose')
        const custom_choose = document.querySelector('.custom-choose')
        custom_select.addEventListener('click', function() {
            custom_choose.classList.toggle('show-items')
        })
        // modal
        function toggleModal() {
            const body = document.querySelector('body')
            const modal = document.querySelector('.modal')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
        }
        const openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function(event) {
                event.preventDefault()
                toggleModal()
            })
        }

        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)

        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', toggleModal)
        }

        document.onkeydown = function(evt) {
            evt = evt || window.event
            var isEscape = false
            if ("key" in evt) {
                isEscape = (evt.key === "Escape" || evt.key === "Esc")
            } else {
                isEscape = (evt.keyCode === 27)
            }
            if (isEscape && document.body.classList.contains('modal-active')) {
                toggleModal()
            }
        };

    </script>
</body>

</html>
