<html>

<head>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">

        <title>Basic Banking System</title>
        <style>
            body {
                background: #f7f1ee;
            }

            .btn-secondary {
                font-family: 'poppins';
                font-size: 20px;
                font-weight: normal;
                color: #FFFFFF;
                background-color: #0D859B;
                border-radius: 10px;
                margin-top: 50px;
            }

            .btn-secondary:hover {
                font-family: 'poppins';
                font-size: 20px;
                font-weight: normal;
                color: #FFFFFF;
                background-color: #225991;
                border-radius: 10px;
            }

            .container-fluid {
                margin-top: auto;
                margin-bottom: 50px;
            }

            .imgspace {
                margin-top: 10px;
                height: 100px;
            }

            h3 {
                font-family: 'poppins';
                font-size: 80px;
                font-weight: bold;
                color: #495463;
            }

            .shadow {

                box-shadow: 0px 0px 8px;

            }

            .bg {
                background-color: #eee2dc;
                box-shadow: 0px -60px 10px 0px #eee2dc;

            }
        </style>
    </head>

<body>
    <?php
    include 'navbar.php';
    ?>

    <div class="container-fluid">



        <div class="row">
            <div class="col-sm-2 align-item-left shadow mx-3 ">

                <img src="add-user.png" class="img-fluid pt-2  imgspace">

                <br>
                <a href="createuser.php"><button type="button" class="btn btn-secondary">Create a User</button></a>

            </div>
            <div class="col-sm-2 align-self-end shadow ">

                <img src="add-user.png" class="img-fluid pt-2  imgspace">
                <br>
                <a href="createuser.php"><button type="button" class="btn btn-secondary">Create a User</button></a>
            </div>
        </div>






    </div>

</html>