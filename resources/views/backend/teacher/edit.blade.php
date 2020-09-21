@extends('backendtemplate')
@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-chalkboard-teacher"></i>Teacher Edit Form
    </h1>
  </div>
  <div class="container">
    <form action="{{route('teacher.update',$teacher->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <input type="hidden" name="user_id" value="{{$teacher->user_id}}">
      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputName" name="name" value="{{$teacher->user->name}}">
          <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
      </div>
      <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-5">
          <input type="email" class="form-control" id="inputEmail" name="email" value="{{$teacher->user->email}}">
          <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>
      </div>
      <div class="form-group row {{ $errors->has('password') ? 'has-error' : '' }}">
        <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-5">
          <input type="password" class="form-control" id="inputEmail" name="password" value="{{$teacher->user->password}}">
          <span class="text-danger">{{ $errors->first('password') }}</span>
        </div>
      </div>

      <div class="form-group row {{ $errors->has('address') ? 'has-error' : '' }}">
        <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-5">
          <textarea id="inputAddress" class="form-control" name="address">{{$teacher->address}}</textarea>
          <span class="text-danger">{{ $errors->first('address') }}</span>
        </div>
      </div>

      <div class="form-group row {{ $errors->has('nrc') ? 'has-error' : '' }}">
        <label for="inputnrc" class="col-sm-2 col-form-label">NRC</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputnrc" name="nrc" value="{{$teacher->nrc}}">
          <span class="text-danger">{{ $errors->first('nrc') }}</span>
        </div>
      </div>


      <div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
        <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
        <div class="col-sm-5">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Photo</a>
              <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Photo</a>

            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <img src="{{asset($teacher->photo)}}" width="200px" height="150px" class="mt-3">
              <input type="hidden" name="oldphoto" value="{{$teacher->photo}}">
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <input type="file" id="inputPhoto" name="photo" class="d-block mt-3">

            </div>

          </div>
          <span class="text-danger">{{ $errors->first('photo') }}</span>


        </div>
      </div>    
      

      <div class="form-group row {{ $errors->has('phoneno') ? 'has-error' : '' }}">
        <label for="inputPhone" class="col-sm-2 col-form-label">Phone NO</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputPhone" name="phoneno" value="{{$teacher->phoneno}}" >
          <span class="text-danger">{{ $errors->first('phoneno') }}</span>
        </div>
      </div>
      <div class="form-group row {{ $errors->has('salary') ? 'has-error' : '' }}">
        <label for="inputSalary" class="col-sm-2 col-form-label">Salary</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputSalary" name="salary" value="{{$teacher->salary}}" >
          <span class="text-danger">{{ $errors->first('salary') }}</span>
        </div>
      </div>


      <div class="form-group row">
        <div >
          <input type="submit" class="btn btn-success form-control" id="submit" value="Update" name="btnsubmit">
        </div>
        <div class="col-3">
          <a href="{{route('teacher.index')}}" class="btn btn-success btn-block float-right"> 
            <i class="fas fa-backward pr-2"></i>  Back 
          </a>
        </div>
      </div>
      </form>
    </div>

</div>
@endsection