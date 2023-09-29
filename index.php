<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form` (name,email,number,date)
     VALUES('$name','$email','$number','$date')") or die('query failed') ;


    if($insert) {
        $message[] = 'appointment made successfully';
    }else{
        $message[] = 'appointment failed';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Website</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <!-- Header section starts -->

    <header class="header position-relative" >

        <div class="container">

            <div class="row align-items-center justify-content-between">
                
                <a href="#home" class="logo">Dental<span>Care.</span></a>
              
                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#reviews">Reviews</a>
                    <a href="#contact">Contact</a>
                </nav>

                <a href="#contact" class="link-btn">Make Appointment</a>

                <div id="menu-btn" class="fas fa-bars" ></div>
                
            </div>
        </div>

    </header>

    <!-- Header section ends -->

     <!-- Home section starts -->

      <section class="home" id="home">

        <div class="container">

            <div class="row miv-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>Let us brighten your smiles</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, eos!</p>
                    <a href="#contact" class="link-btn">Make Appointment</a>
                </div>
            </div>

        </div>

    </section>

    <!-- Home section ends -->


    <!-- About section starts -->

    <section class="about" id="about">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6 image">
                    <img src="images/bg-image.jpg" class="w-100 mb-5 mb-md-0">
                </div>

                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>True Healthcare For Your Family</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam tempore maxime qui totam, architecto doloremque mollitia, vitae culpa harum quae soluta consectetur omnis eius aut eaque aperiam nisi velit aliquid unde dicta deleniti commodi. Quibusdam reprehenderit facere magnam. Nobis totam tempore sed numquam tenetur veritatis praesentium aliquid accusamus esse ratione!</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>

            </div>

        </div>

    </section>

    <!-- About section ends -->


    <!-- Services section starts -->

    <section class="services" id="services">

        <h1 class="heading">Our Services</h1>

        <div class="box-container container">

            
        <div class="box">
            <img src="images/service-con.png" alt="">
            <h3>Allignment speciality</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In odio, commodi non accusamus quia reprehenderit quos dicta reiciendis cupiditate consequuntur!</p>
        </div>

        <div class="box">
            <img src="images/service-con.png" alt="">
            <h3>Cosmetic dentistry</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In odio, commodi non accusamus quia reprehenderit quos dicta reiciendis cupiditate consequuntur!</p>
        </div>

        <div class="box">
            <img src="images/service-con.png" alt="">
            <h3>Oral Hygiene Expert</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In odio, commodi non accusamus quia reprehenderit quos dicta reiciendis cupiditate consequuntur!</p>
        </div>

        <div class="box">
            <img src="images/service-con.png" alt="">
            <h3>Root Canal Speciality</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In odio, commodi non accusamus quia reprehenderit quos dicta reiciendis cupiditate consequuntur!</p>
        </div>

        <div class="box">
            <img src="images/service-con.png" alt="">
            <h3>Live Dental Advisory</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In odio, commodi non accusamus quia reprehenderit quos dicta reiciendis cupiditate consequuntur!</p>
        </div>

        <div class="box">
            <img src="images/service-con.png" alt="">
            <h3>Cavity inspection</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In odio, commodi non accusamus quia reprehenderit quos dicta reiciendis cupiditate consequuntur!</p>
        </div>

        </div>


    </section>

    <!-- Services section ends -->



    <!-- Process section starts -->

    <section class="process" id="process">

        <h1 class="heading">Work Process</h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/bg.png" alt="">
                <h3>Cosmetic dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim veniam vel delectus nesciunt quod itaque, minus illum eum maxime harum?</p>
            </div>

            <div class="box">
                <img src="images/bg.png" alt="">
                <h3>Cosmetic dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim veniam vel delectus nesciunt quod itaque, minus illum eum maxime harum?</p>
            </div>

            <div class="box">
                <img src="images/bg.png" alt="">
                <h3>Cosmetic dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim veniam vel delectus nesciunt quod itaque, minus illum eum maxime harum?</p>
            </div>

        </div>

    </section>

    <!-- Process section ends -->



    <!-- Reviews section starts -->


    <section class="reviews" id="reviews">

        <h1 class="heading">Satisfied clients</h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/bg-image.jpg" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus maxime hic facilis voluptatibus aperiam. Neque possimus iure quas suscipit laudantium.</p>
            
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

                <h3>john doe</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <img src="images/bg-image.jpg" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus maxime hic facilis voluptatibus aperiam. Neque possimus iure quas suscipit laudantium.</p>
                
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
    
                <h3>jessica william</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <img src="images/bg-image.jpg" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus maxime hic facilis voluptatibus aperiam. Neque possimus iure quas suscipit laudantium.</p>
                    
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
        
                    <h3>john doe</h3>
                    <span>satisfied client</span>

            </div>

        </div>

    </section>

    <!-- Reviews section ends -->


    <!-- Contacts section starts -->

    <section class="contact" id="contact">

        <h1 class="heading">make appointment</h1>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

        <?php
            if(isset($message)){
                foreach($message as $message){
                    echo '<p class="message">' .$message. '</p>'; 
                }
            }
        ?>
            
            <span>your name : </span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>your email : </span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>your number : </span>
            <input type="text" name="number" placeholder="enter your number" class="box" required>
            <span>appointment date : </span> 
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" value="make appointment" name="submit" class="link-btn">
        </form>

    </section>

    <!-- Contacts section ends -->


     <!-- custom js file link -->
     <script src="js/script.js"></script>

</body>
</html>


