<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
	    <div class="col-md-12">	<h2>Table with Progress Bar</h2> </div>
	</div>
    
    <div class="row">
    					
						<div class="col-md-12">
							<div class="widget blank no-padding">
								<div class="panel panel-default work-progress-table">
									  <!-- Default panel contents -->
									<div class="panel-heading">Muhammad Mohsin Irshad<i>UI/UX Designer & Developer (isometric.mohsin@gmail.com)</i>
										<div class="dropdown rounded">
											
											<button class="btn btn-danger pull-right"  data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span> Delete</button>
										</div>
									</div>
									  <!-- Table -->
									<table id="mytable" class="table">
										<thead>
										  <tr>
											<th><input type="checkbox" id="checkall" /></th>
											<th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
											<th style="width:25%">Progress</th>
											<th>Status</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td><input type="checkbox" class="checkthis" /></td>
											<td>Mohsin</td>
                                            <td>+92-333-5586757</td>
                                            <td>isometric.mohsin@gmail.com</td>
											<td>
												<div class="progress">
													<div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="red progress-bar">
													<span>60%</span>
												   </div>
												</div>
											</td>
											<td><span class="label label-info">Pending</span></td>
										  </tr>
										  <tr>
										<td><input type="checkbox" class="checkthis" /></td>
											<td>Haseeb</td>
                                            <td>+92-333-5586757</td>
                                            <td>haseeb@gmail.com</td>
											<td>
												<div class="progress">
													<div style="width: 80%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="green progress-bar">
													<span>80%</span>
												   </div>
												</div>
											</td>
											<td><span class="label label-primary">Due</span></td>
										  </tr>
										  <tr>
											<td><input type="checkbox" class="checkthis" /></td>
											<td>Hussain</td>
                                            <td>+92-333-5586757</td>
                                            <td>hussain@gmail.com</td>
											<td>
												<div class="progress">
													<div style="width: 40%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="purple progress-bar">
													<span>40%</span>
												   </div>
												</div>
											</td>
											<td><span class="label label-warning">Suspended</span></td>
										  </tr>
										  <tr>
										<td><input type="checkbox" class="checkthis" /></td>
											<td>Noman</td>
                                            <td>+92-333-5586757</td>
                                            <td>noman@gmail.com</td>
											<td>
												<div class="progress">
													<div style="width: 90%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="purple progress-bar">
													<span>90%</span>
												   </div>
												</div>
											</td>
											<td><span class="label label-success">Due</span></td>
										  </tr>
										  <tr>
											<td><input type="checkbox" class="checkthis" /></td>
											<td>Ubaid</td>
                                            <td>+92-333-5586757</td>
                                            <td>ubaid@gmail.com</td>
											<td>
												<div class="progress">
													<div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="red progress-bar">
													<span>60%</span>
												   </div>
												</div>
											</td>
										    <td><span class="label label-warning">Suspended</span></td>
										  </tr>
										  <tr>
										<td><input type="checkbox" class="checkthis" /></td>
											<td>Adnan</td>
                                            <td>+92-333-5586757</td>
                                            <td>adnan@gmail.com</td>
											<td>
												<div class="progress">
													<div style="width: 45%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="red progress-bar">
													<span>45%</span>
												   </div>
												</div>
											</td>
										    <td><span class="label label-warning">Suspended</span></td>
										  </tr>
										  <tr>
										<td><input type="checkbox" class="checkthis" /></td>
											<td>Saboor</td>
                                            <td>+92-333-5586757</td>
                                            <td>saboor@gmail.com</td>
											<td>
												<div class="progress">
													<div style="width: 89%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="89" role="progressbar" class="green progress-bar">
													<span>89%</span>
												   </div>
												</div>
											</td>
										    <td><span class="label label-warning">Suspended</span></td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>