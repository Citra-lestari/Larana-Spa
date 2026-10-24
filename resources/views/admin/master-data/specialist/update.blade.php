<x-admin.dashboard-layout>
    <span class="navigasi-form">
        <a href="{{ route('admin.specialist.index') }}">Specialist</a>
        <a href="{{ route('admin.specialist.edit', $specialist->id) }}">/ Update</a>
    </span>

    <form action="{{ route('admin.specialist.update', $specialist->id) }}" class="container-form" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- ERROR --}}
        <x-admin.error-line></x-admin.error-line>

        {{-- name --}}
        <div class="input-group col-span-2">
            <x-admin.label>Name</x-admin.label>
            <x-admin.input type="text" name="name" placeholder="Input Category" value="{{ old('name', $specialist->name) }}"></x-admin.input>
        </div>

        <div class="container-btn">
            <a href="{{ route('admin.category.index') }}" class="btn btn--secondary">Cancel</a>
            <button type="submit" class="btn btn--primary">Update</button>
        </div>
    </form>
</x-admin.dashboard-layout>
