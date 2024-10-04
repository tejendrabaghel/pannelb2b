@extends('admin/include.layout')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Add New User</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Add User</li>
    </ol>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        {{-- <br>
        <strong>User Created:</strong><br>
        <strong>Username:</strong> {{ session('username') }}<br>
        <strong>Name:</strong> {{ session('name') }} --}}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            New User Form
        </div>
        <div class="card-body">
            <form action="{{ route('admin.users.store') }}" method="POST">
                @csrf
                <!-- Name -->
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                </div>

                <!-- Email -->
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                </div>

                <!-- Phone -->
                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" maxlength="10" required>
                </div>

                <!-- Pin -->
                <div class="form-group mb-3">
                    <label for="pin">Pin</label>
                    <input type="text" class="form-control" id="pin" name="pin" placeholder="Enter Pin Code" maxlength="6" required>
                </div>

                <!-- Owner -->
                <div class="form-group mb-3">
                    <label for="owner">Owner</label>
                    <input type="text" class="form-control" id="owner" name="owner" placeholder="Enter Owner's Name" required>
                </div>

                <!-- Balance -->
                <div class="form-group mb-3">
                    <label for="balance">Balance</label>
                    <input type="number" class="form-control" id="balance" name="balance" placeholder="Enter Balance" required>
                </div>

                <!-- Role -->
                <div class="form-group mb-3">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="">Select Role</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                        <option value="Retailer">Retailer</option>
                        <option value="Distributor">Distributor</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
