
<div x-data="{showCategoryChildren: false}" class="flex">
    <div class="relative flex">
        <button x-on:click.outside="showCategoryChildren = false" x-on:click="showCategoryChildren = ! showCategoryChildren"
                class="group transform flex items-center cursor-pointer text-black hover:text-gray-900 pt-4 pb-4 pl-4 pr-4 outline-none font-bold uppercase" type="button">
            <a href="https://artlab.bg/karikaturi" x-on:click.prevent="true">
                Карикатури
            </a>
            <span class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-br from-gray-900 to-black opacity-0 transform translate-y-3 group-hover:opacity-100 group-hover:translate-y-0"></span>
        </button>
    </div>
    <div x-show="showCategoryChildren" style="display: none" x-transition class="absolute z-50 top-full inset-x-0 text-gray-500 sm:text-sm">
        <div class="absolute inset-0 top-1/2 bg-white shadow"></div>
        <div class="relative bg-white">
            <div class="max-w-screen-xl mx-auto px-8">
                <div class="grid grid-cols-6 items-start gap-y-3 gap-x-3 pt-3 pb-3">

                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-52c41202ce0932326a72b1ee315b1408-300x300.png" alt="https://artlab.bg/storage/thumbnails/quality-90-resize-52c41202ce0932326a72b1ee315b1408-300x300.png" class="object-center object-cover group-hover:opacity-75">
                        <div class="flex flex-col justify-end">
                            <div class="p-4 bg-black bg-opacity-60 text-sm">
                                <a class="font-medium uppercase text-white" href="https://artlab.bg/karikaturi-s-dve-lica">
                                    <span class="absolute inset-0"></span>
                                    Карикатури с две лица
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-31fca9baadd5d93b93b31728b43c4b86-300x300.png" alt="https://artlab.bg/storage/thumbnails/quality-90-resize-31fca9baadd5d93b93b31728b43c4b86-300x300.png" class="object-center object-cover group-hover:opacity-75">
                        <div class="flex flex-col justify-end">
                            <div class="p-4 bg-black bg-opacity-60 text-sm">
                                <a class="font-medium uppercase text-white" href="https://artlab.bg/karikaturi-s-edno-lice">
                                    <span class="absolute inset-0"></span>
                                    Карикатура с едно лице
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-9d431ab21ab3aab92d85048163d8b6b0-300x300.png" alt="https://artlab.bg/storage/thumbnails/quality-90-resize-9d431ab21ab3aab92d85048163d8b6b0-300x300.png" class="object-center object-cover group-hover:opacity-75">
                        <div class="flex flex-col justify-end">
                            <div class="p-4 bg-black bg-opacity-60 text-sm">
                                <a class="font-medium uppercase text-white" href="https://artlab.bg/karikatura-s-tri-lica">
                                    <span class="absolute inset-0"></span>
                                    Семейни карикатури
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-6e49f89383fb381f064433bed427fa8f-300x300.webp" alt="https://artlab.bg/storage/thumbnails/quality-90-resize-6e49f89383fb381f064433bed427fa8f-300x300.webp" class="object-center object-cover group-hover:opacity-75">
                        <div class="flex flex-col justify-end">
                            <div class="p-4 bg-black bg-opacity-60 text-sm">
                                <a class="font-medium uppercase text-white" href="https://artlab.bg/karikaturi-stil-gta">
                                    <span class="absolute inset-0"></span>
                                    Карикатури стил GTA
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-d980a1e88cd908e0db9acf6490df7052-300x300.png" alt="https://artlab.bg/storage/thumbnails/quality-90-resize-d980a1e88cd908e0db9acf6490df7052-300x300.png" class="object-center object-cover group-hover:opacity-75">
                        <div class="flex flex-col justify-end">
                            <div class="p-4 bg-black bg-opacity-60 text-sm">
                                <a class="font-medium uppercase text-white" href="https://artlab.bg/karikaturi-po-koncepciia">
                                    <span class="absolute inset-0"></span>
                                    Карикатури по концепция
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-02562ecd65236f2531e843c9eff3f3b3-300x300.png" alt="https://artlab.bg/storage/thumbnails/quality-90-resize-02562ecd65236f2531e843c9eff3f3b3-300x300.png" class="object-center object-cover group-hover:opacity-75">
                        <div class="flex flex-col justify-end">
                            <div class="p-4 bg-black bg-opacity-60 text-sm">
                                <a class="font-medium uppercase text-white" href="https://artlab.bg/karikaturi-podarak-za-zhena">
                                    <span class="absolute inset-0"></span>
                                    Карикатури подарък за жена
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-af02ceaf07ec9457fbd8b872b5140f92-300x300.png" alt="https://artlab.bg/storage/thumbnails/quality-90-resize-af02ceaf07ec9457fbd8b872b5140f92-300x300.png" class="object-center object-cover group-hover:opacity-75">
                        <div class="flex flex-col justify-end">
                            <div class="p-4 bg-black bg-opacity-60 text-sm">
                                <a class="font-medium uppercase text-white" href="https://artlab.bg/karikaturi-podarak-za-mazh">
                                    <span class="absolute inset-0"></span>
                                    Карикатури подарък за мъж
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-4e6224d0f1a825da7fcdc22e35b92d11-300x300.png" alt="https://artlab.bg/storage/thumbnails/quality-90-resize-4e6224d0f1a825da7fcdc22e35b92d11-300x300.png" class="object-center object-cover group-hover:opacity-75">
                        <div class="flex flex-col justify-end">
                            <div class="p-4 bg-black bg-opacity-60 text-sm">
                                <a class="font-medium uppercase text-white" href="https://artlab.bg/karikaturi-podarak-za-dete">
                                    <span class="absolute inset-0"></span>
                                    Карикатури подарък за дете
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-aac29d7f4e80d611200a885797483ee3-300x300.png" alt="https://artlab.bg/storage/thumbnails/quality-90-resize-aac29d7f4e80d611200a885797483ee3-300x300.png" class="object-center object-cover group-hover:opacity-75">
                        <div class="flex flex-col justify-end">
                            <div class="p-4 bg-black bg-opacity-60 text-sm">
                                <a class="font-medium uppercase text-white" href="https://artlab.bg/karikaturi-podarak-za-dvoyka">
                                    <span class="absolute inset-0"></span>
                                    Карикатури подарък за двойка
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-25c225131908aeaa86c323ba317e4e22-300x300.png" alt="https://artlab.bg/storage/thumbnails/quality-90-resize-25c225131908aeaa86c323ba317e4e22-300x300.png" class="object-center object-cover group-hover:opacity-75">
                        <div class="flex flex-col justify-end">
                            <div class="p-4 bg-black bg-opacity-60 text-sm">
                                <a class="font-medium uppercase text-white" href="https://artlab.bg/karikaturi-po-profesiya">
                                    <span class="absolute inset-0"></span>
                                    Карикатури по професия
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-0705ddb3a0e47d4d0a6ed00faf25cb36-300x300.png" alt="https://artlab.bg/storage/thumbnails/quality-90-resize-0705ddb3a0e47d4d0a6ed00faf25cb36-300x300.png" class="object-center object-cover group-hover:opacity-75">
                        <div class="flex flex-col justify-end">
                            <div class="p-4 bg-black bg-opacity-60 text-sm">
                                <a class="font-medium uppercase text-white" href="https://artlab.bg/karikatura-s-priyateli-i-kolegi">
                                    <span class="absolute inset-0"></span>
                                    Карикатура с приятели и колеги
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                        <img src="https://artlab.bg/storage/thumbnails/quality-90-resize-c987935025efcbe62d3c178488f31880-300x300.png" alt="https://artlab.bg/storage/thumbnails/quality-90-resize-c987935025efcbe62d3c178488f31880-300x300.png" class="object-center object-cover group-hover:opacity-75">
                        <div class="flex flex-col justify-end">
                            <div class="p-4 bg-black bg-opacity-60 text-sm">
                                <a class="font-medium uppercase text-white" href="https://artlab.bg/karikaturi">
                                    <span class="absolute inset-0"></span>
                                    Виж всички
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
