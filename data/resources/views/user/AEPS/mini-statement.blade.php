@extends('user/include.layout')
@section('content')

<div class="controller mt-3 mx-5">
    <div class="row">
        

        <br>

        <marquee width="100%" direction="left">
            Welcome To Code Graphi Solutions 🙂
        </marquee>

        
        <div id="kt_app_content" class="app-content  flex-column-fluid " >
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-fluid "><div class="card col-md-6">
          <div class="card-header mt-5">
              Merchant Onboarding
          </div>
          <div class="card-body">
              <form id="merchant-form" enctype="multipart/form-data"><input type="hidden" name="_token" value="qvHDcBm1qIoydQgUP8F8qXut5E2WlJQfyvxiLZyz" autocomplete="off">            <div class="form-group col-md-12 mb-2">
                      <label for="mobile">Mobile</label>
                      <input type="text" class="form-control numeric-input" id="mobile" placeholder="Enter Mobile Number"  maxlength="10" name="mobile"/>
                  </div>
                  <div class="form-group col-md-12 mb-2">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Email address" name="email"/>
                  </div>
                  <div class="form-group col-md-12 mb-2">
                      <label for="aadhaar">Aadhaar</label>
                      <input type="text" class="form-control numeric-input" id="aadhaar" placeholder="Enter Aadhaar Number"  maxlength="12" name="aadhaar"/>
                  </div>
                  <div class="form-group col-md-12 mb-2">
                      <label for="pan">PAN</label>
                      <input type="text" class="form-control" id="pan" placeholder="Enter PAN Number" name="pan"/>
                  </div>
                  <div class="form-group col-md-12 mb-2">
                      <label for="account">Account</label>
                      <input type="text" class="form-control numeric-input" id="account" placeholder="Enter Bank Account Number"  name="account"/>
                  </div>
                  <div class="form-group col-md-12 mb-2">
                      <label for="ifsc">IFSC Code</label>
                      <input type="text" class="form-control" id="ifsc" placeholder="Enter IFSC Code" name="ifsc"/>
                  </div>
                  <button type="submit" class="btn btn-primary mt-2">Submit</button>
                  <button type="reset" class="btn btn-warning mt-2">Reset</button>
              </form>
          </div>
      </div>


    </div>
</div>

@endsection
