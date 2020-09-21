@extends('backend.Teacher_role.teacherhome')


@section('style')
  <link href="{{asset('backendCss/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  
@endsection


	@section('content')

	 <div class="container bg-info">

          <!-- Page Heading -->
          {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}
          <div><h1>Students</h1></div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Students DataTable</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Photo</th>
                      <th>Father Name</th>  
                      <th>Academic</th>
                      <th>Grade</th>
                      <th>Class</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Photo</th>
                      <th>Father Name</th>  
                      <th>Academic</th>
                      <th>Grade</th>
                      <th>Class</th>
                      <th>Actions</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>
                      @php $i=1; @endphp
            @foreach($students as $student)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$student->user->name}}</td>
              
              <td> <img src="{{asset($student->photo)}}" width="120px" height="100px"></td>
              <td>{{$student->fname}} </td>
              <td>{{$student->academic->name}} </td>
               <td>{{$student->class->grade->name}}</td>
              <td>{{$student->class->name}}</td>
              <td>
                 <a href="{{route('studentdetailpage',$student->id)}}" class="btn btn-primary"><i class="fas fa-info fa-1x"></i></a>
               {{--  <a href="{{route('student.edit',$student->id)}}" class="btn btn-warning"><i class="fas fa-edit fa-1x"></i></a>
                            <form method="post" action="{{route('student.destroy',$student->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button  type="submit" class="btn btn-danger"><i class="fas fa-trash fa-1x"></i></button> 
                            </form> --}}
              </td>
            </tr>
            @endforeach
            
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
       
 


	@endsection

@section('script')
<script src="{{asset('backendCss/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backendCss/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('backendCss/js/demo/datatables-demo.js')}}"></script>

@endsection