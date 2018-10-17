<section class="content">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 "></div>
        <div class="col-md-6 col-md-offset-3 ">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Add New Zone</b></h3>

                </div>
                <div class="box-body">
                    <form action="#" method="post">
                    <div class="form-group has-feedback">
                            <label>Zone ID</label>
                            <input required="" name="zone_id" class="form-control" placeholder="Z0001">
                        </div>
                    <div class="form-group has-feedback">
							<div id="select_box">
								<label>Div<span style="color:red;"> * </span></label>
								<select required="" id="div" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="customer_id" tabindex="-1" aria-hidden="true">
									<option selected="" disabled="">Select Div</option>
									<option value="">In Side Dhaka</option>
									<option value="">Out Side Dhaka</option>
								</select>
							</div>
						</div>
                        <div class="form-group has-feedback">
                            <label>Zone Name</label>
                            <input required="" name="zonename" class="form-control" placeholder="Zone Name">
                        </div>
                        <div class="row">
                            <div class="col-xs-4">

                            </div>
                            <div class="col-xs-4">

                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" onclick="return checkad_add()" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
                            </div>

                            <!-- /.col -->
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</section>