<?php require_once '../templates/header.php';
    require_once '../models/Product.php';
?>
   
   
            
<link rel="stylesheet" href="../css/product.css">


<div class="product-img">
</div>

<div class="product-description">
    <h1>
        <?php 
            $product = new Product($_GET['product_id']);
            echo $product->title;

        ?>  
    </h1>
        <h4>Артикул 380954</h4>
            <br>
                <h3><i>
                        <?php 
                            $product = new Product($_GET['product_id']);
                            echo $product->price . ' руб.';
                        ?> 
                    </i>
                <h3>
                    <br>
                        <p>Отличные кеды из водонепроницаемого материала. Отлично подходят для любой погоды. Приятно сидят на ноге, стильные и комфортные</p>
                            <br>
</div>

<div class="product-size">
    <h3>РАЗМЕР</h3>
        <div class="sizes">
            <div class="size">38</div>
            <div class="size">39</div>
            <div class="size">40</div>
            <div class="size">41</div>
            <div class="size">42</div>
        </div>
</div>

    <a href="#" class="product-button">Добавить в корзину</a>

<?php require_once '../templates/footer.php' ?>
