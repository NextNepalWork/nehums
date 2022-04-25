@extends('admin.includes.main')

@section('title'){{$media->title}} -  {{ config('app.name', 'Laravel') }} @endsection
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{$media->title}}</h3>
                            <a href="{{route('medias.index')}}" class="btn btn-success btn-sm float-right">View All Media Coverage</a>
                        </div>
                        <div class="card-body">
                            <img class="card-img-top" src="{{asset('uploads/medias/'.$media->image)}}" alt="{{$media->title}}">
                            
                            <div class="card-body">
                                <p class="font-weight-bold">{{$media->date}}</p>
                                <p class="font-weight-bold">{{$media->location}}</p>
                                <p>{!! $media->description !!}</p>
                            </div>

                        </div> 
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection


