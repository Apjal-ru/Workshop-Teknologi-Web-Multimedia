    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profilku, diriku</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-white dark:bg-zinc-900">
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                <a class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://media.tenor.com/oguVDJkVWWIAAAAi/touhou-reimu.gif" class="h-12"
                        alt="Reimu" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Biodata</span>
                </a>
                <div class="flex items-center space-x-6 rtl:space-x-reverse">
                    <a class="text-sm  text-gray-500 dark:text-white">5322600018</a>
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
                </div>
            </div>
        </nav>
        <nav class="bg-gray-50 dark:bg-gray-700">
            <div class="border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                    <li class="me-2">
                        <a href="#"
                            class="inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group" aria-current="page">
                            <svg class="w-4 h-4 me-2 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                            </svg>Profile
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#"
                            class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                            <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                            aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                <path
                                    d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                            </svg>Dashboard
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="mt-2">
            <div class="flex justify-center mt-5">
                <h1 class="text-4xl font-bold text-gray-900 dark:text-white">BIODATA</h1>
            </div>
            <div class="flex justify-center mt-5">
                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="/images/afzal.jpg" style="width:200px; height:auto" alt="gambar">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{$myName}}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$mySchool}}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$myID}}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$myAddress}}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$myBio}}</p>
                    </div>
                </a>
            </div>
            <div class="border-b-4 border-gray-400 dark:border-gray-700 mt-5"></div>
            <div class="grid grid-cols-4 gap-2 mt-5 ">
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="object-cover object-top w-full h-60 rounded-t-lg" src="https://en.touhouwiki.net/images/f/f7/Th175Reimu.png" alt="reimu175" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Desain dan Programming</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Salah satu bidang yang saya sukai dan masih saya dalami sampai sekarang, meskipun belum ada progres. Hehe.</p>
                        </a>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="object-cover object-top w-full h-60 rounded-t-lg" src="https://en.touhouwiki.net/images/1/11/Th175Marisa.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">All-In Semua Bidang</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Skill standar namun dapat cepat belajar dalam segala bidang terutama teknologi tapi balik lagi, standar.</p>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="object-cover object-top w-full h-60 rounded-t-lg" src="https://en.touhouwiki.net/images/d/d5/GI_Utsuho_Portrait.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Game? Buku? Gas ajalah</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Baca novel ataupun manga saya suka, kalau tidak keduanya saya main game tentu saja, suka semua genre game kecuali horror.</p>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="object-cover object-top w-full h-60 rounded-t-lg" src="https://en.touhouwiki.net/images/7/7f/Th175Okina.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">TRM Jurusanku</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Saat ini sedang belajar di jurusan Teknologi Rekayasa Multimedia? Kenapa? Mungkin salah jurusan? Mungkin memang takdir? Hanya tuhan yang tahu</p>
                    </div>
                </div>
            </div>
        </main>
<footer>
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="/images/suwakoflying.gif" class="h-12" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Apalah</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Afzal Haqqi</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">+62 813 3868 7945</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </span>
    </div>
</footer>
        </div>
        </div>
        </div>
        <script src="https://cdn.tailwindcss.com/"></script>
        <script>
            // Initialization for ES Users
            import {
                Dropdown,
                Collapse,
                initMDB
            } from "mdb-ui-kit";
            initMDB({
                Dropdown,
                Collapse
            });
        </script>

    </body>

    </html>
