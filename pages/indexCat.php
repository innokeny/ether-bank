
<?php include ("../blocks/html_customer.php");?>

    <section class="section">
        <div class="dashboard">
            <h2 class="title">CATALOG</h2>
            <form method="post" action="../validation-form/add_to_cart.php">
                <div class="insights">
                    <?php
                        include ("../blocks/infoProduct.php");
                        $val = 0;
                        foreach ($infoProduct as $Product) {
                            $val++;
                            ?>
                                <div class="sales">
                                    <h2><?= $Product[1] ?></h2>
                                    
                                    <h3><?= $Product[2] ?> eth</h3>
                                    <button type="submit" name="add_btn" value="<?= $Product[0]-1 ?>">
                                        Add
                                    </button>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </form>
        </div>
    </section>


    <script>
        var infoProduct = <?php echo json_encode($infoProduct) ?>;

        $("button").click(function() {
            var fired_button = $(this).val();
            var name_product = infoProduct[fired_button][1];
        });

        
    </script>
</body>

</html>