<?php 

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/main.css">
</head>
<body id="home" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50"   >
   <!-- navbar -->
   <nav class="navbar navbar-expand-md bg-primary navbar-dark py-2 fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="./img/logo.svg" alt="" width="80" height="80">
            SCI Cash Payment</a>

        <button 
        class="navbar-toggler" 
        data-bs-toggle="collapse" 
        data-bs-target="#navmenu" >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#learn" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#ask" class="nav-link">Questions</a>
                </li>
                <li class="nav-item">
                    <a href="#instructors" class="nav-link">Team</a>
                </li>
                <li class="nav-item ">
                <a href="userdashboard.php" class="nav-link ">
                 <span class="text-warning"><!--<?php echo 'Welcome '?> -->
                <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : '' ?></span>
                </a>
                    
               
                <li class="nav-item">
                    <a href="./register.php" class="nav-link btn btn-outline-light rounded-pill ms-3">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
    
</nav>

<!-- showcase -->
<section class="bg-secondary text-light p-5  pt-lg-5 mt-5 showcas text-center text-sm-start">
    <div class="container ">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div >
                <h1>Awesome <span class="text-warning auto-input"></span></h1>
                <p class="lead my-4">
                Online Banking
                Service is The Best Service
                Of The Man.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <button 
                class="btn btn-primary btn-lg"
                data-bs-toggle="modal" 
                data-bs-target="#enroll">Get Started</button>

            </div>
            <div class="parent w-50">
                <img class="img-fluid anim  d-none d-sm-block" src="./img/pay_online.svg" alt="showcase">
            </div>
            
        </div>
    </div>
</section>

<!-- newsletter -->
<section class="bg-primary text-light p-5">
    <div class="container">
        <div class="d-md-flex align-items-center justify-content-between ">
            <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>
            <div class="input-group news-input">
                <input 
                type="text" 
                class="form-control" 
                placeholder="Enter Email" 
                >
                <button class="btn btn-lg  btn-dark text-light" type="button" id="button-addon2">Submit</button>
            </div>
        </div>
    </div>
</section>

<!-- services -->
<section class="p-5 bg-light">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-sm info-one"> 
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="fa-solid fa-user-shield"></i>
                        </div>
                        <h3 class="card-title mb-4">
                            Secure
                        </h3>
                        <p class="card-text">Lorem ipsum dolor sit, 
                            amet consectetur adipisicing elit. 
                            Eveniet qui ab mollitia, incidunt perferendis
                             praesentium.</p>
                             <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm info-two">
                <div class="card bg-secondary text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="fa-solid fa-gauge-high"></i>
                        </div>
                        <h3 class="card-title mb-3">
                            Fast
                        </h3>
                        <p class="card-text">Lorem ipsum dolor sit, 
                            amet consectetur adipisicing elit. 
                            Eveniet qui ab mollitia, incidunt perferendis
                             praesentium.</p>
                             <a href="#" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm info-three">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="fa-solid fa-handshake-angle"></i>
                        </div>
                        <h3 class="card-title mb-3">
                            Easy
                        </h3>
                        <p class="card-text">Lorem ipsum dolor sit, 
                            amet consectetur adipisicing elit. 
                            Eveniet qui ab mollitia, incidunt perferendis
                             praesentium.</p>
                             <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <!-- about -->
  <section class="p-5" id="learn">
    <div class="container">
        <div class="row align-items-center justify-content-between g-5">
             <div class="col-md">
                 <img src="./img/undraw_revenue_re_2bmg.svg" alt="fundamentals" class="img-fluid">

             </div>
             <div class="col-md text">
                 <h2 class="h2">The best way to share money</h2>
                 <p class="lead">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, placeat sapiente? Necessitatibus asperiores laborum vel!
                 </p>
                 <p class="lead">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem cupiditate nulla, accusamus delectus id laudantium adipisci officiis veritatis debitis quae consequatur unde. Neque illum voluptates sunt quidem sed eum autem!
                 </p>
                 <a href="#" class="btn btn-light mt-3">
                     <i class="bi bi-chevron-right"></i>Read More</a>
             </div>
        </div>
    </div>
</section>
<!-- section -->
<section class="p-5 bg text-dark">
    <div class="container">
        <div class="row align-items-center justify-content-between g-5">
            <div class="col-md text2">
                <h2 class="h2">Simplify your life</h2>
                <p class="lead">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate, ab assumenda. Alias vitae possimus fuga.
                </p>
                <p class="lead">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor id dolore deserunt quam aut vero, optio sint ipsam. Expedita, debitis.
                </p>
                <a href="#" class="btn btn-light mt-3">
                    <i class="bi bi-chevron-right"></i>Read More</a>
            </div> 
            <div class="col-md">
                 <img src="./img/undraw_online_transactions_-02-ka.svg" alt="react" class="img-fluid im2">
             </div>
             
        </div>
    </div>
</section>

 <!-- question accordion -->
 <section class="p-5" id="ask">
    <div class="container">
        <h2 class="text-center mb-4">
            Frequently Asked Questions
        </h2>
        <div class="accordion accordion-flush" id="ask">
            <!-- item1 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button 
                class="accordion-button 
                collapsed" type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#flush-collapseOne" >
                  Where exactly are you located?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam beatae fuga animi distinctio perspiciatis adipisci velit maiores totam tempora accusamus modi explicabo accusantium consequatur, praesentium rem quisquam molestias at quos vero. Officiis ad velit doloremque at. Dignissimos praesentium necessitatibus natus corrupti cum consequatur aliquam! Minima molestias iure quam distinctio velit.
                </div>
              </div>
            </div>
            <!-- item2 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button 
                class="accordion-button 
                collapsed" type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#flush-collapseTwo" 
                >
                  How much does it cost to attend?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam beatae fuga animi distinctio perspiciatis adipisci velit maiores totam tempora accusamus modi explicabo accusantium consequatur, praesentium rem quisquam molestias at quos vero. Officiis ad velit doloremque at. Dignissimos praesentium necessitatibus natus corrupti cum consequatur aliquam! Minima molestias iure quam distinctio velit.</div>
              </div>
            </div>
            <!-- item3 -->
            <div class="accordion-item">
              <h2 class="accordion-header" >
                <button 
                class="accordion-button 
                collapsed" type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#flush-collapseThree" 
                >
                  What do I need to Know?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam beatae fuga animi distinctio perspiciatis adipisci velit maiores totam tempora accusamus modi explicabo accusantium consequatur, praesentium rem quisquam molestias at quos vero. Officiis ad velit doloremque at. Dignissimos praesentium necessitatibus natus corrupti cum consequatur aliquam! Minima molestias iure quam distinctio velit.</div>
              </div>
            </div>
            <!-- item4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" >
                  <button 
                  class="accordion-button 
                  collapsed" type="button" 
                  data-bs-toggle="collapse" 
                  data-bs-target="#flush-collapseThree" 
                  >
                    How Do I sign up?
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam beatae fuga animi distinctio perspiciatis adipisci velit maiores totam tempora accusamus modi explicabo accusantium consequatur, praesentium rem quisquam molestias at quos vero. Officiis ad velit doloremque at. Dignissimos praesentium necessitatibus natus corrupti cum consequatur aliquam! Minima molestias iure quam distinctio velit.</div>
                </div>
              </div>
              <!-- item5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" >
                  <button 
                  class="accordion-button 
                  collapsed" type="button" 
                  data-bs-toggle="collapse" 
                  data-bs-target="#flush-collapseThree" 
                  >
                    Do you help me find a job?
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam beatae fuga animi distinctio perspiciatis adipisci velit maiores totam tempora accusamus modi explicabo accusantium consequatur, praesentium rem quisquam molestias at quos vero. Officiis ad velit doloremque at. Dignissimos praesentium necessitatibus natus corrupti cum consequatur aliquam! Minima molestias iure quam distinctio velit..</div>
                </div>
              </div>
          </div>
    </div>
</section>

<!-- instructors -->
<section class="p-5 bg-primary" id="instructors">
    <div class="container">
        <div class="h1 text-center text-light">Our Team</div>
        <p class="lead mb-5 text-center text-light">
            Our teamsmate all have 5+ years working as a web developer in the industry
        <p>
        <div class="row g-4">
            <!-- card 1 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://moi.jpg" alt="" class="rounded-circle mb-3">
                        <h3 class="card-title mb-3">
                            Mbiada bayon
                        </h3>
                        <P class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, atque.
                        </P>
                        <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- card 2 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://sophie.jpg" alt="" class="rounded-circle mb-3">
                        <h3 class="card-title mb-3">
                           Mba Sophia
                        </h3>
                        <P class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, atque.
                        </P>
                        <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- card 3 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://christian.png" alt="" class="rounded-circle mb-3">
                        <h3 class="card-title mb-3">
                            Kewou Christian
                        </h3>
                        <P class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, atque.
                        </P>
                        <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- card 4 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="" alt="" class="rounded-circle mb-3">
                        <h3 class="card-title mb-3">
                            Tchio Coreneille
                        </h3>
                        <P class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, atque.
                        </P>
                        <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
          

    </div>
</section>

<!-- contacts -->
<section class="p-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md">
                <h2 class="texte-center mb-4">
                    Contact Info
                </h2>
                <ul class="list-group list-group-flush lead">
                    <li class="list-group-item">
                        <span class="fw-bold">Main Location:</span>
                        Yaounde Ngoa-Ekelle UY1
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Enrollment Phone: </span>
                        (6) 555-555-555
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Enrollment Email:</span>
                            Email: info@uy1.uninet.cm 
                    </li>
                </ul>
            </div>
            <div class="col-md">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>
<!-- footer -->
<footer class="p-5 bg-dark text-light text-center position-relative">
    <div class="container">
        <p class="lead"> © 2021 Copyright:  ICT-L1 UY1 &copy; <?php echo date('Y');?> Smart Payment 2021-2022
        </p>
        <a href="#" class="position-absolute bottom-0 end-0 p-5">
            <i class="fa-solid fa-arrow-up text-light"></i>
        </a>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js'></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiZ2Vla2Vyc2pvZWwyMzciLCJhIjoiY2t6bXowcmlsMDByMzMycW8yajRleGFjOSJ9.VnU-jRo6A9NwwAVWRJOzOA';
        const map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        center: [11.51692, 3.87607], // starting position [lng, lat]
        zoom: 9 // starting zoom
        });
     </script>
     <script src="https://unpkg.com/scrollreveal"></script>
     <script>
         window.sr = ScrollReveal();
         sr.reveal('.navbar',{
             duration : 2000,
             origin : 'bottom'
         });
         sr.reveal('.info-one',{
            duration : 2000,
            origin : 'left',
            distance : '300px',
            viewFactor : 0.2
        });
        sr.reveal('.info-two',{
            duration : 2000,
            origin : 'top',
            distance : '300px',
            viewFactor : 0.2
        });
        sr.reveal('.info-three',{
            duration : 2000,
            origin : 'right',
            distance : '300px',
            viewFactor : 0.2
        });
        sr.reveal('#learn img',{
            duration : 3000,
            origin : 'left',
            distance : '300px'
        })
        sr.reveal('.im2',{
            duration : 3000,
            origin : 'rigth',
            distance : '300px'
        })
     </script>
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

      <script>
        let typed = new Typed(".auto-input",{
            strings:["Secure","Transparent","Free of charge","Easy","simple"],
            typeSpeed:100,
            backSpeed:100,
            loop:true
        })   
      </script>
</body>
</html>