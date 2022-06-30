
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>Products</title>
    <link href="{{ asset('dashassets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashassets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashassets/css/ruang-admin.min.css" rel="stylesheet') }}">
    <link href="{{ asset('dashassets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>
@extends('Layout.layout')
@section('contant')
    <!-- Topbar -->
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Teachers</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Add/Edit</li>
                <li class="breadcrumb-item active" aria-current="page">Teacher</li>
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
                                <a style="text-decoration: none; color: white" href="{{ route('dashboard.teacheradd') }}"><i
                                        class="fas fa-sm">Create</i>
                                </a>
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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Class Name</th>
                                    <th>Subject Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Date Of Birth</th>
                                    <th>Contact</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Class Name</th>
                                    <th>Subject Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Date Of Birth</th>
                                    <th>Contact</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach (\App\Models\Teacher::all() as $teacher)
                                    <tr>
                                        <td>{{$teacher->tfname}}</td>
                                    <td>{{$teacher->tlname}}</td>
                                    <td>{{$teacher->group->classname}}</td>
                                    <td>{{$teacher->subject->subjectname}}</td>
                                    <td>{{$teacher->temail}}</td>
                                    <td>{{$teacher->tgender}}</td>
                                    <td>{{$teacher->tdob}}</td>
                                    <td>{{$teacher->tcontact}}</td>

                                    <td>
                                        <a href="{{ route('dashboard.teacher_edit',$teacher->id) }}"> <button class="btn btn-primary" style="width: 50px" type="button">
                                            <i class="fas fa-sm">Edit</i>
                                        </button></a>
                                       <a href="{{ route('dashboard.teacher_view',$teacher->id) }}"> <button class="btn btn-primary " style="width: 50px" type="button">
                                            <i class="fas fa-sm" style="padding-right: 10px;">View</i>
                                        </button></a>
                                        <a href="{{ route('dashboard.teacher_del',$teacher->id) }}"> <button class="btn btn-primary " style="width: 50px" type="button">
                                            <i class="fas fa-sm" style="padding-right: 10px;">Del</i>
                                        </button></a>
                                    </td>
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


    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>
@endsection

</html>

