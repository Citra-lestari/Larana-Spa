<x-admin.dashboard-layout>
    <span class="navigasi-form">
        <a href="{{ route('admin.category.index') }}">Category</a>
        <a href="{{ route('admin.category.edit', $category->id) }}">/ Update</a>
    </span>

    <form action="{{ route('admin.category.update', $category->id) }}" class="container-form" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- ERROR --}}
        <x-admin.error-line></x-admin.error-line>

        {{-- name --}}
        <div class="input-group col-span-2">
            <x-admin.label>Name</x-admin.label>
            <x-admin.input type="text" name="name" placeholder="Input Category" value="{{ old('name', $category->name) }}"></x-admin.input>
        </div>

        {{-- image --}}
        <div class="input-group">
            <x-admin.label>Image</x-admin.label>
            <x-admin.input-image :image="$category->image" />
        </div>

        <div class="container-btn">
            <a href="{{ route('admin.category.index') }}" class="btn btn--secondary">Cancel</a>
            <button type="submit" class="btn btn--primary">Update</button>
        </div>
    </form>
</x-admin.dashboard-layout>
