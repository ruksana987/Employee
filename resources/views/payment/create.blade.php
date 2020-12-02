

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>demo</title>
</head>
<body>

<div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">
        <form method="post" >
            @csrf
            @foreach($results as $demo)

            @endforeach

            <div class="form-group">
                <label for="user_id">user_id:</label>
                <input type="text" name = "user_id" id = "user_id"  value="{{$demo->user_id}}"
                       class="form-control" required >
            </div>

            <div class="form-group">
                <label for="time_hr">time_hr :</label>
                <input type="text" name = "time_hr" id = "time_hr" value="{{$demo->total_time}}"
                       class="form-control" required  >
            </div>

            <div class="form-group">
                <label for="date_month">date_month:</label>
                <input type="text" name = "date_month" id = "date_month"
                       value="{{ \Illuminate\Support\Carbon::now()->startOfMonth()->subMonth()->format('F-Y')}}"
                       class="form-control" required  >
            </div>






            <div class="form-group">
                <label for="gross_salary">gross_salary:</label>
                <input type="text" name = "gross_salary" id = "gross_salary"
                       value="{{$demo->total_time * 150 * $demo->no_of_days}}"
                       class="form-control" required  >
            </div>

            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" name = "email" id = "email"  value="{{$demo->email}}"
                       class="form-control" required  >
            </div>

            <div class="form-group">
                <label for="rate_per_hour">rate_per_hour:</label>
                <input type="number" name = "rate_per_hour" id = "rate_per_hour"  value="150"
                       class="form-control" required  >
            </div>


            <div class="form-group">
                <label for="tax">tax(1%):</label>
                <input type="text" name = "tax" id = "tax"  value="{{($demo->total_time * 150 * $demo->no_of_days)/100}}"
                       class="form-control" required  >
            </div>

            <div class="form-group">
                <label for="comany_deductions">comany_deductions:</label>
                <input type="text" name = "comany_deductions" id = "comany_deductions"
                       value="{{($demo->total_time * 150 * $demo->no_of_days)*0.1}}" class="form-control" required  >
            </div>


            <div class="form-group">
                <label for="net_salary">net_salary:</label>
                <input type="text" name = "net_salary" id = "net_salary"  value="net_salary" class="form-control" required >
            </div>




            <button type = "submit" class = "btn btn-success">Submit</button>
        </form>



    </div>
</div>

</body>
</html>



