@extends('backend.Teacher_role.teacherhome')


@section('style')
  <link href="{{asset('backendCss/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  
@endsection


	@section('content')

	 <div class="container bg-info">

          <!-- Page Heading -->
          {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}
          <div><h1>Teachers</h1></div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Teachers DataTable</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Phoneno</th>
                      <th>Nrc</th>
                      <th>Photo</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Phoneno</th>
                      <th>Nrc</th>
                      <th>Photo</th>
                      
                      
                    </tr>
                  </tfoot>
                  <tbody>
            @php $i=1; @endphp
            @foreach($teachers as $teacher)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$teacher->user->name}}</td>             
              <td>{{$teacher->address}}</td>
              <td>{{$teacher->phoneno}}</td>
              <td>{{$teacher->nrc}}</td>
              <td><img src="{{asset($teacher->photo)}}" width="120px" height="100px">
              {{-- <td><a href="{{route('teacherdetailpage',$teacher->id)}}" class="btn btn-primary"><i class="fas fa-info fa-1x"></i></a></td> --}}
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