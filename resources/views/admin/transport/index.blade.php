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
                    <h4 class="page-header">All transport</h4>
                    <div class="pull-right">
                	<a href="addtrans"><button type="button" class="btn btn-success">Add Transport</button></a>
                </div>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Transport No.</th>
                                        <th>Brand Name</th>
                                        <th>Lisence No</th>
                                        <th>Chesis No</th>
                                        <th>Capacity</th>
                                        <th colspan="2">Capacity</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($trans as $trans)
									<tr>
									<td>{{ $trans->transport_no }}</td>
									<td>{{ $trans->brand_name }}</td>
									<td>{{ $trans->lisence }}</td>
									<td>{{ $trans->chesis_no }}</td>
									<td>{{ $trans->capacity }}</td>
                                    <td><a href="edit_trans/{{$trans->id}}"><button type="button" class="btn btn-info">Edit</button></a>
    
                                    <a href="deletetrans"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
									</tr>
									@endforeach
                                    
                                  
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>

<script type="text/javascript">
   
    $('#favoritesModal').on("show.bs.modal", function (event) {
         var button=$(event.relatedTarget);
         var t_no= button.data('tno');
         var b_name= button.data('bname');

         var modal=$(event.currentTarget);

         modal.find('#t_no').value=t_no;
         document.getElementById('t_no').value=t_no;
         $('#b_name').val(b_name);
    });

</script>
<div class="modal fade" id="favoritesModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="favoritesModalLabel">Edit data</h4>
      </div>
      <div class="modal-body">
        
         <form action="/edit_trans" method="POST">
                    @csrf
                        <div class="form-group">
                            <label>Brand name</label>
                            <input class="form-control" type="text" id="b_name" name="b_name" >
                            
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
                        
                        <button type="submit" class="btn btn-default">Save</button>
                        
                    </form>
      </div>
      <div class="modal-footer">
        
        <span class="pull-right">
          <button type="button" class="btn btn-primary">
            Submit
          </button>
        </span>
      </div>
    </div>
  </div>
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

