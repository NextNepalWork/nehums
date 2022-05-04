@extends('admin.includes.main')
@section('title')Add Photo and Video -  {{ config('app.name', 'Laravel') }} @endsection
<style>
    a.active{
        background: black;
        padding:5px;
    }
</style>
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            @if (Route::is('photo.create'))
                                <h3 class="card-title">Add Photos</h3>
                                <a href="{{route('photo.index')}}" class="btn btn-success btn-sm float-right">View Photo Gallery</a>
                            @elseif(Route::is('video.create'))
                                <h3 class="card-title">Add Videos</h3>
                                <a href="{{route('video.index')}}" class="btn btn-success btn-sm float-right">View Video Gallery</a>
                            @endif
                        </div>
                        <div class="card-body pt-0">
                            @include('admin.includes.message')
                                @if (Route::is('photo.create'))
                                    <div class="panel">
                                        <div class="panel-body">
                                            <form action="{{route('upload_photo')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <input type="file" name="photos[]" multiple>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success mt-2">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                @elseif(Route::is('video.create'))
                                    <div class="panel">
                                        <form action="{{route('upload_video')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <input type="file" name="videos[]" multiple>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success mt-2">Save</button>
                                        </form>
                                    </div>
                                @endif
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection


