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
            <li class="active">Dashboard</li>
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
                  <h3 class="box-title">Create Advisor</h3>
                </div><!-- /.box-header -->
                
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <div class="pad col-md-6">
                       <form method="POST" action="{{ url('/advisor') }}" role="form" accept-charset="UTF-8">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        	<div class="form-group">
                        		<label>First Name</label>
                        		<input class="form-control" placeholder="First name" name="fname" type="text" value="">
                        	</div>
                        	<div class="form-group">
                        		<label>Last Name</label>
                        		<input class="form-control" placeholder="Last name" name="lname" type="text" value="">
                        	</div>
                        	<div class="form-group">
                        		<label>Email address</label>
                        		<input class="form-control" placeholder="Email address" name="email" type="text" value="">
                        	</div>
                        	<div class="form-group">
                        		<label>Password</label>
                        		<input class="form-control" name="password" type="password" value="">
                        	</div>
                        		<input class="btn btn-primary" type="submit" value="Add">
                        
                        </form>
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