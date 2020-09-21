@extends('backendtemplate')
@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-university"></i> Class Edit Form
    </h1>
  </div>
  <div class="container">
    <form action="{{route('class.update',$classes->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      
      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputName" name="name" value="{{$classes->name}}">
          <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
      </div>

       <div class="form-group row {{ $errors->has('grade') ? 'has-error' : '' }}">
            <label for="inputGrade" class="col-sm-2 col-form-label">Grade</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputGrade" name="grade">
                <optgroup label="Choose Grade">
                 @foreach($grades as $row)
                <option value="{{$row->id}}" @if($classes->grade_id == $row->id){{'selected'}} @endif>{{$row->name}}
                </option>
              @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('grade') }}</span>
            </div>
          </div>
        <div class="form-group row">
          <div >
            <input type="submit" class="btn btn-success form-control" id="submit" value="Update" name="btnsubmit">
          </div>
          <div class="col-3">
        <a href="{{route('class.index')}}" class="btn btn-success btn-block float-right"> 
          <i class="fas fa-backward pr-2"></i>  Back 
        </a>
      </div>
        </div>
      </form>
        </div>
    </div>
  @endsection