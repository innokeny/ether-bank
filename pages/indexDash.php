<?php
    require_once '../blocks/connect.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styles1.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
    <?php include ("../blocks/html.php");?>

    <section class="section">
        <div class="dashboard">
            <h2 class="title">DASHBOARD</h2>
            <div class="insights">
                <div class="sales">
                    <h2>ANALYTICS</h2>
                    <div class="item">
                        <i class='bx bxs-user'></i>
                        <div class="right">
                            <div class="info">
                                <h3>NEW</h3>
                                <h3>CUSTOMERS</h3>
                                <small class="text-muted">Last 24 Hours</small>
                            </div>
                            <h5 class="success">+21%</h5>
                            <h3>542</h3>
                        </div>
                    </div>
                    <div class="graph">
                        <i class='bx bx-bar-chart-alt-2'></i>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Sales</h3>
                                <h1>$25,024</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>81%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                </div>
                <div class="last_customer">
                    <form method="post" action="../validation-form/blacklist.php">
                        <h2>CUSTOMER</h2>
                        <select id="optioncustomer" name="taskOption">
                            <option value="0">...</option>
                            <?php
                                include ("../blocks/infoCustomer.php");
                                $val = 0;
                                foreach ($infoCustomer as $Customer) {
                                    $val++;
                                    ?>
                                        <option value='{"<?= $Customer[0] ?>","<?= $val ?>"}'><?= $Customer[3] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                        <div class="customer">
                            <i class='bx bxs-face' ></i>
                            <div class="info_customer">
                                <h3 id="fullname" class="fullname">Select a customer</h3>
                                <div id="number" class="number">null</div>
                                <div id="email" class="email"></div>
                                <button type="submit">Add to Blacklist</button>
                            </div>
                        </div>
                    </form>
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
                            <select class="pname_field">
                                <option>Bether card</option>
                            </select>
                        </div>
                        <div class="percent">
                            <h4>Discount amount</h4>
                            <select class="damount_field">
                                <option>10%</option>
                                <option>15%</option>
                                <option>20%</option>
                            </select>
                        </div>
                        <button>Generate</button>
                    </div>
                    <div class="pf">
                        <i class='bx bx-barcode'></i>
                        <textarea class="promo_field" > </textarea>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>


    <script>
        <?php include ("../blocks/infoCustomer.php");?>
        var infoCustomer = <?php echo json_encode($infoCustomer) ?>;

        console.log(infoCustomer);

        document.addEventListener("change", function() {
            console.log(optioncustomer.value[6]);
            if(optioncustomer.value == 0){
                document.getElementById('fullname').innerHTML = 'Select a customer';
                document.getElementById('number').innerHTML = 'null';
                document.getElementById('email').innerHTML = '';
            } else {
                document.getElementById('fullname').innerHTML = infoCustomer[optioncustomer.value[6]-1][3];
                document.getElementById('number').innerHTML = infoCustomer[optioncustomer.value[6]-1][4];
                document.getElementById('email').innerHTML = infoCustomer[optioncustomer.value[6]-1][1];

                document.getElementById("message").value = infoCustomer[optioncustomer.value[6]-1][1];
            }
            console.log(document.getElementById("message").value);
        });
    </script>
</body>

</html>