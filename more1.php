<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Biography</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
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
            margin-bottom: 20px; 
        }

        header img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
        }

        /* Style for the back button */
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

        
        table {
            width: 700px;
            border: 10px solid;
            background-color: white;
            margin: 20px auto; 
        }

        th {
            height: 50px;
            background-color: gray;
            color: white;
        }

        td {
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }
    </style>
</head>

<body>

    <header>
        <h1>About Me</h1>
        <img src="logo.jpg" alt="Your Photo">
    </header>

    <!-- Back button -->
    <button id="backButton" onclick="goBack()">Back</button>

    <center>
        <table>
            <tr>
                <th height="50px">My Info</th>
                <td rowspan="2">
                    <img src="profile.jpg" alt="My Photo" width="100%">
                </td>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>Screen Name: POGS</li>
                        <li>Sex: Male</li>
                        <li>Status: Single</li>
                        <li>Birth Place: Quezon City</li>
                        <li>Hobby: Playing Video Games</li>
                        <li>Religion: Roman Catholic</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th height="50px">Quote</th>
            </tr>
            <tr>
                <td>
                    <p>"Do what makes you Happy"</p>
                </td>
            </tr>
            <tr>
                <th height="50px">Link</th>
            </tr>
            <tr>
                <td>
                    <p>My Account:</p>
                    <ul>
                        <li><a href="https://github.com/JohnCarlPapa">GitHub</a></li>
                    </ul>
                </td>
            </tr>
        </table>
    </center>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>

</html>
