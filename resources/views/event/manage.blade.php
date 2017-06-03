@extends('layouts.admin')
@section('sidebar')
      </div>
        <div class="sidebar-wrapper">
              <ul class="nav">
                  <li>
                      <a href="{{ url('/manager/create') }}">
                          <i class="material-icons">event</i>
                          <p>Create Event</p>
                      </a>
                  </li>
                  <li class="active">
                      <a href="#">
                          <i class="material-icons">content_paste</i>
                          <p>Manage Event</p>
                      </a>
                  </li>
              </ul>
        </div>
      </div>
@endsection
@section('content')

	
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card card-nav-tabs">
								<div class="card-header" data-background-color="blue">
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<span class="nav-tabs-title">Events:</span>
											<ul class="nav nav-tabs" data-tabs="tabs">
											</ul>
										</div>
									</div>
								</div>

								<div class="card-content">
									<div class="tab-content">
										<div class="tab-pane active" id="profile">
											<table class="table">
												<tbody>
													@foreach($events as $key=>$event)
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes" checked>
																</label>
															</div>
														</td>
														<td>{{$event->nama_event}}</td>
														<td class="td-actions text-right">
															<a  rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs" href="{{ url('manager/edit/'.$event->id) }}">
																<i class="material-icons" >edit</i>
															</a>
															<a  rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs" href="{{ url('/manager/hapus/'.$event->id) }}">
																<i class="material-icons">close</i>
															</a>
														</td>
													</tr>
													@endforeach
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
	                </div>
	            </div>
	        </div>

	    </div>
	</div>


@endsection
