@extends('layouts.admin')
@section('sidebar')
      </div>
        <div class="sidebar-wrapper">
              <ul class="nav">
                  <li>
                      <a href="{{ url('/events/create') }}">
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
											<span class="nav-tabs-title">Tasks:</span>
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#profile" data-toggle="tab">
														<i class="material-icons">bug_report</i>
														Bugs
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#messages" data-toggle="tab">
														<i class="material-icons">code</i>
														Website
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#settings" data-toggle="tab">
														<i class="material-icons">cloud</i>
														Server
													<div class="ripple-container"></div></a>
												</li>
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
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
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
