
<div
    x-data="{
        showMobileMenu: false,
        showSearchModal() {
            const event = new Event('openSearch');
            document.dispatchEvent(event);
       },
       showSidebarCart() {
          const event = new Event('openSidebarCart');
          document.dispatchEvent(event);
        }
}"
    class="bg-white">

    <!-- Mobile menu -->
    <div x-show="showMobileMenu"

         x-transition:enter="transition ease-in-out duration-300 transform"
         x-transition:enter-start="-translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in-out duration-300 transform"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="-translate-x-full"

    >
        <div class="fixed inset-0 flex z-40 lg:hidden">

            <div class="fixed inset-0 bg-black bg-opacity-25"

                 x-on:click="showMobileMenu = false"

                 x-transition:enter="transition-opacity ease-linear duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity ease-linear duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"


            ></div>

            <div>
                <div class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col">

                    <div class="px-4 pt-5 pb-2 flex">
                        <button x-on:click="showMobileMenu = false" type="button" class="-m-2 rounded-md inline-flex items-center justify-center text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 32 32"><path fill="currentColor" d="M16 2C8.2 2 2 8.2 2 16s6.2 14 14 14s14-6.2 14-14S23.8 2 16 2zm0 26C9.4 28 4 22.6 4 16S9.4 4 16 4s12 5.4 12 12s-5.4 12-12 12z"/><path fill="currentColor" d="M21.4 23L16 17.6L10.6 23L9 21.4l5.4-5.4L9 10.6L10.6 9l5.4 5.4L21.4 9l1.6 1.6l-5.4 5.4l5.4 5.4z"/></svg>
                            <span>Затвори</span>
                        </button>
                    </div>

                    <!-- Links mobile version -->
                    <div class="py-6 px-4 space-y-6 overflow-y-auto h-screen pb-12">
                        <div class="flow-root">
                            <a href="" class="-m-2 p-2 block font-medium text-gray-900">
                                <span>Карикатури</span>
                            </a>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/karikaturi-s-dve-lica" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-52c41202ce0932326a72b1ee315b1408-300x300.png" class="w-12 mr-2" />
                                        <span>Карикатури с две лица</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/karikaturi-s-edno-lice" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-31fca9baadd5d93b93b31728b43c4b86-300x300.png" class="w-12 mr-2" />
                                        <span>Карикатура с едно лице</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/karikatura-s-tri-lica" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-9d431ab21ab3aab92d85048163d8b6b0-300x300.png" class="w-12 mr-2" />
                                        <span>Семейни карикатури</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/karikaturi-stil-gta" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-6e49f89383fb381f064433bed427fa8f-300x300.webp" class="w-12 mr-2" />
                                        <span>Карикатури стил GTA</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/karikaturi-po-koncepciia" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-d980a1e88cd908e0db9acf6490df7052-300x300.png" class="w-12 mr-2" />
                                        <span>Карикатури по концепция</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/karikaturi-podarak-za-zhena" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-02562ecd65236f2531e843c9eff3f3b3-300x300.png" class="w-12 mr-2" />
                                        <span>Карикатури подарък за жена</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/karikaturi-podarak-za-mazh" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-af02ceaf07ec9457fbd8b872b5140f92-300x300.png" class="w-12 mr-2" />
                                        <span>Карикатури подарък за мъж</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/karikaturi-podarak-za-dete" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-4e6224d0f1a825da7fcdc22e35b92d11-300x300.png" class="w-12 mr-2" />
                                        <span>Карикатури подарък за дете</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/karikaturi-podarak-za-dvoyka" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-aac29d7f4e80d611200a885797483ee3-300x300.png" class="w-12 mr-2" />
                                        <span>Карикатури подарък за двойка</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/karikaturi-po-profesiya" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-25c225131908aeaa86c323ba317e4e22-300x300.png" class="w-12 mr-2" />
                                        <span>Карикатури по професия</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/karikatura-s-priyateli-i-kolegi" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-0705ddb3a0e47d4d0a6ed00faf25cb36-300x300.png" class="w-12 mr-2" />
                                        <span>Карикатура с приятели и колеги</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/karikaturi" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-c987935025efcbe62d3c178488f31880-300x300.png" class="w-12 mr-2" />
                                        <span>Виж всички</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="flow-root">
                            <a href="" class="-m-2 p-2 block font-medium text-gray-900">
                                <span>3D LED лампи</span>
                            </a>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/3d-led-lampi-za-vlyubeni" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-0555495a889c269c9ca4482aa855bffe-300x300.jpg" class="w-12 mr-2" />
                                        <span>3D led лампи за влюбени</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/3d-led-lampi-za-deca" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-d2c6f81078b210a739a74e31e7dbb3bc-300x300.jpg" class="w-12 mr-2" />
                                        <span>3D led лампи за деца</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/3d-led-lampi-za-zhenata" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-31170fa8b812fb3ad9aba16f7cff245e-300x300.png" class="w-12 mr-2" />
                                        <span>3D led лампи за жени</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/3d-led-lampi-za-mazhe" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-face579fe69f84df348381317440dbc3-300x300.png" class="w-12 mr-2" />
                                        <span>3D led лампи за мъже</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/3d-led-lampi-ilyuzii" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-3144580eebb94f3a4636c1ddd925d0dd-300x300.jpg" class="w-12 mr-2" />
                                        <span>3D led лампи - илюзии</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/3d-led-lampi-za-vseki" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-09a22f6d7fd871b8c28ede6f368cd379-300x300.jpg" class="w-12 mr-2" />
                                        <span>3D led лампи за всеки</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/3d-led-lampi-futbolni" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-7bdac0dc7fa8bbc9b6bb6078af0d173e-300x300.png" class="w-12 mr-2" />
                                        <span>3D led лампи - футболни</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/gravirani-led-lampi" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-99820eea64c5a62eb9fe67f507c1dfee-300x300.webp" class="w-12 mr-2" />
                                        <span>Виж всички</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="flow-root">
                            <a href="" class="-m-2 p-2 block font-medium text-gray-900">
                                <span>Декорации</span>
                            </a>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/pana-skandinavski-muh" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-9af99ba9fd22b24d0e87aa980c96acc7-300x300.jpg" class="w-12 mr-2" />
                                        <span>Скандинавски мъх</span>
                                    </div>
                                </a>
                            </div>
                            <div class="hover:bg-blue-400 text-gray-900 hover:text-white">
                                <a href="https://artlab.bg/dekoracii" class="-m-2 p-2 ml-1 block font-medium">
                                    <div class="flex items-center">
                                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-cf103411f8fed6e292daeff0856d3966-300x300.jpg" class="w-12 mr-2" />
                                        <span>Виж всички</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <header class="relative">
        <nav>
            <div class="bg-gray-900">
                <div class="max-w-7xl mx-auto h-10 px-4 flex items-center justify-between sm:px-6 lg:px-8">
                                        <div class="hidden lg:block lg:flex-1">
                                            <div class="flex text-white edit">0885451012</div>
                                        </div>
<!--                    <div>
                        <div>
                            <marquee>
                                <p class="flex-1 text-center font-extrabold text-white uppercase lg:flex-none edit">
                                    Намаление <span class="bg-black text-white">от 15% до 25% отсъпка</span> на всички продукти през СЪБОТА И НЕДЕЛЯ. | <span class="bg-red-700 text-white underline">Безплатна доставка</span> за поръчки над 50лв!
                                </p>
                            </marquee>
                        </div>
                    </div>-->
                                        <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                                            <a class="text-sm font-medium text-white hover:text-gray-100" href="/">
                                                Създай акаунт
                                            </a>
                                            <span class="h-6 w-px bg-gray-600" aria-hidden="true"></span>
                                            <a class="text-sm font-medium text-white hover:text-gray-100" href="/">
                                                Вход
                                            </a>
                                        </div>
                </div>
            </div>
            <div class="bg-white shadow">
                <div class="max-w-7xl mx-auto">
                    <div class="">
                        <div class="h-24 flex items-center justify-between">
                            <div class="hidden lg:flex lg:items-center">
                               <module type="logo" template="logo" />
                            </div>
                            <div class="hidden h-full lg:flex">
                                <div class="ml-12">
                                    <div class="h-full flex justify-center">
                                        <module type="menu" template="header-main-menu" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 flex items-center lg:hidden">
                                <button x-on:click="showMobileMenu = true" type="button" class="ml-2 bg-white p-2 rounded-md text-gray-400">
                                    <span class="sr-only">Oтвори мобилно меню</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                         class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <button x-on:click="showSearchModal()" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Търсене</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                         class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                              d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                            <a class="lg:hidden" href="/">
                                <svg class="h-24" stroke-miterlimit="10"
                                     style="fill-rule: nonzero; clip-rule: evenodd; stroke-linecap: round; stroke-linejoin: round;"
                                     version="1.1" viewBox="0 0 419.58 297.675" width="100%" xml:space="preserve"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:vectornator="http://vectornator.io"
                                     xmlns:xlink="http://www.w3.org/1999/xlink"><defs></defs>
                                    <clipPath id="ArtboardFrame">
                                        <rect height="297.675" width="419.58" x="0" y="0"></rect>
                                    </clipPath>
                                    <g clip-path="url(#ArtboardFrame)" id="Layer-2" vectornator:layerName="Layer 2">
                                        <path d="M91.2932 96.0009C91.2932 96.0009 91.5073 109.382 91.7344 125.947C92.0191 146.708 92.3241 172.472 92.2535 183.165"
                                              fill="none" opacity="1" stroke="#000000" stroke-linecap="butt"
                                              stroke-linejoin="round" stroke-width="12.8901"></path>
                                        <path d="M10.6093 144.56C10.6093 124.359 27.3264 107.984 47.948 107.984C68.5696 107.984 83.2546 124.359 83.2546 144.56C83.2546 164.761 68.5696 181.137 47.948 181.137C27.3264 181.137 10.6093 164.761 10.6093 144.56Z"
                                              fill="#000000" fill-opacity="0" fill-rule="nonzero" opacity="1"
                                              stroke="#000000" stroke-linecap="butt" stroke-linejoin="round"
                                              stroke-width="12.8901"></path>
                                        <path d="M106.43 89.8013C106.43 89.8013 118.576 89.5894 137.13 89.5894C150.353 89.5894 170.52 96.5128 170.52 122.111C170.52 143.636 159.302 154.298 138.49 154.298C125.282 154.298 116.971 154.742 106.43 154.615"
                                              fill="none" opacity="1" stroke="#000000" stroke-linecap="butt"
                                              stroke-linejoin="round" stroke-width="12.8901"></path>
                                        <path d="M207.156 84.1071L206.293 179.198L240.506 179.198" fill="none"
                                              opacity="1" stroke="#2081e2" stroke-linecap="butt" stroke-linejoin="round"
                                              stroke-width="12.8901"></path>
                                        <path d="M191.167 71.1489L191.675 183.165" fill="none" opacity="1"
                                              stroke="#2081e2" stroke-linecap="butt" stroke-linejoin="round"
                                              stroke-width="12.8901"></path>
                                        <path d="M336.692 70.0059L336.692 184.308" fill="none" opacity="1"
                                              stroke="#000000" stroke-linecap="butt" stroke-linejoin="round"
                                              stroke-width="12.8901"></path>
                                        <path d="M336.692 141.553C336.692 121.352 353.41 104.976 374.031 104.976C394.653 104.976 409.338 121.352 409.338 141.553C409.338 161.753 394.653 178.129 374.031 178.129C353.41 178.129 336.692 161.753 336.692 141.553Z"
                                              fill="#000000" fill-opacity="0" fill-rule="nonzero" opacity="1"
                                              stroke="#000000" stroke-linecap="butt" stroke-linejoin="round"
                                              stroke-width="12.8901"></path>
                                        <path d="M232.787 68.6246C232.787 68.6246 176.019 69.2313 157.096 69.4335"
                                              fill="none" opacity="1" stroke="#2081e2" stroke-linecap="butt"
                                              stroke-linejoin="round" stroke-width="12.8901"></path>
                                        <path d="M322.306 96.0009L322.306 134.194L322.129 151.344L321.917 171.957L321.798 183.511"
                                              fill="none" opacity="1" stroke="#000000" stroke-linecap="butt"
                                              stroke-linejoin="round" stroke-width="12.8901"></path>
                                        <path d="M240.506 144.56C240.506 124.359 257.223 107.984 277.845 107.984C298.467 107.984 313.152 124.359 313.152 144.56C313.152 164.761 298.467 181.137 277.845 181.137C257.223 181.137 240.506 164.761 240.506 144.56Z"
                                              fill="#000000" fill-opacity="0" fill-rule="nonzero" opacity="1"
                                              stroke="#000000" stroke-linecap="butt" stroke-linejoin="round"
                                              stroke-width="12.8901"></path>
                                        <g opacity="1">
                                            <path d="M649.375 367.062C648.788 367.376 649.368 367.072 647.531 368C647.236 367.869 646.913 368.017 646.781 368.312C646.65 368.608 646.767 368.931 647.062 369.062C648.966 369.588 649.309 369.502 648.969 369.594C648.326 369.766 647.464 370.417 647.625 371.062C647.76 371.604 648.838 371.033 649.219 370.625C649.459 370.367 650.875 370.125 650.875 370.125C650.875 370.125 648.916 368.47 649.219 369.062C649.379 369.377 650.126 368.914 650.156 368.562C650.204 368.006 649.867 366.8 649.375 367.062Z"
                                                  fill="#000000" stroke="none"></path>
                                        </g>
                                        <path d="M106.43 83.3698L108.068 183.677" fill="none" opacity="1"
                                              stroke="#000000" stroke-linecap="butt" stroke-linejoin="round"
                                              stroke-width="12.8901"></path>
                                    </g>
                                    <g id="Layer-3" vectornator:layerName="Layer 3" visibility="hidden"></g>
                                    <g id="Layer-4" vectornator:layerName="Layer 4">
                                        <path d="M137.13 155.858L203.911 229.05" fill="none" opacity="1"
                                              stroke="#000000" stroke-linecap="butt" stroke-linejoin="round"
                                              stroke-opacity="0.993511" stroke-width="12.8901"></path>
                                    </g>
                                    <g clip-path="url(#ArtboardFrame)" id="Layer-6" vectornator:layerName="Layer 6"
                                       visibility="hidden">
                                        <g opacity="1">
                                            <path d="M302.031 153.812C300.932 153.855 302.044 153.799 299.938 155.594C299.797 155.799 299.899 156.025 300.031 156.219C299.939 156.326 299.799 156.378 299.688 156.469C299.274 156.804 298.836 157.188 298.75 157.75C298.676 158.238 298.892 158.731 299.156 159.125C300.059 160.469 302.148 160.967 303.469 159.969C305.252 158.621 305.95 154.959 303.469 153.938C303.028 153.756 302.507 153.794 302.031 153.812ZM301.594 155.938C301.714 156.309 301.09 156.218 301 156.312C300.852 156.468 300.921 156.753 300.812 156.938C300.768 157.013 300.604 157.196 300.656 157.125C300.841 156.877 300.928 157.507 300.938 157.531C301.013 157.725 301.36 157.503 301.469 157.531C301.564 157.556 301.123 157.864 301.094 157.875C300.827 157.973 300.193 158.022 300 157.75C299.846 157.532 300.148 156.81 300.312 156.375C300.525 156.404 300.777 156.439 300.906 156.25C301.066 156.052 300.934 156.102 301.062 156.062C301.172 156.029 301.497 155.639 301.594 155.938Z"
                                                  fill="#85d4ff" stroke="none"></path>
                                        </g>
                                        <g opacity="1">
                                            <path d="M307.344 147.438C307.036 150.679 306.941 153.939 306.75 157.188C306.689 158.222 306.581 159.246 306.531 160.281C306.507 160.784 306.43 161.314 306.5 161.812C306.573 162.331 306.765 162.83 306.969 163.312C307.201 163.865 307.635 164.303 307.812 164.875C307.974 165.398 307.921 165.986 307.969 166.531C307.936 166.853 308.147 167.123 308.469 167.156C308.791 167.189 309.092 166.978 309.125 166.656C309.285 166.116 309.361 165.545 309.594 165.031C309.858 164.448 310.34 163.963 310.594 163.375C310.824 162.841 310.983 162.267 311.031 161.688C311.077 161.132 310.963 160.582 310.875 160.031C310.701 158.943 310.392 157.874 310.094 156.812C309.213 153.678 308.161 150.59 307.344 147.438Z"
                                                  fill="#85d4ff" stroke="none"></path>
                                        </g>
                                        <g opacity="1">
                                            <path d="M311.906 138.531C310.197 138.664 308.58 140.475 307.875 141.906C307.455 142.759 307.388 143.662 307.312 144.594C307.294 144.819 307.183 145.066 307.25 145.281C307.63 146.511 307.156 145.937 307.156 145.938C307.156 145.938 308.627 149.216 308.281 148.406C307.862 147.425 307.601 146.367 307.438 145.312C307.403 145.088 307.603 144.898 307.688 144.688C307.771 144.48 307.849 144.268 307.938 144.062C308.625 142.463 310.065 141.189 311.844 140.969C311.884 140.964 311.791 141.06 311.812 141.094C311.863 141.175 311.755 141.178 311.75 141.25C311.733 141.483 311.802 141.736 311.812 141.969C311.838 142.51 311.804 143.055 311.75 143.594C311.625 144.844 311.433 146.078 311.219 147.312C311.126 147.848 311.075 148.385 310.906 148.906C310.731 149.449 310.455 149.9 310.062 150.312C309.964 150.416 309.852 150.628 309.75 150.594C309.984 150.923 310.167 151.295 310.438 151.594C310.546 151.714 310.702 151.423 310.844 151.344C311.197 151.147 311.525 150.985 311.906 150.844C313.649 150.199 315.039 149.804 315.688 147.875C316.065 146.754 315.912 145.555 315.75 144.406C315.55 142.987 315.249 141.434 314.562 140.156C314.284 139.637 314.112 139.381 313.625 139.031C313.064 138.628 312.476 138.487 311.906 138.531ZM309.75 150.594C309.354 150.036 308.932 149.484 308.625 148.875C308.307 148.244 309.104 149.829 309.438 150.5C309.394 150.342 309.377 150.262 309.719 150.625C309.729 150.636 309.739 150.59 309.75 150.594ZM309.438 150.5C309.471 150.621 309.518 150.791 309.375 150.906C309.117 151.101 309.086 151.46 309.281 151.719C309.476 151.977 309.836 152.039 310.094 151.844C309.435 150.511 309.712 151.052 309.438 150.5Z"
                                                  fill="#85d4ff" stroke="none"></path>
                                        </g>
                                        <g opacity="1">
                                            <path d="M314.781 150.344C314.393 150.407 314.001 150.527 313.656 150.719C313.081 151.039 312.585 151.537 312.125 152C309.936 154.204 308.719 157.322 308.844 160.438C308.856 160.732 309.115 161.384 309.344 162.031C309.239 161.334 309.341 160.619 309.5 159.938C310.042 157.609 311.241 155.422 313.188 154C313.882 153.493 314.705 152.746 315.562 153.281C316.013 153.562 315.998 154.389 316.094 154.875C316.181 155.317 316.3 155.743 316.375 156.188C316.652 157.831 315.648 159.067 314.625 160.25C314.088 160.872 313.574 161.474 312.969 162.031C312.473 162.488 311.905 163.198 311.219 163.375C310.838 163.473 311.232 163.389 310.125 162.656C309.984 162.466 309.748 162.517 309.531 162.562C309.568 162.663 309.656 163 309.656 163C309.656 163 309.627 162.844 309.531 162.781C309.495 162.757 309.494 162.644 309.469 162.562C309.412 162.582 309.363 162.494 309.312 162.531C309.053 162.724 308.995 163.084 309.188 163.344C309.515 163.802 309.413 163.618 309.5 163.812C309.59 164.014 310.098 164.387 310.281 164.5C311.284 165.119 312.476 164.728 313.562 164.625C314.384 164.547 315.176 164.548 315.969 164.281C318.271 163.506 319.918 161.381 320.375 159.031C320.552 158.119 320.598 157.197 320.406 156.281C320.227 155.425 319.826 154.647 319.5 153.844C319.224 153.165 318.991 152.478 318.562 151.875C317.727 150.701 316.195 150.115 314.781 150.344ZM309.469 162.562C309.491 162.555 309.509 162.567 309.531 162.562C309.488 162.444 309.416 162.266 309.344 162.062C309.358 162.152 309.411 162.379 309.469 162.562Z"
                                                  fill="#85d4ff" stroke="none"></path>
                                        </g>
                                        <g opacity="1">
                                            <path d="M321.75 150.594C320.369 150.914 319.073 152.086 318.281 153.062C316.934 154.725 316.952 156.255 317.281 158.281C317.365 158.794 317.41 159.329 317.688 159.781C318.233 160.671 319.429 161.422 320.312 161.875C321.029 162.242 321.822 162.515 322.625 162.594C323.301 162.66 323.818 162.462 324.375 162.312C325.032 168.981 327.762 175.289 329.656 181.656C330.294 183.801 331.046 186.1 330.781 188.375C330.683 189.219 330.376 190.296 329.656 190.844C329.044 191.31 328.382 190.987 327.781 190.625C326.463 189.832 325.345 188.591 324.469 187.344C321.197 182.69 321.95 177.702 323.812 172.656C323.927 172.353 323.771 172.02 323.469 171.906C323.166 171.792 322.833 171.947 322.719 172.25C320.376 178.348 318.826 185.26 322.625 191.156C324.698 194.373 328.536 197.104 332.25 194.562C333.252 193.877 334.072 192.784 334.562 191.688C336.198 188.033 334.836 183.902 333.562 180.375C333.362 179.819 333.148 179.271 332.938 178.719C332.52 177.621 332.094 176.527 331.656 175.438C331.224 174.359 330.772 173.298 330.344 172.219C329.711 170.625 329.093 169.006 328.562 167.375C327.905 165.351 327.341 163.27 327.062 161.156C327.039 160.98 327.019 160.802 327 160.625C328.077 159.229 328.65 157.33 328.719 155.5C328.751 154.629 328.979 153.62 328.531 152.812C327.734 151.374 326.415 151.934 325.469 152.781C324.803 151.818 324.089 150.846 323.156 150.594C322.696 150.469 322.21 150.487 321.75 150.594ZM322.75 150.875C323.731 150.853 324.588 151.859 325.375 152.844C325.241 152.971 325.047 153.019 324.938 153.156C323.653 154.761 324.1 156.734 324.156 158.625C324.179 159.405 324.189 160.083 324.219 160.812C323.1 161.324 321.732 161.243 320.281 160.406C319.746 160.098 318.892 159.636 318.562 159.062C318.335 158.668 318.28 158.126 318.188 157.688C318.005 156.819 317.864 155.88 318.062 155C318.467 153.202 320.86 150.917 322.75 150.875ZM326.656 154.875C326.656 155.081 326.681 155.294 326.688 155.5C326.695 155.745 326.632 155.979 326.625 156.219C326.592 155.847 326.459 155.484 326.531 155.125C326.55 155.034 326.618 154.961 326.656 154.875Z"
                                                  fill="#85d4ff" stroke="none"></path>
                                        </g>
                                        <g fill="#000000" opacity="1" stroke="#85d4ff" stroke-linecap="butt"
                                           stroke-linejoin="round" stroke-width="4.29779"></g>
                                    </g></svg>
                            </a>
                            <div class="flex-1 flex items-center justify-end">
                                <div class="flex items-center lg:ml-8">
                                    <div class="flex space-x-3 md:mx-3">
                                        <div class="hidden lg:flex">
                                            <button x-on:click="showSearchModal()" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Търсене</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                    <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                                                          clip-rule="evenodd">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="relative inline-block text-left">
                                            <div>
                                                <button type="button" class="-m-2 p-3 text-gray-400 hover:text-gray-500">
                                                    <span class="sr-only">Профил</span>
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-6 h-6">
                                                            <path fill-rule="evenodd"
                                                                  d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                                                  clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="h-6 w-px bg-gray-200 hidden"></span>
                                    <div class="flow-root">
                                        <button type="button" x-on:click="showSidebarCart()" class="group p-2 px-4 flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 class="flex-shrink-0 h-8 w-8 text-gray-400 group-hover:text-gray-500"
                                                 viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                      d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1Zm-9-1a2 2 0 0 1 4 0v1h-4Zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2Z"></path>
                                            </svg>
                                            <div class="hidden sm:block">
                                                <span class="sr-only">продукта в количката</span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
