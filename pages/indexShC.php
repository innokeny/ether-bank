    <?php include ("../blocks/html_customer.php");?>

    <section class="section">
        <div class="dashboard">
            <h2 class="title">SHOPPING CART</h2>
            <div class="sh_cart">
                <table>
                    <thead>
                        <tr>
                            <th>PRODUCT</th>
                            <th>STATUS</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include ("../blocks/infoProductsUser.php");
                            foreach ($products as $product) {
                                ?>
                                    <tr>
                                        <td><?= $product[1] ?></td>
                                        <td><?= $product[2] ?></td>
                                        <td><button id="pay<?= $product[0] ?>" class="pay" type="submit" value='<?= $product[0] ?>'>Pay</button></td>
                                        <td><button id="del<?= $product[0] ?>" class="del" type="submit" value='<?= $product[0] ?>'>Delete</button></td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script>
        var products = <?php echo json_encode($products) ?>;

        for(var i = 0; i<products.length; i++){
            if(products[i][4] == 'Paid'){
                document.getElementById("pay"+products[i][0]).disabled = true;
                document.getElementById("pay"+products[i][0]).style.visibility = 'hidden';
                document.getElementById("del"+products[i][0]).disabled = true;
                document.getElementById("del"+products[i][0]).style.visibility = 'hidden';
            }
        }

        $(".pay").click(function() {
            var val = $(this).val();
            location.href = "../validation-form/pay.php?id=" + val;
        });

        $(".del").click(function() {
            var val = $(this).val();
            location.href = "../validation-form/delete.php?id=" + val;
        });
    </script>
</body>

</html>