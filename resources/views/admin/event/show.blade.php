@extends('admin.includes.main')

@section('title'){{$event->title}} -  {{ config('app.name', 'Laravel') }} @endsection
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{$event->title}}</h3>
                            <a href="{{route('events.index')}}" class="btn btn-success btn-sm float-right">View All Events</a>
                        </div>
                        <div class="card-body">
                            @if(is_array(json_decode($event->image)))
                                @foreach (json_decode($event->image) as $key => $photo)
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="img-upload-preview">
                                            <img class="card-img-top" src="{{asset('uploads/events/'.$photo)}}" alt="{{$event->title}}">
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            
                            <div class="card-body">
                                <p class="font-weight-bold">{{$event->date}}</p>
                                <p class="font-weight-bold">{{$event->location}}</p>
                                <p>{!! $event->description !!}</p>
                            </div>

                        </div> 
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection


