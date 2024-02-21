{{--  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('KYC List') }}
        </h2>
    </x-slot>

    <div class="flex flex-row mt-12 gap-10 max-w-screen-lg mx-auto ">

        <div class="card">
            <div class="card-header font-bold text-green-600">Upload Your Payslip</div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="images" class="form-label  text-green-600">Select Images:</label>
                        <input type="file" class="form-control w-full rounded-xl border-lime-400 mt-1 mb-2" id="images" name="images[]" multiple required accept="image/*">
                    </div>
                    <button type="submit" class="px-4 py-3 hover:bg-green-300 rounded-lg btn btn-primary text-white bg-green-500">Upload Images</button>
                </form>
            </div>
        </div>



        <div class="card">
            <div class="card-header font-bold text-green-600">Upload ID Card</div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="images" class="form-label  text-green-600">Select Images:</label>
                        <input type="file" class="form-control w-full rounded-xl border-lime-400 mt-1 mb-2" id="images" name="images[]" multiple required accept="image/*">
                    </div>
                    <button type="submit" class="px-4 py-3 hover:bg-green-300 rounded-lg btn btn-primary text-white bg-green-500">Upload Images</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header font-bold text-green-600">Upload Bank Statement</div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="images" class="form-label  text-green-600">Select Images:</label>
                        <input type="file" class="form-control w-full rounded-xl border-lime-400 mt-1 mb-2" id="images" name="images[]" multiple required accept="image/*">
                    </div>
                    <button type="submit" class="px-4 py-3 hover:bg-green-300 rounded-lg btn btn-primary text-white bg-green-500">Upload Images</button>
                </form>
            </div>
        </div>


        <div class="card max-w-4xl">
            <div class="card-header font-bold text-green-600">Upload Member Id</div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="images" class="form-label  text-green-600">Select Images:</label>
                        <input type="file" class="form-control w-full rounded-xl border-lime-400 mt-1 mb-2" id="images" name="images[]" multiple required accept="image/*">
                    </div>
                    <button type="submit" class="px-4 py-3 hover:bg-green-300 rounded-lg btn btn-primary text-white bg-green-500">Upload Images</button>
                </form>
            </div>
        </div>
</x-app-layout>  --}}


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('KYC List') }}
        </h2>
    </x-slot>
    <div class=" pr-8 pl-8  pt-4 pb-4  max-w-screen-xl mx-auto">
        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                <div class="grid grid-cols-1 md:grid-rows-4 gap-4">
                    <!-- First form -->
                    <div class="">
                        <div class="bg-white border border-gray-300 shadow-md rounded-md">
                            <div class="bg-gray-200 border-b border-gray-300 px-4 py-2">
                                <h2 class="text-lg font-semibold">Upload ID</h2>
                            </div>
                            <div class="p-4">
                                <!-- Preview container for ID -->
                                <div id="idPreview" class="mt-2"></div>
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-gray-700">Select Files:</label>
                                    <input type="file" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 file-input @error('files') @enderror" data-preview="#idPreview">
                                    @if($errors->has('files'))
                                    <span class="text-red-500 text-sm">{{ $errors->first('files') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Second form -->
                    <div class="">
                        <div class="bg-white border border-gray-300 shadow-md rounded-md">
                            <div class="bg-gray-200 border-b border-gray-300 px-4 py-2">
                                <h2 class="text-lg font-semibold">Upload 2 Passports</h2>
                            </div>
                            <div class="p-4">
                                <!-- Preview container for 2 Passports -->
                                <div id="passportPreview" class="mt-2"></div>
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-gray-700">Select Files:</label>
                                    <input type="file" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 file-input @error('files') @enderror" data-preview="#passportPreview">
                                    @if($errors->has('files'))
                                    <span class="text-red-500 text-sm">{{ $errors->first('files') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Third form -->
                    <div class="">
                        <div class="bg-white border border-gray-300 shadow-md rounded-md">
                            <div class="bg-gray-200 border-b border-gray-300 px-4 py-2">
                                <h2 class="text-lg font-semibold">Upload Last Bank Statement</h2>
                            </div>
                            <div class="p-4">
                                <!-- Preview container for 2 Passports -->
                                <div id="bankPreview" class="mt-2"></div>
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-gray-700">Select Files:</label>
                                    <input type="file" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 file-input @error('files') @enderror" data-preview="#bankPreview">
                                    @if($errors->has('files'))
                                    <span class="text-red-500 text-sm">{{ $errors->first('files') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fourth form -->
                    <div class="">
                        <div class="bg-white border border-gray-300 shadow-md rounded-md">
                            <div class="bg-gray-200 border-b border-gray-300 px-4 py-2">
                                <h2 class="text-lg font-semibold">Upload Title Deed</h2>
                            </div>
                            <div class="p-4">
                                <!-- Preview container for 2 Passports -->
                                <div id="deedPreview" class="mt-2"></div>
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-gray-700">Select Files:</label>
                                    <input type="file" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 file-input @error('files') @enderror" data-preview="#deedPreview">
                                    @if($errors->has('files'))
                                    <span class="text-red-500 text-sm">{{ $errors->first('files') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mb-4 mt-2">
                    <button type="submit" class="inline-block bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-md">
                        Upload All
                    </button>
                </div>
            </div>

        </form>
    </div>
</x-app-layout>


<script>
    // JavaScript for previewing images before upload
    document.addEventListener("DOMContentLoaded", function() {
        const fileInputs = document.querySelectorAll('.file-input');

        fileInputs.forEach(function(fileInput) {
            const previewContainer = document.querySelector(fileInput.dataset.preview);

            fileInput.addEventListener('change', function() {
                previewContainer.innerHTML = '';
                const files = this.files;

                if (files) {
                    Array.from(files).forEach(function(file) {
                        const reader = new FileReader();

                        reader.addEventListener('load', function() {
                            const imgElement = document.createElement('img');
                            imgElement.src = this.result;
                            imgElement.classList.add('w-32', 'h-32', 'object-cover', 'rounded-md', 'border', 'border-gray-300', 'mr-2', 'mb-2');
                            previewContainer.appendChild(imgElement);
                        });

                        reader.readAsDataURL(file);
                    });
                }
            });
        });
    });

</script>


