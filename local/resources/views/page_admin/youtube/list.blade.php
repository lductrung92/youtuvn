@extends('page_admin.base.base')
@section('title', 'Danh sách video')
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
            <h5 class="panel-title">Danh sách video</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
            <tr>
                <th>Danh mục</th>
                <th>Tiêu đề</th>
                <th>Tổng lượt xem</th>
                <th>Like</th>
                <th>DisLike</th>
                <th>Published</th>
                <th>Tình trạng</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($videos as $video)
            <tr>
                <td>{{ $video->category->title }}</td>
                <td><a href="{{ asset('/') . $video->category->alias }}/{{ $video->alias }}.html">{{ $video->title }}</a></td>
                <td>{{ $video->viewCount }}</td>
                <td>{{ $video->likeCount }}</td>
                <td>{{ $video->dislikeCount }}</td>
                <td>{{ date('d-m-Y', strtotime($video->created_at)) }}</td>
                <td>
                    @if($video->status == 1)
                        <span class="label label-success">Actice</span>
                    @else
                        <span class="label label-danger">Pause</span>
                    @endif
                </td>
                <td class="text-center">
                    <ul class="icons-list">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="administrator/youtube/update/{{ $video->id }}"><span class="glyphicon glyphicon-pencil"> Edit</span> </a></li>
                                <li><a href="administrator/youtube/delete/{{ $video->id }}"><span class="glyphicon glyphicon-trash"> Delete</span></a></li>
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