@extends('master')

@section('contant')
<div class="container">
<div class=" row pt-5 ">
<div class="col-sm-12">
                        <table class="table table-hover mx-auto">
                        <tbody>
                            <tr>
                            <td>Amout</td>
                            <td>${{$total}}</td>
                            </tr>
                            <tr>
                            <td>Tax</td>
                            <td>$ 0</td>
                            </tr>
                            <tr>
                            <td>Delivery</td>
                            <td>$ 10</td>
                            </tr>
                            <tr>
                            <td>Total Amout</td>
                            <td>${{$total+10}}</td>
                            </tr>
                        </tbody>
                        </table>
            <div class="container">
                <form method="post"action="{{url('/orderplace')}}">
                    @csrf
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <textarea name="address" class="form-control"placeholder="Enter your Address  " id="inputEmail3"></textarea>
                    </div>
                    </div>
                    <fieldset class="form-group row">
                    <legend class="col-form-label col-sm-2 float-sm-left pt-0">Payment Method</legend>
                    <div class="col-sm-10">
                        <div class="form-check"><br>
                        <input class="form-check-input" type="radio" name="payment" id="payment" value="cash" checked>
                        <label class="form-check-label" for="payment">
                            Online Payment
                        </label>
                        </div>
                        <div class="form-check"><br>
                        <input class="form-check-input" type="radio" name="payment" id="payment" value="cash">
                        <label class="form-check-label" for="payment">
                            Emi Payment
                        </label>
                        </div>
                        <div class="form-check"><br>
                            <input class="form-check-input" type="radio" name="payment" id="payment" value="cash">
                            <label class="form-check-label" for="payment">
                                Payment on Delivery
                            </label>
                         </div>
                    </div>
                    </fieldset>
                    <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success"> Order Now</button>
                    </div>
                    </div>
                </form>
        </div>
    </div>
</div>
</div>
@endsection
