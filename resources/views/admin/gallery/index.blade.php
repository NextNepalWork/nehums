@extends('admin.includes.main')
@section('title')Gallery -  {{ config('app.name', 'Laravel') }} @endsection
<style>
    a.active{
        background: black;
        padding:5px;
    }
</style>
@section('content')

    <section class="content">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @if (Route::is('photo.index'))
                        <a href="{{route('photo.create')}}" class="btn btn-success btn-sm float-right">Add Photos</a>
                    @elseif(Route::is('video.index'))
                        <a href="{{route('video.create')}}" class="btn btn-success btn-sm float-right">Add Videos</a>
                    @endif
                    
                   
                </div>
                <div class="card-body p-0">
                    <div class="tab-base">

                
                        <!--Tabs Content-->
                        <div class="tab-content">
                            <div id="demo-lft-tab-1" class="tab-pane fade active in show">
                
                                <div class="panel mt-2">
                                    
                                    <div class="panel-body row">
                                        @if (Route::is('photo.index'))
                                            @if (!empty($gallery->photos))  
                                            @foreach (json_decode($gallery->photos) as $key => $photo)
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    
                                                    <div class="img-upload-preview">
                                                        <a href="{{ asset('uploads/gallery/photos/'.$photo) }}" target="_blank">
                                                            <img loading="lazy" src="{{ asset('uploads/gallery/photos/'.$photo) }}" alt="" class="img-fluid">
                                                        </a>
                                                        <form action="{{route('delete.photo',$key)}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger close-btn remove-files" type="submit" title='Delete'><i class="fa fa-times"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            @endforeach
                                            @else
                                                <div class="col-md-4 col-sm-4 col-xs-6">No Photos Found</div>
                                            @endif
                                        @elseif(Route::is('video.index'))
                                        @if (!empty($gallery->videos))
                                                @foreach (json_decode($gallery->videos) as $key => $video)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <div class="img-upload-preview">
                                                            <a href="{{ asset('uploads/gallery/videos/'.$video) }}" target="_blank">
                                                            <video loop autoplay muted style="width: 100%;">
                                                                <source src="{{asset('uploads/gallery/videos/'.$video)}}" >
                                                            </video>
                                                            </a>
                                                            <form action="{{route('delete.video',$key)}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="btn btn-danger close-btn remove-files" type="submit" title='Delete'><i class="fa fa-times"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="col-md-4 col-sm-4 col-xs-6">No Videos Found</div>
                                            @endif  
                                        @endif
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

@section('scripts')


<script>
    $(document).ready(function(){
        //datatable
        $('#myTable').DataTable();
        
        
    });


</script>




@endsection