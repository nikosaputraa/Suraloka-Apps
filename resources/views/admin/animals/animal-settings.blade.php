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
                            <div class="px-6 py-4 w-full flex justify-between items-center">
                                <p class="font-bold text-black">
                                    Category Animal
                                </p>

                                <!-- Modal toggle -->
                                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                    class="right-0 block text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                    <i class="fad fa-plus text-xs mr-2"></i>
                                    Category
                                </button>

                                <!-- Main modal -->
                                <div id="crud-modal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 left-0 right-0 bottom-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                                    <div
                                        class="relative p-4 w-full max-w-md bg-white rounded-lg shadow-lg dark:bg-gray-700">
                                        <!-- Modal content -->
                                        <div class="relative">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Create
                                                    New
                                                    Category
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="crud-modal">
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
                                            <form action="{{ route('animal-categories.store') }}" method="POST"
                                                id="addCategoryForm" enctype="multipart/form-data">
                                                @csrf
                                                <div class="grid gap-4 mb-4 grid-cols-2 p-4">
                                                    <div class="col-span-2">
                                                        <label for="name"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                            Category</label>
                                                        <input type="text" name="name" id="name"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="Masukkan nama category" required="">
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="image-category"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                                        <input type="file" name="image" id="image"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="$2999" required="">
                                                    </div>
                                                </div>
                                                <button type="submit"
                                                    class="text-white inline-flex ml-4 items-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Add Category
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3" width="54px">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gambar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($categories as $category)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td scope="row" class="px-6 py-2 font-medium text-gray-700">
                                {{ $categories->firstItem() + $loop->index }}
                            </td>
                            <td class="px-6 py-2 font-medium text-gray-700">
                                {{ $category->name }}
                            </td>
                            <td class="px-6 py-2 font-medium text-gray-700">
                                @if($category->image)
                                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}"
                                    style="max-width: 10%;">
                                @else
                                <p>No Image</p>
                                @endif
                            </td>
                            <td class="px-6 py-2 font-medium text-gray-700">
                                <div class="flex flex-row justify-start gap-3 items-center">
                                    <!-- Button to toggle Edit Modal -->
                                    <button data-modal-target="edit-modal-{{ $category->id }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        Edit
                                    </button>

                                    <!-- Edit Modal -->
                                    <div id="edit-modal-{{ $category->id }}" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 left-0 right-0 bottom-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                                        <div
                                            class="relative p-4 w-full max-w-md bg-white rounded-lg shadow-lg dark:bg-gray-700">
                                            <!-- Modal content -->
                                            <div class="relative">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                        Edit Category
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="edit-modal-{{ $category->id }}">
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
                                                <form action="{{ route('animal-categories.update', $category->id) }}"
                                                    method="POST" id="editCategoryForm-{{ $category->id }}"
                                                    enctype="multipart/form-data" class="p-4 md:p-5">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                                        <div class="col-span-2">
                                                            <label for="edit-name-{{ $category->id }}"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                                Category</label>
                                                            <input type="text" name="name"
                                                                id="edit-name-{{ $category->id }}"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                placeholder="Masukkan nama category"
                                                                value="{{ $category->name }}" required="">
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label for="edit-image-{{ $category->id }}"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                                            <input type="file" name="image"
                                                                id="edit-image-{{ $category->id }}"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                placeholder="$2999">
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        Update Category
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <form action="{{ route('animal-categories.destroy', $category->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>
                <div class="p-3">
                    {{ $categories->links('tailwind-pagination') }}
                </div>

            </div>
            @include('admin.animals.list-animals')
        </div>


    </div>
    <!-- end content -->


</div>
<!-- end wrapper -->


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mengatur event listener untuk tombol toggle modal create
    const modalToggleCreate = document.querySelectorAll('[data-modal-toggle="crud-modal"]');
    const modalTargetCreate = document.getElementById('crud-modal');

    modalToggleCreate.forEach(toggle => {
        toggle.addEventListener('click', () => {
            modalTargetCreate.classList.toggle('hidden');
            if (!modalTargetCreate.classList.contains('hidden')) {
                document.body.classList.add('overflow-hidden');
            } else {
                document.body.classList.remove('overflow-hidden');
            }
        });
    });

    // Fungsi untuk menampilkan modal edit
    function showEditModal(categoryId) {
        var modal = document.getElementById('edit-modal-' + categoryId);
        modal.classList.remove('hidden');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('overflow-hidden');
    }

    // Fungsi untuk menutup modal edit
    function closeEditModal(categoryId) {
        var modal = document.getElementById('edit-modal-' + categoryId);
        modal.classList.add('hidden');
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('overflow-hidden');
    }

    // Menambahkan event listener pada tombol Edit untuk masing-masing kategori
    var editButtons = document.querySelectorAll('[data-modal-target^="edit-modal"]');
    editButtons.forEach(function(button) {
        var categoryId = button.getAttribute('data-modal-target').split('-').pop();
        button.addEventListener('click', function() {
            showEditModal(categoryId);
        });
    });

    // Menambahkan event listener pada tombol Close di dalam modal edit
    var closeEditButtons = document.querySelectorAll('[data-modal-toggle^="edit-modal"]');
    closeEditButtons.forEach(function(button) {
        var categoryId = button.getAttribute('data-modal-toggle').split('-').pop();
        button.addEventListener('click', function() {
            closeEditModal(categoryId);
        });
    });

    // Menangani submit form pada modal edit
    var editForms = document.querySelectorAll('form[id^="editCategoryForm"]');
    editForms.forEach(function(form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            var categoryId = form.getAttribute('id').split('-').pop();
            var formData = new FormData(form);

            fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Handle success response, you may redirect or show a success message
                    console.log(data); // Log response for debugging
                    closeEditModal(categoryId); // Tutup modal setelah sukses update
                    window.location
                        .reload(); // Reload halaman atau perbarui data tanpa reload jika memungkinkan
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error response, bisa menampilkan pesan error kepada pengguna
                });
        });
    });
});
</script>





@include('admin.layouts.footer')