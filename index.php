<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Neel Gupta">
  <meta name="description" content="This is a Ecommerce Bootstrap website template made by Neel Gupta">
  <title>Ecommerce</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
  <link rel="shortcut icon" href="assets/ico/istockphoto-1266252971-612x612.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    *{
      font-family: 'Poppins', sans-serif;
    }

    .modal-backdrop{
      z-index: 1;
    }

    #exampleModal{
      margin-top: 40px;
    }

    .btn{
      transition:0.4s ease-out;
    }
  </style>

</head>

<body>



    <?php include('assets/comman-html/navbar.php'); ?>



  <section class="slider">

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
          <img src="assets/img/Untitled.jpg" width="100%" height="400px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="assets/img/Untitled1.jpg" width="100%" height="400px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/Untitled2.jpg" width="100%" height="400px" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </section>



  <section class="shop">
    <h2 class="text-center my-3">Featured Items</h2>

    <div class="items d-flex flex-wrap">


      <div class="card m-auto my-3 p-3" style="width: 18rem;">
        <img src="assets/img/Untitled.jpg" width="250px" height="250px" class="card-img-top mb-2" alt="..." style="border-radius: 7px;">
        <div class="card-body p-1">
          <h3 class="card-title m-0">Item Title</h3>
          <p class="card-text mb-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <h4 class="card-text">$499</h4>
          <a href="cart/" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
            </svg></a>
        </div>
      </div>
      <div class="card m-auto my-3 p-3" style="width: 18rem;">
        <img src="assets/img/Untitled.jpg" width="250px" height="250px" class="card-img-top mb-2" alt="..." style="border-radius: 7px;">
        <div class="card-body p-1">
          <h3 class="card-title m-0">Item Title</h3>
          <p class="card-text mb-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <h4 class="card-text">$499</h4>
          <a href="cart/" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
            </svg></a>
        </div>
      </div>
      <div class="card m-auto my-3 p-3" style="width: 18rem;">
        <img src="assets/img/Untitled.jpg" width="250px" height="250px" class="card-img-top mb-2" alt="..." style="border-radius: 7px;">
        <div class="card-body p-1">
          <h3 class="card-title m-0">Item Title</h3>
          <p class="card-text mb-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <h4 class="card-text">$499</h4>
          <a href="cart/" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
            </svg></a>
        </div>
      </div>
      <div class="card m-auto my-3 p-3" style="width: 18rem;">
        <img src="assets/img/Untitled.jpg" width="250px" height="250px" class="card-img-top mb-2" alt="..." style="border-radius: 7px;">
        <div class="card-body p-1">
          <h3 class="card-title m-0">Item Title</h3>
          <p class="card-text mb-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <h4 class="card-text">$499</h4>
          <a href="cart/" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">

              <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
            </svg></a>
        </div>
      </div>
      <div class="card m-auto my-3 p-3" style="width: 18rem;">
        <img src="assets/img/Untitled.jpg" width="250px" height="250px" class="card-img-top mb-2" alt="..." style="border-radius: 7px;">
        <div class="card-body p-1">
          <h3 class="card-title m-0">Item Title</h3>
          <p class="card-text mb-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <h4 class="card-text">$499</h4>
          <a href="cart/" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
            </svg></a>
        </div>
      </div>
      <div class="card m-auto my-3 p-3" style="width: 18rem;">
        <img src="assets/img/Untitled.jpg" width="250px" height="250px" class="card-img-top mb-2" alt="..." style="border-radius: 7px;">
        <div class="card-body p-1">
          <h3 class="card-title m-0">Item Title</h3>
          <p class="card-text mb-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <h4 class="card-text">$499</h4>
          <a href="cart/" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
            </svg></a>
        </div>
      </div>
      <div class="card m-auto my-3 p-3" style="width: 18rem;">
        <img src="assets/img/Untitled.jpg" width="250px" height="250px" class="card-img-top mb-2" alt="..." style="border-radius: 7px;">
        <div class="card-body p-1">
          <h3 class="card-title m-0">Item Title</h3>
          <p class="card-text mb-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <h4 class="card-text">$499</h4>
          <a href="cart/" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
            </svg></a>
        </div>
      </div>
      <div class="card m-auto my-3 p-3" style="width: 18rem;">
        <img src="assets/img/Untitled.jpg" width="250px" height="250px" class="card-img-top mb-2" alt="..." style="border-radius: 7px;">
        <div class="card-body p-1">
          <h3 class="card-title m-0">Item Title</h3>
          <p class="card-text mb-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <h4 class="card-text">$499</h4>
          <a href="cart/" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
            </svg></a>
        </div>
      </div>

    </div>


  </section>


  <section id="q-blog">

    <div id="blogs" class="m-4">

      <div class="card" style="width: 18rem;">
        <img src="assets/img/Untitled1.jpg" height="150px" width="50px" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>


    </div>


  </section>



  <section id="info">

    <div class="info-box" style="background-color: black;">
      <p class="text-center mx-5" style="color:white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nihil hic corporis vitae ullam placeat, enim eius corrupti molestiae aliquid cum beatae? Similique eos saepe iure facere perferendis doloribus, deserunt molestias tempora maxime.</p>
    </div>

  </section>




  <div class="b-example-divider"></div>

  <?php include('assets/comman-html/footer.php'); ?>
















  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>



</body>

</html>