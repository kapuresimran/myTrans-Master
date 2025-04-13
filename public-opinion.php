<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>public opinion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./css/home.css">

    <link rel="stylesheet" href="./css/opinion.css">
</head>

<body class="bg-body-tertiary">
    <header>
        <div class="container-fluid d-flex align-items-center mb-1 px-sm-5 ">
            <div class="header__left ">
                <div class="me-auto p-sm-2 animated-div"><img src="./Assets/logo.png" alt="logo"
                        class=" navbar-brand img_small" width="150px">
                </div>
            </div>

            <div class=" d-flex flex-column flex-sm-row ms-sm-auto header__right w-sm-100 text-end">
                <div class="p-2 "><a href="mailto:info@mytrans.in" style="color: #CC0000;" class="links fw-bold"><i
                            class="fa fa-envelope"></i>
                        info@mytrans.in</a></div>
                <div class="p-2 ms-2"><a href="tel:+91 7448220220" style="color: #CC0000;" class="links fw-bold"><i
                            class="fa fa-phone"></i> + 91 7448220220 </a></div>
            </div>


        </div>

        <!------------------ navbar------------------ -->
        <nav class="navbar navbar-expand-lg bg-dark ">
            <div class="container-fluid col-12">
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-light"></span>
                </button>
                <div class="collapse navbar-collapse d-flex-lg justify-content-around" id="navbarSupportedContent">
                <ul class="nav nav-pills nav-fill ">
                        <li class="nav-item ms-1">
                            <a class="nav-link " aria-current="page" href="./home.html">Home</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="./fleet.html">Fleet</a>
                        </li>
                        <li class="nav-item dropdown ms-1">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">Services</a>
                            <ul class="dropdown-menu bg-dark">
                                <li><a class="dropdown-item" href="./OnCallWithinCity.html">On call / within city limits</a></li>
                                <li><a class="dropdown-item" href="./intercitylocal.html">Intercity / Local</a></li>
                                <li><a class="dropdown-item" href="./intercity_to_city.html">Intercity / City to City</a></li>

                                <li><a class="dropdown-item" href="#">Monthly Package Module(Corporate)</a></li>
                                <li><a class="dropdown-item" href="./MonthlyKm.html">Monthly Km Module(Corporate)</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="./bookings.php">Booking</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="./ratecard.html">Rate Card</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="#">Career</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="./public-opinion.php">Public Opinion</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="./contact.html">Contact</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <!--------------------------------- navbar complete ---------------------->

    </header>

    <main>
        <section id="opinions text-center">
            <div class="opinion__text text-center m-4 p-4">
                <h1>Our Clients Opinion</h1>
            </div>
            <div class="opinion d-flex flex-column flex-sm-row flex-sm-wrap mx-auto justify-content-around ">

                <div class="testimonials mx-4 my-3">
                    <h2 class="testimonial__heading">Cardiff - Tourist</h2>
                    <p class="testimonial__text">Thanks guys and gals, that's just what I was after. I'm from Cardiff so
                        it's basically bus or taxi really,PUNE has so many more options which is great, but My-Trans is
                        Great</p>
                </div>
                <div class="testimonials mx-4 my-3">
                    <h2 class="testimonial__heading">Rakhee - Traveller</h2>
                    <p class="testimonial__text">There's links on the website for Cabs maps. I appreciate it often use
                        the one for the central PUNE as it shows quite a bit of information as well as tube routes and
                        roads</p>
                </div>
                <div class="testimonials mx-4 my-3">
                    <h2 class="testimonial__heading">Andy - IT-Hinjewadi</h2>
                    <p class="testimonial__text">App is Cool !
                        Thanks</p>
                </div>
                <div class="testimonials mx-4 my-3">
                    <h2 class="testimonial__heading"> Ajay</h2>
                    <p class="testimonial__text">Best option for Auto rides.

                    </p>
                </div>
            </div>
        </section>

        <section id="form">
            <div class="container my-5">
                <div class="cta-form">
                    <h2>Fill out the form!</h2>
                    <p>Please share your opinion with us!</p>
                </div>
                <form action="public-opinion.php" class="form" method="post">

                    <label>Name</label>
                    <input type="text" name="name" placeholder="name" />

                    <label>Opinion</label>
                    <input type="text" name="opinion" placeholder="opinion" />

                    <label>Overall feedback</label><br>
                    <input type="radio" name="fair" placeholder="fair" />
                    <label>Fair</label> <br>
                    <input type="radio" name="good" placeholder="good" />
                    <label>Good</label> <br>
                    <input type="radio" name="better" placeholder="better" />
                    <label>Better</label><br>
                    <input type="radio" name="best" placeholder="best" />
                    <label>Best</label><br>
                    <br>

                    <button type="Submit">Submit</button>
                    <!-- <label>UserName</label>
                    <input type="text" name="username" placeholder="username">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="email">
                    <label>Password</label>
                    <input type="text" name="password"placeholder="password">
                    <button>Login</button> -->
                </form>
            </div>

        </section>
    </main>

    <footer>
        <div class="footer bg-dark d-flex flex-column flex-sm-row justify-content-around align-items-center p-3">
            <div class="copyright">
                <p class="text-light">Copyright - My-Trans</p>
            </div>
            <div class="socials">

                <div class="social-btns"><a class="btn facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <div class="btn twitter" href="#"><i class="fa-brands fa-twitter"></i></div><a class="btn dribbble"
                        href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>

            </div>
            <div class="footer__links text-light d-flex justify-content-around">
                <a href="">Privacy Policy</a>
                <a href="">Term of Use</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


</body>

</html>
<!-- <?php

extract($_REQUEST);
$file = fopen("form.txt", "a");
fwrite($file, "name:");
fwrite($file, $username . "\n");
fwrite($file, "Email:");
fwrite($file, $email . "\n");
fwrite($file, "Password:");
fwrite($file, $password . "\n");
fclose($file);

?>   -->
<?php

extract($_REQUEST);
$file = fopen("opinions.txt", "a");
fwrite($file, "Name:");
fwrite($file, $name . "\n");
fwrite($file, "Opinion:");
fwrite($file, $opinion . "\n");
fwrite($file, "Overall feedback:");
fwrite($file, $feedback . "\n");
fwrite($file, "Fair:");
fwrite($file, $fair . "\n");
fwrite($file, "Good:");
fwrite($file, $good . "\n");
fwrite($file, "Better:");
fwrite($file, $better . "\n");
fwrite($file, "Best:");
fwrite($file, $best . "\n");
fclose($file);

?>
