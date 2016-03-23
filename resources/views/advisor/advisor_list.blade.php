        @extends('advisor.adv_master')
        
          @section('body_template')  
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Advisor 
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
                  <h3 class="box-title">List Advisor </h3>
                </div><!-- /.box-header -->
                
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-10 col-sm-9">
                      <div class="pad col-md-12">
                        		<a href="{{ url('/advisor/create') }}" class="btn btn-primary btn-sm">Add Advisor</a>
                            <table class="table table-striped" id="manage_adv">
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
                                    @foreach($advisors as $advisor)
    								<tr>
    									<td>{{ $advisor->adv_fname." ".$advisor->adv_lname }} </td>
                                        <td>{{ $advisor->adv_email }} </td>
    									<td>@if ($advisor->is_active == true)
                                                <img src="{{ asset('backend/dist/img/yes.png') }}" class="img-circle" alt="true"/> 
                                            @else 
                                                <img src="{{ asset('backend/dist/img/x.png') }}" class="img-circle" alt="true" /> 
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-primary  btn-xs" href="{{ route('advisor.edit', $advisor->adv_id) }}">Edit</a> | 
                                            {!! Form::open(array('url' => 'advisor/' . $advisor->adv_id, 'class' => 'btn btn-xs')) !!}
                                                {!! Form::hidden('_method', 'DELETE') !!}
                                                {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-xs')) !!}
                                            {!! Form::close() !!}
                                            
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
        $j("#manage_adv").dataTable();
      });
    </script>