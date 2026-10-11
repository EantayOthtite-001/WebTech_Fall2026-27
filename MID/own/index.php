
<?php include "control.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>

    <h1>Registration Form</h1>

    <form>
        <table>
            <tr>
                <td><label for="Full_Name">Full Name:</label></td>
                <td><input type="text" id="Full_Name" name="Full_Name"></td>
            </tr>

            <tr>
                <td><label for="Email">Email:</label></td>
                <td><input type="email" id="Email" name="Email"></td>
            </tr>

            <tr>
                <td><label for="Password">Password:</label></td>
                <td><input type="password" id="Password" name="Password"></td>
            </tr>

            <tr>
                <td><label for="Comment">Comment:</label></td>
                <td><textarea id="Comment" name="Comment" rows="6" cols="45"></textarea></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>

                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>

                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label>
                </td>
            </tr>

            <tr>
                <td>Please Choose a Hobby:</td>
                <td>
                    <input type="checkbox" id="singing" name="hobby" value="Singing">
                    <label for="singing">Singing</label>

                    <input type="checkbox" id="dancing" name="hobby" value="Dancing">
                    <label for="dancing">Dancing</label>

                    <input type="checkbox" id="reading" name="hobby" value="Reading">
                    <label for="reading">Reading</label>
                </td>
            </tr>

            <tr>
                <td><label for="file">Please Choose a File:</label></td>
                <td><input type="file" id="file" name="file"></td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
