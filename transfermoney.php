<?php

$con = mysqli_connect('localhost', 'root', "", 'banking system');

if (!$con) {
    die("Connection to this database failed due to " .
        mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sender = $_POST['senderlist'];
    $receiver = $_POST['receiverlist'];
    $amount = $_POST['amount'];

    $sql1 = "INSERT INTO `transactions` (`Sender`, `Receiver`, `Amount`, `DateTime`) 
        VALUES ('$sender', '$receiver', '$amount', current_timestamp())";


    $sql2 = "UPDATE `customers` 
                 SET `Account Balance` = `Account Balance`-'$amount' 
                 WHERE `customers`.`Name` = '$sender'";

    $sql3 = "UPDATE `customers` 
        SET `Account Balance` = `Account Balance`+'$amount' 
        WHERE `customers`.`Name` = '$receiver'";

    $result1 = mysqli_query($con, $sql1);
    $result2 = mysqli_query($con, $sql2);
    $result2 = mysqli_query($con, $sql3);
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css?<?php echo time(); ?>">
    <title>Transfer Money</title>
</head>

<body style="background-image: url(images/bg.png); margin:0">
    <nav id='menu'>
        <input type='checkbox' id='responsive-menu'><label></label>
        <ul>
            <li><a href='index.php'><img src="images/Home.png" style="width: 28px;padding-top: 8px"></a></li>
            <li><a href='customers.php'>Customers</a></li>
            <li><a href='transactions.php'>Transactions</a></li>
            <li><a href='transfer.php'>Transfer Money</a></li>
            <li><a href='contact.php'>Contact Us</a></li>
        </ul>

    </nav>

    <div style="padding: 0px; margin:0">

        <h3></h3>

    </div>

    <div class="tbody">
        <div>
            <div class="form-container">
                <h3>Transferred Successfully</h3>
                <img src="images/check.png" style="width: 70px;padding-left: 120px; "><br><br>
                <div class="php" style="font-size: 16px;">
                    <?php echo " " . $amount . " Rs Transferred from " . $sender . " to " . $receiver; ?>
                </div>

            </div>
        </div>

    </div>



</body>

</html>