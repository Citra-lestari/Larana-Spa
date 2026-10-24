<x-admin.dashboard-layout>
    <span class="navigasi-form">
        <a href="{{ route('admin.category.index') }}">Category</a>
        <a href="{{ route('admin.category.create') }}">/ Add</a>
    </span>

    <form action="{{ route('admin.category.store') }}" method="POST" class="container-form" enctype="multipart/form-data">
        @csrf

        {{-- ERROR --}}
        <x-admin.error-line></x-admin.error-line>

        {{-- name --}}
        <div class="input-group col-span-2">
            <x-admin.label>Name</x-admin.label>
            <x-admin.input type="text" name="name" placeholder="Input Category Name" :value="old('name')" />
        </div>

        {{-- image --}}
        <div class="input-group">
            <x-admin.label>Image</x-admin.label>
            <x-admin.input-image />
        </div>

        <div class="container-btn">
            <a href="{{ route('admin.category.index') }}" class="btn btn--secondary">Cancel</a>
            <button type="submit" class="btn btn--primary">Add</button>
        </div>
    </form>
</x-admin.dashboard-layout>
