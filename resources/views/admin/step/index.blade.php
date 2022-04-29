@extends('admin.includes.main')
@section('title')All Steps -  {{ config('app.name', 'Laravel') }} @endsection
@section('content')

    <section class="content">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-7">
                            <a href="{{route('steps.create')}}" class="btn btn-success btn-sm">Add Step</a>
                            
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    @include('admin.includes.message')
                    <table class="table table-striped projects" id="myTable">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th width="10%">Icon</th>
                                <th width="20%"> Title </th>
                                <th width="40%">Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($steps)>0)
                                
                                @foreach ($steps as $step)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td>
                                        @if (!empty($step->icon))
                                            @if(file_exists('uploads/steps/'.$step->icon))
                                                <img class="svg-color img-fluid W-100" src="{{asset('uploads/steps/'.$step->icon)}}" alt="category-image"> 
                                            @else
                                                <img class="svg-color img-fluid W-100" src="{{asset('placeholder.jpg')}}" alt="category-image"> 
                                            @endif
                                        @else
                                            <img class="svg-color img-fluid W-100" src="{{asset('placeholder.jpg')}}" alt="category-image"> 
                                        @endif
                                    </td>
                                    <td> {{$step->title}} </td>
                                    <td>
                                        <p>{{$step->text}}</p>
                                        
                                    </td>
                                    <form action="{{route('steps.destroy',$step->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <td class="project-actions">
                                            <a class="btn btn-info btn-sm" href="{{route('steps.edit',$step->id)}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <button class="btn btn-danger btn-sm" type="submit">
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
                {{-- {{ $categories->links() }} --}}
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
