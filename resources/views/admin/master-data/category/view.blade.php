<x-admin.dashboard-layout>
    <span class="navigasi-form">
        <a href="{{ route('admin.category.index') }}">Category</a>
        <a href="{{ route('admin.category.show', $category->id) }}">/ Read</a>
    </span>

    <form action="" class="container-form">
        <div class="input-group col-span-2">
            <x-admin.label>Category</x-admin.label>
            <x-admin.input type="text" name="name" placeholder="Input Category" value="{{ old('name', $category->name) }}" readonly></x-admin.input>
        </div>

        {{-- image --}}
        <div class="input-group">
            <x-admin.label>Image</x-admin.label>
            @if ($category->image)
            {{-- @if itu adalah sebuah templating dari laravel.
                kalau nanti di $commodity -> image ada datanya, maka jalankan code di bawah ini--}}
                <div style="margin-bottom:10px;">
                    <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image" style="width:150px; height:150px; object-fit:cover; border-radius:4px;">
                    {{-- asset adalah helper laravel untuk menghasilkan URL ke file publik --}}
                </div>
            @endif
        </div>
    </form>
</x-admin.dashboard-layout>
