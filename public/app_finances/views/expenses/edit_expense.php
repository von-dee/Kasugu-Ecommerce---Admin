


<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Expenses</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Expenses</a></li>
					<li class="breadcrumb-item"><a href="#">Edit</a></li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
				<button class="btn btn-dark" onclick="$('#pg').val('app_finances');$('#view').val('expenses');$('#class_call').val('list_expenses');$('#keys').val('');document.myform.submit();"> <i class="feather icon-arrow-left"></i> &nbsp; Back </button>
                &nbsp; &nbsp;
				<button class="btn btn-success-rgba" onclick="$('#pg').val('app_finances');$('#view').val('expenses');$('#class_call').val('update_expenses');$('#keys').val('<?php echo $result['EXPS_CODE']; ?>');document.myform.submit();"><i class="feather icon-check-square"></i> &nbsp; Submit </button>
            </div>                        
        </div>
    </div>          
</div>
<!-- End Breadcrumbbar -->


<!-- Start Contentbar -->    
<div class="contentbar">                
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12 col-xl-12">
            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-12 col-xl-12">

					<div class="card m-b-30">

                        <div style="padding: 2em;">
                            <!-- DRIVER'S PERSONAL INFORMATION  -->
                            <div class="row">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-6">

                                    <div id="old_cust" style="display: block;">

                                        <div class="form-group row showcase_row_area">
                                            <div class="col-md-3 showcase_text_area"><label for="custsearch">Expense Category</label>
                                            </div>
                                        
                                            <div class="col-md-9 showcase_content_area">
                                            <input type="text"
                                                    placeholder="" class="form-control" id="custname"
                                                    name="custname" value="<?php echo $result['EXPS_CATNAME'] ?>" readonly>
                                            </div>

                                        </div>

                                    </div>


                                    <div id="new_cust" style="display: none;">

                                        <div class="form-group row showcase_row_area">
                                            <div class="col-md-3 showcase_text_area"><label for="custname">Expense Category</label></div>
                                            <div class="col-md-9 showcase_content_area"><input type="text"
                                                    placeholder="" class="form-control" id="custname"
                                                    name="custname" value="" readonly>
                                                <span style="color: #ff1313; font-size: 0.8em; margin-left: 1em;">Enter expense category name!</span>	
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row showcase_row_area">
                                            <div class="col-md-3 showcase_text_area"><label
                                                    for="expencecategory">Expense Category Description</label></div>
                                            <div class="col-md-9 showcase_content_area">
                                                <textarea class="form-control" name="" id="" cols="30" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-sm-3">

                                    <!-- <div class="form-group row showcase_row_area">
                                        <a href="javascript:void(0);" onclick="toggle_div()"
                                            class="btn btn-primary btn-icon-split" style="float: right;">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-plus"></i>
                                            </span>
                                            <span class="text" id="customer_btn">New Expense Category</span>
                                        </a>
                                    </div> -->

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-6">
                                    
                                    <div class="form-group row showcase_row_area">
                                        <div class="col-md-3 showcase_text_area"><label
                                                for="expense_totalamount">Total Amount</label></div>
                                        <div class="col-md-9 showcase_content_area"><input type="number"
                                                class="form-control" id="expense_totalamount" name="expense_totalamount" value="<?php echo $result['EXPS_TOTALAMOUNT'] ?>" readonly></div>
                                    </div>

                                    <div class="form-group row showcase_row_area">
                                        <div class="col-md-3 showcase_text_area"><label
                                                for="expense_amountpaid">Amount Paid</label></div>
                                        <div class="col-md-9 showcase_content_area"><input type="number"
                                                class="form-control" id="expense_amountpaid" name="expense_amountpaid" value="<?php echo $result['EXPS_AMOUNTPAID'] ?>" readonly>
                                                <span>Amount left to Pay: <b><?php echo (float)$result['EXPS_TOTALAMOUNT'] - (float)$result['EXPS_AMOUNTPAID']; ?></b></span>
                                            </div>
                                    </div>

                                    <div class="form-group row showcase_row_area">
                                        <div class="col-md-3 showcase_text_area"><label
                                                for="expense_amounttopay">Amount To Pay</label></div>
                                        <div class="col-md-9 showcase_content_area"><input type="number"
                                                class="form-control" id="expense_amounttopay" name="expense_amounttopay" value=""></div>
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                </div>
                            </div>
                            
                        </div>
					</div>

				</div>
				<!-- End col -->
			</div>
		</div>
	</div>
</div>
