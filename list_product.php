
<?php

require_once("./entities/product.class.php");

?>
<?php
    include_once("header.php");
    $prods = Product::list_product();
    //$prods = Product::list_product();
    // if(!isset($_GET["cateid"])){
        
    // }
    // else{
    //     $cateid = $_GET["cateid"];
    //     $prods = Product::list_category();
    // }
    
    ?>
    <div class="container text-center">
        <h3>Sản phẩm cửa hàng</h3><br>
        <div class="row">
            <?php
            
            foreach ($prods as $item) {
                ?>
                
                <div class="col-sm-4">
                    <img src="<?php echo "./".$item["Picture"];?>" class="img-responsive" style="width:100%" alt="Image">
                    <p class="text-danger"><?php echo $item["ProductName"]; ?></p> 
                    <p class="text-danger"><?php echo $item["Description"]; ?></p> 
                    <p class="text-info"><?php echo $item["Price"]; ?>VND</p>
                    <p>
                        <button type="button" class="btn btn-primary">Mua hàng</button>
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php include_once("./footer.php");
    ?>