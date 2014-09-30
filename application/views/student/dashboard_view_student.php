<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                    Dashboard <small>statistics and more</small>
                </h3>
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="index.html">Dashboard</a>
                    </li>
                    <li class="pull-right">
                        <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                            <i class="icon-calendar"></i>
                            <span></span>
                            <i class="fa fa-angle-down"></i>
                        </div>
                    </li>
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT------------------------------------------------------------------------------------------>
        <div class="row">
        	<div class="col-md-6">
					<div class="portlet blue box">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs"></i>Current Test
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body" id="blockui_sample_1_portlet_body">
							<div class="portlet-body">
								<div class="table-scrollable">
									<table class="table table-hover">
										<thead>
										<tr>
											<th>
												 #
											</th>
											<th>
												 Test Name
											</th>
											<th>
												 Class
											</th>
											<th>
												 available
											</th>
											<th>
												 Status
											</th>
											<th>
												 Link
											</th>
										</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													 1
												</td>
												<td>
													 Dummy Test
												</td>
												<td>
													 Math
												</td>
												<td>
													 Today
												</td>
												<td>
													 Active
												</td>
												<td>
													<p>
														<?php echo anchor('index.php/student_dashboard_controller/test?test=dummy_test', 'Go', array('class' => 'btn btn-primary')); ?>
													</p>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							
						</div>
					</div>
				</div>

        </div>
           
        <!-- END PAGE CONTENT----------------------------------------------------------------------------------------------------->
    </div>
</div>
<!-- END CONTENT -->