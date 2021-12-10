<!doctype html>


<!--head Starts here-->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Bootstrap Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



    <!-- Developer CSS -->
    <title>Restaurant</title>

    <link rel="stylesheet" href="02~css/Page_index.css">


</head>
<!--head ends here-->






<!--body Starts here-->

<body>
    <div class="col-12 " style="background:#ff8093;">
        <h2 style="font-size: 5rem; font-family: Arial"> &nbsp; KHABOI</h2>
        <?php
        include "navigationBar.php";

        ?>

    </div>
    <div style="background: #FFB6C1; height: 60rem; text-align: center;">
        <div class="text-dark" style=" background-image: url('images/homePageBurgerDesign.png'); background-repeat:no-repeat;   background-attachment: fixed; background-position:right ">
            <h3 style="text-align:start; line-height: 2; text-indent: 50px; font-size: 2rem; font-family: Arial">EDIT PROFILE</h3>


            <section class="h-100 gradient-custom-2">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-start h-100">
                        <div class="col col-lg-9 col-xl-7">
                            <div class="card">
                                <div class="rounded-top text-white d-flex flex-row" style="background-color: #ff1a3c; height:200px;">
                                    <div class="ms-4 mt-3 d-flex flex-column" style="width: 150px;">
                                        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-profiles/avatar-1.jpg" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">

                                    </div>
                                    <div class="ms-3" style="margin-top: 130px;">
                                        <h5>EDIT IMAGE</h5>

                                    </div>
                                </div>
                                <div class="p-4 text-black" style="background-color: #f8f9fa;">

                                </div>
                                <form action="userProfileEdit.php" method="POST">

                                    <div class="row">
                                        <div class="col-12">

                                            <div class=" ps-3 pt-1 pb-3">

                                                <div class="row mt-2 ">


                                                    <div class="row ">
                                                        <div class="col-md-12"><input type="text" class="form-control" name="e_first_name" placeholder="NAME" value="" required></div>
                                                        <div class="col-md-12  pt-2"><input type="text" class="form-control" name="e_email" placeholder="EMAIL" value="" required></div>
                                                        <div class="col-md-12  pt-2"><input type="text" class="form-control" name="e_phone" placeholder="PHONE NUMBER" value="" required></div>
                                                        <div class="col-md-12  pt-2"><input type="password" class="form-control" name="e_password1" placeholder="UPDATE PASSWORD" value="" required></div>
                                                        <div class="col-md-12  pt-2">
                                                            <input type="password" class="form-control" name="e_password2" placeholder="CONFIRM NEW PASSWORD" value="" required>
                                                        </div>

                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-12"><input type="text" class="form-control" name="e_state" value="" placeholder="ADDRESS" required></div>


                                                    </div>
                                                    <div class="mt-3 text-start "><button class="btn btn-primary profile-button" type="submit" name="save_profile">Save Profile</button></div>
                                                </div>


                                            </div>

                                        </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>

            </section>











            <div class="container ">
                <div class="row ">

                    <div class="col-8 ">
                        <div class="container rounded bg-white my-5">

                        </div>
                    </div>
                    <div class="col-2 ">

                    </div>
                </div>


            </div>
            <?php
            include "footer.php";

            ?>

        </div>


        <div>


            <!--Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
<!--body ends here-->




</html>