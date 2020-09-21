@extends('backendtemplate')

@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row mb-5">
    <div class="col-md-12">
      <h1 class="h3 mb-0 text-gray-800 d-inline-block"><i class="fas fa-user-graduate"></i> Student Register Detail Page</h1>
    </div>
  </div>

  {{-- <div class="card col-md-10 shadow offset-1">
  <div class="row">
    <div class="card-body">
      <div class="col-md-4">
       
        <img src="{{asset($student->photo)}}" class="img-fluid">
      </div>
      <div class="col-md-8">
        <p>{{$student->user->name}}</p>           
        <p>{{$student->user->email}}</p>

        <p>{{$student->address}}</p>
        <p>{{$student->dob}} </p>
        <p>{{$student->fname}} </p>
        <p>{{$student->father_nrc}}</p>
        <p>{{$student->academic->name}}</p>
        <p>{{$student->class->grade->name}}</p>
        <p>{{$student->class->name}}</p>
      </div>
</div>
</div>
</div> --}}



<div class="card border-success mb-3" style="max-width: 30rem;">
  <div class="card-header">{{$student->user->name}}</div>
  <div class="card-body ">
    
    <img src="{{asset($student->photo)}}" class="img-fluid">
 
  
    <p>Email:{{$student->user->email}}</p>

        <p>Address : {{$student->address}}</p>
        <p>DateOfBirth : {{$student->dob}} </p>
        <p>Father Name : {{$student->fname}} </p>
        <p>Father NRC : {{$student->father_nrc}}</p>
        <p>Academic Year :{{$student->academic->name}}</p>
        <p>Grade : {{$student->class->grade->name}}</p>
        <p>Class : {{$student->class->name}}</p>
  </div>
  <div class="col-3">
            <a href="{{route('student.index')}}" class="btn btn-success btn-block float-right"> 
                    <i class="fas fa-backward pr-2"></i>  Back 
                  </a>
          </div>
</div>
</div>
@endsection