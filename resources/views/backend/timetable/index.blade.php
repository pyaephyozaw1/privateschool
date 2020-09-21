@extends('backendtemplate')
@section('contend')


  <div class=" mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-10">
            <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-table"></i> 
    Timetable  List
  </h1>
   
          <div class="form-row">
           <div class="form-group row {{ $errors->has('grade') ? 'has-error' : '' }}">
            <label for="inputGrade" class="col-sm-2 col-form-label">Grade</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md grade" id="inputGrade" name="grade">
                <optgroup label="Choose Grde">
                  @foreach($grades as $grade)
                    <option value="{{$grade->id}}">{{$grade->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('grade') }}</span>
            </div>
          </div>
            <div class="form-group row {{ $errors->has('class') ? 'has-error' : '' }}">
            <label for="inputClass" class="col-sm-2 col-form-label">Class</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md stuclass timeclass" id="inputClass" name="class">
                <optgroup label="Choose Class">
                   @foreach($classes as $class)
                    <option value="{{$class->id}}">{{$class->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('class') }}</span>
            </div>
          </div>
  
           
       
          <div class="form-group row {{ $errors->has('academic') ? 'has-error' : '' }}">
            <label for="inputAcademic" class="col-sm-2 col-form-label">Academic</label>
            <div class="col-sm-5">
              <select class="form-control form-control-md timeacademic" id="inputAcademic" name="academic">
                <optgroup label="Choose Academic">
                  @foreach($academics as $academic)
                    <option value="{{$academic->id}}">{{$academic->name}}</option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('academic') }}</span>
            </div>
          </div>
            <div class="col">
              <input type="submit" class="btn btn-success search" value="Search">
            </div>
          </div>
        
         
        </div>

        <div class="col-2">
          <a href="{{route('timetable.create')}}" class="btn btn-success btn-block float-right"> 
            <i class="fa fa-plus"></i> New Timetable 
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
              <th>Grade</th>
              <th>Class</th>
              <th>Academic</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="timetable">
            @php $i=1; @endphp
            {{-- @foreach($timetables as $timetable)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$timetable->class->grade->name}}</td>   
              <td>{{$timetable->class->name}}</td>
              <td>{{$timetable->academic->name}}</td> --}}
              @foreach($classes as $class)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$class->grade->name}}</td>
                <td>{{$class->name}}</td>
                <td>@if(isset($class->timetable->academic)){{$class->timetable->academic->name}}@endif</td>
              <td>
                 <a href="{{route('timetable.show',$class->id)}}" class="btn btn-primary"><i class="fas fa-info fa-1x"></i></a>
                {{-- <a href="{{route('timetable.edit',$class->id)}}" class="btn btn-warning"><i class="fas fa-edit fa-1x"></i></a>
                            <form method="post" action="{{route('timetable.destroy',$class->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
 $('.search').click(function(){
        // alert('hi');
        var time_class=$('.timeclass option:selected').val();
        var time_academic=$('.timeacademic option:selected').val();
        //alert(time_class);
        //alert(time_academic);
       $.post('/timetableclass',{time_class:time_class,time_academic:time_academic},function(response){
        console.log(response);
        var html='';
         var j=1;
        $.each(response,function(i,v){
          
          html+=`
          <th>${j}</th>
          <th>${v.day}</th>
          <th>${v.starttime}</th>
          <th>${v.endtime}</th>
          <th> <a href="{{route('timetable.show','/id')}}" class="btn btn-primary"><i class="fas fa-info fa-1x"></i></a>
                <a href="{{route('timetable.edit','/editid')}}" class="btn btn-warning"><i class="fas fa-edit fa-1x"></i></a>
                            <form method="post" action="{{route('timetable.destroy','/deleteid')}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button  type="submit" class="btn btn-danger"><i class="fas fa-trash fa-1x"></i></button> 
                            </form></th>

          `;
          html =  html.replace('/id',v.id);
          html =  html.replace('/editid',v.id);
          html =  html.replace('/deleteid',v.id);
            j++;
            
            
        })
        $('.timetable').html(html);
       })
      })
    })
</script>
@endsection