@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Users attendance List</h1>
    <input type="search" >Search By Month
@stop

@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .uper {
            margin-top: 40px;
        }
    </style>



    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info ">
            <thead>
            <tr>
                <td><h5>ID</h5> </td>
                <td><h5>Name</h5></td>
                <td><h5>Email</h5></td>
                <td><h5>Month</h5></td>
                <td><h5>Time/Hour</h5> </td>

            </tr>

            </thead>
            <tbody>




            @foreach($attendance as $demo)

                <tr>
                    <td>{{$demo->user_id}}</td>
                    <td>{{$demo->user_name}}</td>
                    <td>{{$demo->email}}</td>
                    <td>{{$demo->date_month}}</td>
                    <td>{{$demo->time_hr}}</td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop
