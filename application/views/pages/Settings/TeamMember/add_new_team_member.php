<section class="content">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title"><b>Add New Team Member</b></h3>

				</div>
				<div class="box-body">
					<form action="#" method="post">
						<div class="form-group has-feedback">
							<label>Team Member ID<span style="color:red;"> * </span></label>
							<input value="" name="teammemberid" class="form-control" placeholder="TM0011">
						</div>
						<div class="form-group has-feedback">
							<div id="select_box">
								<label>Div<span style="color:red;"> * </span></label>
								<select required="" id="div" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="customer_id"
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
								<select required="" id="zone" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="zone"
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
								<select required="" id="area" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="zone_id"
								 tabindex="-1" aria-hidden="true">
									<option selected="" disabled="">Select Area</option>
									<option value="">Area</option>
									<option value="">Area</option>
									<option value="">Area</option>
								</select>
							</div>
						</div>
						<div class="form-group has-feedback">
							<div id="select_box">
								<label>Team Leader<span style="color:red;"> * </span></label>
								<select required="" id="TeamLeader" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="tlname"
								 tabindex="-1" aria-hidden="true">
									<option selected="" disabled="">Select Team Leader</option>
									<option value="">Team Leader</option>
									<option value="">Team Leader</option>
									<option value="">Team Leader</option>
								</select>
							</div>
						</div>
						<div class="form-group has-feedback">
							<label>Team Member Name<span style="color:red;"> * </span></label>
							<input type="text" id="teammembername" readonly="" name="teammembername" class="form-control" placeholder="Team Member">
						</div>
						<div class="form-group has-feedback">
							<label>Team Member Email<span style="color:red;"> * </span></label>
							<input value="" name="teammembermail" class="form-control" placeholder="teammember@email.com">
						</div>
						<div class="form-group has-feedback">
							<label>Team Member Phone Number<span style="color:red;"> * </span></label>
							<input value="" name="teammembernumber" class="form-control" placeholder="+880 123456789">
						</div>
						<div class="form-group has-feedback">
							<label>Team Member NID Number<span style="color:red;"> * </span></label>
							<input value="" name="tnid" class="form-control" placeholder="NID Number">
						</div>
						<div class="form-group has-feedback">
							<label>Team Member Address<span style="color:red;"> * </span></label>
							<textarea class="form-control" name="teammemberaddress" rows="" id="teammemberaddress" placeholder="Address,Dhaka,Bangladesh"></textarea>
						</div>
						<div class="form-group has-feedback">
							<label>Note<span style="color:red;"></span></label>
							<textarea class="form-control" rows="" name="teammembernote" id="teammembernote" placeholder="Note....."></textarea>
						</div>
						<div class="form-group has-feedback">
							<label>Image<span style="color:red;"></span></label>
							<input type="file" name="tmimage">
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
