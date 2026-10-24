<x-admin.dashboard-layout>
    <span class="navigasi-form">
        <a href="{{ route('admin.specialist.index') }}">Specialist</a>
        <a href="{{ route('admin.specialist.show', $specialist->id) }}">/ Read</a>
    </span>

    <div class="container-form">
        <div class="input-group col-span-2">
            <x-admin.label>Specialist</x-admin.label>
            <x-admin.input
                type="text"
                name="name"
                placeholder="Input Specialist"
                :value="$specialist->name"
                readonly
            />
        </div>
    </div>
</x-admin.dashboard-layout>
