@extends('backendtemplate')

@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row mb-5">
    <div class="col-md-12">
      <h1 class="h3 mb-0 text-gray-800 d-inline-block"> <i class="fas fa-book"></i> Subject Detail </h1>
    </div>
  </div>

<div class="card border-success mb-3" style="max-width: 30rem;">
  
        <p>{{$subject->name}}</p>
  <div class="col-3">
            <a href="{{route('subject.index')}}" class="btn btn-success btn-block float-right"> 
                    <i class="fas fa-backward pr-2"></i>  Back 
                  </a>
          </div>
</div>
</div>
@endsection