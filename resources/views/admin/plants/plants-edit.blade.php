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
                                    Edit Plant
                                </p>

                            </div>

                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <form action="{{ route('plants.update', $plants->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Form Sections -->
                            <div class="grid grid-cols-2 md:grid-cols-2 gap-4 p-4">
                                <!-- Left Column -->
                                <div class="grid gap-4 mb-4">
                                    <div>
                                        @if ($plants->plant_image)
                                        <img src="{{ asset('storage/' . $plants->plant_image) }}"
                                            alt="{{ $plants->plant_name }}" class="max-w-full h-auto">
                                        @else
                                        <p>No Image</p>
                                        @endif
                                    </div>
                                    <div>
                                        
                                        <input type="file" name="plant_image" id="plant_image"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="">
                                    </div>
                                    <div>
                                        <label for="plant_name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                            Plant</label>
                                        <input type="text" name="plant_name" id="plant_name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Masukkan nama animal" value="{{ $plants->plant_name }}">
                                    </div>
                                    <div>
                                        <label for="latin_name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                            Latin</label>
                                        <input type="text" name="latin_name" id="latin_name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Masukkan nama latin animal" value="{{ $plants->latin_name }}">
                                    </div>
                                    <div>
                                        <label for="edit-animal-category-{{ $plants->id }}"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                        <select name="category_id" id="edit-animal-category-{{ $plants->id }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id === $plants->category_id ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <!-- Right Column -->
                                <div class="grid gap-4 mb-4">
                                    <div>
                                        <label for="plant_desc"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                        <textarea type="text" name="plant_desc" id="plant_desc"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Masukkan deskripsi animal"
                                            rows="5">{{ $plants->plant_desc }}</textarea>
                                    </div>
                                    <div>
                                        <label for="plant_habitat"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Habitat</label>
                                        <input type="text" name="plant_habitat" id="plant_habitat"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Masukkan habitat animal" value="{{ $plants->plant_habitat }}">
                                    </div>
                                    <div>
                                        <label for="plant_origin"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal</label>
                                        <input type="text" name="plant_origin" id="plant_origin"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Masukkan asal animal" value="{{ $plants->plant_origin }}">
                                    </div>
                                    <div>
                                        <label for="plant_klasifikasi"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Klasifikasi</label>
                                        <textarea type="text" name="plant_klasifikasi" id="plant_klasifikasi"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Masukkan deskripsi animal"
                                            rows="5">{{ $plants->plant_klasifikasi }}</textarea>
                                    </div>
                                    

                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-end p-4">
                                <button type="submit"
                                    class="text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Update
                                </button>
                            </div>
                        </form>
                    </tbody>


                </table>
            </div>
        </div>


    </div>
    <!-- end content -->


</div>
<!-- end wrapper -->






@include('admin.layouts.footer')