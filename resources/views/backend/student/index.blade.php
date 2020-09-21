@extends('backendtemplate')
@section('contend')

  <div class=" mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-10">
          <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-user-graduate"></i> 
    Student Register List
  </h1>
        </div>

        <div class="col-2">
          <a href="{{route('student.create')}}" class="btn btn-success btn-block float-right"> 
            <i class="fa fa-plus"></i> New Register 
          </a>
        </div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered ml-3">
          <thead class="thead-dark">
            <tr>
              <th>Id</th>
              <th>Name</th>
              
              <th>Photo</th>
              
              <th>Father Name</th>
              
              <th>Academic</th>
             <th>Grade</th>
              <th>Class</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
            @foreach($students as $student)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$student->user->name}}</td>
              
              <td> <img src="{{asset($student->photo)}}" width="120px" height="100px"></td>
              <td>{{$student->fname}} </td>
              <td>{{$student->academic->name}} </td>
               <td>{{$student->class->grade->name}}</td>
              <td>{{$student->class->name}}</td>
              <td>
                 <a href="{{route('student.show',$student->id)}}" class="btn btn-primary"><i class="fas fa-info fa-1x"></i></a>
                <a href="{{route('student.edit',$student->id)}}" class="btn btn-warning"><i class="fas fa-edit fa-1x"></i></a>
                            <form method="post" action="{{route('student.destroy',$student->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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