
@extends('layouts.admin')

@section('title' , 'Appointment')


@section('content')

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Law</th>
                <th>Phone</th>
                <th>Time</th>
                <th>Subject</th>
            </tr>
            </thead>
            @foreach( $data as $rs)

                <tr>
                    <td>{{$rs->law}}</td>
                    <td>{{$rs->phone}}</td>
                    <td>{{$rs->time}}</td>
                    <td>{{$rs->subject}}</td>





                    <!-- <td><label class="badge badge-danger">Pending</label></td>
                    <td><label class="badge badge-warning">Pending</label></td>
                    <td><label class="badge badge-success">Pending</label></td>
                    <td><label class="badge badge-info">Pending</label></td>
                    <td>yes</td>
                    <td>no</td>
                    -->
                </tr>
            @endforeach
        </table>

    </div>
@endsection


