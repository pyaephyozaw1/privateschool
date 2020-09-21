@extends('backendtemplate')

@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row mb-5">
    <div class="col-md-12">
      <h1 class="h3 mb-0 text-gray-800 d-inline-block"><i class="fas fa-user-graduate"></i> Exam Result Detail Page</h1>
    </div>
  </div>



<div class="card border-success mb-3" style="max-width: 30rem;">
  <div class="card-header">{{$student->user->name}}</div>
  <div class="card-body ">
 
  
        <p>Exam Marks:{{$result->name}}</p>
        <p>Student Name : {{$result->student->name}}</p>
        <p>Exam Name : {{$result->dob}} </p>
  </div>
  <div class="col-3">
            <a href="{{route('student.index')}}" class="btn btn-success btn-block float-right"> 
                    <i class="fas fa-backward pr-2"></i>  Back 
                  </a>
          </div>
</div>
</div>
@endsection