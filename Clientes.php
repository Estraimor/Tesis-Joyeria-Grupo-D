<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Navigation | Hoverable Sidebar Menu</title>
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'><link rel="stylesheet" href="./style.css">
  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">-->
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<!-- partial:index.partial.html -->
<div class="sidebar">
  <div class="logo-details">
    <div class="logo_name">Joyeria Sosa</div>
    <i class='bx bx-menu' id="btn"></i>
  </div>
  <ul class="nav-list">
    <li>
      <a href="index.php">
        <i class='bx bx-grid-alt'></i>
        <span class="links_name">Inicio</span>
      </a>
      <span class="tooltip">Inicio</span>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-user'></i>
        <span class="links_name">Clientes</span>
      </a>
      <span class="tooltip">Clientes</span>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Analytics</span>
      </a>
      <span class="tooltip">Analytics</span>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-folder'></i>
        <span class="links_name">Stock</span>
      </a>
      <span class="tooltip">Stock</span>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-cart-alt'></i>
        <span class="links_name">Proveedor</span>
      </a>
      <span class="tooltip">Proveedor</span>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-cog'></i>
        <span class="links_name">Setting</span>
      </a>
      <span class="tooltip">Setting</span>
    </li>
    <li class="profile">
      <div class="profile-details">
        <img src="" alt="profileImg">
        <div class="name_job">
          <div class="name">Barros Luciano</div><!-- Nombre trabajador -->
          <div class="job">Backend Developer</div><!-- Cargo Trabajador -->
        </div>
      </div>
      <a href=""><i class='bx bx-log-out' id="log_out"></i></a>
    </li>
  </ul>
</div>

<!--__________________________________Seccion de adentro Trabajar Tablas y footers a partir de aca -->
<section class="home-section">
  
<div class="text">Aqui va la tabla de clientes</div>


  





<footer>
      <div class="background">
        <svg
          version="1.1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          width="100%"
          height="100%"
          viewBox="0 0 1600 900"
        >
          <defs>
            <linearGradient id="bg" x2="0%" y2="100%">
              <stop
                offset="0%"
                style="stop-color: rgba(53, 127, 242, 0.6)"
              ></stop>
              <stop
                offset="100%"
                style="stop-color: rgba(38, 89, 190, 0.06)"
              ></stop>
            </linearGradient>
            <path
              id="wave"
              fill="url(#bg)"
              d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
      s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z"
            />
          </defs>
          <g>
            <use xlink:href="#wave" opacity=".3">
              <animateTransform
                attributeName="transform"
                attributeType="XML"
                type="translate"
                dur="8s"
                calcMode="spline"
                values="270 230; -334 180; 270 230"
                keyTimes="0; .5; 1"
                keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                repeatCount="indefinite"
              />
            </use>
            <use xlink:href="#wave" opacity=".6">
              <animateTransform
                attributeName="transform"
                attributeType="XML"
                type="translate"
                dur="6s"
                calcMode="spline"
                values="-270 230;243 220;-270 230"
                keyTimes="0; .6; 1"
                keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                repeatCount="indefinite"
              />
            </use>
            <use xlink:href="#wave" opacty=".9">
              <animateTransform
                attributeName="transform"
                attributeType="XML"
                type="translate"
                dur="4s"
                calcMode="spline"
                values="0 230;-140 200;0 230"
                keyTimes="0; .4; 1"
                keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                repeatCount="indefinite"
              />
            </use>
          </g>
        </svg>
      </div>

      <section class="paraiconos" >
        <ul class="socials">
          <li><a class="fa-brands fa-facebook"></a></li>
          <li><a class="fa-brands fa-twitter"></a></li>
          <li><a class="fa-brands fa-linkedin"></a></li>
          <li><a class="fa-brands fa-instagram"></a></li>
        </ul>
        <ul class="links">
          <li><a href="" >Home</a></li>
          <li><a>About</a></li>
          <li><a>Services</a></li>
          <li><a>Team</a></li>
          <li><a>Contact</a></li>
        </ul>
        <p class="legal">© 2023 All rights reserved by group D</p>
      </section>
    </footer>

  


</section>
<!-- partial -->
  <script  src="./script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
