<?php $json = json_encode($assessment->getContent()[0]);?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        
        <!-- BEGIN PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                    Test <small>statistics and more</small>
                </h3>
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="index.html">Dashboard</a>
                    </li>
                    <li>
                        <i class="fa fa-angle-right"></i>
                        <a href="index.html">Test</a>
                    </li>
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT--------------------------------------------------------------------------------------------------->
        <div class="row">
            <div class="col-mmd-12">
                <div class="portlet green box">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cubes">Ready! Go!</i>
                        </div>
						<div class="tools">
							<a href="javascript:;" class="reload" style="display:none;">
							</a>
							<a href="" class="fullscreen">
							</a>
						</div>
                    </div>
                    <div class="portlet-body" id="testBody" style="height: 255px">
                        <div class="note note-success" style="height: 229px">
                            <h4 class="block">Responds Quickly:</h4>
                            <p>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <label class="btn btn-default" id="contador" style="zoom: 3;margin-left: 20%">START</label>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="row active" id="divExArea">
                                	
                                </div>
                                <div class="row hiddenDiv active" style="display: none;">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-2">
                                    	<button type="button" class="btn blue" style="width: 100px;height: 53px;font-size: 2em;" id="btnNext">Next</button>
                                    	<button type="button" class="btn blue" style="width: 100px;height: 53px;font-size: 2em; display:none;" id="btnEnd">Finish</button>
                                    </div>
                                </div>

                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT----------------------------------------------------------------------------------------------------->
    </div>
</div>
<!-- END CONTENT -->
<script>
    var content     = <?php echo $json;?>;
    var type        = <?php echo $assessment->getType();?>;
    var duration    = <?php echo $assessment->getAssessmentDuration();?>;
    var skill       = <?php echo $assessment->getSkill();?>;
</script>
