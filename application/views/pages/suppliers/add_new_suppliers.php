<section class="content">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">New Supplier</h3>

				</div>
				<div class="box-body">
					<form action="#" method="post">

						<div class="form-group has-feedback">
							<label>Warehouse</label>
							<select class="form-control" name="warehouseID">
								<option value="" selected="" disabled="">Select Warehouse</option>
								<option selected="" value="">Warehouse</option>
								<option value="">Warehouse</option>
								<option value="">Warehouse</option>
							</select>
						</div>

						<div class="form-group has-feedback">
							<label>Supplier Name</label>
							<input name="supplierName" class="form-control" placeholder="Supplier Name">
						</div>
						<div class="form-group has-feedback">
							<label>Supplier Email</label>
							<input type="email" name="supplierEmail" class="form-control" placeholder="Supplier Email">
						</div>
						<div class="form-group has-feedback">
							<label>Supplier Phone Number</label>
							<input name="supplierPhone" class="form-control" placeholder="Supplier Phone Number">
						</div>
						<div class="form-group has-feedback">
							<label>Opening Balance</label>
							<input name="opening_balance" class="form-control" value="0.00" placeholder="Opening Balance">
						</div>
						<div class="form-group has-feedback">
							<label>Supplier Address</label>
                            <div class="form-group">
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
						</div>

						<div class="row">
							<div class="col-xs-4">

							</div>
							<div class="col-xs-4">

							</div>
							<!-- /.col -->
							<div class="col-xs-4">
								<button type="submit" onclick="return get_confirm()" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
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
