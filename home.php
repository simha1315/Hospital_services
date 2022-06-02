<?php 
  session_start(); 
  
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Hospital Website Design Tutorial</title>

    <!-- aos css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- magnific popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    

<!-- header section starts  -->

<header>

<div class="container">

    <a href="#" class="logo"><span>H</span>ealth<span>C</span>are.</a>

    <nav class="nav">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#facility">facility</a></li>
            <li><a href="#review">review</a></li>
            <li><a href="#contact">contact</a></li>
            <li><a href="#post">post</a></li>
            <li><a href="home.php?logout='1'">Logout</a></li>
        </ul>
    </nav>

    <div class="fas fa-bars"></div>

</div>

</header>

<!-- header section ends  -->

<!-- home section starts  -->

<section class="home" id="home">

<div class="container">

    <div class="row min-vh-100 align-items-center text-center text-md-left">

        <div class="col-md-6 pr-md-5" data-aos="zoom-in">
            <img src="Doctors-bro.png" width="100%" alt="">
        </div>

        <div class="col-md-6 pl-md-5 content" data-aos="fade-left">
            <h1><span>stay</span> safe, <span>stay</span> healthy.</h1>
            <h3>caring for you.</h3>
            <a href="#"><button class="button">learn more</button></a>
        </div>

    </div>

</div>

</section>


<!-- home section ends -->

<!-- about section start  -->

<section class="about" id="about">

<div class="container">

    <div class="row min-vh-100 align-items-center">

        <div class="col-md-6 content" data-aos="fade-right">

            <div class="box">
                <h3> <i class="fas fa-ambulance"></i> ambulance services </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, suscipit.</p>
            </div>

            <div class="box">
                <h3> <i class="fas fa-procedures"></i> emergency rooms </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, suscipit.</p>
            </div>

            <div class="box">
                <h3> <i class="fas fa-stethoscope"></i> free check-ups </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, suscipit.</p>
            </div>

        </div>

        <div class="col-md-6 d-none d-md-block" data-aos="fade-left">
            <img src="aboutimage.png" width="100%" alt="">
        </div>

    </div>

</div>

</section>

<!-- about section ends -->

<!-- facility section starts  -->

<section class="facility" id="facility">

<div class="container">

<h1 class="heading"><span>'</span> our facilities <span>'</span></h1>

<div class="box-container">

    <div class="box" data-aos="zoom-in">
        <a href="imag1.jpg" title="our team">
            <img src="imag1.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="img2.webp" title="our lab">
            <img src="img2.webp" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="image3.jpg" title="emergency rooms">
            <img src="image3.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="image4.jpg" title="expert doctors">
            <img src="image4.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="image5.jpg" title="expert doctors">
            <img src="image5.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="img6.webp" title="emergency rooms">
            <img src="img6.webp" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="img7.jpg" title="expert doctors">
            <img src="img7.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="img8.webp" title="emergency rooms">
            <img src="img8.webp" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="img9.jpg" title="enough beds">
            <img src="img9.jpg" alt="">
        </a>
    </div>

</div>

</div>

</section>

<!-- facility section ends -->

<!-- review section starts  -->

<section class="review" id="review">

<div class="container">

<h1 class="heading"><span>'</span> people's review <span>'</span></h1>

<div class="box-container">

    <div class="box" data-aos="fade-right">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur accusantium error numquam dolore atque. Atque totam ad sint ducimus! Maxime!</p>
        <h3>Abbas</h3>
        <span>may 5, 2022</span>
        <img src="revimg1.jpeg" alt="">
    </div>

    <div class="box" data-aos="fade-up">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur accusantium error numquam dolore atque. Atque totam ad sint ducimus! Maxime!</p>
        <h3>Nikitha</h3>
        <span>jan 2, 2022</span>
        <img src="revimg2.jpeg" alt="">
    </div>

    <div class="box" data-aos="fade-left">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur accusantium error numquam dolore atque. Atque totam ad sint ducimus! Maxime!</p>
        <h3>Bhargav</h3>
        <span>march 10, 2022</span>
        <img src="revimg3.jpeg" alt="">
    </div>

</div>

</div>

</section>

<!-- review section ends  -->

<!-- counter section starts  -->

<section class="counter">

    <div class="container">

        <div class="box-container">

            <div class="box" data-aos="fade-up">
                <i class="fas fa-hospital"></i>
                <span>120+</span>
                <h3>Hospitals</h3>
            </div>

            <div class="box" data-aos="fade-up">
                <i class="fas fa-users"></i>
                <span>100+</span>
                <h3>staff</h3>
            </div>

            <div class="box" data-aos="fade-up">
                <i class="fas fa-smile"></i>
                <span>1200+</span>
                <h3>happy patients</h3>
            </div>

            <div class="box" data-aos="fade-up">
                <i class="fas fa-procedures"></i>
                <span>130+</span>
                <h3>bed facility</h3>
            </div>

        </div>

    </div>

</section>

<!-- counter section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <div class="container min-vh-100">

        <div class="row justify-content-center">

            <h1 class="heading"><span>'</span> make an appointment <span>'</span></h1>

            <div class="col-md-10" data-aos="flip-down">

                <form action="">

                    <div class="inputBox">
                        <input type="text" placeholder="full name">
                        <input type="number" placeholder="phone">
                    </div>

                    <div class="inputBox">
                        <input type="email" placeholder="your email">
                        <select name="" id="">
                            <option value="" disabled selected>make an appointment</option>
                            <option value="09-11 am">09-11 am</option>
                            <option value="11-03 pm">01-03 pm</option>
                            <option value="03-06 pm">04-06 pm</option>
                            <option value="06-09 pm">06-09 pm</option>
                        </select>
                    </div>

                    <textarea name="" id="" cols="30" rows="10" placeholder="message ( optional )"></textarea>

                    <input type="submit" name="" id="" value="make appointment" class="button">

                </form>

            </div>

        </div>

    </div>

</section>

<!-- contact section ends -->

<!-- post section starts  -->

<section class="post" id="post">

    <div class="container min-vh-100">

        <h1 class="heading"><span>'</span> out posts <span>'</span></h1>

        <div class="box-container">

            <div class="box" data-aos="fade-right">
                <img src="posimg2.jpg" alt="">
                <div class="content">
                    <span>march 5, 2022</span>
                    <a href="#"><h3>post title goes here</h3></a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ex porro libero at veniam molestias facere quo necessitatibus ipsum ad?</p>
                    <a href="#"><button class="button">learn more</button></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="posimg1.jpg" alt="">
                <div class="content">
                    <span>may 5, 2022</span>
                    <a href="#"><h3>post title goes here</h3></a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ex porro libero at veniam molestias facere quo necessitatibus ipsum ad?</p>
                    <a href="#"><button class="button">learn more</button></a>
                </div>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="posimg3.jpg" alt="">
                <div class="content">
                    <span>april 5, 2022</span>
                    <a href="#"><h3>post title goes here</h3></a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ex porro libero at veniam molestias facere quo necessitatibus ipsum ad?</p>
                    <a href="#"><button class="button">learn more</button></a>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- post section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="container">

        <div class="row">

            <div class="col-md-4" data-aos="fade-right">
                <a href="#" class="logo"><span>H</span>ealth<span>C</span>are.</a>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur nemo porro quasi minima consequuntur dolorum, quas amet in autem id?</p>
            </div>

            <div class="col-md-4 text-center" data-aos="fade-up">
                <h3>links</h3>
                <a href="#">home</a>
                <a href="#">about</a>
                <a href="#">facility</a>
                <a href="#">review</a>
                <a href="#">contact</a>
                <a href="#">post</a>
            </div>

            <div class="col-md-4 text-center" data-aos="fade-left">
                <h3>share</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">github</a>
            </div>

        </div>

    </div>

    <h1 class="credit text-center mx-auto">created by <span>CSE TEAM</span>.</h1>

</section>

<!-- footer section ends -->


















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- aos js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- custom js link  -->
<script src="main.js"></script>


<script>

AOS.init({
    duration:1000,
    delay:400
});

</script>

</body>
</html>