<ul>
    @foreach($childs as $child)
        <li>
            <a id="{{ $child->id }}">{{ $child->title }}</a>
            @if(count($child->childs))
                @include('page_admin.category.tre',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>