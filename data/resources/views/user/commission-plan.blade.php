@extends('user/include.layout')
@section('content')
    
<style>
    .card .card-header .card-title, .card .card-header .card-title .card-label {
        font-weight: 600 !important;
        font-size: 1.2rem !important;
        color:#006f37 !important;
    }
    .card .card-header {
        background-color:#DFFFEA !important;
    }
    table th{
       font-weight:600 !important;
       color:#006f37 !important;
       font-size:1.1rem !important;
    }
    </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1 text-center h2"><span class="text-success1">Commission</span> <span class="text-info1">& Charges</span></h4>
                </div>
                <!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <div class="row gy-4">
                                                        <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Fund Transfer IMPS Charges</h4>
                                    </div>
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">
                                                <div class="table-responsive">
                                                    <table class="table table-responsive-md">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl no.</th>
                                                                                                                                <th>From Amount</th>
                                                                                                                                <th>To Amount</th>
                                                                                                                                <th>Charge</th>
                                                                                                                                <th>Commission</th>
                                                                                                                                <th>TDS</th>
                                                                                                                                <th>Charge In</th>
                                                                                                                                <th>Commission In</th>
                                                                                                                                <th>TDS In</th>
                                                                                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                                                                                                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                                                        <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Fund Transfer NEFT Charges</h4>
                                    </div>
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">
                                                <div class="table-responsive">
                                                    <table class="table table-responsive-md">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl no.</th>
                                                                                                                                <th>From Amount</th>
                                                                                                                                <th>To Amount</th>
                                                                                                                                <th>Charge</th>
                                                                                                                                <th>Commission</th>
                                                                                                                                <th>TDS</th>
                                                                                                                                <th>Charge In</th>
                                                                                                                                <th>Commission In</th>
                                                                                                                                <th>TDS In</th>
                                                                                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                                                                                                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                                                        <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Fund Transfer RTGS Charges</h4>
                                    </div>
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">
                                                <div class="table-responsive">
                                                    <table class="table table-responsive-md">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl no.</th>
                                                                                                                                <th>From Amount</th>
                                                                                                                                <th>To Amount</th>
                                                                                                                                <th>Charge</th>
                                                                                                                                <th>Commission</th>
                                                                                                                                <th>TDS</th>
                                                                                                                                <th>Charge In</th>
                                                                                                                                <th>Commission In</th>
                                                                                                                                <th>TDS In</th>
                                                                                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                                                                                                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                                                        <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Money Transfer IMPS Charges</h4>
                                    </div>
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">
                                                <div class="table-responsive">
                                                    <table class="table table-responsive-md">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl no.</th>
                                                                                                                                <th>From Amount</th>
                                                                                                                                <th>To Amount</th>
                                                                                                                                <th>Charge</th>
                                                                                                                                <th>Commission</th>
                                                                                                                                <th>TDS</th>
                                                                                                                                <th>Charge In</th>
                                                                                                                                <th>Commission In</th>
                                                                                                                                <th>TDS In</th>
                                                                                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                                                                                                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                                                        <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Money Transfer NEFT Charges</h4>
                                    </div>
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">
                                                <div class="table-responsive">
                                                    <table class="table table-responsive-md">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl no.</th>
                                                                                                                                <th>From Amount</th>
                                                                                                                                <th>To Amount</th>
                                                                                                                                <th>Charge</th>
                                                                                                                                <th>Commission</th>
                                                                                                                                <th>TDS</th>
                                                                                                                                <th>Charge In</th>
                                                                                                                                <th>Commission In</th>
                                                                                                                                <th>TDS In</th>
                                                                                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                                                                                                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                                                        <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">AEPS Two Factor Charges</h4>
                                    </div>
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">
                                                <div class="table-responsive">
                                                    <table class="table table-responsive-md">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl no.</th>
                                                                                                                                <th>From Amount</th>
                                                                                                                                <th>To Amount</th>
                                                                                                                                <th>Charge</th>
                                                                                                                                <th>Commission</th>
                                                                                                                                <th>TDS</th>
                                                                                                                                <th>Charge In</th>
                                                                                                                                <th>Commission In</th>
                                                                                                                                <th>TDS In</th>
                                                                                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                                                                                                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                                                        <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Mini Statement Commission</h4>
                                    </div>
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">
                                                <div class="table-responsive">
                                                    <table class="table table-responsive-md">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl no.</th>
                                                                                                                                <th>From Amount</th>
                                                                                                                                <th>To Amount</th>
                                                                                                                                <th>Charge</th>
                                                                                                                                <th>Commission</th>
                                                                                                                                <th>TDS</th>
                                                                                                                                <th>Charge In</th>
                                                                                                                                <th>Commission In</th>
                                                                                                                                <th>TDS In</th>
                                                                                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                                                                                                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                                                        <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">AePS Cash Withdrawal Commission</h4>
                                    </div>
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">
                                                <div class="table-responsive">
                                                    <table class="table table-responsive-md">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl no.</th>
                                                                                                                                <th>From Amount</th>
                                                                                                                                <th>To Amount</th>
                                                                                                                                <th>Charge</th>
                                                                                                                                <th>Commission</th>
                                                                                                                                <th>TDS</th>
                                                                                                                                <th>Charge In</th>
                                                                                                                                <th>Commission In</th>
                                                                                                                                <th>TDS In</th>
                                                                                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                                                                                                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                                                </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
@endsection