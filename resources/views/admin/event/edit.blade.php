@extends('admin.includes.main')
@section('title')Edit Event -  {{ config('app.name', 'Laravel') }} @endsection
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Event</h3>
                            <a href="{{route('events.index')}}" class="btn btn-success btn-sm float-right">View Event</a>
                        </div>
                        <div class="card-body">
                            <form action="{{route('events.update',$event->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Title</label> <span class="text-danger"> * </span>
                                            <input type="text" class="form-control" name="title" value="{{old('title',$event->title)}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Location</label>
                                            <input type="text" class="form-control" name="location" value="{{old('location',$event->location)}}">
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Date</label>
                                            <input type="date" class="form-control" name="date" value="{{old('date',$event->date)}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Thumbnail Image</label><br>
                                            <input type="file" name="thumbnail_img" id="thumb_image"><br>
                                            @if(!empty($event->thumbnail_img)) 
                                                @if (file_exists('uploads/events/'.$event->thumbnail_img))    
                                                    <img id="preview-thumb-image-before-upload"  style="max-height:150px;" src="{{asset('uploads/events/'.$event->thumbnail_img)}}">
                                                @else
                                                    <img src="{{asset('category/no-image.png')}}" alt="no-image" width="80px" height="80px" class="img-fluid"> 
                                                @endif
                                            @else
                                                <img src="{{asset('category/no-image.png')}}" alt="no-image" width="80px" height="80px" class="img-fluid"> 
                                            @endif
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Descriptions</label>
                                            <textarea class="form-control" name="description">{{old('description',$event->description)}}</textarea>
                                        </div>
                                    </div>

                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="image">Image</label><br>
                                            {{-- <input type="file" name="image" id="image"> --}}

                                            <div id="photos" class="row">
                                                @if(is_array(json_decode($event->image)))
                                                    @foreach (json_decode($event->image) as $key => $photo)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <div class="img-upload-preview">
                                                                <img loading="lazy"  src="{{ asset('uploads/events/'.$photo) }}" alt="" class="img-responsive" style="max-height:150px;">
                                                                <input type="hidden" name="previous_photos[]" value="{{ $photo }}">
                                                                <button type="button" class="btn btn-danger close-btn remove-files"><i class="fa fa-times"></i></button>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
            
    $(document).ready(function (e) {
        $("#photos").spartanMultiImagePicker({
            fieldName:        'image[]',
            maxCount:         10,
            rowHeight:        '200px',
            groupClassName:   'col-md-4 col-sm-4 col-xs-6',
            maxFileSize:      '',
            dropFileLabel : "Drop Here",
            onExtensionErr : function(index, file){
                console.log(index, file,  'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr : function(index, file){
                console.log(index, file,  'file size too big');
                alert('File size too big');
            }
        });

        $('.remove-files').on('click', function(){
            $(this).parents(".col-md-4").remove();
        });
        $('#thumb_image').change(function(){
                    
            let reader = new FileReader();
        
            reader.onload = (e) => { 
        
            $('#preview-thumb-image-before-upload').attr('src', e.target.result); 
            }
        
            reader.readAsDataURL(this.files[0]); 
        
        });
    
    });
    
</script>

