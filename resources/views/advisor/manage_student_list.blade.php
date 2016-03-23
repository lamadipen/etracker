        @extends('advisor.adv_master')
        
          @section('body_template')  
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Manage Student 
            <small>Section</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">       

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
              <!-- MAP & BOX PANE -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">List Student </h3>
                </div><!-- /.box-header -->
                
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-10 col-sm-9">
                      <div class="pad col-md-12">                        	
                            <table class="table" id="manage_std"  class="table table-bordered table-striped">
    							<thead>
    								<tr>    								
    									<th>Name</th>
                                        <th>Email</th>
    									<th>Active</th>
                                        <th>Action</th>
    								</tr>
    							</thead>
    							<tbody>
                                    <?php $counter = 1;?>
                                    @foreach($students as $student)
    								<tr>
    									<td><a href="{{ url('advisor/student_detail/'.$student->std_id ) }}" >{{ $student->std_fname." ".$student->std_lname }} </a></td>
                                        <td>{{ $student->std_email }} </td>
    									<td>@if ($student->std_isActive == true)
                                                <img src="{{ asset('backend/dist/img/yes.png') }}" class="img-circle" alt="true"/> 
                                            @else 
                                                <img src="{{ asset('backend/dist/img/x.png') }}" class="img-circle" alt="true" /> 
                                            @endif
                                        </td>
                                        <td>
                                            @if($student->std_isActive == 0)
                                            <a class="btn btn-success  btn-xs" href="{{ url('advisor/update_student_status/'.$student->std_id.'/1') }}">Activate</a>
                                            @else
                                            <a class="btn btn-danger  btn-xs" href="{{ url('advisor/update_student_status/'.$student->std_id.'/0') }}">Inactivate</a>
                                            @endif
                                        </td>
    								</tr>
    							    @endforeach 
    							</tbody>
    						</table>
                      </div>
                    </div><!-- /.col -->
               
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      @endsection
     
    <!-- DATATABLE RELATED CODE START -->
    <!-- jQuery 2.1.4 -->
    {!! Html::script( asset('backend/plugins/jQuery/jQuery-2.1.4.min.js') ) !!}
    
    <!-- bootstrap datatables -->
    {!! Html::style( asset('backend/plugins/datatables/dataTables.bootstrap.css') ) !!}
      
    <!-- DATA TABES SCRIPT -->
    {!! Html::script( asset('backend/plugins/datatables/jquery.dataTables.min.js') ) !!}
    {!! Html::script( asset('backend/plugins/datatables/dataTables.bootstrap.min.js') ) !!}
    <!-- DATATABLE RELATED CODE END -->
      
    <script type="text/javascript">
      var $j = jQuery.noConflict();
      
      /** implementing datatables**/
      $j(function () {
        $j("#manage_std").dataTable();
      });
    </script>
