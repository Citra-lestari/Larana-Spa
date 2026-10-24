<x-admin.dashboard-layout>
    <span class="navigasi-form">
        <a href="{{ route('admin.category.index') }}">Category</a>
        <a href="{{ route('admin.category.show', $category->id) }}">/ Read</a>
    </span>

    <div class="container-form">
        <div class="input-group">
            <x-admin.label>Category</x-admin.label>
            <x-admin.input
                type="text"
                name="name"
                placeholder="Input Category"
                :value="$category->name"
                readonly
            />
        </div>

        <div class="input-group">
            <x-admin.label>Image</x-admin.label>
            @if ($category->image)
                <div style="margin-bottom:10px;">
                    <img
                        src="{{ asset('storage/' . $category->image) }}"
                        alt="{{ $category->name }}"
                        style="width:150px; height:150px; object-fit:cover; border-radius:4px;"
                    >
                </div>
            @else
                <p>No image available.</p>
            @endif
        </div>
    </div>
</x-admin.dashboard-layout>
