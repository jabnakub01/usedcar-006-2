<?php

    if(isset($_GET['cat'])){
        $category = $_GET['cat'];
    }
    else{
        header("Location: index.php");
    }
    include("connect.php");
    $sql = "SELECT * FROM car WHERE carType=$category";
    $result = $con->query($sql);
    if(!$result){
        echo "Error: " . $con->error;
    }
    else{
        if($result->num_rows>0){
            $prd = $result->fetch_object();
        }
        else{
            $prd = NULL;
        }
    }
?>
    <div class="container">
        <div class="row">
        <?php
            $sql = "SELECT * FROM car WHERE carType=$category";
            $result = $con->query($sql);
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
            ?>
                
        </div>
    </div>

</div>
</body>
</html>
