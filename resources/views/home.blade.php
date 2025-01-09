<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Header */
        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        /* Navigation Menu */
        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            color: white;
            padding: 14px 20px;
            display: inline-block;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #575757;
        }

        /* Hero Section */
        .hero-section {
            background-image: url('https://via.placeholder.com/1500x600');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            text-align: center;
        }

        .hero-section h2 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .hero-section p {
            font-size: 22px;
            margin-bottom: 30px;
        }

        .hero-btn {
            background-color: #4CAF50;
            color: white;
            padding: 15px 25px;
            border: none;
            font-size: 18px;
            cursor: pointer;
            text-decoration: none;
            border-radius: 5px;
        }

        .hero-btn:hover {
            background-color: #45a049;
        }

        /* Content Section */
        .content {
            display: flex;
            justify-content: space-around;
            padding: 50px 10%;
            text-align: center;
        }

        .content div {
            width: 30%;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .content div:hover {
            transform: scale(1.05);
        }

        .content h3 {
            font-size: 24px;
            color: #333;
        }

        .content p {
            font-size: 16px;
            color: #555;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }

        footer p {
            margin: 0;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0;
            }

            .hero-section h2 {
                font-size: 36px;
            }

            .content {
                flex-direction: column;
                padding: 20px;
            }

            .content div {
                width: 80%;
                margin-bottom: 20px;
            }
        }

    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Welcome to Our Website</h1>
    </header>

    <!-- Navigation Bar -->
    <nav>
        <a href="">Home</a>
        <a href="">About</a>
        <a href="">Services</a>
        <a href="">Contact</a>
 @if (session('user_name'))
        <a style="color: #fff;cursor:none;margin-left:930px">Welcome, {{session('user_name')}}</a>
        @else
        <a style="color: #fff">Session are not set</a>
        @endif    
    </nav>

        
    <!-- Hero Section -->
    <div class="hero-section">
        <h2 style="color: #333">Your One-Stop Solution</h2>
        <p style="color: #333">We provide top-notch services to take your business to the next level.</p>
        <a href="" class="hero-btn">Contact Us</a>
    </div>

    <!-- Content Section -->
    <div class="content">
        <div>
            <h3>Quality Services</h3>
            <p>We offer a range of quality services to suit your needs and goals.</p>
        </div>
        <div>
            <h3>Experienced Team</h3>
            <p>Our team consists of experts who are dedicated to delivering excellent results.</p>
        </div>
        <div>
            <h3>Affordable Prices</h3>
            <p>We provide services that give you the best value for your money.</p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Your Company Name. All rights reserved.</p>
    </footer>

</body>
</html>