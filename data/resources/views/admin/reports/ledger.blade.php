@extends('admin/include.layout')

@section('content')
<div class="container-fluid px-4">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Ledger Statement</li>
    </ol>

    <!-- Transaction Summary Section -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">0 Transactions</h5>
                    <p class="card-text">₹ 0</p>
                </div>
            </div>  
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">0 Transaction Success</h5>
                    <p class="card-text">₹ 0</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">0 Transaction Failed</h5>
                    <p class="card-text">₹ 0</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">0 Transaction Pending</h5>
                    <p class="card-text">₹ 0</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Search and Filter Section -->
    <div class="card mb-4">
        <div class="card-body">
            <form action="" method="GET" class="form-inline">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <label for="start-date">From</label>
                        <input type="date" id="start-date" class="form-control" name="start_date" value="{{ date('Y-m-d') }}">
                    </div>
                    <div class="col-md-3">
                        <label for="end-date">To</label>
                        <input type="date" id="end-date" class="form-control" name="end_date" value="{{ date('Y-m-d') }}">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="search_value" placeholder="Enter Search Value">
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-success">Export</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Data Table Section -->
    <div class="card-body">
        <table id="datatablesSimple" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>User Phone</th>
                    <th>Transaction Id</th>
                    <th>Type on Trans.</th>
                    <th>Remark</th>
                    <th>Amount</th>
                    <th>Charges</th>
                    <th>Commission</th>
                    <th>TDS</th>
                    <th>GST</th>
                    <th>Net</th>
                    <th>Opening</th>
                    <th>Balance</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <!-- Dummy Data -->
            @for ($i = 1; $i <= 50; $i++)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ 'User'.$i }}</td>
                <td>{{ '+91 '.rand(7000000000, 9999999999) }}</td>
                <td>{{ 'TXN'.rand(1000000000, 9999999999) }}</td>
                <td>{{ rand(0, 1) ? 'Credit' : 'Debit' }}</td>
                <td>{{ 'Remark'.$i }}</td>
                <td>{{ '₹'.rand(1000, 50000) }}</td>
                <td>{{ '₹'.rand(10, 500) }}</td>
                <td>{{ '₹'.rand(50, 500) }}</td>
                <td>{{ '₹'.rand(50, 500) }}</td>
                <td>{{ '₹'.rand(10, 100) }}</td>
                <td>{{ '₹'.rand(500, 10000) }}</td>
                <td>{{ '₹'.rand(1000, 20000) }}</td>
                <td>{{ '₹'.rand(5000, 30000) }}</td>
                <td>{{ now()->subDays(rand(0, 30))->format('d-m-Y H:i:s') }}</td>
                <td>
                    <button class="btn btn-info btn-sm">View</button>
                    
                </td>
            </tr>
            @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection
