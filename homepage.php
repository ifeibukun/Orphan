<?php 

include "navbar.html";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orphanage Homepage</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .hero-section {
      background-color: #f4f4f4;
      padding: 50px 20px;
      text-align: center;
    }

    .hero-section h1 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    .hero-section p {
      font-size: 18px;
      margin-bottom: 40px;
    }

    .featured-section {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      grid-gap: 20px;
      padding: 50px 20px;
      text-align: center;
    }

    .featured-section h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }

    h2{
        text-align: center;
        margin-top: 4%;
        font-weight: bolder;
    }

    .featured-section .program {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 5px;
    }

    .featured-section .program h3 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .featured-section .program p {
      font-size: 16px;
      line-height: 1.6;
    }

    .testimonial-section {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-gap: 20px;
      padding: 50px 20px;
      text-align: center;
      background-color: #f4f4f4;
    }

    .testimonial-section h2 {
      font-size: 28px;
      margin-bottom: 20px;
      grid-column: span 2;
    }

    .testimonial {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
    }

    .testimonial p {
      font-size: 16px;
      line-height: 1.6;
    }

    .cta-button {
      display: inline-block;
      background-color: #333;
      color: #fff;
      padding: 12px 24px;
      text-decoration: none;
      font-size: 18px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .cta-button:hover {
      background-color: #555;
    }

       /* Reset default margin and padding */
       body, h1, p {
        margin: 0;
        padding: 0;
    }

    /* Container for the event */
    .event-container {
        width: 300px;
        margin: 20px;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Event title */
    .event-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    /* Event date */
    .event-date {
        font-size: 16px;
        color: #666;
        margin-bottom: 10px;
    }

    /* Event description */
    .event-description {
        font-size: 16px;
        margin-bottom: 20px;
    }

    /* Event button */
    .event-button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .events-containers{
        display: flex;
    }

    /* Event button hover effect */
    .event-button:hover {
        background-color: #45a049;
    }

    .events{
        font-size: 30px;
        font-weight: bolder;
        text-align: center;
        margin-top: 4%;
    }

    .first-events{
        margin-top: 5%;
    }
    .carousel-container {
  position: relative;
  width: 100%;
  max-width: 600px; /* Adjust max-width as needed */
  margin: auto;
}

.carousel-slide {
  display: none;
}

.carousel-slide img {
  width: 100%;
  height: auto;
}

/* Next & previous buttons */
.prev, .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 1;
  cursor: pointer;
  font-size: 18px;
  padding: 15px;
  background-color: rgba(0, 0, 0, 0.5);
  color: #fff;
  border: none;
  border-radius: 50%;
}

.prev {
  left: 0;
}

.next {
  right: 0;
}



    /* Media Query for Responsive Design */
    @media screen and (max-width: 768px) {
      .testimonial-section {
        grid-template-columns: 1fr;
      }
      .events-containers{
        display: flex;
        flex-direction: column;
    }
    .event-container {
        width: 250px;
        margin: 20px;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    }
  </style>
</head>
<body>
<header>
    <h1>Welcome to Our Orphanage</h1>
  </header>

<div class="carousel-container">
  <div class="carousel-slide">
    <img src="image/orphanage_1.avif" alt="Slide 1">
  </div>
  <div class="carousel-slide">
    <img src="image/orphanage_2.avif" alt="Slide 2">
  </div>
  <div class="carousel-slide">
    <img src="image/orphanage_3.jpg" alt="Slide 3">
  </div>
  <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
  <button class="next" onclick="plusSlides(1)">&#10095;</button>
</div>



  <div class="container">

    <div class="hero-section">
      <h1>Providing Love, Care, and Support</h1>
      <p>Helping orphaned children find hope for a better future.</p>
      <a href="donate.php" class="cta-button">Support Us</a>
    </div>

    <h2>Featured Programs</h2>

    <div class="featured-section">
      <div class="program">
        <h3>Education Support</h3>
        <p>Our education support program ensures that every child has access to quality education, including school supplies, tutoring, and scholarships.</p>
      </div>
      <div class="program">
        <h3>Healthcare Services</h3>
        <p>We provide comprehensive healthcare services, including regular check-ups, vaccinations, and access to medical professionals.</p>
      </div>
      <div class="program">
        <h3>Life Skills Training</h3>
        <p>Our life skills training program equips children with essential skills such as communication, problem-solving, and financial literacy to prepare them for independent living.</p>
      </div>
    </div>

    <div class="first-events"> <p class="events">Events</p>  </div>

    <div class="events-containers">
        <div class="event-container">
            <h2 class="event-title">Upcoming Event</h2>
            <p class="event-date">Date: January 1, 2025</p>
            <p class="event-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="#" class="event-button">Learn More</a>
        </div>

        <div class="event-container">
            <h2 class="event-title">Upcoming Event</h2>
            <p class="event-date">Date: January 1, 2025</p>
            <p class="event-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="#" class="event-button">Learn More</a>
        </div>

        <div class="event-container">
            <h2 class="event-title">Upcoming Event</h2>
            <p class="event-date">Date: January 1, 2025</p>
            <p class="event-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="#" class="event-button">Learn More</a>
        </div>
    </div>

    <div class="testimonial-section">
      <h2>Testimonials</h2>
      <div class="testimonial">
        <p>"The orphanage database system has transformed our operations, making it easier to manage records and provide personalized care to each child. It has truly been a game-changer for us." - John Doe, Orphanage Director</p>
      </div>
      <div class="testimonial">
        <p>"Thanks to the support of the orphanage, I have been able to pursue my dreams and build a better future for myself. I am forever grateful for their love and guidance." - Sarah Smith, Former Orphan</p>
      </div>
    </div>

  </div>

  <?php
  
  include "footer.html"
  
  ?>

</body>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("carousel-slide");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}


</script>
</html>



