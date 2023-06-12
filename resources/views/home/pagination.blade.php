@if ($paginator->hasPages())
    <div class="pagination-container m-3">
        <ul class="pagination justify-content-center">

        @if ($paginator->onFirstPage())
        <li class="page-item next">
        <a href="" class="page-link" rel="prev" aria-label="previous">‹&nbsp;Prev</a>
        </li>
            

        @else
        <li class="page-item next">

        <a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev" aria-label="previous">‹&nbsp;Prev</a>
        </li>  
            
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled" style="margin: 2px;">
                    <a class="page-link" href="javascript:;" style="color: white; background: #e66d6d; border: none;">{{ $element }}</a>
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" style="margin: 2px;">
                            <a class="page-link" href="javascript:;" style="color: white; background: #e66d6d; border: none;">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item" style="margin: 2px;">
                            <a class="page-link" href="{{ $url }}" style="color: black; background: #dee1e6; border: none;">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            
            <li class="page-item next">
                <a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next" aria-label="next">Next&nbsp;›</a>
            </li>
        @else
           
            <li class="page-item next">
                <a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next" aria-label="next">Next&nbsp;›</a>
            </li>
        
        @endif

    </ul>
@endif
