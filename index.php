<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mid-Night Medical</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#"><img src="image/LOGO_FLAT.png" alt="" style="width:200px"></a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about us</a>
        <a href="#services">services</a>
        <a href="#contact">contact us</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>Around the clock Care for Critical Moments</h3>
        <p>At Midnight medical, our dedicated team is on call 24/7, ensuring that
            you're never alone in your time of need. Trust us to be your beacon of hope during the midnight hours.
        </p>
        <a href="#services" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-pills"></i>
        <h3>50+</h3>
        <p>life saving medicines</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-ambulance"></i>
        <h3>200+</h3>
        <p>available ambulance</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>15+</h3>
        <p>available blood bank</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>compassionate care around the clock</h3>
            <p>welcome to midnight medical, where your well-being is our commitment, no matter the hour. we understand that health crises don't wait for the sun to rise, and that's why we've made it our mission to provide exceptinoal emergency medical services round the clock.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-syringe"></i>
            <h3>vaccination service</h3>
            <p>vaccinating in times of need, savings lives indeed.</p>
            <a href="vaccination.php" target="_blank" class="btn"> book slot <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>ambulance service</h3>
            <p>saving lives, one ride at a time.</p>
            <a href="ambulance.php" target="_blank" class="btn"> book now <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Emergency Oxygen service </h3>
            <p>Empowering health, one cylinder at a time.</p>
            <a href="oxygen.php" target="_blank" class="btn"> book now <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>life saving medicines</h3>
            <p>emergency care, always at your service.</p>
            <a href="medicine.php" target="_blank" class="btn"> order now <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-hospital"></i>
            <h3>blood bank</h3>
            <p>donating hope in critical moments.</p>
            <a href="bloodbank.php" target="_blank" class="btn"> check availablity <span class="fas fa-chevron-right"></span> </a>
        </div>

        <!-- <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div> -->

    </div>

</section>

<!-- services section ends -->



<!-- partner section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>partners</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/apollo.png" alt="">
            <h3>Apollo Pharmacy</h3>
            <span>Medicine Partner</span>
            <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div> -->
        </div>

        <div class="box">
            <img src="image/amri.png" alt="" style="width:200px">
            <h3>Amri Hospital</h3>
            <span>vaccination Partner</span>
            <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div> -->
        </div>

        <div class="box">
            <img src="image/inox.jpg" alt="" style="width:200px">
            <h3>Inox air products</h3>
            <span>Medical gases partner</span>
            <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div> -->
        </div>

        <div class="box">
            <img src="image/narayana.svg" alt="" style="width:200px">
            <h3>narayana Health</h3>
            <span>hospital partner</span>
            <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div> -->
        </div>

        <div class="box">
            <img src="image/bmbirla.png" alt="" style="width:300px; height:150px;">
            <h3>BM Birla Heart Research Centre</h3>
            <span>health research partner</span>
            <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div> -->
        </div>

        <div class="box">
            <img src="image/sun.png" alt="">
            <h3>sun pharma</h3>
            <span>pharmaceutical partner</span>
            <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            
            </div> -->
        </div>
        <div class="box">
            <img src="image/medplus.png" alt="" style="width:300px; height: 200px;">
            <h3>medplus</h3>
            <span>Medicine partner</span>
            <!-- <div class="share">
                
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div> -->
        </div>
        <div class="box">
            <img src="image/woodland.png" alt="" style="width:300px; height: 200px;">
            <h3>woodland hospital</h3>
            <span>hospital partner</span>
            <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div> -->
        </div>
        <div class="box">
            <img src="image/cmr.jpg" alt="" style="width:300px; height: 200px;">
            <h3>calcutta medical research institute</h3>
            <span>vaccination partner</span>
            <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div> -->
        </div>

    </div>

</section>

<!-- partner section ends -->

<!-- contact us section starts   -->

<section class="appointment" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>Give us your details and we will
                get back to you.</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="text"name="query" placeholder="your query"class="box">
            <input type="submit" name="submit" value="Submit query" class="btn">
        </form>

    </div>

</section>

<!-- contact us section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/rev1.jpg" alt="">
            <h3>Annyasha pal</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">"I had a medical emergency at midnight, and the emergency medicine service by midnight medical was a lifesaver. Their response time was remarkable, and their team of healthcare professionals was both knowledgeable and compassionate. They provided me with the right medication and guidance during a stressful situation. I'm immensely grateful for their commitment to helping those in need, no matter the hour. This organization's service is a true asset to our community, and I can't thank them enough for their dedication to saving lives."</p>
        </div>

        <div class="box">
            <img src="image/rev2.jpg" alt="">
            <h3>subrata pal</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">"I had an urgent need for an oxygen cylinder at midnight, and I can't thank the midnight mediccal enough for their quick response. They arrived within minutes and provided me with the oxygen cylinder I desperately needed. The team was not only efficient but also reassuring and caring during a very stressful situation. I felt supported and safe thanks to their service. In times of crisis, knowing that there's a reliable and responsive service like this is a true lifesaver."</p>
        </div>

        <div class="box">
            <img src="image/rev3.jpg" alt="">
            <h3>swarnava Mitra</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">"I'm incredibly grateful for your emergency vaccination service, which operates even at midnight. I had a sudden need for a vaccination, and they responded promptly and efficiently. Their dedication to public health and their commitment to ensuring access to vaccines at any hour is truly admirable. The healthcare professionals on their team were not only highly skilled but also kind and reassuring. This service provides peace of mind during uncertain times, and I can't thank them enough for their outstanding work in our community."</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 7 march, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Annyasha Pal </a>
                </div>
                <h3>👩‍⚕️World Heart Day 2023 - Heart Health: Time, CPR, and Action</h3>
                <p>World Heart Day is a reminder to everyone around the world to take care of their hearts. This year’s campaign focuses on the essential step of knowing our hearts first.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 5 january, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Subrata Pal </a>
                </div>
                <h3>Behind the Scenes: What Happens After You Search 'Ambulance Near Me'.</h3>
                <p>When a medical emergency strikes, every second counts. Knowing that you can rely on swift and efficient emergency response services is crucial whether it’s a sudden injury, illness, or accident.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 24 December, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Swarnava Mitra </a>
                </div>
                <h3>Cardiac Arrest: Recognizing Signs and Next Steps</h3>
                <p>Cardiac arrest is a life-threatening medical emergency that can strike suddenly and without warning, affecting people worldwide.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-4.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 27 august, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Shirsha Banerjee </a>
                </div>
                <h3>Rare and often aggressive, Merkel cell cancer is best caught early</h3>
                <p>First, some good news: Merkel cell cancer is exceptionally uncommon. Roughly 1,600 cases occur in the US annually. But this rare skin cancer sometimes goes unnoticed initially</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-5.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 17 April, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Soumi Ghosh </a>
                </div>
                <h3>Making life-saving medicine available</h3>
                <p>Michael Holmes was determined to make a difference, and with a little guidance from above, help from pharmaceutical companies and some ingenuity, he started saving lives.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-6.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 20 october, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Somashree Barik </a>
                </div>
                <h3>Easy ways to shop for healthful, cost-conscious foods</h3>
                <p>Three months into the year is a good time to recalculate if you've been slacking on your resolution to eat healthy. And if you'll be leaving home base or school soon and foraging for yourself</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about us </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#contact"> <i class="fas fa-chevron-right"></i> contact us </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="vaccination.php" target="_blank"> <i class="fas fa-chevron-right"></i> vaccination service</a>
            <a href="ambulance.php" target="_blank"> <i class="fas fa-chevron-right"></i> ambulance service</a>
            <a href="oxygen.php" target="_blank"> <i class="fas fa-chevron-right"></i> Emergency Oxygen Service</a>
            <a href="medicine.php" target="_blank"> <i class="fas fa-chevron-right"></i> Life Saving Medicines </a>
            <a href="bloodbank.php" target="_blank"> <i class="fas fa-chevron-right"></i> Blood Bank </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 7797134855 </a>
            <a href="#"> <i class="fas fa-phone"></i> +91 8017023941 </a>
            <a href="#"> <i class="fas fa-envelope"></i> mnmservices@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> mnmquery@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Dharampur G. T. Road, (Near Khadina More)Chinsurah, Hooghly, West Bengal, India,PIN - 712101</a>
        </div>

        <div class="box">
            <h3>References</h3>
            <a href="https://www.youtube.com/" target="blank"> <i class="fas fa-chevron-right"></i>youtube</a>
            <a href="https://www.w3schools.com/" target="blank"> <i class="fas fa-chevron-right"></i>w3 schools</a>
            <a href="https://www.red.health/" target="blank"> <i class="fas fa-chevron-right"></i>red health</a>
            <a href="https://www.health.harvard.edu/" target="blank"> <i class="fas fa-chevron-right"></i>harvard health</a>
        </div>

    </div>

    <div class="credit"> created by <span>Subrata Pal, Annyasha Pal</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>

