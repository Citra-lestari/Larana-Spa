<x-admin.dashboard-layout>
    <div class="container-form-index">
        <div class="container-title-form">
            <h1 class="title-form">Specialist</h1>
            <a href="{{ route('admin.specialist.create') }}" class="btn btn--primary">Add +</a>
        </div>
        <div class="container-table">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th class="th-action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($specialists as $specialist)
                        <tr data-id="{{ $specialist->id }}">
                            <td>{{ $specialist->name }}</td>
                            <td class="td-action">
                                {{-- View --}}
                                <a href="{{ route('admin.specialist.show', $specialist->id) }}" class="action-btn action-btn--view">
                                    <iconify-icon icon="mdi:eye-outline" width="17"></iconify-icon>
                                </a>
                                {{-- Edit --}}
                                <a href="{{ route('admin.specialist.edit', $specialist->id) }}" class="action-btn action-btn--edit">
                                    <iconify-icon icon="tabler:edit" width="17"></iconify-icon>
                                </a>
                                {{-- Delete --}}
                                <button class="action-btn action-btn--delete"
                                    data-route="{{ route('admin.specialist.destroy', $specialist->id) }}"
                                    data-name="{{ $specialist->name }}">
                                    <iconify-icon icon="mdi:trash-can-outline" width="17"></iconify-icon>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- PAGINATION --}}
        <div class="container-pagination">
            {{-- Previous --}}
            @if ($specialists->onFirstPage())
                <button disabled class="pagination-arrow disabled">
                    <iconify-icon icon="material-symbols:arrow-left-alt-rounded" width="22"></iconify-icon>
                </button>
            @else
                <button onclick="window.location='{{ $specialists->previousPageUrl() }}'" class="pagination-arrow">
                    <iconify-icon icon="material-symbols:arrow-left-alt-rounded" width="22"></iconify-icon>
                </button>
            @endif

            {{-- Nomor Halaman --}}
            @for ($page = 1; $page <= $specialists->lastPage(); $page++)
                <button
                    onclick="window.location='{{ $specialists->url($page) }}'"
                    class="pagination-page {{ $specialists->currentPage() == $page ? 'pagination-active' : '' }}">
                    {{ $page }}
                </button>
            @endfor

            {{-- Next --}}
            @if ($specialists->hasMorePages())
                <button onclick="window.location='{{ $specialists->nextPageUrl() }}'" class="pagination-arrow">
                    <iconify-icon icon="material-symbols:arrow-right-alt-rounded" width="22"></iconify-icon>
                </button>
            @else
                <button disabled class="pagination-arrow disabled">
                    <iconify-icon icon="material-symbols:arrow-right-alt-rounded" width="22"></iconify-icon>
                </button>
            @endif
        </div>
    </div>

    <form method="POST" id="popUpDelete" class="hidden overlay-pop-up-delete">
        @csrf
        @method('DELETE')

        <div class="card-pop-up-delete">
            <span data-icon="pepicons-pop:trash" data-width="55" class="iconify icon-pop-up-delete"></span>

            <h2 class="text-title-pop-up-detele">Delete Data?</h2>

            <p class="text-desc-pop-up-delete" id="deleteText">
                Are you sure to delete this data?
            </p>

            <div class="button-cancel-and-delete">
                <a href="{{ route('admin.category.index') }}" type="button" id="cancelDelete" class="btn btn--secondary">Cancel</a>
                <button class="btn btn--primary" type="submit">Delete</button>
            </div>
        </div>
    </form>

    @push('scripts')
        <script src="{{ asset('javascripts/pop-up-delete.js') }}"></script>
    @endpush
</x-admin.dashboard-layout>
