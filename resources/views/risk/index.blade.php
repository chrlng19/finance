<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Risk Management</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/FMS.png" rel="icon">
  <link href="assets/img/FMS.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .modal-container {
      z-index: 1000;
      /* Adjust the value as needed */
    }

    .btn-secondary {
      background-color: #6c757d;
      /* Background color */
      color: #fff;
      /* Text color */
      border: none;
      /* No border */
      padding: 10px 20px;
      /* Padding */
      border-radius: 4px;
      /* Rounded corners */
      text-decoration: none;
      /* No underline */
    }

    .btn-secondary:hover {
      background-color: #5a6268;
      /* Background color on hover */
    }
  </style>

<style>
  /* Style for the notification */
  #notification {
    position: fixed;
    top: 20px; /* Adjust top position as needed */
    right: 20px; /* Adjust right position as needed */
    background-color: #333;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    z-index: 9999; /* Ensure the notification is on top of other elements */
    display: none; /* Initially hide the notification */
  }
</style>

</head>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="dashboard" class="logo d-flex align-items-center">
      <img src="assets/img/FMS.png" alt="">
      <span class="d-none d-lg-block">FINANCIAL GUARDIANS</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->

      <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
        </a><!-- End Notification Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            You have 4 new notifications
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-exclamation-circle text-warning"></i>
            <div>
              <h4>Lorem Ipsum</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>30 min. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-x-circle text-danger"></i>
            <div>
              <h4>Atque rerum nesciunt</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>1 hr. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-check-circle text-success"></i>
            <div>
              <h4>Sit rerum fuga</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>2 hrs. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-info-circle text-primary"></i>
            <div>
              <h4>Dicta reprehenderit</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>4 hrs. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="dropdown-footer">
            <a href="#">Show all notifications</a>
          </li>

        </ul><!-- End Notification Dropdown Items -->

      </li><!-- End Notification Nav -->

      <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-chat-left-text"></i>
        </a><!-- End Messages Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
          <li class="dropdown-header">
            You have 3 new messages
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Maria Hudson</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>4 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Anna Nelson</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>6 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
              <div>
                <h4>David Muldon</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>8 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="dropdown-footer">
            <a href="#">Show all messages</a>
          </li>

        </ul><!-- End Messages Dropdown Items -->

      </li><!-- End Messages Nav -->

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="assets/img/man.png" alt="Profile" class="rounded-circle">
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <img src="assets/img/man.png" alt="Profile" class="round-circle" style="width: 100px; height: 100px;">
            <h6>Settings</h6>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="profile">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>


          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
this.closest('form').submit();" style="color: black;" class="dropdown-item d-flex align-items-center">
                <i class="bi bi-gear"></i>
                {{ __('Log Out') }}
              </x-dropdown-link>

            </form>

            <hr class="dropdown-divider">
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header>
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="dashboard">
        <i class="ri-dashboard-3-line"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link " href="risk">
        <i class="ri-file-shield-2-line"></i>
        <span>Risk Management </span>
      </a>
    </li><!-- End Dashboard Nav -->


</aside>

<body>
  <!-- <div id="notification" class="notification" style="display: none;">
    <span class="message">Form created successfully.</span>
</div> -->
  @if (session('success'))
  <div id="notification" class="notification" style="display: block; z-index: 100;">
    <span class="message">{{ session('success') }}</span>
  </div>
  @endif

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Risk Management</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item active">Risk Management</li>
        </ol>
      </nav>
    </div>

    <!-- resources/views/pop-up.blade.php -->

    <!-- First Modal -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel1">Risk Ranking Definition</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Notes:</h5>
                <div style="text-align: center;">
                  <img src="assets/img/RiskRanking.png" alt="Risk" width="100%" height="330">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Button to trigger the first modal -->
    <button type="button" class="btn btn-warning rounded-pill" data-toggle="modal" data-target="#myModal1">
      Risk Ranking Definition
    </button>

    <!-- Second Modal -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel2">Manage Graph Definition</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Notes:</h5>
                <div style="text-align: center;">
                  <img src="assets/img/ManageGraph.png" alt="Risk" width="100%" height="100%">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Button to trigger the second modal -->
    <button type="button" class="btn btn-warning rounded-pill" data-toggle="modal" data-target="#myModal2">
      Manage Graph Definition
    </button>

    <div class="card-body">
      <div class="card-title d-flex justify-content-between">
        <h5>Risk Management Tables <span>| Today</span></h5>
        <button type="button" class="btn btn-info" onclick="window.location.href='{{ route('risk.create') }}'">
          <i class="bi bi-info-circle"></i> New Risk Entry
        </button>



      </div>




      <table class="table table-borderless datatable">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Client Name</th>
            <th scope="col">Company Name</th>
            <th scope="col">Industry </th>
            <th scope="col">Risk Manager</th>
            <th scope="col">Commercial Budget</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($clients as $client)
          <tr>
            <th>{{ $client->id}}</th>
            <td>{{ $client->client_name}}</td>
            <td>{{ $client->company_name}}</td>
            <td>{{ $client->industry_sector }}</td>
            <td>{{ $client->risk_manager }}</td>
            <td>₱{{ $client->commercial_budget }}</td>
            <!--  <td>{{ $client->description }}</td>
            <td>{{ $client->facility }}</td>
            <td>{{ $client->risk_owner }}</td>
            <td>{{ $client->date_raised }}</td>
            <td>{{ $client->risk_occurrence }}</td>
            <td>{{ $client->probability }}</td>
            <td>{{ $client->hsse_health_safety }}</td>
            <td>{{ $client->hsse_security }}</td>
            <td>{{ $client->hsse_environment }}</td>  -->
            <td>
              <span class="badge 
                @if ($client->status == 'Pending') 
                    bg-warning text-dark;
                @elseif ($client->status == 'Approve') 
                    bg-success text-dark;
                @elseif ($client->status == 'Rejected') 
                    bg-danger text-dark;
                @elseif ($client->status == 'Waiting') 
                    bg-info;
                @else 
                    bg-secondary; /* Default style */
                @endif">
                {{ $client->status }}
              </span>
            </td>
            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ClientView">
            <i class="ri ri-eye-fill"></i>
              </button></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    </div>
    </div><!-- End Recent Sales -->

    <!-- Modal View -->
  <div class="modal fade" id="ClientView" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Risk Information</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <table class="table table-borderless datatable">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Description</th>
            <th scope="col">Facility</th>
            <th scope="col">Risk Owner</th>
            <th scope="col">Date Raised</th>
            <th scope="col">Risk Occurrence</th>
            <th scope="col">Risk Bearer</th>
            <th scope="col">Probability</th>
            <th scope="col">Risk Health & Safety</th>
            <th scope="col">Risk Security</th>
            <th scope="col">Risk Environment</th>
          </tr>
        </thead>
        <tbody>
          @foreach($clients as $client)
          <tr>
            <th>{{ $client->id}}</th>
            <td>{{ $client->description }}</td>
            <td>{{ $client->facility }}</td>
            <td>{{ $client->risk_owner }}</td>
            <td>{{ $client->date_raised }}</td>
            <td>{{ $client->risk_occurrence }}</td>
            <td>{{ $client->risk_bearer }}</td>
            <td>{{ $client->probability }}</td>
            <td>{{ $client->hsse_health_safety }}</td>
            <td>{{ $client->hsse_security }}</td>
            <td>{{ $client->hsse_environment }}</td> 
          </tr>
          @endforeach
        </tbody>
      </table>
      </div>

   <!-- Notification element -->
<div id="notification"></div>

<!-- Script to display the notification -->
<script>
  // Set the duration (in milliseconds) for the notification to be displayed
  var duration = 5000; // 5 seconds (adjust as needed)

  // Hide the notification after the specified duration
  setTimeout(function() {
    // Display the notification
    document.getElementById('notification').innerHTML = 'Added New Information';
    document.getElementById('notification').style.display = 'block';
  }, duration);
</script>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>


    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </main>
</body>

</html>