@extends('frontend.master')
@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row mb-5">
    <div class="col-md-12">
      <h1 class="h3 mb-0 text-gray-800 d-inline-block"> <i class="fas fa-table"></i> Timetable Detail&nbsp;(&nbsp;Class:&nbsp;{{$student->class->name}}&nbsp;,&nbsp;Academic year:&nbsp;{{$student->academic->name}}&nbsp;) </h1>
    </div>
    {{-- <div>
      <p> Class:{{$student->class->name}}</p>
    </div> --}}
  </div>
 <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered ml-3">
          {{-- <thead class="thead-dark">
            <tr>
              <th>Day</th>
              <th>09:00-09:45</th>
              <th>09:45-10:30</th>
              <th>10:30-11:15</th>
              <th>11:15-12:00</th>
              <th>01:00-01:45</th>
              <th>01:45-02:30</th>
              <th>02:30-03:15</th>
              <tbody>
            <tr>
              <th>Monday</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th>Tuesday</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th>Wednesday</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th>Thusday</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th>Friday</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            </tbody>
            </tr>
          </thead> --}}
          <thead class="thead-dark">
            <tr>
              <th>Day</th>
              @foreach($times as $time)
              <th>{{$time->name}}</th>
              @endforeach
            </tr>
          </thead>
          <tbody class="table table-bordered ml-3">
            @foreach($days as $day)
            <tr>
              <td>{{$day->name}}</td>
              @foreach($times as $time)
              <td>
                @foreach($timetables as $timetable)
                @if($timetable->day==$day->id && $timetable->time_id==$time->id)
                {{$timetable->subject->name}}
                @endif
                @endforeach
              </td>
              @endforeach
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection