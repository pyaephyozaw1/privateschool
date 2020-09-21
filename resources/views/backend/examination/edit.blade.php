@extends('backendtemplate')
@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> <i class="fas fa-book-open"></i>Examination Edit Form
    </h1>
  </div>
  <div class="container">
    <form action="{{route('examination.update',$examination->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      {{-- <input type="hidden" name="user_id" value="{{$teacher->user_id}}"> --}}
      <div class="form-group row {{ $errors->has('ename') ? 'has-error' : '' }}">
        <label for="ename" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="ename" name="ename" value="{{$examination->name}}">
          <span class="text-danger">{{ $errors->first('ename') }}</span>
        </div>
      </div>
      <div class="form-group row {{ $errors->has('exam_month') ? 'has-error' : '' }}">
        <label for="exam_month" class="col-sm-2 col-form-label">Exam Month</label>
        <div class="col-sm-5">
          <input type="month" class="form-control" id="exam_month" name="exam_month" value="{{$examination->exam_month}}">
          <span class="text-danger">{{ $errors->first('exam_month') }}</span>
        </div>
      </div>
      <div class="form-group row {{ $errors->has('exam_date') ? 'has-error' : '' }}">
        <label for="exam_date" class="col-sm-2 col-form-label">Exam Date</label>
        <div class="col-sm-5">
          <input type="date" class="form-control" id="exam_date" name="exam_date" value="{{$examination->exam_date}}">
          <span class="text-danger">{{ $errors->first('exam_date') }}</span>
        </div>
      </div>
      <div class="form-group row {{ $errors->has('starttime') ? 'has-error' : '' }}">
            <label for="inputStarttime" class="col-sm-2 col-form-label">StartTime</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputStarttime" name="starttime" value="{{$examination->start_time}}">
              <span class="text-danger">{{ $errors->first('starttime') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('endtime') ? 'has-error' : '' }}">
            <label for="inputEndtime" class="col-sm-2 col-form-label">EndTime</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputEndtime" name="endtime" value="{{$examination->end_time}}">
              <span class="text-danger">{{ $errors->first('endtime') }}</span>
            </div>
          </div>

      <div class="form-group row {{ $errors->has('subject') ? 'has-error' : '' }}">
            <label for="inputClass" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputClass" name="subject">
                <optgroup label="Choose Subjrct">
                    @foreach($subjects as $row)
                <option value="{{$row->id}}" @if($examination->subject_id == $row->id){{'selected'}} @endif>{{$row->name}}
                </option>
              @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('subject') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('grade') ? 'has-error' : '' }}">
            <label for="grade" class="col-sm-2 col-form-label">Grade</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="grade" name="grade">
                <optgroup label="Choose Subjrct">
                    @foreach($grades as $row)
                <option value="{{$row->id}}" @if($examination->grade_id == $row->id){{'selected'}} @endif>{{$row->name}}
                </option>
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
                  @foreach($academics as $row)
                <option value="{{$row->id}}" @if($examination->academic_id == $row->id){{'selected'}} @endif>{{$row->name}}
                </option>
              @endforeach
          </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('academic') }}</span>
            </div>
          </div>
       
        <div class="form-group row">
          <div >
            <input type="submit" class="btn btn-success form-control" id="submit" value="Update" name="btnsubmit">
          </div>
        </div>
      </form>
        </div>
    </div>
  </div>
  @endsection