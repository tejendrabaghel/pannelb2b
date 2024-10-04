@extends('admin/include.layout')

@section('content') 
<div class="container-fluid px-4">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
        <li class="breadcrumb-item active">All User</li>
    </ol>
    
   
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="card-body">
        <table id="datatablesSimple" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Aadhar</th>
                    <th>PAN</th>
                    <th>City</th>
                  
                    <th>State</th>
                    <th>PinCode</th>
                    <th>Outlet Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Aadhar</th>
                    <th>PAN</th>
                    <th>City</th>
                  
                    <th>State</th>
                    <th>PinCode</th>
                    <th>Outlet Name</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
            <tbody> 
               
                                <!-- Dummy Data -->
                                @for($i = 1; $i <= 50; $i++)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ 'Name '.$i }}</td>
                                    <td>{{ 'Username'.$i }}</td>
                                    <td>{{ rand(100000000000, 999999999999) }}</td>
                                    <td>{{ 'PAN'.$i.rand(1000, 9999) }}</td>
                                    <td>{{ 'City '.$i }}</td>
                                    <td>{{ 'State '.$i }}</td>
                                    <td>{{ rand(100000, 999999) }}</td>
                                    <td>{{ 'Outlet '.$i }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Preview</button>
                                        <button class="btn btn-warning btn-sm">Deactivate</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                @endfor
            </tbody>
        </table>
    </div>
</div>
    
@endsection