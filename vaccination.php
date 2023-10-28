
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vaccination service</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style2.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#"><img src="image/LOGO_FLAT.png" alt="" style="width:200px"></a>

    <nav class="navbar">
        <a href="index.php">home</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>
<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/vaccine.png" alt="">
    </div>

    <div class="content">
        <h3>vaccination service</h3>
        <p>The vaccination service provided by our organization is a cornerstone of our commitment to promoting public health and well-being. With a focus on accessibility and efficacy, our dedicated team of healthcare professionals ensures that individuals of all ages receive the vaccines they need to stay protected against a variety of preventable diseases. We pride ourselves on offering a comprehensive range of vaccinations, from routine childhood immunizations to specialized vaccines for adults and travelers. Our clinics are equipped with state-of-the-art facilities to guarantee safe and comfortable vaccination experiences for all our clients. We understand the critical role vaccines play in disease prevention and community health, and we are honored to contribute to building a healthier and safer society through our vaccination service. Your health is our priority, and we are here to serve you and your loved ones with the highest level of care and expertise.   
        </p>
    </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>vaccination</span> types </h1>

    <div class="box-container">

        <div class="box">
            <h3>Hepatitis B Vaccine</h3>
            <p>Hepatitis B is a viral disease that causes liver inflammation and damage. Over time, chronic hepatitis B infection can cause cirrhosis, liver failure, and liver cancer</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <h3>Diphtheria, Tetanus, Acellular Pertussis (DTaP)</h3>
            <p>DTaP vaccine is a combination vaccine that protects against three different bacterial diseases</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <h3>Haemophilus influenzae Type B (Hib)</h3>
            <p>The Haemophilus influenzae type b (Hib) vaccine protects against Haemophilus influenzae type b, a bacteria that can cause pneumonia, meningitis, and epiglottitis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <h3>Measles, Mumps, Rubella (MMR)</h3>
            <p>The MMR vaccine is a combination vaccine that protects against three different diseases: Measles, Mumps, Rubella (German measles) </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <h3>Influenza Vaccine</h3>
            <p>The influenza vaccine protects against seasonal flu. For most people, seasonal flu is nothing more than a nuisance, causing short-term illness. However, for some, flu can be severe and even life-threatening. Babies, older adults, and people with compromised immune systems are among those with a high risk of complications.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <h3>COVID-19</h3>
            <p>Coronavirus disease 2019 (COVID-19) is a respiratory infection that became a pandemic in 2020. Symptoms are variable, ranging from mild flu-like symptoms and the loss of taste or smell to pneumonia, respiratory failure, shock, and death. It is still not entirely clear why some people develop severe symptoms and others don't.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div> 

    </div>

</section>

<!-- services section ends -->

<!-- contact us section starts   -->

<section class="appointment" id="contact">

    <h1 class="heading"> Book your appointment </h1>    

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
      
            <h3>please register for your vaccination slot</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" placeholder="preferred date"class="box">

            <select name="vaccination_centre" class="box">
                <option value="0" vc="0">nearest vaccination centre</option>
                <option value="5809" vc="RNTAGORE">RN Tagore</option>
                <option value="2761" vc="cmri">CMRI</option>
                <option value="4483" vc="BMBirla">BM Birla</option>
                <option value="4395" vc="woodland">woodland hospital</option>
                <option value="95" vc="apollo">apollo</option></select>
            <select name="slot_time" class="box">
                <option value="0" st="0">preferred time</option>
                <option value="1030" st="tenthirty">10:30 A.M.</option>
                <option value="1230" st="twelvethirty">12:30 P.M.</option>
                <option value="330" st="threethirty">3:30 P.M.</option></select>

            <select name="vaccination_type" class="box">
                <option value="0" vt="0">vaccination type</option>
                <option value="6001" vt="hbv">Hepatitis B Vaccine</option>
                <option value="6002" vt="dtap">Diphtheria, Tetanus, Acellular Pertussis (DTaP)</option>
                <option value="6003" vt="hib">Haemophilus influenzae Type B (Hib)</option>
                <option value="6004" vt="mmr">Measles, Mumps, Rubella (MMR)</option>
                <option value="6005" vt="iv">Influenza Vaccine</option>
                <option value="6005" vt="cv19">COVID-19</option></select>

            <select name="age_group" class="box">
                <option value="0" ag="0">age group</option>
                <option value="06" ag="btsix">birth to 6 years</option>
                <option value="618" ag="sixtoe">over 6 years to 18 years</option>
                <option value="1865" ag="etosixf">over 18 years to 65 years</option>
                <option value="65100" ag="sixftm">over 65 years</option></select>
            <input type="submit" name="submit" value="Appoinment now" class="btn">
        </form>

    </div>

</section>

<!-- contact us section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="index.php"> <i class="fas fa-chevron-right"></i> home </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="vaccination.php"> <i class="fas fa-chevron-right"></i> vaccination service</a>
            <a href="ambulance.php"> <i class="fas fa-chevron-right"></i> ambulance service</a>
            <a href="oxygen.php"> <i class="fas fa-chevron-right"></i> Emergency Oxygen Service</a>
            <a href="medicine.php"> <i class="fas fa-chevron-right"></i> Life Saving Medicines </a>
            <a href="bloodbank.php"> <i class="fas fa-chevron-right"></i> Blood Bank </a>
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

