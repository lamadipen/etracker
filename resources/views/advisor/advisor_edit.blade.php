        @extends('advisor.adv_master')
        
        @section('body_template')
          <!-- Main content -->
        <section class="content">       

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
              <!-- MAP & BOX PANE -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Advisor</h3>
                </div><!-- /.box-header -->
                
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <div class="pad col-md-12">
                              {!! Form::model($advisor, array('route' =>array('advisor.update',$advisor->id), 'method' => 'PUT')) !!}
                                <div class="form-group">
                                    <label>First Name</label>
                                    {!! Form::text('fname', $advisor->adv_fname ,['class' => 'form-control', 'placeholder' => 'First name']) !!}
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    {!! Form::text('lname', $advisor->adv_lname ,['class' => 'form-control', 'placeholder' => 'Last name']) !!}
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    {!! Form::text('email', $advisor->adv_email ,['class' => 'form-control', 'placeholder' => 'Email address']) !!}
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    {!! Form::password('password', '' ,['class' => 'form-control', 'placeholder' => 'Password']) !!}
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