
@extends('admin.includes.main')

@section('title'){{$message->name}} -  {{ config('app.name', 'Laravel') }} @endsection
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{$message->name}}</h3>
                            <a href="{{route('messages.index')}}" class="btn btn-success btn-sm float-right">View All Messages</a>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <p><span class="font-weight-bold">Name: </span>{{$message->name}}</p>
                                <p><span class="font-weight-bold">Email: </span>{{$message->email}}</p>
                                <p><span class="font-weight-bold">Phone: </span>{{$message->phone}}</p>
                                <p><span class="font-weight-bold">Subject: </span>{{$message->subject}}</p>
                                <p><span class="font-weight-bold">Message: </span>{!! $message->message !!}</p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection


