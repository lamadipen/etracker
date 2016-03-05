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
                  <h3 class="box-title">Student Detail</h3>
                </div><!-- /.box-header -->
                
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-10 col-sm-9">
                      <div class="pad col-md-12">                        	
                      
                              <!-- info row -->
                              <div class="row invoice-info">
                              
                                <div class="col-sm-3 invoice-col">
                                <strong>Individual Detail</strong><br>
                                  <address>
                                    <strong>Name</strong><br>
                                    {{ $student[0]['std_fname'].' '.$student[0]['std_lname'] }}
                                    <br>
                                    <strong>Email</strong><br>
                                    {{ $student[0]['std_email'] }}<br>
                                    <strong>Graduate Year</strong><br>
                                    {{ $student[0]['std_gradYear'] }}<br>
                                    
                                  </address>
                                </div><!-- /.col -->
                                <div class="col-sm-3 invoice-col">
                                 <strong>Volunteer Detail</strong><br>
                                  <address>
                                    <strong>Service</strong><br>
                                    {{ $student[0]['ser_name'] }}<br>
                                    <strong>Description</strong><br>
                                    {{ $student[0]['ser_desc'] }}<br>
                                    <strong>Hours</strong><br>
                                    {{ $student[0]['vh_done'].' hr'}}
                                  </address>
                                </div><!-- /.col -->
                                <div class="col-sm-3 invoice-col">
                                  <strong>Superviosr Detail</strong><br>
                                  <address>
                                        <strong>Name</strong><br>
                                        {{ $student[0]['sup_fname'].' '.$student[0]['sup_lname'] }}<br>
                                        <strong>Email</strong><br>
                                        {{ $student[0]['sup_email'] }}<br>
                                        <strong>Phone</strong><br>
                                        {{ $student[0]['sup_phone']}}
                                    </address>
                                </div><!-- /.col -->
                                
                       
                                <div class="col-sm-3 invoice-col">
                                  <strong>Organization Detail</strong><br>
                                    <address>
                                    <strong>Name</strong><br>
                                    {{ $student[0]['org_name']}}<br>
                                    <strong>Address</strong><br>
                                    {{ $student[0]['org_address'] }}<br>
                                    </address>
                                </div><!-- /.col -->
                              
                              </div><!-- /.row -->
                    
                              <!-- this row will not appear when printing -->
                              <div class="row no-print">
                                <div class="col-xs-12">
                                  <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Edit</button>
                                </div>
                              </div>
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