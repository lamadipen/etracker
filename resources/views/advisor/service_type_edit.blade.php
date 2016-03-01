        @extends('advisor.adv_master')
        @section('body_template')  
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        	<h1>
        		Service Type
        		<small>
        			Section
        		</small>
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
                  <h3 class="box-title">Edit Service Type</h3>
                </div><!-- /.box-header -->
                
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <div class="pad col-md-6">

                        {!! Form::model($service_type, array('route' =>array('service_type.update',$service_type->serty_id), 'method' => 'PUT')) !!}
                                <div class="form-group">
                                    <label>Service Name</label>
                                    {!! Form::text('serty_name', $service_type->serty_name ,['class' => 'form-control', 'placeholder' => 'Service name']) !!}
                                </div>
                                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                            
                        {!! Form::close() !!}
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