<x-layouts.main>
    <x-slot:title>
        Postni o'zgartirish #{{ $post -> id }}
    </x-slot:title>

    <x-page-header>
        Postni o'zgartirish #{{ $post -> id }}
    </x-page-header>

    <div class="container">
        <div class=" w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-sm-6 control-group mb-4">
                            <input type="text" class="form-control p-4" name="title" placeholder="Sarlavha"
                                required="required" data-validation-required-message="Please enter your name" />
                            @error('title')
                                <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-sm-6 control-group mb-4">
                            <input name="photo" type="file" class="form-control p-4" id="subject"
                                placeholder="Rasm" />
                            @error('photo')
                                <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="control-group mb-4">
                        <input type="text" class="form-control p-4" name="short_content"
                            placeholder="Qisqacha mazmuni" required="required"
                            data-validation-required-message="Please enter a subject" />
                        @error('short_content')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-4">
                        <textarea class="form-control p-4" rows="6" name="content" placeholder="Maqola" required="required"
                            data-validation-required-message="Please enter your message"></textarea>
                        @error('content')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block py-3 px-5" type="submit">
                            Saqlash
                        </button>
                    </div>
                </form>
            </div>
            {{-- </div> --}}
        </div>
    </div>

</x-layouts.main>
