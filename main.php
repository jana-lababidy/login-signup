<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tripoli cosmetics</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#home" class="logo"> <img src="images/logo.png" alt=""> </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <a href="login.php" id="SHOPNOW" >SHOP NOW</a>
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
        </div>

    </header>

    <!-- navbar section  -->

    <nav class="navbar">
        <div id="close-navbar" class="fas fa-times"></div>
        <a href="#home">home</a>
        <a href="login.php">SHOP NOW</a>
    </nav>

    <!-- navbar section  -->

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="slide active">
            <div class="content">
                <img src="images/content-img-1.png" alt="">
                <span>new arrivals 2022</span>
                <h3>cosmetics</h3>
                <div class="controls">
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                </div>
            </div>
            <div class="image">
                <img src="images/home-img-1.png" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <img src="images/content-img-2.png" alt="">
                <span>new arrivals 2022</span>
                <h3>accessories</h3>
                <div class="controls">
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                </div>
            </div>
            <div class="image">
                <img src="images/home-img-2.png" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <img src="images/content-img-3.png" alt="">
                <span>new collections</span>
                <h3>skin care</h3>
                <div class="controls">
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                </div>
            </div>
            <div class="image">
                <img src="images/home-img-3.png" alt="">
            </div>
        </div>

    </section>
    <section class="about" id="about">

        <div class="content">
            <span>why choose us?</span>
            <h3>makeup makes difference</h3>
            <p>Choosing the right & best makeup & hair artist is extremely crucial when you are going to be the center of attraction in an upcoming event.
                 It might be the most important day of your life like your wedding or any other special occasion. So, you can’t and won’t take the risk of 
                 ruining it in the first place. Our highly skilled and experienced makeup and hair stylists, working in and around Toronto,
                 completely understand this hesitation and work towards providing the best and a memorable experience for our clients.</p>
        </div>

    </section>

    <!-- home section ends -->

    <!-- category section starts  -->

    
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a class="link" href="#home"> <i class="fas fa-angle-right"></i> home</a>
                <a class="link" href="#shop"> <i class="fas fa-angle-right"></i> shop</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#" class="link"> <i class="fas fa-angle-right"></i> my order </a>
                <a href="#" class="link"> <i class="fas fa-angle-right"></i> my wishlist </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <p> <i class="fas fa-phone"></i> +96170896745 </p>
                <p> <i class="fas fa-phone"></i> +96170896744</p>
                <p> <i class="fas fa-envelope"></i> tripoli@gmail.com </p>
                <p> <i class="fas fa-map"></i> Mina,Tripoli,Lebanon </p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <form action="">
                    <input type="email" name="" placeholder="enter your email" id="" class="email">
                    <input type="submit" value="subscribe" class="btn">
                </form>
            </div>

        </div>

        <div class="credit"> JANA AL LABABIDY , TRIPOLI COSMETICS</div>

    </section>



    <!-- footer section ends -->











    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link      -->
    <script src="js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .lightbox'));
    </script>

</body>

</html>