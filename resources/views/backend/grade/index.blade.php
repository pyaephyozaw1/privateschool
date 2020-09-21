@extends('backendtemplate')
@section('contend')


  <div class=" mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-10">
            <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-marker"></i> 
    Grade  List
  </h1>
         
        </div>

        <div class="col-2">
          <a href="{{route('grade.create')}}" class="btn btn-success btn-block float-right"> 
            <i class="fa fa-plus"></i> Add New Grade 
          </a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered ml-3">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
            @foreach($grades as $grade)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$grade->name}}</td>             
             
              <td>
                 {{-- <a href="{{route('grade.show',$grade->id)}}" class="btn btn-primary"><i class="fas fa-info fa-2x"></i></a> --}}
                <a href="{{route('grade.edit',$grade->id)}}" class="btn btn-warning"><i class="fas fa-edit fa-1x"></i></a>
                            <form method="post" action="{{route('grade.destroy',$grade->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button  type="submit" class="btn btn-danger"><i class="fas fa-trash fa-1x"></i></button> 
                            </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
@endsection