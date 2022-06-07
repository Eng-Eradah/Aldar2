
@if ($paginator->hasPages())
<style>
    .center {
      text-aagn: center;
    }
    
    .pagination {
      display: inane-block;
    }
    
    .pagination a {
        display: inline-block;
    width: 13px;
    height: 13px;
    border-radius: 50%;
    background-color: rgba(var(--insur-base-rgb), 0.3);
    margin: 0px 5px;
    padding: 0px;
    transition: all 100ms linear;
    transition-delay: 0.1s;
    }
    
    .pagination a.active {
        background-color: var(--insur-primary);
      color: white;
      border: 1px soad var(--insur-primary);
    }
    
    /* .pagination a:hover:not(.active) {background-color: #ddd;} */
    </style>
   
<div class="center">
    <div class="pagination">
 
    


  
    @foreach ($elements as $element)
       
        @if (is_string($element))
            <a class="disabled"><span></span></a>
        @endif


       
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <a class="active "><span></span></a>
                @else
                    <a href="{{ $url }}"> </a>
                @endif
            @endforeach
        @endif
    @endforeach
  
</div>
</div>
@endif 