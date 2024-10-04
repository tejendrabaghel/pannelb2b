
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard - Analytics</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/icons/newlogo-fav.jpg') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Add Custom CSS -->
    @yield('custom-css')

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!-- Config -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="/admin" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bolder ms-2">
                <img src="{{ asset('assets/img/icons/new-logo.jpg') }}" width="40%" style="padding-right: 50px" alt="">
              </span>
            </a>
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>
          <div class="menu-inner-shadow"></div>
          <ul class="menu-inner py-1">
            <li class="menu-item">
              <a href="{{route('customer/dashboard')}}" class="menu-link">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAR1JREFUSEvt1E0uREEQwPHfnMJC4jNCWNqRuIG4jI0bcCAuICwtJhJi4WMh4RJIyXvS2pt5Ncbs9O516v3/1V1VPTDjNZgx3ySCOZziDft4zSSXFQT8EisN9B47GUlGEPBzrOGpESziDnt9kj5BmfkzdhvBBebRe5Jxgi54eYKUZJRgHLytbVxTr6RLkIGnJbVgEnhKUgrKbomfl/GY6XUs4aGJ/dZdpeAaWwWwr8Nq93uxcYXt+C4ht1j/I8ENNmtBy24zaeUHOMZGlXJADnHW7Nf/fW53XUMd+IKoT9eKQVudVtCZGer9X5/gX/Cjdqm7naYG8WIuJCe4DovJjxfga3W1afT9STV0Gd8QR8VcjJyDDCwdM+l7kwa3gR/DDlQZ8ZOLqAAAAABJRU5ErkJggg=="/>
                <div data-i18n="Analytics">Home</div>
              </a>
            </li>

            <!-- Example of submenu -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPJJREFUSEvt1TFOAkEYhuGHmADHsNGCcA8bCgsPYUNLTKSDBENL4x1sbTyHsZLCY6ANZslANsvCzGbExMRJptn993tn3n93p+XEo3XifE0A51iEBQ3xkbK4FEAHd2F2Q+gKD2F+HgPFAFd4RLH6ulHs4hYvhyCHAFsdgxQNeEattiqg0DHCGO1K+BPucYYZriv3vzDFHDttZUBMxwWWIbSP1xRtZcA6ouMS76Gmh7dI/Sa7CaCsaIKbnwYk9ntX1ngH2YAioNyHrb6ca3u/ipywumf/AZu+H+vV7yqKfcnZr+nfBzRVkFQfO9GSQnKOzGzAN0gjOhlouyZoAAAAAElFTkSuQmCC"/>
                <div data-i18n="Layouts">Fund Request</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{route('/user/fund-transfer/bank-account')}}" class="menu-link">
                    <div data-i18n="Without menu">Bank Transfer</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route('process-payment-gateway')}}" class="menu-link">
                    <div data-i18n="Without navbar">Payment Gateway</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- More menu items -->
            <li class="menu-item">
              <a href="{{route('/user/wallet/index')}}" class="menu-link">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAMZJREFUSEvt1U8KQVEUx/GPRfgzUjKgZC0WopQyEWMxsRwLkZiJEVZBTwYPcfVuz0Du9HR+3/O759xzC3I+hZz1fRWQwMboohzhbIMBFolG2sEc/QjhdOoW9UfACSW0sI4AnW+51+LTDu4CPw3oYIpmwGXmKzp+OGWZAaFeRTf5Dwjupz2qH7yTzE1OxnSGRl5jGio+eooyAw6ooI1VSOVN/KWDCYYRwunUHWqP2zTp+gg9FCNAy1uhTx9OhObr1K/+ybk4uADSZCwZKEMV0gAAAABJRU5ErkJggg=="/>
                <div data-i18n="Analytics">World Wallet</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{route('/user/commission-plane')}}" class="menu-link">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAR1JREFUSEvt1btKBEEQheFvETUTczHwBcRUBC+BGAhmPoWBoKYarKGgRr6HKAYiKBiZ+gCCCBuLkYmXbRlh6O3ZadZdTLbD4lT93aemahoGfBoDrm8IqHW4bNEtlmsz8gR3WAnSMuArLzdb9VO7V8AHbrDWBfcnwC6O0cR+BSQbsFS8NPgazgU2MIlHTOcCgm4C51GzFzFWWPKMObziEutR8Wts4u03nhq0GTwlbhV8X8AD9nCU0EyhVY6nAON4TyTv4ATzuMdIQhNin3WA7ba/p1Fyyve4NyFlC2dVgKo5eMFswvcAGC16k+pz9ld00LbjsIvvVaOQDQgFroqhSvneF0D2figJO17Qz2UX1shqvIt6uWVtzvCP9v8WfQPMWC8Z5nK9/gAAAABJRU5ErkJggg=="/>
                <div data-i18n="Analytics">Commission Plans</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Services</span>
            </li>
       
            {{-- <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-angular "></i>
                <div data-i18n="Layouts">
                    AEPS</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/admin/AEPS/balance-enquiry" class="menu-link">
                    <div data-i18n="Without menu">Balance Enquary</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/admin/AEPS/cash-withdrawal" class="menu-link">
                    <div data-i18n="Without navbar">Withdrawl</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/admin/AEPS/mini-statement" class="menu-link">
                    <div data-i18n="Without navbar">Mini Statement</div>
                  </a>
                </li>
               
              </ul>
            </li>
            
            <li class="menu-item">
              <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-wallet"></i>
                <div data-i18n="Analytics">BBPS</div>
              </a>
            </li>
         
           <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-angular "></i>
              <div data-i18n="Layouts">
                  Recharge</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="layouts-without-menu.html" class="menu-link">
                  <div data-i18n="Without menu">Mobile Recharge</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-without-navbar.html" class="menu-link">
                  <div data-i18n="Without navbar">DTH Recharge</div>
                </a>
              </li>
             
            </ul>
          </li>
        
          <li class="menu-item">
            <a href="index.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-wallet"></i>
              <div data-i18n="Analytics">Money Transfer</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="index.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-wallet"></i>
              <div data-i18n="Analytics">Insurance</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/admin/account-opening" class="menu-link">
              <i class="menu-icon tf-icons bx bx-wallet"></i>
              <div data-i18n="Analytics">Bank Account Opening</div>
            </a>
          </li> --}}

          <li class="menu-item">
            <a href="{{route('/user/services/services')}}" class="menu-link">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAJBJREFUSEvtlE0OQDAUhD+nsBYWDiK2LuMQTiSxcA4r1m5BiIq/Iq1KmrTbduZ7b9KMh+HjGfbnd0AGFECsuFkD5EAp9McNesBXNBeyDghlgGG5UI3upD8aOYCL6PEDu4gsiGjqkeBxzvsHLRDJuigFKk1AAtRXAPHFNP1X+dxz27IzDvhq8p2Pau+/HsZ+wAifXyEZA1BA5wAAAABJRU5ErkJggg=="/>
              <div data-i18n="Analytics">Other Services</div>
            </a>
          </li>
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Report</span>
          </li>
          <li class="menu-item">
            <a href="{{route('statement/account-stmt')}}" class="menu-link">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAATVJREFUSEu11b8rR1EYx/HXt5gMymKjRIrB32CwkhhtRgazjEosFgZ/gE0M/gZ/gIFSSmxKMku4R/dbt+v+OPdyz3KG89zP+3k+z7nP6el49TrWVwVYxS6mGyZxhx2che+qADeYaSjeD7/FbB3gq0T8FRfp2TJGSuJ+kq+qoAjwnIjPIexhjeI63fOcVoBjbOaUjrBRUEUrwDlW2gL6lvRtK7LoHVN4SiEDuMd4TAUxgKDzicvEqhcsYCy2ybGA2Jv7qwd1gHB+ggM8pJQJbGP9rxaFu7+YWHJVkv58attQ5rxRBWtJc09rvNnCYVvAYDJfPmoAw3hrC4htbDau1qJ/H3b5WxTG9R4mG6ZfOq7zgIa6xeHZado54LHit6+qpvLZzR4uYb/FExkN+BfPC1+dTpRT0W88zz4ZLvda9wAAAABJRU5ErkJggg=="/>
              <div data-i18n="Analytics">Account Statement</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{route('statement/fund-report')}}" class="menu-link">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOhJREFUSEvt1LFKA0EUheFvyzS+gCCIhWmFYBU7e8ljWMfGKq2pLawCeQrrFGlsLESwCwo+QQrbmIFZWJdF2Z0NxJBpppiZ/8w9c+dkNjyyDfPtlsAV7tBNtO0NN3gMnKJFnzhMhOfHFzgpC6ziauq7/OAUYXuB3P/ttCi07j16mGCKB/QxxzVeYwmNKnha9/V5BARo+C9hzkcQuUgR+EInAg6wrPgveUc2quAZZxE6wLDtCi4xijbNokCrb1AnQRpZ1IrAB47qkH7Z+47jctiFuB7jNFHkBbdVcZ3IrT6eGs1/Xur/C3wDvQs0GWSqx0IAAAAASUVORK5CYII="/>
              <div data-i18n="Analytics">Add Fund Report</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{route('/user/AEPS/aeps-statement')}}" class="menu-link">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAudJREFUSEu11lmo1WUUBfCfgSEVGNmcJaGV2kiUlUUUgdoAGaRZEQhCVL5VWpBFYYUG9WhQYD5UWFAQFEE09yChFVY2pzaaNIGVFYr2LdlHjqfjwftwv5f7v+d8e1hrr73+Z4RhPiOGOb9BBU7GfFyJo7sa+QPP4V28hi8HNdmvwEEt4WO4dh/QbceDuB/b+t3vLXAA3sdJ+LaCX8XXXcEH43zchGntzv74EDOxobdIb4FHK3A9LsAmjMEsHIlf8RXewD84Cs/j3Bb3E86smN11uguMLz7/rYuf4g7cjQN7OvuhGnmRXXN8CLfjI0xtz3927ncXCI934XHciOvwVF0MbUl2DM7DhEr0XlfhZwvpk43SG/oVCOyLcAVewseIkm7DIz0IjqsZHYanMbuh/RtrcSgmY3NiuhF0Ep6I77EVv+Bw7KwCt2IFfqv/gzBI38QlOAef4fd+CD7BpEbLCfir0fRjFRmNyHFGS/ByS/hFCeBnjGuI11TX87B8kIoSnCSXVaJvWkCo6FAUtOH56tbtO0XnjiaM69tMwnsUdzwikr4qWlBqeLgUETrynICzSyFR0+pCem+j+D7sV9yfgv+h6J5BdB5aMqzTEQQvNEu4tBJE4+n41GYfH9Rc0nHmNbfR9QRWlbr6IsiHUUQsIot2Vs3gbUxpye/B4opc1lRyM5a2hbsTsZeoJk4Qkez2p95NPgTRdpYs0svCHNv0vQ6j2taeVioZ2+j4rjY7uxEaO83dgjjCrrM3s4uKIs0LEQTZ6CUN/iuNhukVm+Fmc+NDOfGmJH6mNTFnUIHOdysbkmuQ4YWyjbUTkXK03nsmFvI95jDofRATu6q2OFIN3wvbTizCA+W42fAsZMwwJ0Pfw1EHFbi8/CeyzJAvbpS93v6+VTtwRqnpc6T7vmdQgSPKgmMX8ZwMM5LMeyIbHM/JNsc2YulDLpAXSdQRmxhZEszwtyD20fk+b7I8D7nA3mKG9Pmw/6r4D/JUohlC4HcUAAAAAElFTkSuQmCC"/>
              <div data-i18n="Analytics">Aeps Statement</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{route('statement/fund-transfer-report')}}" class="menu-link">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPJJREFUSEvt1TFOAkEYhuGHmADHsNGCcA8bCgsPYUNLTKSDBENL4x1sbTyHsZLCY6ANZslANsvCzGbExMRJptn993tn3n93p+XEo3XifE0A51iEBQ3xkbK4FEAHd2F2Q+gKD2F+HgPFAFd4RLH6ulHs4hYvhyCHAFsdgxQNeEattiqg0DHCGO1K+BPucYYZriv3vzDFHDttZUBMxwWWIbSP1xRtZcA6ouMS76Gmh7dI/Sa7CaCsaIKbnwYk9ntX1ngH2YAioNyHrb6ca3u/ipywumf/AZu+H+vV7yqKfcnZr+nfBzRVkFQfO9GSQnKOzGzAN0gjOhlouyZoAAAAAElFTkSuQmCC"/>
              <div data-i18n="Analytics">Fund Transfer Report</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{route('statement/money-transfer-report')}}" class="menu-link">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAANdJREFUSEvt1DFqAkEUANDnHQJiK4jYBmyCIZ7CC9h5AO+RIm3AkwRBLGzSRhBrBe+gDEjYJLs7OutWZur5/83/f2Yaal6NmvO7b2CKGfZlbU5t0QRv2OAZuyIkFWhiiTa2eCqqJBUIBw7IHN0ypAoQkAcsypA84FjhbXziMRt/a+ALvRhQoYC/oVVnED1MHvCBYTSyeMOPnHnACv06gewjWmOAQypYNIObIWVD/o28xD62vCpjt6h1/g46GOP92lbFgJAvICO8Xps87L8ESMn7HfMPRNt3AmGoIBm8JKweAAAAAElFTkSuQmCC"/>
              <div data-i18n="Analytics">Money Transfer Report</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{route('statement/wallet-transfer-report')}}" class="menu-link">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAMhJREFUSEvt1DEOAUEUxvGfRK0kkWi4gFs4iUolUZA4gwM4CIlb0OioFFoXIJssZjc2YseqTDeT+d7/vfe9mZqKV63i+H4KSGBzjNAqUdkeE6xCbVjBAuMSgUPJAb0iwBlNDLApAbqmmkzbw839QuWAEslnJBkvXlVwQSOS8vDiFSB2dDNe/AGJVfnx/HqL/oCPX8TXPchnUAg4oY0+th/n/RQUApYYRgQOpUd0k4PwJdcxSyGdCNAOU6zzgIiYxdLYj+1tUpUDbgOALxmvJD5dAAAAAElFTkSuQmCC"/>
              <div data-i18n="Analytics">Wallet Transfer Report</div>
            </a>
          </li>
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Support</span>
          </li>

          <li class="menu-item">
            <a href="index.html" class="menu-link">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZpJREFUSEvt1L1L11EUx/GXOUQQhARRUJJ/QBQ1NxYZRUJ/gGDSAw1tDT1QELSIS4MFUVOzIRJB6CLSqEGTGFTUUEPRFERB3SNX+Hr5PXTJ39YZL+d83vd8zrm3T4+jr8f6ugG24ixO4CD24zfe4RWeYxo/2120E2AYU1m0U6NvcBHzrZLaAW6l5Nu5IATuYzl18zqfHcBhXMZQPruKiRLSChDCAYi2b2ISv9q0EBZexzX04wruNXNLwCnM4geOY+Evl+B0mtFT1mZ6NNW+XK9rArZjFbtz6+F/Tax3voKwcG3wTcClPNTwOTYmtqUmwq632JM2bAQzJeAZTuIcHtcoN3JvpFncwUOcLwEfsDfdYhQv0up9qoSEtWeSxQ+wlGZ5pAR8x7YsGuLRak18ThbvygVfsbMElJ53e+UlvGV9U+Q/oKtF37CjYey/zCC0Bsohj+X93YI5HKtZocbDjBccWk9KQKXehvRBvMdH7Ov02XWCtNuy+Fbu5l/gUYKMbxagvEzc/hC+bDYgBBdxAfGaN0TtplTPqeeAPwR2TRktA7nHAAAAAElFTkSuQmCC"/>
              <div data-i18n="Analytics">Support Ticket</div>
            </a>
          </li>
          </ul>
        </aside>
        <!-- /Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
                </div>
              </div>

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('coustomer.logout')}}">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          <!-- /Navbar -->

          <!-- Main Content -->
          <main>
            @yield('content')
          </main>

        </div>
        <!-- /Layout page -->
      </div>

      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- /Layout wrapper -->
{{-- pin --}}

    <!-- Core JS -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    <!-- GitHub buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{asset('assets/js/datatables-simple-demo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
  </body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="This Design for code Zack coding Hub Website for Laravel Classes" />
        <meta name="author" content="Tanmay Pal" />
        <meta name="group" content="Laravel-10X" />
        <title>Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
      
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        @yield('custom-css')
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Home
                            </a>
                            <div class="sb-sidenav-menu-heading">Services</div>
                        
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Support</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                  @yield('content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy;  Admin 2024</div>
                            <div>
                                <a href="http://sarveshpal.xyz">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

 --}}
