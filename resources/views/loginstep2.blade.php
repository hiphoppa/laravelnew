@extends('login')

@section('loginStep2')
    <div class="w-full h-43 relative">
        <div class="w-full max-w-25 mx-auto h-32 mt-14">
            <div class="">
                <h2 class="text-3xl text-center">
                    کد تایید را وارد کنید
                </h2>
            </div>
            <div class="bg-white p-50 rounded-md my-6 w-11/12 md:w-full">
                <div class="">
                    <form action="">
                        <div class="relative rounded-md mt-2 border border-gray-200">
                            <input type="text"
                                class="h-10 ltr inline-block w-11/12 outline-none focus:outline-none bg-transparent"
                                placeholder="username" />
                            <span class="inline-block">
                                <i class="fa fa-user-o text-gray-400"></i>
                            </span>
                        </div>
                        
                        <div class="relative rounded-md mt-2 border border-gray-200">
                            <input type="text"
                                class="h-10 ltr inline-block w-11/12 outline-none focus:outline-none bg-transparent"
                                placeholder="password" />
                            <span class="inline-block">
                                <i class="fa fa-lock text-gray-400"></i>
                            </span>
                        </div>
                        <div class="flex items-center mt-4 rtl">
                            <div class="w-16 h-6 flex items-center ml-4 my-3 bg-gray-300 rounded-full p-1 duration-300 ease-in-out"
                                :class="{ 'bg-green-400': toggleActive}">
                                <div class="bg-white w-6 h-6 rounded-full shadow-md transform duration-300 ease-in-out"
                                    :class="{ 'translate-x-6': toggleActive,}"></div>
                            </div>
                            <h2 class="text-sm text-gray-600">منو ذخیره کن</h2>
                        </div>
                        <div
                            class="relative rounded-md mt-8 border border-gray-200 bg-purple-700 hover:bg-purple-600 transition-all hover:shadow-xl">
                            <button type="submit"
                                class="block h-10 w-full outline-none focus:outline-none text-white">ورود</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- <div class="flex">
                <a href="#" class="text-gray-500 mx-auto text--sm">فراموشی رمز عبور؟</a>
            </div> --}}
        </div>
    </div>
@endsection
