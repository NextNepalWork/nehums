@extends('admin.includes.main')
@section('title')All Programs -  {{ config('app.name', 'Laravel') }} @endsection
@section('content')

    <section class="content">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-7">
                            <a href="{{route('programs.create')}}" class="btn btn-success btn-sm">Add Program</a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    @include('admin.includes.message')
                    <table class="table table-striped projects" id="myTable">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>Image</th>
                                <th> Title </th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($programs)>0)
                                
                                @foreach ($programs as $program)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td>
                                        @if(empty($program->image)) 
                                            <img src="{{asset('category/no-image.png')}}" alt="no-image" width="80px" height="80px" class="img-fluid"> 
                                        @else
                                            <img src="{{asset('uploads/programs/'.$program->image)}}" alt="{{$program->title}}" width="80px" height="80px" class="img-fluid">
                                        @endif
                                    </td>
                                    <td> {{$program->title}} </td>
                                    <td>
                                        <input type="checkbox" data-id="{{ $program->id }}" name="status" class="js-switch" {{ $program->status == 1 ? 'checked' : '' }}>
                                        
                                    </td>
                                    <form action="{{route('programs.destroy',$program->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <td class="project-actions">
                                            <a class="btn btn-primary btn-sm" href="{{route('programs.show',$program->id)}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a>
                                            @can('role-edit')
                                            <a class="btn btn-info btn-sm" href="{{route('programs.edit',$program->id)}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            @endcan
                                            @can('role-delete')
                                            <button class="btn btn-danger btn-sm" type="submit">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </button>
                                            @endcan
                                        </td>
                                    </form>

                                </tr>
                                
                                @endforeach
                            @else
                                <tr><td colspan="6"><i class="fa fa-exclamation-triangle"></i> {!! trans('No Data Found') !!}</td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                {{-- {{ $categories->links() }} --}}
            </div>
        </div>
        <script type="text/javascript">
            let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            elems.forEach(function(html) {
                let switchery = new Switchery(html,  { size: 'small' });
            });
        </script>

        </script>
    </section>
</div>
@endsection
@section('scripts')


<script>
    $(document).ready(function(){
        //datatable
        $('#myTable').DataTable();
        //category status
        $('.js-switch').change(function () {
            let program_status = $(this).prop('checked') === true ? 1 : 0;
            // console.log(status);
            let program_id = $(this).data('id');
            //   console.log(category_id);
    
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('program.update_status') }}',
                data: {'status': program_status, 'id': program_id},
                success: function (data) {
                    toastr.options.closeButton = true;
                    toastr.options.closeMethod = 'fadeOut';
                    toastr.options.closeDuration = 20;
                    toastr.success(data.message);
                }
            });
        });
    });


</script>




@endsection
