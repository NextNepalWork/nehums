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
                            <h3 class="card-title">Add Photo and Video</h3>
                            <a href="{{route('gallery.index')}}" class="btn btn-success btn-sm float-right">View Gallery</a>
                        </div>
                        <div class="card-body pt-0">
                            <div class="tab-base">

                                <!--Nav Tabs-->
                                <ul class="nav nav-tabs">
                                    <li class="active m-3">
                                        <a data-toggle="tab" href="#demo-lft-tab-1" aria-expanded="true">{{ __('Photos') }}</a>
                                    </li>
                                    <li class=" m-3">
                                        <a data-toggle="tab" href="#demo-lft-tab-2" aria-expanded="false">{{ __('Videos') }}</a>
                                    </li>
                                </ul>
                        
                                <!--Tabs Content-->
                                <div class="tab-content">
                                    <div id="demo-lft-tab-1" class="tab-pane fade active in show">
                        
                                        <div class="panel">
                                            
                                            <div class="panel-body">
                                                <form action="{{route('upload_photo')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row mt-2">
                                                        <div class="col-md-12">
                                                            <div id="photos"></div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="demo-lft-tab-2" class="tab-pane fade">
                                        <div class="panel">
                                            <form action="{{route('upload_video')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <input type="file" name="video">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success mt-2">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
            
    $(document).ready(function (e) {
        $('.remove-files').on('click', function(){
            $(this).parents(".col-md-4").remove();
        });

        $("#photos").spartanMultiImagePicker({
                fieldName:        'photos',
                maxCount:         1,
                rowHeight:        '200px',
                groupClassName:   'col-md-4 col-sm-4 col-xs-6',
                maxFileSize:      '',
                dropFileLabel : "Drop Here",
                onExtensionErr : function(index, file){
                    console.log(index, file,  'extension err');
                    alert('Please only input png or jpg type file')
                },
                onSizeErr : function(index, file){
                    console.log(index, file,  'file size too big');
                    alert('File size too big');
                }
        });
    });
    
</script>

