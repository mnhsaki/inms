<section class="content">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title"><b>Add New Team Leader</b></h3>

				</div>
				<div class="box-body">
					<form action="#" method="post">
						<div class="form-group has-feedback">
							<label>Team Leader ID<span style="color:red;"> * </span></label>
							<input value="" name="teamleaderid" class="form-control" placeholder="TL0011">
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
								<select required="" id="zone" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="customer_id"
								 tabindex="-1" aria-hidden="true">
									<option selected="" disabled="">Select Zone</option>
									<option value="">Zone</option>
									<option value="">Zone</option>
									<option value="">Zone</option>
								</select>
							</div>
						</div>
						<div class="form-group has-feedback">
							<label>Team Leader Name<span style="color:red;"> * </span></label>
							<input type="text" id="teamleadername" readonly="" name="teamleadername" class="form-control" placeholder="Team Leader">
						</div>
						<div class="form-group has-feedback">
							<label>Team Leader Email<span style="color:red;"> * </span></label>
							<input value="" name="teamleadermail" class="form-control" placeholder="teamleder@email.com">
						</div>
						<div class="form-group has-feedback">
							<label>Team Leader Phone Number<span style="color:red;"> * </span></label>
							<input value="" name="teamleadernumber" class="form-control" placeholder="+880 123456789">
						</div>
						<div class="form-group has-feedback">
							<label>Team Leader NID Number<span style="color:red;"> * </span></label>
							<input value="" name="tnid" class="form-control" placeholder="NID Number">
						</div>
						<div class="form-group has-feedback">
							<label>Team Leader Address<span style="color:red;"> * </span></label>
							<textarea class="form-control" name="teamleaderaddress" rows="" id="teamleaderaddress" placeholder="Address,Dhaka,Bangladesh"></textarea>
						</div>
						<div class="form-group has-feedback">
							<label>Note<span style="color:red;"></span></label>
							<textarea class="form-control" rows="" name="teamleadernote" id="teamleadernote" placeholder="Note....."></textarea>
						</div>
						<div class="form-group has-feedback">
							<label>Image<span style="color:red;"></span></label>
							<input type="file" name="tlimage">
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
