<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
<div class="page-content" style="min-height:1194px">


<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
    Create Assessment
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Create Assessment</a>
            <i class="fa fa-angle-right"></i>
        </li>

    </ul>
</div>
<!-- END PAGE HEADER-->


<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue" id="form_wizard_1">

            <div class="portlet-title">
                <div class="caption">
                    Assessment Wizard - <span class="step-title">
								Step 1 of 4 </span>
                </div>

            </div>

            <div class="portlet-body form">
                <form role="form" class="form-horizontal" name="frmAssessment" id="submit_form" method="post" action="<?php echo base_url() ?>index.php/assesment_creator_controller/createAssessment">
                    <div class="form-wizard">
                        <div class="form-body">
                            <ul class="nav nav-pills nav-justified steps">
                                <li class="active">
                                    <a href="#tab1" data-toggle="tab" class="step">
												<span class="number">
												1 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Assessment  </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab2" data-toggle="tab" class="step">
												<span class="number">
												2 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Skill </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab3" data-toggle="tab" class="step active">
												<span class="number">
												3 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Setup </span>
                                    </a>
                                </li>

                            </ul>

                            <div id="bar" class="progress progress-striped" role="progressbar">
                                <div class="progress-bar progress-bar-success" style="width: 25%;">
                                </div>
                            </div>

                            <div class="tab-content">
                                <div class="alert alert-danger display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                        You have some form errors. Please check below.
                                </div>
                                <div class="alert alert-success display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                        Your form validation is successful!
                                </div>



                                <div class="tab-pane active" id="tab1">

                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <label><b>Select a Subject</b></label>
                                            <select class="form-control" name="cmbSubject" id="cmbSubject">
                                                <option value="0">Select...</option>
                                                <option value="1">Math</option>
                                                <option value="1">Science</option>
                                                <option value="1">Language Arts</option>
                                                <option value="1">Social Studies</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group" style="display:none;">
                                        <div class="col-md-8">
                                            <label><b>Select a Category</b></label>
                                            <select class="form-control" name="cmbCategory" id="cmbCategory">
                                                <option value="0">Select..</option>
                                                <option value="1">Basic Operations: Add, Subtract, Multiply and Divide</option>
                                                <option value="2">Counting </option>
                                                <option value="3">Comparing Numbers</option>
                                                <option value="4">Place Value</option>
                                                <option value="5">Measurement</option>
                                                <option value="6">Time</option>
                                                <option value="7">Sorting</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group" style="display:none;">
                                        <div class="col-md-8">
                                            <label><b>Select a Subcategory</b></label>
                                            <select class="form-control"  name="cmbSubcategory" id="cmbSubcategory">
                                                <option value="0">Select...</option>
                                                <option value="1">Addition</option>
                                                <option value="2">Subtraction</option>
                                                <option value="3">Multiplucation</option>
                                                <option value="4">Division</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane" id="tab2">
                                    <div id="Skill" class="form-group">
                                        <div class="col-md-8">
                                            <label><b>Select a Skill</b></label>
                                            <select class="form-control" name="cmbSkill" id="cmbSkill" size="2">
                                                <option>· Complete the equation</option>
                                                <option>· Add by...</option>
                                                <option>· Adding Doubles</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div id="Example" class="form-group">
                                        <div class="col-md-8">
                                            <label><b>Example</b></label>
                                            <textarea id="Text" class="form-control" rows="3" readonly=""  name="txtExample" id="txtExample"> 5 + 2 = 7 </textarea >
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane" id="tab3">


                                </div>




                                <div class="tab-pane" id="tab4">

                                </div>

                        </div>


                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <a href="javascript:;" class="btn default button-previous disabled" style="display: none;">
                                    <i class="m-icon-swapleft"></i> Back </a>
                                    <a href="javascript:;" class="btn blue button-next">
                                        Continue <i class="m-icon-swapright m-icon-white"></i>
                                    </a>
                                    <a href="javascript:;" class="btn green button-submit" style="display: none;">
                                        Submit <i class="m-icon-swapright m-icon-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






        </div>

    </div>
</div>
</div>
<!-- END PAGE CONTENT-->
</div>
</div>
<!-- END CONTENT -->
