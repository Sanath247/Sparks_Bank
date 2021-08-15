<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>

    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="CSS/transfer.css" type="text/css">

</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <div class="container">
        <h2 class="text-center pt-4 ff">Transaction History</h2>

        <br>
        <div class="row shadow text-center" style="background-color: Lime;">
            <div class="col">
                <div class="table-responsive-sm pt-3">
                    <table class="table table-hover table-condensed table-bordered">
                        <thead style="color : green;">
                            <tr>
                                <th class="text-center">S.No.</th>
                                <th class="text-center">Sender</th>
                                <th class="text-center">Receiver</th>
                                <th class="text-center">Amount</th>
                                <th class="text-center">Date & Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            include 'config.php';

                            $sql = "select * from transaction";

                            $query = mysqli_query($conn, $sql);

                            while ($rows = mysqli_fetch_assoc($query)) {
                            ?>

                                <tr style="color : black;">
                                    <td class="py-2"><?php echo $rows['sno']; ?></td>
                                    <td class="py-2"><?php echo $rows['sender']; ?></td>
                                    <td class="py-2"><?php echo $rows['receiver']; ?></td>
                                    <td class="py-2"><?php echo $rows['balance']; ?> </td>
                                    <td class="py-2"><?php echo $rows['datetime']; ?> </td>

                                <?php
                            }

                                ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <footer class="text-center mt-5 py-2">
            <p style="font-family: poppins; font-size: 16px;">&copy 2021. Developed by <b>SANATH M C</b> <br> Sparks Foundation</p>
        </footer>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
