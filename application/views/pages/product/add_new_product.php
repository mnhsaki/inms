<section class="content">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 "></div>
        <div class="col-md-6 col-md-offset-3 ">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>New Product</b></h3>

                </div>
                <div class="box-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label>Product Category</label>
                            <select name="catagoryID" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option value="">-- Product Catagory --</option>
                                                                    <option value="1">Device</option>
                                                                    <option value="2">cat1</option>
                                                                    <option value="3">Baby Item</option>
                                                                    <option value="4">Bag</option>
                                                                    <option value="5">gghui;h</option>
                                                                    <option value="6">plate</option>
                                                                    <option value="7">ladies t-sharts   </option>
                                                            </select>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Product Name</label>
                            <input required="" name="productName" class="form-control" placeholder="Product Name">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Product retail Price</label>
                            <input required="" name="productPrice" class="form-control" placeholder="Product Sales Price">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Product Whole Sale Price</label>
                            <input required="" name="productWholeSalePrice" class="form-control" placeholder="Product Whole Sale Price">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Product Code</label>
                            <div class="input-group input-group-sm">
                                <input required="" id="productCode" type="text" name="productCode" placeholder="Product Code" class="form-control">
                                <span class="input-group-btn">
                                    <button id="random" type="button" class="btn btn-flat"><i class="fa fa-random"></i></button>
                                </span>
                            </div>
                            <span id="productCodeError" class="help-block" style="color: red;font-weight: bold;"></span>
                            <span class="help-block">You can scan your barcode or click random button</span>

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