@extends('master')
@section('content')
    <?php
    use App\Http\Controllers\ProductController;
    $total = 0;
    if (Session::has('user')) {
    $total = ProductController::cartItem();
    }
    ?>
    <div class="container ">
      <div class="row">
        <div class="col-sm-6">
        <table class="table table-hover">
            <h2 class="text-center">Payment Entitlement</h2>
            <tbody>
                <tr>
                    <td>Total Price</td>
                    <td><i class="fa fa-rupee"></i> {{ $totals }}</td>
                </tr>
                <tr>
                    <td>GST</td>
                    <td><i class="fa fa-rupee"></i> 0</td>
                </tr>
                <tr>
                    <td>Delivery Charges</td>
                    <td><i class="fa fa-rupee"></i> 100</td>
                </tr>
                <tr>
                    <td class="h3 text-primary">Payable Amount</td>
                    <td class="h3 text-primary"><i class="fa fa-rupee"></i> {{ $totals + 100 }}</td>
                    <tr></tr>
        </table>
      </div>
          <div class="col-sm-6">
        <h2 class="text-center">Shipping Details</h2>
        <form action="orderplace" method="POST">
          @csrf;
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" required name="name" class="form-control" id="name" placeholder="Enter the Name">
            </div>
            <div class="form-group">
              <label for="name">Mobile No:</label>
              <input type="number" required name="mobile" class="form-control" id="name" placeholder="Enter the Name">
            </div>
            <div class="form-group">
              <label for="address">Shipping Address</label>
              <textarea class="form-control" name="address" placeholder="Shipping Address" id="" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="PaymentMethod">Payment Method</label><br>
              <input type="radio" name="Payment_Method" value="UPI" id="pm1">UPI <br>
              <input type="radio" name="Payment_Method" value="Netbanking" id="pm2">Netbanking <br>
              <input type="radio" name="Payment_Method" value="CreditDebit" id="pm3">Debit/Credit Card <br>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-lg btn-success" value="Place Order">
            </div>
          </form>
        </div>
        </div>
    </div>
    
@endsection
