<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Student Login</title>
        <link rel="stylesheet" href="student_login.css">
    </head>
    <body>

        <form class="box" action="" method="post">
            <h1> Login </h1>
            <input type="text" name="email" placeholder="Student ID" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="login">
        </form>
        <?php
             session_start();
             if(isset($_POST['submit'])){
                 $connection = mysqli_connect("localhost","root","");
                 $db = mysqli_select_db($connection,"sms");
                 $query = "select * from students where email = '$_POST[email]'";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                     if($row['email'] == $_POST['email']){
                         if($row['password'] == $_POST['password'])
                         {
                             header("Location: student_dashboard.php");
                         }
                         else{
                             echo "Please Check your details";
                         }
                        }
                 }
             }
        ?>
    </body>
</html>