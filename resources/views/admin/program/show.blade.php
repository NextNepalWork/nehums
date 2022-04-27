@extends('admin.includes.main')

@section('title'){{$program->title}} -  {{ config('app.name', 'Laravel') }} @endsection
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{$program->title}}</h3>
                            <a href="{{route('programs.index')}}" class="btn btn-success btn-sm float-right">View All Programs</a>
                        </div>
                        <div class="card-body">
                            <img class="card-img-top" src="{{asset('uploads/programs/'.$program->image)}}" alt="{{$program->title}}">
                            <div class="card-body">
                                <p>{!! $program->description !!}</p>
                            </div>

                        </div> 
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection


