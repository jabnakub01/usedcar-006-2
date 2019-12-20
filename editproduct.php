<?php
    include("connect.php");
    if(!isset($_GET['pid'])||$_GET['pid']==""){
        header("Location: index.php");
    }
    else{
        $pid = $_GET['pid'];
    }
    $sql="SELECT * FROM car WHERE id =$pid";
    $result = $con->query($sql);
    if(!$result){
        echo "Error : " .$con->error;
    }
    else{
        if($result->num_rows>0){
            $prd =$result->fetch_object();
        }
        else{
            $prd=NULL;
        }
    }

?>
<div class="container">
    <h2>Edit Product</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="thumbnail">
                <img src="image/cars/<?php echo $prd->carpic; ?>" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <form action="updateproduct.php" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Brand" class="col-md-3 control-label">Brand: </label>
                    <div class="col-md-6">
                        <input type="textarea" name="txtbrand" id=""class="form-control" value="<?php echo $prd->brand; ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="Model" class="col-md-3 control-label">Model: </label>
                    <div class="col-md-6">
                        <input type="text" name="txtmodel" id=""class="form-control" value="<?php echo  $prd->model; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ModelYear" class="col-md-3 control-label">ModelYear: </label>
                    <div class="col-md-6">
                        <input type="text" name="txtmodelyear" id=""class="form-control" value="<?php echo  $prd->modelYear; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Color" class="col-md-3 control-label">Color: </label>
                    <div class="col-md-6">
                        <input type="text" name="txtcolor" id=""class="form-control" value="<?php echo  $prd->color; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="License" class="col-md-3 control-label">License: </label>
                    <div class="col-md-6">
                        <input type="text" name="txtlicense" id=""class="form-control" value="<?php echo  $prd->license; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Province" class="col-md-3 control-label">Province: </label>
                    <div class="col-md-6">
                        <input type="text" name="txtprovince" id=""class="form-control" value="<?php echo  $prd->province; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Price" class="col-md-3 control-label">Price: </label>
                    <div class="col-md-6">
                        <input type="text" name="txtprice" id=""class="form-control" value="<?php echo  $prd->price; ?>">
                    </div>
                </div>

                <div class="form-group">
                <div class="col-md-offset-3">
                        <input type="hidden" name="hdnProductID" value="<?php echo $prd->id;?>">
                        <button type="submit" class="btn btn-primary glyphicon glyphicon-save"> Save</button>
                        <button type="submit" class="btn btn-danger">Reset</button>
                    </div>
                </div>

            </form>
            </div>
        </div>
    </div>
