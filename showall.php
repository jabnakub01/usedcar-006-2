<div class="row">
<?php
    if(isset($_SESSION['id'])){
    ?>

    <div class="col-lg-11">
    <div class="col-lg-6">
        <h1 class="page-header">All Car</h1>
    </div>
        <p><a href="index.php?menu=insert" class="btn btn-success btn pull-right"><i class="glyphicon glyphicon-plus"></i> Post a car</a></p>

    </div>
    <?php                        
    }                   
    ?>
</div>
<?php
            $sql = "SELECT * FROM car ORDER BY id";
            $result = $con->query($sql);
                    if(!$result){
                        echo "ERROR ";
                    }
                    else{
                while($prd=$result->fetch_object()){
                    //$prd->id; //$prd["id"];
        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                    <a href="productdetail.php?pid=<?php echo $prd->id; ?>">
                        <img src="image/cars/<?php echo $prd->carpic; ?>" alt="">
                    </a>
                        <div class="caption">
                            <h3><?php echo $prd->brand; ?></h3>
                                <p><?php echo $prd->model; ?></p>
                                <p><?php echo $prd->color; ?></p>
                                <p><?php echo $prd->license; ?></p>
                                <p><?php echo $prd->province; ?></p>
                                <p><?php echo $prd->modelYear; ?></p>
                                <p>
                                    <strong>Price: <?php echo $prd->price ?></strong>
                                </p>
                                <?php
                                if(isset($_SESSION['id'])){
                                ?>
                                <p>
                                    <a href="index.php?pid=<?php echo $prd->id ?>&menu=edit" class="btn btn-warning">
                                        <i class="glyphicon glyphicon-pencil"> Edit</i> 
                                    </a>
                                    <a href="deleteproduct.php?pid=<?php echo $prd->id ?>" class="btn btn-danger lnkDelete">
                                        <i class="glyphicon glyphicon-trash" id="lnkDelete"> Delete</i> 
                                    </a>
                                </p>
                                <?php
                                    }
                                ?>
                        </div>
                    </div>
                </div>
            <?php
                }
            }
            ?>
                