@extends('backendtemplate')

@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="row">
      <div class="col">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-chalkboard-teacher"></i>Teacher Register</h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="{{route('teacher.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputName" name="name">
              <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
              <input type="email" class="form-control" id="inputEmail" name="email">
              <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
          </div>

           <div class="form-group row {{ $errors->has('address') ? 'has-error' : '' }}">
              <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-5">
                <textarea id="inputAddress" class="form-control" name="address"></textarea>
                <span class="text-danger">{{ $errors->first('address') }}</span>
              </div>
            </div>

            <div class="form-group row {{ $errors->has('nrc') ? 'has-error' : '' }}">
            <label for="inputnrc" class="col-sm-2 col-form-label">NRC</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputnrc" name="nrc" >
              <span class="text-danger">{{ $errors->first('nrc') }}</span>
            </div>
          </div>

          <div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
            <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
            <div class="col-sm-5">
              <input type="file" id="inputPhoto" name="photo" class="d-block">
              <span class="text-danger">{{ $errors->first('photo') }}</span>
            </div>
          </div>
            
          

          <div class="form-group row {{ $errors->has('phoneno') ? 'has-error' : '' }}">
            <label for="inputPhone" class="col-sm-2 col-form-label">Phone NO</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputPhone" name="phoneno" >
              <span class="text-danger">{{ $errors->first('phoneno') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('salary') ? 'has-error' : '' }}">
            <label for="inputSalary" class="col-sm-2 col-form-label">Salary</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputSalary" name="salary" >
              <span class="text-danger">{{ $errors->first('salary') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('subject') ? 'has-error' : '' }}">
            <label for="inputTeacher" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md teasub" id="inputTeacher" name="subject">
                <optgroup label="Choose Subject">
                  @foreach($subjects as $subject)
                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-5">
              <input type="submit" class="btn btn-success" name="btnsubmit" value="Register">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection