<x-app-layout>
    <style>
        /* Para asegurar que el feed tenga un scroll suave */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background: #4b5563;
            /* Gris oscuro */
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #f0f0f0;
            /* Gris más oscuro */
        }
    </style>
    <div class="py-3 mb-28">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-1 gap-4 container mx-auto">
                <div class="sticky mb-28 top-0 h-[100vh]">
                    <aside class="w-full mb-4 bg-white p-4 border rounded-xl lg:block">
                        <h2 class="text-lg font-bold mb-4">Entradas recientes</h2>
                        <ul class="h-48 py-2 text-gray-700 dark:text-gray-200">
                            <li>
                                <a href="#"
                                    class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <img class="w-6 h-6 me-2 rounded-full"
                                        src="/docs/images/people/profile-picture-5.jpg" alt="Jese image">
                                    Michael Gough
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <img class="w-6 h-6 me-2 rounded-full"
                                        src="/docs/images/people/profile-picture-2.jpg" alt="Jese image">
                                    Joseph Mcfall
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <img class="w-6 h-6 me-2 rounded-full"
                                        src="/docs/images/people/profile-picture-3.jpg" alt="Jese image">
                                    Roberta Casas
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <img class="w-6 h-6 me-2 rounded-full"
                                        src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                    Neil Sims
                                </a>
                            </li>
                        </ul>
                        <button type="button"
                            class="px-3 py-1.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ver todos
                        </button>
                    </aside>

                    <aside class="w-full mb-4 bg-white p-4 border rounded-xl lg:block">
                        <h2 class="text-lg font-bold mt-1 mb-1">Grupos</h2>
                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                                data-tabs-toggle="#default-tab-content" role="tablist">
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-2 border-b-2 rounded-t-lg" id="nuevo-tab"
                                        data-tabs-target="#nuevo" type="button" role="tab" aria-controls="nuevo"
                                        aria-selected="false">Nuevos</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-2 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="activo-tab" data-tabs-target="#activo" type="button" role="tab"
                                        aria-controls="activo" aria-selected="false">Activos</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-2 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="popular-tab" data-tabs-target="#popular" type="button" role="tab"
                                        aria-controls="popular" aria-selected="false">Popular</button>
                                </li>
                            </ul>
                        </div>
                        <div id="default-tab-content">
                            <div class="p-4 rounded-lg" id="nuevo" role="tabpanel" aria-labelledby="nuevo-tab">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="flex px-4 py-3">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div
                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                    <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                        <path
                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">PHP
                                                        Laravel</span></div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Hace 5 minutos
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-4 py-3">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div
                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                    <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                        <path
                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Grupo de
                                                        C#</span>
                                                </div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Hace un momento
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 rounded-lg" id="activo" role="tabpanel" aria-labelledby="activo-tab">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="flex px-4 py-3">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div
                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                    <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                        <path
                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Html y
                                                        css</span></div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Hace 1 semana
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-4 py-3">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div
                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                    <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                        <path
                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Angular</span>
                                                </div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Hace dos semanas
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 rounded-lg" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="flex px-4 py-3">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div
                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                    <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                        <path
                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold hover:text-blue-400 text-gray-900 dark:text-white">Inteligencia
                                                        artificial</span></div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Hace 2 horas
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-4 py-3">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div
                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                    <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                        <path
                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Profesional
                                                        C++</span></div>
                                                <div class="text-xs text-blue-600 dark:text-blue-500">justo ahora
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button type="button"
                            class="px-3 py-1.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ver todos
                        </button>
                    </aside>


                    <aside class="w-full mb-4 bg-white p-4 border-1 rounded-xl lg:block">
                        <h2 class="text-lg font-bold mt-6 mb-4">Foros</h2>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-blue-500 hover:underline">Angular</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline">Java</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline">C# y GitHub</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline">Java</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline">C# y GitHub</a></li>
                        </ul>
                    </aside>
                </div>

                <main class="flex-1 p-4 rounded-xl h-auto">
                    <div class="mb-4">
                        <!-- Crear Publicaciones -->
                        <div>
                            <div class="relative w-full max-w-4xl max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <div class="p-4 md:p-5 space-y-4">
                                        <button
                                            class="flex items-center text-lg pe-1 font-normal text-gray-500 rounded-full md:me-0 text-ellipsis text-nowrap overflow-hidden dark:text-gray-500"
                                            type="button">
                                            <span class="sr-only">Open user menu</span>
                                            <img class="w-12 h-12 me-2 rounded-full"
                                                src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                alt="user photo">
                                            Comparte lo que piensas, {{ Auth::user()->name }}
                                        </button>
                                    </div>
                                    <!-- Botones compartir -->
                                    <div
                                        class="flex dark:bg-gray-800 bg-gray-100 items-center p-2 md:p-3 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button>
                                            <svg
                                                class="w-6 h-6 text-gray-400 dark:text-gray-500 dark:hover:text-gray-900 hover:text-gray-700"  aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M7.5 4.586A2 2 0 0 1 8.914 4h6.172a2 2 0 0 1 1.414.586L17.914 6H19a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h1.086L7.5 4.586ZM10 12a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <button>
                                            <svg
                                                class="w-6 h-6 text-gray-400 dark:text-gray-500 dark:hover:text-gray-900 hover:text-gray-700" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M7.5 4.586A2 2 0 0 1 8.914 4h6.172a2 2 0 0 1 1.414.586L17.914 6H19a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h1.086L7.5 4.586ZM10 12a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <!-- Post -->
                        <div class="bg-white p-4 border rounded-xl">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-bold">Ángel Sánchez</h3>
                                <span class="text-gray-500 text-sm">Hace 3 días</span>
                            </div>
                            <p class="text-gray-700">¡Saludos a todos!</p>
                            <div class="flex items-center mt-2 space-x-2">
                                <button class="text-blue-500 hover:underline">Me gusta</button>
                                <button class="text-blue-500 hover:underline">Comentar</button>
                            </div>
                        </div>

                        <div class="bg-white p-4 border rounded-xl">
                            <article>
                                <div class="flex items-center mb-4">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 18 18">
                                                <path
                                                    d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                <path
                                                    d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full ps-3">
                                        <div class="text-gray-500 dark:text-gray-400"><span
                                                class="font-semibold text-gray-900 dark:text-white">Profesional
                                                C++</span></div>
                                        <div class="text-xs text-gray-600 dark:text-gray-500">Eduardo Casares Aguayo a
                                            publicado una actualización <div
                                                class="text-xs text-gray-600 dark:text-gray-500">hace dos dias
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">This is my third Invicta Pro Diver.
                                    They are just fantastic value for money. This one arrived yesterday and the first
                                    thing I did was set the time, popped on an identical strap from another Invicta and
                                    went in the shower with it to test the waterproofing.... No problems.</p>
                                <p class="mb-3 text-gray-500 dark:text-gray-400">It is obviously not the same build
                                    quality as those very expensive watches. But that is like comparing a Citroën to a
                                    Ferrari. This watch was well under £100! An absolute bargain.</p>
                                <a href="#"
                                    class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read
                                    more</a>
                                <aside>
                                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">19 people found this
                                        helpful</p>
                                    <div class="flex items-center mt-3">
                                        <a href="#"
                                            class="px-2 py-1.5 text-xs font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Helpful</a>
                                        <a href="#"
                                            class="ps-4 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500 border-gray-200 ms-4 border-s md:mb-0 dark:border-gray-600">Report
                                            abuse</a>
                                    </div>
                                </aside>
                            </article>

                        </div>

                        <div class="bg-white p-4 border rounded-xl">
                            <article>
                                <div class="flex items-center mb-4">
                                    <img class="w-10 h-10 me-4 rounded-full"
                                        src="/docs/images/people/profile-picture-5.jpg" alt="">
                                    <div class=" dark:text-white">
                                        <span class="font-semibold text-gray-900 dark:text-white">Acxel Aplicano </span>
                                        <div class="text-xs text-gray-500 dark:text-gray-500">hace dos días</div>
                                    </div>

                                </div>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">This is my third Invicta Pro Diver.
                                    They are just fantastic value for money. This one arrived yesterday and the first
                                    thing I did was set the time, popped on an identical strap from another Invicta and
                                    went in the shower with it to test the waterproofing.... No problems.</p>

                                <a href="#"
                                    class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read
                                    more</a>
                                <aside>
                                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">19 people found this
                                        helpful</p>
                                    <div class="flex items-center mt-3">
                                        <a href="#"
                                            class="px-2 py-1.5 text-xs font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Helpful</a>
                                        <a href="#"
                                            class="ps-4 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500 border-gray-200 ms-4 border-s md:mb-0 dark:border-gray-600">Report
                                            abuse</a>
                                    </div>
                                </aside>
                            </article>
                        </div>

                        <div class="bg-white p-4 border rounded-xl">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-bold">Ángel Sánchez</h3>
                                <span class="text-gray-500 text-sm">Hace 3 días</span>
                            </div>
                            <p class="text-gray-700">¡Saludos a todos!</p>
                            <div class="flex items-center mt-2 space-x-2">
                                <button class="text-blue-500 hover:underline">Me gusta</button>
                                <button class="text-blue-500 hover:underline">Comentar</button>
                            </div>
                        </div>

                        <div class="bg-white p-4 border rounded-xl">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-bold">Ángel Sánchez</h3>
                                <span class="text-gray-500 text-sm">Hace 3 días</span>
                            </div>
                            <p class="text-gray-700">¡Saludos a todos!</p>
                            <div class="flex items-center mt-2 space-x-2">
                                <button class="text-blue-500 hover:underline">Me gusta</button>
                                <button class="text-blue-500 hover:underline">Comentar</button>
                            </div>
                        </div>

                        <div class="bg-white p-4 border rounded-xl">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-bold">Ángel Sánchez</h3>
                                <span class="text-gray-500 text-sm">Hace 3 días</span>
                            </div>
                            <p class="text-gray-700">¡Saludos a todos!</p>
                            <div class="flex items-center mt-2 space-x-2">
                                <button class="text-blue-500 hover:underline">Me gusta</button>
                                <button class="text-blue-500 hover:underline">Comentar</button>
                            </div>
                        </div>


                        <div class="bg-white p-4 border rounded-xl">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-bold">Ángel Sánchez</h3>
                                <span class="text-gray-500 text-sm">Hace 3 días</span>
                            </div>
                            <p class="text-gray-700">¡Saludos a todos!</p>
                            <div class="flex items-center mt-2 space-x-2">
                                <button class="text-blue-500 hover:underline">Me gusta</button>
                                <button class="text-blue-500 hover:underline">Comentar</button>
                            </div>
                        </div>

                        <div class="bg-white p-4 border rounded-xl">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-bold">Ángel Sánchez</h3>
                                <span class="text-gray-500 text-sm">Hace 3 días</span>
                            </div>
                            <p class="text-gray-700">¡Saludos a todos!</p>
                            <div class="flex items-center mt-2 space-x-2">
                                <button class="text-blue-500 hover:underline">Me gusta</button>
                                <button class="text-blue-500 hover:underline">Comentar</button>
                            </div>
                        </div>


                        <div class="bg-white p-4 border rounded-xl">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-bold">Ángel Sánchez</h3>
                                <span class="text-gray-500 text-sm">Hace 3 días</span>
                            </div>
                            <p class="text-gray-700">¡Saludos a todos!</p>
                            <div class="flex items-center mt-2 space-x-2">
                                <button class="text-blue-500 hover:underline">Me gusta</button>
                                <button class="text-blue-500 hover:underline">Comentar</button>
                            </div>
                        </div>

                        <!-- Otro Post -->
                        <div class="bg-white p-4 border rounded-xl">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-bold">Ángel Sánchez</h3>
                                <span class="text-gray-500 text-sm">Hace 3 días</span>
                            </div>
                            <p class="text-gray-700">¡Saludos a todos!</p>
                            <div class="flex items-center mt-2 space-x-2">
                                <button class="text-blue-500 hover:underline">Me gusta</button>
                                <button class="text-blue-500 hover:underline">Comentar</button>
                            </div>
                        </div>

                        <div class="bg-white p-4 border rounded-xl">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-bold">Ángel Sánchez</h3>
                                <span class="text-gray-500 text-sm">Hace 3 días</span>
                            </div>
                            <p class="text-gray-700">¡Saludos a todos!</p>
                            <div class="flex items-center mt-2 space-x-2">
                                <button class="text-blue-500 hover:underline">Me gusta</button>
                                <button class="text-blue-500 hover:underline">Comentar</button>
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Sidebar Izquierdo -->
                <div class="sticky mb-28 top-0 h-[100vh]">
                    <aside class="w-full mb-4 bg-white p-4 border rounded-xl lg:block">
                        <h2 class="text-lg font-bold mt-1 mb-1">Miembros</h2>
                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                                data-tabs-toggle="#default-tab-content" role="tablist">
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-2 border-b-2 rounded-t-lg" id="profile-tab"
                                        data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Nuevos</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-2 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                        aria-controls="dashboard" aria-selected="false">Activos</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-2 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                                        aria-controls="settings" aria-selected="false">Popular</button>
                                </li>
                            </ul>
                        </div>
                        <div id="default-tab-content">
                            <div class="p-4 rounded-lg" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="flex px-4 py-3">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div
                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                    <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                        <path
                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">PHP
                                                        Laravel</span></div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Hace 5 minutos
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-4 py-3">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div
                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                    <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                        <path
                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Grupo de
                                                        C#</span>
                                                </div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Hace un momento
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-4 py-3">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div
                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                    <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                        <path
                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">PHP
                                                        Laravel</span></div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Hace 5 minutos
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-4 py-3">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div
                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                    <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                        <path
                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Grupo de
                                                        C#</span>
                                                </div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Hace un momento
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-4 py-3">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div
                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                    <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                        <path
                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Grupo de
                                                        C#</span>
                                                </div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Hace un momento
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 rounded-lg" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="flex px-4 py-3">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div
                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                    <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                        <path
                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Html y
                                                        css</span></div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Hace 1 semana
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-4 py-3">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div
                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                    <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                        <path
                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Angular</span>
                                                </div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Hace dos semanas
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 rounded-lg" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="flex px-4 py-3">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div
                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                    <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                        <path
                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Inteligencia
                                                        artificial</span></div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Hace 2 horas
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-4 py-3">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div
                                                    class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                    <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                        <path
                                                            d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Profesional
                                                        C++</span></div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">justo ahora
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button type="button"
                            class="px-3 py-1.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ver todos
                        </button>
                    </aside>


                    <aside class="w-full mb-4 bg-white p-4 border-1 rounded-xl lg:block">
                        <h2 class="text-lg font-bold mt-6 mb-4">Foros</h2>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-blue-500 hover:underline">Angular</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline">Java</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline">C# y GitHub</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline">Java</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline">C# y GitHub</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline">C# y GitHub</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline">Java</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline">C# y GitHub</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>