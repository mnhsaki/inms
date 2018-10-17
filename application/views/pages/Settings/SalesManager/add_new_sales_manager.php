<section class="content">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title"><b>Add New Sales Manager</b></h3>

				</div>
				<div class="box-body">
					<form action="#" method="post">
						<div class="form-group has-feedback">
							<label>Sales Manager ID<span style="color:red;"> * </span></label>
							<input value="" name="salesmanagerid" class="form-control" placeholder="SM0011">
						</div>
						<div class="form-group has-feedback">
							<div id="select_box">
								<label>Div<span style="color:red;"> * </span></label>
								<select required="" id="div" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="div_id"
								 tabindex="-1" aria-hidden="true">
									<option selected="" disabled="">Select Div</option>
									<option value="">In Side Dhaka</option>
									<option value="">Out Side Dhaka</option>
								</select>
							</div>
						</div>
						<div class="form-group has-feedback">
							<div id="select_box">
								<label>Zone<span style="color:red;"> * </span></label>
								<select required="" id="zone" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="zone_id"
								 tabindex="-1" aria-hidden="true">
									<option selected="" disabled="">Select Zone</option>
									<option value="">Zone</option>
									<option value="">Zone</option>
									<option value="">Zone</option>
								</select>
							</div>
						</div>
						<div class="form-group has-feedback">
							<div id="select_box">
								<label>Area<span style="color:red;"> * </span></label>
								<select required="" id="area" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="area_id"
								 tabindex="-1" aria-hidden="true">
									<option selected="" disabled="">Select Area</option>
									<option value="">Area</option>
									<option value="">Area</option>
									<option value="">Area</option>
								</select>
							</div>
						</div>
						<div class="form-group has-feedback">
							<label>Sales Manager Name<span style="color:red;"> * </span></label>
							<input type="text" id="salesmanagername" readonly="" name="salesmanagername" class="form-control" placeholder="Sales Manager">
						</div>
						<div class="form-group has-feedback">
							<label>Sales Manager Email<span style="color:red;"> * </span></label>
							<input value="" name="salesmanagermail" class="form-control" placeholder="salesmanager@email.com">
						</div>
						<div class="form-group has-feedback">
							<label>Sales Manager Phone Number<span style="color:red;"> * </span></label>
							<input value="" name="salesmanagernumber" class="form-control" placeholder="+880 123456789">
						</div>
						<div class="form-group has-feedback">
							<label>Sales Manager NID Number<span style="color:red;"> * </span></label>
							<input value="" name="smid" class="form-control" placeholder="NID Number">
						</div>
						<div class="form-group has-feedback">
							<label>Sales Manager Address<span style="color:red;"> * </span></label>
							<textarea class="form-control" name="salesmanageraddress" rows="" id="salesmanageraddress" placeholder="Address,Dhaka,Bangladesh"></textarea>
						</div>
						<div class="form-group has-feedback">
							<label>Note<span style="color:red;"></span></label>
							<textarea class="form-control" rows="" name="salesmanagernote" id="salesmanagernote" placeholder="Note....."></textarea>
						</div>
						<div class="form-group has-feedback">
							<label>Image<span style="color:red;"></span></label>
							<input type="file" name="slimage">
						</div>
				</div>

				<div class="row">
					<div class="col-xs-4">

					</div>
					<div class="col-xs-4">

					</div>
					<!-- /.col -->
					<div class="col-xs-4">
						<button onclick="return checkad_add()" type="submit" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
					</div>

					<!-- /.col -->
				</div>
				</form>
			</div>
			<!-- /.box-body -->
		</div>
	</div>
	<div class="col-md-3"></div>
	</div>
</section>
