@extends('backendtemplate')
@section('contend')
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><i class="fas fa-user-graduate"></i> Student Edit Form
		</h1>
	</div>
	<div class="container">
		<form action="{{route('student.update',$student->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<input type="hidden" name="user_id" value="{{$student->user_id}}">
			<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputName" name="name" value="{{$student->user->name}}">
          <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
      </div>
      <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-5">
          <input type="email" class="form-control" id="inputEmail" name="email" value="{{$student->user->email}}">
          <span class="text-danger">{{ $errors->first('email') }}</span>
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
              <img src="{{asset($student->photo)}}" width="200px" height="150px" class="mt-3">
              <input type="hidden" name="oldphoto" value="{{$student->photo}}">
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <input type="file" id="inputPhoto" name="photo" class="d-block mt-3">

            </div>

          </div>
          <span class="text-danger">{{ $errors->first('photo') }}</span>


        </div>
      </div>

      <div class="form-group row {{ $errors->has('address') ? 'has-error' : '' }}">
        <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-5">
          <textarea id="inputAddress" class="form-control" name="address">{{$student->address}}</textarea>
          <span class="text-danger">{{ $errors->first('address') }}</span>
        </div>
      </div>


      <div class="form-group row {{ $errors->has('dob') ? 'has-error' : '' }}">
        <label for="dateob" class="col-sm-2 col-form-label">Date Of Birth</label>
        <div class="col-sm-5">
          <input type="date" class="form-control" id="dateob" name="dob" value="{{$student->dob}}"> 
          <span class="text-danger">{{ $errors->first('dob') }}</span>
        </div>
      </div>
      <div class="form-group row {{ $errors->has('fname') ? 'has-error' : '' }}">
        <label for="inputFather" class="col-sm-2 col-form-label">Father Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputFather" name="fname" value="{{$student->fname}}" >
          <span class="text-danger">{{ $errors->first('fname') }}</span>
        </div>
      </div>
      <div class="form-group row {{ $errors->has('father_nrc') ? 'has-error' : '' }}">
        <label for="inputFathernrc" class="col-sm-2 col-form-label">Father NRC</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputFathernrc" name="father_nrc" value="{{$student->father_nrc}}">
          <span class="text-danger">{{ $errors->first('father_nrc') }}</span>
        </div>
      </div>
         {{--  <div class="form-group row {{ $errors->has('payment') ? 'has-error' : '' }}">
            <label for="inputPayment" class="col-sm-2 col-form-label">Payment</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="inputDiscount" name="payment" value="100000">
              <span class="text-danger">{{ $errors->first('payment') }}</span>
            </div>
          </div> --}}
          <div class="form-group row {{ $errors->has('academic') ? 'has-error' : '' }}">
            <label for="inputAcademic" class="col-sm-2 col-form-label">Academic</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputAcademic" name="academic">
                <optgroup label="Choose Academic">
                	@foreach($academics as $row)
                 <option value="{{$row->id}}" @if($student->academic_id == $row->id){{'selected'}} @endif>{{$row->name}}
                 </option>
                 @endforeach
               </optgroup>
             </select>
             <span class="text-danger">{{ $errors->first('academic') }}</span>
           </div>
         </div>
         <div class="form-group row {{ $errors->has('grade') ? 'has-error' : '' }}">
          <label for="inputGrade" class="col-sm-2 col-form-label">Grade</label>
          <div class="col-sm-5">
            <select class="form-control form-control-md" id="inputGrade" name="grade">
              <optgroup label="Choose Grde">
               @foreach($grades as $row)
               <option value="{{$row->id}}" @if($student->class->grade_id == $row->id){{'selected'}} @endif>{{$row->name}}
               </option>
               @endforeach
             </optgroup>
           </select>
           <span class="text-danger">{{ $errors->first('grade') }}</span>
         </div>
       </div>



       <div class="form-group row {{ $errors->has('class') ? 'has-error' : '' }}">
        <label for="inputClass" class="col-sm-2 col-form-label">Class</label>
        <div class="col-sm-5">
          <select class="form-control form-control-md" id="inputClass" name="class">
            <optgroup label="Choose Class">
              @foreach($classes as $row)
              <option value="{{$row->id}}" @if($student->class_id == $row->id){{'selected'}} @endif>{{$row->name}}
              </option>
              @endforeach
            </optgroup>
          </select>
          <span class="text-danger">{{ $errors->first('class') }}</span>
        </div>
      </div>


      <div class="form-group row">
       <div >
         <input type="submit" class="btn btn-success form-control" id="submit" value="Update" name="btnsubmit">
       </div>
       <div class="col-3">
        <a href="{{route('student.index')}}" class="btn btn-success btn-block float-right"> 
          <i class="fas fa-backward pr-2"></i>  Back 
        </a>
      </div>
    </div>
    </form>
  </div>
</div>
@endsection