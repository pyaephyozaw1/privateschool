@extends('backendtemplate')

@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="row">
      <div class="col">
        <h1 class="h3 mb-0 text-gray-800"> <i class="fas fa-book-open"></i>Add new Examination </h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="{{route('examination.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row {{ $errors->has('ename') ? 'has-error' : '' }}">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputName" name="ename">
              <span class="text-danger">{{ $errors->first('ename') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('result') ? 'has-error' : '' }}">
            <label for="exam_month" class="col-sm-2 col-form-label">Exam-Month</label>
            <div class="col-sm-5">
              <input type="month" class="form-control" id="exam_month" name="exam_month">
              <span class="text-danger">{{ $errors->first('exam_month') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('exam_date') ? 'has-error' : '' }}">
            <label for="exam_date" class="col-sm-2 col-form-label">Exam Date</label>
            <div class="col-sm-5">
              <input type="date" class="form-control" id="exam_date" name="exam_date" value="0">
              <span class="text-danger">{{ $errors->first('exam_date') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('starttime') ? 'has-error' : '' }}">
            <label for="inputStarttime" class="col-sm-2 col-form-label">StartTime</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputStarttime" name="starttime">
              <span class="text-danger">{{ $errors->first('starttime') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('endtime') ? 'has-error' : '' }}">
            <label for="inputEndtime" class="col-sm-2 col-form-label">EndTime</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputEndtime" name="endtime">
              <span class="text-danger">{{ $errors->first('endtime') }}</span>
            </div>
          </div>     
          <div class="form-group row {{ $errors->has('subject') ? 'has-error' : '' }}">
            <label for="inputSubject" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputSubject" name="subject">
                <optgroup label="Choose Subject">
                  @foreach($subjects as $subject)
                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('subject') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('grade') ? 'has-error' : '' }}">
            <label for="inputGrade" class="col-sm-2 col-form-label">Grade</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md grade_name"  id="inputGrade year" name="grade">
                <optgroup label="Choose Grade" class="grade_option">
                  @foreach($grades as $grade)
                    <option data-grade="{{$grade->name}}"  value="{{$grade->id}}">{{$grade->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('grade') }}</span>
            </div>
          </div>
             <div class="form-group row {{ $errors->has('academic') ? 'has-error' : '' }}">
            <label for="inputAcademic" class="col-sm-2 col-form-label">Academic</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputAcademic" name="academic">
                <optgroup label="Choose Academic">
                  @foreach($academics as $academic)
                    <option value="{{$academic->id}}">{{$academic->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('academic') }}</span>
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