@include('admin.layouts.navbar')

<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">

    @include('admin.layouts.sidebar')

    <!-- strat content -->
    <div class="bg-gray-100 flex-1 mt-16 p-6 md:mt-16">
        <div class="flex flex-col w-full justify-center">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <div class="px-6 py-4 w-full flex gap-4 text-center">
                                <div class="flex items-center">
                                    <a href="{{ route('admin.plants') }}"
                                        class="text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-500 focus:outline-none">
                                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 19l-7-7m0 0l7-7m-7 7h18">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <p class="font-bold text-xl text-center text-black">
                                    Detail Plant {{ $plant->plant_name }}
                                </p>

                            </div>

                        </tr>
                    </thead>
                    <tbody>
                        <div class="px-6 pb-4 grid gap-4 md:grid-cols-2 text-gray-900">
                            <div>
                                @if ($plant->plant_image)
                                <img src="{{ asset('storage/' . $plant->plant_image) }}"
                                    alt="{{ $plant->plant_name }}" class="max-w-full h-auto">
                                @else
                                <p>No Image</p>
                                @endif
                            </div>
                            <div class="flex flex-col gap-4">
                                <p class="text-gray-900 text-lg text-bold"><strong>{{ $plant->plant_name }}</strong>
                                </p>
                                <p class="text-gray-900">
                                    <strong>Latin Name :</strong> <br>
                                    {{ $plant->latin_name }}
                                </p>
                                <p class="text-gray-900">
                                    <strong>Category:</strong> <br>
                                    {{ $plant->category->name }}
                                </p>
                                <p class="text-gray-900"><strong>Description:</strong> <br>
                                    {{ $plant->plant_desc }}</p>
                                <p class="text-gray-900"><strong>Habitat:</strong> <br>
                                    {{ $plant->plant_habitat }}</p>
                                <p class="text-gray-900"><strong>Origin:</strong> <br>
                                    {{ $plant->plant_origin }}</p>
                                <p class="text-gray-900"><strong>Klasifikasi:</strong> <br>
                                    {{ $plant->plant_klasifikasi }}</p>
                            </div>
                        </div>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- end content -->


</div>
<!-- end wrapper -->






@include('admin.layouts.footer')