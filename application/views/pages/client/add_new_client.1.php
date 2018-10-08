<section class="content">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title"><b>New Client</b></h3>

				</div>
				<div class="box-body">
					<form action="#" method="post">
						<div class="form-group has-feedback">
							<label>Warehouse Name <span style="color:red;">*</span></label>
							<select name="warehouseID" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1"
							 aria-hidden="true">
								<option value="" disabled=""> Select Warehouse </option>
								<option value="">Warehouse</option>
								<option selected="" value="">Warehouse</option>
								<option value="">Warehouse</option>
							</select>
						</div>
						<div class="form-group has-feedback">
								<div id="select_box">
									<label>Client<sup>*</sup></label>
									<select required="" id="cst_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="customer_id" tabindex="-1" aria-hidden="true">
										<option selected="" disabled="">---</option>
										<option value="">Clint</option>
										<option value="">Clint</option>
										<option value="">Clint</option>
									</select>
								</div>
							</div>
						<div class="form-group has-feedback">
							<label>Client Name<span style="color:red;">*</span></label>
							<input name="clientName" class="form-control" placeholder="Client Name">
						</div>
						<div class="form-group has-feedback">
							<label>Client Email</label>
							<input type="email" name="clientEmail" class="form-control" placeholder="Client Email">
						</div>
						<div class="form-group has-feedback">
							<label>Client Phone Number<span style="color:red;">*</span></label>
							<input name="clientPhone" class="form-control" placeholder="Client Phone Number">
						</div>
						<div id="opeDiv" style="display: none;" class="form-group has-feedback">
							<label>Opening Balance<span style="color:red;">*</span></label>
							<input name="opening_balance" class="form-control" placeholder="Opening Balance">
						</div>
						<div class="form-group has-feedback">
							<label>Client Address <span style="color:red;">*</span></label>
                            <div class="form-group">
  <textarea class="form-control" placeholder="Client Address" rows="5" id="comment"></textarea>
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
