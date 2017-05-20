@foreach($childs as $child)
    <option value="{{ $child->id }}" @if(isset($cate->parent) && $child->id == $cate->parent->id) selected @endif)>{{ $child->title }}</option>
    @if(count($child->childs))
        @include('page_admin.category.cate_childs',['childs' => $child->childs])
    @endif
@endforeach