<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
  <style>
    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
  background-color: #D4AF37;
}
footer{
  margin-top: auto;
}
.navbar {
  background-color:#2E2E2E !important;
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
  height: 60px;
  padding: 4px;
  width: 100%;
}

.navbar-brand {
  padding: 3px;
  padding-left: 10px;
}

.navbar-brand img {
  background-size: cover;
  height: 52px;
  width: 60px;
}

.navbar-nav a.nav-link {
  color: #fefefe;
  font-size: 19px;
  font-family:Georgia, 'Times New Roman', Times, serif ;
  padding: 5px;
}

.navbar-nav .nav-item:hover .nav-link {
  color: #5b93cb;
}

.navbar-toggler-icon {
  background-color: none;
  border: none;
  font-size: 18px;
}

.navbar-toggler {
  border-color: #007bff;
  border: none;
}

.navbar-toggler:hover {
  background-color: #9fadb4;
  border: none;
}
a.dropdown-item {
  font-size: 16px;
  padding: 5px;
  padding-left: 20px;
  width: 100%;
  margin: 0px;
}

a.dropdown-item:hover {
  background-color: #063;
  font-size: 17px;
  color: #fefefe;
}
div#navbarNav.collapse {
  margin: 10px 15px 10px 10px;
  position: absolute;
  margin-left: 90px;
}
div.dropdown-menu.show {
  margin-top: 15px;
  padding: 3x;
  border-radius: 2px;
  box-shadow: 2px 5px 15px rgb(255, 255, 255);
}

a#servicesDropdown,
a#contactDropdown {
  color: rgb(255, 255, 255);
}

@media (max-width: 992px) {
  .navbar-brand img {
    height: 52px; /* Adjust height for smaller screens */
    width: 60px; /* Allow width to adjust based on height */
  }

  div.dropdown-menu.show {
    margin-top: 0px;
    padding: 0px 3px;
    border-radius: 2px;
    border: none;
    box-shadow: none;
  }

  div#navbarNav.collapsing {
    margin: 10px 5px 10px 5px;
    z-index: 2;
  }
  div#navbarNav.collapse.show {
    margin: 10px 5px 10px 5px;
    z-index: 2;
  }
  div#navbarNav.collapse {
    margin-left: 10px;
    position: static;
  }
 
}
/* .img-div {
        position: absolute;
      } */
  </style>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style='background-color:#063 !important;'>
    <a class="navbar-brand  " href="#">
      <img src="mahiLakraLogo.png" alt=""/>
      
         MAHI LAKRA FOUNDATION
    
  </a>


    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#">Donate</a>
        </li>

        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="servicesDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            Contributions
          </a>
          <div class="dropdown-menu" aria-labelledby="servicesDropdown">
            <a class="dropdown-item" href="#">Education</a>
            <a class="dropdown-item" href="#">HealthCare</a>
            <a class="dropdown-item" href="#">Women Empowerment</a>
            <a class="dropdown-item" href="#">Food Distribution</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="contactDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            Contact
          </a>
          <div class="dropdown-menu" aria-labelledby="contactDropdown">
            <a class="dropdown-item" href="#">Email</a>
            <a class="dropdown-item" href="#">Phone</a>
            <a class="dropdown-item" href="#">Address</a>
          </div>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#">Blog</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#">About Us</a>
        </li>
      </ul>
    </div>
  </nav>
