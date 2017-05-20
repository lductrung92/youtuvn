@extends('page_admin.base.base')
@section('title', 'Danh sách loại tin')
@section('js_plugin')
    <script type="text/javascript" src="lib_admin/assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/forms/selects/select2.min.js"></script>
@endsection
@section('js_custom')
    <script type="text/javascript" src="lib_admin/assets/js/pages/datatables_advanced.js"></script>
@endsection
@section('content')
    <!-- Highlighting rows and columns -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Danh sách danh mục</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
            <tr>
                <th>Tên danh mục</th>
                <th>Link</th>
                <th>Keyword</th>
                <th>Published</th>
                <th>Tình trạng</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr>
                <td>@if($category->pid > 0) <a href="{{ asset('/') . $category->alias }}.html">{{ $category->title }}</a> @else {{ $category->title }} @endif</td>
                <td>{{ $category->alias }}</td>
                <td>{{ $category->keyword }}</td>
                <td>{{ date('d-m-Y', strtotime($category->created_at)) }}</td>
                <td><span class="label label-success">Active</span></td>
                <td class="text-center">
                    <ul class="icons-list">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="administrator/category/update/{{ $category->id }}"><span class="glyphicon glyphicon-pencil"> Edit</span> </a></li>
                                <li><a href="administrator/category/delete/{{ $category->id }}"><span class="glyphicon glyphicon-trash"> Delete</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <!-- /highlighting rows and columns -->
@endsection