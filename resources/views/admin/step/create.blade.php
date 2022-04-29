@extends('admin.includes.main')

@section('title')Add Step -  {{ config('app.name', 'Laravel') }} @endsection
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Step</h3>
                            <a href="{{route('steps.index')}}" class="btn btn-success btn-sm float-right">View Steps</a>
                        </div>
                        <div class="col-md-12 p-0">
                            @include('admin.includes.message')
                        </div>
                        <div class="card-body">
                            <form action="{{route('steps.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Icon</label>
                                            <input type="file" class="form-control" name="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title" value="{{old('title')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Description</label>
                                        <textarea name="text" class="form-control" rows="5">{{old('text')}}</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-sm float-right mt-3">Save</button> 
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection


