<!DOCTYPE html>
<html lang="en">
@include('admin.inc.head')

<body>

    <div id="soft-all-wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('admin.inc.header')
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                @include('admin.inc.sidebar')
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Add transport</h4>
                    <div class="pull-right">
                	
                </div>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                 <div class="col-lg-6">
                    <form action="/add_trans" method="POST">
                    @csrf
                        <div class="form-group">
                            <label>Brand name</label>
                            <input class="form-control" type="text" id="b_name" name="b_name">
                            
                        </div>
                        <div class="form-group">
                            <label>Transport No</label>
                            <input class="form-control" type="text" id="t_no" name="t_no">
                            
                        </div>
                        <div class="form-group">
                            <label>Chesis No</label>
                            <input class="form-control" type="text" id="c_no" name="c_no">
                            
                        </div>
                        <div class="form-group">
                            <label>Lisence No</label>
                            <input class="form-control" type="text" id="l_no" name="l_no">
                            
                        </div>
                        <div class="form-group">
                            <label>Capacity</label>
                            <input class="form-control" type="text" id="cap" name="cap">
                            
                        </div>
                        
                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>
                    </form>
                </div>
                
            </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{'admin'}}/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{'admin'}}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{'admin'}}/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{'admin'}}/vendor/raphael/raphael.min.js"></script>
    <script src="{{'admin'}}/vendor/morrisjs/morris.min.js"></script>
    <script src="{{'admin'}}/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{'admin'}}/dist/js/sb-admin-2.js"></script>

</body>

</html>

