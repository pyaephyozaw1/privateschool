@extends('backend.Teacher_role.teacherhome')
@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row mb-5">
    <div class="col-md-12 text-center">
      <h1 class="h3 mb-0 text-gray-800 d-inline-block"><i class="fas fa-chalkboard-teacher"></i>Teacher Detail </h1>
    </div>
  </div>


   <div class="container table-bordered border-info my-3">

    <div class="row">
      <div class="col-lg-3">



        <img src="{{asset($user->teacher->photo)}}" class="my-3 mx-3" style="width:260px">

      </div>
       <div class="col-lg-1 mt-4">
          <button type="button" class="btn btn-outline-primary btn-md" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="background: #08086f;color: white;"><i class="fas fa-edit"></i></button>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title profic" id="exampleModalLabel">Edit Profile</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{route('teacherphotopage',$user->teacher->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Profile Photo</label>
                      <nav>
                                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Profile</a>
                                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Profile</a>
                                  </div>
                              </nav>
                              <div class="tab-content" id="nav-tabContent">
                                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                      <img src="{{$user->teacher->photo}}" id="oldPhoto" height="200px" width="200px" class="img-fluid mt-3">
                                      <input type="hidden" name="oldphoto" value="{{$user->teacher->photo}}">
                                  </div>
                                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                      <input type="file" name="photo" class="mt-3" accept="images/*">
                                  </div>
                              </div>
                    </div>
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

      <div class="col-lg-3 mt-4">
       <p><strong>Teacher Name:{{$user->name}}</strong></p>
       <p><strong>Email:{{$user->email}}</strong></p>
       <p><strong>Address : {{$user->teacher->address}}</strong></p>
       <p><strong>Password : ...................</strong></p>

     </div>
      <div class="col-lg-1 mt-4">
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
                  <form action="{{route('teacherfirsticonpage',$user->teacher->id)}}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Name</label>
                      <input type="text" class="form-control" id="dob" name="name" value="{{$user->name}}">
                    </div>
                     <input type="hidden" name="oldphoto" value="{{$user->teacher->photo}}">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Email</label>
                      <textarea type="" class="form-control" id="address" name="email" >{{$user->email}}
                      </textarea>
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Adreess</label>
                      <input type="text" class="form-control" id="phone" name="address" value="{{$user->teacher->address}}">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Password</label>
                      <input type="text" class="form-control" id="phone" name="password" value="{{$user->password}}">
                    </div>
                    {{--<div class="form-group">
                      <label for="recipient-name" class="col-form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                    </div>--}}
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
       
      <div class="col-lg-3 mt-4">
      <p><strong>Salary :{{$user->teacher->salary}}</strong></p>
      <p><strong>NRC : {{$user->teacher->nrc}}</strong> </p>
      <p><strong>Phone No : {{$user->teacher->phoneno}}</strong></p>
      

      
    </div> 
    <div class="col-lg-1 mt-4">
          <button type="submit" class="btn btn-outline-primary btn-md" data-toggle="modal" data-target="#basic" data-whatever="@getbootstrap" style="background: #08086f;color: white;"><i class="fas fa-edit"></i></button>
          <div class="modal fade" id="basic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h6 class="modal-title profic" id="exampleModalLabel">Edit Basic Info</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{route('teachersecondiconpage',$user->teacher->id)}}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">NRC</label>
                      <textarea type="" class="form-control" id="address" name="nrc" >{{$user->teacher->nrc}}
                      </textarea>
                    </div>
                    <input type="hidden" name="oldphoto" value="{{$user->teacher->photo}}">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Phone No</label>
                      <input type="text" class="form-control" id="phone" name="phoneno" value="{{$user->teacher->phoneno}}">
                    </div>
                    
                    {{--<div class="form-group">
                      <label for="recipient-name" class="col-form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                    </div>--}}
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

  <a href="{{route('teacherhomepage')}}" style="text-decoration: none" class="btn btn-primary float-right"><i class="fas fa-backward pr-2"></i>Back</a>


</div>

@endsection