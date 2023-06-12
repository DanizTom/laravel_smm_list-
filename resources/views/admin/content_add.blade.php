@extends('layouts.admin')

@section('title', 'Add Content')

@section('javascript')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

@endsection

@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2">Panel</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('admin_content_store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <label class="control-label mb-1">Title</label>
                                            <input name="title" type="text" class="form-control" value="" data-val="true">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label mb-1">panel api key</label>
                                            <input name="keywords" type="text" class="form-control" value="" data-val="true">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-1">panel api url</label>
                                            <input name="description" type="text" class="form-control" value="" data-val="true">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-1">Video Url</label>
                                            <input name="videourl" type="text" class="form-control" value="" data-val="true">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-1">panel url</label>
                                            <input  name="detail"  id="detail" type="text" class="form-control" value="" data-val="true">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-1">Image</label>
                                            <input name="image" type="file" class="form-control" value="" data-val="true">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-1">Slug</label>
                                            <input name="slug" type="text" class="form-control" value="" data-val="true">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-1">Status</label>
                                            <select name="status" id="select" class="form-control">
                                                <option value="False">False</option>
                                                <option value="True">True</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button id="add-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                <i class="fa fa-lg"></i>&nbsp;
                                                <span>Add a new Content</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
