<!doctype html>
<html lang="fa-IR" dir="rtl">
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
            <nav class="bg-gray-50 dark:bg-lightgray-500">
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
                                    <a href="#" class="block text-black dark:text-white hover:text-sky-400 hover:dark:text-sky-400 transition duration-300 mx-5">
                                        صفحه اصلی
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-black dark:text-white hover:text-sky-400 hover:dark:text-sky-400 transition duration-300 mx-5">
                                        فروشگاه
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-black dark:text-white hover:text-sky-400 hover:dark:text-sky-400 transition duration-300 mx-5">
                                        نمونه کارها
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-black dark:text-white hover:text-sky-400 hover:dark:text-sky-400 transition duration-300 mx-5">
                                        تیکه کد
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-black dark:text-white hover:text-sky-400 hover:dark:text-sky-400 transition duration-300 mx-5">
                                        وبلاگ
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-black dark:text-white hover:text-sky-400 hover:dark:text-sky-400 transition duration-300 mx-5">
                                        درباره من
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="my-2 mx-2 xl:my-auto order-3">
                            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 rounded-lg text-sm p-2 ">
                                <i class="fa-duotone fa-sun-bright text-xl hidden" id="theme-toggle-dark-icon"></i>
                                <i class="fa-regular fa-moon-stars text-xl hidden" id="theme-toggle-light-icon"></i>
                            </button>
                        </li>
                        <li class="my-auto text-center order-4">
                            <a href="#" class="bg-sky-400 text-white hover:text-sky-400 hover:bg-white border border-sky-400 rounded-lg p-2 transition duration-300">
                                ورود / ثبت نام
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
    </header>
    <main class="bg-gray-50 dark:bg-lightgray-500">
        <section>
            <div class="container mx-auto pb-5">
                <div class="bg-white dark:bg-skyblue-600 rounded-2xl text-center py-10">
                    <p class="text-6xl py-12 text-skyblue-600 dark:text-sky-50 font-bold">طعم خوب <span class="text-sky-400">کد آزاد</span></p>
                    <p class="text-2xl text-black dark:text-sky-50">منبعی ساده و خلاق برای کد های شما</p>
                    <div class="py-10">
                        <a href="#" class="bg-sky-400 text-white hover:text-sky-400 hover:bg-white border border-sky-400 transition duration-300 p-4 rounded-xl me-1">تست سرعت</a>
                        <a href="#" class="text-sky-400 bg-white hover:bg-sky-400 hover:text-white border border-sky-400 transition duration-300 p-4 rounded-xl ms-1">دیدن نمونه کارها</a>
                    </div>
                    <div class="container mx-auto bg-white dark:bg-lightgray-500 rounded-xl w-1/2 text-black dark:text-white text-start py-6" dir="ltr">
                        <pre>&lt;pre&gt;<br>&lt;code&gt;<br>&lt;?php<br>// نمونه کد پی اچ پی شما اینجا قرار می گیرد<br>echo "Hello World!";<br>?&gt;<br>&lt;/code&gt;<br>&lt;/pre&gt;</pre>
                    </div>
                    <div class="">
                        <img src="{{ asset('assets/images/kybord.svg')}}" alt="" class="mx-auto w-full">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto grid gap-10 grid-cols-1 md:grid-cols-2 my-24">
                <div class="flex flex-col gap-5">
                   <div class="text-center md:text-start">
                       <h3 class="text-skyblue-600 dark:text-sky-50 text-4xl font-bold">تکه کدهای <span class="text-sky-400">کاربردی</span></h3>
                   </div>
                   <div>
                       <p class="text-justify text-2xl text-black dark:text-sky-50">اگه حوصله نوشتن بعضی کدها رو نداری، میتونی از اینجا کدهایی که لازم داری رو پیدا کنی و همونطور که میخوای ازشون استفاده کنی یا گسترشش بدی</p>
                   </div>
                   <div class="mx-auto md:mx-0 mt-3 md:mt-6">
                       <a href="#" class="bg-sky-400 text-white hover:text-sky-400 hover:bg-white border border-sky-400 rounded-lg p-2 transition duration-300">ادامه مطلب</a>
                   </div>
                </div>
                <div class="border-2 border-white rounded-2xl bg-gradient-to-br from-sky-50 via-primaryvioent to-sky-50 h-96 p-5">
                    <iframe src=""></iframe>
                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto grid gap-10 grid-cols-1 md:grid-cols-2 my-24">
                <div class="border-2 border-white rounded-2xl bg-gradient-to-br from-sky-50 via-primaryvioent to-sky-50 h-96 p-5 order-2 md:order-1">

                </div>
                <div class="flex flex-col gap-5 order-1 md:order-2">
                    <div class="text-center md:text-start">
                        <h3 class="text-skyblue-600 dark:text-sky-50 text-4xl font-bold">فروشگاه <span class="text-sky-400">محصولات</span></h3>
                    </div>
                    <div>
                        <p class="text-justify text-2xl text-black dark:text-sky-50">ممکنه برات پیش اومده باشه که فرصت کافی نداشته باشی تا بخوای سایت رو راه‌اندازی کنی. بنابراین میتونی از اینجا هر سایتی خواستی برای خودت داشته باشی</p>
                    </div>
                    <div class="mx-auto md:mx-0 mt-3 md:mt-6">
                        <a href="#" class="bg-sky-400 text-white hover:text-sky-400 hover:bg-white border border-sky-400 rounded-lg p-2 transition duration-300">ادامه مطلب</a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto grid gap-10 grid-cols-1 md:grid-cols-2 my-24">
                <div class="flex flex-col gap-5">
                    <div class="text-center md:text-start">
                        <h3 class="text-skyblue-600 dark:text-sky-50 text-4xl font-bold">ربات <span class="text-sky-400">تلگرام</span></h3>
                    </div>
                    <div>
                        <p class="text-justify text-2xl text-black dark:text-sky-50">اگه دنبال ربات هایی میگردی که تا حد امکان کارهات رو راحت تر کنی، میتونی از ربات های ما استفاده کنی.نگران نباش! برای اینکه مطمئن بشی ربات ها همون چیزی هستن که میخوای، میتونی همینجا به صورت آنلاین تستش کنی</p>
                    </div>
                    <div class="mx-auto md:mx-0 mt-3 md:mt-6">
                        <a href="#" class="bg-sky-400 text-white hover:text-sky-400 hover:bg-white border border-sky-400 rounded-lg p-2 transition duration-300">ادامه مطلب</a>
                    </div>
                </div>
                <div class="border-2 border-white rounded-2xl bg-gradient-to-br from-sky-50 via-primaryvioent to-sky-50 h-96 p-5">

                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto my-24 text-center">
                <h3 class="text-4xl pb-12 text-skyblue-600 dark:text-sky-50 text-center font-bold">افزودنی های <span class="text-sky-400">المنتور</span></h3>
                <p class="text-2xl dark:text-sky-50 w-1/2 mx-auto">اگه وردپرس کار کرده باشی، این قسمت خیلی به کارت میاد. اینجا میتونی برای اینکه سایت رو سریعتر بزنی، از پکیج های ما استفاده کنی تا توی سریع ترین زمان ممکن بسازیش</p>
                <br><br><a href="#" class="bg-sky-400 text-white hover:text-sky-400 hover:bg-white border border-sky-400 rounded-lg p-2 transition duration-300">رفتن به فروشگاه</a>
                <img src="{{ asset('assets/images/elementor.svg') }}" alt="" class="block dark:hidden mx-auto w-3/4 my-10">
                <img src="{{ asset('assets/images/elementordark.svg') }}" alt="" class="hidden dark:block mx-auto w-3/4 my-10">
            </div>
        </section>
        <section>
            <div class="container mx-auto text-center mt-24 pb-36">
                <h3 class="text-4xl pb-12 text-skyblue-600 dark:text-sky-50 text-center font-bold">مطالب <span class="text-sky-400">وبلاگ</span></h3>
                <p class="text-2xl dark:text-sky-50 mx-auto">اگه میخوای حرفه ای بشی مقالات مارو بخون شاید تو این راه بهت کمک کنه</p>
                <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 mt-20">
                    <div class="bg-white dark:bg-skyblue-600 rounded-lg mt-40 duration-300 ease-in-out hover:shadow-lg dark:hover:shadow-black/30">
                        <a href="#" class="">
                            <img class="rounded-t-lg w-11/12 mx-auto -mt-32" src="{{ asset('assets/images/card.svg') }}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-start text-xl font-bold tracking-tight text-sky-500">معرفی 6 پنل مدیریتی آماده (Materyal Design)</h5>
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
                                <a href="#" class="px-3 py-2 text-sm font-medium text-white bg-sky-500 hover:bg-white hover:text-sky-500 border border-sky-500 transition duration-300 rounded-lg">
                                    ادامه مطلب
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-skyblue-600 rounded-lg mt-40 duration-300 ease-in-out hover:shadow-lg dark:hover:shadow-black/30">
                        <a href="#" class="">
                            <img class="rounded-t-lg w-11/12 mx-auto -mt-32" src="{{ asset('assets/images/card.svg') }}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-start  text-xl font-bold tracking-tight text-sky-500">معرفی 6 پنل مدیریتی آماده (Materyal Design)</h5>
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
                                <a href="#" class="px-3 py-2 text-sm font-medium text-white bg-sky-500 hover:bg-white hover:text-sky-500 border border-sky-500 transition duration-300 rounded-lg">
                                    ادامه مطلب
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-skyblue-600 rounded-lg mt-40 duration-300 ease-in-out hover:shadow-lg dark:hover:shadow-black/30">
                        <a href="#" class="">
                            <img class="rounded-t-lg w-11/12 mx-auto -mt-32" src="{{ asset('assets/images/card.svg') }}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-start  text-xl font-bold tracking-tight text-sky-500">معرفی 6 پنل مدیریتی آماده (Materyal Design)</h5>
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
                                <a href="#" class="px-3 py-2 text-sm font-medium text-white bg-sky-500 hover:bg-white hover:text-sky-500 border border-sky-500 transition duration-300 rounded-lg">
                                    ادامه مطلب
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-skyblue-600 rounded-lg mt-40 duration-300 ease-in-out hover:shadow-lg dark:hover:shadow-black/30">
                        <a href="#" class="">
                            <img class="rounded-t-lg w-11/12 mx-auto -mt-32" src="{{ asset('assets/images/card.svg') }}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-start  text-xl font-bold tracking-tight text-sky-500">معرفی 6 پنل مدیریتی آماده (Materyal Design)</h5>
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
                                <a href="#" class="px-3 py-2 text-sm font-medium text-white bg-sky-500 hover:bg-white hover:text-sky-500 border border-sky-500 transition duration-300 rounded-lg">
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
        <section class="font-Yekan bg-gray-50 dark:bg-lightgray-500">
            <div class="container mx-auto">
                <div class="flex py-7">
                    <div class="">
                       <img src="{{ asset('assets/images/logo.svg') }}" alt="CodeLino">
                    </div>
                    <div class="dark:text-sky-50 my-auto">
                        <h6 class="font-bold text-2xl">کدلینو</h6>
                    </div>
                </div>
                <div>
                    <p class="text-md text-justify leading-relaxed text-lightgray-50 dark:text-sky-50">با کد لینو، به دنیای کدنویسی و تکنولوژی خوش آمدید! در وب سایت کد لینو، تجربه‌ای فوق‌العاده از کد های کاربردی، ربات‌های تلگرامی پیشرفته و وبجت‌های المنتور با شما به اشتراک گذاشته می‌شود. با افتخار به ارائه راهکارهای نوآورانه پرداخته و همواره در خدمت شماستیم. بهترین ابزارها برای توسعه وب و افزایش بهره‌وری را در کد لینو پیدا کنید. ما از هر گونه پرسش یا درخواست شما خوشحال می‌شویم. اکتشاف کنید، تجربه کنید، و با ما به دنیایی پر از فراز و نشیب و تکنولوژی بپیوندید!</p>
                </div>
                <div class="bg-white dark:bg-skyblue-600 rounded-2xl py-4 my-20 grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-4">
                    <div class="grid gap-2 grid-cols-8 md:grid-cols-4 my-2">
                        <div class="mx-auto">
                            <i class="fa-thin fa-bookmark text-sky-400 fa-3x"></i>
                        </div>
                        <div class="col-span-3 md:col-span-2">
                            <p class="text-md text-charcoal dark:text-sky-50">
                                کد های کاربردی
                                <br>
                                <span class="text-sm text-lightgray-50 dark:text-sky-50">
                                بسیار کاربردی
                            </span>
                            </p>
                        </div>
                        <div class="text-lightgray-100 dark:text-sky-50 my-auto mx-auto hidden 2xl:block">|</div>
                    </div>
                    <div class="grid gap-2 grid-cols-8 md:grid-cols-4 my-2">
                        <div class="mx-auto">
                            <i class="fa-thin fa-headphones-simple text-sky-400 fa-3x"></i>
                        </div>
                        <div class="col-span-3 md:col-span-2">
                            <p class="text-md text-charcoal dark:text-sky-50">
                                پشتیبانی 24 ساعته
                                <br>
                                <span class="text-sm text-lightgray-50 dark:text-sky-50">
                                هر روزه بدون تعطیلی
                            </span>
                            </p>
                        </div>
                        <div class="text-lightgray-100 dark:text-sky-50 my-auto mx-auto hidden 2xl:block">|</div>
                    </div>
                    <div class="grid gap-2 grid-cols-8 md:grid-cols-4 my-2">
                        <div class="mx-auto">
                            <i class="fa-thin fa-arrow-rotate-left text-sky-400 fa-3x"></i>
                        </div>
                        <div class="col-span-3 md:col-span-2">
                            <p class="text-md text-charcoal dark:text-sky-50">
                                امتیاز با هر سفارش
                                <br>
                                <span class="text-sm text-lightgray-50 dark:text-sky-50">
                                پس از دریافت در پروفایل
                            </span>
                            </p>
                        </div>
                        <div class="text-lightgray-100 dark:text-sky-50 my-auto mx-auto hidden 2xl:block">|</div>
                    </div>
                    <div class="grid gap-2 grid-cols-8 md:grid-cols-5 my-2">
                        <div class="mx-auto">
                            <i class="fa-thin fa-paper-plane text-sky-400 fa-3x"></i>
                        </div>
                        <div class="col-span-4">
                            <p class="text-md text-charcoal dark:text-sky-50">
                                امکان مشارکت با دوستان
                                <br>
                                <span class="text-sm text-lightgray-50 dark:text-sky-50">
                                در سریع ترین زمان ممکن
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="dark:text-sky-50 my-16 grid gap-4 grid-cols-1 md:grid-cols-2 xl:grid-cols-4">
                    <div class="text-center xl:text-start">
                        <h3 class="py-4 text-xl">با وب سایت من</h3>
                        <ul>
                            <li>
                                <a href="#" class="text-lightgray-50 dark:text-sky-50 text-sm leading-relaxed hover:text-sky-400 dark:hover:text-sky-400 transition duration-300">
                                    اتاق خبر فروشگاه
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-lightgray-50 dark:text-sky-50 text-sm leading-relaxed hover:text-sky-400 dark:hover:text-sky-400 transition duration-300">
                                    فروش در فروشگاه
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-lightgray-50 dark:text-sky-50 text-sm leading-relaxed hover:text-sky-400 dark:hover:text-sky-400 transition duration-300">
                                    گزارش تخلف در فروشگاه
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-lightgray-50 dark:text-sky-50 text-sm leading-relaxed hover:text-sky-400 dark:hover:text-sky-400 transition duration-300">
                                    تماس با فروشگاه
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center xl:text-start">
                        <h3 class="py-4 text-xl">خدمات مشتریان</h3>
                        <ul>
                            <li>
                                <a href="#" class="text-lightgray-50 dark:text-sky-50 text-sm leading-relaxed hover:text-sky-400 dark:hover:text-sky-400 transition duration-300">
                                    پاسخ به پرسش های متداول
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-lightgray-50 dark:text-sky-50 text-sm leading-relaxed hover:text-sky-400 dark:hover:text-sky-400 transition duration-300">
                                    رویه بازگردان کالا
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-lightgray-50 dark:text-sky-50 text-sm leading-relaxed hover:text-sky-400 dark:hover:text-sky-400 transition duration-300">
                                    شرایط استفاده
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-lightgray-50 dark:text-sky-50 text-sm leading-relaxed hover:text-sky-400 dark:hover:text-sky-400 transition duration-300">
                                    گزارش باگ
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center xl:text-start">
                        <h3 class="py-4 text-xl">راهنمای خرید از فروشگاه</h3>
                        <ul>
                            <li>
                                <a href="#" class="text-lightgray-50 dark:text-sky-50 text-sm leading-relaxed hover:text-sky-400 dark:hover:text-sky-400 transition duration-300">
                                    نحوه ثبت سفارش
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-lightgray-50 dark:text-sky-50 text-sm leading-relaxed hover:text-sky-400 dark:hover:text-sky-400 transition duration-300">
                                    رویه های ارسال فروش
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-lightgray-50 dark:text-sky-50 text-sm leading-relaxed hover:text-sky-400 dark:hover:text-sky-400 transition duration-300">
                                    شرایط استفاده
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-lightgray-50 dark:text-sky-50 text-sm leading-relaxed hover:text-sky-400 dark:hover:text-sky-400 transition duration-300">
                                    شیوه ی پرداخت
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center xl:text-start">
                        <h3 class="py-4 text-xl">نماد های ما</h3>
                        <div class="">
                            <a href="#">
                                <img src="{{ asset('assets/images/namad.svg') }}" alt="" class="inline-block">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/sabt.svg') }}" alt="" class="inline-block">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/kasbokar.svg') }}" alt="" class="inline-block">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-sky-500 mx-2 rounded-t-3xl">
                <div class="container mx-auto py-10 text-white grid gap-4 grid-cols-1 xl:grid-cols-4">
                    <div class="order-4 xl:order-1 text-center xl:text-start">
                        <div>
                            <h3>شماره تماس:</h3>
                        </div>
                        <div class="mt-5">
                            <a href="tel:+989123456789">09123456789</a>
                        </div>
                    </div>
                    <div class="order-3 xl:order-1 text-center xl:text-start">
                        <div>
                            <h3>پست الکترونیکی:</h3>
                        </div>
                        <div class="mt-5">
                            <a href="mailto:dani@gmail.com">dani@gmail.com</a>
                        </div>
                    </div>
                    <div class="order-2 xl:order-1 text-center xl:text-start">
                        <div>
                            <h3>شبکه های اجتماعی:</h3>
                        </div>
                        <div class="mt-5">
                            <a href="#" class="m-1">
                                <i class="fa-brands fa-instagram text-xl hover:scale-125 transition duration-300"></i>
                            </a>
                            <a href="#" class="m-1">
                                <i class="fa-brands fa-telegram text-xl hover:scale-125 transition duration-300"></i>
                            </a>
                            <a href="#" class="m-1">
                                <i class="fa-brands fa-linkedin text-xl hover:scale-125 transition duration-300"></i>
                            </a>
                            <a href="#" class="m-1">
                                <i class="fa-brands fa-facebook text-xl hover:scale-125 transition duration-300"></i>
                            </a>
                            <a href="#" class="m-1">
                                <i class="fa-brands fa-twitter text-xl hover:scale-125 transition duration-300"></i>
                            </a>
                        </div>
                    </div>
                    <div class="order-1 xl:order-1 text-center xl:text-start">
                        <h3>با ثبت ایمیل از به روز ترین اخبار با خبر باشید</h3>
                        <form class="max-w-md mx-auto mt-5">
                            <label for="email" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">email</label>
                            <div class="relative">
                                <input type="email" id="email" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="ایمیل خود را وارد کنید" required />
                                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-sky-400 hover:bg-sky-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">ثبت ایمیل</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="container mx-auto justify-between text-white py-10 grid gap-2 grid-cols-1 xl:grid-cols-2">
                    <div class="mx-auto xl:mx-0">
                        <a href="#" class="border p-2 rounded-lg">بازگشت به بالا</a>
                    </div>
                    <div class="mx-auto xl:mx-0 xl:ms-auto mt-3">
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
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
