    <!-- start sidebar -->
    <div id="sideBar"
        class="relative mt-16 flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


        <!-- sidebar content -->
        <div class="flex flex-col fixed">

            <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">Settings</p>

            <a href="{{ route('admin.dashboard') }}"
                class="mb-2 px-6 py-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ request()->route()->getName() == 'admin.dashboard' ? 'text-teal-600 px-6 py-2 bg-teal-200 rounded-lg'   : '' }}">
                <i class="fad fa-folder-open text-xs mr-2"></i>
                Collections Animals
            </a>

            <a href="{{ route('admin.plants') }}"
                class="mb-2 px-6 py-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ request()->route()->getName() == 'admin.plants' ? 'text-teal-600 px-6 py-2 bg-teal-200 rounded-lg' : '' }}">
                <i class="fad fa-database text-xs mr-2"></i>
                Collections Plants
            </a>

            <a href="{{ route('admin.shop') }}"
                class="mb-2 px-6 py-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ request()->route()->getName() == 'admin.shop' ? 'text-teal-600 px-6 py-2 bg-teal-200 rounded-lg' : '' }}">
                <i class="fad fa-shopping-cart text-xs mr-2"></i>
                Merchandise
            </a>

            <!-- end link -->

        </div>
        <!-- end sidebar content -->

    </div>
    <!-- end sidbar -->