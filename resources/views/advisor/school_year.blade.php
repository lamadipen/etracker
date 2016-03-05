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
            <li class="active">Establish School Year</li>
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
                  <h3 class="box-title">Establish School Year</h3>
                </div><!-- /.box-header -->
                
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-12 col-sm-8">
                    <form method="post" action="" role="form" accept-charset="UTF-8" >
                    	<div class="pad col-md-2">
                          <label>Current School Year:</label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" placeholder="" name="" value="04/22/2016" disabled/>
                          </div>
                      </div>
                 	</div>
                 	<div class="col-md-12 col-sm-8">

                      <div class="pad col-md-2">
                          <label>Choose New School Year</label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" placeholder="" name="" />
                          </div>
                          <hr />
                          <div class="input-group">
                          <input type="submit" class="btn btn-block btn-primary" value="Submit"/> 
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