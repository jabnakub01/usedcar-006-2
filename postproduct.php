<?php
    include("connect.php");
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Post car</h1>
    </div>
</div>
<div class="container">
        <div class="row">
            <form action="saveproduct.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    
                    <div class="col-md-5">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="Brand" class="col-md-3 control-label">Brand: </label>
                    <div class="col-md-5">
                        <input type="textarea" name="txtbrand" id=""class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="Model" class="col-md-3 control-label">Model: </label>
                    <div class="col-md-5">
                        <input type="text" name="txtmodel" id=""class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="ModelYear" class="col-md-3 control-label">ModelYear: </label>
                    <div class="col-md-5">
                        <input type="text" name="txtmodelyear" id=""class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="Color" class="col-md-3 control-label">Color: </label>
                    <div class="col-md-5">
                        <input type="text" name="txtcolor" id=""class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="License" class="col-md-3 control-label">License: </label>
                    <div class="col-md-5">
                        <input type="text" name="txtlicense" id=""class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Province" class="col-md-3 control-label">Province: </label>
                    <div class="col-md-5">
                        <input type="text" name="txtprovince" id=""class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Price" class="col-md-3 control-label">Price: </label>
                    <div class="col-md-5">
                        <input type="text" name="txtprice" id=""class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="Picture" class="col-md-3 control-label">Picture: </label>
                    <div class="col-md-5">
                        <input type="file" name="filepic" id=""class="form-control-file" accept="image/*" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3">
                        <input type="hidden" name="hdnProductID" value="<?php echo $prd->id;?>">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="submit" class="btn btn-danger">Reset</button>
                    </div>
                </div>