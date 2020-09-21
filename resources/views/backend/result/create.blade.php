@extends('backendtemplate')

@section('contend')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="row">
      <div class="col">
        <h1 class="h3 mb-0 text-gray-800"> <i class="fas fa-book-open"></i>Add New Result </h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="{{route('result.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="inputName" class="col-sm-2 col-form-label">Student Name</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" name="student_id">
                <optgroup label="Choose Student">
                 @foreach($students as $student)
                 <option value="{{$student->id}}">{{$student->user->name}}</option>
                 @endforeach
               </optgroup>
             </select>
             <span class="text-danger">{{ $errors->first('student') }}</span>
           </div>
         </div>
          <div class="form-group row {{ $errors->has('academic_id') ? 'has-error' : '' }}">
            <label for="inputName" class="col-sm-2 col-form-label">Academic</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md" name="academic_id">
                <optgroup label="Choose Student">
                 @foreach($academics as $academic)
                  <option value="{{$academic->id}}">{{$academic->name}}</option>
                 @endforeach
               </optgroup>
             </select>
             <span class="text-danger">{{ $errors->first('academic_id') }}</span>
           </div>
         </div>
      <div class="form-group row {{ $errors->has('grade') ? 'has-error' : '' }}">
        <label for="inputGrade" class="col-sm-2 col-form-label">Grade</label>
        <div class="col-sm-5">
          <select class="form-control form-control-md paygrade"  id="inputGrade year" name="grade_id">
            <optgroup label="Choose Grade" class="grade_option">
              @foreach($grades as $grade)
              <option data-grade="{{$grade->name}}"  value="{{$grade->id}}">{{$grade->name}}</option>
              @endforeach
            </optgroup>
          </select>
          <span class="text-danger">{{ $errors->first('grade') }}</span>
        </div>
      </div>
      <div class="form-group row {{ $errors->has('class') ? 'has-error' : '' }}">
        <label for="inputClass" class="col-sm-2 col-form-label">Class</label>
        <div class="col-sm-5">
          <select class="form-control form-control-md paystuclass" id="inputClass" name="class_id">
            <optgroup label="Choose Class">
             @foreach($classes as $class)
             <option value="{{$class->id}}">{{$class->name}}</option>
             @endforeach
           </optgroup>
         </select>
         <span class="text-danger">{{ $errors->first('class') }}</span>
       </div>
     </div>
     <div class="form-group row {{ $errors->has('examination') ? 'has-error' : '' }}">
      <label for="inputName" class="col-sm-2 col-form-label">Exam Name</label>
      <div class="col-sm-5">
        <select class="form-control form-control-md" name="exam_id" id="inputExam">
          <optgroup label="Choose Examination">
           @foreach($exams as $exam)
           <option value="{{$exam->id}}">{{$exam->name}}</option>
           @endforeach
         </optgroup>
       </select>
       <span class="text-danger">{{ $errors->first('examination') }}</span>
     </div>
   </div>
   <div class="form-group row {{ $errors->has('subject') ? 'has-error' : '' }}">
    <label for="inputSubject" class="col-sm-2 col-form-label">Subject</label>
    <div class="col-sm-5">
      <select class="form-control form-control-md" id="inputSubject" name="subject_id">
        <optgroup label="Choose Subject">
          @foreach($subjects as $subject)
          <option value="{{$subject->id}}">{{$subject->name}}</option>
          @endforeach
        </optgroup>
      </select>
      <span class="text-danger">{{ $errors->first('subject') }}</span>
    </div>
  </div>
  <div class="form-group row {{ $errors->has('marks') ? 'has-error' : '' }}">
    <label for="inputName" class="col-sm-2 col-form-label">Marks</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="marks" name="marks">
      <span class="text-danger">{{ $errors->first('marks') }}</span>
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