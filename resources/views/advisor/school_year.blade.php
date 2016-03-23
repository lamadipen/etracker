@extends('advisor.adv_master')      
@section('body_template')  
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           School Year 
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
                  <h3 class="box-title">Establish School Year</h3>
                </div><!-- /.box-header -->
                
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-12 col-sm-8">
                    	<div class="pad col-md-2">
                          <label>Current School Year:</label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" placeholder="" name="" value=" @if(!empty($current_year[0])) {{ $current_year[0]['sch_year'] }} @endif" disabled/>
                          </div>
                      </div>
                 	</div>
                 	<div class="col-md-12 col-sm-8">
                    
                    <form method="post" action="{{ url('/schoolYear') }}" role="form" accept-charset="UTF-8" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="pad col-md-2">
                          <label>Choose New School Year</label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" placeholder="" name="new_sch_year" id="new_sch_year" />
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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript">
        jQuery.noConflict()(function ($) { // this was missing for me
            $(document).ready(function() { 
               // alert("hello");
                  $('#new_sch_year').datepicker({dateFormat: 'yy-mm-dd' });
            });
        });
    </script>