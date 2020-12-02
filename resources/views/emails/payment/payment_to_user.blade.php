
@component('mail::message')



    <div >
        <div style="text-align: center;"><h1>ABC Company</h1></div>
        <div style="text-align: center;"><h3>[Kirtipur,Kathmandu]</h3></div>
        <div style="text-align: center;"><h3>Payslip</h3></div>
    </div>
    <div class="col-12">
        <label for="user_id">User ID</label>
        <input type="text" name = "user_id" id = "user_id"  value=""
               required >
        <label for="name">Employee Name</label>
        <input type="text" name = "name" id = "name"  value="{{$result->name}}"
               required >
    </div></br>
    <div class="col-12">
        <label for="name">Email Address</label>
        <input type="text" name = "name" id = "name"  value="{{$result->email}}"
               required >
    </div></br>
    <div class="col-12">
        <label for="name">Pay-Month</label>
        <input type="text" name = "name" id = "name"  value="{{ \Illuminate\Support\Carbon::now()->startOfMonth()->subMonth()->format('F-Y')}}"
               required > <label for="name">Payslip Cycle</label>
        <input type="text" name = "name" id = "name"  value="Monthly"
               required >
    </div></br></br>
    <table style="width:100%" border="2">
        <tr>
            <th>EARNINGS</th>
            <th>HOURS</th>
            <th>RATE</th>
            <th>TOTAL HOUR</th>
        </tr>
        <tr>
            <td>Regular</td>
            <td>Per Hour</td>
            <td>150</td>
            <td>{{$result->total_time}}</td>
        </tr>
        <tr>
            <td>Over-Time</td>
            <td>Per Hour</td>
            <td>250</td>
            <td>{{''}}</td>
        </tr>
    </table>
    </br></br>
    <table style="width:100%" border="2">
        <td >Gross Salary </td>
        <td >{{$result->total_time * 150 * $result->no_of_days}} </td>
    </table>
    </br></br>
    <table style="width:100%" border="2">
        <thead>
        <tr>
            <th colspan="12">DEDUCTIONS</th>
        </tr>
        <tr><th colspan="1">S.N </th>
            <th >Particular </th>
            <th colspan="5">Amount</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td >1</td>
            <td>TAX</td>
            <td> {{($result->total_time * 150 * $result->no_of_days)/100}}</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Company Deductions(10%)</td>
            <td> {{($result->total_time * 150 * $result->no_of_days)*0.1}}</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Loan</td>
            <td>{{''}}</td>
        </tr>
    </table>
    <table style="width:100%" border="2">
        <td>TOTAL DEDUCTIONS</td>
        <td> {{(($result->total_time * 150 * $result->no_of_days)/100)+(($result->total_time * 150 * $result->no_of_days)*0.1)}}</td>
    </table>
    </br></br>
    <table style="width:100%" border="2">
        <td >Net Salary </td>
        <td > </td>
    </table>
    </br></br>
    <div >
        <h5>Name of Bank [<u>PRABHU BANK</u>]</h5>
        <h5>Bank Branch[<u>KIRTIPUR BRANCH</u>]</h5>
        <h5>Account Number[<u>AUTO RANDOM GENERATE OF 16 DIGITS</u>]</h5>
        <h5>Date[<u>TODAY'S DATE</u> ]</h5>
    </div>
@endcomponent
