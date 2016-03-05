

  @extends('advisor.adv_master')
 
  @section('body_template')

       <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Dash
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Notification</li>
          </ol>
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
                  <h3 class="box-title">Send Notification</h3>
                </div><!-- /.box-header -->
                
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                    <form method="post" action="{{ url('/advisor/send_invitation') }}" role="form" accept-charset="UTF-8" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="pad col-md-6">
                          <label>Notification Title</label>
                          <div class="input-group">
                            <span class="input-group-addon">Title</span>
                            <input type="text" class="form-control" placeholder="" name="title" />
                          </div>
                          <br>
                          <div class="input-group">
                            <textarea class="form-control" rows="7" cols="100" placeholder="Write Message"></textarea>
                          </div>
                          <hr />
                          <div class="input-group">
                          <input type="submit" class="btn btn-block btn-primary" value="Send Notification"/> 
                          </div>
                      </div>
                    </form> 
                    </div><!-- /.col -->

                  </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      @endsection