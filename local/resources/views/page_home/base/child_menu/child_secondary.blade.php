@foreach($childs as $child)
	<li id="menu-item-{{ $child->id }}" class="menu-item menu-item-type-post_type menu-item-object-page menu-{{ $child->id }} depth">
	    <a href="{{ $child->alias }}.html">{{ $child->title }}</a>
	</li>
@endforeach
