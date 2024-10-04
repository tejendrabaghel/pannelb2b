@extends('user/include.layout')
@section('content')

<div class="controller mt-3 mx-5">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/user">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Balance Enquiry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mini Statement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user">Exit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        <!-- Welcome Marquee -->
        <br>
        <marquee width="100%" direction="left" class="h5">
            Welcome To <span class="text-success1">Graphi</span><span class="text-info1">Graphi</span> Solutions 🙂
        </marquee>

          <!-- Content Section -->
          <div id="kt_app_content" class="app-content flex-column-fluid">
            <!-- Content container -->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="card col-md-6 mx-auto shadow-lg border-0">
                    <!-- Card Header -->
                    <div class="card-header bg-success text-white text-center py-3">
                        <h4 class="mb-0"><span class="text-success1">Merchant</span> <span class="text-info1">Onboarding</span></h4>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body p-4">
                        <form id="merchant-form" enctype="multipart/form-data">
                            @csrf
                            
                            <!-- Mobile Number Field -->
                            <div class="form-group mb-3">
                                <label for="mobile" class="form-label">Mobile Number</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-phone"></i></span>
                                    <input type="text" class="form-control numeric-input" id="mobile" placeholder="Enter Mobile Number" maxlength="10" name="mobile" required/>
                                </div>
                                <small class="form-text text-muted">Enter a valid 10-digit mobile number.</small>
                            </div>
                            
                            <!-- Email Address Field -->
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required/>
                                </div>
                            </div>
                            
                            <!-- Aadhaar Number Field -->
                            <div class="form-group mb-3">
                                <label for="aadhaar" class="form-label">Aadhaar Number</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control numeric-input" id="aadhaar" placeholder="Enter Aadhaar Number" maxlength="12" name="aadhaar" required/>
                                </div>
                                <small class="form-text text-muted">Enter a valid 12-digit Aadhaar number.</small>
                            </div>
                            
                            <!-- PAN Number Field -->
                            <div class="form-group mb-3">
                                <label for="pan" class="form-label">PAN Number</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                                    <input type="text" class="form-control" id="pan" placeholder="Enter PAN Number" name="pan" required/>
                                </div>
                            </div>
                            
                            <!-- Bank Account Number Field -->
                            <div class="form-group mb-3">
                                <label for="account" class="form-label">Bank Account Number</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-credit-card"></i></span>
                                    <input type="text" class="form-control numeric-input" id="account" placeholder="Enter Bank Account Number" name="account" required/>
                                </div>
                            </div>

                            <!-- IFSC Code Field -->
                            <div class="form-group mb-3">
                                <label for="ifsc" class="form-label">IFSC Code</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-building"></i></span>
                                    <input type="text" class="form-control" id="ifsc" placeholder="Enter IFSC Code" name="ifsc" required/>
                                </div>
                                <small class="form-text text-muted">Enter the IFSC code of your bank branch.</small>
                            </div>
                            
                            <!-- Submit and Reset Buttons -->
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-success w-45"><i class="bi bi-check-circle"></i> Submit</button>
                                <button type="reset" class="btn btn-warning w-45"><i class="bi bi-x-circle"></i> Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Content container -->
        </div>
    </div>
</div>

@endsection
