<x-admin.dashboard-layout>
    <span class="navigasi-form">
        <a href="{{ route('admin.terapist.index') }}">Terapist</a>
        <a href="{{ route('admin.terapist.create') }}">/ Add</a>
    </span>

    <form action="{{ route('admin.terapist.store') }}" method="POST" class="container-form" enctype="multipart/form-data">
        @csrf

        {{-- ERROR --}}
        <x-admin.error-line></x-admin.error-line>

        {{-- name --}}
        <div class="input-group">
            <x-admin.label>Name</x-admin.label>
            <x-admin.input type="text" name="name" placeholder="Input Terapist Name" :value="old('name')"></x-admin.input>
        </div>

        <div class="input-group">
            <x-admin.label>Specialist</x-admin.label>
            <select name="specialist_id" required class="select-option">
                <option value="" disabled selected>Choose Specialist</option>

                @foreach ($specialists as $specialist)
                    <option value="{{ $specialist->id }}" {{ old('specialist_id') == $specialist->id ? 'selected' : '' }}>
                        {{ $specialist->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- image --}}
        <div class="input-group">
            <x-admin.label>Image</x-admin.label>
            <x-admin.input-image></x-admin.input-image>
        </div>

        <div class="container-btn">
            <a href="{{ route('admin.terapist.index') }}" class="btn btn--secondary">Cancel</a>
            <button type="submit" class="btn btn--primary">Add</button>
        </div>
    </form>
</x-admin.dashboard-layout>
