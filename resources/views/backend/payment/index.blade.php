@extends('backendtemplate')
@section('contend')

  <div class=" mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-10">
          <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-credit-card"></i> 
    Payment Register List
  </h1>
        </div>

        <div class="col-2">
          <a href="{{route('payment.create')}}" class="btn btn-success btn-block float-right"> 
            <i class="fa fa-plus"></i> New Register 
          </a>
        </div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered ml-3">
          <thead class="thead-dark">
            <tr>
              <th>Id</th>
              <th>Student Name</th>
              <th>Grade</th>
              <th>Class</th>

              
              <th>Academic</th>
              
              <th>Total Amount</th>
             <th>First Payment Date</th>
              <th>First Payment Amount</th>

              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
            @foreach($payments as $payment)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$payment->student->user->name}}</td>
              <td>{{$payment->class->grade->name}}</td>
              <td>{{$payment->class->name}}</td>
              <td>{{$payment->academic->name}} </td>
              <td>{{$payment->total_amount}} </td>
              <td>{{$payment->first_installation_date}}</td>
              <td>{{$payment->first_installation_payment}}</td>

              
              <td>
                 <a href="{{route('payment.show',$payment->id)}}" class="btn btn-primary"><i class="fas fa-info fa-1x"></i></a>
                <a href="{{route('payment.edit',$payment->id)}}" class="btn btn-warning"><i class="fas fa-edit fa-1x"></i></a>
                            <form method="post" action="{{route('payment.destroy',$payment->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button  type="submit" class="btn btn-danger"><i class="fas fa-trash fa-1x"></i></button> 
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