<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @vite(['resources/css/landing.css', 'resources/js/landing.js'])
    <script type="text/javascript" src="{{url('turnjs/extras/jquery.min.1.7.js')}}"></script>
    <script type="text/javascript" src="{{url('turnjs/extras/jquery-ui-1.8.20.custom.min.js')}}"></script>
    <script type="text/javascript" src="{{url('turnjs/extras/modernizr.2.5.3.min.js')}}"></script>
    <script type="text/javascript" src="{{url('turnjs/lib/hash.js')}}"></script>
    <style>
        .parallax {
            background-image: url('{{ Vite::asset('resources/images/parallax.svg') }}');
            background-size: cover;
            background-position: center;
        }

        .parallax-content {
            /*text-align: center;*/
            z-index: 1;
        }
    </style>


</head>
<body class="bg-gray-100">


<nav id="navbar" class="transition-bg-color fixed w-full z-20 top-0 start-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="h-10">
        </a>

        <div class="animate-slide-to-right items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
             id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <li>
                    <a href="#home"
                       class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                       aria-current="page">{{__('Home')}}</a>
                </li>
                <li>
                    <a href="#services"
                       class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                       aria-current="page">{{__('Services')}}</a>
                </li>
                <li>
                    <a href="#about-us"
                       class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                       aria-current="page">{{__('About')}}</a>
                </li>
                <li>
                    <a href="#contact-us"
                       class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                       aria-current="page">{{__('Contact')}}</a>
                </li>

            </ul>
        </div>
        <div class="flex md:hidden md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
    </div>
</nav>


<section class="top-section h-[600px] relative">
    <div id="home" class="flex justify-center items-center pt-16">
        <div class="p-8 w-[90%] grid grid-cols-2">
            <div data-fade="animate-slide-to-bottom" class="fade translate-y-[-20%] flex justify-center items-center">
                <div>
                    <h1 class="text-5xl font-bold text-center pb-10 uppercase">Projonmo Tours and <br/>Travel Agency
                    </h1>
                    <p class="mt-4 text-xl text-justify text-gray-800 pe-10 pb-10">Welcome to Projonmo Tours and Travel
                        Agency, your one-stop destination for all travel and visa-related needs. We specialize in
                        providing a wide range of services to ensure your travel experience is smooth, enjoyable, and
                        hassle-free.</p>
                    <div class="flex justify-end">
                        <a href="#contact-us" type="button"
                           class="text-white hover:shadow-pink-300 hover:shadow-lg bg-gradient-to-r from-[#1d437f] to-[#12c7f0] hover:bg-gradient-to-br focus:outline-none font-medium rounded-md text-sm px-5 py-2.5 text-center mx-16 mb-2">
                            Contact us
                        </a>
                    </div>


                </div>

            </div>
            <div data-fade="animate-fade-in" class="fade scale-50 shadow-r-xl">
                <svg width="528" height="413" viewBox="0 0 528 413" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="hero-illustration-a">
                            <stop stop-color="#A7FDE8" stop-opacity="0" offset="0%"></stop>
                            <stop stop-color="#6EFACC" offset="100%"></stop>
                        </linearGradient>
                        <linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="hero-illustration-b">
                            <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"></stop>
                            <stop stop-color="#FF4F7A" offset="100%"></stop>
                        </linearGradient>
                        <radialGradient fx="50%" fy="50%" r="100%" id="hero-illustration-c">
                            <stop stop-color="#6EFACC" offset="0%"></stop>
                            <stop stop-color="#6EFACC" stop-opacity="0" offset="100%"></stop>
                        </radialGradient>
                        <linearGradient x1="0%" y1="100%" y2="0%" id="hero-illustration-d">
                            <stop stop-color="#007CFE" stop-opacity="0" offset="0%"></stop>
                            <stop stop-color="#007DFF" offset="100%"></stop>
                        </linearGradient>
                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="hero-illustration-e">
                            <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"></stop>
                            <stop stop-color="#FF4F7A" offset="100%"></stop>
                        </linearGradient>
                        <filter x="-500%" y="-500%" width="1000%" height="1000%" filterUnits="objectBoundingBox"
                                id="dropshadow-1">
                            <feOffset dy="16" in="SourceAlpha" result="shadowOffsetOuter"></feOffset>
                            <feGaussianBlur stdDeviation="24" in="shadowOffsetOuter"
                                            result="shadowBlurOuter"></feGaussianBlur>
                            <feColorMatrix values="0 0 0 0 0.12 0 0 0 0 0.17 0 0 0 0 0.21 0 0 0 0.2 0"
                                           in="shadowBlurOuter"></feColorMatrix>
                        </filter>
                    </defs>
                    <g transform="translate(0 -1)" fill="none" fill-rule="evenodd">
                        <g transform="translate(128 290)" fill="url(#hero-illustration-a)">
                            <path
                                d="M62.225 0l1.415 1.414L1.414 63.64 0 62.225zM66.468 4.243l1.414 1.414L5.657 67.882l-1.414-1.414zM70.71 8.485L72.126 9.9 9.899 72.125 8.485 70.71zM74.953 12.728l1.415 1.414-62.226 62.226-1.414-1.415zM79.196 16.97l1.414 1.415L18.385 80.61l-1.414-1.414zM83.439 21.213l1.414 1.414-62.226 62.226-1.414-1.414zM87.681 25.456l1.414 1.414L26.87 89.095l-1.414-1.414zM91.924 29.698l1.414 1.415-62.225 62.225-1.415-1.414z"></path>
                            <path
                                d="M91.924 29.698l1.414 1.415-62.225 62.225-1.415-1.414zM96.167 33.941l1.414 1.414-62.226 62.226-1.414-1.414zM100.41 38.184l1.413 1.414-62.225 62.225-1.414-1.414zM104.652 42.426l1.414 1.415-62.225 62.225-1.415-1.414zM108.894 46.669l1.415 1.414-62.226 62.226-1.414-1.415zM113.137 50.912l1.414 1.414-62.225 62.225-1.414-1.414zM117.38 55.154l1.414 1.415-62.225 62.225-1.415-1.414zM121.622 59.397l1.415 1.414-62.226 62.226-1.414-1.415z"></path>
                            <g>
                                <path
                                    d="M100.811 0l-1.414 1.414 62.225 62.226 1.415-1.415zM96.569 4.243l-1.415 1.414 62.226 62.225 1.414-1.414zM92.326 8.485L90.912 9.9l62.225 62.226 1.414-1.414zM88.083 12.728l-1.414 1.414 62.225 62.226 1.415-1.415zM83.84 16.97l-1.414 1.415 62.226 62.225 1.414-1.414zM79.598 21.213l-1.414 1.414 62.225 62.226 1.414-1.414zM75.355 25.456l-1.414 1.414 62.226 62.225 1.414-1.414zM71.113 29.698l-1.415 1.415 62.226 62.225 1.414-1.414z"></path>
                                <path
                                    d="M71.113 29.698l-1.415 1.415 62.226 62.225 1.414-1.414zM66.87 33.941l-1.414 1.414 62.225 62.226 1.414-1.414zM62.627 38.184l-1.414 1.414 62.226 62.225 1.414-1.414zM58.385 42.426l-1.414 1.415 62.225 62.225 1.414-1.414zM54.142 46.669l-1.414 1.414 62.225 62.226 1.415-1.415zM49.9 50.912l-1.415 1.414 62.226 62.225 1.414-1.414zM45.657 55.154l-1.414 1.415 62.225 62.225 1.414-1.414zM41.414 59.397L40 60.811l62.225 62.226 1.415-1.415z"></path>
                            </g>
                        </g>
                        <g transform="matrix(1 0 0 -1 326 124)" fill="url(#hero-illustration-a)">
                            <path
                                d="M62.225 0l1.415 1.414L1.414 63.64 0 62.225zM66.468 4.243l1.414 1.414L5.657 67.882l-1.414-1.414zM70.71 8.485L72.126 9.9 9.899 72.125 8.485 70.71zM74.953 12.728l1.415 1.414-62.226 62.226-1.414-1.415zM79.196 16.97l1.414 1.415L18.385 80.61l-1.414-1.414zM83.439 21.213l1.414 1.414-62.226 62.226-1.414-1.414zM87.681 25.456l1.414 1.414L26.87 89.095l-1.414-1.414zM91.924 29.698l1.414 1.415-62.225 62.225-1.415-1.414z"></path>
                            <path
                                d="M91.924 29.698l1.414 1.415-62.225 62.225-1.415-1.414zM96.167 33.941l1.414 1.414-62.226 62.226-1.414-1.414zM100.41 38.184l1.413 1.414-62.225 62.225-1.414-1.414zM104.652 42.426l1.414 1.415-62.225 62.225-1.415-1.414zM108.894 46.669l1.415 1.414-62.226 62.226-1.414-1.415zM113.137 50.912l1.414 1.414-62.225 62.225-1.414-1.414zM117.38 55.154l1.414 1.415-62.225 62.225-1.415-1.414zM121.622 59.397l1.415 1.414-62.226 62.226-1.414-1.415z"></path>
                            <g>
                                <path
                                    d="M100.811 0l-1.414 1.414 62.225 62.226 1.415-1.415zM96.569 4.243l-1.415 1.414 62.226 62.225 1.414-1.414zM92.326 8.485L90.912 9.9l62.225 62.226 1.414-1.414zM88.083 12.728l-1.414 1.414 62.225 62.226 1.415-1.415zM83.84 16.97l-1.414 1.415 62.226 62.225 1.414-1.414zM79.598 21.213l-1.414 1.414 62.225 62.226 1.414-1.414zM75.355 25.456l-1.414 1.414 62.226 62.225 1.414-1.414zM71.113 29.698l-1.415 1.415 62.226 62.225 1.414-1.414z"></path>
                                <path
                                    d="M71.113 29.698l-1.415 1.415 62.226 62.225 1.414-1.414zM66.87 33.941l-1.414 1.414 62.225 62.226 1.414-1.414zM62.627 38.184l-1.414 1.414 62.226 62.225 1.414-1.414zM58.385 42.426l-1.414 1.415 62.225 62.225 1.414-1.414zM54.142 46.669l-1.414 1.414 62.225 62.226 1.415-1.415zM49.9 50.912l-1.415 1.414 62.226 62.225 1.414-1.414zM45.657 55.154l-1.414 1.415 62.225 62.225 1.414-1.414zM41.414 59.397L40 60.811l62.225 62.226 1.415-1.415z"></path>
                            </g>
                        </g>
                        <path d="M0 0h528v414H0z"></path>
                        <path fill="#FFF" d="M0 63h528v297H0z"
                              style="mix-blend-mode:multiply;filter:url(#dropshadow-1)"></path>
                        <path fill="#FFF" d="M0 63h528v297H0z"></path>
                        <path fill="url(#hero-illustration-b)" d="M408 230h80v48h-80z"></path>
                        <path
                            d="M0 0h4v4H0V0zm0 12h4v4H0v-4zm0 12h4v4H0v-4zm0 12h4v4H0v-4zm0 12h4v4H0v-4zm0 12h4v4H0v-4zM12 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zM24 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zM36 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zM48 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zM60 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4z"
                            transform="rotate(45 -118.861 431.981)" fill="url(#hero-illustration-c)"></path>
                        <path fill="#FFF" d="M288 254h160v160H288z"
                              style="mix-blend-mode:multiply;filter:url(#dropshadow-1)"></path>
                        <path fill="#FFF" d="M288 254h160v160H288z"></path>
                        <path d="M248 79h88v24c0 35.346-28.654 64-64 64h-24V79z"
                              fill="url(#hero-illustration-d)"></path>
                        <path d="M348 132c0 26.51-21.49 48-48 48 0-26.51 21.49-48 48-48z"
                              fill="url(#hero-illustration-e)" transform="matrix(1 0 0 -1 0 312)"></path>
                        <path fill="#FFF" d="M200 31h88v88h-88z"
                              style="mix-blend-mode:multiply;filter:url(#dropshadow-1)"></path>
                        <path fill="#FFF" d="M200 31h88v88h-88z"></path>
                        <path fill="#F6F8FA" d="M24 248l88 88H24z"></path>
                        <rect fill="url(#hero-illustration-d)" x="335" y="242" width="32" height="32" rx="16"></rect>
                    </g>
                </svg>
            </div>

        </div>
    </div>
</section>

<section class="relative pt-20">
    <div data-fade="animate-slide-to-bottom"
         class="fade translate-y-[-20%] text-center mb-4 text-4xl font-bold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
        <h1 id="services">Services</h1>
        <p class="mt-2 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-200">
            A comprehensive range of services offered by our US
        </p>
    </div>
    <div class="bg-cyan-300 absolute z-[-1] top-0 w-[43%] h-[450px]"></div>
    <div class="flex justify-center items-center">
        <div class="grid-cols-12 justify-center grid gap-6 w-[80%]">
            <div data-fade="animate-fade-in"
                 class="fade scale-50 col-span-3 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col items-center pb-10">
                    <div class="pt-10 pb-2">
                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-1-a">
                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#007DFF" offset="100%"></stop>
                                </linearGradient>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-1-b">
                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FF4F7A" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                                <path d="M8 0h24v24a8 8 0 0 1-8 8H0V8a8 8 0 0 1 8-8z" fill="url(#feature-1-a)"></path>
                                <path d="M48 16v24a8 8 0 0 1-8 8H16c0-17.673 14.327-32 32-32z"
                                      fill="url(#feature-1-b)"></path>
                            </g>
                        </svg>
                    </div>
                    <h2 class="mb-1 text-2xl font-medium text-gray-900 pb-2">Visa Management</h2>
                    <span class="text-sm text-gray-500 px-5 text-center line-clamp-3">
                        We provide comprehensive visa management services for various travel purposes, including tourism, medical visits, business trips, and employment opportunities. Our expert team ensures accurate and timely processing, making your journey hassle-free.
                    </span>

                    <span
                        class="w-full text-right px-3 underline cursor-pointer text-blue-600 italic text-xs hover:text-red-600" data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                        Read More ...
                    </span>
                </div>
            </div>
            <div data-fade="animate-fade-in"
                 class="fade scale-50 col-span-3 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col items-center pb-10">
                    <div class="pt-10 pb-2">
                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-2-a">
                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#007DFF" offset="100%"></stop>
                                </linearGradient>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-2-b">
                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FF4F7A" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h32v7c0 13.807-11.193 25-25 25H0V0z" fill="url(#feature-2-a)"></path>
                                <path d="M48 16v7c0 13.807-11.193 25-25 25h-7c0-17.673 14.327-32 32-32z"
                                      fill="url(#feature-2-b)" transform="matrix(1 0 0 -1 0 64)"></path>
                            </g>
                        </svg>
                    </div>
                    <h2 class="mb-1 text-2xl font-medium text-gray-900 pb-2">Air Ticket Booking</h2>
                    <span class="text-sm text-gray-500 px-5 text-center line-clamp-3">
                        Our air ticket booking service offers convenient and cost-effective solutions for domestic and international travel. We help you find the best routes and fares, ensuring a smooth and comfortable journey to your destination.
                    </span>
                    <span
                        class="w-full text-right px-3 underline cursor-pointer text-blue-600 italic text-xs hover:text-red-600" data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                        Read More ...
                    </span>
                </div>
            </div>
            <div data-fade="animate-fade-in"
                 class="fade scale-50 col-span-3 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col items-center pb-10">
                    <div class="pt-10 pb-2">
                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-3-a">
                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#007DFF" offset="100%"></stop>
                                </linearGradient>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-3-b">
                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FF4F7A" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                                <circle fill="url(#feature-3-a)" cx="16" cy="16" r="16"></circle>
                                <path d="M16 16c17.673 0 32 14.327 32 32H16V16z" fill="url(#feature-3-b)"></path>
                            </g>
                        </svg>
                    </div>
                    <h2 class="mb-1 text-2xl font-medium text-gray-900 pb-2 text-center">Work Permits</h2>
                    <span class="text-sm text-gray-500 px-5 text-center line-clamp-3">
                        For individuals seeking employment abroad, we offer specialized services to process visas with work permits. We ensure all legal requirements are met and provide assistance with necessary documentation, making the process seamless and efficient.
                    </span>
                    <span
                        class="w-full text-right px-3 underline cursor-pointer text-blue-600 italic text-xs hover:text-red-600" data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                        Read More ...
                    </span>
                </div>
            </div>
            <div data-fade="animate-fade-in"
                 class="fade scale-50 col-span-3 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col items-center pb-10">
                    <div class="pt-10 pb-2">
                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-3-a">
                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#007DFF" offset="100%"></stop>
                                </linearGradient>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-3-b">
                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FF4F7A" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                                <circle fill="url(#feature-3-a)" cx="16" cy="16" r="16"></circle>
                                <path d="M16 16c17.673 0 32 14.327 32 32H16V16z" fill="url(#feature-3-b)"></path>
                            </g>
                        </svg>
                    </div>
                    <h2 class="mb-1 text-2xl font-medium text-gray-900 pb-2 text-center">E-Visa Processing</h2>
                    <span class="text-sm text-gray-500 px-5 text-center line-clamp-3">
                        Our e-visa processing service simplifies the visa application process, allowing you to apply online with ease. We guide you through each step, ensuring your e-visa is processed quickly and efficiently, so you can focus on your travel plans.
                    </span>
                    <span
                        class="w-full text-right px-3 underline cursor-pointer text-blue-600 italic text-xs hover:text-red-600" data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                        Read More ...
                    </span>
                </div>
            </div>
            <div data-fade="animate-fade-in"
                 class="fade scale-50 col-span-3 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col items-center pb-10">
                    <div class="pt-10 pb-2">
                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-3-a">
                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#007DFF" offset="100%"></stop>
                                </linearGradient>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-3-b">
                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FF4F7A" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                                <circle fill="url(#feature-3-a)" cx="16" cy="16" r="16"></circle>
                                <path d="M16 16c17.673 0 32 14.327 32 32H16V16z" fill="url(#feature-3-b)"></path>
                            </g>
                        </svg>
                    </div>
                    <h2 class="mb-1 text-2xl font-medium text-gray-900 pb-2 text-center">Legalization</h2>
                    <span class="text-sm text-gray-500 px-5 text-center line-clamp-3">
                        We provide document legalization services to ensure your important documents meet all legal requirements for use abroad. Whether it's for work, study, or travel, we handle the entire process, guaranteeing that your documents are properly authenticated and accepted in your destination country.
                    </span>
                    <span
                        class="w-full text-right px-3 underline cursor-pointer text-blue-600 italic text-xs hover:text-red-600" data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                        Read More ...
                    </span>
                </div>
            </div>
            <div data-fade="animate-fade-in"
                 class="fade scale-50 col-span-3 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col items-center pb-10">
                    <div class="pt-10 pb-2">
                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-3-a">
                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#007DFF" offset="100%"></stop>
                                </linearGradient>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-3-b">
                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FF4F7A" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                                <circle fill="url(#feature-3-a)" cx="16" cy="16" r="16"></circle>
                                <path d="M16 16c17.673 0 32 14.327 32 32H16V16z" fill="url(#feature-3-b)"></path>
                            </g>
                        </svg>
                    </div>
                    <h2 class="mb-1 text-2xl font-medium text-gray-900 pb-2 text-center">Hotel Reservation</h2>
                    <span class="text-sm text-gray-500 px-5 text-center line-clamp-3">
                        Our hotel reservation service helps you secure the best accommodations to suit your preferences and budget. We offer a wide range of options, from luxury hotels to budget-friendly stays, ensuring a comfortable and enjoyable experience wherever you go.
                    </span>
                    <span
                        class="w-full text-right px-3 underline cursor-pointer text-blue-600 italic text-xs hover:text-red-600" data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                        Read More ...
                    </span>
                </div>
            </div>
            <div data-fade="animate-fade-in"
                 class="fade scale-50 col-span-3 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col items-center pb-10">
                    <div class="pt-10 pb-2">
                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-4-a">
                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FF4F7A" offset="100%"></stop>
                                </linearGradient>
                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-4-b">
                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#007DFF" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                                <path d="M32 16h16v16c0 8.837-7.163 16-16 16H16V32c0-8.837 7.163-16 16-16z"
                                      fill="url(#feature-4-a)"></path>
                                <path d="M16 0h16v16c0 8.837-7.163 16-16 16H0V16C0 7.163 7.163 0 16 0z"
                                      fill="url(#feature-4-b)"></path>
                            </g>
                        </svg>
                    </div>
                    <h2 class="mb-1 text-2xl font-medium text-gray-900 pb-2">Supportive Courses</h2>
                    <span class="text-sm text-gray-500 px-5 text-center line-clamp-3">
                        We offer a range of supportive courses designed for foreign candidates preparing to work or study abroad. Our tailored programs help you meet the requirements of your destination country and ease your transition, enhancing your prospects and readiness.
                    </span>
                    <span
                        class="w-full text-right px-3 underline cursor-pointer text-blue-600 italic text-xs hover:text-red-600" data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                        Read More ...
                    </span>
                </div>
            </div>
            <div data-fade="animate-fade-in"
                 class="fade scale-50 col-span-3 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col items-center pb-10">
                    <div class="pt-10 pb-2">
                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-5-a">
                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#007DFF" offset="100%"></stop>
                                </linearGradient>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-5-b">
                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FF4F7A" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                                <path d="M8 0h24v24a8 8 0 0 1-8 8H0V8a8 8 0 0 1 8-8z" fill="url(#feature-5-a)"></path>
                                <path d="M48 16v7c0 13.807-11.193 25-25 25h-7c0-17.673 14.327-32 32-32z"
                                      fill="url(#feature-5-b)" transform="matrix(1 0 0 -1 0 64)"></path>
                            </g>
                        </svg>
                    </div>
                    <h2 class="mb-1 text-2xl font-medium text-gray-900 pb-2">Tour Packages</h2>
                    <span class="text-sm text-gray-500 px-5 text-center line-clamp-3">
                        Explore the world with our diverse tour packages, crafted to suit different interests and budgets. Whether you're seeking adventure, relaxation, or cultural experiences, we have the perfect package to make your travel dreams come true. Enjoy personalized itineraries and unforgettable experiences with Projonmo Tours and Travel Agency.
                    </span>
                    <span
                        class="w-full text-right px-3 underline cursor-pointer text-blue-600 italic text-xs hover:text-red-600" data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                        Read More ...
                    </span>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="pt-20">
    <div class="parallax h-96 flex items-center justify-center overflow-hidden">
        <div class="parallax-content w-full">
            <div class="flex">
                <div class="flex-none w-[55%]"></div>
                <div data-fade="animate-slide-to-right" class="fade translate-x-[-20%] flex-initial w-[45%]">
                    <h1 class="text-gray-700 font-bold text-5xl capitalize">Our Commitment</h1>
                    <p class="px-6 py-6">
                        At Projonmo Tours and Travel Agency, our clients are at the heart of everything we do. We are
                        dedicated to delivering exceptional value through our comprehensive travel services. Our team
                        works tirelessly to ensure that every aspect of your journey exceeds expectations. From
                        competitive pricing and personalized travel plans to expert advice and support, we strive to
                        create unparalleled value for each of our clients. Your satisfaction and enjoyment are our top
                        priorities, and we are committed to making your travel experience unforgettable.
                    </p>
                    {{--                    <div class="flex justify-end px-6 pt-6">--}}
                    {{--                        <button type="button"--}}
                    {{--                                class="text-white hover:shadow-pink-300 hover:shadow-lg bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:outline-none font-medium rounded-md text-sm px-5 py-2.5 text-center me-2 mb-2">--}}
                    {{--                            Contact us--}}
                    {{--                        </button>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section class="pt-20">--}}
{{--    <div class="flex justify-center items-center">--}}
{{--        <div class="w-[80%]">--}}
{{--            <div class="w-full bg-white border border-gray-200 rounded-lg shadow">--}}
{{--                <div class="h-96 flex items-center justify-center overflow-hidden">--}}
{{--                    <div class=" w-full">--}}
{{--                        <div class="flex">--}}
{{--                            <div  data-fade="animate-slide-to-right" class="fade translate-x-[-20%] flex-none w-[45%] px-6">--}}
{{--                                <h1 class="text-gray-700 font-bold text-6xl capitalize">Book Self</h1>--}}
{{--                                <p class="px-6 py-6">We are concerned about user experience. So, we created books to provide user-friendly manual, tips and tricks, documentation and introduction system.</p>--}}
{{--                                <p class="px-6 pb-6">This is very useful to explore and learn very quickly about our system and services.</p>--}}
{{--                            </div>--}}
{{--                            <div class="flex-initial w-[55%]">--}}
{{--                                <div data-fade="animate-fade-in" class="fade scale-50 flex space-y-2 px-4">--}}
{{--                                    <div class="flex-1 space-x-5 book-self relative w-screen">--}}
{{--                                        <img src="{{url('images/book-self/1/img.png')}}" onclick="loadApp('pages/')" data-modal-target="flipbook-modal" data-modal-toggle="flipbook-modal" class="hover:-translate-y-1 hover:-translate-x-1 hover:shadow-lg hover:shadow-gray-600 transform transition duration-300 ease-in-out shadow-md shadow-gray-600 rounded-lg p-1 bg-white" alt="">--}}
{{--                                        <img src="{{url('images/book-self/2/img.png')}}" class="hover:-translate-y-1 hover:-translate-x-1 hover:shadow-lg hover:shadow-gray-600 transform transition duration-300 ease-in-out shadow-md shadow-gray-600 rounded-lg p-1 bg-white">--}}
{{--                                        <img src="{{url('images/book-self/3/img.png')}}" class="hover:-translate-y-1 hover:-translate-x-1 hover:shadow-lg hover:shadow-gray-600 transform transition duration-300 ease-in-out shadow-md shadow-gray-600 rounded-lg p-1 bg-white">--}}
{{--                                        <img src="{{url('images/book-self/4/img.png')}}" class="hover:-translate-y-1 hover:-translate-x-1 hover:shadow-lg hover:shadow-gray-600 transform transition duration-300 ease-in-out shadow-md shadow-gray-600 rounded-lg p-1 bg-white">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


<section class="relative">
    <div data-fade="animate-slide-to-bottom" class="fade translate-y-[-20%] text-center text-5xl py-20">
        <h1>Our Access</h1>
    </div>
    <div class="bg-red-100 absolute z-[-1] top-10 w-[43%] h-[450px] right-0"></div>

    <div class="flex justify-center items-center px-5">
        <div class="grid-cols-12 grid gap-2">
            <div data-fade="animate-fade-in"
                 class="hover:shadow-lg hover:-translate-x-1 hover:-translate-y-1 duration-100 fade scale-50 col-span-2 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col px-4 py-2">
                    <h2 class="text-xl font-medium text-gray-900 truncate pb-1">United Arab Emirates</h2>
                    <img src="{{ Vite::asset('resources/images/flags/ae.svg') }}" class="w-full rounded-md">
                </div>
            </div>
            <div data-fade="animate-fade-in"
                 class="hover:shadow-lg hover:-translate-x-1 hover:-translate-y-1 duration-100 fade scale-50 col-span-2 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col px-4 py-2">
                    <h2 class="text-xl font-medium text-gray-900 truncate pb-1">Canada</h2>
                    <img src="{{ Vite::asset('resources/images/flags/ca.svg') }}" class="w-full rounded-md">
                </div>
            </div>
            <div data-fade="animate-fade-in"
                 class="hover:shadow-lg hover:-translate-x-1 hover:-translate-y-1 duration-100 fade scale-50 col-span-2 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col px-4 py-2">
                    <h2 class="text-xl font-medium text-gray-900 truncate pb-1">China</h2>
                    <img src="{{ Vite::asset('resources/images/flags/cn.svg') }}" class="w-full rounded-md">
                </div>
            </div>
            <div data-fade="animate-fade-in"
                 class="hover:shadow-lg hover:-translate-x-1 hover:-translate-y-1 duration-100 fade scale-50 col-span-2 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col px-4 py-2">
                    <h2 class="text-xl font-medium text-gray-900 truncate pb-1">India</h2>
                    <img src="{{ Vite::asset('resources/images/flags/in.svg') }}" class="w-full rounded-md">
                </div>
            </div>
            <div data-fade="animate-fade-in"
                 class="hover:shadow-lg hover:-translate-x-1 hover:-translate-y-1 duration-100 fade scale-50 col-span-2 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col px-4 py-2">
                    <h2 class="text-xl font-medium text-gray-900 truncate pb-1">Maldives</h2>
                    <img src="{{ Vite::asset('resources/images/flags/mv.svg') }}" class="w-full rounded-md">
                </div>
            </div>
            <div data-fade="animate-fade-in"
                 class="hover:shadow-lg hover:-translate-x-1 hover:-translate-y-1 duration-100 fade scale-50 col-span-2 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col px-4 py-2">
                    <h2 class="text-xl font-medium text-gray-900 truncate pb-1">Poland</h2>
                    <img src="{{ Vite::asset('resources/images/flags/pl.svg') }}" class="w-full rounded-md border">
                </div>
            </div>

        </div>
    </div>
</section>


<section
    class="relative bg-white bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] py-10 my-20">
    <div data-fade="animate-slide-to-bottom"
         class="fade translate-y-[-20%] text-center mb-4 text-4xl font-bold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
        <h1 id="about-us">About Us</h1>
        <p class="mb-8 mt-2 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-200">
            We have an experienced and handsome team
        </p>
    </div>
    <div class="py-8 px-4 mx-auto max-w-screen-xl z-10 relative">

        <h1 class="mb-2 text-xl  lg:text-2xl tracking-tight leading-none text-gray-900 dark:text-white">
            Our Mission:</h1>
        <p class="mb-4 text-md font-normal text-gray-500 dark:text-gray-200">
            Our mission is to provide exceptional travel solutions that exceed our clients' expectations. We aim to be a
            trusted partner in your travel journey, offering personalized and innovative services that cater to all your
            travel needs.
        </p>
        <h1 class="mb-2 text-xl  lg:text-2xl tracking-tight leading-none text-gray-900 dark:text-white">
            What We Offer:</h1>
        <p class="mb-4 text-md font-normal text-gray-500 dark:text-gray-200">
            We specialize in efficient visa management, ensuring smooth processing for tourist, medical, business, and
            work visas. Our air ticket booking service provides competitive rates and convenient options for flights
            worldwide. For those seeking employment abroad, we handle work permits and related visas with expertise and
            precision. Additionally, we offer supportive courses tailored for individuals preparing to work or study
            overseas, ensuring a smooth transition. Our customized tour packages cater to diverse interests, from
            adventure and relaxation to cultural exploration and more.
        </p>
        <h1 class="mb-2 text-xl  lg:text-2xl tracking-tight leading-none text-gray-900 dark:text-white">
            Our Values:</h1>
        <p class="mb-4 text-md font-normal text-gray-500 dark:text-gray-200">
            At Projonmo Tours and Travel Agency, we prioritize a client-centric approach, putting your needs and
            preferences at the core of our operations. We conduct our business with integrity and transparency, ensuring
            honest communication and fair pricing. Excellence is our standard; we strive for it in every aspect of our
            service, from meticulous planning to exceptional customer care. Embracing innovation, we continually seek
            the best travel solutions to stay ahead in the dynamic travel industry.
        </p>
        <h1 class="mb-2 text-xl  lg:text-2xl tracking-tight leading-none text-gray-900 dark:text-white">
            Why Choose Us:</h1>
        <p class="mb-4 text-md font-normal text-gray-500 dark:text-gray-200">
            Choosing Projonmo Tours and Travel Agency means choosing expertise and experience. Our team of seasoned
            professionals brings extensive knowledge to every aspect of travel planning. We provide personalized
            attention, listening to your needs and tailoring our services to create unique and fulfilling travel
            experiences. From the initial consultation to post-travel support, we offer comprehensive assistance,
            ensuring you have a trusted partner with you every step of the way.
        </p>

    </div>
</section>


<section class="relative">
    <div data-fade="animate-slide-to-bottom"
         class="fade translate-y-[-20%] text-center text-5xl pt-20 mb-4 text-4xl font-bold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
        <h1 id="contact-us">Contact Us</h1>
        <p class="mb-8 mt-2 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-200">
            15/12D, Block: F, Hazi Chinu Miah Road, Mohammadpur, Dhaka-1207
        </p>

    </div>
    <div class="bg-[#00ff4720] absolute z-[-1] top-10 w-full h-[450px] right-0"></div>
    <div class="flex justify-center items-center">
        <div class="grid grid-cols-2 gap-6 w-[80%]">
            <div data-fade="animate-fade-in"
                 class="fade scale-50 bg-white opacity-75 border border-gray-200 rounded-lg shadow-pink-500/50 shadow-lg px-6 py-8">
                <form method="post" action="/" id="form-contact">
                    <div class="grid gap-6 md:grid-cols-12">
                        <div class="col-span-12">
                            <label for="name"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full
                                Name</label>
                            <input type="text" id="name"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="John Doe" required/>
                        </div>
                        <div class="col-span-12">
                            <label for="email"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" id="email"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="example@example.com" required/>
                        </div>
                        <div class="col-span-12">
                            <label for="phone"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                Number</label>
                            <input type="email" id="email"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="+880xxxxxxxx" required/>
                        </div>
                        <div class="col-span-12">
                            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                            <input type="text" id="subject"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="This is a subject" required/>
                        </div>
                        <div class="col-span-12">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                message</label>
                            <textarea id="message" rows="4" required
                                      class="block resize-none p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      placeholder="Write your thoughts here..."></textarea>
                        </div>
                        <div class="g-recaptcha col-span-8" data-callback="captchaCallback"
                             data-sitekey="{{env('GOOGLE_RECAPTCHA_SITE_KEY')}}"></div>
                        <div class="px-4 py-6 col-span-4">
                            <button type="submit"
                                    class="w-full text-white hover:shadow-pink-300 hover:shadow-lg bg-gradient-to-r from-[#1d437f] to-[#12c7f0] hover:bg-gradient-to-br focus:outline-none font-medium rounded-md text-sm px-5 py-2.5 text-center">
                                Send
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="px-6 py-8">
                <ol data-fade="animate-slide-to-left"
                    class="fade translate-x-[20%] relative border-s border-gray-200 dark:border-gray-700">
                    <li class="mb-10 ms-6">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </span>
                        <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                            Contact
                        </h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                            Information service
                        </time>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Contact us to know
                            our services</p>
                    </li>
                    <li class="mb-10 ms-6">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Choose</h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                            Select our service
                        </time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                            Select your required services and know the requirements
                        </p>
                    </li>
                    <li class="mb-10 ms-6">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Prepare</h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Plan
                            Ready your documents
                        </time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                            Prepare your required documents and courses with the help of our specialized team
                        </p>
                    </li>
                    <li class="mb-10 ms-6">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Be Patient</h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Plan
                            Wait for Visa processing
                        </time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                            It is a time-consuming process to complete visa processing so, be patient.
                        </p>
                    </li>
                    <li class="ms-6">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Complete</h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                            Congratulation
                        </time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                            Congratulations, at this stage you finally got your visa processed
                        </p>
                    </li>

                </ol>
            </div>
        </div>
    </div>
</section>

{{-- Flipbox modal--}}
<div id="flipbook-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div id="canvas">
        <div class="inline-flex rounded-md shadow-sm absolute top-1 right-10 text-gray-400 z-[1000] ">
            <button id="fullscreenBtn" data-modal-resize="flipbook-modal" aria-current="page"
                    class="px-4 py-2 text-sm font-medium hover:text-blue-700 text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 focus:z-10 focus:text-blue-700">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="black">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"/>
                </svg>
            </button>
            <button onclick="removeHashFromUrl()" data-modal-hide="flipbook-modal"
                    class="px-4 py-2 text-sm font-medium text-gray-900 hover:text-blue-700 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 focus:z-10 focus:text-blue-700">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="black">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <div class="magazine-viewport">
            <div class="container">
                <div class="magazine">
                    <!-- Next button -->
                    <div ignore="1" class="next-button"></div>
                    <!-- Previous button -->
                    <div ignore="1" class="previous-button"></div>
                </div>
            </div>
            <div class="bottom">
                <div id="slider-bar" class="turnjs-slider">
                    <div id="slider"></div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Read More--}}
<div id="popup-modal" tabindex="-1"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-5 py-10">
                <span id="popup-model-content" class="text-md font-normal text-gray-500 dark:text-gray-400"></span>
            </div>
        </div>
    </div>
</div>
<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="h-10">
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#home" class="hover:underline me-4 md:me-6">Home</a>
                </li>
                <li>
                    <a href="#services" class="hover:underline me-4 md:me-6">Service</a>
                </li>
                <li>
                    <a href="#about-us" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#contact-us" class="hover:underline me-4 md:me-6">Contact</a>
                </li>
                <li>
                    <a href="#contact-us" class="hover:underline">Privecy Policy</a>
                </li>

            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"/>
        <span class="block text-sm text-right text-gray-500 sm:text-center dark:text-gray-400">© 2024
            <a href="/"
               class="hover:underline">Projonmo Tours and Travels™</a>. All Rights Reserved.</span>
    </div>
</footer>

<script>
    const paragraphs = document.querySelectorAll('span[data-modal-target="popup-modal"]');

    paragraphs.forEach(paragraph => {
        paragraph.addEventListener('click', (event) => {
            const txt = event.target.previousElementSibling.innerText
            document.getElementById('popup-model-content').innerText = txt
        });
    });
    const parallax = document.querySelector('.parallax')

    const navbar = document.getElementById('navbar');
    let scrolled = false;
    const fadeInElement = document.getElementsByClassName('fade');
    document.addEventListener('DOMContentLoaded', addFadeInClass);
    window.addEventListener('scroll', function () {
        let offset = window.pageYOffset
        parallax.style.backgroundPositionY = offset * 0.5 + 'px'
        if (window.scrollY > 100) { // Adjust 100 to your desired scroll position
            if (!scrolled) {
                navbar.classList.add('bg-gray-200');
                scrolled = true;
            }
        } else {
            if (scrolled) {
                navbar.classList.remove('bg-gray-200');
                scrolled = false;
            }
        }
        addFadeInClass()
    })

    function addFadeInClass() {
        for (let i = 0; i < fadeInElement.length; i++) {
            if (isInViewport(fadeInElement[i])) {
                fadeInElement[i].classList.remove('scale-50')
                fadeInElement[i].classList.remove('translate-y-[-20%]')
                fadeInElement[i].classList.remove('translate-x-[-20%]')
                fadeInElement[i].classList.remove('translate-x-[20%]')
                fadeInElement[i].classList.add(fadeInElement[i].getAttribute('data-fade'));
            }
        }
    }

    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top < (window.innerHeight || document.documentElement.clientHeight) &&
            rect.bottom > 0 &&
            rect.left < (window.innerWidth || document.documentElement.clientWidth) &&
            rect.right > 0
        );
    }

    const fullscreenBtn = document.getElementById('fullscreenBtn');
    const fullscreenElement = document.getElementById('flipbook-modal');
    const icon = fullscreenBtn.innerHTML

    fullscreenBtn.addEventListener('click', toggleFullscreen);

    function toggleFullscreen() {
        if (!document.fullscreenElement) {
            // If no element is fullscreen, request fullscreen
            fullscreenElement.requestFullscreen()
                .then(() => {
                    fullscreenBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-4 h-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 9V4.5M9 9H4.5M9 9 3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5 5.25 5.25" />
</svg>
`
                })
                .catch(err => {
                    console.error('Error attempting to enable full-screen mode:', err.message);
                });
        } else {
            // If an element is fullscreen, exit fullscreen
            document.exitFullscreen()
                .then(() => {
                    fullscreenBtn.innerHTML = icon
                })
                .catch(err => {
                    console.error('Error attempting to exit full-screen mode:', err.message);
                });
        }
    }

    // Fullscreen change event listener (to update UI, if needed)
    document.addEventListener('fullscreenchange', () => {
        if (document.fullscreenElement) {
            console.log('Fullscreen mode activated');
            // You can add UI changes here when entering fullscreen
        } else {
            console.log('Fullscreen mode exited');
            // You can add UI changes here when exiting fullscreen
        }
    });

</script>
<script type="text/javascript">

    function loadApp(page) {
        setPageFolder(page)
        $('#canvas').fadeIn(1000);

        let flipbook = $('.magazine');

        // Check if the CSS was already loaded

        if (flipbook.width() == 0 || flipbook.height() == 0) {
            setTimeout(loadApp, 10);
            return;
        }

        // Create the flipbook

        const flipBookOptions = {

            // Magazine width

            width: 922,

            // Magazine height

            height: 600,

            // Duration in millisecond

            duration: 1000,

            // Enables gradients

            gradients: true,

            // Auto center this flipbook

            autoCenter: true,

            // Elevation from the edge of the flipbook when turning a page

            elevation: 50,

            // The number of pages

            pages: 12,

            // Events

            when: {
                turning: function (event, page, view) {

                    var book = $(this),
                        currentPage = book.turn('page'),
                        pages = book.turn('pages');

                    // Update the current URI

                    Hash.go(getPageFolder() + page).update();

                    // Show and hide navigation buttons

                    disableControls(page);

                },

                turned: function (event, page, view) {

                    disableControls(page);

                    $(this).turn('center');

                    $('#slider').slider('value', getViewNumber($(this), page));

                    if (page == 1) {
                        $(this).turn('peel', 'br');
                    }

                },

                missing: function (event, pages) {

                    // Add pages that aren't in the magazine

                    for (var i = 0; i < pages.length; i++)
                        addPage(pages[i], $(this));

                }
            }

        }

        flipbook.turn(flipBookOptions);

        // Zoom.js

        $('.magazine-viewport').zoom({
            flipbook: $('.magazine'),

            max: function () {

                return largeMagazineWidth() / $('.magazine').width();

            },

            when: {
                swipeLeft: function () {

                    $(this).zoom('flipbook').turn('next');

                },

                swipeRight: function () {

                    $(this).zoom('flipbook').turn('previous');

                },

                resize: function (event, scale, page, pageElement) {

                    if (scale == 1)
                        loadSmallPage(page, pageElement);
                    else
                        loadLargePage(page, pageElement);

                },

                zoomIn: function () {

                    $('#slider-bar').hide();
                    $('.made').hide();
                    $('.magazine').removeClass('animated').addClass('zoom-in');
                    $('.zoom-icon').removeClass('zoom-icon-in').addClass('zoom-icon-out');

                    if (!window.escTip && !$.isTouch) {
                        escTip = true;

                        $('<div />', {'class': 'exit-message'}).html('<div>Press ESC to exit</div>').appendTo($('body')).delay(2000).animate({opacity: 0}, 500, function () {
                            $(this).remove();
                        });
                    }
                },

                zoomOut: function () {

                    $('#slider-bar').fadeIn();
                    $('.exit-message').hide();
                    $('.made').fadeIn();
                    $('.zoom-icon').removeClass('zoom-icon-out').addClass('zoom-icon-in');

                    setTimeout(function () {
                        $('.magazine').addClass('animated').removeClass('zoom-in');
                        resizeViewport();
                    }, 0);

                }
            }
        });

        // Zoom event

        if ($.isTouch)
            $('.magazine-viewport').bind('zoom.doubleTap', zoomTo);
        else
            $('.magazine-viewport').bind('zoom.tap', zoomTo);


        // Using arrow keys to turn the page

        $(document).keydown(function (e) {

            var previous = 37, next = 39, esc = 27;

            switch (e.keyCode) {
                case previous:

                    // left arrow
                    $('.magazine').turn('previous');
                    e.preventDefault();

                    break;
                case next:

                    //right arrow
                    $('.magazine').turn('next');
                    e.preventDefault();

                    break;
                case esc:

                    $('.magazine-viewport').zoom('zoomOut');
                    e.preventDefault();

                    break;
            }
        });

        // URIs - Format #/page/1

        Hash.on('^page\/([0-9]*)$', {
            yep: function (path, parts) {
                var page = parts[1];

                if (page !== undefined) {
                    if ($('.magazine').turn('is'))
                        $('.magazine').turn('page', page);
                }

            },
            nop: function (path) {

                if ($('.magazine').turn('is'))
                    $('.magazine').turn('page', 1);
            }
        });


        $(window).resize(function () {
            resizeViewport();
        }).bind('orientationchange', function () {
            resizeViewport();
        });

        // Regions

        if ($.isTouch) {
            $('.magazine').bind('touchstart', regionClick);
        } else {
            $('.magazine').click(regionClick);
        }

        // Events for the next button

        $('.next-button').bind($.mouseEvents.over, function () {

            $(this).addClass('next-button-hover');

        }).bind($.mouseEvents.out, function () {

            $(this).removeClass('next-button-hover');

        }).bind($.mouseEvents.down, function () {

            $(this).addClass('next-button-down');

        }).bind($.mouseEvents.up, function () {

            $(this).removeClass('next-button-down');

        }).click(function () {

            $('.magazine').turn('next');

        });

        // Events for the next button

        $('.previous-button').bind($.mouseEvents.over, function () {

            $(this).addClass('previous-button-hover');

        }).bind($.mouseEvents.out, function () {

            $(this).removeClass('previous-button-hover');

        }).bind($.mouseEvents.down, function () {

            $(this).addClass('previous-button-down');

        }).bind($.mouseEvents.up, function () {

            $(this).removeClass('previous-button-down');

        }).click(function () {

            $('.magazine').turn('previous');

        });


        // Slider

        $("#slider").slider({
            min: 1,
            max: numberOfViews(flipbook),

            start: function (event, ui) {

                if (!window._thumbPreview) {
                    _thumbPreview = $('<div />', {'class': 'thumbnail'}).html('<div></div>');
                    setPreview(ui.value);
                    _thumbPreview.appendTo($(ui.handle));
                } else
                    setPreview(ui.value);

                moveBar(false);

            },

            slide: function (event, ui) {

                setPreview(ui.value);

            },

            stop: function () {

                if (window._thumbPreview)
                    _thumbPreview.removeClass('show');

                $('.magazine').turn('page', Math.max(1, $(this).slider('value') * 2 - 2));

            }
        });

        resizeViewport();

        $('.magazine').addClass('animated');

    }

    // Zoom icon

    $('.zoom-icon').bind('mouseover', function () {

        if ($(this).hasClass('zoom-icon-in'))
            $(this).addClass('zoom-icon-in-hover');

        if ($(this).hasClass('zoom-icon-out'))
            $(this).addClass('zoom-icon-out-hover');

    }).bind('mouseout', function () {

        if ($(this).hasClass('zoom-icon-in'))
            $(this).removeClass('zoom-icon-in-hover');

        if ($(this).hasClass('zoom-icon-out'))
            $(this).removeClass('zoom-icon-out-hover');

    }).bind('click', function () {

        if ($(this).hasClass('zoom-icon-in'))
            $('.magazine-viewport').zoom('zoomIn');
        else if ($(this).hasClass('zoom-icon-out'))
            $('.magazine-viewport').zoom('zoomOut');

    });

    $('#canvas').hide();


    // Load the HTML4 version if there's no CSS transform

    yepnope({
        test: Modernizr.csstransforms,
        yep: ['{{url('turnjs/lib/turn.min.js')}}'],
        nope: ['{{url('turnjs/lib/turn.html4.min.js')}}', '{{url('turnjs/css/jquery.ui.html4.css')}}'],
        both: ['{{url('turnjs/lib/zoom.min.js')}}', '{{url('turnjs/css/jquery.ui.css')}}', '{{url('turnjs/js/magazine.js')}}', '{{url('turnjs/css/magazine.css')}}'],
        // complete: loadApp
    });


    function removeHashFromUrl() {
        $('.magazine').turn("destroy")
        window.history.replaceState({}, document.title, window.location.href.split('#')[0]);
    }
</script>

</body>
</html>
