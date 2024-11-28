
<?php 
     include './component/header.php';
     ?>

<title>URBANDECAY | Cosmetics</title>

<div id="container">
    <div class="card-heading">
    <h2>Perfumes</h2>
</div>

    <div class="slider">
<!-- <img src="" alt=""> -->
    </div>
<div class='card-section'>
    <div class="cards">
    <?php
    include 'Config.php';
    $Record = mysqli_query($con, "select * from tblproduct");
    while ($row = mysqli_fetch_array($Record)) {
        $check_page = $row['PCategory'];
        if ($check_page === 'Hairspray') {

            echo "
            <a href='card-details.php?productId=$row[Id]'>
                <div class='card'>
                    <div class='img-section'>
                        <img src='../admin/product/$row[Pimage]' alt=''>
                    </div>
                    <div class='card-contents'>
                        <h4>$row[PName]</h4>
                        <div class='card-center-content'>
                            <p>RS: $row[PPrice]</p>
                            
                        </div>
                        <div class='cart-btn'>
                            <input type='submit' name='addCart' class='add-btn' value='See More'>
                        </div>
                    </div>
                </div>
            </a>
            ";

        }
    }
    ?>
</div>
    </div>
</div>

    <script src="./JS/index.js"></script>

<?php 
     include './component/footer.php';
     ?>
