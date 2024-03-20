<!doctype html>
<html lang="Fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
    <title>CodeLino</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-Kalameh">
    <header>
        <section>
            <nav class="bg-gray-50 dark:bg-[#082F49]">
                <div class="container mx-auto flex flex-wrap items-center justify-between py-4">
                    <div class="xl:hidden">
                        <img src="{{ asset('assets/images/logo.svg') }}" alt="CodeLino">
                    </div>
                    <div class="flex xl:order-2 space-x-3 xl:space-x-0 rtl:space-x-reverse xl:hidden">
                        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg xl:hidden bg-gray-100 dark:bg-gray-500 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-50 dark:hover:bg-gray-300 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5 text-sky-400 dark:text-sky-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                            </svg>
                        </button>
                    </div>
                    <ul class="w-full xl:flex xl:flex-row hidden" id="navbar-default">
                        <li class="hidden xl:block order-1">
                            <img src="{{ asset('assets/images/logo.svg') }}" alt="CodeLino">
                        </li>
                        <li class="order-2 m-auto">
                            <ul class="xl:flex">
                                <li>
                                    <a href="#" class="block text-black hover:text-sky-400 dark:text-white mx-5">
                                        صفحه اصلی
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-black hover:text-sky-400 dark:text-white mx-5">
                                        فروشگاه
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-black hover:text-sky-400 dark:text-white mx-5">
                                        نمونه کارها
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-black hover:text-sky-400 dark:text-white mx-5">
                                        تیکه کد
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-black hover:text-sky-400 dark:text-white mx-5">
                                        وبلاگ
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-black hover:text-sky-400 dark:text-white mx-5">
                                        درباره من
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="my-2 xl:my-auto order-3">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center " type="button">
                                <i class="fa-duotone fa-sun-bright text-black dark:text-white fa-2x"></i>
                            </button>
                            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-34 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <i class="fa-duotone fa-sun-bright"></i>
                                            <span>روشن</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <i class="fa-regular fa-moon-stars"></i>
                                            <span>تاریک</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <i class="fa-solid fa-computer-speaker"></i>
                                            <span>سیستم</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="my-auto text-center order-4">
                            <a href="#" class="bg-sky-400 text-white rounded-lg p-2">
                                ورود / ثبت نام
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
    </header>
    <main class="bg-gray-50 dark:bg-[#082F49]">
        <section>
            <div class="container mx-auto text-center pt-24">
                <h1 class="text-6xl py-10 font-bold text-sky-950 dark:text-sky-50">
                    خدمات <span class="text-sky-400">من</span>
                </h1>
                <p class="w-3/4 mx-auto text-justify text-2xl leading-relaxed text-black dark:text-sky-50">
                    ممکنه برات پیش اومده باشه که فرصت کافی نداشته باشی تا بخوای سایت رو راه اندازی کنی. بنابراین میتونی از اینجا هر سایتی خواستی برای خودت داشته باشی
                </p>
            </div>
        </section>
        <section>
            <div class="container mx-auto pt-24 grid gap-2 grid-cols-1 xl:grid-cols-2">
                <div class="pt-20 me-6 text-center xl:text-start">
                    <h1 class="text-4xl my-12 font-bold text-sky-950 dark:text-sky-50">
                        اسکریپت های <span class="text-sky-400">کاربردی</span>
                    </h1>
                    <p class="text-justify text-xl leading-relaxed text-black dark:text-sky-50">
                        اگه حوصله نوشتن بعضی کدها رو نداری، میتونی از اینجا کدهایی که لازم داری رو پیدا کنی و همونطور که میخوای ازشون استفاده کنی یا گسترشش بدی
                    </p>
                    <a href="#" class="bg-sky-400 text-white rounded-lg p-2 mt-8 text-2xl inline-block mb-4 xl:mb-0">
                        ادامه مطلب
                    </a>
                </div>
                <div class="grid gap-2 grid-cols-1 md:grid-cols-2 ms-6">
                    <div class="bg-white rounded-2xl mt-32">
                        <div class="font-Yekan m-2 border-b">
                            <a href="#">
                                <img src="{{ asset('assets/images/card.svg') }}" alt="" class="rounded-t-lg w-11/12 mx-auto -mt-32">
                            </a>
                            <h5 class="text-xs pt-3">
                                اسکریپت پاک کردن دست جمعی محصولات
                            </h5>
                            <p class="text-xs text-gray-600 pt-1">
                                نوشته شده توسط: دانیال صدیق پور
                            </p>
                            <div class="flex justify-between text-xs py-2">
                                <div>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        پی اچ پی
                                    </p>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        جاوا اسکریپت
                                    </p>
                                </div>
                                <div class="mt-auto">
                                    <a href="#" class="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between m-2 pb-2 border-b">
                            <i class="fa-light fa-basket-shopping-simple my-auto p-2 text-sky-600 bg-[#D5EFF9] rounded"></i>
                            <p>
                            <span>
                                2.000.000
                            </span>
                                تومان
                            </p>
                        </div>
                        <div class="grid gap-2 grid-cols-2 m-2 text-xs">
                            <div class="flex me-2">
                                <i class="fa-light fa-eye my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد مشاهده: 122 نفر
                                </p>
                            </div>
                            <div class="flex ms-2">
                                <i class="fa-light fa-arrow-down-to-arc my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد دانلود 105 نفر
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl mt-32 ">
                        <div class="font-Yekan m-2 border-b">
                            <a href="#">
                                <img src="{{ asset('assets/images/card.svg') }}" alt="" class="rounded-t-lg w-11/12 mx-auto -mt-32">
                            </a>
                            <h5 class="text-xs pt-3">
                                اسکریپت پاک کردن دست جمعی محصولات
                            </h5>
                            <p class="text-xs text-gray-600 pt-1">
                                نوشته شده توسط: دانیال صدیق پور
                            </p>
                            <div class="flex justify-between text-xs py-2">
                                <div>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        پی اچ پی
                                    </p>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        جاوا اسکریپت
                                    </p>
                                </div>
                                <div class="mt-auto">
                                    <a href="#" class="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between m-2 pb-2 border-b">
                            <i class="fa-light fa-basket-shopping-simple my-auto p-2 text-sky-600 bg-[#D5EFF9] rounded"></i>
                            <p>
                            <span>
                                2.000.000
                            </span>
                                تومان
                            </p>
                        </div>
                        <div class="grid gap-2 grid-cols-2 m-2 text-xs">
                            <div class="flex me-2">
                                <i class="fa-light fa-eye my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد مشاهده: 122 نفر
                                </p>
                            </div>
                            <div class="flex ms-2">
                                <i class="fa-light fa-arrow-down-to-arc my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد دانلود 105 نفر
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl mt-32">
                        <div class="font-Yekan m-2 border-b">
                            <a href="#">
                                <img src="{{ asset('assets/images/card.svg') }}" alt="" class="rounded-t-lg w-11/12 mx-auto -mt-32">
                            </a>
                            <h5 class="text-xs pt-3">
                                اسکریپت پاک کردن دست جمعی محصولات
                            </h5>
                            <p class="text-xs text-gray-600 pt-1">
                                نوشته شده توسط: دانیال صدیق پور
                            </p>
                            <div class="flex justify-between text-xs py-2">
                                <div>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        پی اچ پی
                                    </p>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        جاوا اسکریپت
                                    </p>
                                </div>
                                <div class="mt-auto">
                                    <a href="#" class="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between m-2 pb-2 border-b">
                            <i class="fa-light fa-basket-shopping-simple my-auto p-2 text-sky-600 bg-[#D5EFF9] rounded"></i>
                            <p>
                            <span>
                                2.000.000
                            </span>
                                تومان
                            </p>
                        </div>
                        <div class="grid gap-2 grid-cols-2 m-2 text-xs">
                            <div class="flex me-2">
                                <i class="fa-light fa-eye my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد مشاهده: 122 نفر
                                </p>
                            </div>
                            <div class="flex ms-2">
                                <i class="fa-light fa-arrow-down-to-arc my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد دانلود 105 نفر
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl mt-32">
                        <div class="font-Yekan m-2 border-b">
                            <a href="#">
                                <img src="{{ asset('assets/images/card.svg') }}" alt="" class="rounded-t-lg w-11/12 mx-auto -mt-32">
                            </a>
                            <h5 class="text-xs pt-3">
                                اسکریپت پاک کردن دست جمعی محصولات
                            </h5>
                            <p class="text-xs text-gray-600 pt-1">
                                نوشته شده توسط: دانیال صدیق پور
                            </p>
                            <div class="flex justify-between text-xs py-2">
                                <div>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        پی اچ پی
                                    </p>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        جاوا اسکریپت
                                    </p>
                                </div>
                                <div class="mt-auto">
                                    <a href="#" class="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between m-2 pb-2 border-b">
                            <i class="fa-light fa-basket-shopping-simple my-auto p-2 text-sky-600 bg-[#D5EFF9] rounded"></i>
                            <p>
                            <span>
                                2.000.000
                            </span>
                                تومان
                            </p>
                        </div>
                        <div class="grid gap-2 grid-cols-2 m-2 text-xs">
                            <div class="flex me-2">
                                <i class="fa-light fa-eye my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد مشاهده: 122 نفر
                                </p>
                            </div>
                            <div class="flex ms-2">
                                <i class="fa-light fa-arrow-down-to-arc my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد دانلود 105 نفر
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto pt-24 grid gap-2 grid-cols-1 xl:grid-cols-2">
                <div class="grid gap-2 grid-cols-1 md:grid-cols-2 me-6 order-2 xl:order-1">
                    <div class="bg-white rounded-2xl mt-32">
                        <div class="font-Yekan m-2 border-b">
                            <a href="#">
                                <img src="{{ asset('assets/images/card.svg') }}" alt="" class="rounded-t-lg w-11/12 mx-auto -mt-32">
                            </a>
                            <h5 class="text-xs pt-3">
                                اسکریپت پاک کردن دست جمعی محصولات
                            </h5>
                            <p class="text-xs text-gray-600 pt-1">
                                نوشته شده توسط: دانیال صدیق پور
                            </p>
                            <div class="flex justify-between text-xs py-2">
                                <div>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        پی اچ پی
                                    </p>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        جاوا اسکریپت
                                    </p>
                                </div>
                                <div class="mt-auto">
                                    <a href="#" class="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between m-2 pb-2 border-b">
                            <i class="fa-light fa-basket-shopping-simple my-auto p-2 text-sky-600 bg-[#D5EFF9] rounded"></i>
                            <p>
                            <span>
                                2.000.000
                            </span>
                                تومان
                            </p>
                        </div>
                        <div class="grid gap-2 grid-cols-2 m-2 text-xs">
                            <div class="flex me-2">
                                <i class="fa-light fa-eye my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد مشاهده: 122 نفر
                                </p>
                            </div>
                            <div class="flex ms-2">
                                <i class="fa-light fa-arrow-down-to-arc my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد دانلود 105 نفر
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl mt-32 ">
                        <div class="font-Yekan m-2 border-b">
                            <a href="#">
                                <img src="{{ asset('assets/images/card.svg') }}" alt="" class="rounded-t-lg w-11/12 mx-auto -mt-32">
                            </a>
                            <h5 class="text-xs pt-3">
                                اسکریپت پاک کردن دست جمعی محصولات
                            </h5>
                            <p class="text-xs text-gray-600 pt-1">
                                نوشته شده توسط: دانیال صدیق پور
                            </p>
                            <div class="flex justify-between text-xs py-2">
                                <div>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        پی اچ پی
                                    </p>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        جاوا اسکریپت
                                    </p>
                                </div>
                                <div class="mt-auto">
                                    <a href="#" class="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between m-2 pb-2 border-b">
                            <i class="fa-light fa-basket-shopping-simple my-auto p-2 text-sky-600 bg-[#D5EFF9] rounded"></i>
                            <p>
                            <span>
                                2.000.000
                            </span>
                                تومان
                            </p>
                        </div>
                        <div class="grid gap-2 grid-cols-2 m-2 text-xs">
                            <div class="flex me-2">
                                <i class="fa-light fa-eye my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد مشاهده: 122 نفر
                                </p>
                            </div>
                            <div class="flex ms-2">
                                <i class="fa-light fa-arrow-down-to-arc my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد دانلود 105 نفر
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl mt-32">
                        <div class="font-Yekan m-2 border-b">
                            <a href="#">
                                <img src="{{ asset('assets/images/card.svg') }}" alt="" class="rounded-t-lg w-11/12 mx-auto -mt-32">
                            </a>
                            <h5 class="text-xs pt-3">
                                اسکریپت پاک کردن دست جمعی محصولات
                            </h5>
                            <p class="text-xs text-gray-600 pt-1">
                                نوشته شده توسط: دانیال صدیق پور
                            </p>
                            <div class="flex justify-between text-xs py-2">
                                <div>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        پی اچ پی
                                    </p>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        جاوا اسکریپت
                                    </p>
                                </div>
                                <div class="mt-auto">
                                    <a href="#" class="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between m-2 pb-2 border-b">
                            <i class="fa-light fa-basket-shopping-simple my-auto p-2 text-sky-600 bg-[#D5EFF9] rounded"></i>
                            <p>
                            <span>
                                2.000.000
                            </span>
                                تومان
                            </p>
                        </div>
                        <div class="grid gap-2 grid-cols-2 m-2 text-xs">
                            <div class="flex me-2">
                                <i class="fa-light fa-eye my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد مشاهده: 122 نفر
                                </p>
                            </div>
                            <div class="flex ms-2">
                                <i class="fa-light fa-arrow-down-to-arc my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد دانلود 105 نفر
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl mt-32">
                        <div class="font-Yekan m-2 border-b">
                            <a href="#">
                                <img src="{{ asset('assets/images/card.svg') }}" alt="" class="rounded-t-lg w-11/12 mx-auto -mt-32">
                            </a>
                            <h5 class="text-xs pt-3">
                                اسکریپت پاک کردن دست جمعی محصولات
                            </h5>
                            <p class="text-xs text-gray-600 pt-1">
                                نوشته شده توسط: دانیال صدیق پور
                            </p>
                            <div class="flex justify-between text-xs py-2">
                                <div>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        پی اچ پی
                                    </p>
                                    <p class="text-sky-700 bg-[#D5EFF9] p-1 inline-block rounded-lg">
                                        جاوا اسکریپت
                                    </p>
                                </div>
                                <div class="mt-auto">
                                    <a href="#" class="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-star text-amber-400"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between m-2 pb-2 border-b">
                            <i class="fa-light fa-basket-shopping-simple my-auto p-2 text-sky-600 bg-[#D5EFF9] rounded"></i>
                            <p>
                            <span>
                                2.000.000
                            </span>
                                تومان
                            </p>
                        </div>
                        <div class="grid gap-2 grid-cols-2 m-2 text-xs">
                            <div class="flex me-2">
                                <i class="fa-light fa-eye my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد مشاهده: 122 نفر
                                </p>
                            </div>
                            <div class="flex ms-2">
                                <i class="fa-light fa-arrow-down-to-arc my-auto pe-2 text-sky-500"></i>
                                <p class="my-auto">
                                    تعداد دانلود 105 نفر
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-20 ms-6 order-1 xl:order-2 text-center xl:text-start mb-4 xl:mb-0">
                    <h1 class="text-4xl my-12 font-bold text-sky-950 dark:text-sky-50">
                        افزونه های <span class="text-sky-400">وردپرسی</span>
                    </h1>
                    <p class="text-justify text-xl leading-relaxed text-black dark:text-sky-50">
                        اگه حوصله نوشتن بعضی کدها رو نداری، میتونی از اینجا کدهایی که لازم داری رو پیدا کنی و همونطور که میخوای ازشون استفاده کنی یا گسترشش بدی
                    </p>
                    <a href="#" class="bg-sky-400 text-white rounded-lg p-2 mt-8 text-2xl inline-block">
                        ادامه مطلب
                    </a>
                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto text-center pt-24">
                <h1 class="text-6xl py-10 font-bold text-sky-950 dark:text-sky-50">
                    تیکه کد های <span class="text-sky-400">کاربردی</span>
                </h1>
                <p class="w-3/4 mx-auto text-justify text-2xl leading-relaxed text-black dark:text-sky-50">
                    اگه حوصله نوشتن بعضی کدها رو نداری، میتونی از اینجا کدهایی که لازم داری رو پیدا کنی و همونطور که میخوای ازشون استفاده کنی یا گسترشش بدی
                </p>
            </div>
        </section>
        <section>
            <div class="container mx-auto flex pt-40 pb-16 border-b-2">
                <div class="w-full xl:w-1/4">
                    <h1 class="text-4xl font-bold text-sky-950 dark:text-sky-50 pt-8">
                        انواع <span class="text-sky-400">سکشن</span>
                    </h1>
                </div>
                <div class="w-full xl:w-3/4 grid gap-2 grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 text-start">
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto flex py-16 border-b-2">
                <div class="w-full xl:w-1/4">
                    <h1 class="text-4xl font-bold text-sky-950 dark:text-sky-50 pt-8">
                        انواع <span class="text-sky-400">المنت</span>
                    </h1>
                </div>
                <div class="w-full xl:w-3/4 grid gap-2 grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 text-start">
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto flex pt-16">
                <div class="w-full xl:w-1/4">
                    <h1 class="text-4xl font-bold text-sky-950 dark:text-sky-50 pt-8">
                        انواع <span class="text-sky-400">صفحه</span>
                    </h1>
                </div>
                <div class="w-full xl:w-3/4 grid gap-2 grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 text-start">
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                    <div class="text-black dark:text-sky-50">
                        <img src="{{ asset('assets/images/section.svg') }}" alt="" class="max-w-[215px] max-h-[140px]">
                        <h3 class="pt-3 font-bold">
                            منو عنوان
                        </h3>
                        <p class="pb-2">
                            شامل 13 کامپونت
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto text-center">
                <div class="container mx-auto text-center pt-24">
                    <h1 class="text-6xl py-10 font-bold text-sky-950 dark:text-sky-50">
                        انواع <span class="text-sky-400">ربات تلگرام</span>
                    </h1>
                    <p class="w-3/4 mx-auto text-2xl leading-relaxed text-black dark:text-sky-50">
                        اگه میخوای حرفه ای بشی مقالات مارو بخون شاید تو این راه بهت کمک کنه
                    </p>
                </div>
                <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 pt-24">
                    <div class="bg-white dark:bg-[#0C4A6E] rounded-lg mt-40">
                        <a href="#" class="">
                            <img class="rounded-t-lg w-11/12 mx-auto -mt-32" src="{{ asset('assets/images/card.svg') }}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-sky-500">معرفی 6 پنل مدیریتی آماده (Materyal Design)</h5>
                            </a>
                            <p class="mb-3 font-normal text-justify text-black dark:text-gray-50">در این پست شما با ۶ پنل مدیریتی دیزاین سیستم متریال آشنا میشوید برای دیدن ادامه پست بر روی دکمه ادامه مطلب کلیک کنید</p>
                            <div class="text-start border-t border-sky-50 flex justify-between">
                                <p class="text-md dark:text-sky-50">امتیاز</p>
                                <div>
                                    <a href="#">
                                        <i class="fa-light fa-star text-xs dark:text-white"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="text-end mt-3">
                                <a href="#" class="px-3 py-2 text-sm font-medium text-white bg-sky-500 rounded-lg">
                                    ادامه مطلب
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-[#0C4A6E] rounded-lg mt-40">
                        <a href="#" class="">
                            <img class="rounded-t-lg w-11/12 mx-auto -mt-32" src="{{ asset('assets/images/card.svg') }}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-sky-500">معرفی 6 پنل مدیریتی آماده (Materyal Design)</h5>
                            </a>
                            <p class="mb-3 font-normal text-justify text-black dark:text-gray-50">در این پست شما با ۶ پنل مدیریتی دیزاین سیستم متریال آشنا میشوید برای دیدن ادامه پست بر روی دکمه ادامه مطلب کلیک کنید</p>
                            <div class="text-start border-t border-sky-50 flex justify-between">
                                <p class="text-md dark:text-sky-50">امتیاز</p>
                                <div>
                                    <a href="#">
                                        <i class="fa-light fa-star text-xs dark:text-white"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="text-end mt-3">
                                <a href="#" class="px-3 py-2 text-sm font-medium text-white bg-sky-500 rounded-lg">
                                    ادامه مطلب
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-[#0C4A6E] rounded-lg mt-40">
                        <a href="#" class="">
                            <img class="rounded-t-lg w-11/12 mx-auto -mt-32" src="{{ asset('assets/images/card.svg') }}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-sky-500">معرفی 6 پنل مدیریتی آماده (Materyal Design)</h5>
                            </a>
                            <p class="mb-3 font-normal text-justify text-black dark:text-gray-50">در این پست شما با ۶ پنل مدیریتی دیزاین سیستم متریال آشنا میشوید برای دیدن ادامه پست بر روی دکمه ادامه مطلب کلیک کنید</p>
                            <div class="text-start border-t border-sky-50 flex justify-between">
                                <p class="text-md dark:text-sky-50">امتیاز</p>
                                <div>
                                    <a href="#">
                                        <i class="fa-light fa-star text-xs dark:text-white"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="text-end mt-3">
                                <a href="#" class="px-3 py-2 text-sm font-medium text-white bg-sky-500 rounded-lg">
                                    ادامه مطلب
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-[#0C4A6E] rounded-lg mt-40">
                        <a href="#" class="">
                            <img class="rounded-t-lg w-11/12 mx-auto -mt-32" src="{{ asset('assets/images/card.svg') }}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-sky-500">معرفی 6 پنل مدیریتی آماده (Materyal Design)</h5>
                            </a>
                            <p class="mb-3 font-normal text-justify text-black dark:text-gray-50">در این پست شما با ۶ پنل مدیریتی دیزاین سیستم متریال آشنا میشوید برای دیدن ادامه پست بر روی دکمه ادامه مطلب کلیک کنید</p>
                            <div class="text-start border-t border-sky-50 flex justify-between">
                                <p class="text-md dark:text-sky-50">امتیاز</p>
                                <div>
                                    <a href="#">
                                        <i class="fa-light fa-star text-xs dark:text-white"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="text-end mt-3">
                                <a href="#" class="px-3 py-2 text-sm font-medium text-white bg-sky-500 rounded-lg">
                                    ادامه مطلب
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <section class="bg-gray-50 dark:bg-[#082f49]">
            <div class="container mx-auto pt-24">
                <div class="flex pt-10">
                    <div class="">
                        <img src="{{ asset('assets/images/logo.svg') }}" alt="CodeLino">
                    </div>
                    <div class="dark:text-sky-50">
                        <h6 class="fa-2x">کدلینو</h6>
                    </div>
                </div>
                <div>
                    <p class="text-lg dark:text-sky-50 text-justify py-3 mb-16">با کد لینو، به دنیای کدنویسی و تکنولوژی خوش آمدید! در وب سایت کد لینو، تجربه‌ای فوق‌العاده از کد های کاربردی، ربات‌های تلگرامی پیشرفته و وبجت‌های المنتور با شما به اشتراک گذاشته می‌شود. با افتخار به ارائه راهکارهای نوآورانه پرداخته و همواره در خدمت شماستیم. بهترین ابزارها برای توسعه وب و افزایش بهره‌وری را در کد لینو پیدا کنید. ما از هر گونه پرسش یا درخواست شما خوشحال می‌شویم. اکتشاف کنید، تجربه کنید، و با ما به دنیایی پر از فراز و نشیب و تکنولوژی بپیوندید!</p>
                </div>
                <div class="bg-white dark:bg-[#0C4A6E] rounded-2xl py-8 my-10 grid gap-4 grid-cols-1 md:grid-cols-2 2xl:grid-cols-4">
                    <div class="flex mx-auto md:ms-4">
                        <i class="fa-thin fa-bookmark text-sky-400 fa-3x my-auto me-4"></i>
                        <p class="text-xl text-[#413838] dark:text-sky-50">
                            کد های کاربردی
                            <br>
                            <span class="text-lg text-[#413838] dark:text-sky-50">
                                بسیار کاربردی
                            </span>
                        </p>
                    </div>
                    <div class="flex mx-auto md:ms-4">
                        <i class="fa-thin fa-headphones-simple text-sky-400 fa-3x my-auto me-4"></i>
                        <p class="text-xl text-[#413838] dark:text-sky-50">
                            پشتیبانی 24 ساعته
                            <br>
                            <span class="text-lg text-[#413838] dark:text-sky-50">
                                هر روزه بدون تعطیلی
                            </span>
                        </p>
                    </div>
                    <div class="flex mx-auto md:ms-4">
                        <i class="fa-thin fa-arrow-rotate-left text-sky-400 fa-3x my-auto me-4"></i>
                        <p class="text-xl text-[#413838] dark:text-sky-50">
                            امتیاز با هر سفارش
                            <br>
                            <span class="text-lg text-[#413838] dark:text-sky-50">
                                پس از دریافت در پروفایل
                            </span>
                        </p>
                    </div>
                    <div class="flex mx-auto md:ms-4">
                        <i class="fa-thin fa-paper-plane text-sky-400 fa-3x my-auto me-4"></i>
                        <p class="text-xl text-[#413838] dark:text-sky-50">
                            امکان مشارکت با دوستان
                            <br>
                            <span class="text-lg text-[#413838] dark:text-sky-50">
                                در سریع ترین زمان ممکن
                            </span>
                        </p>
                    </div>
                </div>
                <div class="dark:text-sky-50 py-16 grid gap-4 grid-cols-1 md:grid-cols-2 xl:grid-cols-4">
                    <div class="text-center xl:text-start">
                        <h3 class="py-4 text-xl">با وب سایت من</h3>
                        <ul>
                            <li>اتاق خبر فروشگاه</li>
                            <li>فروش در فروشگاه</li>
                            <li>گزارش تخلف در فروشگاه</li>
                            <li>تماس با فروشگاه</li>
                        </ul>
                    </div>
                    <div class="text-center xl:text-start">
                        <h3 class="py-4 text-xl">خدمات مشتریان</h3>
                        <ul>
                            <li>پاسخ به پرسش های متداول</li>
                            <li>رویه بازگردان کالا</li>
                            <li>شرایط استفاده</li>
                            <li>گزارش باگ</li>
                        </ul>
                    </div>
                    <div class="text-center xl:text-start">
                        <h3 class="py-4 text-xl">راهنمای خرید از فروشگاه</h3>
                        <ul>
                            <li>نحوه ثبت سفارش</li>
                            <li>رویه های ارسال فروش</li>
                            <li>شرایط استفاده</li>
                            <li>شیوه ی پرداخت</li>
                        </ul>
                    </div>
                    <div class="text-center xl:text-start">
                        <h3 class="py-4 text-xl">نماد های ما</h3>
                        <div class="">
                            <img src="{{ asset('assets/images/namad.svg') }}" alt="" class="inline-block">
                            <img src="{{ asset('assets/images/sabt.svg') }}" alt="" class="inline-block">
                            <img src="{{ asset('assets/images/kasbokar.svg') }}" alt="" class="inline-block">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-sky-500 mx-2 rounded-t-3xl">
                <div class="container mx-auto py-10 text-white grid gap-4 grid-cols-1 xl:grid-cols-4">
                    <div class="order-4 xl:order-1 text-center xl:text-start">
                        <h3 class="my-5">شماره تماس:</h3>
                        <a href="tel:+989123456789" class="">09123456789</a>
                    </div>
                    <div class="order-3 xl:order-1 text-center xl:text-start">
                        <h3 class="my-5">پست الکترونیکی:</h3>
                        <a href="mailto:dani@gmail.com">dani@gmail.com</a>
                    </div>
                    <div class="order-2 xl:order-1 text-center xl:text-start">
                        <h3 class="my-5">شبکه های اجتماعی:</h3>
                        <a href="#" class="m-1">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="m-1">
                            <i class="fa-brands fa-telegram"></i>
                        </a>
                        <a href="#" class="m-1">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a href="#" class="m-1">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="m-1">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                    <div class="order-1 xl:order-1 text-center xl:text-start">
                        <h3 class="my-5">با ثبت ایمیل از به روز ترین اخبار با خبر باشید</h3>
                        <form class="md:w-1/2 mx-auto xl:w-full">
                            <div class="relative">
                                <label for="default-search"></label>
                                <input type="email" id="default-search" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 " placeholder="در این قسمت ایمیل خود را وارد کنید" required />
                                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-sky-400 font-medium rounded-lg text-sm px-4 py-2 ">ثبت ایمیل</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="container mx-auto justify-between text-white py-10 grid gap-2 grid-cols-1 xl:grid-cols-2">
                    <div class="mx-auto xl:mx-0">
                        <a href="#" class="border p-2 rounded-lg">بازگشت به بالا</a>
                    </div>
                    <div class="mx-auto xl:mx-0 xl:ms-auto   mt-3">
                        <p>
                            طراحی شده با عشق توسط
                            <a href="#">
                                sirdesigner.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>
