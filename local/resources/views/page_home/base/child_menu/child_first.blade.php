@foreach($childs as $child)
    @if(count($child->childs))
        <li id="menu-item-{{ $child->id }}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-{{ $child->id }}"><a href="{{ $child->alias }}.html">{{ $child->title }}</a>
            <ul class="sub-menu">
                @include('page_home.base.child_menu.child_secondary', ['childs' => $child->childs])
            </ul>
        </li>
    @else
        <li id="menu-item-{{ $child->id }}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-{{ $child->id }}">
            <a href="{{ $child->alias }}.html">{{ $child->title }}</a>
        </li>
    @endif
@endforeach