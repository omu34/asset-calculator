<x-app-layout>
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
</x-app-layout>
