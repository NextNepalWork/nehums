@extends('admin.includes.main')

@section('title')Add Program -  {{ config('app.name', 'Laravel') }} @endsection
@section('content')

{{-- @php
    $a="lets help";
    dd(str_replace(' ','-',$a));
@endphp --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Program</h3>
                            <a href="{{route('programs.index')}}" class="btn btn-success btn-sm float-right">View Programs</a>
                        </div>
                        <div class="col-md-12 p-0">
                            @include('admin.includes.message')
                        </div>
                        <div class="card-body">
                            <form action="{{route('programs.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Title</label> <span class="text-danger"> * </span>
                                            <input type="text" class="form-control" name="title" value="{{old('title')}}">
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="slug">Slug</label><span class="text-danger"> * </span>
                                            <input type="text" class="form-control" name="slug" value="{{old('slug')}}">
                                        </div>
                                    </div> --}}
                                </div> 

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Description</label>
                                            <textarea name="description" class="form-control">{{old('description')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image">Image</label><br>
                                            <input type="file" name="image" id="image">
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">
                                        <img id="preview-image-before-upload"  style="max-height:150px;">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Status</label> <span class="text-danger"> * </span>
                                        <input type="radio" name="status" value="1" @if(old('status') == '1') checked @endif> Show
                                        <input type="radio" name="status" value="0" @if(old('status') == '0') checked @endif> Hide
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
{{-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> --}}

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
            
    $(document).ready(function (e) {
    
    
    $('#image').change(function(){
                
        let reader = new FileReader();
    
        reader.onload = (e) => { 
    
        $('#preview-image-before-upload').attr('src', e.target.result); 
        }
    
        reader.readAsDataURL(this.files[0]); 
    
    });
    
    });
    
</script>

