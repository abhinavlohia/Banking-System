<?php

include 'connect.php';

$query = mysqli_query($con, "Select * from transactions");
$query

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css?<?php echo time(); ?>">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Transactions</title>
</head>

<body style="background-image: url(images/bg.png);">
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
    <div class="transactiontop_container">
        <h2>Transactions Section</h2>
    </div>

    <div class="transactionmid_container">
        <a class="btn" href="transfer.php" style="color: white">Transfer Money</a>
        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Sender</th>
                    <th scope="col">Receiver</th>
                    <th scope="col">Amount (Rs)</th>
                    <th scope="col">Date and Time</th>
                </tr>
            </thead>
            <?php

            include 'connect.php';
            $query = mysqli_query($con, "Select * from transactions ORDER BY transactions.DateTime DESC");
            while ($res = mysqli_fetch_array($query)) {

            ?>
                <tbody>
                    <tr>
                        <td scope="col"> <?php echo $res['Sender'];  ?></td>
                        <td scope="col"> <?php echo $res['Receiver'];  ?></td>
                        <td scope="col"> <?php echo $res['Amount'];  ?></td>
                        <td scope="col"> <?php echo $res['DateTime'];  ?></td>
                    </tr>

                <?php
            }
            ?>

                </tbody>
        </table>

    </div>

</body>

</html>