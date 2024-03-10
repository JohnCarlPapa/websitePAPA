<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Biography</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: url('background.jpg') no-repeat center center fixed;
            position: relative;
        }

        header {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            text-align: center;
            padding: 20px;
            width: 100%;
        }

        #video-container {
            margin-top: 20px;
            position: relative;
            width: 70%;
            z-index: 1;
        }

        video {
            width: 100%;
            border: 8px solid rgb(255, 0, 0);
            border-radius: 16px;
            animation: borderAnimation 5s linear infinite;
        }

        @keyframes borderAnimation {
            0% {
                border-color: rgb(255, 0, 0);
            }
            33% {
                border-color: rgb(0, 255, 0);
            }
            66% {
                border-color: rgb(0, 0, 255);
            }
            100% {
                border-color: rgb(255, 0, 0);
            }
        }

        #back-button {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background-color: #555;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        #text-box {
            margin-top: 20px; 
            text-align: center;
            max-width: 70%; 
            color: white;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <header>
        <!-- Header content -->
        <h1>Skills</h1>
    </header>

    <section id="video-container">
        <video controls>
            <source src="POGS.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>

    <div id="text-box">
        <p>Basically the best skill that I have is playing video games because since I was a kid im really into games even if its on mobile or pc. so enjoy watching!!.</p>
	<p>If uwant to see more about me click the link below</p>
	<li><a href="https://www.tiktok.com/@sadpogs">TikTok</a></li>
    </div>

    <button id="back-button" onclick="goBack()">Back</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>

</html>
