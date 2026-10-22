<header class="sticky top-0 z-50 h-20 bg-white mb-10">
    <div class="sticky top-0 z-20 h-full mx-auto max-w-[90%] md:max-w-[85%] 2xl:max-w-350 mb-30 bg-white">
        <div class=" relative flex justify-between items-center h-full">
            <nav class="w-full relative md:z-0 z-10 h-full flex justify-between items-center " id="navbar">
                <div>
                    <a href=""><img src="asset/category.jpg" alt="logo" class="h-7 w-24 lg:h-10.5 lg:w-35.75"></a>
                </div>
                <div class="hidden md:flex items-center">
                    <ul class="flex flex-col gap-2 md:flex-row md:items-center md:gap-3 lg:gap-8">
                        <li><a href="" class="nav-all">Home</a></li>
                        <li><a href="" class="nav-all">About Us</a></li>
                        <li><a href="" class="nav-all">Our Treatment</a></li>
                        <li><a href="" class="nav-all">Our Package</a></li>
                        <li><a href="" class="nav-all">Our Blog</a></li>
                    </ul>
                </div>
                <div class="hidden md:block">
                    <x-ui.button variant="primary" class="hidden md:block">Contact Us</x-ui.button>
                </div>
                <button class="md:hidden" id="menu-toggle" aria-label="Buka menu navigasi" aria-controls="mobile-menu" aria-expanded="false">
                    <iconify-icon icon="mynaui:menu" class="text-[32px] text-black hover:text-black hover:transition-all hover:duration-500"></iconify-icon>
                </button>
                <div class="h-full bg-secondary w-97.5 absolute top-0 right-0 -z-10 hidden md:block lg:block 2xl:block"></div>
            </nav>
            <nav class="hidden md:hidden w-full py-8 fixed bg-white padding z-10 top-28" id="mobile-menu">
                <div class="flex flex-col gap-4 items-center">
                    <ul class="flex flex-col gap-2 md:flex-row md:items-center md:gap-8">
                        <li><a href="" class="nav-all">Home</a></li>
                        <li><a href="" class="nav-all">About Us</a></li>
                        <li><a href="" class="nav-all">Our Treatment</a></li>
                        <li><a href="" class="nav-all">Our Package</a></li>
                        <li><a href="" class="nav-all">Our Blog</a></li>
                    </ul>
                    <x-ui.button variant="primary" class="hidden md:block">Contact Us</x-ui.button>
                </div>
            </nav>
        </div>
    </div>
</header>
