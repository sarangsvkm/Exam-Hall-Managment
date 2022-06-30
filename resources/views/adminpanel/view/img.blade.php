@extends('Layout.layout')
@section('contant')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                        <h5>Product : </h5>
                    </div>
                    <div class="widget-content nopadding">
                        <ul class="recent-posts">
                            <li>
                                <div class="user-thumb"> <img width="40" height="40" alt="User" src=""> </div>
                            </li>
                            <li>
                                <form action="" method="post" role="form" enctype="multipart/form-data">
                                    <legend>Can Add Multi Images</legend>
                                    <input type="hidden" name="_token" value="">
                                    <div class="form-group">
                                        <input type="hidden" name="products_id" value="">
                                        <input type="file" name="image[]" id="id_imageGallery" class="form-control" multiple="multiple" required>
                                        <span class="text-danger"></span>
                                        <button type="submit" class="btn btn-success">Upload</button>
                                    </div>

                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-time"></i></span>
                        <h5>List Images Galleries</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>

                                    <tr>
                                        <td class="taskDesc" style="text-align: center;vertical-align: middle;">{{$i++}}</td>
                                        <td class="taskOptions" style="text-align: center;vertical-align: middle;"><img src="" class="img-responsive" alt="Image" width="60"></td>
                                        <td style="text-align: center;vertical-align: middle;"><a href="javascript:" rel="" rel1="delete-imageGallery" class="btn btn-danger btn-mini deleteRecord">Delete</a></td>
                                    </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
