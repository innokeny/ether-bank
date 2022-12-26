<?php include ("../blocks/html_manager.php");?>

    <section class="section">
        <div class="dashboard">
            <h2 class="title">DASHBOARD</h2>
            <div class="insights">

                <div class="last_customer">
                    <h2>CUSTOMER</h2>
                    <select id="optioncustomer" name="taskOption">
                        <option value="0">...</option>
                        <?php
                            $val = 0;
                            foreach ($infoCustomer as $Customer) {
                                $val++;
                                ?>
                                    <option value="<?= $val ?> <?= $Customer[0] ?>"><?= $Customer[3] ?></option>
                                <?php
                            }
                        ?>
                    </select>
                    <div class="customer">
                        <i class='bx bxs-face' ></i>
                        <div class="info_customer">
                            <h3 id="fullname" class="fullname"></h3>
                            <div id="number" class="number"></div>
                            <div id="email" class="email"></div>
                            <button id="blacklist" style="visibility: hidden">Add to Blacklist</button>
                        </div>
                    </div>
                    <form method="post" action="../validation-form/sendemail.php">
                        <div class="mf">
                            <textarea name="mes_area" class="message_field" placeholder="Enter a message" required></textarea>
                            <button id="message" name="message" type="submit">Send message to email</button>
                        </div>
                    </form>
                </div>
                <div class="promo_code">
                    <h2>PROMO CODE</h2>
                    <div class="pc">
                        <div class="productname">
                            <h4>Product name</h4>
                            <select id="optionproduct" class="pname_field">
                            <?php
                                include ("../blocks/infoProduct.php");
                                $val = 0;
                                foreach ($infoProduct as $Product) {
                                    $val++;
                                    ?>
                                        <option value="<?= $val ?>"><?= $Product[1] ?></option>
                                    <?php
                                }
                            ?>
                            </select>
                        </div>
                        <div class="percent">
                            <h4>Discount amount</h4>
                            <select id="optionpercent" class="damount_field">
                                <option value="10">10%</option>
                                <option value="15">15%</option>
                                <option value="20">20%</option>
                            </select>
                        </div>
                        <button id="generate">Generate</button>
                    </div>
                    <div class="pf">
                        <i class='bx bx-barcode'></i>
                        <textarea id="promo_field" class="promo_field" > </textarea>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>

    <?php require ("../blocks/get_promo.php"); ?>
    <script>
        function arr_val(line){
            array = line.trim().split(" ");
            for (var i in array) {
                array[i] = Number(array[i]);
            }
            return array
        }        
        var op_cust = [];

        var infoCustomer = <?php echo json_encode($infoCustomer) ?>;
        var infoProduct = <?php echo json_encode($infoProduct) ?>;

        let customer = document.querySelector("#optioncustomer");
        customer.addEventListener("change", function() {
            op_cust = arr_val(optioncustomer.value);
            if(optioncustomer.value == 0){
                document.getElementById('blacklist').style.visibility = 'hidden';
                document.getElementById('blacklist').disabled = true;

                document.getElementById('fullname').innerHTML = '';
                document.getElementById('number').innerHTML = '';
                document.getElementById('email').innerHTML = '';
            } else {
                document.getElementById('fullname').innerHTML = infoCustomer[op_cust[0]-1][3];
                document.getElementById('number').innerHTML = infoCustomer[op_cust[0]-1][4];
                document.getElementById('email').innerHTML = infoCustomer[op_cust[0]-1][1];

                document.getElementById('blacklist').disabled = false;
                document.getElementById('blacklist').style.visibility = 'visible';

                document.getElementById("message").value = infoCustomer[op_cust[0]-1][1];
            }
        });

        let blist = document.querySelector("#blacklist");
        blist.addEventListener("click", function() {
            location.href = "../validation-form/blacklist.php?option=" + op_cust[1];
        });

        var per_val = 0;
        var prod = '';

        let product = document.querySelector("#optionproduct");
        product.addEventListener("click", function() {
            prod = infoProduct[optionproduct.value-1][1];
        });

        let percent = document.querySelector("#optionpercent");
        percent.addEventListener("click", function() {
            per_val = optionpercent.value;
        });
        
        let gen = document.querySelector("#generate");
        gen.addEventListener("click", function() {
            location.href = `../validation-form/generate_promo.php?product=${prod}&percent=${per_val}`;
        });

    </script>
</body>

</html>