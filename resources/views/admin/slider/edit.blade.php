@extends('admin.includes.main')
@section('title')Edit Slider -  {{ config('app.name', 'Laravel') }} @endsection
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Slider</h3>
                            <a href="{{route('sliders.index')}}" class="btn btn-success btn-sm float-right">View Slider</a>
                        </div>
                        <div class="col-md-12 p-0">
                            @include('admin.includes.message')
                        </div>
                        <div class="card-body">
                            <form action="{{route('sliders.update',$slider->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Link</label>
                                            <input type="text" class="form-control" name="link" value="{{old('link',$slider->link)}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Slider Text</label>
                                            <input type="text" class="form-control" name="title" value="{{old('title',$slider->title)}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-label">Status</label><br>
                                        <input type="radio" name="status" value="1" @if(old('status',$slider->status) == '1') checked @endif> Show
                                        <input type="radio" name="status" value="0" @if(old('status',$slider->status) == '0') checked @endif> Hide
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
                                        <img id="preview-image-before-upload"  style="max-height:150px;" src="{{asset('uploads/sliders/'.$slider->image)}}">
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
@endsection
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
    // CKEDITOR.replace('ckeditor', {
    //     filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
    //     filebrowserUploadMethod: 'form'
    // });
</script>
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

