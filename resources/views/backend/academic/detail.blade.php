@extends('backendtemplate')

@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row mb-5">
    <div class="col-md-12">
      <h1 class="h3 mb-0 text-gray-800 d-inline-block"><i class="fas fa-calendar"></i> Academic Detail </h1>
    </div>
  </div>

<div class="card border-success mb-3" style="max-width: 30rem;">
  

        <p>{{$classes->name}}</p>
  
</div>
<div class="col-3">
            <a href="{{route('class.index')}}" class="btn btn-success btn-block float-right"> 
                    <i class="fas fa-backward pr-2"></i>  Back 
                  </a>
          </div>
</div>
@endsection