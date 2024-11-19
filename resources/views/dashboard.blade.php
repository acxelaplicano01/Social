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
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-1">
            <div class="flex flex-1 gap-4 container mx-auto">
                <div class="sticky mb-28 top-0 h-screen hidden lg:block">
                    <aside class="w-72 mb-4 bg-white p-4 border rounded-xl lg:block">
                        <h2 class="text-lg font-bold mb-1">Entradas recientes</h2>
                        <ul class="h-auto py-2 text-gray-700 dark:text-gray-200">
                            <li>
                                <a href="#" class="flex items-center px-1 py-1 dark:hover:text-white">
                                    <img class="w-12 h-12 me-2 rounded-xl"
                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                        alt="Jese image">
                                    Michael Gough
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center px-1 py-1 dark:hover:text-white">
                                    <img class="w-12 h-12 me-2 rounded-xl"
                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                        alt="Jese image">
                                    Joseph Mcfall
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center px-1 py-1 dark:hover:text-white">
                                    <img class="w-12 h-12 me-2 rounded-xl"
                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                        alt="Jese image">
                                    Roberta Casas
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center px-1 py-1 dark:hover:text-white">
                                    <img class="w-12 h-12 me-2 rounded-xl"
                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                        alt="Jese image">
                                    Neil Sims
                                </a>
                            </li>
                        </ul>
                        <button type="button"
                            class="px-3 py-1.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ver todos
                        </button>
                    </aside>

                    <aside class="w-72 mb-4 bg-white p-4 border rounded-xl lg:block">
                        <h2 class="text-lg font-bold mb-1">Grupos</h2>
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
                            <div class="p-1 rounded-lg" id="nuevo" role="tabpanel" aria-labelledby="nuevo-tab">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="flex px-1 py-1">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                    alt="Jese image">
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
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Estudiante
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-1 py-1">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                    alt="Jese image">
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
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Estudiante
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-1 rounded-lg" id="activo" role="tabpanel" aria-labelledby="activo-tab">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="flex px-1 py-1">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                    alt="Jese image">
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
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Profesor
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-1 py-1">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                    alt="Jese image">
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
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Profesors
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-1 rounded-lg" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="flex px-1 py-1">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                    alt="Jese image">
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
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Profesor
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-1 py-1">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-11 h-11"
                                                    src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                    alt="Jese image">
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
                                                <div class="text-xs text-blue-600 dark:text-blue-500">Estudiante
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


                    <aside class="w-72 mb-4 bg-white p-4 border rounded-xl lg:block">
                        <h2 class="text-lg font-bold mb-1">Foros</h2>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-blue-500 hover:underline">Angular</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline">Java</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline">C# y GitHub</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline">Java</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline">C# y GitHub</a></li>
                        </ul>
                        <button type="button"
                            class="px-3 py-1.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ver todos
                        </button>
                    </aside>
                </div>

                <main class="flex-1 rounded-xl h-auto w-80">
                    <div class="mb-4">
                        <!-- Crear Publicaciones -->
                        <div>
                            <div class="relative w-full max-w-4xl max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <div class="p-4 md:p-5 space-y-4">
                                        <button data-modal-target="large-modal" data-modal-toggle="large-modal"
                                            class="flex items-center text-lg pe-1 font-normal text-gray-500 rounded-full md:me-0 text-ellipsis text-nowrap overflow-hidden dark:text-gray-500"
                                            type="button">
                                            <span class="sr-only">Open user menu</span>
                                            <img class="w-12 h-12 me-2 rounded-full"
                                                src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                alt="user photo">
                                            Comparte lo que piensas, {{ Auth::user()->name }}
                                        </button>
                                        <!-- Large Modal -->
                                        <div id="large-modal" tabindex="-1"
                                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative w-full max-w-4xl max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                                            Crear Publicación
                                                        </h3>
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-hide="large-modal">
                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="p-4 md:p-5 space-y-4">
                                                        <div>
                                                            <a href="#" class="flex px-1 py-1">
                                                                <div class="flex-shrink-0">
                                                                    <img class="rounded-full w-12 h-12"
                                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                                        alt="Jese image">
                                                                </div>
                                                                <div class="w-full ps-3">
                                                                    <div
                                                                        class="text-gray-500 text-sm mb-1 dark:text-gray-400">
                                                                        <span
                                                                            class="font-semibold text-lg text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                                                                    </div>
                                                                    <div class="relative">
                                                                        <!-- Botón que muestra la selección -->
                                                                        <button id="visibilityButton"
                                                                            data-dropdown-toggle="visibilityDropdown"
                                                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                                            type="button"><span id="visibilityOption"
                                                                                class="ml-2">Público</span> <svg
                                                                                class="w-2.5 h-2.5 ms-3"
                                                                                aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="none" viewBox="0 0 10 6">
                                                                                <path stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2" d="m1 1 4 4 4-4" />
                                                                            </svg>
                                                                        </button>

                                                                        <!-- Menú desplegable -->
                                                                        <div id="visibilityDropdown"
                                                                            class="hidden z-10 bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-48"
                                                                            data-dropdown-menu>
                                                                            <ul id="menu"
                                                                                class="p-2 space-y-2 text-sm text-gray-700">
                                                                                <li>
                                                                                    <label
                                                                                        class="flex hover:bg-gray-100 p-1 rounded-lg items-start space-x-2">
                                                                                        <span class="block">
                                                                                            <strong>Público</strong>
                                                                                            <p
                                                                                                class="text-gray-500 text-xs">
                                                                                                Cualquiera puede ver
                                                                                                esta publicación.</p>
                                                                                        </span>
                                                                                        <input type="radio"
                                                                                            name="visibility"
                                                                                            value="Público"
                                                                                            class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
                                                                                            onchange="updateVisibility(this.value); closeMenu();" />

                                                                                    </label>
                                                                                </li>
                                                                                <li>
                                                                                    <label
                                                                                        class="flex hover:bg-gray-100 p-1 rounded-lg items-start space-x-2">
                                                                                        <span class="block">
                                                                                            <strong>Privado</strong>
                                                                                            <p
                                                                                                class="text-gray-500 text-xs">
                                                                                                Solo tú puedes ver esta
                                                                                                publicación.</p>
                                                                                        </span>
                                                                                        <input type="radio"
                                                                                            name="visibility"
                                                                                            value="Privado"
                                                                                            class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
                                                                                            onchange="updateVisibility(this.value); closeMenu();" />

                                                                                    </label>
                                                                                </li>
                                                                                <li>
                                                                                    <label
                                                                                        class="flex hover:bg-gray-100 p-1 rounded-lg items-start space-x-2">
                                                                                        <span class="block">
                                                                                            <strong>Solo Amigos</strong>
                                                                                            <p
                                                                                                class="text-gray-500 text-xs">
                                                                                                Solo tus amigos podrán
                                                                                                ver esta publicación.
                                                                                            </p>
                                                                                        </span>
                                                                                        <input type="radio"
                                                                                            name="visibility"
                                                                                            value="Solo Amigos"
                                                                                            class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
                                                                                            onchange="updateVisibility(this.value); closeMenu();" />

                                                                                    </label>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <script>
                                                                        function updateVisibility(value) {
                                                                            document.getElementById('visibilityOption').innerText = value;
                                                                        }

                                                                        function closeMenu() {
                                                                            // Suponiendo que el menú tiene un id "menu"
                                                                           // document.getElementById('menu').style.display = 'none';
                                                                        }
                                                                    </script>

                                                                </div>
                                                            </a>
                                                        </div>

                                                        <form>
                                                            <div
                                                                class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                                                <div
                                                                    class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                                                    <label for="comment" class="sr-only">Your
                                                                        comment</label>
                                                                    <textarea id="comment" rows="9"
                                                                        class="w-full resize-none px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                                                        placeholder="Cómparte lo que piensas, {{ Auth::user()->name }}..."
                                                                        required></textarea>
                                                                </div>
                                                                <div
                                                                    class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                                                    <div
                                                                        class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                                                        <button type="button"
                                                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                            <svg class="w-4 h-4" aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="none" viewBox="0 0 12 20">
                                                                                <path stroke="currentColor"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                                                            </svg>
                                                                            <span class="sr-only">Attach file</span>
                                                                        </button>
                                                                        <button type="button"
                                                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                            <svg class="w-4 h-4" aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="currentColor" viewBox="0 0 16 20">
                                                                                <path
                                                                                    d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                                            </svg>
                                                                            <span class="sr-only">Set location</span>
                                                                        </button>
                                                                        <button type="button"
                                                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                            <svg class="w-4 h-4" aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="currentColor" viewBox="0 0 20 18">
                                                                                <path
                                                                                    d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                                                            </svg>
                                                                            <span class="sr-only">Upload image</span>
                                                                        </button>
                                                                    </div>
                                                                    <button type="submit"
                                                                        class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                                                        Post comment
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Botones compartir -->
                                    <div
                                        class="flex dark:bg-gray-800 bg-gray-100 items-center p-2 md:p-3 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button>
                                            <svg class="w-6 h-6 text-gray-400 dark:text-gray-500 dark:hover:text-gray-900 hover:text-gray-700"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M7.5 4.586A2 2 0 0 1 8.914 4h6.172a2 2 0 0 1 1.414.586L17.914 6H19a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h1.086L7.5 4.586ZM10 12a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <button>
                                            <svg class="w-6 h-6 text-gray-400 dark:text-gray-500 dark:hover:text-gray-900 hover:text-gray-700"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2ZM7.99 9a1 1 0 0 1 1-1H9a1 1 0 0 1 0 2h-.01a1 1 0 0 1-1-1ZM14 9a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H15a1 1 0 0 1-1-1Zm-5.506 7.216A5.5 5.5 0 0 1 6.6 13h10.81a5.5 5.5 0 0 1-8.916 3.216Z"
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
                            <article>
                                <div class="flex items-center mb-4">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                            alt="Jese image">
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
                                        <div class="text-gray-500 dark:text-gray-400 flex justify-between items-center">
                                            <span class="font-semibold text-gray-900 dark:text-white">Profesional
                                                C++</span>
                                            <span class="text-gray-500 text-sm">
                                                <button id="dropdownMenuIconHorizontalButton1"
                                                    data-dropdown-toggle="dropdownDotsHorizontal1"
                                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100  dark:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                                    type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 16 3">
                                                        <path
                                                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                    </svg>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div id="dropdownDotsHorizontal1"
                                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="dropdownMenuIconHorizontalButton1">
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                                        </li>
                                                    </ul>
                                                    <div class="py-2">
                                                        <a href="#"
                                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated
                                                            link</a>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
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
                                <a href="#" class="block mb-5 text-sm font-medium text-blue-600 dark:text-blue-500">Read
                                    more</a>
                                <div>
                                    <img class="h-auto mb-4 w-full rounded-xl"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" alt="">

                                    <video class="h-auto w-full rounded-xl" autoplay controls>
                                        <source src="/docs/videos/flowbite.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>

                                    <div class="leading-1.5 mt-2 flex w-full flex-col">
                                        <div class="flex items-start bg-gray-50 dark:bg-gray-700 rounded-xl p-2">
                                            <div class="me-2">
                                                <span
                                                    class="flex items-center gap-2 text-sm font-medium text-gray-900 dark:text-white pb-2">
                                                    <svg fill="none" aria-hidden="true" class="w-5 h-5 flex-shrink-0"
                                                        viewBox="0 0 20 21">
                                                        <g clip-path="url(#clip0_3173_1381)">
                                                            <path fill="#E2E5E7"
                                                                d="M5.024.5c-.688 0-1.25.563-1.25 1.25v17.5c0 .688.562 1.25 1.25 1.25h12.5c.687 0 1.25-.563 1.25-1.25V5.5l-5-5h-8.75z" />
                                                            <path fill="#B0B7BD"
                                                                d="M15.024 5.5h3.75l-5-5v3.75c0 .688.562 1.25 1.25 1.25z" />
                                                            <path fill="#CAD1D8"
                                                                d="M18.774 9.25l-3.75-3.75h3.75v3.75z" />
                                                            <path fill="#F15642"
                                                                d="M16.274 16.75a.627.627 0 01-.625.625H1.899a.627.627 0 01-.625-.625V10.5c0-.344.281-.625.625-.625h13.75c.344 0 .625.281.625.625v6.25z" />
                                                            <path fill="#fff"
                                                                d="M3.998 12.342c0-.165.13-.345.34-.345h1.154c.65 0 1.235.435 1.235 1.269 0 .79-.585 1.23-1.235 1.23h-.834v.66c0 .22-.14.344-.32.344a.337.337 0 01-.34-.344v-2.814zm.66.284v1.245h.834c.335 0 .6-.295.6-.605 0-.35-.265-.64-.6-.64h-.834zM7.706 15.5c-.165 0-.345-.09-.345-.31v-2.838c0-.18.18-.31.345-.31H8.85c2.284 0 2.234 3.458.045 3.458h-1.19zm.315-2.848v2.239h.83c1.349 0 1.409-2.24 0-2.24h-.83zM11.894 13.486h1.274c.18 0 .36.18.36.355 0 .165-.18.3-.36.3h-1.274v1.049c0 .175-.124.31-.3.31-.22 0-.354-.135-.354-.31v-2.839c0-.18.135-.31.355-.31h1.754c.22 0 .35.13.35.31 0 .16-.13.34-.35.34h-1.455v.795z" />
                                                            <path fill="#CAD1D8"
                                                                d="M15.649 17.375H3.774V18h11.875a.627.627 0 00.625-.625v-.625a.627.627 0 01-.625.625z" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_3173_1381">
                                                                <path fill="#fff" d="M0 0h20v20H0z"
                                                                    transform="translate(0 .5)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    Flowbite Terms & Conditions
                                                </span>
                                                <span
                                                    class="flex text-xs font-normal text-gray-500 dark:text-gray-400 gap-2">
                                                    12 Pages
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                        class="self-center" width="3" height="4" viewBox="0 0 3 4"
                                                        fill="none">
                                                        <circle cx="1.5" cy="2" r="1.5" fill="#6B7280" />
                                                    </svg>
                                                    18 MB
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                        class="self-center" width="3" height="4" viewBox="0 0 3 4"
                                                        fill="none">
                                                        <circle cx="1.5" cy="2" r="1.5" fill="#6B7280" />
                                                    </svg>
                                                    PDF
                                                </span>
                                            </div>
                                            <div class="inline-flex self-center items-center">
                                                <button
                                                    class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                                                    type="button">
                                                    <svg class="w-4 h-4 text-gray-900 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                                        <path
                                                            d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <p class="mt-1 text-xs mb-1 text-gray-500 dark:text-gray-400">
                                    19 reciones</p>
                                <aside class="dark:border-gray-600 border-gray-200 border-t">
                                    <div class="flex items-center mt-2">
                                        <a href="#"
                                            class="w-full text-gray-700 sfocus:z-10 dark:hover:text-blue-600 hover:text-blue-600 hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Me
                                            gusta
                                        </a>
                                        <button id="commentButton1" data-collapse-toggle="commentSection1"
                                            aria-expanded="false" aria-controls="commentSection"
                                            class="w-full text-gray-700 focus:z-10 dark:hover:text-blue-600 hover:text-blue-600  hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Comentar
                                        </button>
                                    </div>
                                </aside>
                                <!-- Sección de Comentarios -->
                                <div id="commentSection1"
                                    class="hidden mt-2 dark:border-gray-600 border-gray-200 border-t">

                                    <div class="flex items-start mt-2 gap-2.5">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                            alt="Jese image">
                                        <div class="w-full">

                                            <form>
                                                <div
                                                    class="w-full mb-4 border border-gray-200 rounded-lg bg-white dark:border-gray-600">
                                                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                                        <label for="comment" class="sr-only">Your comment</label>
                                                        <textarea id="comment" rows="1"
                                                            class="w-full overflow-hidden resize-none dark:focus:ring-blue-500 dark:focus:border-blue-500  px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                                            placeholder="Escribe tu comentario..." required></textarea>
                                                    </div>
                                                    <div
                                                        class="flex items-center justify-between px-2 py-2 dark:bg-gray-800">
                                                        <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 12 20">
                                                                    <path stroke="currentColor" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                                                </svg>
                                                                <span class="sr-only">Attach file</span>
                                                            </button>
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 16 20">
                                                                    <path
                                                                        d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                                </svg>
                                                                <span class="sr-only">Set location</span>
                                                            </button>
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 20 18">
                                                                    <path
                                                                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                                                </svg>
                                                                <span class="sr-only">Upload image</span>
                                                            </button>
                                                        </div>
                                                        <button type="submit"
                                                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-full focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                                            <svg class="w-4 h-4 text-white dark:text-white"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="bg-white p-4 border rounded-xl">
                            <article>
                                <div class="flex items-center mb-4">
                                    <img class="w-10 h-10 me-4 rounded-full"
                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                        alt="">
                                    <div class=" dark:text-white">
                                        <span class="font-semibold text-gray-900 dark:text-white">Acxel Aplicano </span>
                                        <div class="text-xs text-gray-500 dark:text-gray-500">hace dos días</div>
                                    </div>

                                </div>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">This is my third Invicta Pro Diver.
                                    They are just fantastic value for money. This one arrived yesterday and the first
                                    thing I did was set the time, popped on an identical strap from another Invicta and
                                    went in the shower with it to test the waterproofing.... No problems.</p>

                                <a href="#" class="block mb-5 text-sm font-medium text-blue-600 dark:text-blue-500">Read
                                    more</a>

                                <p class="mt-1 text-xs mb-1 text-gray-500 dark:text-gray-400">
                                    19 reciones</p>
                                <aside class="dark:border-gray-600 border-gray-200 border-t">
                                    <div class="flex items-center mt-2">
                                        <a href="#"
                                            class="w-full text-gray-700 sfocus:z-10 dark:hover:text-blue-600 hover:text-blue-600 hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Me
                                            gusta
                                        </a>
                                        <button id="commentButton" data-collapse-toggle="commentSection"
                                            aria-expanded="false" aria-controls="commentSection"
                                            class="w-full text-gray-700 focus:z-10 dark:hover:text-blue-600 hover:text-blue-600  hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Comentar
                                        </button>
                                    </div>
                                </aside>
                                <!-- Sección de Comentarios -->
                                <div id="commentSection"
                                    class="hidden mt-2 dark:border-gray-600 border-gray-200 border-t">

                                    <div class="flex items-start mt-2 gap-2.5">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                            alt="Jese image">
                                        <div class="w-full">

                                            <form>
                                                <div
                                                    class="w-full mb-4 border border-gray-200 rounded-lg bg-white dark:border-gray-600">
                                                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                                        <label for="comment" class="sr-only">Your comment</label>
                                                        <textarea id="comment" rows="1"
                                                            class="w-full overflow-hidden resize-none dark:focus:ring-blue-500 dark:focus:border-blue-500  px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                                            placeholder="Escribe tu comentario..." required></textarea>
                                                    </div>
                                                    <div
                                                        class="flex items-center justify-between px-2 py-2 dark:bg-gray-800">
                                                        <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 12 20">
                                                                    <path stroke="currentColor" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                                                </svg>
                                                                <span class="sr-only">Attach file</span>
                                                            </button>
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 16 20">
                                                                    <path
                                                                        d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                                </svg>
                                                                <span class="sr-only">Set location</span>
                                                            </button>
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 20 18">
                                                                    <path
                                                                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                                                </svg>
                                                                <span class="sr-only">Upload image</span>
                                                            </button>
                                                        </div>
                                                        <button type="submit"
                                                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-full focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                                            <svg class="w-4 h-4 text-white dark:text-white"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="bg-white p-4 border rounded-xl">
                            <article>
                                <div class="flex items-center mb-4">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                            alt="Jese image">
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
                                        <div class="text-gray-500 dark:text-gray-400 flex justify-between items-center">
                                            <span class="font-semibold text-gray-900 dark:text-white">Profesional
                                                C++</span>
                                            <span class="text-gray-500 text-sm">
                                                <button id="dropdownMenuIconHorizontalButton1"
                                                    data-dropdown-toggle="dropdownDotsHorizontal1"
                                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100  dark:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                                    type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 16 3">
                                                        <path
                                                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                    </svg>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div id="dropdownDotsHorizontal1"
                                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="dropdownMenuIconHorizontalButton1">
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                                        </li>
                                                    </ul>
                                                    <div class="py-2">
                                                        <a href="#"
                                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated
                                                            link</a>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
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
                                <a href="#" class="block mb-5 text-sm font-medium text-blue-600 dark:text-blue-500">Read
                                    more</a>

                                <p class="mt-1 text-xs mb-1 text-gray-500 dark:text-gray-400">
                                    19 reciones</p>
                                <aside class="dark:border-gray-600 border-gray-200 border-t">
                                    <div class="flex items-center mt-2">
                                        <a href="#"
                                            class="w-full text-gray-700 sfocus:z-10 dark:hover:text-blue-600 hover:text-blue-600 hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Me
                                            gusta
                                        </a>
                                        <button id="commentButton2" data-collapse-toggle="commentSection2"
                                            aria-expanded="false" aria-controls="commentSection"
                                            class="w-full text-gray-700 focus:z-10 dark:hover:text-blue-600 hover:text-blue-600  hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Comentar
                                        </button>
                                    </div>
                                </aside>
                                <!-- Sección de Comentarios -->
                                <div id="commentSection2"
                                    class="hidden mt-2 dark:border-gray-600 border-gray-200 border-t">

                                    <div class="flex items-start mt-2 gap-2.5">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                            alt="Jese image">
                                        <div class="w-full">

                                            <form>
                                                <div
                                                    class="w-full mb-4 border border-gray-200 rounded-lg bg-white dark:border-gray-600">
                                                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                                        <label for="comment" class="sr-only">Your comment</label>
                                                        <textarea id="comment" rows="1"
                                                            class="w-full overflow-hidden resize-none dark:focus:ring-blue-500 dark:focus:border-blue-500  px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                                            placeholder="Escribe tu comentario..." required></textarea>
                                                    </div>
                                                    <div
                                                        class="flex items-center justify-between px-2 py-2 dark:bg-gray-800">
                                                        <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 12 20">
                                                                    <path stroke="currentColor" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                                                </svg>
                                                                <span class="sr-only">Attach file</span>
                                                            </button>
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 16 20">
                                                                    <path
                                                                        d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                                </svg>
                                                                <span class="sr-only">Set location</span>
                                                            </button>
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 20 18">
                                                                    <path
                                                                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                                                </svg>
                                                                <span class="sr-only">Upload image</span>
                                                            </button>
                                                        </div>
                                                        <button type="submit"
                                                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-full focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                                            <svg class="w-4 h-4 text-white dark:text-white"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>


                        <div class="bg-white p-4 border rounded-xl">
                            <article>
                                <div class="flex items-center mb-4">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                            alt="Jese image">
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
                                        <div class="text-gray-500 dark:text-gray-400 flex justify-between items-center">
                                            <span class="font-semibold text-gray-900 dark:text-white">Profesional
                                                C++</span>
                                            <span class="text-gray-500 text-sm">
                                                <button id="dropdownMenuIconHorizontalButton1"
                                                    data-dropdown-toggle="dropdownDotsHorizontal1"
                                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100  dark:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                                    type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 16 3">
                                                        <path
                                                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                    </svg>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div id="dropdownDotsHorizontal1"
                                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="dropdownMenuIconHorizontalButton1">
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                                        </li>
                                                    </ul>
                                                    <div class="py-2">
                                                        <a href="#"
                                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated
                                                            link</a>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
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
                                <a href="#" class="block mb-5 text-sm font-medium text-blue-600 dark:text-blue-500">Read
                                    more</a>

                                <p class="mt-1 text-xs mb-1 text-gray-500 dark:text-gray-400">
                                    19 reciones</p>
                                <aside class="dark:border-gray-600 border-gray-200 border-t">
                                    <div class="flex items-center mt-2">
                                        <a href="#"
                                            class="w-full text-gray-700 sfocus:z-10 dark:hover:text-blue-600 hover:text-blue-600 hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Me
                                            gusta
                                        </a>
                                        <button id="commentButton3" data-collapse-toggle="commentSection3"
                                            aria-expanded="false" aria-controls="commentSection"
                                            class="w-full text-gray-700 focus:z-10 dark:hover:text-blue-600 hover:text-blue-600  hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Comentar
                                        </button>
                                    </div>
                                </aside>
                                <!-- Sección de Comentarios -->
                                <div id="commentSection3"
                                    class="hidden mt-2 dark:border-gray-600 border-gray-200 border-t">

                                    <div class="flex items-start mt-2 gap-2.5">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                            alt="Jese image">
                                        <div class="w-full">

                                            <form>
                                                <div
                                                    class="w-full mb-4 border border-gray-200 rounded-lg bg-white dark:border-gray-600">
                                                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                                        <label for="comment" class="sr-only">Your comment</label>
                                                        <textarea id="comment" rows="1"
                                                            class="w-full overflow-hidden resize-none dark:focus:ring-blue-500 dark:focus:border-blue-500  px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                                            placeholder="Escribe tu comentario..." required></textarea>
                                                    </div>
                                                    <div
                                                        class="flex items-center justify-between px-2 py-2 dark:bg-gray-800">
                                                        <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 12 20">
                                                                    <path stroke="currentColor" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                                                </svg>
                                                                <span class="sr-only">Attach file</span>
                                                            </button>
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 16 20">
                                                                    <path
                                                                        d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                                </svg>
                                                                <span class="sr-only">Set location</span>
                                                            </button>
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 20 18">
                                                                    <path
                                                                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                                                </svg>
                                                                <span class="sr-only">Upload image</span>
                                                            </button>
                                                        </div>
                                                        <button type="submit"
                                                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-full focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                                            <svg class="w-4 h-4 text-white dark:text-white"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>


                        <div class="bg-white p-4 border rounded-xl">
                            <article>
                                <div class="flex items-center mb-4">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                            alt="Jese image">
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
                                        <div class="text-gray-500 dark:text-gray-400 flex justify-between items-center">
                                            <span class="font-semibold text-gray-900 dark:text-white">Profesional
                                                C++</span>
                                            <span class="text-gray-500 text-sm">
                                                <button id="dropdownMenuIconHorizontalButton1"
                                                    data-dropdown-toggle="dropdownDotsHorizontal1"
                                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100  dark:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                                    type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 16 3">
                                                        <path
                                                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                    </svg>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div id="dropdownDotsHorizontal1"
                                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="dropdownMenuIconHorizontalButton1">
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                                        </li>
                                                    </ul>
                                                    <div class="py-2">
                                                        <a href="#"
                                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated
                                                            link</a>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
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
                                <a href="#" class="block mb-5 text-sm font-medium text-blue-600 dark:text-blue-500">Read
                                    more</a>

                                <p class="mt-1 text-xs mb-1 text-gray-500 dark:text-gray-400">
                                    19 reciones</p>
                                <aside class="dark:border-gray-600 border-gray-200 border-t">
                                    <div class="flex items-center mt-2">
                                        <a href="#"
                                            class="w-full text-gray-700 sfocus:z-10 dark:hover:text-blue-600 hover:text-blue-600 hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Me
                                            gusta
                                        </a>
                                        <button id="commentButton4" data-collapse-toggle="commentSection4"
                                            aria-expanded="false" aria-controls="commentSection"
                                            class="w-full text-gray-700 focus:z-10 dark:hover:text-blue-600 hover:text-blue-600  hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Comentar
                                        </button>
                                    </div>
                                </aside>
                                <!-- Sección de Comentarios -->
                                <div id="commentSection4"
                                    class="hidden mt-2 dark:border-gray-600 border-gray-200 border-t">

                                    <div class="flex items-start mt-2 gap-2.5">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                            alt="Jese image">
                                        <div class="w-full">

                                            <form>
                                                <div
                                                    class="w-full mb-4 border border-gray-200 rounded-lg bg-white dark:border-gray-600">
                                                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                                        <label for="comment" class="sr-only">Your comment</label>
                                                        <textarea id="comment" rows="1"
                                                            class="w-full overflow-hidden resize-none dark:focus:ring-blue-500 dark:focus:border-blue-500  px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                                            placeholder="Escribe tu comentario..." required></textarea>
                                                    </div>
                                                    <div
                                                        class="flex items-center justify-between px-2 py-2 dark:bg-gray-800">
                                                        <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 12 20">
                                                                    <path stroke="currentColor" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                                                </svg>
                                                                <span class="sr-only">Attach file</span>
                                                            </button>
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 16 20">
                                                                    <path
                                                                        d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                                </svg>
                                                                <span class="sr-only">Set location</span>
                                                            </button>
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 20 18">
                                                                    <path
                                                                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                                                </svg>
                                                                <span class="sr-only">Upload image</span>
                                                            </button>
                                                        </div>
                                                        <button type="submit"
                                                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-full focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                                            <svg class="w-4 h-4 text-white dark:text-white"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>



                        <div class="bg-white p-4 border rounded-xl">
                            <article>
                                <div class="flex items-center mb-4">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                            alt="Jese image">
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
                                        <div class="text-gray-500 dark:text-gray-400 flex justify-between items-center">
                                            <span class="font-semibold text-gray-900 dark:text-white">Profesional
                                                C++</span>
                                            <span class="text-gray-500 text-sm">
                                                <button id="dropdownMenuIconHorizontalButton1"
                                                    data-dropdown-toggle="dropdownDotsHorizontal1"
                                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100  dark:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                                    type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 16 3">
                                                        <path
                                                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                    </svg>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div id="dropdownDotsHorizontal1"
                                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="dropdownMenuIconHorizontalButton1">
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                                        </li>
                                                    </ul>
                                                    <div class="py-2">
                                                        <a href="#"
                                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated
                                                            link</a>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
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
                                <a href="#" class="block mb-5 text-sm font-medium text-blue-600 dark:text-blue-500">Read
                                    more</a>

                                <p class="mt-1 text-xs mb-1 text-gray-500 dark:text-gray-400">
                                    19 reciones</p>
                                <aside class="dark:border-gray-600 border-gray-200 border-t">
                                    <div class="flex items-center mt-2">
                                        <a href="#"
                                            class="w-full text-gray-700 sfocus:z-10 dark:hover:text-blue-600 hover:text-blue-600 hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Me
                                            gusta
                                        </a>
                                        <button id="commentButton" data-collapse-toggle="commentSection"
                                            aria-expanded="false" aria-controls="commentSection"
                                            class="w-full text-gray-700 focus:z-10 dark:hover:text-blue-600 hover:text-blue-600  hover:bg-gray-100 font-medium rounded-full text-sm px-2 py-2 text-center items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:text-white">Comentar
                                        </button>
                                    </div>
                                </aside>
                                <!-- Sección de Comentarios -->
                                <div id="commentSection"
                                    class="hidden mt-2 dark:border-gray-600 border-gray-200 border-t">

                                    <div class="flex items-start mt-2 gap-2.5">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                            alt="Jese image">
                                        <div class="w-full">

                                            <form>
                                                <div
                                                    class="w-full mb-4 border border-gray-200 rounded-lg bg-white dark:border-gray-600">
                                                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                                        <label for="comment" class="sr-only">Your comment</label>
                                                        <textarea id="comment" rows="1"
                                                            class="w-full overflow-hidden resize-none dark:focus:ring-blue-500 dark:focus:border-blue-500  px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                                            placeholder="Escribe tu comentario..." required></textarea>
                                                    </div>
                                                    <div
                                                        class="flex items-center justify-between px-2 py-2 dark:bg-gray-800">
                                                        <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 12 20">
                                                                    <path stroke="currentColor" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                                                </svg>
                                                                <span class="sr-only">Attach file</span>
                                                            </button>
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 16 20">
                                                                    <path
                                                                        d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                                </svg>
                                                                <span class="sr-only">Set location</span>
                                                            </button>
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 20 18">
                                                                    <path
                                                                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                                                </svg>
                                                                <span class="sr-only">Upload image</span>
                                                            </button>
                                                        </div>
                                                        <button type="submit"
                                                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-full focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                                            <svg class="w-4 h-4 text-white dark:text-white"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </main>

                <!-- Sidebar Izquierdo -->
                <div class="sticky mb-28 top-0 h-screen hidden lg:block">
                    <aside class="w-72 mb-4 bg-white p-4 border rounded-xl lg:block">
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
                            <div class="rounded-lg" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="flex px-1 py-1">
                                            <div class="flex-shrink-0">
                                                <div class="relative me-4">
                                                    <img class="w-10 h-10 rounded-full"
                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                        alt="profile image">
                                                    <span
                                                        class="top-0 start-7 absolute w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">PHP
                                                        Laravel</span></div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Estudiante
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-1 py-1">
                                            <div class="flex-shrink-0">
                                                <div class="relative me-4">
                                                    <img class="w-10 h-10 rounded-full"
                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                        alt="profile image">
                                                    <span
                                                        class="top-0 start-7 absolute w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Grupo de
                                                        C#</span>
                                                </div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Estudiante
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-1 py-1">
                                            <div class="flex-shrink-0">
                                                <div class="relative me-4">
                                                    <img class="w-10 h-10 rounded-full"
                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                        alt="profile image">
                                                    <span
                                                        class="top-0 start-7 absolute w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">PHP
                                                        Laravel</span></div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Estudiante
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-1 py-1">
                                            <div class="flex-shrink-0">
                                                <div class="relative me-4">
                                                    <img class="w-10 h-10 rounded-full"
                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                        alt="profile image">
                                                    <span
                                                        class="top-0 start-7 absolute w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Grupo de
                                                        C#</span>
                                                </div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Estudiante
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-1 py-1">
                                            <div class="flex-shrink-0">
                                                <div class="relative me-4">
                                                    <img class="w-10 h-10 rounded-full"
                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                        alt="profile image">
                                                    <span
                                                        class="top-0 start-7 absolute w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Grupo de
                                                        C#</span>
                                                </div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Estudiante
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="rounded-lg" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="flex px-1 py-1">
                                            <div class="flex-shrink-0">
                                                <div class="relative me-4">
                                                    <img class="w-10 h-10 rounded-full"
                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                        alt="profile image">
                                                    <span
                                                        class="top-0 start-7 absolute w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Html y
                                                        css</span></div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Profesor
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-1 py-1">
                                            <div class="flex-shrink-0">
                                                <div class="relative me-4">
                                                    <img class="w-10 h-10 rounded-full"
                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                        alt="profile image">
                                                    <span
                                                        class="top-0 start-7 absolute w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Angular</span>
                                                </div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Profesor
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="rounded-lg" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="flex px-1 py-1">
                                            <div class="flex-shrink-0">
                                                <div class="relative me-4">
                                                    <img class="w-10 h-10 rounded-full"
                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                        alt="profile image">
                                                    <span
                                                        class="top-0 start-7 absolute w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Inteligencia
                                                        artificial</span></div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Profesor
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex px-1 py-1">
                                            <div class="flex-shrink-0">
                                                <div class="relative me-4">
                                                    <img class="w-10 h-10 rounded-full"
                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                        alt="profile image">
                                                    <span
                                                        class="top-0 start-7 absolute w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                                </div>
                                            </div>
                                            <div class="w-full ps-3">
                                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                        class="font-semibold text-gray-900 dark:text-white">Profesional
                                                        C++</span></div>
                                                <div class="text-xs text-gray-400 dark:text-gray-400">Profesor
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


                    <aside class="w-72 mb-4 bg-white p-4 border rounded-xl lg:block">
                        <h2 class="text-lg font-bold mb-1">Solicitudes de Amistad</h2>
                        <ul class="space-y-2">
                            <li>
                                <a href="#" class="text-blue-500 hover:underline">
                                    <div
                                        class="w-full max-w-sm bg-white border-2 rounded-xl dark:bg-gray-800 dark:border-gray-700">
                                        <div class="flex justify-end px-4 pt-4">
                                            <button id="dropdownHoverButtonSoli"
                                                data-dropdown-toggle="dropdownHoverSoli" data-dropdown-trigger="hover"
                                                class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-sm p-1.5"
                                                type="button">
                                                <span class="sr-only">Open dropdown</span>
                                                <svg class="w-5 h-5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 16 3">
                                                    <path
                                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                </svg>
                                            </button>
                                            <!-- Dropdown menu -->
                                            <div id="dropdownHoverSoli"
                                                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                <ul class="py-2" aria-labelledby="dropdownHoverButtonSoli">
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Solicitudes
                                                            recibidas</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Solicitudes
                                                            enviadas</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Todas</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center pb-10">
                                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                                                src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                alt="Bonnie image" />
                                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Acxel
                                                Aplicano</h5>
                                            <span class="text-sm text-gray-500 dark:text-gray-400">
                                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                                    <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800"
                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                        alt="">
                                                    <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800"
                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                        alt="">
                                                    <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800"
                                                        src="https://www.azulschool.net/wp-content/uploads/avatars/34880/67344815cd549-bpfull.jpg"
                                                        alt="">
                                                    <a class="flex items-center justify-center w-6 h-6 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800"
                                                        href="#">+6</a> amigos en común
                                                </div>
                                            </span>
                                            <div class="flex mt-4 md:mt-6">
                                                <a href="#"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Confirmar</a>
                                                <a href="#"
                                                    class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Eliminar</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <button type="button"
                            class="px-3 mt-1 py-1.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ver todos
                        </button>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>