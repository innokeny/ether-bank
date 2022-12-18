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
            <h2 class="title">TRANSACTIONS</h2>
            <div class="recent-orders">
                <table>
                    <thead>
                        <tr>
                            <th width="10%"></th>
                            <th width="20%">ID</th>
                            <th width="50%">PRODUCT NAME</th>
                            <th width="20%">STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $trans = mysqli_query($connect, "SELECT * FROM `transactions`");
                            $trans = mysqli_fetch_all($trans);

                            foreach ($trans as $product) {
                                ?>
                                    <tr>
                                        <td><input class="check" type="radio" id="<?= $product[0] ?>" name="group1"></td>
                                        <td><?= $product[0] ?></td>
                                        <td><?= $product[1] ?></td>
                                        <td><?= $product[2] ?></td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="details">
                    <h4>CUSTOMER DATA:</h4>
                    <div class="custd">
                        <div class="custd1">
                            <div id="field_name">Select a transaction</div>
                            <div id="custNumber">null</div>
                            <div id="custEmail"></div>
                        </div>
                        <div class="custd2">
                            <div id="order_date"></div>
                            <div id="payment_date"></div>
                            <div id="payment"></div>
                        </div>
                        <div>
                            <div id="pic"></div>
                            <div id="product"></div>
                        </div>
                    </div>
                    <button class="confirm">Confirm</button>
                </div>
            </div>
        </div>
    </section>

    <script>
        <?php include ("../blocks/infoCustomer.php");?>

        var infoCustomer = <?php echo json_encode($infoCustomer) ?>;
        var trans = <?php echo json_encode($trans) ?>;

        let contact = document.querySelectorAll('input[name="group1"]');
        for(let i = 0; i < contact.length; i++){
            contact[i].addEventListener("change", function() {
                for(let j = 0; j < infoCustomer.length; j++){
                    if (infoCustomer[j][0] == trans[i][6]){
                        var custEmail = infoCustomer[j][1];
                        var custNumber = infoCustomer[j][4];
                        var custName = infoCustomer[j][3];
                    }
                }
                document.getElementById('custEmail').innerHTML = custEmail;
                document.getElementById('custNumber').innerHTML = custNumber;
                document.getElementById('field_name').innerHTML = custName;
                document.getElementById('order_date').innerHTML = 'Order date: '+trans[i][3];
                document.getElementById('payment_date').innerHTML = 'Payment date: '+trans[i][5];
                document.getElementById('payment').innerHTML = 'Payment: '+trans[i][4];
                document.getElementById('product').innerHTML = trans[i][1];
            });
        }

        document.addEventListener("click", function(isit) {
            the_class = isit. target.className;
            if (the_class =="check") {
                the_id = isit. target.id;
            }
        });
        $(".confirm").click(function() {
            location.href = "../validation-form/confirm.php?id=" + the_id;
        });
    </script>
</body>

</html>