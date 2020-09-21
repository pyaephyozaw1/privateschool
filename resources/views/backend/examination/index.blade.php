@extends('backendtemplate')
@section('contend')


  <div class=" mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-10">
            <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-book-open"></i> 
    Exam  List
  </h1>
         
        </div>

        <div class="col-2">
          <a href="{{route('examination.create')}}" class="btn btn-success btn-block float-right"> 
            <i class="fa fa-plus"></i> New Examination 
          </a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered ml-3">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Exam Month</th>
              <th>Exam Date</th>
              <th>Start Time</th>
              <th>End Time</th>             
              <th>Subject</th>
              <th>Grade</th>
              <th>Academic</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
            @foreach($examinations as $examination)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$examination->name}}</td>
              <td>{{$examination->exam_month}}</td>
              <td>{{$examination->exam_date}}</td>
              <td>{{$examination->start_time}}</td>
              <td>{{$examination->end_time}}</td>
              <td>{{$examination->subject->name}}</td>
              <td>{{$examination->grade->name}}</td>
              <td>{{$examination->academic->name}} </td>



              <td>
                 {{-- <a href="{{route('examination.show',$examination->id)}}" class="btn btn-primary"><i class="fas fa-info fa-2x"></i></a> --}}
                <a href="{{route('examination.edit',$examination->id)}}" class="btn btn-warning"><i class="fas fa-edit fa-2x"></i></a>
                            <form method="post" action="{{route('examination.destroy',$examination->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button  type="submit" class="btn btn-danger"><i class="fas fa-trash fa-2x"></i></button> 
                            </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
@endsection