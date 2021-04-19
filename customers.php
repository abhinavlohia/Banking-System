    <?php

    include 'connect.php';

    $query = mysqli_query($con, "Select * from customers");


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
        <title>Customers</title>
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

        <div class="customertop_container">

            <h2>Customers Section</h2>

        </div>

        <div class="customermid_container">

            <a class="btn" href="transfer.php" style="color: white">Transfer Money</a>

            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">User Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Account Balance (Rs)</th>
                    </tr>
                </thead>
                <?php

                include 'connect.php';

                $query = mysqli_query($con, "Select * from customers");

                while ($res = mysqli_fetch_array($query)) {

                ?>

                    <tbody>
                        <tr>
                            <td scope="col"> <?php echo $res['User Id'];  ?></td>
                            <td scope="col"> <?php echo $res['Name'];  ?></td>
                            <td scope="col"> <?php echo $res['Phone'];  ?></td>
                            <td scope="col"> <?php echo $res['Email'];  ?></td>
                            <td scope="col"> <?php echo $res['Account Balance'];  ?></td>
                        </tr>

                    <?php
                }
                    ?>

                    </tbody>
            </table>




        </div>

    </body>

    </html>