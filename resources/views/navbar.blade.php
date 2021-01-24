
@section('navbar')
<div class="md:mr-80 bg-gray-light h-full">
    <div class="px-8 flex flex-row-reverse">
        <div class="md:px-16 xs:px-4 w-full mt-14 md:mt-0">
            <div class="header flex justify-between flex-row-reverse mx-auto w-11/12 my-4">
                <div class="">
                    <span
                        class="relative inline-block ml-4 items-center transition-all cursor-pointer bg-transparent hover:bg-white rounded-full w-8 h-8">
                        <span class="custom-dark"></span>
                    </span>

                    <span
                        class="relative inline-block ml-4 items-center transition-all cursor-pointer rounded-full bg-transparent hover:bg-white w-8 h-8">
                        <a href="#" class="">
                            <img src="./img/logo.svg" width="16" height="16" alt="flag" class="mx-auto mt-2" />
                        </a>
                    </span>
                    <span
                        class="relative xs:hidden md:inline-block items-center ml-4 transition-all cursor-pointer rounded-full bg-transparent hover:bg-white w-8 h-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mt-2" width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                        <span class="animate-ping"></span>
                    </span>

                    <span
                        class="relative inline-block items-center transition-all cursor-pointer rounded-full bg-transparent hover:bg-white w-8 h-8">
                        <a href="#" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mt-2" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                        </a>
                    </span>
                </div>
                <div class="items-center flex flex-row-reverse">
                    <div class="inline-block text-xl md:text-2xl mr-2 text-gray-700">
                        @yield('dashboard')
                    </div>
                    <div class="md:inline-block relative w-7 h-7 cursor-pointer xs:hidden">
                        <span class="w-6 h-0.5 bg-indigo-700 absolute right-0 top-1"></span>
                        <span class="w-4 h-0.5 bg-indigo-700 absolute right-0 top-3"></span>
                        <span class="w-6 h-0.5 bg-indigo-700 absolute top-5 right-0"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection