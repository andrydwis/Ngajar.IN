@extends('layout.app')
@section('content')
<section id="hero" class="d-flex align-items-center mt">
                    <div class="container">
                        <div class="row">        
         <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
        
@include('layout.alert')
<div class="row">
    @if(auth()->user()->payment)
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header">
                <h4>User Payment</h4>
            </div>
            <div class="card-body">
                <form action="">
                    @csrf
                    <div class="form-group">
                        <label>Payment Method</label>
                        <select class="custom-select @error('type') {{ 'is-invalid' }} @enderror" name="type" disabled>
                            <option value="">{{auth()->user()->payment->type}}</option>
                        </select>
                        @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="account_number">Account Number</label>
                        <input type="text" class="form-control @error('type') {{ 'is-invalid' }} @enderror" name="account_number" value="{{auth()->user()->payment->account_number}}" disabled>
                        @error('account_number')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header">
                <h4>Update Payment Data</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('dashboard.user-payment.save') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Payment Method</label>
                        <select class="custom-select @error('type') {{ 'is-invalid' }} @enderror" name="type">
                            <option selected disabled>Choose payment method:</option>
                            <option value="BCA">BCA</option>
                            <option value="BRI">BRI</option>
                            <option value="BNI">BNI</option>
                            <option value="GOPAY">GOPAY</option>
                        </select>
                        @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="account_number">Account Number</label>
                        <input type="text" class="form-control @error('type') {{ 'is-invalid' }} @enderror" name="account_number">
                        @error('account_number')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button class="btn btn-success" type="submit">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
    </div>
</div>
</section>

@endsection