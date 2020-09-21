@extends('backendtemplate')
@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> <i class="fas fa-table"></i> Timetable Edit Form
    </h1>
  </div>
  <div class="container">
    <form action="{{route('timetable.update',$timetable->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
   {{--    <input type="hidden" name="user_id" value="{{$teacher->user_id}}"> --}}
        <div class="form-group row {{ $errors->has('day') ? 'has-error' : '' }}">
            <label for="inputDay" class="col-sm-2 col-form-label">Day</label>
            <div class="col-sm-5">
               <input type="text" class="form-control" id="inputDay" name="day" value="{{$timetable->day}}">
              <span class="text-danger">{{ $errors->first('day') }}</span>
            </div>
          </div>
      <div class="form-group row {{ $errors->has('starttime') ? 'has-error' : '' }}">
            <label for="inputStarttime" class="col-sm-2 col-form-label">StartTime</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputStarttime" name="starttime" value="{{$timetable->starttime}}">
              <span class="text-danger">{{ $errors->first('starttime') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('endtime') ? 'has-error' : '' }}">
            <label for="inputEndtime" class="col-sm-2 col-form-label">EndTime</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputEndtime" name="endtime" value="{{$timetable->endtime}}">
              <span class="text-danger">{{ $errors->first('endtime') }}</span>
            </div>
          </div>


          <div class="form-group row {{ $errors->has('grade') ? 'has-error' : '' }}">
            <label for="inputGrade" class="col-sm-2 col-form-label">Grade</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputGrade" name="grade">
                <optgroup label="Choose Grde">
                 @foreach($grades as $row)
                <option value="{{$row->id}}" @if($timetable->class->grade_id == $row->id){{'selected'}} @endif>{{$row->name}}
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
                <option value="{{$row->id}}" @if($timetable->class_id == $row->id){{'selected'}} @endif>{{$row->name}}
                </option>
              @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('class') }}</span>
            </div>
          </div>
       


          
          <div class="form-group row {{ $errors->has('subject') ? 'has-error' : '' }}">
            <label for="inputSubject" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md subject" id="inputSubject" name="subject">
                <optgroup label="Choose Subject">
                   @foreach($subjects as $row)
                <option value="{{$row->id}}" @if($timetable->subject_id == $row->id){{'selected'}} @endif>{{$row->name}}
                </option>
              @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('subject') }}</span>
            </div>
          </div>


           <div class="form-group row {{ $errors->has('academic') ? 'has-error' : '' }}">
            <label for="inputAcademic" class="col-sm-2 col-form-label">Academic</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" id="inputAcademic" name="academic">
                <optgroup label="Choose Academic">
                   @foreach($academics as $row)
                <option value="{{$row->id}}" @if($timetable->academic_id == $row->id){{'selected'}} @endif>{{$row->name}}
                </option>
              @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('academic') }}</span>
            </div>
          </div>


          
          <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="inputTeacher" class="col-sm-2 col-form-label">Teacher</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md teasub" id="inputTeacher" name="name">
                <optgroup label="Choose Teacher">
                  @foreach($teachers as $row)
                <option value="{{$row->id}}" @if($timetable->teacher_id == $row->id){{'selected'}} @endif>{{$row->user->name}}
                </option>
              @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
          </div>

        <div class="form-group row">
          <div >
            <input type="submit" class="btn btn-success form-control" id="submit" value="Update" name="btnsubmit">
          </div>
          <div class="col-3">
        <a href="{{route('timetable.index')}}" class="btn btn-success btn-block float-right"> 
          <i class="fas fa-backward pr-2"></i>  Back 
        </a>
      </div>
        </div>
      </form>
        </div>
    </div>
 
  @endsection