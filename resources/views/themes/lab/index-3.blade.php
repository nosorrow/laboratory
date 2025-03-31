<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Demo Labs Company Site</title>

    <!-- Fonts -->
    <link rel="preload" href="{{ url('assets/fontawesome/css/all.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ url('assets/fontawesome/css/all.css') }}"></noscript>
{{--    <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--    <link rel="preload" as="style" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" />--}}

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <style>
        :root {
            /*--color: #426877;*/
            --color: #053345;
            --gradient-fade: rgb(from var(--color) r g b / 0.75);
        }
        html {
            scroll-behavior: smooth;
        }

        @media (min-width: 640px) {
            #hero > div {
                background-image: linear-gradient(120deg, var(--gradient-fade) 25%, rgba(5,51,69,0)), url('{{ url('images/hero-v2-6.webp') }}') !important;
            }
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

        .custom-shape-divider-bottom-1742753328 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .custom-shape-divider-bottom-1742753328 svg {
            position: relative;
            display: block;
            width: calc(145% + 1.3px);
            height: 175px;
        }

        .custom-shape-divider-bottom-1742753328 .shape-fill {
            fill: #ffffff;
        }

        /*mobile divider*/
        .custom-shape-divider-bottom-1742758230 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .custom-shape-divider-bottom-1742758230 svg {
            position: relative;
            display: block;
            width: calc(200% + 1.3px);
            height: 64px;
            transform: rotateY(180deg);
        }

        .custom-shape-divider-bottom-1742758230 .shape-fill {
            fill: #FFFFFF;
        }
    </style>
</head>
<body id="home" class="font-sans antialiased dark:bg-slate-900 dark:text-white/50">

{{--Navigation--}}
<nav class="py-3 bg-gray-100 text-cyan-950 w-full">
    <div class="flex justify-between max-w-screen-xl mx-auto px-4 text-[14px]">
        <div>
            <i class="fa-solid fa-phone-volume mr-2 text-teal-400"></i><span class="hidden sm:inline-block">Call Us:</span> +359 02 902-888
        </div>
        <div>
            <i class="fa-solid fa-clock mr-2 text-teal-400"></i><span class="hidden sm:inline-block">Every weekday:</span> 9:00am - 6:00pm
        </div>
    </div>
</nav>
<nav class="relative !z-9999 bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ url('images/logo.webp') }}" class="h-12" alt="Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
        </a>
        <button
                data-collapse-toggle="mega-menu-full-cta"
                type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-cyan-600 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none dark:text-cyan-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu-full-cta" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg id="hamburger-icon" class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
            <!-- Икона за затваряне (скрита по подразбиране) -->
            <svg id="close-icon" class="w-5 h-5 hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 12 12M1 13 13 1"/>
            </svg>
        </button>
        <div id="mega-menu-full-cta" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="{{ route('theme.lab') }}" class="block py-2 md:py-3 px-3 text-cyan-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-cyan-700 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-gray-700 dark:hover:text-cyan-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">
                        Home</a>
                </li>
                <li>
                    <a href="{{route('theme.lab-2')}}" class="block py-2 md:py-3 px-3 text-cyan-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-cyan-700 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-gray-700 dark:hover:text-cyan-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">
                        Home-2</a>
                </li>
                <li>
                    <button id="mega-menu-full-cta-dropdown-button"
{{--                        data-collapse-toggle="mega-menu-full-cta-dropdown" data-dropdown-placement="bottom"--}}
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
                <a href="#contact"
                   class="rounded-2xl block py-2 md:py-3 px-3 md:px-5 text-cyan-100 border-b
                        border-gray-100 hover:bg-teal-600 bg-teal-500 md:hover:bg-transparent
                        md:border md:border-gray-300 md:hover:text-cyan-700 md:p-0
                        dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-gray-700 dark:hover:text-cyan-500
                        md:dark:hover:bg-transparent dark:border-gray-700 transition duration-200 ease-in-out"
                >
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="mega-menu-full-cta-dropdown"
         class="hidden absolute t-0 right-0 left-0 bg-white border-gray-200 shadow-xs border-y dark:bg-gray-800 dark:border-gray-600">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-base font-medium text-cyan-900 dark:text-cyan-400 md:grid-cols-3 md:px-6">
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

            </ul>
            <ul class="space-y-4 sm:mb-4 md:mb-0" aria-labelledby="mega-menu-full-cta-button">
                <li>
                    <a href="#" class="hover:underline hover:text-cyan-600 dark:hover:text-cyan-500">
                        Resources
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:underline hover:text-cyan-600 dark:hover:text-cyan-500">
                        Online Stores
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{--Section Hero--}}
<div id="hero" class="relative">
        <div
            class="relative min-h-[350px] sm:min-h-[700px]"
        style="background-image: linear-gradient(120deg, var(--gradient-fade) 25%, rgba(5,51,69,0)), url('{{ url('images/hero-v2-6-mobile.webp') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        "
    >
{{--    <img src="{{ url('images/hero.jpg') }}" class="absolute inset-0 object-cover w-full h-full" alt="" />--}}
{{--    <div--}}
{{--        class="relative min-h-[400px] sm:min-h-[700px]--}}
{{--                bg-blend-multiply--}}
{{--        "--}}
{{--        style="background-image: linear-gradient(rgba(105,125,128,0.89), rgba(135,164,169,0.51) 100%), url('{{ url('images/hero-1.jpg') }}');--}}
{{--        style="background-image: linear-gradient(90deg, rgba(10,37,45,0.89), rgba(255,255,255,0) 100%), url('{{ url('images/hero-1-2-3.jpg') }}');--}}
{{--        style="background-image: linear-gradient(120deg, var(--gradient-fade) 25%, rgba(5,51,69,0)),--}}
{{--            url('{{ url('images/hero-v2-6.webp') }}');--}}
{{--            background-size: cover;--}}
{{--            background-position: center;--}}
{{--            background-repeat: no-repeat;--}}
{{--        "--}}
{{--    >--}}
{{--        <svg class="absolute -bottom-1 text-white" viewBox="0 0 1160 163">--}}
{{--            <path--}}
{{--                fill="#fff"--}}
{{--                d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z"--}}
{{--            ></path>--}}
{{--        </svg>--}}

{{--        Divider--}}
        <div class="hidden sm:block custom-shape-divider-bottom-1742753328">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
{{--        Mobile Divider--}}
        <div class="sm:hidden custom-shape-divider-bottom-1742758230">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>

        <div class="hidden sm:block">
            <svg viewBox="0 0 52 24" fill="currentColor"
                 class="opacity-30 absolute bottom-0 right-0 w-32 text-blue-gray-100 lg:w-32 sm:block"
            >
                <defs>
                    <pattern id="fdca20a0-aeb4-4caf-ba1b-4351eee42364" x="0" y="0" width=".135" height=".30">
                        <circle cx="1" cy="1" r=".7"></circle>
                    </pattern>
                </defs>
                <rect fill="url(#fdca20a0-aeb4-4caf-ba1b-4351eee42364)" width="52" height="24"></rect>
            </svg>
        </div>
        <div class="relative px-4 py-16 mx-auto overflow-hidden sm:max-w-xl
                    md:max-w-full lg:max-w-screen-xl
                    md:px-24 lg:px-8 lg:py-20"
        >
            <div class="flex flex-col items-center justify-between xl:flex-row">
                <div class="relative w-full max-w-2xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12
                            bg-white/70 rounded-br-[15%] rounded-tl-[15%]
                            border-b-8 border-teal-600
                            px-8 sm:px-10 lg:px-12 py-12 sm:py-16 lg:py-20"
                >
                    <h1 data-aos="fade-up" data-aos-delay="100"
                        class="mb-4 text-3xl font-bold tracking-tight leading-none text-cyan-950 md:text-5xl lg:text-6xl"
                    >
                        <span class="text-teal-700">Our Work Is</span> More Than Reaserch
                    </h1>
                    <p class="max-w-xl mb-4 text-base text-cyan-950 md:text-lg" data-aos="fade-up" data-aos-delay="200">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.
                    </p>
                    <a data-aos="fade-up" data-aos-delay="200"
                        href="#services"
                       class="inline-flex justify-center text-teal-100 items-center
                            py-3 px-5 text-base font-medium text-center rounded-xl
                            bg-teal-600 hover:bg-teal-700 transition duration-200 ease-in-out"
                    >
                        Our Services
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
{{--                                    class="inline-flex items-center justify-center w-full h-12 px-6--}}
{{--                                        font-medium tracking-wide text-white transition duration-200 rounded shadow-md--}}
{{--                                         bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline--}}
{{--                                         focus:outline-none"--}}
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
        <svg class="absolute top-0 left-[max(50%,25rem)] h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200
         [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
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
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-5">
        <div class="lg:pt-10 lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4" data-aos="fade-up" data-aos-delay="100">
                <div class="lg:max-w-lg">
                    <p class="sub-heading text-base/7 font-semibold text-teal-600">Loren Ipsun</p>
                    <h1 class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-cyan-800 sm:text-5xl">A better workflow</h1>
                    <p class="mt-6 text-xl/8 text-gray-700">
                        Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem.
                        At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas.
                    </p>
                    <ul class="mt-6 space-y-2 text-cyan-800 text-xl/8">
                        <li><i class="fa-solid fa-circle-check mr-2 text-lg text-teal-500"></i>
                            Led by Passionate Experts</li>
                        <li><i class="fa-solid fa-circle-check mr-2 text-lg text-teal-500"></i>
                            Affordable Health Packages</li>
                        <li><i class="fa-solid fa-circle-check mr-2 text-lg text-teal-500"></i>
                            Safe diagnoses and effective therapies</li>
                    </ul>
                    <p class="mt-6 text-xl/8 text-gray-700">
                        Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id.
                        Id dolor praesent donec est. Odio penatibus risus viverra tellus varius sit neque erat velit. Faucibus commodo massa rhoncus, volutpat.
                        Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id.
                    </p>

                </div>
            </div>
        </div>
        <div
{{--            style="mask: linear-gradient(90deg, transparent, #54d9af 10%, #00655d 85%, transparent);"--}}
             class="-mt-12 -ml-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden relative"
        >
            <img class="w-100 max-w-none rounded-tl-[20%] rounded-bl-[20%] bg-gray-900 ring-1 ring-gray-400/10 sm:w-[53rem]"
                 src="{{ url('images/content.webp') }}" alt="image"
{{--                 style="mask: linear-gradient(180deg, transparent, #54d9af 10%, #00655d 85%, transparent);"--}}

            >
        </div>
    </div>
</div>

{{--Services Section--}}
<section id="services" class="relative bg-linear-to-b from-gray-50 from-30% to-white to-70% dark:bg-gray-900 mx-auto">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md mb-8 lg:mb-16" data-aos="fade-up">
            <p class="sub-heading-center text-base/7 font-semibold text-teal-600 text-center">Services</p>
            <h2 class="text-center mb-4 text-4xl tracking-tight font-extrabold text-cyan-800 dark:text-white">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor"
                         class="opacity-30 absolute -top-5 left-0 z-0 w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 block"
                    >
                      <defs>
                        <pattern id="fdca20a0-aeb4-4caf-ba1b-4351eee42363" x="0" y="0" width=".135" height=".30">
                          <circle cx="1" cy="1" r=".7"></circle>
                        </pattern>
                      </defs>
                      <rect fill="url(#fdca20a0-aeb4-4caf-ba1b-4351eee42363)" width="52" height="24"></rect>
                    </svg>
                </span>
                Always get the Best Results
            </h2>
            <p class="text-center text-gray-500 sm:text-xl dark:text-gray-400">
                Nunc fringilla leo viverra dignissim viverra. Curabitur varius nulla nec augue porttitor congue. Vivamus tincidunt, nulla in cursus tempus, sem ligula tempus lectus,
            </p>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center justify-start">
                    <div class="mr-2 sm:mr-4 flex justify-center items-center mb-4 w-12  h-12 rounded-full bg-teal-100 lg:h-14 lg:w-14 dark:bg-teal-900">
{{--                        <i class="fa-solid fa-vial-virus text-lg text-teal-600 dark:text-teal-300"></i>--}}
                        <svg class="w-8 h-8 sm:w-10 sm:h-10 text-teal-800 dark:text-teal-300" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 50 50">
                            <path d="M 36.138672 2 C 35.760016 1.9887969 35.392141 2.1942344 35.212891 2.5527344 L 34.203125 4.8144531 C 33.948125 5.3234531 34.170406 5.9437812 34.691406 6.1757812 L 36.261719 6.8730469 L 35.115234 9.4707031 L 34.681641 9.2929688 C 34.072641 9.0459688 33.593922 8.8519375 33.044922 9.0859375 C 32.496922 9.3199375 32.303828 9.8033594 32.048828 10.443359 L 28.396484 19.28125 L 37.494141 22.921875 L 41.140625 14.134766 C 41.732625 12.650766 41.472234 12.049031 39.990234 11.457031 L 39.224609 11.144531 L 40.287109 8.6621094 L 41.861328 9.3613281 C 42.350328 9.5783281 42.923109 9.3725312 43.162109 8.8945312 L 44.171875 6.6328125 C 44.426875 6.1228125 44.204594 5.5034844 43.683594 5.2714844 L 36.513672 2.0859375 C 36.391422 2.0316875 36.264891 2.0037344 36.138672 2 z M 42.779297 15.400391 L 40.449219 21.021484 C 41.019219 21.677484 41.218375 22.701891 40.859375 23.587891 L 39.111328 27.761719 C 39.242328 27.753719 39.372859 27.742187 39.505859 27.742188 C 41.630859 27.742188 43.526625 28.729578 44.765625 30.267578 L 46.332031 26.527344 C 48.004031 22.397344 46.415297 17.738391 42.779297 15.400391 z M 27.671875 21.146484 L 27.107422 22.666016 C 27.018422 22.906016 27.024953 23.17125 27.126953 23.40625 L 28.212891 25.941406 C 28.316891 26.185406 28.512766 26.378562 28.759766 26.476562 L 32.378906 27.921875 C 32.497906 27.969875 32.622047 27.992187 32.748047 27.992188 C 32.882047 27.992188 33.016578 27.966109 33.142578 27.912109 L 35.679688 26.826172 C 35.931688 26.719172 36.126656 26.514813 36.222656 26.257812 L 36.769531 24.783203 L 27.671875 21.146484 z M 8.0039062 22 A 1.0001 1.0001 0 1 0 8.0039062 24 L 9.0039062 24 L 9.0039062 29.791016 L 3.3144531 42.796875 C 2.4625395 44.745369 3.9357393 47 6.0625 47 L 20.769531 47 C 22.958168 47 24.432306 44.615092 23.453125 42.658203 L 17.003906 29.763672 L 17.003906 24 L 18.003906 24 A 1.0001 1.0001 0 1 0 18.003906 22 L 8.0039062 22 z M 11.003906 24 L 15.003906 24 L 15.003906 30.236328 L 16.886719 34 L 9.3457031 34 L 11.003906 30.208984 L 11.003906 24 z M 22.007812 26.990234 C 21.618094 27.001906 21.254719 27.241906 21.105469 27.628906 C 20.905469 28.143906 21.160781 28.723828 21.675781 28.923828 L 34.621094 33.943359 C 34.679603 33.965977 34.739343 33.965557 34.798828 33.976562 C 34.77941 34.15078 34.746094 34.320696 34.746094 34.5 C 34.746094 37.123 36.880906 39.257813 39.503906 39.257812 C 42.126906 39.257812 44.261719 37.123 44.261719 34.5 C 44.261719 31.877 42.126906 29.742188 39.503906 29.742188 C 37.752129 29.742188 36.235706 30.705215 35.410156 32.119141 C 35.386612 32.107818 35.370471 32.087744 35.345703 32.078125 L 22.398438 27.058594 C 22.269688 27.008844 22.137719 26.986344 22.007812 26.990234 z M 21.841797 35.076172 L 24.802734 41 L 37.654297 41 C 35.888297 40.496 34.416594 39.290078 33.558594 37.705078 C 33.037594 37.915078 32.299859 38.011719 31.005859 38.011719 C 29.519859 38.011719 25.142359 36.341438 22.693359 35.273438 C 22.415359 35.165438 22.129797 35.109172 21.841797 35.076172 z M 11.003906 37 C 11.555906 37 12.003906 37.448 12.003906 38 C 12.003906 38.552 11.556906 39 11.003906 39 C 10.451906 39 10.003906 38.552 10.003906 38 C 10.003906 37.448 10.451906 37 11.003906 37 z M 14.503906 39 C 15.331906 39 16.003906 39.672 16.003906 40.5 C 16.003906 41.328 15.332906 42 14.503906 42 C 13.675906 42 13.003906 41.328 13.003906 40.5 C 13.003906 39.672 13.675906 39 14.503906 39 z M 25.613281 43 C 25.868281 44.232 25.649797 45.522906 24.966797 46.628906 C 24.885797 46.758906 24.793125 46.879 24.703125 47 L 46 47 C 46.552 47 47 46.552 47 46 C 47 44.343 45.657 43 44 43 L 38.396484 43 L 38.287109 43 L 25.613281 43 z"/>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl text-cyan-800 font-bold dark:text-white">Precision Lab Solutions</h3>
                </div>
                <p class="text-gray-500 dark:text-gray-400">Plan it, create it, launch it. Collaborate seamlessly with all  the organization and hit your marketing goals every month with our marketing plan.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center justify-start">
                    <div
                        class="mr-2 sm:mr-4 flex justify-center items-center mb-4 w-12  h-12 rounded-full bg-teal-100 lg:h-14 lg:w-14 dark:bg-teal-900">

                        <svg version="1.1" class="w-8 h-8 sm:w-10 sm:h-10 text-teal-800 dark:text-teal-300" fill="currentColor"
                             id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <path d="M49.807,23.804c-0.384-1.556-1.351-2.869-2.722-3.697L38.636,15h-23.2l25.442,15.376c0.969,0.585,2.037,0.863,3.093,0.863
                                c2.033,0,4.02-1.031,5.146-2.895C49.946,26.973,50.191,25.361,49.807,23.804z M37.5,22c-0.828,0-1.5-0.672-1.5-1.5
                                s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5S38.328,22,37.5,22z M41,26c-1.105,0-2-0.895-2-2c0-1.105,0.895-2,2-2s2,0.895,2,2
                                C43,25.105,42.105,26,41,26z"/>
                            <path d="M12.858,17.486L12,16.057l-0.857,1.429C10.619,18.361,8,22.833,8,25c0,2.206,1.794,4,4,4s4-1.794,4-4
                                C16,22.833,13.382,18.361,12.858,17.486z"/>
                            <line
                                style="fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;"
                                x1="12.636" y1="13.308" x2="18.842" y2="3.038"/>
                            <path
                                style="fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;"
                                d="M48.261,27.827L48.261,27.827
                                c-1.428,2.363-4.502,3.121-6.865,1.693L13.153,12.452l5.172-8.558l28.243,17.069C48.931,22.39,49.689,25.464,48.261,27.827z"/>
                            <path
                                style="fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                d="M2,38
                                h5.101C7.035,38.323,7,38.657,7,39c0,2.761,2.239,5,5,5c2.254,0,4.137-1.501,4.762-3.552C17.438,40.79,18.191,41,19,41
                                c2.049,0,3.806-1.236,4.578-3H48"/>
                            </svg>

                    </div>
                    <h3 class="mb-2 text-xl text-cyan-800 font-bold dark:text-white">Optimal Performance</h3>
                </div>
                <p class="text-gray-500 dark:text-gray-400">Protect your organization, devices and stay compliant with our structured workflows and custom permissions made for you.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center justify-start">
                    <div class="mr-2 sm:mr-4 flex justify-center items-center mb-4 w-12  h-12 rounded-full bg-teal-100 lg:h-14 lg:w-14 dark:bg-teal-900">
                        <svg version="1.1" id="Layer_1" class="w-8 h-8 sm:w-10 sm:h-10 text-teal-800 dark:text-teal-300" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <g>
                                <path d="M25.001,12c-0.367,0-0.72-0.202-0.896-0.553c-1.224-2.447-0.268-4.359,0.5-5.895c0.713-1.426,1.276-2.553,0.5-4.105
                                    c-0.247-0.494-0.047-1.095,0.447-1.342s1.095-0.047,1.342,0.447c1.224,2.447,0.268,4.359-0.5,5.895
                                    c-0.713,1.426-1.276,2.553-0.5,4.105c0.247,0.494,0.047,1.095-0.447,1.342C25.304,11.966,25.151,12,25.001,12z"/>
                            </g>
                                                        <g>
                                                            <path d="M20.001,12c-0.367,0-0.72-0.202-0.896-0.553c-1.224-2.447-0.268-4.359,0.5-5.895c0.713-1.426,1.276-2.553,0.5-4.105
                                    c-0.247-0.494-0.047-1.095,0.447-1.342c0.495-0.247,1.095-0.047,1.342,0.447c1.224,2.447,0.268,4.359-0.5,5.895
                                    c-0.713,1.426-1.276,2.553-0.5,4.105c0.247,0.494,0.047,1.095-0.447,1.342C20.304,11.966,20.151,12,20.001,12z"/>
                                                        </g>
                                                        <g>
                                                            <path d="M30.001,12c-0.367,0-0.72-0.202-0.896-0.553c-1.224-2.447-0.268-4.359,0.5-5.895c0.713-1.426,1.276-2.553,0.5-4.105
                                    c-0.247-0.494-0.047-1.095,0.447-1.342c0.494-0.248,1.095-0.047,1.342,0.447c1.224,2.447,0.268,4.359-0.5,5.895
                                    c-0.713,1.426-1.276,2.553-0.5,4.105c0.247,0.494,0.047,1.095-0.447,1.342C30.304,11.966,30.151,12,30.001,12z"/>
                                                        </g>
                                                        <path d="M42.844,45.248c-0.008-0.128-0.03-0.255-0.049-0.382c-0.011-0.071-0.014-0.144-0.028-0.215
                                c-0.006-0.03-0.017-0.059-0.024-0.088c-0.122-0.559-0.348-1.101-0.686-1.591l-5.807-8.42L34.491,32h0L31,26.939V16
                                c0.553,0,1-0.448,1-1s-0.447-1-1-1H19c-0.552,0-1,0.448-1,1s0.448,1,1,1v10.938L15.509,32h0l-4.338,6.291l-3.229,4.682
                                c-0.194,0.281-0.343,0.58-0.466,0.888c-0.481,1.201-0.432,2.563,0.187,3.741c0.388,0.74,0.963,1.339,1.649,1.754
                                C9.998,49.77,10.796,50,11.632,50h26.736c1.115,0,2.157-0.416,2.962-1.128c0.401-0.355,0.748-0.778,1.007-1.27
                                c0.386-0.737,0.553-1.546,0.507-2.343C42.844,45.256,42.845,45.252,42.844,45.248z M19.5,39c0-1.379,1.121-2.5,2.5-2.5
                                s2.5,1.121,2.5,2.5c0,1.379-1.121,2.5-2.5,2.5S19.5,40.379,19.5,39z M33.5,42.5c0,1.654-1.346,3-3,3s-3-1.346-3-3s1.346-3,3-3
                                S33.5,40.846,33.5,42.5z M21,27.562V16h8v11.562L32.061,32H17.939L21,27.562z"/>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl text-cyan-800 font-bold dark:text-white">SmartLab Services</h3>
                </div>
                <p class="text-gray-500 dark:text-gray-400">Auto-assign tasks, send Slack messages, and much more. Now power up with hundreds of new templates to help you get started.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center justify-start">
                    <div class="mr-2 sm:mr-4 flex justify-center items-center mb-4 w-12  h-12 rounded-full bg-teal-100 lg:h-14 lg:w-14 dark:bg-teal-900">
                        <svg version="1.1" id="&#x421;&#x43B;&#x43E;&#x439;_1" class="w-8 h-8 sm:w-10 sm:h-10 text-teal-800 dark:text-teal-300" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                             style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <circle cx="25.5" cy="26.5" r="2.5"/>
                                                        <path d="M15.5,1c0.059,0.9,0.262,1.763,0.666,2.528c0.398,0.77,0.982,1.436,1.644,2.092c0.657,0.66,1.406,1.314,2.056,2.191
                                C20.527,8.67,20.977,9.849,21,11l0.001,0.037c0.011,0.553-0.428,1.01-0.981,1.021c-0.553,0.011-1.01-0.428-1.021-0.981
                                c-0.001-0.025,0-0.052,0.001-0.076c0.044-0.778-0.144-1.5-0.586-2.211c-0.432-0.714-1.074-1.401-1.71-2.154
                                c-0.636-0.751-1.271-1.601-1.672-2.581C14.621,3.078,14.474,2.018,14.5,1c0.007-0.276,0.237-0.494,0.513-0.487
                                c0.26,0.007,0.469,0.211,0.486,0.465L15.5,1z"/>
                                                        <path d="M11.121,5.515c0.921,0.192,1.812,0.57,2.604,1.067c0.796,0.494,1.497,1.088,2.168,1.637c0.671,0.55,1.323,1.056,2.001,1.375
                                C18.572,9.913,19.27,10.037,20,10c0.552-0.028,1.022,0.398,1.05,0.95S20.652,11.972,20.1,12c-0.029,0.001-0.058,0.001-0.086,0H20
                                c-1.024-0.039-2.076-0.344-2.939-0.867c-0.867-0.52-1.544-1.18-2.172-1.8c-0.628-0.624-1.218-1.224-1.87-1.72
                                c-0.648-0.498-1.361-0.884-2.14-1.128L10.87,6.482c-0.264-0.083-0.411-0.363-0.328-0.627C10.619,5.608,10.873,5.464,11.121,5.515z"
                                                        />
                                                        <path d="M20.354,2.646c0.559,0.514,1.089,1.173,1.328,2.007c0.251,0.835,0.139,1.698-0.018,2.428C21.318,8.553,20.903,9.807,21,11
                                c0.045,0.552-0.367,1.036-0.919,1.081S19.045,11.714,19,11.162c-0.003-0.042-0.004-0.083-0.002-0.125L19,11
                                c0.082-1.665,0.785-3.081,1.216-4.31c0.212-0.621,0.346-1.204,0.248-1.753c-0.085-0.552-0.396-1.09-0.818-1.583L19.635,3.34
                                c-0.18-0.21-0.155-0.526,0.055-0.705C19.884,2.468,20.17,2.477,20.354,2.646z"/>
                                                        <path d="M10.629,22.928c-1.408-0.637-2.844-1.271-4.253-1.519c-0.703-0.113-1.378-0.105-2.055,0.097
                                c-0.678,0.2-1.366,0.553-2.063,0.922c-0.244,0.131-0.547,0.039-0.678-0.205c-0.122-0.228-0.046-0.51,0.163-0.653
                                c0.662-0.442,1.346-0.902,2.16-1.243c0.814-0.347,1.758-0.465,2.628-0.411c1.748,0.127,3.303,0.652,4.841,1.154
                                c0.526,0.172,0.813,0.738,0.641,1.264s-0.738,0.813-1.264,0.641c-0.035-0.011-0.068-0.024-0.101-0.039L10.629,22.928z"/>
                                                        <path d="M3,13.5c0.6,0.019,1.233,0.189,1.679,0.542c0.484,0.317,0.841,0.722,1.18,1.119c0.659,0.807,1.179,1.652,1.717,2.454
                                c0.535,0.801,1.074,1.574,1.683,2.206c0.606,0.635,1.285,1.085,1.981,1.208c0.545,0.096,0.908,0.616,0.812,1.161
                                s-0.616,0.908-1.161,0.812c-0.032-0.006-0.064-0.013-0.095-0.021l-0.036-0.01c-1.221-0.344-2.147-1.165-2.812-1.99
                                c-0.676-0.839-1.177-1.725-1.654-2.588c-0.476-0.862-0.914-1.722-1.429-2.473C4.352,15.171,3.735,14.561,3,14.5l-0.057-0.005
                                c-0.274-0.023-0.478-0.264-0.456-0.538C2.509,13.692,2.737,13.492,3,13.5z"/>
                                                        <path d="M14.447,32.895c-0.316,0.119-0.631,0.237-0.949,0.341c-0.338,0.055-0.675,0.141-1.013,0.152
                                c-0.677,0.025-1.349-0.061-1.925-0.229c-1.18-0.321-2.125-0.743-3.067-0.78c-0.931-0.066-1.863,0.271-2.72,0.846
                                c-0.874,0.545-1.639,1.323-2.391,2.099L2.36,35.345c-0.192,0.198-0.508,0.203-0.706,0.011c-0.189-0.183-0.201-0.48-0.036-0.679
                                c0.73-0.875,1.47-1.76,2.436-2.475c0.922-0.73,2.142-1.314,3.451-1.324c1.299-0.034,2.462,0.401,3.44,0.573
                                c0.996,0.187,1.818,0.109,2.608-0.345l0.04-0.023c0.481-0.276,1.095-0.111,1.372,0.371c0.277,0.481,0.111,1.095-0.371,1.372
                                C14.548,32.852,14.495,32.876,14.447,32.895z"/>
                                                        <path d="M6.633,40.661c0.686-0.888,1.094-2.069,1.047-3.213c0.004-0.832,0.355-1.575,0.78-2.164c0.431-0.596,0.95-1.078,1.495-1.505
                                c0.548-0.426,1.128-0.793,1.742-1.112c0.307-0.161,0.621-0.305,0.959-0.438l0.911-0.339l3.616-1.337
                                c0.518-0.192,1.094,0.073,1.285,0.591c0.192,0.518-0.073,1.094-0.591,1.286c-0.02,0.007-0.042,0.014-0.062,0.021l-3.688,1.098
                                l-0.914,0.274c-0.265,0.085-0.543,0.189-0.813,0.31c-0.542,0.238-1.071,0.526-1.56,0.857c-0.966,0.647-1.841,1.55-1.912,2.484
                                c-0.055,1.424-0.6,2.79-1.563,3.867c-0.184,0.205-0.499,0.223-0.704,0.039c-0.196-0.175-0.221-0.47-0.063-0.675L6.633,40.661z"/>
                                                        <path d="M24,38.021c-0.071,1.006-0.18,2.028-0.442,3.07c-0.129,0.518-0.338,1.05-0.522,1.483c-0.177,0.421-0.277,0.759-0.314,1.197
                                c-0.042,0.441-0.007,0.711,0.162,1.063c0.163,0.338,0.457,0.684,0.777,1.082c0.317,0.398,0.657,0.89,0.817,1.471
                                c0.166,0.58,0.13,1.179,0.013,1.711c-0.059,0.27-0.326,0.44-0.596,0.381c-0.26-0.057-0.428-0.306-0.387-0.565l0.002-0.012
                                c0.139-0.878-0.122-1.537-0.773-2.2c-0.312-0.343-0.698-0.712-1.008-1.232c-0.326-0.499-0.454-1.228-0.437-1.759
                                c-0.015-0.541,0.1-1.167,0.261-1.662c0.151-0.483,0.261-0.877,0.327-1.317c0.131-0.873,0.146-1.809,0.12-2.753
                                c-0.016-0.553,0.42-1.014,0.972-1.029c0.553-0.016,1.014,0.42,1.029,0.972C24.003,37.955,24.002,37.989,24,38.021z"/>
                                                        <path d="M16.5,47.015c-0.034-0.98,0.091-1.91,0.507-2.842c0.21-0.458,0.505-0.901,0.893-1.276c0.197-0.186,0.411-0.353,0.647-0.492
                                c0.231-0.148,0.381-0.219,0.568-0.336c0.719-0.426,1.339-0.896,1.811-1.472c0.476-0.573,0.839-1.282,1.178-2.042l0.002-0.005
                                c0.225-0.505,0.817-0.731,1.322-0.506c0.505,0.226,0.731,0.817,0.506,1.322c-0.012,0.027-0.026,0.054-0.039,0.079
                                c-0.445,0.798-0.951,1.629-1.661,2.348c-0.708,0.723-1.563,1.241-2.384,1.635l-0.589,0.28c-0.152,0.066-0.292,0.153-0.427,0.254
                                c-0.265,0.206-0.499,0.476-0.69,0.794c-0.382,0.629-0.591,1.467-0.644,2.229l-0.003,0.046c-0.019,0.275-0.257,0.482-0.532,0.463
                                C16.708,47.477,16.51,47.266,16.5,47.015z"/>
                                                        <path d="M28.526,46.158c-0.26-0.666-0.73-1.081-1.38-1.392c-0.644-0.313-1.477-0.555-2.263-1.042
                                c-0.797-0.474-1.482-1.217-1.929-2.027c-0.479-0.812-0.711-1.671-0.938-2.522c-0.143-0.535,0.175-1.084,0.71-1.227
                                s1.084,0.175,1.227,0.709c0.009,0.032,0.016,0.065,0.021,0.097l0.011,0.069c0.117,0.722,0.237,1.46,0.528,2.077
                                c0.272,0.632,0.659,1.162,1.212,1.581c0.548,0.434,1.261,0.726,2.03,1.192c0.772,0.442,1.504,1.268,1.721,2.168l0.004,0.018
                                c0.065,0.269-0.101,0.539-0.369,0.604C28.863,46.522,28.615,46.388,28.526,46.158z"/>
                                                        <path d="M44.526,30.158l-0.463-1.067c-0.181-0.34-0.347-0.688-0.538-1.019c-0.394-0.653-0.808-1.291-1.308-1.843
                                c-0.492-0.555-1.034-1.056-1.627-1.451c-0.297-0.194-0.601-0.376-0.915-0.511c-0.289-0.135-0.679-0.263-0.862-0.286l-0.018-0.002
                                c-0.55-0.069-0.939-0.571-0.87-1.121c0.069-0.55,0.571-0.939,1.121-0.87c0.046,0.006,0.096,0.016,0.14,0.028
                                c0.594,0.162,0.943,0.356,1.359,0.59c0.398,0.227,0.757,0.495,1.101,0.776c0.682,0.568,1.256,1.227,1.752,1.922
                                c0.504,0.693,0.889,1.447,1.242,2.202c0.17,0.381,0.309,0.772,0.463,1.156l0.371,1.178c0.083,0.263-0.063,0.544-0.326,0.626
                                c-0.246,0.077-0.506-0.045-0.607-0.275L44.526,30.158z"/>
                                                        <path d="M39,22c1.946,0.117,3.556,0.74,5.168,1.048c1.593,0.337,3.202,0.352,4.554-0.464c0.237-0.143,0.544-0.067,0.687,0.17
                                c0.135,0.223,0.073,0.51-0.132,0.662c-0.753,0.552-1.661,0.921-2.586,1.075c-0.927,0.159-1.855,0.13-2.742,0.041
                                C42.183,24.354,40.489,23.925,39,24h-0.01c-0.553,0.028-1.023-0.398-1.051-0.95s0.398-1.023,0.95-1.051
                                C38.927,21.998,38.964,21.998,39,22z"/>
                                                        <path d="M38.948,22.001c0.641-0.021,1.469-0.2,2.138-0.498c0.697-0.291,1.32-0.727,1.828-1.28c0.468-0.503,0.961-1.381,1.598-2.034
                                c0.312-0.341,0.65-0.664,1.027-0.951c0.397-0.288,0.746-0.538,1.328-0.721c0.261-0.083,0.54,0.063,0.622,0.323
                                c0.076,0.243-0.043,0.5-0.27,0.602l-0.088,0.039c-0.234,0.105-0.601,0.366-0.87,0.622c-0.286,0.266-0.547,0.57-0.788,0.891
                                c-0.517,0.642-0.784,1.343-1.397,2.186c-0.587,0.78-1.355,1.432-2.213,1.893c-0.875,0.472-1.737,0.78-2.812,0.924
                                c-0.549,0.074-1.053-0.312-1.127-0.86s0.312-1.053,0.86-1.127c0.033-0.004,0.067-0.007,0.1-0.008L38.948,22.001z"/>
                                                        <path d="M34.738,32.325c1.496,1.783,2.634,3.801,3.371,5.975c0.721,2.161,1.02,4.565,0.376,6.821
                                c-0.076,0.266-0.353,0.419-0.618,0.344c-0.253-0.072-0.404-0.326-0.353-0.58l0.001-0.007c0.414-2.022-0.006-4.142-0.811-6.052
                                c-0.814-1.916-2.008-3.689-3.442-5.151l-0.005-0.006c-0.387-0.395-0.381-1.028,0.014-1.415s1.028-0.381,1.415,0.014
                                C34.704,32.286,34.722,32.306,34.738,32.325z"/>
                                                        <path d="M47.121,40.485c-1.376,0.367-2.801,0.23-4.11-0.112c-1.317-0.348-2.552-0.905-3.717-1.566
                                c-2.319-1.343-4.403-3.061-6.103-5.219c-0.342-0.434-0.267-1.063,0.167-1.405s1.063-0.267,1.405,0.167
                                c0.013,0.017,0.026,0.034,0.038,0.052l0.008,0.012c1.363,1.99,3.214,3.747,5.268,5.115c1.033,0.679,2.133,1.26,3.286,1.647
                                c1.149,0.383,2.367,0.567,3.515,0.341l0.017-0.003c0.271-0.053,0.534,0.123,0.587,0.394C47.534,40.165,47.373,40.417,47.121,40.485z
                                "/>
                                                        <path d="M38.499,1.024c-0.039,1.162-0.181,2.269-0.385,3.391c-0.208,1.116-0.495,2.222-0.864,3.309
                                c-0.365,1.089-0.854,2.145-1.427,3.166c-0.579,1.021-1.314,1.963-2.14,2.838c-0.379,0.402-1.013,0.421-1.415,0.041
                                s-0.421-1.013-0.041-1.415c0.016-0.017,0.032-0.033,0.049-0.048l0.039-0.036c0.743-0.684,1.444-1.442,2.026-2.309
                                c0.576-0.868,1.096-1.792,1.51-2.776c0.417-0.981,0.766-2,1.043-3.043c0.273-1.038,0.491-2.12,0.606-3.167l0.003-0.023
                                c0.03-0.274,0.277-0.472,0.551-0.442C38.316,0.539,38.508,0.766,38.499,1.024z"/>
                                                        <path d="M35.582,8.969c0.63-0.074,1.418-0.286,2.096-0.562c0.699-0.277,1.363-0.644,1.974-1.087c0.613-0.44,1.179-0.955,1.653-1.554
                                c0.501-0.58,0.877-1.259,1.231-1.952l0.017-0.034c0.125-0.246,0.426-0.343,0.672-0.218c0.229,0.117,0.328,0.388,0.239,0.624
                                c-0.306,0.799-0.652,1.601-1.151,2.32c-0.471,0.736-1.061,1.399-1.72,1.983c-0.657,0.588-1.39,1.095-2.175,1.505
                                c-0.802,0.414-1.576,0.735-2.553,0.956c-0.54,0.122-1.077-0.217-1.199-0.757s0.217-1.077,0.757-1.199
                                c0.035-0.008,0.069-0.014,0.103-0.018L35.582,8.969z"/>
                                                        <path d="M39,23c-4-2-7-5-6-10c-6,3-9,1-13-2c0,5-2.742,8.914-9,11c3,3,4,7,1.473,11.333C18,32,21,35,23,39c2-4,8-6,12-5
                                C34,30,36,26,39,23z M25,29c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S27.209,29,25,29z"/>
                                                        <g>
                                                            <path d="M15.001,24c-0.081,0-0.162-0.009-0.244-0.03l-4-1c-0.536-0.134-0.861-0.677-0.728-1.213
                                    c0.134-0.536,0.679-0.86,1.213-0.728l4,1c0.536,0.134,0.861,0.677,0.728,1.213C15.856,23.697,15.449,24,15.001,24z"/>
                                                        </g>
                                                        <g>
                                                            <path d="M23,40c-0.552,0-1-0.447-1-1v-3c0-0.553,0.448-1,1-1s1,0.447,1,1v3C24,39.553,23.552,40,23,40z"/>
                                                        </g>
                                                        <g>
                                                            <path d="M34.532,34.649c-0.266,0-0.53-0.104-0.727-0.313l-2.032-2.149c-0.38-0.401-0.361-1.035,0.039-1.414
                                    c0.401-0.38,1.035-0.362,1.414,0.039l2.032,2.149c0.38,0.401,0.361,1.035-0.039,1.414C35.026,34.559,34.779,34.649,34.532,34.649z"
                                                            />
                                                        </g>
                                                        <g>
                                                            <path d="M38.899,24H36c-0.553,0-1-0.448-1-1s0.447-1,1-1h2.899c0.553,0,1,0.448,1,1S39.452,24,38.899,24z"/>
                                                        </g>
                                                        <g>
                                                            <path d="M22.001,15c-0.323,0-0.64-0.156-0.833-0.445l-2-3c-0.306-0.459-0.182-1.081,0.277-1.387
                                    c0.458-0.307,1.08-0.183,1.387,0.277l2,3c0.306,0.459,0.182,1.081-0.277,1.387C22.384,14.946,22.191,15,22.001,15z"/>
                                                        </g>
                                                        <g>
                                                            <path d="M30.043,16.766c-0.267,0-0.533-0.106-0.73-0.317c-0.377-0.403-0.356-1.036,0.047-1.414l2.957-2.766
                                    c0.403-0.376,1.036-0.357,1.414,0.047c0.377,0.403,0.356,1.036-0.047,1.414l-2.957,2.766
                                    C30.533,16.677,30.288,16.766,30.043,16.766z"/>
                                                        </g>
                            </svg>



                    </div>
                    <h3 class="mb-2 text-xl text-cyan-800 font-bold dark:text-white">Comprehensive Support</h3>
                </div>
                <p class="text-gray-500 dark:text-gray-400">Audit-proof software built for critical financial operations like month-end close and quarterly budgeting.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center justify-start">
                    <div class="mr-2 sm:mr-4 flex justify-center items-center mb-4 w-12  h-12 rounded-full bg-teal-100 lg:h-14 lg:w-14 dark:bg-teal-900">
                        <svg class="w-8 h-8 sm:w-10 sm:h-10 text-teal-800 dark:text-teal-300" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                            <polyline style="fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="35,32 35,15 43,15 43,27 "/><polyline style="fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="9,29 9,11 17,11 17,28 "/><path d="M47.418,27.737c-1.108-1.758-3.442-2.285-5.192-1.183l-9.35,5.763C33.585,33.04,34,34.022,34,35.055c0,2.17-1.765,3.935-3.935,3.935c-0.306,0-0.61-0.036-0.903-0.105c-0.769-0.182-10.592-3.124-11.71-3.458c-0.529-0.159-0.829-0.716-0.671-1.245c0.159-0.529,0.717-0.829,1.245-0.671c4.366,1.308,11.059,3.301,11.598,3.429c0.143,0.034,0.291,0.051,0.441,0.051c1.067,0,1.935-0.868,1.935-1.935c0-0.689-0.358-1.308-0.957-1.656c-0.291-0.169-10.162-4.485-12.147-5.356c-3.11-1.366-6.695-1.399-9.833-0.093l-6.448,2.686C2.105,30.847,2,31.31,2,31.943c0,0.552,0,11.995,0,12.045c0,0.552,0.448,1,1,1c0.305,0,0.548-0.165,0.587-0.194l3.485-2.556c1.776-1.303,4.143-1.589,6.226-0.732l11.696,4.146C25.651,45.885,26.331,46,27.007,46c1.291,0,2.563-0.417,3.625-1.222L46.37,32.853C48.041,31.701,48.501,29.454,47.418,27.737z"/><path d="M21.172,26.858c5.925,2.595,8.565,3.758,9.775,4.299L31,31.124V5c0-0.553-0.447-1-1-1h-8c-0.553,0-1,0.447-1,1v21.782L21.172,26.858z"/>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl text-cyan-800 font-bold dark:text-white"> Expert Maintenance</h3>
                </div>
                <p class="text-gray-500 dark:text-gray-400">Craft beautiful, delightful experiences for both marketing and product with real cross-company collaboration.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center justify-start">
                    <div class="mr-2 sm:mr-4 flex justify-center items-center mb-4 w-12  h-12 rounded-full bg-teal-100 lg:h-14 lg:w-14 dark:bg-teal-900">
                        <svg version="1.1" id="&#x421;&#x43B;&#x43E;&#x439;_1" class="w-8 h-8 sm:w-10 sm:h-10 text-teal-800 dark:text-teal-300" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                             y="0px" viewBox="0 0 50 50"
                             style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <polygon style="fill:none;stroke:currentColor;stroke-width:2;stroke-miterlimit:10;" points="45,36.547 45,13.453 25,1.906 5,13.453
                                5,36.547 25,48.094 "/>
                            <path style="fill:none;stroke:currentColor;stroke-width:2;stroke-miterlimit:10;"
                                  d="M36,18.5c3-1.5,6-3,9-4.5"/>
                            <path style="fill:none;stroke:currentColor;stroke-width:2;stroke-miterlimit:10;"
                                  d="M5,14c3,1.5,6,3,9,4.5"/>
                            <path style="fill:none;stroke:currentColor;stroke-width:2;stroke-miterlimit:10;"
                                  d="M25,36c0,4,0,8,0,12"/>
                            <circle cx="25" cy="24" r="9"/>
                            </svg>
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
            <img class="w-full rounded-[2.5rem]"
                 src="{{ url('images/gta-1.webp') }}" alt="dashboard image"
{{--                 style="mask: linear-gradient(90deg, transparent, #54d9af 10%, #00655d 85%, transparent);"--}}
            >
{{--            <div class="w-full h-full bg-teal-500 absolute -right-5 top-5 -z-1 rounded-[2.5rem]"></div>--}}
        </div>
        <div class="mt-10 sm:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-cyan-800 dark:text-white">
                Let's create more tools and ideas that brings us together.
            </h2>
            <p class="mb-6 font-light text-gray-950 md:text-lg dark:text-gray-200">
                Etiam sodales nunc sit amet leo ultrices, quis sagittis tortor tempor. Mauris tristique nulla eu semper tempus.
                Sed lacinia neque vitae malesuada dignissim. Aliquam efficitur tincidunt justo quis euismod.
            </p>
        </div>
    </div>
</section>

{{--Contact Section--}}
<section id="contact" class="relative bg-transparent dark:bg-gray-900">
    <div class="absolute top-0 left-0 w-1/2 h-1/2 lg:w-full lg:h-full"
        style="background-image: url('{{ url('images/shape-3.webp') }}'); background-position: left; background-repeat: no-repeat; z-index: -1;
        "
    ></div>
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
                           bg-teal-500 sm:w-fit hover:bg-teal-600 transition duration-300 ease-in-out
                           focus:ring-4 focus:outline-none
                           focus:ring-teal-300 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800"
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
<footer class="mt-10 p-4 bg-gray-50 sm:p-6 dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="{{ url('images/logo.webp') }}" class="mr-3 h-12" alt="FlowBite Logo" />
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
@stack('js')
<script>
    // window.addEventListener('load', () => {
    //     AOS.init({
    //         duration: 1000,
    //         easing: 'ease-in-out',
    //         once: true,
    //         mirror: false
    //     })
    // });

    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.querySelector('[data-collapse-toggle="mega-menu-full-cta"]');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        toggleButton.addEventListener('click', function() {
            const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';

            // Превключване на иконите
            if (isExpanded) {
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            } else {
                hamburgerIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const height = document.getElementById("hero").clientHeight;
        window.addEventListener("scroll", function () {
            const goHomeButton = document.getElementById("gohome");
            if (window.scrollY <= height - 45) {
                goHomeButton.style.display = "none";
            } else {
                goHomeButton.style.display = "block";
            }
        });

        document.addEventListener('click', function(event) {
            const megaMenu = document.getElementById('mega-menu-full-cta-dropdown');
            const megaMenuButton = document.getElementById('mega-menu-full-cta-dropdown-button');

            // Проверяваме дали кликнатият елемент е извън менюто и бутона
            if (!megaMenu.contains(event.target) && !megaMenuButton.contains(event.target)) {
                megaMenu.classList.add('hidden');
                megaMenuButton.setAttribute('aria-expanded', 'false'); // Добавяме aria-expanded="false"
            }
        });

        document.getElementById('mega-menu-full-cta-dropdown-button').addEventListener('click', function(event) {
            const megaMenu = document.getElementById('mega-menu-full-cta-dropdown');
            const megaMenuButton = document.getElementById('mega-menu-full-cta-dropdown-button');

            const isExpanded = megaMenuButton.getAttribute('aria-expanded') === 'true';

            // Ако менюто е скрито, го показваме и задаваме aria-expanded="true"
            if (megaMenu.classList.contains('hidden')) {
                megaMenu.classList.remove('hidden');
                megaMenuButton.setAttribute('aria-expanded', 'true');
            } else {
                // Ако менюто е видимо, го скриваме и задаваме aria-expanded="false"
                megaMenu.classList.add('hidden');
                megaMenuButton.setAttribute('aria-expanded', 'false');
            }

            // Спираме разпространяването на събитието, за да предотвратим повторното задействане
            event.stopPropagation();
        });

    });

</script>
</body>
</html>
