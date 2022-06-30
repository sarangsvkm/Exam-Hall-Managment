
@extends('Layout.layout')
@section('contant')


            <!-- Topbar -->
            <!-- Container Fluid-->
            <div class="container-fluid" id="container-wrapper">
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Student</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./">Home</a></li>
                  <li class="breadcrumb-item">Add/Edit</li>
                  <li class="breadcrumb-item active" aria-current="page">Student</li>
                </ol>
              </div>

              <!-- Row -->
              <div class="row">
                <!-- Datatables -->

                <div class="col-lg-12">
                  <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Database List</h6>
                      <div>
                        <button class="btn btn-primary" type="button">
                            <a style="text-decoration: none; color: white" href="{{route('dashboard.studentadd')}}"><i class="fas fa-sm">Create</i></a>
                          </button>
                          <button class="btn btn-primary" type="button">
                            <i class="fas fa-sm">Export</i>
                          </button>
                    </div>
                    </div>
                    <div class="table-responsive p-3">
                      <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                          <tr>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Class Name</th>
                                <th>Roll Number</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Date Of Birth</th>
                                <th>Contact</th>
                                {{-- <th>Address</th> --}}
                                <th>Action</th>
                                <th>Make Admin</th>
                            </tr>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Class Name</th>
                            <th>Roll Number</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Date Of Birth</th>
                            <th>Contact</th>
                            {{-- <th>Address</th> --}}
                            <th>Action</th>
                            <th>Make Admin</th></th>

                          </tr>
                        </tfoot>
                        <tbody>
                            @foreach (\App\Models\Student::all() as $student)
                          <tr>
                            <td>{{$student->sfname}}</td>
                            <td>{{$student->slname}}</td>
                            <td>{{$student->group->classname}}</td>
                            <td>{{$student->rollnumber}}</td>
                            <td>{{$student->semail}}</td>
                            <td>{{$student->sgender}}</td>
                            <td>{{$student->sdob}}</td>
                            <td>{{$student->scontact}}</td>

                            <td>
                                <a href="{{ route('dashboard.student_edit',$student->id) }}"> <button class="btn btn-primary" style="width: 50px" type="button">
                                    <i class="fas fa-sm">Edit</i>
                                </button></a>
                               <a href="{{ route('dashboard.student_view',$student->id) }}"> <button class="btn btn-primary " style="width: 50px" type="button">
                                    <i class="fas fa-sm" style="padding-right: 10px;">View</i>
                                </button></a>
                                <a href="{{ route('dashboard.student_del',$student->id) }}"> <button class="btn btn-primary " style="width: 50px" type="button">
                                    <i class="fas fa-sm" style="padding-right: 10px; ">Del</i>
                                </button>
                            </td>
                            <td></a>
                                <a href="{{ route('make_user',$student->id)}}"> <button class="btn btn-primary" style="width: 50px" type="button">
                                    <i class="fas fa-sm">Make User</i>
                                </button></a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!--Row-->
          <!-- Documentation Link -->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>

  {{-- <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script> --}}

@endsection

