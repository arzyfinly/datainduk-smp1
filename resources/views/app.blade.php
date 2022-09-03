<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>SMPN 1 SUMENEP</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-bar-rating/css-stars.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
              <div class="nav-profile-image">
                <img src="{{asset('assets/images/faces/face28.png')}}" alt="profile" />
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                <span class="font-weight-semibold mb-1 mt-2 text-center">Admin</span>
              </div>
            </a>
          </li>
          <li class="nav-item pt-3">
            <a class="nav-link d-block" href="index.html">
              <img class="sidebar-brand-logo" src="{{asset('assets/images/logosmp1.png')}}" alt="" />              
            </a>
          </li>
          @include('layouts.sidebar')
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('layouts.topbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
                <a href="#"><h3 class="page-title">Home</h3></a>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page"> Admin </li>
                    </ol>
                </nav>
            </div>
            <!-- first row starts here -->
            <div class="row">
              <div class="col-xl-12 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Striped Table</h4>
                      <p class="card-description"> Add class <code>.table-striped</code>
                      </p>
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>User</th>
                              <th>First name</th>
                              <th>Progress</th>
                              <th>Amount</th>
                              <th>Deadline</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="py-1">
                                <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                              </td>
                              <td>Herman Beck</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td>$ 77.99</td>
                              <td>May 15, 2015</td>
                            </tr>
                            <tr>
                              <td class="py-1">
                                <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                              </td>
                              <td>Messsy Adam</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td>$245.30</td>
                              <td>July 1, 2015</td>
                            </tr>
                            <tr>
                              <td class="py-1">
                                <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                              </td>
                              <td>John Richards</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td>$138.00</td>
                              <td>Apr 12, 2015</td>
                            </tr>
                            <tr>
                              <td class="py-1">
                                <img src="../../assets/images/faces-clipart/pic-4.png" alt="image" />
                              </td>
                              <td>Peter Meggik</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td>$ 77.99</td>
                              <td>May 15, 2015</td>
                            </tr>
                            <tr>
                              <td class="py-1">
                                <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                              </td>
                              <td>Edward</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td>$ 160.25</td>
                              <td>May 03, 2015</td>
                            </tr>
                            <tr>
                              <td class="py-1">
                                <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                              </td>
                              <td>John Doe</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td>$ 123.21</td>
                              <td>April 05, 2015</td>
                            </tr>
                            <tr>
                              <td class="py-1">
                                <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                              </td>
                              <td>Henry Tom</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td>$ 150.00</td>
                              <td>June 16, 2015</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              {{-- <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © ActualComputer 2020</span> --}}
              {{-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span> --}}
              <span class="copyright">
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script>, SMPN 1 SUMENEP
            </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot/jquery.flot.stack.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>