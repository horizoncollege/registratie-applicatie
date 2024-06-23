@if ($paginator->hasPages())
    <nav>
        <div class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <div class="pagination-button disabled">
                    <i class="fa-solid fa-angles-left" style="opacity: 0.5;"></i><span
                        style="color: #999; margin-left: 10px;">Vorige</span>
                </div>
            @else
                <div class="pagination-button">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i
                            class="fa-solid fa-angles-left"></i><span style="margin-left: 10px;">Vorige</span></a>
                </div>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <div class="pagination-button">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next"><span
                            style="margin-right: 10px;">Volgende</span><i class="fa-solid fa-angles-right"></i></a>
                </div>
            @else
                <div class="pagination-button disabled">
                    <span style="margin-right: 10px; color: #999;">Volgende</span><i class="fa-solid fa-angles-right"
                        style="opacity: 0.5;"></i>
                </div>
            @endif
        </div>
    </nav>
@endif
