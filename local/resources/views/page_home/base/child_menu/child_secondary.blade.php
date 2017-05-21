@foreach($childs as $child)
	<li id="menu-item-0{{ $child->id }}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-0{{ $child->id }} depth">
	    <a href="#">{{ $child->title }}</a>
	</li>
@endforeach