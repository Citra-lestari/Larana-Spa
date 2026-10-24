<x-admin.dashboard-layout>
    <div class="container-form-index">
        <div class="container-title-form">
            <h1 class="title-form">Terapist</h1>
            <a href="{{ route('admin.terapist.create') }}" class="btn btn--primary">Add +</a>
        </div>
        <div class="container-table">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Specialist</th>
                        <th class="th-action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($terapists as $terapist)
                        <tr data-id="{{ $terapist->id }}">
                            <td>{{ $terapist->name }}</td>
                            <td>{{ $terapist->specialist->name }}</td>
                            <td class="td-action">
                                {{-- View --}}
                                <a href="{{ route('admin.terapist.show', $terapist->id) }}" class="action-btn action-btn--view">
                                    <iconify-icon icon="mdi:eye-outline" width="17"></iconify-icon>
                                </a>
                                {{-- Edit --}}
                                <a href="{{ route('admin.terapist.edit', $terapist->id) }}" class="action-btn action-btn--edit">
                                    <iconify-icon icon="tabler:edit" width="17"></iconify-icon>
                                </a>
                                {{-- Delete --}}
                                <button class="action-btn action-btn--delete"
                                    data-route="{{ route('admin.terapist.destroy', $terapist->id) }}"
                                    data-name="{{ $terapist->name }}">
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
            @if ($terapists->onFirstPage())
                <button disabled class="pagination-arrow disabled">
                    <iconify-icon icon="material-symbols:arrow-left-alt-rounded" width="22"></iconify-icon>
                </button>
            @else
                <button onclick="window.location='{{ $terapists->previousPageUrl() }}'" class="pagination-arrow">
                    <iconify-icon icon="material-symbols:arrow-left-alt-rounded" width="22"></iconify-icon>
                </button>
            @endif

            {{-- Nomor Halaman --}}
            @for ($page = 1; $page <= $terapists->lastPage(); $page++)
                <button
                    onclick="window.location='{{ $terapists->url($page) }}'"
                    class="pagination-page {{ $terapists->currentPage() == $page ? 'pagination-active' : '' }}">
                    {{ $page }}
                </button>
            @endfor

            {{-- Next --}}
            @if ($terapists->hasMorePages())
                <button onclick="window.location='{{ $terapists->nextPageUrl() }}'" class="pagination-arrow">
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
                <a href="{{ route('admin.terapist.index') }}" type="button" id="cancelDelete" class="btn btn--secondary">Cancel</a>
                <button class="btn btn--primary" type="submit">Delete</button>
            </div>
        </div>
    </form>

    @push('scripts')
        <script src="{{ asset('javascripts/pop-up-delete.js') }}"></script>
    @endpush
</x-admin.dashboard-layout>
