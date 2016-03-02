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
                  <h3 class="box-title">List Student </h3>
                </div><!-- /.box-header -->
                
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-10 col-sm-9">
                      <div class="pad col-md-12">                        	
                            <table class="table">
    							<thead>
    								<tr>    								
    									<th>Name</th>
                                        <th>Email</th>
                                        <th>Work Hour</th>
    									<th>Active</th>
                                        <th>Action</th>
    								</tr>
    							</thead>
    							<tbody>
                                    <?php $counter = 1;?>
                                    @foreach($students as $student)
    								<tr>
    									<td>{{ $student->std_fname." ".$student->std_lname }} </td>
                                        <td>{{ $student->std_email }} </td>
                                        <td></td>
    									<td>@if ($student->std_isActive == true)
                                                <img src="{{ asset('backend/dist/img/yes.png') }}" class="img-circle" alt="true"/> 
                                            @else 
                                                <img src="{{ asset('backend/dist/img/x.png') }}" class="img-circle" alt="true" /> 
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-primary  btn-xs" href="{{ route('advisor.edit', $student->std_id) }}">Edit</a> | 
                                            {!! Form::open(array('url' => 'advisor/' . $student->std_id, 'class' => 'btn btn-xs')) !!}
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