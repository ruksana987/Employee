@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Users Payment List</h1>
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

    <div class="col-12">
        <a class="btn btn-primary" href="/sendmail" >Send Emails for Payments</a>
    </div>


    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info ">
        <thead>
        <tr>
            <td><h5>ID</h5> </td>
            <td><h5>Name</h5></td>
            <td><h5>Email</h5></td>
            <td><h5>Month</h5></td>
            <td><h5>Total Time/Hour</h5> </td>
            <td><h5>Gross Salary</h5></td>
            <td><h5>Tax</h5></td>
            <td><h5>Company Deductions</h5></td>
            <td><h5>Net Salary</h5></td>

        </tr>

        </thead>
        <tbody>




        @foreach($results as $demo)

            <tr>
                <td>{{$demo->user_id}}</td>
                <td>{{$demo->name}}</td>

                <td>{{$demo->email}}</td>
                <td>{{\Illuminate\Support\Carbon::now()->startOfMonth()->subMonth()->format('F-Y')}}</td>
                <td>{{$demo->total_time}}</td>
                <td>{{$demo->no_of_days * $demo->total_time * 150 }}
                <td>{{$demo->no_of_days * $demo->total_time * 150*0.01 }}
                <td>{{$demo->no_of_days * $demo->total_time * 150*0.1 }}
                <td>{{($demo->no_of_days * $demo->total_time * 150)-
                        ($demo->no_of_days * $demo->total_time * 150*0.1)-
                        ($demo->no_of_days * $demo->total_time * 150*0.01)}}





            </tr>

        @endforeach

        </tbody>
    </table>
</div>

@stop
