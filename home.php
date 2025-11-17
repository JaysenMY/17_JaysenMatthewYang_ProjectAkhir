<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Men's Fashion | Maison Verre</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f8f8f8;
      color: #222;
    }

    /* Header / Navigation */
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

    header img {
      height: 50px;
    }

    nav a {
      margin: 0 15px;
      font-size: 16px;
      color: #2e2e2e;
      text-decoration: none;
      font-weight: 500;
    }

    nav a:hover {
      color: #000;
    }

    button {
      padding: 10px 22px;
      font-size: 15px;
      border-radius: 10px;
      border: none;
      background-color: #222;
      color: white;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background-color: #000;
    }

    /* Hero Title */
    .title {
      text-align: center;
      margin-top: 100px;
      font-size: 40px;
      letter-spacing: 2px;
      color: #111;
    }

    /* Intro Section */
    .intro-section {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 60px;
      max-width: 1200px;
      margin: 80px auto;
      padding: 20px 40px;
    }

    .intro-text {
      flex: 1;
      font-size: 18px;
      color: #444;
      line-height: 1.8;
    }

    .brand {
      font-weight: 600;
      color: #000;
    }

    .intro-img {
      flex: 1;
      display: flex;
      justify-content: center;
    }

    .intro-img img {
      width: 100%;
      max-width: 480px;
      border-radius: 16px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    /* Large Fashion Image */
    .main-image-section {
      text-align: center;
      margin: 80px 0;
    }

    .main-image-section img {
      width: 80%;
      max-width: 900px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .main-image-section h2 {
      margin-top: 40px;
      font-size: 28px;
      letter-spacing: 1px;
    }

    /* Collection / Placeholder Section */
    .collection-section {
      max-width: 1200px;
      margin: 80px auto;
      text-align: center;
    }

    .collection-section h2 {
      font-size: 30px;
      margin-bottom: 50px;
    }

    .collection-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 40px;
      padding: 0 40px;
    }

    .collection-item {
      background-color: #fff;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.05);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .collection-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.1);
    }

    .collection-item img {
      width: 100%;
      height: 300px;
      object-fit: cover;
    }

    .collection-item h3 {
      margin: 15px 0 5px;
      font-size: 20px;
      color: #111;
    }

    .collection-item p {
      margin-bottom: 20px;
      color: #555;
      font-size: 15px;
    }

    /* Footer */
    footer {
      background-color: #111;
      color: #fff;
      text-align: center;
      padding: 30px 10px;
      margin-top: 80px;
      font-size: 15px;
      letter-spacing: 1px;
    }

  </style>
</head>

<body>
  <header>
    <img src="logo.png" alt="Maison Verre Logo">
    <nav>
      <a href="home.php">Home</a>
      <a href="about.php">About Us</a>
    </nav>
    <button onclick="document.location='login.php'">Login</button>
  </header>

  <div class="title">
    <h1>WELCOME TO MAISON VERRE</h1>
  </div>

  <section class="intro-section">
    <div class="intro-text">
      <p>
        Step into a world where confidence meets style. 
        At <span class="brand">Maison Verre</span>, we redefine men’s fashion with timeless designs, 
        modern fits, and premium quality you can feel in every stitch. 
        Whether you’re dressing for success, comfort, or statement-making style, 
        our collections are crafted to help you look sharp and feel your best — every day, everywhere.
      </p>
    </div>
    <div class="intro-img">
      <img src="download.jpeg" alt="Men's Fashion Side Image">
    </div>
  </section>

  <section class="main-image-section">
    <img src="fashion.webp" alt="Men's Fashion Main Image">
    <h2>MEN'S FASHION, STYLE, AND TRENDS</h2>
  </section>

  <!-- 🕴️ Collection / Placeholder Section -->
  <section class="collection-section">
    <h2>Explore Our Collections</h2>
    <div class="collection-grid">
      <div class="collection-item">
        <img src="download (1).jpeg" alt="Casual Wear">
        <h3>Casual Wear</h3>
        <p>Relaxed fits and refined comfort — perfect for everyday sophistication.</p>
      </div>
      <div class="collection-item">
        <img src="formal.webp" alt="Formal Attire">
        <h3>Formal Attire</h3>
        <p>Tailored elegance designed to make every moment a statement.</p>
      </div>
      <div class="collection-item">
        <img src="download (2).jpeg" alt="Accessories">
        <h3>Accessories</h3>
        <p>Complete your look with pieces that express effortless confidence.</p>
      </div>
    </div>
  </section>

  <footer>
    Maison Verre | by Jaysen Matthew Yang @2025.
  </footer>
</body>
</html>
