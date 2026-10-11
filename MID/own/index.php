<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    <nav>
        <a href="#">Home</a> | 
        <a href="#">About</a> | 
        <a href="#">Contact</a>
    </nav>

    <img id="pp" src="images.jpg" alt="Profile Picture">

    <h1>My Profile</h1>

    <h2>About Me</h2>
    <p id="about">
        I am too much exhusted to write about myself.
    </p>

    <h3>Get in Touch</h3>

    
    <form action="control.php" method="POST">
        <fieldset>
            <legend>Contact Form</legend>
            
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="comment">Comment:</label><br>
            <textarea id="comment" name="comment" rows="4"></textarea><br>

            <input type="submit" id="submit" value="Submit">
            <input type="reset" id="reset" value="Reset">
        </fieldset>
    </form>

</body>
</html>