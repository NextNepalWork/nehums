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
                    @can('role-create')
                        <a href="{{route('gallery.create')}}" class="btn btn-success btn-sm float-right">Add</a>
                    @endcan
                </div>
                <div class="card-body p-0">
                    <div class="tab-base">

                        <!--Nav Tabs-->
                        <ul class="nav nav-tabs">
                            <li class="active m-3">
                                <a data-toggle="tab" href="#demo-lft-tab-1" aria-expanded="true">{{ __('Photos') }}</a>
                            </li>
                            <li class="m-3">
                                <a data-toggle="tab" href="#demo-lft-tab-2" aria-expanded="false">{{ __('Videos') }}</a>
                            </li>
                        </ul>
                
                        <!--Tabs Content-->
                        <div class="tab-content">
                            <div id="demo-lft-tab-1" class="tab-pane fade active in show">
                
                                <div class="panel mt-2">
                                    
                                    <div class="panel-body d-flex">
                                        @php
                                            $photos=\App\Models\Photo::all();
                                        @endphp
                                        @foreach ($photos as $photo)
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="img-upload-preview">
                                                <a href="{{ asset('uploads/gallery/photos/'.$photo->photos) }}" target="_blank">
                                                    <img loading="lazy"  src="{{ asset('uploads/gallery/photos/'.$photo->photos) }}" alt="" class="img-fluid">
                                                </a>
                                                <form action="{{route('delete.photo',$photo->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger close-btn remove-files" type="submit" title='Delete'><i class="fa fa-times"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div id="demo-lft-tab-2" class="tab-pane fade">
                                <div class="panel mt-2">
                                    <div class="panel-body d-flex">
                                        @php
                                            $videos=\App\Models\Video::all();
                                        @endphp
                                        @foreach ($videos as $video)
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="img-upload-preview">
                                                <a href="{{ asset('uploads/gallery/videos/'.$video->videos) }}" target="_blank">
                                                <video loop autoplay muted style="width: 100%;">
                                                    <source src="{{asset('uploads/gallery/videos/'.$video->videos)}}" >
                                                </video>
                                                </a>
                                                <form action="{{route('delete.video',$video->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger close-btn remove-files" type="submit" title='Delete'><i class="fa fa-times"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        @endforeach
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