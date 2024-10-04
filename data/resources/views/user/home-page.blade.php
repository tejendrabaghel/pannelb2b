@extends('user/include.layout')

@section('custom-css')
<style>
    .service-icon
    {
        width: 100%;
    }
    .service-text
    {
        text-align: center;
        font-size: 15px
    }
</style>
    
@endsection
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="row">
            <div class="col-lg-5 mb-4 order-0">
              <div class="card">
                <div class="d-flex align-items-end row">
                  <div class="col-sm-7">
                    <div class="card-body">
                      <h5 class="card-title text-primary">Good Morning ! Prahlad Aryans! 🎉</h5>
                      <p class="mb-4">
                        Wallet <span class="fw-bold"> ₹ 42.00</span> 
                      </p>

                    </div>
                  </div>
                  <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                      <img
                        src="../assets/img/illustrations/man-with-laptop-light.png"
                        height="140"
                        alt="View Badge User"
                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                        data-app-light-img="illustrations/man-with-laptop-light.png"
                      />
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="card mt-2">
                <p class="h3 m-1 text-center"><span class="text-success1">Latest</span> <span class="text-info1">News</span></p>
                <marquee class="text-dark h5">Welcome To Code Graphi Open Monday To Saturday 10:00AM to 05:30PM
                </marquee>
                
            </div>
            </div>
           


            <div class="col-lg-7 col-md-4 order-1">
                <div class="row">
                    <p class="h2 text-success1">Services</p>
                   <p class="h5 text-info1">Look A glance towards services</p>
                    {{-- card start --}}
                    <div class="col-lg-3 col-md-12 col-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <a href="{{route('cash.withdrawal.form')}}">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="">
                               
                                <img
                                  src="{{asset('assets/img/icons/AEPS.png')}}"
                                  class="service-icon"
                                />
                              </div>
                             
                            </div>
                            
                            <h3 class="card-title mb-2 service-text">AEPS</h3>
                           
                          </div>
                        </a>
                        </div>
                      </div>
                      {{-- card end --}}
                        {{-- card start --}}
                    <div class="col-lg-3 col-md-12 col-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <a href="{{route('/user/bbps/bbps-services')}}">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="">
                                <img
                                src="{{asset('assets/img/icons/BBPS.png')}}"
                                  alt="chart success"
                                  class="service-icon"
                                />
                              </div>
                             
                            </div>
                            
                            <h3 class="card-title mb-2 service-text">BBPS</h3>
                           
                          </div>
                        </a>
                        </div>
                      </div>
                      {{-- card end --}}
                        {{-- card start --}}
                    <div class="col-lg-3 col-md-12 col-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <a href="{{route('/user/money-transfer/money-transfer')}}">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="">
                                <img
                                  src="{{asset('assets/img/icons/money-transfer.png')}}"
                                  alt="chart success"
                                  class="service-icon"
                                />
                              </div>
                             
                            </div>
                            
                            <h3 class="card-title mb-2 service-text">Money Transfer</h3>
                           
                          </div>
                        </a>
                        </div>
                      </div>
                      {{-- card end --}}
                        {{-- card start --}}
                    <div class="col-lg-3 col-md-12 col-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <a href="{{route('/user/mobile/mobile-recharge')}}">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="">
                                <img
                                      src="../assets/img/icons/mobile-recharge.png"
                                  alt="chart success"
                                  class="service-icon"
                                />
                              </div>
                             
                            </div>
                            
                            <h3 class="card-title mb-2 service-text">Mobile Recharge</h3>
                           
                          </div>
                        </a>
                        </div>
                      </div>
                      {{-- card end --}}
                        {{-- card start --}}
                    <div class="col-lg-3 col-md-12 col-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <a href="{{route('/user/dth/dth-recharge')}}">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="">
                                <img
                                     src="{{asset('assets/img/icons/dth-recharge.jpg')}}"
                                  alt="chart success"
                                  class="service-icon"
                                />
                              </div>
                             
                            </div>
                            
                            <h3 class="card-title mb-2 service-text">DTH Recharge</h3>
                           
                          </div>
                        </a>
                        </div>
                      </div>
                      {{-- card end --}}
                        {{-- card start --}}
                    <div class="col-lg-3 col-md-12 col-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <a href="{{route('/user/wallet/index')}}">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="">
                                <img
                                     src="{{asset('assets/img/icons/wallettowallet.png')}}"
                                  alt="chart success"
                                  class="service-icon"
                                />
                              </div>
                             
                            </div>
                            
                            <h3 class="card-title mb-2 service-text">Wallet To Wallet</h3>
                           
                          </div>
                        </a>
                        </div>
                      </div>
                      {{-- card end --}}
                       {{-- card start --}}
                    <div class="col-lg-3 col-md-12 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <a href="">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="">
                              <img
                                   src="{{asset('assets/img/icons/insurance.png')}}"
                                alt="chart success"
                                class="service-icon"
                              />
                            </div>
                           
                          </div>
                          
                          <h3 class="card-title mb-2 service-text">Insurance</h3>
                         
                        </div>
                      </a>
                      </div>
                    </div>
                    {{-- card end --}}
                       
                     {{-- card start --}}
                     <div class="col-lg-3 col-md-12 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <a href="">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="">
                              <img
                                   src="{{asset('assets/img/icons/account-opening.png')}}"
                                alt="chart success"
                                class="service-icon"
                              />
                            </div>
                           
                          </div>
                          
                          <h3 class="card-title mb-2 service-text">Account Opening</h3>
                         
                        </div>
                      </a>
                      </div>
                    </div>
                    {{-- card end --}}
                     {{-- card start --}}
                     <div class="col-lg-3 col-md-12 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <a href="">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="">
                              <img
                                   src="{{asset('assets/img/icons/demat.jpeg')}}"
                                alt="chart success"
                                class="service-icon"
                              />
                            </div>
                           
                          </div>
                          
                          <h3 class="card-title mb-2 service-text">Demat Account</h3>
                         
                        </div>
                      </a>
                      </div>
                    </div>
                    {{-- card end --}}

                     {{-- card start --}}
                     <div class="col-lg-3 col-md-12 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <a href="">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="">
                              <img
                                   src="{{asset('assets/img/icons/credit-line.png')}}"
                                alt="chart success"
                                class="service-icon"
                              />
                            </div>
                           
                          </div>
                          
                          <h3 class="card-title mb-2 service-text">Credit Line</h3>
                         
                        </div>
                      </a>
                      </div>
                    </div>
                    {{-- card end --}}
                     {{-- card start --}}
                     <div class="col-lg-3 col-md-12 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <a href="">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="">
                              <img
                                   src="{{asset('assets/img/icons/credit-card.jpg')}}"
                                alt="chart success"
                                class="service-icon"
                              />
                            </div>
                           
                          </div>
                          
                          <h3 class="card-title mb-2 service-text">Credit Card</h3>
                         
                        </div>
                      </a>
                      </div>
                    </div>
                    {{-- card end --}}
                     {{-- card start --}}
                     <div class="col-lg-3 col-md-12 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <a href="">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="">
                              <img
                                   src="{{asset('assets/img/icons/investment.png')}}"
                                alt="chart success"
                                class="service-icon"
                              />
                            </div>
                           
                          </div>
                          
                          <h3 class="card-title mb-2 service-text">Investment</h3>
                         
                        </div>
                      </a>
                      </div>
                    </div>
                    {{-- card end --}}
                     {{-- card start --}}
                     <div class="col-lg-3 col-md-12 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <a href="">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="">
                              <img
                                   src="{{asset('assets/img/icons/personal-loan.jpg')}}"
                                alt="chart success"
                                class="service-icon"
                              />
                            </div>
                           
                          </div>
                          
                          <h3 class="card-title mb-2 service-text">Personal Loan</h3>
                         
                        </div>
                      </a>
                      </div>
                    </div>
                    {{-- card end --}}
                     {{-- card start --}}
                     <div class="col-lg-3 col-md-12 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <a href="">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="">
                              <img
                                   src="{{asset('assets/img/icons/business-loan.jpg')}}"
                                alt="chart success"
                                class="service-icon"
                              />
                            </div>
                           
                          </div>
                          
                          <h3 class="card-title mb-2 service-text">Business Loan</h3>
                         
                        </div>
                      </a>
                      </div>
                    </div>
                    {{-- card end --}}
                     {{-- card start --}}
                     <div class="col-lg-3 col-md-12 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <a href="">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="">
                              <img
                                   src="{{asset('assets/img/icons/other-services.png')}}"
                                alt="chart success"
                                class="service-icon"
                              />
                            </div>
                           
                          </div>
                          
                          <h3 class="card-title mb-2 service-text">Other Services</h3>
                         
                        </div>
                      </a>
                      </div>
                    </div>
                    {{-- card end --}}
                </div>
            </div>
            <div class="col-lg-6 col-md-6 order-1"></div>
            <div class="col-lg-6 col-md-6 order-1">
                <div class="card">
                    <div class="card-body text-center">
                      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="https://worldway.in/uploads/1721198396_other_service_WhatsApp%20Image%202024-07-17%20at%2012.09.17%20PM.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="https://worldway.in/uploads/1719560623_other_services_IDFC-FIRST-Bank.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="https://worldway.in/uploads/1720087590_other_services_Types-of-Insurance.jpg" class="d-block w-100" alt="...">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                    </div>
                  </div>
            </div>

    </div>
</div>
@endsection

{{-- @extends('admin/include.layout')

@section('custom-css')
    <style>
         .wallet-card {
      width: 300px;
      background: url('https://i.pinimg.com/736x/d4/e7/b2/d4e7b28e429861864acb4c82be081082.jpg') no-repeat center center;
      background-size: cover;
      color: rgb(172, 49, 230);
      padding: 20px;
      border-radius: 15px;
      text-align: left;
      position: relative;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .wallet-card h4 {
      margin: 0;
      font-weight: 500;
    }
    .wallet-card p {
      font-size: 14px;
      margin-bottom: 5px;
    }
    .wallet-amount {
      font-size: 28px;
      font-weight: bold;
      margin: 10px 0;
    }
    /* .progress {
      height: 8px;
      background-color: rgba(255, 255, 255, 0.2);
      border-radius: 5px;
    } */
    .progress-bar {
      background-color: #ffffff;
      border-radius: 5px;
    }
    .wallet-info {
      display: flex;
      justify-content: space-between;
      font-size: 14px;
    }
    .news-marquee
    {
        color: red;
        font-size: 30px;
    }
    .news-heading
    {
        color: green;
        font-size: 35px;
    }
    .card-service
    {
        border: #888484;
        box-shadow:  2px 2px 2px 2px #838181;
    }
    </style>
@endsection
@section('content')

        <div class="container mt-5">
            <div class="row">
                <main class="col-md-10 ms-sm-auto md-4">
                    
              
                    <!-- Wallet Section -->
                    <div class="row mb-4">
                      <div class="col-md-4">
                        <div class="card text-danger wallet-card">
                          <div class="card-body">
                            <h5 class="card-title">Prahlad Aryans</h5>
                            <p>Good Afternoon!</p>
                            <h3>Wallet: ₹ 42.00</h3>
                            <p>43 Pending - 72% Usage</p>
                          </div>
                        </div>
                      </div>
                      <!-- Latest News -->
                      <div class="col-md-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title news-heading">Latest News</h5>
                            <p class="news-marquee"><marquee>Welcome To World Way Open Monday To Saturday 10:00AM to 05:30PM
                            </marquee></p>
                            <p >Follow Us On Socials</a>
                          </div>
                        </div>
                      </div>
                    </div>
              
                    <!-- Services Section -->
                    <div class="row">
                      <div class="col-md-3 col-sm-6">
                        <div class="card card-service">
                          <div class="card-body text-center">
                            <img src="service-icon.png" alt="AEPS">
                            <h6 class="card-title">AEPS</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="card card-service">
                          <div class="card-body text-center">
                            <img src="service-icon.png" alt="BBPS">
                            <h6 class="card-title">BBPS</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="card card-service">
                          <div class="card-body text-center">
                            <img src="service-icon.png" alt="BBPS">
                            <h6 class="card-title">BBPS</h6>
                          </div>
                        </div>
                      </div>
                      <!-- Repeat for more services -->
                    </div>
              
                    <!-- Recent Transactions -->
                    <div class="row mt-4">
                      <div class="col-md-8">
                        <div class="card">
                          <div class="card-header">Recent Transactions</div>
                          <div class="card-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>Ref/Product</th>
                                  <th>Amount</th>
                                  <th>Type</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>66D3057699C24</td>
                                  <td>₹ 40.00</td>
                                  <td>Credit</td>
                                </tr>
                                <tr>
                                  <td>66D30566A3106</td>
                                  <td>₹ 40.00</td>
                                  <td>Debit</td>
                                </tr>
                                <!-- More transactions -->
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <!-- CRGB Section -->
                      <div class="col-md-4">
                        <div class="card">
                          <div class="card-body text-center">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="https://worldway.in/uploads/1721198396_other_service_WhatsApp%20Image%202024-07-17%20at%2012.09.17%20PM.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="https://worldway.in/uploads/1719560623_other_services_IDFC-FIRST-Bank.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="https://worldway.in/uploads/1720087590_other_services_Types-of-Insurance.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
              
                  </main>
                </div>
              </div>
            </div>
          </div>
   
@endsection --}}