<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Demo Labs Company Site</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ url('assets/fontawesome/css/all.css') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <style>
        html {
            scroll-behavior: smooth;
        }
        /*== #home Button  display on scroll ==*/
        .home {
            display: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            bottom: 75px;
            right: 20px;
            opacity: 0.8;
            position: fixed;
            z-index: 1111;
            background-color: #00bba7;
            animation: pulse 2s infinite;
        }

        .home a {
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            font-size: 24px;
            color: #fff;
            transition: all 0.5s ease-in-out;
        }

        @keyframes pulse {
            0% {
                transform: scale(0.9);
                box-shadow: 0 0 0 0 rgba(31, 204, 157, 0.7);
            }
            70% {
                transform: scale(1);
                box-shadow: 0 0 0 10px rgba(31, 204, 157, 0.5);
            }
            100% {
                transform: scale(0.9);
            }
        }
    </style>
</head>
<body id="home" class="font-sans antialiased dark:bg-black dark:text-white/50">
{{--Navigation--}}
<nav class="!z-999 bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ url('images/logo.png') }}" class="h-12" alt="Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
        </a>
        <button data-collapse-toggle="mega-menu-full-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-cyan-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-cyan-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu-full-cta" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div id="mega-menu-full-cta" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="#" class="block py-2 md:py-3 px-3 text-cyan-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-cyan-700 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-gray-700 dark:hover:text-cyan-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">
                        Home</a>
                </li>
                <li>
                    <button id="mega-menu-full-cta-dropdown-button" data-collapse-toggle="mega-menu-full-cta-dropdown" data-dropdown-placement="bottom"
                            class="flex items-center justify-between w-full py-2 md:py-3 px-3 font-medium text-cyan-800 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-cyan-600 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-gray-700 dark:hover:text-cyan-500 md:dark:hover:bg-transparent dark:border-gray-700">
                        Services
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                </li>
                <li>
                    <a href="#" class="block py-2 md:py-3 px-3 text-cyan-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-cyan-700 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-gray-700 dark:hover:text-cyan-500 md:dark:hover:bg-transparent dark:border-gray-700">
                        Resources</a>
                </li>
                <li>
                    <a href="#" class="block py-2 md:py-3 px-3 text-cyan-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-cyan-700 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-gray-700 dark:hover:text-cyan-500 md:dark:hover:bg-transparent dark:border-gray-700">
                        About Us</a>
                </li>
                <li>
                <a href="#" class="rounded-2xl
                        block py-2 md:py-3 px-3 md:px-5 text-cyan-100 border-b border-gray-100 hover:bg-cyan-500
                        bg-cyan-700
                        md:hover:bg-transparent md:border md:border-gray-300 md:hover:text-cyan-700 md:p-0 dark:text-white md:dark:hover:text-cyan-500
                        dark:hover:bg-gray-700 dark:hover:text-cyan-500 md:dark:hover:bg-transparent dark:border-gray-700 transition duration-200 ease-in-out"
                >
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="mega-menu-full-cta-dropdown"
         class="hidden absolute t-0 right-0 left-0 bg-white border-gray-200 shadow-xs border-y dark:bg-gray-800 dark:border-gray-600">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-sm text-cyan-800 dark:text-cyan-400 md:grid-cols-3 md:px-6">
            <ul class="space-y-4 sm:mb-4 md:mb-0" aria-labelledby="mega-menu-full-cta-button">
                <li>
                    <a href="#" class="hover:underline hover:text-cyan-600 dark:hover:text-cyan-500">
                        Online Stores
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:underline hover:text-cyan-600 dark:hover:text-cyan-500">
                        Segmentation
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:underline hover:text-cyan-600 dark:hover:text-cyan-500">
                        Marketing CRM
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:underline hover:text-cyan-600 dark:hover:text-cyan-500">
                        Online Stores
                    </a>
                </li>
            </ul>
            <ul class="hidden mb-4 space-y-4 md:mb-0 sm:block">
                <li>
                    <a href="#" class="hover:underline hover:text-cyan-600 dark:hover:text-cyan-500">
                        Our Blog
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:underline hover:text-cyan-600 dark:hover:text-cyan-500">
                        Terms & Conditions
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:underline hover:text-cyan-600 dark:hover:text-cyan-500">
                        License
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:underline hover:text-cyan-600 dark:hover:text-cyan-500">
                        Resources
                    </a>
                </li>
            </ul>
            <div class="mt-4 md:mt-0">
                <h2 class="mb-2 font-semibold text-cyan-800 dark:text-white">Our brands</h2>
                <p class="mb-2 text-cyan-800 dark:text-cyan-400">At Flowbite, we have a portfolio of brands that cater to a variety of preferences.</p>
                <a href="#" class="inline-flex items-center text-sm font-medium text-blue-600 hover:underline hover:text-cyan-600 dark:text-blue-500 dark:hover:text-cyan-700">
                    Explore our brands
                    <span class="sr-only">Explore our brands </span>
                    <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</nav>

{{--Section Hero--}}
<div id="hero" class="relative -z-1">
{{--    <img src="{{ url('images/hero.jpg') }}" class="absolute inset-0 object-cover w-full h-full" alt="" />--}}
    <div
        class="relative bg-linear-to-b from-hero-start/80 to-hero-end/10 sm:min-h-[700px] bg-blend-multiply"
        style="background-image: linear-gradient(rgba(105,125,128,0.89), rgba(135,164,169,0.51) 100%), url('{{ url('images/hero-1.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        "
    >
        <svg class="absolute -bottom-1 text-white" viewBox="0 0 1160 163">
            <path
                fill="#fff"
                d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z"
            ></path>
        </svg>
        <div class="relative px-4 py-16 mx-auto overflow-hidden sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col items-center justify-between xl:flex-row">
                <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                    <h1 data-aos="fade-up" data-aos-delay="100"
                        class="mb-4 text-4xl font-bold tracking-tight leading-none text-white md:text-5xl lg:text-6xl"
                    >
                        Our Work Is More Than Reaserch
                    </h1>
                    <p class="max-w-xl mb-4 text-base text-gray-200 md:text-lg">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.
                    </p>
                    <a href="#"
                       class="inline-flex justify-center text-gray-900 items-center
                            py-3 px-5 text-base font-medium text-center rounded-lg border
                            border-white bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400 transition duration-200 ease-in-out"
                    >
                        Learn more
                    </a>
                </div>
{{--                <div class="w-full max-w-xl xl:px-8 xl:w-5/12">--}}
{{--                    <div class="bg-white rounded shadow-2xl p-7 sm:p-10">--}}
{{--                        <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">--}}
{{--                            Sign up for updates--}}
{{--                        </h3>--}}
{{--                        <form>--}}
{{--                            <div class="mb-1 sm:mb-2">--}}
{{--                                <label for="firstName" class="inline-block mb-1 font-medium">First name</label>--}}
{{--                                <input--}}
{{--                                    placeholder="John"--}}
{{--                                    required=""--}}
{{--                                    type="text"--}}
{{--                                    class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"--}}
{{--                                    id="firstName"--}}
{{--                                    name="firstName"--}}
{{--                                />--}}
{{--                            </div>--}}
{{--                            <div class="mb-1 sm:mb-2">--}}
{{--                                <label for="lastName" class="inline-block mb-1 font-medium">Last name</label>--}}
{{--                                <input--}}
{{--                                    placeholder="Doe"--}}
{{--                                    required=""--}}
{{--                                    type="text"--}}
{{--                                    class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"--}}
{{--                                    id="lastName"--}}
{{--                                    name="lastName"--}}
{{--                                />--}}
{{--                            </div>--}}
{{--                            <div class="mb-1 sm:mb-2">--}}
{{--                                <label for="email" class="inline-block mb-1 font-medium">E-mail</label>--}}
{{--                                <input--}}
{{--                                    placeholder="john.doe@example.org"--}}
{{--                                    required=""--}}
{{--                                    type="text"--}}
{{--                                    class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"--}}
{{--                                    id="email"--}}
{{--                                    name="email"--}}
{{--                                />--}}
{{--                            </div>--}}
{{--                            <div class="mt-4 mb-2 sm:mb-4">--}}
{{--                                <button--}}
{{--                                    type="submit"--}}
{{--                                    class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"--}}
{{--                                >--}}
{{--                                    Subscribe--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <p class="text-xs text-gray-600 sm:text-sm">--}}
{{--                                We respect your privacy. Unsubscribe at any time.--}}
{{--                            </p>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>

{{--Content 1--}}
<div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <svg class="absolute top-0 left-[max(50%,25rem)] h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
            <defs>
                <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                    <path d="M100 200V.5M.5 .5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
        </svg>
    </div>
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
        <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4" data-aos="fade-up" data-aos-delay="100">
                <div class="lg:max-w-lg">
                    <p class="text-base/7 font-semibold text-teal-600">Loren Ipsun</p>
                    <h1 class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-cyan-800 sm:text-5xl">A better workflow</h1>
                    <p class="mt-6 text-xl/8 text-gray-700">Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas.</p>
                </div>
            </div>
        </div>
        <div style="mask: linear-gradient(90deg, transparent, #54d9af 10%, #00655d 85%, transparent);"
             class="-mt-12 -ml-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden relative">
            <img class="w-100 max-w-none rounded-t-lx rounded-bl-[20%] bg-gray-900 ring-1 shadow-xl ring-gray-400/10 sm:w-[57rem]"
                 src="{{ url('images/01.jpg') }}" alt=""
                 style="mask: linear-gradient(90deg, transparent, #54d9af 10%, #00655d 85%, transparent);"

            >
        </div>
        <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4">
                <div class="max-w-xl text-base/7 text-gray-700 lg:max-w-lg" data-aos="fade-up" data-aos-delay="200">
                    <p>Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra tellus varius sit neque erat velit. Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id.</p>
                    <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et. Id blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel. Mauris varius vulputate et ultrices hac adipiscing egestas. Iaculis convallis ac tempor et ut. Ac lorem vel integer orci.</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{--Services Section--}}
<section class="bg-white dark:bg-gray-900 mx-auto">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md mb-8 lg:mb-16" data-aos="fade-up">
            <h2 class="text-center mb-4 text-4xl tracking-tight font-extrabold text-cyan-800 dark:text-white">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor"
                         class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block"
                    >
                      <defs>
                        <pattern id="fdca20a0-aeb4-4caf-ba1b-4351eee42363" x="0" y="0" width=".135" height=".30">
                          <circle cx="1" cy="1" r=".7"></circle>
                        </pattern>
                      </defs>
                      <rect fill="url(#fdca20a0-aeb4-4caf-ba1b-4351eee42363)" width="52" height="24"></rect>
                    </svg>
                </span>
                Designed for business teams like yours
            </h2>
            <p class="text-center text-gray-500 sm:text-xl dark:text-gray-400">
                Nunc fringilla leo viverra dignissim viverra. Curabitur varius nulla nec augue porttitor congue. Vivamus tincidunt, nulla in cursus tempus, sem ligula tempus lectus,
            </p>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center justify-start">
                    <div class="mr-2 sm:mr-4 flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-teal-100 lg:h-12 lg:w-12 dark:bg-teal-900">
                        <i class="fa-solid fa-vial-virus text-lg text-teal-600 dark:text-teal-300"></i>
                    </div>
                    <h3 class="mb-2 text-xl text-cyan-800 font-bold dark:text-white">Precision Lab Solutions</h3>
                </div>
                <p class="text-gray-500 dark:text-gray-400">Plan it, create it, launch it. Collaborate seamlessly with all  the organization and hit your marketing goals every month with our marketing plan.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center justify-start">
                    <div
                        class="mr-2 sm:mr-4 flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-teal-100 lg:h-12 lg:w-12 dark:bg-teal-900">
                        <i class="fa-solid fa-flask text-lg text-teal-600 dark:text-teal-300"></i>
                    </div>
                    <h3 class="mb-2 text-xl text-cyan-800 font-bold dark:text-white">Optimal Performance</h3>
                </div>
                <p class="text-gray-500 dark:text-gray-400">Protect your organization, devices and stay compliant with our structured workflows and custom permissions made for you.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center justify-start">
                    <div class="mr-2 sm:mr-4 flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-teal-100 lg:h-12 lg:w-12 dark:bg-teal-900">
                        <i class="fa-solid fa-microscope text-lg text-teal-600 dark:text-teal-300"></i>
                    </div>
                    <h3 class="mb-2 text-xl text-cyan-800 font-bold dark:text-white">SmartLab Services</h3>
                </div>
                <p class="text-gray-500 dark:text-gray-400">Auto-assign tasks, send Slack messages, and much more. Now power up with hundreds of new templates to help you get started.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center justify-start">
                    <div class="mr-2 sm:mr-4 flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-teal-100 lg:h-12 lg:w-12 dark:bg-teal-900">
                        <i class="fa-solid fa-vials text-lg text-teal-600 dark:text-teal-300"></i>
                    </div>
                    <h3 class="mb-2 text-xl text-cyan-800 font-bold dark:text-white">Comprehensive Support</h3>
                </div>
                <p class="text-gray-500 dark:text-gray-400">Audit-proof software built for critical financial operations like month-end close and quarterly budgeting.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center justify-start">
                    <div class="mr-2 sm:mr-4 flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-teal-100 lg:h-12 lg:w-12 dark:bg-teal-900">
                        <svg class="w-5 h-5 text-teal-600 lg:w-6 lg:h-6 dark:text-teal-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                    </div>
                    <h3 class="mb-2 text-xl text-cyan-800 font-bold dark:text-white"> Expert Maintenance</h3>
                </div>
                <p class="text-gray-500 dark:text-gray-400">Craft beautiful, delightful experiences for both marketing and product with real cross-company collaboration.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center justify-start">
                    <div class="mr-2 sm:mr-4 flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-teal-100 lg:h-12 lg:w-12 dark:bg-teal-900">
                        <svg class="w-5 h-5 text-teal-600 lg:w-6 lg:h-6 dark:text-teal-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <h3 class="mb-2 text-xl text-cyan-800 font-bold dark:text-white">Operations</h3>
                </div>
                <p class="text-gray-500 dark:text-gray-400">Keep your company’s lights on with customizable, iterative, and structured workflows built for all efficient teams and individual.</p>
            </div>
        </div>
    </div>
</section>

{{--GTA Section--}}
<section class="bg-[#e9f7f8] dark:bg-gray-900">
    <div data-aos="zoom-in" data-aos-delay="100"
        class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6"
    >
        <div class="relative">
            <img class="w-full rounded-xl"
                 src="{{ url('images/02.jpg') }}" alt="dashboard image"
{{--                 style="mask: linear-gradient(90deg, transparent, #54d9af 10%, #00655d 85%, transparent);"--}}
            >
            <div class="w-full h-full bg-teal-500 absolute -right-5 top-5 -z-1 rounded-xl"></div>
        </div>
        <div class="mt-6 md:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                Let's create more tools and ideas that brings us together.
            </h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
                Etiam sodales nunc sit amet leo ultrices, quis sagittis tortor tempor. Mauris tristique nulla eu semper tempus.
                Sed lacinia neque vitae malesuada dignissim. Aliquam efficitur tincidunt justo quis euismod.
            </p>
        </div>
    </div>
</section>
{{--Contact Section--}}
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-cyan-800 dark:text-white">Contact Us</h2>
        <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
            Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.
        </p>
        <form action="#" class="space-y-8">
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:border-cyan-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500 dark:shadow-sm-light" placeholder="name@example.com" required>
            </div>
            <div>
                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-cyan-500 focus:border-cyan-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-cyan-500 focus:border-cyan-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500" placeholder="Leave a comment..."></textarea>
            </div>
            <button type="submit"
                    class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg
                           bg-cyan-700 sm:w-fit hover:bg-cyan-800 focus:ring-4 focus:outline-none
                           focus:ring-cyan-300 dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800"
            >
                Send message
            </button>
        </form>
    </div>
</section>

{{--Go home--}}
<div id="gohome" class="home">
    <a id="gohomelink" href="#" title="Home">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>

{{--Footer--}}
<footer class="mt-10 p-4 bg-white sm:p-6 dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="{{ url('images/logo.png') }}" class="mr-3 h-12" alt="FlowBite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="https://flowbite.com" class="hover:underline">Flowbite</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ now()->format('Y') }} <a href="{{ url('/') }}" class="hover:underline">Lab Company name™</a>. All Rights Reserved.
            </span>
{{--            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">--}}
{{--                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">--}}
{{--                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>--}}
{{--                </a>--}}
{{--                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">--}}
{{--                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>--}}
{{--                </a>--}}
{{--                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">--}}
{{--                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>--}}
{{--                </a>--}}
{{--                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">--}}
{{--                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>--}}
{{--                </a>--}}
{{--                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">--}}
{{--                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
    </div>
</footer>
<script>
    // window.addEventListener('load', () => {
    //     AOS.init({
    //         duration: 1000,
    //         easing: 'ease-in-out',
    //         once: true,
    //         mirror: false
    //     })
    // });

    const x = document.getElementById("hero").clientHeight;

    document.addEventListener("DOMContentLoaded", function () {
        window.addEventListener("scroll", function () {
            const goHomeButton = document.getElementById("gohome");
            if (window.scrollY <= x - 45) {
                goHomeButton.style.display = "none";
            } else {
                goHomeButton.style.display = "block";
            }
        });
    });
</script>
</body>
</html>
