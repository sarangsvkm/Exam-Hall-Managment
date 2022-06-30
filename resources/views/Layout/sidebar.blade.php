<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="/mitlogo.png">
      </div>
      <div class="sidebar-brand-text mx-3">Allotment</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="{{route('dashboard.dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard.alldashboard')}}">
          <i class="fas fa-fw fa-palette"></i>
          <span>Dashboard</span>
        </a>
      </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
        aria-controls="collapseForm">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Add/Edit</span>
      </a>
      <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Forms</h6>
          <a class="collapse-item" href="{{route('dashboard.classtable')}}">Class</a>
          <a class="collapse-item" href="{{route('dashboard.teacher')}}">Teacher</a>
          <a class="collapse-item" href="{{route('dashboard.subjecttable')}}">Subject</a>
          <a class="collapse-item" href="{{route('dashboard.studentview')}}">Student</a>
          <a class="collapse-item" href="{{route('dashboard.examtable')}} ">Exam</a>
          <a class="collapse-item" href="{{route('dashboard.allotment')}}">Allotment</a>

        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
        aria-controls="collapseTable">
        <i class="fas fa-fw fa-table"></i>
        <span>Rooms</span>
      </a>
      <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Updation</h6>
          <a class="collapse-item" href="{{route('dashboard.roomtable')}}">Room Type</a>
          <a class="collapse-item" href="{{route('dashboard.room')}}">Room</a>


        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard.dashuser')}}">
        <i class="fas fa-fw fa-palette"></i>
        <span>User</span>
      </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">

    </div>
    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard.logout')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Logout</span>
      </a>
    </li>
    <hr class="sidebar-divider">

  </ul>
  <!-- Sidebar -->
