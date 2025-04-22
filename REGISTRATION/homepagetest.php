<?php
// Include the database connection
include_once "dbs_connect.php";

// You can also add other common elements like session start, etc.
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: #f2f2f2;
            color: #333;
            overflow-x: hidden;
            text-align: center;
        }

        h1 {
            font-size: 3.5rem;
            margin-top: 50px;
            color: #2a2a2a;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        h3 {
            font-size: 1.8rem;
            margin: 20px 0;
            color: #555;
            font-weight: 300;
        }

        /* Container for Images */
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: nowrap;
            overflow-x: scroll;
            scroll-behavior: smooth;
            margin-top: 30px;
            padding-bottom: 20px;
            gap: 20px;
        }

        /* Styling for Images */
        .image-container img {
            width: 400px;
            height: auto;
            border-radius: 15px;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .image-container img:hover {
            transform: scale(1.05);
            opacity: 0.8;
        }

        /* Styling for Scrollbar - Hidden */
        .image-container::-webkit-scrollbar {
            display: none;  /* Hide scrollbar for horizontal scroll */
        }

        /* Additional Content Section */
        .content-section {
            padding: 50px 10%;
            background: #ffffff;
            margin-top: 40px;
            border-radius: 15px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }

        .content-section h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .content-section p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.8;
        }

        /* Hoverable and Interactive Section */
        .hover-section {
            background-color: #4caf50;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .hover-section:hover {
            background-color: #45a049;
        }

        /* Footer Styles */
        .footer {
            background-color: #333;
            color: white;
            padding: 30px 0;
            margin-top: 40px;
            font-size: 1rem;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Media Queries for Responsiveness */
        @media screen and (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }

            h3 {
                font-size: 1.5rem;
            }

            .image-container img {
                width: 90%; /* Make images responsive */
            }

            .content-section {
                padding: 30px 5%;
            }
        }

        @media screen and (max-width: 480px) {
            h1 {
                font-size: 2rem;
            }

            h3 {
                font-size: 1.3rem;
            }
        }

        /* Animation for Fade-in Effect */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .image-container {
            animation: fadeIn 1s ease-out;
        }
    </style>

    <!-- Add jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

    <!-- Welcome Heading -->
    <h1>Welcome friend!</h1>

    <!-- Subheading -->
    <h3>Coming Soon, Stay Tuned for New Updates!</h3>

    <!-- Image Container with Horizontal Scroll -->
    <div class="image-container">
        <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/MT223_AV3?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1693248275090" alt="Product Image 1"/>
        <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/MT223_AV4_GEO_GB?wid=2000&hei=2000&fmt=jpeg&qlt=90&.v=1694523511502" alt="Product Image 2"/>
        <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/HR0P2?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1692889124585" alt="Product Image 3"/>
        <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/HR0P2_AV1?wid=2000&hei=2000&fmt=jpeg&qlt=90&.v=1692889136557" alt="Product Image 4"/>
        <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/HR0P2_AV4?wid=2000&hei=2000&fmt=jpeg&qlt=90&.v=1692889158954" alt="Product Image 5"/>
        <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/HR032?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1692888721703" alt="Product Image 6"/>
        <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/HR032_AV1?wid=2000&hei=2000&fmt=jpeg&qlt=90&.v=1692888708207" alt="Product Image 7"/>
        <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/MT1A3?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1693007391617" alt="Product Image 8"/>
        <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/MT1A3_AV5_GEO_GB?wid=2000&hei=2000&fmt=jpeg&qlt=90&.v=1693524937517" alt="Product Image 9"/>
    </div>

    <!-- Additional Content Section -->
    <div class="content-section">
        <h2>Explore Our Latest iPhone Accessories</h2>
        <p>At InfoTech, we bring you the best selection of iPhone accessories, from durable phone cases to sleek wireless chargers. Our products are designed to keep your devices protected and stylish while ensuring top performance. Stay ahead with our carefully curated collection of high-quality accessories that are both functional and fashionable.</p>

        <!-- Interactive Section -->
        <div class="hover-section">
            <p><strong> Stay with Us and Save! </strong> Enjoy an exclusive offer! If you log in and stay with us for three months, you will receive a fantastic 50% discount on your next purchase.</p>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>&copy; 2024 InfoTech. All Rights Reserved.</p>
        <p>
            <a href="#">Privacy Policy</a> | 
            <a href="#">Terms of Use</a>
        </p>
    </div>

    <script>
        // jQuery code to toggle the background color of the hover section
        $(document).ready(function(){
            $(".hover-section").click(function(){
                $(this).css("background-color", "#2196F3");
                $(this).text("You clicked! Enjoy your discount.");
            });
        });
    </script>

</body>
</html>
