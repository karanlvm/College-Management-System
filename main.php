<!DOCTYPE html>
<html land="en">
<head>
    <meta charset="utf-8" />
    <title>College Name</title>
    <link rel="stylesheet" href="index.css" />
</head>
<body>
    <div class="wrapper">
        <nav class="navbar">
            <p> [College Name] </p>
            <ul>
                <li><a class="active" href="#"> Home </a></li>
                <li><a href="#"> Courses </a></li>
                    <li><?php echo '<a href="student_login.php"> Students Login</a>';?></li>
                    <li><?php echo '<a href="admin_login.php"> Teachers Login</a>';?></li>
            </ul>
        </nav>
        <div class="center">
            <h1> Welcome to [College Name]</h1>
            <div class="buttons">
                <button> About Us </button>
                <button class="btn"> Contact Us </button>
            </div>
        </div>
    </div>
</body>
</html>
