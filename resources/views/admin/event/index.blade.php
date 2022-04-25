@extends('admin.includes.main')
@section('title')Events -  {{ config('app.name', 'Laravel') }} @endsection
@section('content')

    <section class="content">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @can('role-create')
                        <a href="{{route('events.create')}}" class="btn btn-success btn-sm float-right">Add Event</a>
                    @endcan
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects" id="myTable">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>Image</th>
                                <th> Title </th>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($events)>0)
                                @foreach ($events as $event)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td>
                                        @if(!empty($event->thumbnail_img)) 
                                            @if (file_exists('uploads/events/'.$event->thumbnail_img))    
                                                <img src="{{asset('uploads/events/'.$event->thumbnail_img)}}" alt="{{$event->title}}" width="80px" height="80px" class="img-fluid">
                                            @else
                                                <img src="{{asset('category/no-image.png')}}" alt="no-image" width="80px" height="80px" class="img-fluid"> 
                                            @endif
                                        @else
                                            <img src="{{asset('category/no-image.png')}}" alt="no-image" width="80px" height="80px" class="img-fluid"> 
                                        @endif
                                    </td>
                                    <td> {{$event->title}} </td>
                                    {{-- <td>{!! Str::limit($event->description, 200, $end='.......') !!}</td> --}}
                                    <td>{{$event->date}}</td>
                                    <td>{{$event->location}}</td>

                                    <form action="{{route('events.destroy',$event->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <td class="project-actions">
                                            <a class="btn btn-primary btn-sm" href="{{route('events.show',$event->id)}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a>
                                            @can('role-edit')
                                            <a class="btn btn-info btn-sm" href="{{route('events.edit',$event->id)}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            @endcan
                                            @can('role-delete')
                                            <button class="btn btn-danger btn-sm show_confirm" type="submit" data-toggle="tooltip" title='Delete'>
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

            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')


<script>
    $(document).ready(function(){
        //datatable
        $('#myTable').DataTable();
    });

</script>




@endsection