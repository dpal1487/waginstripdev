@extends('Agent.layout.header')
@section('body')


<div class="addFundMainDiv container">
    <div class="addFund-innerDiv flexDiv">
        <div class="devider">
            
            <form action="#" method="post" class="form">
                @csrf
                <h1>Enter UPI ID</h1>
                <input type="hidden" name="payment_mode" value="UPI">
                <input type="hidden" name="bank_code" value="">
                <input type="hidden" name="card_number" id="card_number">
                <input type="hidden" name="card_holder_name" id="card_holder_name">
                <input type="hidden" name="card_cvv" id="card_cvv">
                <input type="hidden" name="card_expiry_date" id="card_expiry_date">
                <input type="number" class="InputField" placeholder="Amount" name="amount" required="">
                <input type="text" class="InputField" placeholder="mobileNumber@upi" name="upi_va" required="">
                <button type="submit" class="payBtn">VERIFY & PAY</button>
            </form>
            
            <form action="#" method="post" class="form">
                @csrf
                <h1>Select Bank </h1>
                
                        <input type="hidden" name="payment_mode" value="NB">
                        <input type="hidden" name="card_number" id="card_number">
                        <input type="hidden" name="card_holder_name" id="card_holder_name">
                        <input type="hidden" name="card_cvv" id="card_cvv">
                        <input type="hidden" name="card_expiry_date" id="card_expiry_date">
                        <input type="hidden" name="upi_va" id="upi_va">
                        
                <input type="number" class="InputField" placeholder="Amount" name="amount" required="">
                <select name="bank_code" id="bank_code" class="payCard" data-gtm-form-interact-field-id="0">
                    @foreach($bankData as $bank)
                        <option value="{{$bank->BankCode}}">{{$bank->BankName}} </option>
                    @endforeach
                </select>
                <button type="submit" class="payBtn">PAY Now</button>
            </form>
            
            
            
                    
                        
                        
            
            
                    
            
            
        </div>
    </div>
</div>


@endsection