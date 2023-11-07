<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ExMatebooking-Facilities</title>

  <?php require("inc/links.php");?>


  <!-- swiper CSS link-->
  <link  rel="stylesheet"  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


 

    <style>      
      .availability-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }

      @media screen and (max-width: 575px){
              .availability-form{
              margin-top: 25px;
              padding: 0 35px;
            }
      }
    </style>

  




</head>
<body class="bg-light">

<?php require("inc/header.php");?>

<!-- Swiper slide carousel effect fade -->
<div class="container-fluid px-lg-4 mt-4">
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="img/carousel/1.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="img/carousel/2.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="img/carousel/3.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="img/carousel/4.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="img/carousel/5.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="img/carousel/6.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="img/carousel/7.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="img/carousel/8.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="img/carousel/9.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="img/carousel/10.jpg" class="w-100 d-block">
      </div>

    </div>
    
    
  </div>
</div>

<!-- Check Availablity form -->
<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-in</label>
             <input type="date" class="form-control shadow-none" >
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-out</label>
             <input type="date" class="form-control shadow-none" >
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Adult</label>
             <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
             </select>
          </div> 
          <div class="col-lg-2 mb-3">
            <label class="form-label" style="font-weight: 500;">Children</label>
             <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
             </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn tex-white btn-outline-dark shadow-none custom-bg">Submit</button>
          </div>         
        </div>
      </form>
    </div>
  </div>
</div>

<!--Rooms-->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="img/room/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room</h5>
            <h6 class="mb-4">Rs6000 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Feautures</h6>
               <span class="badge bg-light text-dark text-wrap">
                 2 Rooms
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 1 Bathroom
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 1 Balcony
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 3 Sofa
               </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge bg-light text-dark text-wrap">
                 Wifi
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 Television
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 AC/Room Heater
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 Mini Fridgh
               </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Ratings</h6>
              <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
              </span>          
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-primary btn-outline-dark">Book now</a>
              <a href="#" class="btn btn-sm btn-outline-dark text-dark custom-bg shadow-none">More Details</a>
            </div>        
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="img/room/2.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room</h5>
            <h6 class="mb-4">Rs6000 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Feautures</h6>
               <span class="badge bg-light text-dark text-wrap">
                 2 Rooms
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 1 Bathroom
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 1 Balcony
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 3 Sofa
               </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge bg-light text-dark text-wrap">
                 Wifi
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 Television
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 AC/Room Heater
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 Mini Fridgh
               </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Ratings</h6>
              <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
              </span>          
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-primary btn-outline-dark">Book now</a>
              <a href="#" class="btn btn-sm btn-outline-dark text-dark custom-bg shadow-none">More Details</a>
            </div>        
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="img/room/3.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room</h5>
            <h6 class="mb-4">Rs6000 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Feautures</h6>
               <span class="badge bg-light text-dark text-wrap">
                 2 Rooms
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 1 Bathroom
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 1 Balcony
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 3 Sofa
               </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge bg-light text-dark text-wrap">
                 Wifi
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 Television
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 AC/Room Heater
               </span>
               <span class="badge bg-light text-dark text-wrap">
                 Mini Fridgh
               </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Ratings</h6>
              <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
              </span>          
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-primary btn-outline-dark">Book now</a>
              <a href="#" class="btn btn-sm btn-outline-dark text-dark custom-bg shadow-none">More Details</a>
            </div>        
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
      </div>
    </div>
  </div>

<!--Facilities-->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

 <div class="container">
   <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <img src="img/features/wifi.svg" width="80px">
       <h5 class="mt-3">Wifi</h5>
     </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <img src="img/features/wifi.svg" width="80px">
       <h5 class="mt-3">Wifi</h5>
     </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <img src="img/features/wifi.svg" width="80px">
       <h5 class="mt-3">Wifi</h5>
     </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <img src="img/features/wifi.svg" width="80px">
       <h5 class="mt-3">Wifi</h5>
     </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <img src="img/features/wifi.svg" width="80px">
       <h5 class="mt-3">Wifi</h5>
     </div>
     <div class="col-lg-12 text-center mt-5">
       <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facililities >>></a>
     </div>
   </div>
 </div>

<!--Reviews-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REVIEWS</h2>

  <div class="container mt-5">
    <div class="swiper swiper-reviews">
    <div class="swiper-wrapper mb-5">

      <div class="swiper-slide bg-white pt-4 ">
        <div class="profile d-flex align-items-center mb-3">
          <img src="img/room/1.jpg" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>
          is the best site of even when i see the travel sites.24*7  services is the best.
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white pt-4 ">
        <div class="profile d-flex align-items-center mb-3">
          <img src="img/room/1.jpg" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>
          is the best site of even when i see the travel sites.
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white pt-4 ">
        <div class="profile d-flex align-items-center mb-3">
          <img src="img/room/1.jpg" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>
          is the best site of even when i see the travel sites.
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
        </div>
        <div class="swiper-slide bg-white pt-4 ">
                <div class="profile d-flex align-items-center mb-3">
                  <img src="img/room/1.jpg" width="30px">
                  <h6 class="m-0 ms-2">Random user1</h6>
                </div>
                <p>
                  is the best site of even when i see the travel sites.
                </p>
                <div class="rating">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
              </div>
       <div class="swiper-slide bg-white pt-4 ">
              <div class="profile d-flex align-items-center mb-3">
                <img src="img/room/1.jpg" width="30px">
                <h6 class="m-0 ms-2">Random user1</h6>
              </div>
              <p>
                is the best site of even when i see the travel sites.
              </p>
              <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
      </div>
      <div class="swiper-slide bg-white pt-4 ">
              <div class="profile d-flex align-items-center mb-3">
                <img src="img/room/1.jpg" width="30px">
                <h6 class="m-0 ms-2">Random user1</h6>
              </div>
              <p>
                is the best site of even when i see the travel sites.
              </p>
              <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
            </div>
    </div>
    <div class="swiper-pagination"></div> </div>
  </div>

<!--Contact Us-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">CONTACT US</h2>
   
   <div class="container">
     <div class="row">
       <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.6903425873875!2d80.22145247463992!3d6.0371623939484325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173b12f4deb15%3A0x31ccbc33eb91d2ac!2sNIBM%20Galle%20Centre!5e0!3m2!1sen!2slk!4v1685012453835!5m2!1sen!2slk" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         
       </div>
       <div class="col-lg-4 col-md-4">
         <div class="bg-white p-4 rounded mb-4">
           <h5>Call us</h5>
           <a href="tel: +94765589592" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+94-76-558-9592</a>
            <br>
            <a href="tel: +94785592512" class="d-inline-block  text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+94-78-559-2512</a><br>
            <br>
            <h5>Follow us</h5>
           <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter me-1"></i>Twitter</a>
            </span>
            <br>
           <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i>Facebook</a>
            </span>
            <br>            
           <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-whatsapp me-1"></i>Whatsapp</a>
            </span>
             <br>           
           <a href="#" class="d-inline-block ">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i>Instagram</a>
            </span>
         </div>
       </div>
       
            
         </div>
       </div>
     </div>
   </div>


 <!--Footer-->
   <?php require("inc/footer.php");?>

<!--Boostrap JS link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Swiper JS link-->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- Initialize Swiper slide effects Js -->
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });

    var swiper = new Swiper(".swiper-reviews", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoint: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>

</body>
</html>