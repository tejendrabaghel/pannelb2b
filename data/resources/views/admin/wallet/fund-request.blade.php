@extends('admin/include.layout')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h5>Fund Requests</h5>
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pending</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Approved</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Rejected</a>
                </li>
            </ul>
        </div>

        <div class="card-body">
            <form class="d-flex mb-4">
                <input type="date" class="form-control me-2" value="25-09-2024">
                <input type="date" class="form-control me-2" value="25-09-2024">
                <input type="text" class="form-control me-2" placeholder="Enter Search Value">
                <button class="btn btn-primary me-2" type="button">Search</button>
                <button class="btn btn-success" type="button">Export</button>
            </form>

            <div class="card-body">
                <table id="datatablesSimple" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>User Phone</th>
                            <th>Company A/c No</th>
                            <th>Bank Name</th>
                            <th>Transaction Id</th>
                            <th>Amount</th>
                            <th>Mode of Trans</th>
                            <th>UTR</th>
                            <th>Proof</th>
                            <th>Raise Date</th>
                            <th>User Remark</th>
                            <th>Admin Remark</th>
                            <th>Employee</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>User Phone</th>
                            <th>Company A/c No</th>
                            <th>Bank Name</th>
                            <th>Transaction Id</th>
                            <th>Amount</th>
                            <th>Mode of Trans</th>
                            <th>UTR</th>
                            <th>Proof</th>
                            <th>Raise Date</th>
                            <th>User Remark</th>
                            <th>Admin Remark</th>
                            <th>Employee</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <!-- Dummy Data Loop -->
                        @for ($i = 1; $i <= 50; $i++)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ 'User'.$i }}</td>
                            <td>{{ '+91 '.rand(7000000000, 9999999999) }}</td>
                            <td>{{ 'A/C '.rand(10000000, 99999999) }}</td>
                            <td>{{ 'Bank'.$i }}</td>
                            <td>{{ 'TXN'.rand(100000, 999999) }}</td>
                            <td>{{ '₹'.rand(1000, 50000) }}</td>
                            <td>{{ rand(0, 1) ? 'NEFT' : 'IMPS' }}</td>
                            <td>{{ 'UTR'.rand(1000000000, 9999999999) }}</td>
                            <td><a href="#">View Proof</a></td>
                            <td>{{ now()->subDays(rand(0, 30))->format('d-m-Y') }}</td>
                            <td>{{ 'Remark'.$i }}</td>
                            <td>{{ rand(0, 1) ? 'Checked' : 'Pending' }}</td>
                            <td>{{ 'Employee'.$i }}</td>
                            <td>{{ rand(0, 1) ? 'Approved' : 'Rejected' }}</td>
                            <td>
                                <button class="btn btn-info btn-sm">View</button>
                                
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>

    
@endsection