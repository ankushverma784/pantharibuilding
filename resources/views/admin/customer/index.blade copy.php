@extends('layouts.admin')
@section('content')
<div class="container mt-4">
    <div class="col-lg-12">
        <div class="card update-form">
            <div class="card-header">
                <h3 class="text-center title-2">Add Customer</h3>
            </div>
            <div class="card-body mb-3">
                <form action="" method="POST">
                    <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputName">Mobile Number</label> 
                    <input type="number" class="form-control" id="inputName" placeholder="Enter Mobile" name="mobile-no" required="true">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputAmount">GST No</label>
                    <input type="text" class="form-control" id="inputAmount" placeholder="Enter GST No" name="gst">
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputName">Customer Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Full Name" name="name" required="true">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPolicyName">Address</label>
                        <input type="text" class="form-control" id="inputPolicyName" placeholder="Enter Address" name="address" required="true">
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputName">Aadhar No</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Enter Aadhar No" name="aadhar" required="true">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputAmount">PAN No</label>
                        <input type="text" class="form-control" id="inputAmount" placeholder="Enter PAN No" name="pan" required="true">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputAmount">City</label>
                        <input type="text" class="form-control" id="inputAmount" placeholder="Enter City" name="city" required="true">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPolicyNo">State</label>
                        <input type="text" class="form-control" id="inputPolicyNo" placeholder="" value="Uttarakhand" name="state" required="true" disabled="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3" name="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
