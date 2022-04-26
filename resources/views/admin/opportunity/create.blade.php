@extends('admin.includes.main')
@section('title')Add Opportunity -  {{ config('app.name', 'Laravel') }} @endsection
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Opportunity</h3>
                            <a href="{{route('opportunity.index')}}" class="btn btn-success btn-sm float-right">View Opportunity</a>
                        </div>
                        <div class="card-body">
                            <form action="{{route('opportunity.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Title</label> <span class="text-danger"> * </span>
                                            <input type="text" class="form-control" name="title" value="{{old('title')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Type</label><span class="text-danger"> * </span>
                                            <input type="text" class="form-control" name="type" value="{{old('type')}}" required>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Content</label><br>
                                            <textarea name="description">{{old('description')}}</textarea>
                                        </div>
                                    </div>
                                </div> 
                                <button type="submit" class="btn btn-success btn-sm float-right">Save</button> 
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    CKEDITOR.replace('description', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection


