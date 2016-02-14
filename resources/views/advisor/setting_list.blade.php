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
                  <h3 class="box-title">Create </h3>
                </div><!-- /.box-header -->
                
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <div class="pad col-md-12">
                        		<a href="{{ url('/setting/create') }}" class="btn btn-primary btn-sm">Add Settings</a>
                            <table class="table">
    							<thead>
    								<tr>
    									<th>S.N</th>
    									<th>Name</th>
    									<th>Hour</th>
                                        <th>Action</th>
    								</tr>
    							</thead>
    							<tbody>
                                    <?php $counter = 1;?>
                                    @foreach($settings as $setting)
    								<tr>
    									<td> {{ $counter++ }}</td>
    									<td>{{ $setting->serty_id }}</td>
    									<td>{{ $setting->sett_hour }}</td>
                                        <td>
                                            <a class="btn btn-green btn-xs" href="{{ route('setting.edit', $setting->sett_id) }}">Edit</a> | 
                                            {!! Form::open(array('url' => 'setting/' . $setting->sett_id)) !!}
                                                {!! Form::hidden('_method', 'DELETE') !!}
                                                {!! Form::submit('Delete', array('class' => 'btn btn-red btn-xs')) !!}
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