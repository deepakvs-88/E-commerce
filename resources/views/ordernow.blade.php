@extends('home')
@section('content')
<div class="order-table">
    <table class="table">
        <tbody>
            <tr>
                <td>Amount</td>
                <td>Rs.{{$total}}</td>
            </tr>
            <tr>
                <td>Gst</td>
                <td>{{$total/100*18}}</td>
            </tr>
            <tr>
                <td>Delivery</td>
                <td>Rs.40</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>Rs.{{$total+40+$total/100*18}}</td>
            </tr>
        </tbody>
    </table>
</div>
<div>
    <form action="/orderplaced" method="post">
        {{ csrf_field() }}
        <div class="form-group-address">
            <textarea name=address placeholder="Enter your address"></textarea><br><br>
        </div>
        <div class="form-group">
            <h4>Payment Method</h4><br><br>
            <input type="radio" value="cash" name="payment"><span>Online Payment</span><br><br>
            <input type="radio" value="cash" name="payment"><span>No cost EMI</span><br><br>
            <input type="radio" value="cash" name="payment"><span>Cash on Delivery</span>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection