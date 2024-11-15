<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="">
  <!-- Page Title -->
  <title>VitaPlus</title>
  <!-- Favicon Icon -->
  <link rel="icon" href="images/favicon.png">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/lightgallery.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/jQueryUi.min.css">
  <link rel="stylesheet" href="css/textRotate.css">
  <link rel="stylesheet" href="css/select2.min.css">
  <link rel="stylesheet" href="css/style1.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.container1{
    max-width:500px;
    max-height: 10px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
}

label {
    display: block;
    margin: 10px 0 5px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #5cb85c;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #4cae4c;
}

.hidden {
    display: none;
}

#confirmation {
    margin-top: 20px;
    text-align: center;
    color: green;
}
button{
    background-color: #0cb8b6;
    color: #fff;
    font-size: 20px;
}
</style>
</head>
<body>
    <header class="st-site-header st-style1 st-sticky-header">
    <div class="st-top-header">
      <div class="container">
        <div class="st-top-header-in">
          <ul class="st-top-header-list">
            <li>
              <svg enable-background="new 0 0 479.058 479.058" viewBox="0 0 479.058 479.058" xmlns="http://www.w3.org/2000/svg">
                <path d="m434.146 59.882h-389.234c-24.766 0-44.912 20.146-44.912 44.912v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159l-200.355 173.649-200.356-173.649c1.769-.736 3.704-1.159 5.738-1.159zm0 299.411h-389.234c-8.26 0-14.971-6.71-14.971-14.971v-251.648l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"></path>
                </svg>
              <a href="#">info@vitaplus.com</a></li>
            <li>
              <svg enable-background="new 0 0 512.021 512.021" viewBox="0 0 512.021 512.021" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <path d="m367.988 512.021c-16.528 0-32.916-2.922-48.941-8.744-70.598-25.646-136.128-67.416-189.508-120.795s-95.15-118.91-120.795-189.508c-8.241-22.688-10.673-46.108-7.226-69.612 3.229-22.016 11.757-43.389 24.663-61.809 12.963-18.501 30.245-33.889 49.977-44.5 21.042-11.315 44.009-17.053 68.265-17.053 7.544 0 14.064 5.271 15.645 12.647l25.114 117.199c1.137 5.307-.494 10.829-4.331 14.667l-42.913 42.912c40.482 80.486 106.17 146.174 186.656 186.656l42.912-42.913c3.837-3.837 9.36-5.466 14.667-4.331l117.199 25.114c7.377 1.581 12.647 8.101 12.647 15.645 0 24.256-5.738 47.224-17.054 68.266-10.611 19.732-25.999 37.014-44.5 49.977-18.419 12.906-39.792 21.434-61.809 24.663-6.899 1.013-13.797 1.518-20.668 1.519zm-236.349-479.321c-31.995 3.532-60.393 20.302-79.251 47.217-21.206 30.265-26.151 67.49-13.567 102.132 49.304 135.726 155.425 241.847 291.151 291.151 34.641 12.584 71.867 7.64 102.132-13.567 26.915-18.858 43.685-47.256 47.217-79.251l-95.341-20.43-44.816 44.816c-4.769 4.769-12.015 6.036-18.117 3.168-95.19-44.72-172.242-121.772-216.962-216.962-2.867-6.103-1.601-13.349 3.168-18.117l44.816-44.816z"></path>
                  <path d="m496.02 272c-8.836 0-16-7.164-16-16 0-123.514-100.486-224-224-224-8.836 0-16-7.164-16-16s7.164-16 16-16c68.381 0 132.668 26.628 181.02 74.98s74.98 112.639 74.98 181.02c0 8.836-7.163 16-16 16z"></path>
                  <path d="m432.02 272c-8.836 0-16-7.164-16-16 0-88.224-71.776-160-160-160-8.836 0-16-7.164-16-16s7.164-16 16-16c105.869 0 192 86.131 192 192 0 8.836-7.163 16-16 16z"></path>
                  <path d="m368.02 272c-8.836 0-16-7.164-16-16 0-52.935-43.065-96-96-96-8.836 0-16-7.164-16-16s7.164-16 16-16c70.58 0 128 57.42 128 128 0 8.836-7.163 16-16 16z"></path>
                </g>
              </svg>
              <a href="#">+01 - 234 567 890</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="st-main-header">
      <div class="container">
        <div class="st-main-header-in">
          <div class="st-main-header-left">
            <a class="st-site-branding" href="/nischinto/"><img src="images/logo.jpg" alt="Nischinto"></a>
          </div>
          <div class="st-main-header-right">
            <div class="st-nav">
              <ul class="st-nav-list st-onepage-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="department.html">Department</a></li>
                <li><a href="doct.html">Doctors</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="price.html">Pricing</a></li>
                <li><a href="blog.html">Blog</a> </li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="appointment_details.php"class="active">Appointment_Details</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <br>
    <div class="container1">
      <br>
      <br>
      <br>
        <h4>Details:</h4>
        <?php
        $conn= new mysqli("localhost","root","mysql","contact",3307);
        $sql = "SELECT * FROM contact.list";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<b><br>Id: " . $row["id"]. "<br>Name: " . $row["name"]. "<br>Email: " . $row["email"]. "<br>Date: " . $row["date"]. "<br>Time: " . $row["time"]. "<br>Department: " . $row["department"]. "<br>Doctor: " . $row["doctor"]. "<br></b>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </div>
</body>
</html>