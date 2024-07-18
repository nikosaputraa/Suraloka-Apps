<div class="mt-8 md:mt-8">


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <div class="px-6 py-4 w-full flex justify-between items-center">
                        <p class="font-bold text-black">
                            List Animals
                        </p>

                        <!-- Modal toggle -->
                        <button data-modal-target="animal-modal" data-modal-toggle="animal-modal"
                            class="right-0 block text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            <i class="fad fa-plus text-xs mr-2"></i>
                            Animals
                        </button>

                        <!-- Modal utama -->
                        <div id="animal-modal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 left-0 right-0 bottom-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                            <div class="relative p-4 w-full max-w-md bg-white rounded-lg shadow-lg dark:bg-gray-700">
                                <!-- Konten modal -->
                                <div class="relative">
                                    <!-- Header modal -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add New Animal
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="animal-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Body modal -->
                                    <form action="{{ route('animal-add.store') }}" method="POST" id="addAnimalForm"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <!-- Bagian form untuk setiap section -->
                                        <div class="form-section" data-section="1">
                                            <!-- Section 1 -->
                                            <div class="grid gap-4 mb-4 grid-cols-1 p-4">
                                                <div>
                                                    <label for="animal_name"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                        Animal</label>
                                                    <input type="text" name="animal_name" id="animal_name"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        placeholder="Masukkan nama animal" required="">
                                                </div>
                                                <div>
                                                    <label for="latin_name"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                        Latin</label>
                                                    <input type="text" name="latin_name" id="latin_name"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        placeholder="Masukkan nama latin animal" required="">
                                                </div>
                                                <div>
                                                    <label for="category_id"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                                    <select
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        id="category_id" name="category_id" required>
                                                        <option value="">Select Category</option>
                                                        @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-section hidden" data-section="2">
                                            <!-- Section 2 -->
                                            <div class="grid gap-4 mb-4 grid-cols-1 p-4">
                                                <div>
                                                    <label for="animal_desc"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                                    <textarea name="animal_desc" id="animal_desc"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        placeholder="Masukkan deskripsi animal" rows="5"
                                                        required=""></textarea>
                                                </div>
                                                <div>
                                                    <label for="animal_habitat"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Habitat</label>
                                                    <input type="text" name="animal_habitat" id="animal_habitat"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        placeholder="Masukkan habitat animal" required="">
                                                </div>
                                                <div>
                                                    <label for="animal_origin"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal</label>
                                                    <input type="text" name="animal_origin" id="animal_origin"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        placeholder="Masukkan asal animal" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-section hidden" data-section="3">
                                            <!-- Section 3 -->
                                            <div class="grid gap-4 mb-4 grid-cols-1 p-4">
                                                <div>
                                                    <label for="animal_diet"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Makanan</label>
                                                    <input type="text" name="animal_diet" id="animal_diet"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        placeholder="Masukkan makanan animal" required="">
                                                </div>
                                                <div>
                                                    <label for="animal_lifespan"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rentang
                                                        Umur</label>
                                                    <input type="text" name="animal_lifespan" id="animal_lifespan"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        placeholder="Masukkan rentang umur animal" required="">
                                                </div>
                                                <div>
                                                    <label for="animal_image"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                                    <input type="file" name="animal_image" id="animal_image"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        placeholder="" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tombol navigasi -->
                                        <div class="flex justify-end p-4">
                                            <button type="button"
                                                class="hidden text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                id="prevBtn" onclick="prevSection()">Previous</button>
                                            <button type="button"
                                                class="text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center ml-4 next-btn"
                                                id="nextBtn" onclick="nextSection()">Next</button>
                                            <button type="submit" id="submitBtn"
                                                class="hidden text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center ml-4"
                                                onclick="submitForm()">Submit</button>
                                        </div>
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
                        Gambar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Hewan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Latin
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Deskripsi
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($animals as $animal)
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700  items-center justify-center">
                    <td scope="row" class="px-6 py-2 font-medium text-gray-700">
                        {{ $animals->firstItem() + $loop->index }}
                    </td>
                    <td class="flex px-6 py-2 font-medium text-gray-700">
                        @if($animal->animal_image)
                        <img src="{{ asset('storage/' . $animal->animal_image) }}" alt="{{ $animal->animal_name }}"
                            style="max-width: 80%;">
                        @else
                        <p>No Image</p>
                        @endif
                    </td>
                    <td class="px-6 py-2 font-medium text-gray-700">
                        {{ $animal->animal_name }}
                    </td>
                    <td class="px-6 py-2 font-medium text-gray-700">
                        {{ $animal->latin_name }}
                    </td>
                    <td class="px-6 py-2 font-medium text-gray-700">
                        {{ $animal->category->name }}
                    </td>
                    <td class="px-6 py-2 font-medium text-gray-700">
                        {{ Str::words($animal->animal_desc, 10, '...') }}
                    </td>

                    <td class="px-6 py-2 font-medium text-gray-700">
                        <div class="flex flex-row justify-start gap-3 items-center">
                            <a href="{{ route('animals.show', $animal->id) }}">
                                <button class="font-medium text-green-600 dark:text-green-500 hover:underline">
                                    View
                                </button>
                            </a>

                            <a href="{{ route('animals.edit', $animal->id) }}">
                                <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    Edit
                                </button>
                            </a>

                            <form action="{{ route('animal.destroy', $animal->id) }}" method="POST">
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
            {{ $animals->links('tailwind-pagination') }}
        </div>
    </div>

</div>



<script>
// Function untuk menutup modal
document.addEventListener('DOMContentLoaded', function() {
    const modalButton = document.querySelector('[data-modal-toggle="animal-modal"]');
    const modal = document.getElementById('animal-modal');
    const closeButton = modal.querySelector('[data-modal-toggle="animal-modal"]');

    // Menampilkan modal saat tombol "Tambah Animal" diklik
    modalButton.addEventListener('click', function() {
        modal.classList.toggle('hidden');
        modal.setAttribute('aria-hidden', !modal.classList.contains('hidden'));
    });

    // Menutup modal saat tombol close di dalam modal diklik
    closeButton.addEventListener('click', function() {
        modal.classList.add('hidden');
        modal.setAttribute('aria-hidden', true);
    });

    // Menutup modal saat area luar modal diklik
    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.classList.add('hidden');
            modal.setAttribute('aria-hidden', true);
        }
    });
});

// Function untuk navigasi form
function nextSection() {
    const sections = document.querySelectorAll('#animal-modal .form-section');
    let currentSection = 0;
    sections.forEach((section, index) => {
        if (!section.classList.contains('hidden')) {
            currentSection = index;
        }
    });
    sections[currentSection].classList.add('hidden');
    sections[currentSection + 1].classList.remove('hidden');
    updateButtons(currentSection + 1, sections.length);
}

function prevSection() {
    const sections = document.querySelectorAll('#animal-modal .form-section');
    let currentSection = 0;
    sections.forEach((section, index) => {
        if (!section.classList.contains('hidden')) {
            currentSection = index;
        }
    });
    sections[currentSection].classList.add('hidden');
    sections[currentSection - 1].classList.remove('hidden');
    updateButtons(currentSection - 1, sections.length);
}

function updateButtons(currentSection, totalSections) {
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');

    prevBtn.classList.toggle('hidden', currentSection === 0);
    nextBtn.classList.toggle('hidden', currentSection === totalSections - 1);
    submitBtn.classList.toggle('hidden', currentSection !== totalSections - 1);
}

// Function untuk submit form
function submitForm() {
    document.getElementById('addAnimalForm').submit();
}
</script>