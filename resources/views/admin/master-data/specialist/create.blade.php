<x-admin.dashboard-layout>
    <span class="navigasi-form">
        <a href="{{ route('admin.specialist.index') }}">Specialist</a>
        <a href="{{ route('admin.specialist.create') }}">/ Add</a>
    </span>

    <form action="{{ route('admin.specialist.store') }}" method="POST" class="container-form" enctype="multipart/form-data">
        @csrf

        {{-- ERROR --}}
        <x-admin.error-line></x-admin.error-line>

        {{-- name --}}
        <div class="input-group col-span-2">
            <x-admin.label>Name</x-admin.label>
            <x-admin.input type="text" name="name" placeholder="Input Specialist Name" :value="old('name')" />
        </div>

        <div class="container-btn">
            <a href="{{ route('admin.specialist.index') }}" class="btn btn--secondary">Cancel</a>
            <button type="submit" class="btn btn--primary">Add</button>
        </div>
    </form>
</x-admin.dashboard-layout>
