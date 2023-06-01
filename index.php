<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Application</title>
</head>

<body>



    <form action="conn.php" method="POST">

        <div>
            <h3> Registration Form </h3>
        </div>

        <div>
            <label name="full_name">Full Name:</label>
            <input type="text" name="full_name" placeholder="Enter your full name" autocomplete="off" required>
            <br><br>


            <label>Email Address:</label>
            <input type="email" name="email" placeholder="Enter your Email" autocomplete="off" required>
            <br><br>



            Gender:<br>

            <input type="radio" name="gender" autocomplete="off" required value="male">
            <label for="male">Male</label><br>
            <input type="radio" name="gender" autocomplete="off" required value="female">
            <label for="female">Female</label>
        </div><br><br>

        <input type="submit" name="send" value="send">




    </form>


</body>

</html>