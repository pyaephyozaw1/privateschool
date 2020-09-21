@extends('backendtemplate')

@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row mb-5">
    <div class="col-md-12">
      <h1 class="h3 mb-0 text-gray-800 d-inline-block"><i class="fas fa-chalkboard-teacher"></i>Teacher Detail </h1>
    </div>
  </div>

<div class="card border-success mb-3" style="max-width: 30rem;">
  <div class="card-header">{{$teacher->user->name}}</div>
  <div class="card-body ">
    
    <img src="{{asset($teacher->photo)}}" class="img-fluid">
 
  
        <p>Subject : {{$teacher->subject->name}}</p>
        <p>Email : {{$teacher->user->email}}</p>
        <p>Address : {{$teacher->address}}</p>
        <p>NRC : {{$teacher->nrc}} </p>
        <p>Phone No : {{$teacher->phoneno}}</p>
        <p>Salary :{{$teacher->salary}}</p>
  <div class="col-3">
            <a href="{{route('teacher.index')}}" class="btn btn-success btn-block float-right"> 
                    <i class="fas fa-backward pr-2"></i>  Back 
                  </a>
          </div>
</div>
</div>
@endsection