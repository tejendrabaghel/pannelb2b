@extends('user/include.layout')

@section('content')
<div class="container-fluid px-4">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
        <li class="breadcrumb-item active">AePS Statement</li>
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
                    <th>User Reference</th>
                    <th>Mobile</th>
                    <th>Aadhaar</th>
                    <th>Bank Name</th>
                    <th>Transaction Amount</th>
                    <th>Remaining Amount</th>
                    <th>UTR</th>
                    <th>Transaction Type</th>
                    <th>Status</th>
                    <th>Message</th>
                    <th>Date & Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy Data -->
                @for ($i = 1; $i <= 50; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ 'Ref'.$i }}</td>
                    <td>{{ '+91 '.rand(7000000000, 9999999999) }}</td>
                    <td>{{ rand(100000000000, 999999999999) }}</td>
                    <td>{{ 'Bank'.$i }}</td>
                    <td>{{ '₹'.rand(1000, 50000) }}</td>
                    <td>{{ '₹'.rand(100, 5000) }}</td>
                    <td>{{ 'UTR'.rand(1000000000, 9999999999) }}</td>
                    <td>{{ rand(0, 1) ? 'NEFT' : 'IMPS' }}</td>
                    <td>{{ rand(0, 1) ? 'Success' : 'Failed' }}</td>
                    <td>{{ 'Message'.$i }}</td>
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
