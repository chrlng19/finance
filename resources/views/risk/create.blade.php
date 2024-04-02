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


</head>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="/dashboard" class="logo d-flex align-items-center">
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
      <a class="nav-link " href="/dashboard">
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
  <main id="main" class="main">
    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item"><a href="/risk">Risk Management</a> </li>
          <li class="breadcrumb-item active">New Risk Data</li>
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

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Risk Information</h5>
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <p style="color:red;">{{ $error }}</p>
        @endforeach
        @endif
        <!-- General Form Elements -->
        <form action="{{ route('submitForm') }}" method="post">
          @csrf
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Client Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="client_name">
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Company Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="company_name">
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Risk Manager:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="risk_manager">
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Commercial Budget:</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" style="width: 100%;" name="commercial_budget">
            </div>
            <!-- <div class="col-sm-2">
              <select class="form-select">
                <option value="USD">USD</option>
                <option value="php">PHP</option>
              </select>
            </div> -->
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Industry Sector:</label>
            <div class="col-sm-3">
              <select class="form-select form-select-sm" aria-label="Default select example" style="width: 100%;" name="industry_sector">
                <option selected>- Select -</option>
                <option value="Banking & Finance">Banking & Finance</option>
                <option value="Insurance">Insurance</option>
                <option value="Healthcare">Healthcare</option>
                <option value="E-Commerce">E-Commerce</option>
                <option value="Transport & Logistics">Transport & Logistics</option>
                <option value="Agriculture">Agriculture</option>
              </select>
            </div>
          </div>
          <!-- End General Form Elements -->
      </div>

      <div class="col-md-12">
        <h5 class="card-title">Risk Information</h5>
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingDescription" placeholder="description" data-bs-toggle="tooltip" data-bs-placement="top" title="Risk = Threat + Event Describe each risk as the possible threat and event which may arise from that threat" name="description">
          <label for="floatingName">Description</label>
        </div>
      </div>
      <div class="row g-3">
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="facility">
              <option selected>Select</option>
              <option value="Security">Security</option>
              <option value="Storage & Warehouse">Storage & Warehouse</option>
              <option value="Electrics & Telecomms.">Electrics & Telecomms.</option>
              <option value="Administration Block">Administration Block</option>
              <option value="Medical Center">Medical Center</option>
              <option value="Banking & Finance">Banking & Finance</option>
              <option value="Local Government Unit">Local Government Unit</option>
              <option value="Transportation">Transportation</option>
            </select>
            <label for="floatingSelect">Facility:</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingName" placeholder="description" name="risk_owner">
            <label for="floatingName">Risk Owner</label>
          </div>
        </div>
      </div>

      <div class="row mb-3"> <!-- Updated from div with class="mb-3 row" -->
        <label for="inputDate" class="col-3 col-form-label">Date Raised:</label> <!-- Adjusted column size -->
        <div class="col-sm-3"> <!-- Adjusted column size -->
          <input type="date" class="form-control" name="date_raised">
        </div>
        <label for="inputDate" class="col-3 col-form-label">Risk Occurrence:</label> <!-- Adjusted column size -->
        <div class="col-sm-3"> <!-- Adjusted column size -->
          <input type="date" class="form-control" name="risk_occurrence">
        </div>
      </div>

      <div class="row mb-3"> <!-- Adjusted class and structure -->
        <div class="col-sm-6">
          <div class="form-floating">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="risk_bearer">
              <option selected>Select</option>
              <option value="Internal">Internal</option>
              <option value="Client">Client</option>
              <option value="Contractor">Contractor</option>
              <option value="Other Stakeholder">Other Stakeholder</option>
            </select>
            <label for="floatingSelect">Risk Bearer</label>
          </div>
        </div>
      </div>

      <div style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
        <label for="customRange1" class="form-label" style="margin-bottom: 10px;">Probability </label>
        <div style="width: 400px; display: flex; align-items: center; flex-direction: column;"> <!-- Adjust width as needed -->
          <input type="range" class="form-range" id="customRange1" min="0" max="100" value="0" style="background: linear-gradient(to right, green 0%, yellow 24%, orange 78%, red 100%); width: 100%;" oninput="updateValue(this.value)" name="probability">
          <div style="display: flex; justify-content: space-between; width: 100%;">
            <span>0</span>
            <span>25</span>
            <span>50</span>
            <span>75</span>
            <span>100</span>
          </div>
          <div style="display: flex; justify-content: space-between; width: 100%;">
            <span>Rare</span>
            <span>Unlikely</span>
            <span>Possible</span>
            <span>Probable</span>
          </div>
        </div>
        <span id="rangeValue" style="margin-top: 10px;"></span>
      </div>
      <div class="row-auto">
    <h4 data-bs-toggle="tooltip" data-bs-placement="top" title="HSSE (Health, Safety, Security & Environment) check if it included in risk">| HSSE Impacts</h4>
    <div class="col-auto mb-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1" onchange="toggleRadio(this)" name="hsse_health_safety" value="Active"> <!-- Assigning value 1 for Health & Safety -->
            <label class="form-check-label" for="gridCheck1">Health & Safety</label>
        </div>
        <div id="radioGroup1" style="display: none;" name="hsse_health_safety_level">
            <input type="radio" name="radioGroup1" id="radio1" onchange="updateRiskLevel()" value="Very High"> <!-- Assigning value 5 for Fatality -->
            <label for="radio1">Fatality</label><br>
            <input type="radio" name="radioGroup1" id="radio2" onchange="updateRiskLevel()" value="High"> <!-- Assigning value 3 for Lost Time Incident -->
            <label for="radio2">Lost Time Incident</label><br>
            <input type="radio" name="radioGroup1" id="radio3" onchange="updateRiskLevel()" value="Medium"> <!-- Assigning value 2 for Medical Health Case -->
            <label for="radio3">Medical Health Case</label><br>
            <input type="radio" name="radioGroup1" id="radio4" onchange="updateRiskLevel()" value="Low"> <!-- Assigning value 1 for First Aid Case -->
            <label for="radio4">First Aid Case</label>

            <!-- Risk level box -->
            <div id="riskLevelBox" style="display: none;">
                <p>Health & Safety Risk Level: <span id="riskLevel"></span></p>
            </div>
        </div>
    </div>
    <div class="row-auto">
        <div class="col-auto mb-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck2" onchange="toggleRadio(this)" name="hsse_security" value="Active"> <!-- Assigning value 1 for Security -->
                <label class="form-check-label" for="gridCheck2">Security</label>
            </div>
            <div id="radioGroup2" style="display: none;" name="hsse_security_level">
                <input type="radio" name="radioGroup2" id="radio5" onchange="updateRiskLevel()" value="Very High"> <!-- Assigning value 5 for Security breach with major property damage and loss -->
                <label for="radio5">Security breach with major property damage and loss</label><br>
                <input type="radio" name="radioGroup2" id="radio6" onchange="updateRiskLevel()" value="High"> <!-- Assigning value 4 for Security breach with serious property damage and loss -->
                <label for="radio6">Security breach with serious property damage and loss</label><br>
                <input type="radio" name="radioGroup2" id="radio7" onchange="updateRiskLevel()" value="Medium"> <!-- Assigning value 3 for Security breach with moderate property damage and loss -->
                <label for="radio7">Security breach with moderate property damage and loss</label><br>
                <input type="radio" name="radioGroup2" id="radio8" onchange="updateRiskLevel()" value="Low"> <!-- Assigning value 2 for Security breach with minor property damage and loss -->
                <label for="radio8">Security breach with minor property damage and loss</label>
                <!-- Risk level box -->
                <div id="securityRiskLevelBox" style="display: none;">
                    <p>Security Risk Level: <span id="securityRiskLevel"></span></p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck3" onchange="toggleRadio(this)" name="hsse_environment" value="Active"> <!-- Assigning value 1 for Environment -->
                <label class="form-check-label" for="gridCheck3">Environment</label>
            </div>
            <div id="radioGroup3" style="display: none;" name="hsse_environment_level">
                <input type="radio" name="radioGroup3" id="radio9" onchange="updateRiskLevel()" value="Very High"> <!-- Assigning value 5 for Uncontained spill or event with severe environmental or community impact. Mandatory obligation to regulator -->
                <label for="radio9">Uncontained spill or event with severe environmental or community impact. Mandatory obligation to regulator</label><br>
                <input type="radio" name="radioGroup3" id="radio10" onchange="updateRiskLevel()" value="High"> <!-- Assigning value 4 for Uncontained spill or event with serious environmental or community impact. Necessary to obtain directive from regulator -->
                <label for="radio10">Uncontained spill or event with serious environmental or community impact. Necessary to obtain directive from regulator </label><br>
                <input type="radio" name="radioGroup3" id="radio11" onchange="updateRiskLevel()" value="Medium"> <!-- Assigning value 3 for Uncontained spill or event with minor environmental or community impact. Recommended engagement with regulator -->
                <label for="radio11">Uncontained spill or event with minor environmental or community impact. Recommended engagement with regulator</label><br>
                <input type="radio" name="radioGroup3" id="radio12" onchange="updateRiskLevel()" value="Low"> <!-- Assigning value 2 for Local contained spill or event with no environmental or community impact. No need to engage regulator -->
                <label for="radio12">Local contained spill or event with no environmental or community impact. No need to engage regulator </label>
                <!-- Risk level box -->
                <div id="environmentRiskLevelBox" style="display: none;">
                    <p>Environment Risk Level: <span id="environmentRiskLevel"></span></p>
                </div>
            </div>
        </div>
    </div>
</div>


            </div>
            <div class="d-grid gap-2 mt-3">
              <button type="submit" class="btn btn-primary">Submit Form</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <script>
        function nextTab(tabId) {
          var tab = document.getElementById(tabId);
          if (tab) {
            tab.classList.add('show', 'active');
            var tabLink = document.querySelector('[aria-labelledby="' + tabId + '"]');
            if (tabLink) {
              tabLink.classList.add('active');
            }
          }
        }
      </script>
      <script>
        function updateValue(value) {
          var rangeValue = document.getElementById('rangeValue');
          var percentage = Math.round((value / 100) * 100); // Convert value to percentage
          rangeValue.innerText = percentage + '%'; // Display percentage

          var label = '';
          var color = '';
          var backgroundColor = '';
          if (value <= 4) {
            label = 'Rare';
            color = 'black';
            backgroundColor = '#23FF00'; // Light green background
          } else if (value <= 24) {
            label = 'Unlikely';
            color = 'black';
            backgroundColor = '#F0FF00'; // Light yellow background
          } else if (value <= 78) {
            label = 'Possible';
            color = 'black';
            backgroundColor = '#FF8B00'; // Light orange background
          } else {
            label = 'Probable';
            color = 'black';
            backgroundColor = '#FF0000'; // Light red background
          }

          rangeValue.style.color = color;
          rangeValue.style.backgroundColor = backgroundColor; // Set background color
          rangeValue.textContent = percentage + '% - ' + label; // Update text content

          // Adjust height and width of background color
          rangeValue.style.padding = '5px 10px'; // Adjust padding for spacing
          rangeValue.style.borderRadius = '5px'; // Add border radius for rounded corners
        }
      </script>

      <script>
        function toggleRadio(checkbox) {
          var radioGroupId = checkbox.id.replace("gridCheck", "radioGroup");
          var radioGroup = document.getElementById(radioGroupId);
          if (checkbox.checked) {
            radioGroup.style.display = "block";
          } else {
            radioGroup.style.display = "none";
          }
        }
      </script>
      <script>
        function toggleRadio(checkbox) {
          var radioGroupId = checkbox.id.replace("gridCheck", "radioGroup");
          var radioGroup = document.getElementById(radioGroupId);
          if (checkbox.checked) {
            radioGroup.style.display = "block";
          } else {
            radioGroup.style.display = "none";
            clearRiskLevel(radioGroupId);
          }
        }

        function clearRiskLevel(radioGroupId) {
          var riskLevelBoxId = radioGroupId.replace("radioGroup", "") + "RiskLevelBox";
          var riskLevelBox = document.getElementById(riskLevelBoxId);
          riskLevelBox.style.display = "none";
        }

        function updateRiskLevel() {
          updateHealthSafetyRiskLevel();
          updateSecurityRiskLevel();
          updateEnvironmentRiskLevel();
        }

        function updateHealthSafetyRiskLevel() {
          var riskLevelBox = document.getElementById("riskLevelBox");
          var riskLevelSpan = document.getElementById("riskLevel");

          var selectedRadio = document.querySelector('input[name="radioGroup1"]:checked');
          if (selectedRadio) {
            var riskLevel = "";
            switch (selectedRadio.id) {
              case "radio1":
                riskLevel = "Very High";
                break;
              case "radio2":
                riskLevel = "High";
                break;
              case "radio3":
                riskLevel = "Medium";
                break;
              case "radio4":
                riskLevel = "Low";
                break;
            }
            riskLevelSpan.textContent = riskLevel;
            riskLevelBox.style.display = "block";
            updateRiskLevelColor(riskLevel, riskLevelSpan);
          } else {
            riskLevelBox.style.display = "none";
          }
        }

        function updateSecurityRiskLevel() {
          var riskLevelBox = document.getElementById("securityRiskLevelBox");
          var riskLevelSpan = document.getElementById("securityRiskLevel");

          var selectedRadio = document.querySelector('input[name="radioGroup2"]:checked');
          if (selectedRadio) {
            var riskLevel = "";
            switch (selectedRadio.id) {
              case "radio5":
                riskLevel = "Very High";
                break;
              case "radio6":
                riskLevel = "High";
                break;
              case "radio7":
                riskLevel = "Medium";
                break;
              case "radio8":
                riskLevel = "Low";
                break;
            }
            riskLevelSpan.textContent = riskLevel;
            riskLevelBox.style.display = "block";
            updateRiskLevelColor(riskLevel, riskLevelSpan);
          } else {
            riskLevelBox.style.display = "none";
          }
        }

        function updateEnvironmentRiskLevel() {
          var riskLevelBox = document.getElementById("environmentRiskLevelBox");
          var riskLevelSpan = document.getElementById("environmentRiskLevel");

          var selectedRadio = document.querySelector('input[name="radioGroup3"]:checked');
          if (selectedRadio) {
            var riskLevel = "";
            switch (selectedRadio.id) {
              case "radio9":
                riskLevel = "Very High";
                break;
              case "radio10":
                riskLevel = "High";
                break;
              case "radio11":
                riskLevel = "Medium";
                break;
              case "radio12":
                riskLevel = "Low";
                break;
            }
            riskLevelSpan.textContent = riskLevel;
            riskLevelBox.style.display = "block";
            updateRiskLevelColor(riskLevel, riskLevelSpan);
          } else {
            riskLevelBox.style.display = "none";
          }
        }

        function updateRiskLevelColor(riskLevel, riskLevelSpan) {
          switch (riskLevel) {
            case "Very High":
              riskLevelSpan.style.backgroundColor = "red";
              break;
            case "High":
              riskLevelSpan.style.backgroundColor = "orange";
              break;
            case "Medium":
              riskLevelSpan.style.backgroundColor = "yellow";
              break;
            case "Low":
              riskLevelSpan.style.backgroundColor = "green";
              break;
            default:
              riskLevelSpan.style.backgroundColor = "inherit";
              break;
          }
        }
      </script>

      <script>
        function updateValue(value) {
          var rangeValue = document.getElementById('rangeValue');
          var percentage = Math.round((value / 100) * 100); // Convert value to percentage
          rangeValue.innerText = percentage + '%'; // Display percentage

          var label = '';
          var color = '';
          var backgroundColor = '';
          if (value <= 4) {
            label = 'Rare';
            color = 'black';
            backgroundColor = '#23FF00'; // Light green background
          } else if (value <= 24) {
            label = 'Unlikely';
            color = 'black';
            backgroundColor = '#F0FF00'; // Light yellow background
          } else if (value <= 78) {
            label = 'Possible';
            color = 'black';
            backgroundColor = '#FF8B00'; // Light orange background
          } else {
            label = 'Probable';
            color = 'black';
            backgroundColor = '#FF0000'; // Light red background
          }

          rangeValue.style.color = color;
          rangeValue.style.backgroundColor = backgroundColor; // Set background color
          rangeValue.textContent = percentage + '% - ' + label; // Update text content

          // Adjust height and width of background color
          rangeValue.style.padding = '5px 10px'; // Adjust padding for spacing
          rangeValue.style.borderRadius = '5px'; // Add border radius for rounded corners
        }
      </script>


    </div>
    </div>




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