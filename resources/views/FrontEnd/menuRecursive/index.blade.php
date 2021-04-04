<div class="dropdown-menu">
    <ul>
        @foreach($data->childrenRecursive as $child)
            <li><a href="/FrontCategory/{{$child->id}}">{{$child->name}}</a>
                @if(count($child->childrenRecursive)>0)
                    @include('FrontEnd.menuRecursive.index',['data'=>$child])
                @endif
            </li>
        @endforeach
    </ul>
</div>
