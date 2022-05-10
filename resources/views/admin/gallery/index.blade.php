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
                        <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                            Add Videos
                        </button>
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
                                        @if (!empty($gallery))
                                                @foreach ($gallery as $key => $video)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <div class="img-upload-preview">
                                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ explode('=', $video->link)[1] }}"></iframe>
                                                            
                                                            <form action="{{route('delete.video',$video->id)}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="btn btn-danger close-btn remove-files" type="submit" title='Delete'><i class="fa fa-times"></i></button>
                                                            </form>
                                                        </div>
                                                        <span class="font-weight-bold d-flex justify-content-center">{{$video->title}}</span>
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

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Video</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('upload_video')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label>URL:</label>
                    <input type="text" name="link" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
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