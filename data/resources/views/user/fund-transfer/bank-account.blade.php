@extends('user/include.layout')

@section('content')

<div class="controller mt-3 mx-5">
    <div class="row">
        <!-- Navigation Tabs -->
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
                        <a class="nav-link active" aria-current="page" href="#">Topup History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bank Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user">Exit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        </div>

        <!-- Welcome Marquee -->
        <marquee width="100%" direction="left" class="h5">
            Welcome To <span class="text-success1">Graphi</span><span class="text-info1">Graphi</span> Solutions 🙂
        </marquee>

        <!-- Form Section -->
        <div class="row change">
            <div class="col-lg-6 mx-auto">
                <div class="card shadow">
                    <div class="card-header bg-success text-white text-center py-3">
                        <h4 class="mb-0"><span class="text-success1">Add</span> <span class="text-info1">Money</span></h4>
                    </div>

                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <!-- Bank Account -->
                            <div class="mb-3">
                                <label for="bankSelect" class="form-label">Select Bank Account</label>
                                <select class="form-select" id="bankSelect" name="bank" required>
                                    <option value="" selected disabled>Select a Bank</option>
                                    <!-- Add dynamic bank options here -->
                                </select>
                            </div>
                            
                            <!-- Amount -->
                            <div class="mb-3">
                                <label for="amountInput" class="form-label">Amount</label>
                                <input type="number" class="form-control" id="amountInput" name="amount" placeholder="Enter the amount" required />
                            </div>

                            <!-- UTR/Transaction ID -->
                            <div class="mb-3">
                                <label for="utrInput" class="form-label">Transaction Id/UTR</label>
                                <input type="text" class="form-control" id="utrInput" name="utr" placeholder="Enter Transaction ID/UTR" required />
                            </div>

                            <!-- Date -->
                            <div class="mb-3">
                                <label for="dateInput" class="form-label">Date</label>
                                <input type="date" class="form-control" id="dateInput" name="date" required />
                            </div>

                            <!-- Mode of Transaction -->
                            <div class="mb-3">
                                <label for="modeSelect" class="form-label">Mode of Transaction</label>
                                <select class="form-select" id="modeSelect" name="mode" required>
                                    <option value="" selected disabled>Select Mode</option>
                                    <option value="IMPS">IMPS</option>
                                    <option value="NEFT">NEFT</option>
                                    <option value="RTGS">RTGS</option>
                                    <option value="UPI">UPI</option>
                                    <option value="CASH">CASH</option>
                                    <option value="CDM">CDM</option>
                                </select>
                            </div>

                            <!-- Slip Image Upload -->
                            <div class="mb-3">
                                <label for="slipImage" class="form-label">Slip Image</label>
                                <div class="dropzone" id="slipImage">
                                    <div class="dz-message needsclick">
                                        <i class="ki-duotone ki-file-up fs-3x text-primary"></i>
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                            <span class="fs-7 fw-semibold text-gray-500">Upload up to 10 files</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Remark -->
                            <div class="mb-3">
                                <label for="remarkInput" class="form-label">Remark</label>
                                <input type="text" class="form-control" id="remarkInput" name="remark" placeholder="Any remarks (optional)" />
                            </div>

                            <!-- Submit Button -->
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
