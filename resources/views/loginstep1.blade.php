@extends('login')

@section('loginStep1')
    <div class="w-full h-43 relative">
        <div class="w-full max-w-25 mx-auto h-32 mt-14">
            <div class="">
                <h2 class="text-3xl text-center">
                    خوش آمدید
                </h2>
                <p class="text-base text-center text-gray-600 mb-2">
                    لطفا به حساب خود وارد شوید
                </p>
                <a href="#" class="text-sm text-center block">
                    من هنوز حساب ندارم
                </a>
            </div>
            <div class="bg-white p-50 rounded-md my-6 w-11/12 md:w-full">
                <div class="">
                    <form action="">
                        <div class="relative rounded-md mt-2 border border-gray-200">
                            <input type="text"
                                class="h-10 ltr inline-block w-11/12 outline-none focus:outline-none bg-transparent"
                                placeholder="0912 - *******" />
                            <span class="inline-block">
                                <i class="fa fa-user-o text-gray-400"></i>
                            </span>
                        </div>
                        
                        <div
                            class="relative rounded-md mt-8 border border-gray-200 bg-purple-700 hover:bg-purple-600 transition-all hover:shadow-xl">
                            <button type="submit"
                                class="block h-10 w-full outline-none focus:outline-none text-white">ورود</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex">
                <a href="#" class="text-gray-500 mx-auto text--sm">فراموشی رمز عبور؟</a>
            </div>
        </div>
    </div>
@endsection
