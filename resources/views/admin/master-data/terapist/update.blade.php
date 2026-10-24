<x-admin.dashboard-layout>
    <span class="navigasi-form">
        <a href="{{ route('admin.terapist.index') }}">Terapist</a>
        <a href="{{ route('admin.terapist.edit', $terapist->id) }}">/ Update</a>
    </span>

    <form action="{{ route('admin.terapist.update', $terapist->id) }}" class="container-form" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- ERROR --}}
        <x-admin.error-line></x-admin.error-line>

        {{-- name --}}
        <div class="input-group">
            <x-admin.label>Name</x-admin.label>
            <x-admin.input type="text" name="name" placeholder="Input Terapist" value="{{ old('name', $terapist->name) }}"></x-admin.input>
        </div>

        <div class="input-group">
            <label for="specialist_id" class="label-per-inputan-crud">Specialist</label>
            <select name="specialist_id" required class="select-option">
                <option value="" disabled>Choose Specialist</option>
                @foreach ($specialists as $specialist)
                    <option value="{{ $specialist->id }}" {{ old('specialist_id', $terapist->specialist_id) == $specialist->id ? 'selected' : '' }}>
                        {{ $specialist->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- image --}}
        <div class="input-group">
            <x-admin.label>Image</x-admin.label>
            <x-admin.input-image :image="$terapist->image" />
        </div>

        <div class="container-btn">
            <a href="{{ route('admin.terapist.index') }}" class="btn btn--secondary">Cancel</a>
            <button type="submit" class="btn btn--primary">Update</button>
        </div>
    </form>
</x-admin.dashboard-layout>
