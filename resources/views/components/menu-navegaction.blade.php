<nav class="fixed top-0 z-40 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
   <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
         <div class="flex items-center justify-start rtl:justify-end">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
               type="button"
               class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
               <span class="sr-only">Open sidebar</span>
               <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path clip-rule="evenodd" fill-rule="evenodd"
                     d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                  </path>
               </svg>
            </button>
            <a href="https://flowbite.com" class="flex ms-2 md:me-24">
               <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
               <span
                  class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Social</span>
            </a>
         </div>
         <div class="flex items-center gap-2">
            <!-- Dropdown grande que contiene otro dropdown -->
            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
               data-dropdown-delay="100"
               class="text-gray-400 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
               type="button">Dropdown hover <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="m1 1 4 4 4-4" />
               </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownHover"
               class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
               <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                  <li>
                     <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                  </li>
                  <li>
                     <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                  </li>
                  <li>
                     <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                        data-dropdown-placement="right-start" type="button"
                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dropdown<svg
                           class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                           fill="none" viewBox="0 0 6 10">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 9 4-4-4-4" />
                        </svg></button>
                     <div id="doubleDropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                           aria-labelledby="doubleDropdownButton">
                           <li>
                              <a href="#"
                                 class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Overview</a>
                           </li>
                           <li>
                              <a href="#"
                                 class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">My
                                 downloads</a>
                           </li>
                           <li>
                              <a href="#"
                                 class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Billing</a>
                           </li>
                           <li>
                              <a href="#"
                                 class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Rewards</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                  </li>
                  <li>
                     <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                        out</a>
                  </li>
               </ul>
            </div>



            <button data-tooltip-target="tooltip-default" id="dropdownNotificationButton"
               data-dropdown-toggle="dropdownNotification"
               class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400"
               type="button">
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                  viewBox="0 0 14 20">
                  <path
                     d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
               </svg>

               <div
                  class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900">
               </div>
            </button>
            <div id="tooltip-default" role="tooltip"
               class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
               Notificaciones
               <div class="tooltip-arrow" data-popper-arrow></div>
            </div>

            <!-- Dropdown menu -->
            <div id="dropdownNotification"
               class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700"
               aria-labelledby="dropdownNotificationButton">
               <div
                  class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                  Notifications
               </div>
               <div class="divide-y divide-gray-100 dark:divide-gray-700">
                  <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                     <div class="flex-shrink-0">
                        <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-1.jpg"
                           alt="Jese image">
                        <div
                           class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                           <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                              fill="currentColor" viewBox="0 0 18 18">
                              <path
                                 d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                              <path
                                 d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                           </svg>
                        </div>
                     </div>
                     <div class="w-full ps-3">
                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New message from <span
                              class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey, what's up? All
                           set for the presentation?"</div>
                        <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                     </div>
                  </a>
                  <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                     <div class="flex-shrink-0">
                        <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-2.jpg"
                           alt="Joseph image">
                        <div
                           class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-gray-900 border border-white rounded-full dark:border-gray-800">
                           <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                              fill="currentColor" viewBox="0 0 20 18">
                              <path
                                 d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z" />
                           </svg>
                        </div>
                     </div>
                     <div class="w-full ps-3">
                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                              class="font-semibold text-gray-900 dark:text-white">Joseph Mcfall</span> and <span
                              class="font-medium text-gray-900 dark:text-white">5 others</span> started following you.
                        </div>
                        <div class="text-xs text-blue-600 dark:text-blue-500">10 minutes ago</div>
                     </div>
                  </a>
                  <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                     <div class="flex-shrink-0">
                        <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-3.jpg"
                           alt="Bonnie image">
                        <div
                           class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-red-600 border border-white rounded-full dark:border-gray-800">
                           <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                              fill="currentColor" viewBox="0 0 20 18">
                              <path
                                 d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z" />
                           </svg>
                        </div>
                     </div>
                     <div class="w-full ps-3">
                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                              class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span> and <span
                              class="font-medium text-gray-900 dark:text-white">141 others</span> love your story. See
                           it
                           and view more stories.</div>
                        <div class="text-xs text-blue-600 dark:text-blue-500">44 minutes ago</div>
                     </div>
                  </a>
                  <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                     <div class="flex-shrink-0">
                        <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-4.jpg"
                           alt="Leslie image">
                        <div
                           class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-green-400 border border-white rounded-full dark:border-gray-800">
                           <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                              fill="currentColor" viewBox="0 0 20 18">
                              <path
                                 d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                           </svg>
                        </div>
                     </div>
                     <div class="w-full ps-3">
                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                              class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span> mentioned you
                           in
                           a comment: <span class="font-medium text-blue-500" href="#">@bonnie.green</span> what do you
                           say?</div>
                        <div class="text-xs text-blue-600 dark:text-blue-500">1 hour ago</div>
                     </div>
                  </a>
                  <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                     <div class="flex-shrink-0">
                        <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-5.jpg"
                           alt="Robert image">
                        <div
                           class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-purple-500 border border-white rounded-full dark:border-gray-800">
                           <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                              fill="currentColor" viewBox="0 0 20 14">
                              <path
                                 d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z" />
                           </svg>
                        </div>
                     </div>
                     <div class="w-full ps-3">
                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                              class="font-semibold text-gray-900 dark:text-white">Robert Brown</span> posted a new
                           video:
                           Glassmorphism - learn how to implement the new design trend.</div>
                        <div class="text-xs text-blue-600 dark:text-blue-500">3 hours ago</div>
                     </div>
                  </a>
               </div>
               <a href="#"
                  class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                  <div class="inline-flex items-center ">
                     <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                        <path
                           d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                     </svg>
                     View all
                  </div>
               </a>
            </div>


            <!-- Dropdown menu perfil -->
            <div class="flex items-center">
               <div class="flex items-center ms-3">
                  <div>
                     <!-- boton toggle dark -->
                     <button data-tooltip-target="tooltip-default1" id="theme-toggle" type="button"
                        class="text-gray-500 hover:text-gray-900 mr-3 dark:hover:text-white hover:bg-white dark:hover:bg-gray-800 focus:outline-none rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                           xmlns="http://www.w3.org/2000/svg">
                           <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                              fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                     </button>

                     <div id="tooltip-default1" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Modo Oscuro
                        <div class="tooltip-arrow" data-popper-arrow></div>
                     </div>
                  </div>
                  <div>


                     <button id="dropdown-userButton" data-dropdown-toggle="dropdown-user"
                        class="flex text-ellipsis overflow-hidden items-center text-sm pe-1 m-1 font-medium hover:bg-gray-100 text-gray-400 rounded-full hover:text-gray-400 dark:hover:text-gray-400 md:me-0 focus:ring-4 focus:ring-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                        type="button">
                        <span class="sr-only">Open user menu</span>
                        <div class="flex items-center gap-2 m-1">
                           <svg class="w-1 h-1"></svg>
                           <strong>{{ Auth::user()->name }}</strong>
                           <img class="w-8 h-8 me-2 rounded-full"
                              src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&amp;color=000&amp;background=facc15">
                        </div>
                     </button>


                  </div>
                  <div
                     class="z-30 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                     id="dropdown-user">
                     <div class="px-4 py-3" role="none">
                        <li>
                           <a href="#">
                           <div class="flex items-center space-x-3 rtl:space-x-reverse hover:bg-gray-100 rounded-full px-4 py-2 dark:hover:bg-gray-600 dark:hover:text-white">
                              <div class="flex-shrink-0">
                                 <img class="w-8 h-8 rounded-full"
                                    src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&amp;color=000&amp;background=facc15">
                              </div>
                              <div class="flex-1 min-w-0">
                                 <p class="text-sm font-semibold text-gray-900 truncate dark:text-white">
                                    {{ Auth::user()->name }}
                                 </p>
                                 <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    {{ Auth::user()->email }}
                                 </p>
                              </div>
                           </div>
                           </a>
                        </li>


                     </div>
                     <ul class="py-1" role="none">
                        <li>
                           <x-dropdown-link href="{{ route('profile.show') }}">
                              <div class="flex items-center gap-2 ">
                                 <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                       stroke-width="2"
                                       d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                 </svg>
                                 Perfil
                              </div>
                           </x-dropdown-link>
                        </li>
                        <li>
                           <x-dropdown-link data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                              id="dropdownLeftButton" data-dropdown-toggle="dropdownLeft" data-dropdown-placement="left"
                              href="#">
                              <div class="flex items-center gap-2 ">
                                 <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                       d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                 </svg>
                                 Cuenta
                              </div>
                           </x-dropdown-link>
                           <!-- Dropdown menu -->
                           <div id="dropdownLeft" id="dropdownHover"
                              class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                 aria-labelledby="dropdownLeftButton">
                                 <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Inicio
                                       de Sesión</a>
                                 </li>
                                 <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Notificacion
                                       Settings</a>
                                 </li>
                                 <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Exportar
                                       datos</a>
                                 </li>
                                 <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Borrar
                                       cuenta</a>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li>
                           <x-dropdown-link data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                              id="dropdownLeft" data-dropdown-toggle="dropdownLeftMuro" data-dropdown-placement="left"
                              href="#">
                              <div class="flex items-center gap-2 ">
                                 <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                       d="M3 11h18m-9 0v8m-8 0h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                                 </svg>
                                 Mi muro
                              </div>
                           </x-dropdown-link>
                           <!-- Dropdown menu -->
                           <div id="dropdownLeftMuro" id="dropdownHover"
                              class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLeft">
                                 <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Personal</a>
                                 </li>
                                 <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Seguidos</a>
                                 </li>
                                 <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Me
                                       gusta</a>
                                 </li>
                                 <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Menciones</a>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li>
                           <x-dropdown-link data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                              id="dropdownLeft" data-dropdown-toggle="dropdownLeftAmigos" data-dropdown-placement="left"
                              href="#">
                              <div class="flex items-center gap-2 ">
                                 <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                       d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                 </svg>
                                 Amigos
                              </div>
                           </x-dropdown-link>
                           <!-- Dropdown menu -->
                           <div id="dropdownLeftAmigos" id="dropdownHover"
                              class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLeft">
                                 <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mis
                                       amigos</a>
                                 </li>
                                 <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Solicitudes</a>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li>
                           <x-dropdown-link data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                              id="dropdownLeft" data-dropdown-toggle="dropdownLeftGrupos" data-dropdown-placement="left"
                              href="#">
                              <div class="flex items-center gap-2 ">
                                 <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                       d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                 </svg>
                                 Grupos
                              </div>
                           </x-dropdown-link>
                           <!-- Dropdown menu -->
                           <div id="dropdownLeftGrupos" id="dropdownHover"
                              class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLeft">
                                 <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mis
                                       grupos</a>
                                 </li>
                                 <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Invitaciones</a>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li>
                           <x-dropdown-link data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                              id="dropdownLeft" data-dropdown-toggle="dropdownLeftForo" data-dropdown-placement="left"
                              href="#">
                              <div class="flex items-center gap-2">
                                 <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                       stroke-width="2" d="M9 17h6l3 3v-3h2V9h-2M4 4h11v8H9l-3 3v-3H4V4Z" />
                                 </svg>
                                 Foros
                              </div>
                           </x-dropdown-link>
                           <!-- Dropdown menu -->
                           <div id="dropdownLeftForo" id="dropdownHover"
                              class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLeft">
                                 <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mis
                                       discusiones</a>
                                 </li>
                                 <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mis
                                       respuestas</a>
                                 </li>
                                 <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mis
                                       Favoritos</a>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li>
                           <x-dropdown-link href="#">
                              <div class="flex items-center gap-2 ">
                                 <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                       stroke-width="2"
                                       d="m3 16 5-7 6 6.5m6.5 2.5L16 13l-4.286 6M14 10h.01M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                                 </svg>
                                 Fotos
                              </div>
                           </x-dropdown-link>
                        </li>
                        <ul class="pt-1 mt-1 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
                           <li>
                              <form method="POST" action="{{ route('logout') }}" x-data>
                                 @csrf
                                 <x-dropdown-link href="{{ route('login') }}"
                                    class="text-red-800 dark:text-gray-100 hover:bg-red-100"
                                    @click.prevent="$root.submit();">
                                    <div class="flex items-center gap-2 ">
                                       <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true"
                                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                          viewBox="0 0 24 24">
                                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                             stroke-width="2"
                                             d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                                       </svg>

                                       {{ __('Cerrar Sesión') }}
                                    </div>
                                 </x-dropdown-link>
                              </form>
                           </li>
                        </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</nav>

<aside id="logo-sidebar"
   class="fixed top-0 left-0 z-30 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
   aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li>
            <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"
               class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-width="2"
                     d="M3 11h18m-9 0v8m-8 0h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
               </svg>
               <span class="ms-3 text-gray-400">Mi muro</span>
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="{{ route('publicacion') }}" :active="request()->routeIs('publicacion')"
               class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                     d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
               </svg>

               <span class="ms-3 text-gray-400">Grupos</span>
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="{{ route('publicacion') }}" :active="request()->routeIs('publicacion')"
               class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M9 17h6l3 3v-3h2V9h-2M4 4h11v8H9l-3 3v-3H4V4Z" />
               </svg>

               <span class="ms-3 text-gray-400">Foros</span>
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="{{ route('publicacion') }}" :active="request()->routeIs('publicacion')"
               class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M13.5 8H4m0-2v13a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-5.032a1 1 0 0 1-.768-.36l-1.9-2.28a1 1 0 0 0-.768-.36H5a1 1 0 0 0-1 1Z" />
               </svg>

               <span class="ms-3 text-gray-400">Documentos</span>
            </x-nav-link>
         </li>

      </ul>
   </div>
</aside>

<div class="p-4 sm:ml-64">


</div>