<x-admin.dashboard-layout>
    <span class="navigasi-form">
        <a href="{{ route('admin.terapist.index') }}">Terapist</a>
        <a href="{{ route('admin.terapist.show', $terapist->id) }}">/ Read</a>
    </span>

    <form action="" class="container-form">
        <div class="input-group">
            <x-admin.label>Terapist</x-admin.label>
            <x-admin.input type="text" name="name" placeholder="Input Terapist" value="{{ old('name', $terapist->name) }}" readonly></x-admin.input>
        </div>

        <div class="input-group">
            <x-admin.label>Specialist</x-admin.label>
            <x-admin.input type="text" name="name" placeholder="Input Terapist" value="{{ old('name', $terapist->specialist->name) }}" readonly></x-admin.input>
        </div>

        {{-- image --}}
        <div class="input-group">
            <x-admin.label>Image</x-admin.label>
            @if ($terapist->image)
            {{-- @if itu adalah sebuah templating dari laravel.
                kalau nanti di $commodity -> image ada datanya, maka jalankan code di bawah ini--}}
                <div style="margin-bottom:10px;">
                    <img src="{{ asset('storage/' . $terapist->image) }}" alt="Terapist Image" style="width:150px; height:150px; object-fit:cover; border-radius:4px;">
                    {{-- asset adalah helper laravel untuk menghasilkan URL ke file publik --}}
                </div>
            @endif
        </div>
    </form>
</x-admin.dashboard-layout>
