@extends('welcome')

@section('content')
<div class="md:mr-20 bg-purple-50">
    <div class="w-full flex flex-row-reverse">
        <div class="px-16 w-full mt-14 md:mt-0">
            <div class="dashboard my-7">
                <div class="dashboard-header flex flex-row-reverse">
                    <div class="inline-block w-16">
                        <img src="./img/8.jpg" alt="logo" width="70" height="70" class="rounded-full">
                    </div>
                    <div class="greeting inline-block mr-4">
                        <h3 class="text-2xl text-gray-700 text-right"> خوش اومدی کاربر </h3>
                        <p class="text-right peygam text-base text-gray-400"> ما خیلی خوشحالیم که شما را دوباره در صفحه داشبورد می بینیم. </p>
                    </div>
                    <!-- greeting btns -->
                    <div class="flex items-center mr-auto">
                        <button class="px-5 py-2 bg-purple-700 mr-2 text-white focus:outline-none text-sm rounded"> مدیریت فروشگاه </button>
                        <button class="px-5 py-2 text-sm bg-white mr-2 rounded border focus:outline-none hover:border-gray-400 transition-all text-gray-700"> مشاهده گزارشات </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection