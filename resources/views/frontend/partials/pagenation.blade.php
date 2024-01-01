<div class="pro-pagination-style text-center mt-30">
    <ul>
        @if ($paginator->onFirstPage())
            <li><span class="prev disabled"><i class="fa fa-angle-double-left"></i></span></li>
        @else
            <li><a class="prev" href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-angle-double-left"></i></a>
            </li>
        @endif

        @foreach ($paginator->getUrlRange(max(1, $paginator->currentPage() - 2), min($paginator->lastPage(), $paginator->currentPage() + 2)) as $page => $url)
            <li>
                @if ($page == $paginator->currentPage())
                    <a class="active" href="#">{{ $page }}</a>
                @else
                    <a href="{{ $url }}">{{ $page }}</a>
                @endif
            </li>
        @endforeach

        @if ($paginator->hasMorePages())
            <li><a class="next" href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-angle-double-right"></i></a>
            </li>
        @else
            <li><span class="next disabled"><i class="fa fa-angle-double-right"></i></span></li>
        @endif
    </ul>
</div>
