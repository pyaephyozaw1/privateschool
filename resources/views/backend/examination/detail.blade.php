@extends('backendtemplate')

@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row mb-5">
    <div class="col-md-12">
      <h1 class="h3 mb-0 text-gray-800 d-inline-block"> <i class="fas fa-book-open"></i>Examination Detail </h1>
    </div>
  </div>

<div class="card border-success mb-3" style="max-width: 30rem;">
  <div class="card-header">{{$student->user->name}}</div>
  <div class="card-body ">
    

        <p>Exam Name : {{$examination->name}}</p>
        <p>Exam Month : {{$examination->exam_month}} </p>
        <p>Exam Date:{{$examination->exam_date}}</p>
        <p>Start Time:{{$examination->starttime}}</p>
        <p>End Time:{{$examination->endtime}}</p>
        <p>Subject:{{$examination->subject->name}}</p>
        <p>Grade:{{$examination->grade->name}}</p>
        <p>Academic Year:{{$examination->academic->name}}</p>
  <div class="col-3">
            <a href="{{route('examination.index')}}" class="btn btn-success btn-block float-right"> 
                    <i class="fas fa-backward pr-2"></i>  Back 
                  </a>
          </div>
</div>
</div>
@endsection