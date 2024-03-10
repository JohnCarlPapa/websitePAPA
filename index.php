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

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        button {
            padding: 10px 20px;
            margin: 5px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #555;
        }

        #more1,
        #more2,
        #more3,
        #more4,
        #more5 {
            display: none;
        }

        .comment-section {
            text-align: center;
        }

        .comment-form {
            margin: auto;
            max-width: 600px;
        }

        .comment-textarea {
            width: 100%;
            height: 100px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Home Page</h1>
        <img src="logo.jpg" alt="Your Photo">
    </header>

    <section>
        <p>Here is a brief introduction about this website.</p>
        <p>This website will showcase all the skills, achievements and etc of John Carl Papa or also known as POGS in all
            social media platforms so what are we waiting for click the buttons now!</p>

        <button onclick="navigateTo('more1.php')">About Me</button>
        <button onclick="navigateTo('more2.php')">Skills</button>
        <button onclick="navigateTo('more3.php')">Resume</button>
        <br><br><button onclick="navigateTo('logout.php')"
                style="background-color: red; color: white;">Logout</button></br></br>
    </section>

    <div class="comment-section">
        <form action="submit_comment.php" method="post" class="comment-form" onsubmit="submitComment(event)">
            <textarea name="comment" class="comment-textarea" placeholder="Your Feedback" required></textarea>
            <br>
            <button type="submit" class="comment-submit">Submit</button>
        </form>
    </div>

    <script>
        function navigateTo(page) {
            window.location.href = page;
        }

        function submitComment(event) {
            event.preventDefault(); // Prevent the default form submission
            const form = event.target;
            const formData = new FormData(form);
            fetch(form.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (response.ok) {
                        alert("Your comment has been submitted!");
                        form.reset(); // Reset the form after successful submission
                    } else {
                        throw new Error('Something went wrong');
                    }
                })
                .catch(error => {
                    alert(error.message);
                });
        }
    </script>

</body>

</html>
