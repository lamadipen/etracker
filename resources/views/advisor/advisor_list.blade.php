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
                  <h3 class="box-title">List Advisor </h3>
                </div><!-- /.box-header -->
                
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <div class="pad col-md-12">
                        		<a href="{{ url('/advisor/create') }}" class="btn btn-primary btn-sm">Add Advisor</a>
                            <table class="table">
    							<thead>
    								<tr>
    									<th>S.N</th>
    									<th>Name</th>
    									<th>Active</th>
                                        <th>Action</th>
    								</tr>
    							</thead>
    							<tbody>
                                    <?php $counter = 1;?>
                                    @foreach($advisors as $advisor)
    								<tr>
    									<td> {{ $counter++ }}</td>
    									<td>{{ $advisor->adv_fname." ".$advisor->adv_lname }} </td>
    									<td>@if ($advisor->is_active == true)
                                                <img src="{{ asset('dist/img/yes.png') }}" class="img-circle" alt="true"/> 
                                            @else 
                                                <img src="{{ asset('dist/img/x.png') }}" class="img-circle" alt="true" /> 
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-primary  btn-xs" href="{{ route('advisor.edit', $advisor->adv_id) }}">Edit</a> | 
                                            {!! Form::open(array('url' => 'advisor/' . $advisor->adv_id)) !!}
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