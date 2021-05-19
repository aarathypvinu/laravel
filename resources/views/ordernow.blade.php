@extends("theme")
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <table class="table table-borderless">
         
            <tbody>
              <tr>
                <td>Amount</td>
              <td> {{$total}}</td> 
              </tr>
              <tr>
                <td>Delivery </td>
                <td> 100</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td> {{$total+100}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control address" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="online payment" name="payment"> <span>online payment</span> <br> <br>
                  <input type="radio" value="EMI" name="payment"> <span>EMI payment</span> <br><br>
                  <input type="radio" value="cash on delivery" name="payment"> <span>Payment on Delivery</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-success orderbtn">Order Now</button>
              </form>
          </div>
     </div>
     
</div>
<table class="order-list"></table>
@endsection 