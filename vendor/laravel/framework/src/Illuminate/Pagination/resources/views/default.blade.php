@if ($paginator->hasPages())
    <div class="pages" id="pages">
        {{--此处的分页模版进行修改过，default_bak是原文档的备份--}}
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            {{--<li class="disabled"><span>&laquo;</span></li>--}}
            <a>&laquo;</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                {{--<li class="disabled"><span>{{ $element }}</span></li>--}}
                <span>{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        {{--<li class="active"><span>{{ $page }}</span></li>--}}
                        <span>{{ $page }}</span>
                    @else
                        {{--<li><a href="{{ $url }}">{{ $page }}</a></li>--}}
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            {{--<li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>--}}
            <a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
        @else
            {{--<li class="disabled"><span>&raquo;</span></li>--}}
            <a>&raquo;</a>
        @endif
    </div>
@endif
