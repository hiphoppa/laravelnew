@extends('welcome')

@section('dashboard')
    کالا
@endsection

@section('emptylist')
    <div class="px-16 w-full mt-4">
        <div class="flex justify-between">
            <div class="">
                <div class="flex m-2">
                    <button class="rounded-r-none bg-white focus:outline-none flex justify-center px-4 py-2 rounded text-md hover:bg-purple-100 cursor-pointer 
                        border duration-200 ease-in-out transition">
                        <div class="flex leading-5 font-normal">
                            <i class="fa fa-check"></i>&nbsp;
                            <span class="md:block xs:hidden"> ارتقاع </span>
                        </div>
                    </button>
                    <button class="trounded-l-none rounded-r-none bg-white border-l-0 border-r-0 focus:outline-none text-md hover:bg-purple-100 flex justify-center px-4 py-2 rounded cursor-pointer 
                    border duration-200 ease-in-out transition">
                        <div class="flex leading-5 font-normal">
                            <i class="fa fa-edit"></i>&nbsp;
                            <span class="md:block xs:hidden"> ویرایش </span> 
                        </div>
                    </button>
                    <button class="rounded-l-none focus:outline-none bg-white flex justify-center px-4 py-2 rounded cursor-pointer hover:bg-purple-100
                        border duration-200 ease-in-out transition">
                        <div class="flex leading-5 font-normal">
                            <i class="fa fa-arrow-right"></i>&nbsp;
                            <span class="md:block xs:hidden"> انتقال </span> 
                        </div>
                    </button>
                </div>
            </div>
            <div class="my-auto">
                <button
                    class="bg-purple-700 hover:bg-purple-800 transition-all text-white px-4 py-2 rounded-md xs:text-xs md:text-sm focus:outline-none flex">
                    <i class="fa fa-plus"></i> &nbsp;
                    افزودن کاربر
                </button>
            </div>
        </div>
        <div class="mt-4">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y rtl rounded-md overflow-hidden">
                                <thead class="bg-white">
                                    <tr class="">
                                        <th scope="col"
                                            class="px-2 w-6 py-3 border border-gray-200 text-left text-xs font-medium text-gray-500 relative">
                                            <span
                                                class="w-6 h-6 bg-white flex rounded-full border border-gray-300 cursor-pointer"></span>
                                        </th>
                                        <th scope="col"
                                            class="px-2 py-3 min-w-6 w-box text-center border border-gray-200 text-sm md:text-md font-bold text-gray-800">
                                            تصویر کالا
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border min-w-6 w-48 border-gray-200 text-sm md:text-md font-bold text-gray-800">
                                            <div class="flex justify-between">
                                                <span class="">نام کالا</span>
                                                <span class="">
                                                    <i class="fa fa-angle-double-down text-gray-500"></i>
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border min-w-6 w-48 border-gray-200 text-sm md:text-md font-bold text-gray-800">
                                            <div class="flex justify-between">
                                                <span class="">کد کالا</span>
                                                <span class="">
                                                    <i class="fa fa-angle-double-down text-gray-500"></i>
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-2 py-3 border w-price border-gray-200 text-sm md:text-md font-bold text-gray-800">
                                            <div class="flex justify-between">
                                                <span class="">قیمت</span>
                                                <span class="">
                                                    <i class="fa fa-angle-double-down text-gray-500"></i>
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-1 py-3 w-24 text-center border border-gray-200 text-sm md:text-md font-bold text-gray-800">
                                            موجودی
                                        </th>
                                        <th scope="col"
                                            class="px-2 py-3 min-w-6 w-52 text-center border border-gray-200 text-sm md:text-md font-bold text-gray-800">
                                            دسته بندی
                                        </th>
                                        <th scope="col"
                                            class="px-6 w-empty py-3 text-center border border-gray-200 text-sm md:text-md font-bold text-gray-800">
                                            {{-- ویرایش --}}
                                        </th>
                                    </tr>

                                    <tr class="h-12 bg-gray-100">
                                        <td class=""></td>
                                        <td class=""></td>
                                        <td class="px-4 py-4">
                                            <div class="relative ">
                                                <span
                                                    class="z-10 h-full leading-snug font-normal right-0 text-center text-gray-500 absolute bg-transparent rounded text-base items-center justify-center w-8 py-3">
                                                    <i class="fa fa-search"></i>
                                                </span>
                                                <input type="text" placeholder="پیدا کردن کالا"
                                                    class="py-3 pr-10 placeholder-gray-400 text-gray-700 relative bg-white rounded text-sm outline-none focus:outline-none focus:shadow-outline w-full" />
                                            </div>
                                        </td>
                                        <td class="px-4 py-4">
                                            <div class="relative ">
                                                <span
                                                    class="z-10 h-full leading-snug font-normal right-0 text-center text-gray-500 absolute bg-transparent rounded text-base items-center justify-center w-8 py-3">
                                                    <i class="fa fa-search"></i>
                                                </span>
                                                <input type="text" placeholder="پیدا کردن کالا"
                                                    class="py-3 pr-10 placeholder-gray-400 text-gray-700 relative bg-white rounded text-sm outline-none focus:outline-none focus:shadow-outline w-full" />
                                            </div>
                                        </td>
                                        <td class=""></td>
                                        <td class=""></td>
                                        <td class="px-4 py-4">
                                            <div class="relative ">
                                                <select name="" id=""
                                                    class="w-full text-center md:pr-2.5 outline-none h-11 cursor-pointer focus:outline-none text-gray-600">
                                                    <option value="بر اساس" class="text-center">
                                                        بر اساس
                                                    </option>
                                                    <option value="قیمت">
                                                        قیمت
                                                    </option>
                                                    <option value="موجود">
                                                        موجود
                                                    </option>
                                                </select>
                                            </div>
                                        </td>
                                        <td class=""></td>
                                    </tr>
                                </thead>
                            </table>
                            <div class="w-full bg-white border border-gray-200">
                                <img src="./img/empty.svg" alt="empty" class="max-w-empty mx-auto" />
                            </div>
                        </div>
                        {{-- pagination --}}
                <div class="flex rtl justify-between pb-8 mt-4">
                    <div class="text-md text-gray-600">
                        نمایش
                        <span class=""> 1 </span>
                        تا
                        <span class=""> 10 </span>
                        از
                        <span class=""> 16 </span>
                        محصول
                    </div>
                    <div class="">
                        <ul class="flex gap-2 list-none">
                            <li class="bg-purple-700 text-white rounded-full flex w-9 h-9">
                                <i class="fa fa-angle-right mx-auto my-auto"></i>
                            </li>
                            <li class="bg-purple-700 text-white rounded-full flex w-9 h-9">
                                <a href="#" class="mx-auto my-auto">1</a>
                            </li>
                            <li class="bg-purple-700 text-white rounded-full flex w-9 h-9">
                                <a href="#" class="mx-auto my-auto">2</a>
                            </li>
                            <li class="bg-purple-700 text-white rounded-full flex w-9 h-9">
                                <i class="fa fa-angle-left mx-auto my-auto"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
