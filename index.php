<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>

    <link rel="stylesheet" href="../css/store1.css">

    <title>MOTORCYCLE</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <a class="navbar-brand" href="#" style="width: 100px;"><img src="logo.png" alt=""
                style="width:70px; height: 70px;  "></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="width: 100px;">
            <div class="navbar-nav">
                <a class="text-white nav-item nav-link" href="../html/home.html" style="width: 100px;">????????????????</a>
                <a class=" nav-item nav-link active" href="../html/store.html" style="width: 100px;">????????????????????</a>
                <a class="nav-item nav-link" href="./cart.html" style="width: 100px;">????????????????&nbsp;<span
                        class="badge badge-danger" id="notifi"></span></a>
                <a class="nav-item nav-link" href="../html/services.html" style="width: 100px;">????????????????????????????????</a>
                <a class="nav-item nav-link" href="../html/about.html" style="width: 100px;">????????????????????</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid text-center">
        <nav aria-label="breadcrumb" style="margin-top: 10%;">
            <ol class="breadcrumb bg-white">
                
            </ol>
        </nav>
        </div>

        <div class="card-deck">
            <div class="card border-light mb-5" style="max-width: 18rem;">
                <div class="card-header text-center"><img src="yamaha.jpg" alt=""
                        style="height: 200px; width: 200px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">YAMAHA</h5>
                    <strong><span id="price">&#8369;23,000.00</span></strong><br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span><label style="margin-left: 5%;">reviews</label><br>
                    <button type="button" class="btn btn-success" id="btn1">Add To Cart</button>
                </div>
            </div>
            <div class="card border-light mb-5" style="max-width: 18rem;">
                <div class="card-header text-center"><img src="../laptops/macbook.jpg" alt=""
                        style="height: 200px; width: 200px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">MacBook</h5>
                    <strong><span id="price">&#8369;33,000.00</span></strong><br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span><label style="margin-left: 5%;">reviews</label><br>
                    <button type="button" class="btn btn-success" id="btn2">Add To Cart</button>
                </div>
            </div>
            <div class="card border-light mb-5" style="max-width: 18rem;">
                <div class="card-header text-center"><img src="../laptops/dell.jpg" alt=""
                        style="height: 200px; width: 200px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Dell</h5>
                    <strong><span id="price">&#8369;54,000.00</span></strong><br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span><label style="margin-left: 5%;">reviews</label><br>
                    <button type="button" class="btn btn-success" id="btn3">Add To Cart</button>
                </div>
            </div>
            <div class="card border-light mb-5" style="max-width: 18rem;">
                <div class="card-header text-center"><img src="../laptops/ASUS_GL504.jpg" alt=""
                        style="height: 200px; width: 200px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Asus GL504</h5>
                    <strong><span id="price">&#8369;34,500.00</span></strong><br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span><label style="margin-left: 5%;">reviews</label><br>
                    <button type="button" class="btn btn-success" id="btn4">Add To Cart</button>
                </div>
            </div>

        </div>
        <div class="card-deck">
            <div class="card border-light mb-5" style="max-width: 18rem;">
                <div class="card-header text-center"><img src="../laptops/acer.jpg" alt=""
                        style="height: 200px; width: 200px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Acer aspire 5</h5>
                    <strong><span id="price">&#8369;29,000.00</span></strong><br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span><label style="margin-left: 5%;">reviews</label><br>
                    <button type="button" class="btn btn-success" id="btn5">Add To Cart</button>
                </div>
            </div>
            <div class="card border-light mb-5" style="max-width: 18rem;">
                <div class="card-header text-center"><img src="../laptops/Dell-Inspiron-3000.jpg" alt=""
                        style="height: 200px; width: 200px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Dell Inspiron</h5>
                    <strong><span id="price">&#8369;36,000.00</span></strong><br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span><label style="margin-left: 5%;">reviews</label><br>
                    <button type="button" class="btn btn-success" id="btn6">Add To Cart</button>
                </div>
            </div>
            <div class="card border-light mb-5" style="max-width: 18rem;">
                <div class="card-header text-center"><img src="../laptops/hp_du1044TU.png" alt=""
                        style="height: 200px; width: 200px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">HP</h5>
                    <strong><span id="price">&#8369;43,000.00</span></strong><br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span><label style="margin-left: 5%;">reviews</label><br>
                    <button type="button" class="btn btn-success" id="btn7">Add To Cart</button>
                </div>
            </div>
            <div class="card border-light mb-5" style="max-width: 18rem;">
                <div class="card-header text-center"><img src="../laptops/toshiba.jpg" alt=""
                        style="height: 200px; width: 200px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Toshiba</h5>
                    <strong><span id="price">&#8369;35,000.00</span></strong><br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span><label style="margin-left: 5%;">reviews</label><br>
                    <button type="button" class="btn btn-success" id="btn8">Add To Cart</button>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid bg-dark  text-white pt-5 pb-5 mt-5">
        <hr>
        <div class="container d-flex flex-column">
            <div class="row mt-5">
                <div style="width: 20%;">????????????????????????????????</div>
                <div class="col col-lg-3">Support</div>
                <div class="col col-lg-2">LapyZada</div>
                <div class="col"><i class="fa fa-envelope"
                        style="font-size:19px; color: white; margin-right: 5px;"></i>Stay up to date on the latest from
                    LapyZada</div>
            </div>
            <br>
            <div class="row mt-4">
                <div style="width: 20%;">
                    <a class="fa fa-facebook"></a>
                    <a class="fa fa-twitter"></a>
                    <a class="fa fa-google"></a>
                    <a class="fa fa-linkedin"></a>
                    <a class="fa fa-youtube"></a>
                    <a class="fa fa-instagram"></a>
                </div>
                <div class="col col-lg-3">Contact us</div>
                <div class="col col-lg-2">About LapyZada</div>
                <div class="col"><input type="text" class="form-control no-border"
                        placeholder="Enter your e-mail address" style="width: 100%;"> </div>
            </div>
            <div class="row mt-4">
                <div style="width: 20%;"></div>
                <div class="col col-lg-3">FAQ</div>
                <div class="col col-lg-2">LapyZada Design</div>
                <div class="col"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#exampleModalCenter">Sign up</button></div>
            </div>
            <br>
            <div class="row ">
                <div style="width: 20%;"></div>
                <div class="col col-lg-3">Downloads</div>
                <div class="col col-lg-2">Careers</div>
                <div class="col"></div>
            </div>
            <div class="row mt-4 mb-5">
                <div style="width: 20%;"></div>
                <div class="col col-lg-3">Product Registration</div>
                <div class="col col-lg-2">LapyZada Access</div>
                <div class="col"></div>
            </div>


        </div>
        <hr>
        <div class="row mt-4">
            <div class="col text-center">?? Copyright. AllRight Reserved 2021.</div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content pl-5 pr-5"
                style="background-image: url('../login/login.jpg'); background-size: cover; background-repeat: no-repeat;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    <label>First Name: </label><input type="text" class="form-control no-border"
                        placeholder="First Name" style="width: 100%;"> <br>
                    <label>Last Name: </label><input type="text" class="form-control no-border" placeholder="Last Name"
                        style="width: 100%;"> <br>
                    <label>Email Address: </label><input type="text" class="form-control no-border" placeholder="Email"
                        style="width: 100%;"> <br>

                    <label>Password: </label><input type="password" class="form-control no-border"
                        placeholder="Password" style="width: 100%;"> <br>
                    <label>Confirm Password: </label><input type="password" class="form-control no-border"
                        placeholder="Confirm Password" style="width: 100%;"> <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Done</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        var temp = 0;
        $('#btn8').click(function () {
            swal({
                title: "Added to Cart!",
                text: "clicked the button!",
                icon: "success",
            });
            var add = 1;
            temp = temp + add;
            $('#notifi').html(temp).show();
            $('#btn8').text("Added!")
            $('#btn8').prop('disabled',true)

        });
        $('#btn7').click(function () {
            swal({
                title: "Added to Cart!",
                text: "clicked the button!",
                icon: "success",
            });
            var add = 1;
            temp = temp + add;
            $('#notifi').html(temp).show();
            $('#btn7').text("Added!")
            $('#btn7').prop('disabled',true)
        });
        $('#btn6').click(function () {
            swal({
                title: "Added to Cart!",
                text: "clicked the button!",
                icon: "success",
            });
            var add = 1;
            temp = temp + add;
            $('#notifi').html(temp).show();
            $('#btn6').text("Added!")
            $('#btn6').prop('disabled',true)
        });
        $('#btn5').click(function () {
            swal({
                title: "Added to Cart!",
                text: "clicked the button!",
                icon: "success",
            });
            var add = 1;
            temp = temp + add;
            $('#notifi').html(temp).show();
            $('#btn5').text("Added!")
            $('#btn5').prop('disabled',true)
        });
        $('#btn4').click(function () {
            swal({
                title: "Added to Cart!",
                text: "clicked the button!",
                icon: "success",
            });
            var add = 1;
            temp = temp + add;
            $('#notifi').html(temp).show();
            $('#btn4').text("Added!")
            $('#btn4').prop('disabled',true)
        });
        $('#btn3').click(function () {
            swal({
                title: "Added to Cart!",
                text: "clicked the button!",
                icon: "success",
            });
            var add = 1;
            temp = temp + add;
            $('#notifi').html(temp).show();
            $('#btn3').text("Added!")
            $('#btn3').prop('disabled',true)
        });

        $('#btn2').click(function () {
            swal({
                title: "Added to Cart!",
                text: "clicked the button!",
                icon: "success",
            });
            var add = 1;
            temp = temp + add;
            $('#notifi').html(temp).show();
            $('#btn2').text("Added!")
            $('#btn2').prop('disabled',true)
        });

        $('#btn1').click(function () {
            swal({
                title: "Added to Cart!",
                text: "clicked the button!",
                icon: "success",
            });
            var add = 1;
            temp = temp + add;
            $('#notifi').html(temp).show();
            $('#btn1').text("Added!")
            $('#btn1').prop('disabled',true)
        });
    </script>
</body>

</html>



