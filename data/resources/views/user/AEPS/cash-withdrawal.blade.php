@extends('user/include.layout') 
@section('content')

<div class="controller mt-3 mx-5">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{(route('cash.withdrawal.form'))}}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('balance.enquiry-form')}}">Balance Enquiry</a>
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
                        <h4 class="mb-0"><span class="text-success1">AEPS</span> <span class="text-info1">Cash Withdrawal</span></h4>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body p-4">
                        <form id="aeps-withdrawal-form" action="{{ route('cash.withdrawal') }}" method="post">
                            @csrf

                            <!-- Aadhaar Number Field -->
                            <div class="form-group mb-3">
                                <label for="aadhaar" class="form-label">Aadhaar Number</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control numeric-input" id="aadhaar" name="aadhaar" placeholder="Enter Aadhaar Number" maxlength="12" required/>
                                </div>
                                <small class="form-text text-muted">Enter a valid 12-digit Aadhaar number.</small>
                            </div>

                            <!-- Bank IIN (Institution Identification Number) Field -->
                            <div class="form-group mb-3">
                                <label for="bank_iin" class="form-label">Bank IIN</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-bank"></i></span>
                                    <input type="text" class="form-control numeric-input" id="bank_iin" name="bank_iin" placeholder="Enter Bank IIN" maxlength="6" required/>
                                </div>
                                <small class="form-text text-muted">Enter the 6-digit Bank IIN.</small>
                            </div>

                            <!-- Amount Field -->
                            <div class="form-group mb-3">
                                <label for="amount" class="form-label">Withdrawal Amount</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-cash"></i></span>
                                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter Amount" required/>
                                </div>
                                <small class="form-text text-muted">Enter the amount to withdraw.</small>
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
