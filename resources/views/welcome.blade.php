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
    <div class="buttons w-full h-screen bg-white">
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
        <div class="mt-4">
            <label class="inline-flex items-center gap-4">
                <input type="radio" class="form-radio hover:shadow-xl w-5 h-5 border border-gray-300" name="accountType"
                    value="personal">
                <span class="ml-2">Personal</span>
            </label>
        </div>
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
        <div class="custom-tags mt-4">
            <div class="flex items-center">
                <span class="text-gray-400 text-md ml-4">ذخیره</span>
                <div class="control inline-block w-12">
                    <label class="form-switch is-primary relative inline-block cursor-pointer">
                        <input type="checkbox" class="is-switch absolute opacity-0 cursor-default" checked="">
                        <i class="relative inline-block rounded-full transition-all bg-gray-200"></i>
                    </label>
                </div>
            </div>
        </div>
        <div class="mt-8">
            radio button
            <div class="relative">
                <label for="" class="relative cursor-pointer p-4 inline-block">
                    input
                </label>
                <label for="" class=""></label>
            </div>
        </div>
        <div class="my-8">
            {{-- input --}}
            <div class="select py-2">
                <label class="text-gray-500 text-sm"> مدل کاری </label>
                <div class="relative">
                    <div class="z-10 w-32 absolute border rounded-md border-gray-300">
                        <div class="relative flex items-center rounded-md pr-2.5 pl-10 h-9 w-full cursor-pointer bg-white">
                            <span class="text-sm relative top-0"> گزینه </span>
                        </div>
                        <div class="absolute top-0 left-0 w-9 h-9 flex justify-center items-center transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                        <div class="absolute top-10 right-0 w-full overflow-y-auto bg-white border border-gray-400 rounded-md transition-all opacity-100 change">
                            <div class="relative h-full w-full bg-whiite">
                                <div class="relative flex bg-white h-10 hover:bg-gray-100">
                                    <input type="radio" name="type" class="absolute top-0 right-0 h-full w-full opacity-0 cursor-pointer" />
                                    <div class="p-3 w-full flex items-center">
                                        <span class="block font-medium text-gray-700 text-xs mr-4">
                                            گزینه اول
                                        </span>
                                    </div>
                                </div>
                                <div class="relative flex bg-white h-10 hover:bg-gray-100">
                                    <input type="radio" name="type" class="absolute top-0 right-0 h-full w-full opacity-0 cursor-pointer" />
                                    <div class="p-3 w-full flex items-center">
                                        <span class="block font-medium text-gray-700 text-xs mr-4">
                                            گزینه دوم
                                        </span>
                                    </div>
                                </div>
                                <div class="relative flex bg-white h-10 hover:bg-gray-100">
                                    <input type="radio" name="type" class="absolute top-0 right-0 h-full w-full opacity-0 cursor-pointer" />
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
    </div>
</body>

</html>
