<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Biography</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        header {
            background-color: rgba(51, 51, 51, 0.7); 
            color: #fff;
            text-align: center;
            padding: 20px;
        }

       
        header img {
            border-radius: 50%;
            width: 120px; 
            height: 120px; 
        }

        #backButton {
            position: fixed;
            bottom: 10px;
            left: 10px;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 5px;
        }

        #backButton:hover {
            background-color: #555;
        }

        #photoFrame {
            width: 400px; 
            height: 400px; 
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.8); 
            border: 10px solid #333; 
            border-radius: 10px;
            overflow: hidden;
        }

        #photoFrame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #resumeLink {
            text-align: center;
            margin-top: 20px;
        }

        #resumeLink a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        #resumeLink a:hover {
            background-color: #555;
        }

        #more1,
        #more2,
        #more3,
        #more4,
        #more5 {
            display: none;
        }
    </style>
</head>

<body>

    <header>
        <h1>Resume</h1>
        <!-- Adjusted circular photo size -->
        <img src="logo.jpg" alt="Your Photo">
    </header>

    <button id="backButton" onclick="goBack()">Back</button>

    <!-- Photo Frame with ID 'photoFrame' -->
    <div id="photoFrame">
        <!-- Your Photo Goes Here -->
        <img src="RESUME.png" alt="Your Photo">
    </div>

    <!-- Downloadable PDF link -->
    <div id="resumeLink">
        <a href="RESUME.pdf" download>Download Resume (PDF)</a>
    </div>

    <script>
        function navigateTo(page) {
            window.location.href = page;
        }

        function goBack() {
            window.history.back();
        }
    </script>

</body>

</html>
