@extends('layouts.admin')

@section('title', 'Contents')

@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">SMM Panels</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i><a style="color:white;" href="{{ route('admin_content_add') }}">Add panel</a></button>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Panel Url</th>
                                    <th>Panel api url</th>
                                    <th>Api Key</th>
                                    <th>Image</th>
                                    <th>VIdeo Url</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($contentlist->sortBy('id') as $rs)
                                    <tr class="tr-shadow">
                                        <td>{{ $rs->id }}</td>
                                        <td>
                                            @if($rs->title)
                                                {{ $rs->title }}
                                            @endif                                        </td>
                                        <td>{{ $rs->detail }}</td>
                                        <td>
                                        @if($rs->description)
                                                {{ $rs->description }}
                                            @endif
                                        </td>
                                        <td>
                                            <span class="status--process">{{ $rs->keywords }}</span>
                                        </td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{ Storage::url($rs->image) }}" height="30" alt="" >
                                            @endif
                                        </td>
                                                                               
                                        <td>
                                            <span class="status--process">{{ $rs->video_url }}</span>
                                        </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="{{ route('admin_content_edit', ['id'=>$rs->id]) }}">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                </a>
                                                <span style="margin-right: 20px;"></span>
                                                <a href="{{ route('admin_content_delete', ['id'=>$rs->id]) }}" onclick="return confirm('You are deleting this content! Are you sure?')">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>© 2022 moon.rider.dev</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
@endsection
