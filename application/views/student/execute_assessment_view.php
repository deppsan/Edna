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
                    </div>
                    <div class="portlet-body" id="testBody" style="height: 255px">
                        <div class="note note-success" style="height: 214px">
                            <h4 class="block">Responds Quickly:</h4>
                            <p>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <label class="btn btn-default" id="contador" style="zoom: 3;margin-left: 20%">START</label>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="row" id="divAreaTest" style="display: none;">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8" style="zoom:2;">
                                            <label class="btn btn-default" id="lblValue1">1</label>
                                            <label class="btn btn-default" i>+</label>
                                            <label class="btn btn-default" id="lblValue2">1</label>
                                            <label class="btn btn-default" i>=</label>
                                            <label class="btn btn-default" id="lblResult">2</label>
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5"></div>
                                        <div class="col-md-5"></div>
                                        <div class="col-md-2"></div>
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
