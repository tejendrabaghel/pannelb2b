<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login | Phone Money</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="img/fav.ico" type="image/x-icon">
    <style>
        /* Custom styles for dropdown visibility */
        .hidden { display: none; }
        .sidebar { transition: transform 0.3s ease; }
        .button { background-color: #007BFF; } /* Phone Money branding */
        .button:hover { background-color: #0056b3; transition: 0.3s ease; }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        /* Responsive styles */
        @media (max-width: 768px) {
            .text-lg-md { font-size: 1rem; }
            .text-3xl-md { font-size: 1.5rem; }
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-center px-16 min-h-screen">
        <!-- Left Section: Brand and Description -->
        <div class="flex flex-col items-center md:items-start md:w-1/2 mb-8 md:mb-0">
            <h1 class="text-blue-600 text-4xl md:text-7xl font-bold text-3xl-md">
                <span style="color: #FF6600">Phone</span><span style="color: #007BFF">Money</span>
            </h1>
            <p class="text-black-600 text-lg font-extrabold md:text-xl mt-2 text-lg-md text-center md:text-left ml-2" id="auto-text">
                Simplifying Your Financial Transactions
            </p>
        </div>

        

        <!-- Login Form Section -->
        <div class="bg-white p-6 rounded-lg shadow-2xl max-w-lg w-full">
            <!-- Error messages -->
        @if($errors->any())
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <form id="paymentForm" class="space-y-8" action="{{ route('customer.loginF') }}" method="POST">
                @csrf <!-- Include CSRF token for security -->

                <div class="login">
                    <h1 class="flex justify-center text-3xl font-bold">
                        <span style="color: #FF6600">User</span> <span style="color: #007BFF">Login</span>
                    </h1>
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium mb-1">Email <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your Email" required>
                </div>

                <!-- Username Input (used as password) -->
                <div>
                    <label for="password" class="block text-sm font-medium mb-1">Password<span class="text-red-500">*</span></label>
                    <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Username as Password" required>
                </div>

                <!-- Log In Button -->
                <div class="flex justify-center">
                    <button type="submit" class="w-full md:w-auto button text-white px-6 py-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition-colors duration-300">
                        Log In
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
