@if ($errors->any())
    <div class="mb-4 p-3 bg-red-50 text-red-600 rounded md:col-span-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
