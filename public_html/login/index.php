<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["JDSite956_loggedin"]) && $_SESSION["JDSite956_loggedin"] === true){
    header("location: ../dashboard.php");
    exit;
}

// Include config file
require_once "../php/config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // TEST THINGS

    if($username_err == "Please enter username."){
        if($password_err == "Please enter your password."){
            $password_err = "Don't be foolish. Please enter username and password.";
        }
    }


    // END OF TEST THINGS
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, role, name, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $role, $name, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["JDSite956_loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["role"] = $role;
                            $_SESSION["username"] = $username;
                            $_SESSION["showname"] = $name;                            
                            
                            // Redirect user to welcome page
                            if(empty($_GET["location"])){
                                header("location: ../dashboard.php");
                            } else {
                                $location = $_GET["location"];
                                header("location: $location");
                            }
                        } 
                        else {
                            // Display an error message if password is not valid
                            $password_err = "Incorrect password or username";
                        }
                    } 
                } else {
                    // Display an error message if username is not valid
                    $password_err = "Incorrect password or username";
                }

            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>36523 - Login</title>
    <meta charset="utf-8" />
    <link rel="icon" href="../pictures/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Roboto:100,300,400,900|Montserrat:300|Roboto+Mono:400" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
</head>
<body>
    <div class="back">       
        <a class="icon fas fa-arrow-alt-circle-left" href="../index.php"></a>
        <a class="back-text" href="../index.php"> Go back to Home</a>
    </div>
    <div class="loginbox">
        <img src="../pictures/avatar2.png" class="avatar">
            <h1><?php if(!isset($_GET["custommsg"])){
                echo "Login";
            } else {
                echo htmlspecialchars($_GET["custommsg"]);
            };
            ?></h1>
            <h2> Log in to have access to special features of this site.</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter Username">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter Password">
                <p class="error"><?php echo $password_err; ?></p>
                <input type="submit" name="" value="Login">
            </form>
    </div>
</body>
</html>