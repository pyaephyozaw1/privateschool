@extends('backendtemplate')
@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> <i class="fas fa-book"></i> Subject Edit Form
    </h1>
  </div>
  <div class="container">
    <form action="{{route('subject.update',$subject->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      
      <div class="form-group row {{ $errors->has('sname') ? 'has-error' : '' }}">
        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputName" name="sname" value="{{$subject->name}}">
          <span class="text-danger">{{ $errors->first('sname') }}</span>
        </div>
      </div>
      

        
        <div class="form-group row">
          <div >
            <input type="submit" class="btn btn-success form-control" id="submit" value="Update" name="btnsubmit">
          </div>
          <div class="col-3">
        <a href="{{route('subject.index')}}" class="btn btn-success btn-block float-right"> 
          <i class="fas fa-backward pr-2"></i>  Back 
        </a>
      </div>
        </div>
      </form>
        </div>
    </div>
  @endsection