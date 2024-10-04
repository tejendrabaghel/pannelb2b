<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Phone Money</title>
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
            {{-- <form id="paymentForm" class="space-y-8" action="{{ route('admin.login') }}" method="POST"> --}}
              <form id="paymentForm" class="space-y-8" action="{{route('login')}}" method="POST">
                @csrf <!-- Include CSRF token for security -->

                <div class="login">
                    <h1 class="flex justify-center text-3xl font-bold">
                        <span style="color: #FF6600">Admin</span> <span style="color: #007BFF">Login</span>
                    </h1>
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium mb-1">Email <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your Email" required>
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium mb-1">Password<span class="text-red-500">*</span></label>
                    <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your Password" required>
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

{{-- 
<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login--Admin</title>

    <meta name="description" content="" />
   
    <!-- Favicon -->
  
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/icons/newlogo-fav.jpg') }}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -
 <!-- Content -->

 <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
               <center>
                <span class="app-brand-text demo text-body fw-bolder">
                    <img src="{{ asset('assets/img/icons/new-logo.jpg') }}" width="70%"  alt="">
                </span>
               </center>
              </a>
            </div>
               <!-- Display Error for Email -->
        @error('email')
        <div style="color: red;">
            {{ $message }}
        </div>
    @enderror
</div>
            <!-- /Logo -->
            <h4 class="mb-2">Welcome to PhoneMoney! 👋</h4>
       

            <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                  @csrf 
              <div class="mb-3">
                <label for="email" class="form-label">Email or Username</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                 name="email"
                  placeholder="Enter your email or username"
                  autofocus
                />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                  <a href="auth-forgot-password-basic.html">
                    <small>Forgot Password?</small>
                  </a>
                </div>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                  name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password"
                  />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me" />
                  <label class="form-check-label" for="remember-me"> Remember Me </label>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
              </div>
            </form>

            <p class="text-center">
              <span>New on our platform?</span>
             
            </p>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>
   <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html> --}}
