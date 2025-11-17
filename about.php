<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us | Maison Verre</title>

  <style>
    body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    background-color: #f8f8f8;
    color: #222;
    }

    /* Header */
    header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 60px;
    background-color: #fff;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    position: sticky;
    top: 0;
    z-index: 100;
    }

    nav a {
    margin: 0 15px;
    font-size: 16px;
    color: #2e2e2e;
    text-decoration: none;
    font-weight: 500;
    }

    nav a.active {
    border-bottom: 2px solid #000;
    padding-bottom: 3px;
    }

    button {
    padding: 10px 22px;
    border-radius: 10px;
    border: none;
    background-color: #222;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    }

    /* About Sections */
    .about-block {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 50px;
    padding: 70px 80px;
    max-width: 1200px;
    margin: auto;
    }

    .about-img img {
    width: 340px;
    height: 240px;
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 0px 8px 20px rgba(0,0,0,0.1);
    }

    .about-text {
    flex: 1;
    font-size: 17px;
    line-height: 1.8;
    color: #444;
    }

    /* Footer */
    footer {
    margin-top: 80px;
    padding: 30px;
    background: #111;
    color: #fff;
    text-align: center;
    letter-spacing: 1px;
    font-size: 15px;
    }

  </style>
</head>

<body>

  <!-- HEADER -->
  <header>
    <img src="logo.png" alt="Maison Verre Logo" height="50">
    <nav>
      <a href="home.php">Home</a>
      <a href="about.php" class="active">About Us</a>
    </nav>
    <button onclick="document.location='login.php'">Log In</button>
  </header>

  <!-- ABOUT BLOCK 1 -->
  <section class="about-block">
    <div class="about-img">
      <img src="pic1.avif" alt="Our Story">
    </div>
    <div class="about-text">
      <h2>Our Story</h2>
      <p>
        Starting from a small studio, Maison Verre was built on the belief that
        confidence comes from refined simplicity. Our team crafts clothing with
        precision, passion, and purpose.
      </p>
    </div>
  </section>

  <!-- ABOUT BLOCK 2 -->
  <section class="about-block">
    <div class="about-img">
      <img src="pic2.jpg" alt="Our Mission">
    </div>
    <div class="about-text">
      <h2>Our Mission</h2>
      <p>
        We aim to deliver premium menswear that blends comfort and sophistication,
        ensuring our customers feel their absolute best every day.
      </p>
    </div>
  </section>

  <!-- ABOUT BLOCK 3 -->
  <section class="about-block">
    <div class="about-img">
      <img src="Intro-2.webp" alt="Our Craft">
    </div>
    <div class="about-text">
      <h2>Our Craft</h2>
      <p>
        Every piece is thoughtfully designed,
        combining modern trends with traditional craftsmanship to create a unique
        fashion experience.
      </p>
    </div>
  </section>


  <footer>
    Maison Verre | by Jaysen Matthew Yang © 2025.
  </footer>

</body>
</html>
