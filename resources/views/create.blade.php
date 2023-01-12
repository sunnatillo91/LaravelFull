<x-layouts.main>
    <x-slot:title>
        Website tekshirish
    </x-slot:title>

    <x-page-header>
        Website tekshirish
    </x-page-header>

    {{-- <div class="container-fluid bg-primary py-5 mb-5"> --}}
    <div class="container">
        <div class=" w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>
                <form action="{{ route('website.checkStatus') }}" method="POST">
                    @csrf
                    <label for="url">URL:</label>
                    <input type="text" name="url" id="url" placeholder="Enter website URL">
                    <br>
                    <input type="submit" value="Check Status">
                </form>
            </div>
            {{-- </div> --}}
        </div>
    </div>

</x-layouts.main>
