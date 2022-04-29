@extends('admin.includes.main')
@section('title')Messages -  {{ config('app.name', 'Laravel') }} @endsection
@section('content')

    <section class="content">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-body p-0">
                    <table class="table table-striped projects" id="myTable">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($messages)>0)
                                @foreach ($messages as $message)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    
                                    <td> {{$message->name}} </td>
                                    
                                    <td>{{$message->email}}</td>
                                    <td>
                                        {{$message->phone}}
                                    </td>
                                    <td>{{$message->subject}}</td>
                                    
                                    <form action="{{Route::is('messages.index') ? route('messages.destroy',$message->id) : Route::is('job.index') ? route('job.destroy',$message->id) : route('volunteer.destroy',$message->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <td class="project-actions">
                                            <a class="btn btn-primary btn-sm" href="{{Route::is('messages.index') ? route('messages.show',$message->id) : Route::is('job.index') ? route('job.show',$message->id) : route('volunteer.show',$message->id)}}
                                            ">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a>

                                            <button class="btn btn-danger btn-sm show_confirm" type="submit" data-toggle="tooltip" title='Delete'>
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </button>
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