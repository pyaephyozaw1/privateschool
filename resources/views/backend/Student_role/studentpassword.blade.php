@extends('frontend.master')
@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row mb-5">
    <div class="col-md-12 text-center">
      <h1 class="h3 mb-0 text-gray-800 d-inline-block"><i class="fas fa-chalkboard-teacher"></i>Student Password</h1>
    </div>
  </div>

  <div class="container">
<div class="row">
 {{--  <form action="{{route('studentroletimetablepage')}}" method="post"> --}}

 <a href="{{route('studentroletimetablepage',[$student->class_id,$student->academic_id,$student->id])}}"> <input type="submit"  class="btn btn-primary float-right" value="Timetable"></a>

  {{-- </form> --}}
</div>
</div>

   <div class="container table-bordered border-info my-3">

    <div class="row">
     

      <div class="col-lg-3 mt-4 mx-3">
       
       <p><strong>Password : ...................</strong></p>

     </div>
      <div class="col-lg-1 my-2">
          <button type="submit" class="btn btn-outline-primary btn-md" data-toggle="modal" data-target="#basicinfo" data-whatever="@getbootstrap" style="background: #08086f;color: white;"><i class="fas fa-edit"></i></button>
          <div class="modal fade" id="basicinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h6 class="modal-title profic" id="exampleModalLabel">Edit Basic Info</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{route('studentpasschange')}}" method="post">
                    @csrf
                    
                    
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Password</label>
                      <input type="text" class="form-control" id="phone" name="password" value="{{$user->password}}">
                    </div>
                    {{-- <input type="hidden" name="oldphoto" value="{{$user->student->photo}}"> --}}
                    
                    <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Change</button>
                </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
       
    
      

  </div>
  
</div> 


<div class="container">

  <a href="{{route('mainpage')}}" style="text-decoration: none" class="btn btn-primary float-right"><i class="fas fa-backward pr-2"></i>Back</a>


</div>

@endsection