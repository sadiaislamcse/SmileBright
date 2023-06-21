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
   <title>SmileBright Dentalcare Project by Sadia islam</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">Smile<span>Bright</span></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
         </nav>

         <a href="#contact" class="link-btn">make appointment</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>let us brighten your smile</h3>
            <p>Improving Access to Dental Care and Education and take appoinment through a Website Platform
.</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/about-img.png" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>About us</span>
            <h3>True Healthcare For Your Family</h3>
            <p> SmileBright Dental Careare dedicated to providing exceptional dental services and creating beautiful smiles. Our skilled and compassionate team strives to exceed expectations by delivering personalized care. From routine cleanings to advanced cosmetic and restorative treatments, we offer comprehensive dental services tailored to meet your unique needs. With state-of-the-art technology and a warm environment, we ensure efficient and comfortable treatments. Our experienced dentists stay updated with the latest advancements, offering evidence-based care and a gentle touch. We value long-term relationships, emphasizing open communication and personalized treatment plans. Trust us with your smile, and let us help you achieve a brighter, healthier future.</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/icon-1.svg" alt="">
         <h3>Alignment specialist</h3>
         <p>The Alignment Specialist of dental is a specialized practitioner who focuses on correcting and improving dental alignment. With expertise in orthodontics and other alignment techniques, they help patients achieve straighter teeth and proper jaw alignment for enhanced oral health and a confident smile.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.svg" alt="">
         <h3>Cosmetic dentistry</h3>
         <p>Cosmetic Dentistry focuses on enhancing the appearance of teeth and creating beautiful smiles. This branch of dentistry offers various treatments like teeth whitening, veneers, dental implants, and smile makeovers.Cosmetic dentistry helps patients achieve their desired aesthetic results and boosts their self-confidence.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.svg" alt="">
         <h3>Oral hygiene experts</h3>
         <p>Oral Hygiene Experts are dental professionals who specialize in promoting and maintaining optimal oral health. They provide valuable guidance and education on proper oral hygiene practices, flossing, and regular dental check-ups. These experts emphasize preventive care to prevent dental issues such as cavities and bad breath.</p>
      </div>

      <div class="box">
         <img src="images/icon-4.svg" alt="">
         <h3>Root canal specialist</h3>
         <p>Root Canal Specialists are highly skilled dental professionals who specialize in diagnosing and treating infections and damage within the root canals of teeth. When the soft inner tissue of a tooth, known as the pulp, becomes infected or injured due to deep decay, trauma, or repeated dental procedures, a root canal treatment may be necessary to save the tooth.</p>
      </div>

      <div class="box">
         <img src="images/icon-5.svg" alt="">
         <h3>Live dental advisory</h3>
         <p>Live Dental Advisory is a service that offers real-time guidance and support from dental professionals. Through this platform, individuals can connect with experienced dentists and receive expert advice on various dental concerns and questions. it's about oral hygiene practices, dental emergencies, treatment options, or general dental inquiries.</p>
      </div>

      <div class="box">
         <img src="images/icon-6.svg" alt="">
         <h3>Cavity inspection</h3>
         <p>Cavity inspection is a vital component of dental care that involves a thorough assessment of dental decay. Dentists and dental professionals use various techniques and tools to examine the teeth and identify any signs of cavities or tooth decay.The dentist visually examines the teeth, looking for visible signs of decay such as discoloration, pits, or holes on the tooth surface.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">work process</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/process-1.png" alt="">
         <h3>Cosmetic Dentistry</h3>
         <p>Enhancing smiles with aesthetic procedures, from teeth whitening to smile makeovers, for improved confidence and appearance.</p>
      </div>

      <div class="box">
         <img src="images/process-2.png" alt="">
         <h3>Pediatric Dentistry</h3>
         <p>Specialized dental care for children, promoting oral health and building positive dental experiences from an early age.</p>
      </div>

      <div class="box">
         <img src="images/process-3.png" alt="">
         <h3>Dental Implants</h3>
         <p> Permanent tooth replacements that restore function and aesthetics, providing a natural-looking and durable solution for missing teeth.</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Impressed with SmileBright Dental Care's professionalism and care during my recent routine cleaning. Friendly staff made me feel at ease. Knowledgeable dentist, clean clinic, and modern technology ensured a comfortable experience. Highly recommend for a brighter smile!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kanon Ahmed</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Had an amazing experience at SmileBright Dental Care - warm and friendly receptionist, skilled and gentle dentist, painless and stress-free procedure. Calming ambiance and latest equipment. Attentive and caring team. Extremely satisfied with the results, highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sanjida Jahan</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>SmileBright Dental Care exceeded expectations professional and knowledgeable staff, instilled confidence. Thoroughly explained treatment options and addressed concerns. Impeccably clean clinic. Appreciate the personalized care and attention to detail. Highly recommended for exceptional dental care!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sayeed Choudhory</h3>
         <span>satisfied client</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">make appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
   </form>  

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+8801378945612</p>
         <p>+8801465897456</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Our address</h3>
         <p>Daffodil smart city, Asulia, Dhaka</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>00:07am to 10:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>detalbright@gmail.com</p>
         <p>sadiaislam123@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span> Sadia's Project</span>  </div>

</section>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>