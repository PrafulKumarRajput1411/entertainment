<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form_submit.css">
    <!-- <link rel="stylesheet" href="./media/form_submit_media.css">
        <link rel="stylesheet" href="./media/media.css"> -->

    <title>Sign Up Form</title>
    <style>
        <?php
            include 'css/form_submit.css';
        ?>
    </style>

</head>

<body>
    <header class="image-container">

        <div class="pre-form-container">
            <div class="containerrr">
                <div class="heading">
                    <h1 id="sign-up-heading">Sign Up</h1>
                    <p>it's free and only takes few minutes</p>
                </div>

                <form action="process.php">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <br>
                        <input type="text" name="firstname" id="first_name">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="second_name">Second Name</label>
                        <br>
                        <input type="text" name="secondname" id="second_name">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <br>
                        <input type="email" name="email" id="email">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">password</label>
                        <br>
                        <input type="password" name="password" id="password">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <br>
                        <input type="password" name="confirmpassword" id="confirm-password">

                    </div>
                </form>
                <button class="btn">Sign Up</button>
                <p id="paragraph_two">By clicking the sign Up button you agree to our <a href="#">Terms & Condition</a>
                    and <a href="#">Privacy Policy</a> </p>
                <p>Already have an account? <a href="#">Login Here</a></p>
            </div>
        </div>

    </header>
    <div class="clr"></div>

</body>

</html>