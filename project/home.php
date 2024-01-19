<!-- home.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Ordering Website</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Add your custom CSS styles here */

    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background:scroll ;
      background-color: #f5f5f5;
      background-size: cover;
    }
    nav {
      background-color: #333;
      overflow: hidden;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    nav li {
      float: left;
    }

    nav a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    nav a:hover {
      background-color: #ddd;
      color: black;
    }

    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
      background-size: cover;
    }

    .mySlides {
      display: none;
    }

    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      background-color: rgba(0, 0, 0, 0.8);
    }

    .prev:hover, .next:hover {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .caption {
      position: absolute;
      bottom: 0;
      width: 100%;
      text-align: center;
      padding: 8px 12px;
      background-color: rgba(0, 0, 0, 0.75);
      color: white;
    }
  </style>
</head>
<body>

<!-- Navigation Bar -->
<nav>
  <ul>
    <li><a href="categories.php">Categories</a></li>
    <li><a href="signup.php">SignUp</a></li>
    <li><a href="login.php">Login</a></li>
   
  </ul>
</nav>
<!-- Slideshow -->
<div class="slideshow-container">
  <div class="mySlides">
    <img src="shutter.jpg" style="width:100%">
    <div class="caption">Delicious Food 1</div>
  </div>

  <div class="mySlides">
    <img src="18.jpg" style="width:100%">
    <div class="caption">Delicious Food 2</div>
  </div>

  <div class="mySlides">
    <img src="back.jpg" style="width:100%">
    <div class="caption">Delicious Food 3</div>
  </div>

  <div class="mySlides">
    <img src="14.jpg" style="width:100%">
    <div class="caption">Delicious Food 4</div>
  </div>

  <div class="mySlides">
    <img src="anion.jpg" style="width:100%">
    <div class="caption">Delicious Food 5</div>
  </div>

  <div class="mySlides">
    <img src="10.jpg" style="width:100%">
    <div class="caption">Delicious Food 6</div>
  </div>

  <div class="mySlides">
    <img src="9.jpg" style="width:100%">
    <div class="caption">Delicious Food 7</div>
  </div>

  <div class="mySlides">
    <img src="4.jpg" style="width:100%">
    <div class="caption">Delicious Food 8</div>
  </div>

  <div class="mySlides">
    <img src="shutter.jpg" style="width:100%">
    <div class="caption">Delicious Food 9</div>
  </div>

  <div class="mySlides">
    <img src="profile.jpg" style="width:100%">
    <div class="caption">Delicious Food 10</div>
  </div>

  <div class="mySlides">
    <img src="anion.jpg" style="width:100%">
    <div class="caption">Delicious Food 11</div>
  </div>

  <div class="mySlides">
    <img src="18.jpg" style="width:100%">
    <div class="caption">Delicious Food 12</div>
  </div>

  <div class="mySlides">
    <img src="13.jpg" style="width:100%">
    <div class="caption">Delicious Food 13</div>
  </div>

  <div class="mySlides">
    <img src="14.jpg" style="width:100%">
    <div class="caption">Delicious Food 14</div>
  </div>

  <div class="mySlides">
    <img src="12.jpg" style="width:100%">
    <div class="caption">Delicious Food 15</div>
  </div>

  <div class="mySlides">
    <img src="10.jpg" style="width:100%">
    <div class="caption">Delicious Food 16</div>
  </div>

  <div class="mySlides">
    <img src="9.jpg" style="width:100%">
    <div class="caption">Delicious Food 17</div>
  </div>

  <div class="mySlides">
    <img src="4.jpg" style="width:100%">
    <div class="caption">Delicious Food 18</div>
  </div>


  <div class="mySlides">
    <img src="2.jpg" style="width:100%">
    <div class="caption">Delicious Food 14</div>
  </div>

  <div class="mySlides">
    <img src="3.jpg" style="width:100%">
    <div class="caption">Delicious Food 14</div>
  </div>

  <div class="mySlides">
    <img src="5.jpg" style="width:100%">
    <div class="caption">Delicious Food 14</div>
  </div>

  <div class="mySlides">
    <img src="11.jpg" style="width:100%">
    <div class="caption">Delicious Food 14</div>
  </div>

  <div class="mySlides">
    <img src="profile.jpg" style="width:100%">
    <div class="caption">Delicious Food 14</div>
  </div>
  <!-- Navigation buttons for the slideshow -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<script>
  // JavaScript for Slideshow
  let slideIndex = 0;

  function showSlides() {
    let i;
    const slides = document.getElementsByClassName("mySlides");

    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    slideIndex++;

    if (slideIndex > slides.length) {
      slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "block";
  }

  function plusSlides(n) {
    clearInterval(slideInterval); // Stop the automatic slideshow when manually navigating
    showSlides((slideIndex += n));
  }

  // Initial slideshow display
  showSlides();

  // Automatic slideshow every 3 seconds
  const slideInterval = setInterval(showSlides, 2000);
</script>

</body>
</html>

