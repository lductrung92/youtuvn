@foreach($childs as $child)
    @if(count($child->childs))
        <li id="menu-item-0{{ $child->id }}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown-submenu menu-item-0{{ $child->id }} depth">
            <a href="#">{{ $child->title }}</a>
            <ul class="dropdown-menu">
                @include('page_home.base.child_menu.child_secondary', ['childs' => $child->childs])
            </ul>
        </li>
    @else
        <li id="menu-item-0{{ $child->id }}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-0{{ $child->id }} depth">
            <a href="#"> {{ $child->title }}</a>
        </li>
    @endif
@endforeach