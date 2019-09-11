<!DOCTYPE html>
<html>
<head>
    <title>36523 - Login</title>
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Roboto:100,300,400,900|Montserrat:300|Roboto+Mono:400" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
    <link rel="stylesheet" type="text/css" href="../css/template.css" />
</head>
<body>
    <div class="back">       
        <a class="icon fas fa-arrow-alt-circle-left" href="../index.php"></a>
        <a class="back-text" href="../index.php"> Go back to Home</a>
    </div>
    <div class="loginbox accessdenied">
        <!--img src="../pictures/avatar.png" class="avatar"-->
        <i class="fas fa-times cross"></i>
            <h1 class="accessdenied">Access Denied</h1>
            <h2 class="accessdenied">You don't have enough rights to access this page. If you want access to this page,
                Login with another account with a higher rank or mail Joachim Dekker at <a href=mailto:36523@youscope.nl>36523@youscope.nl</a>
            </h2>
            <button class="btn red accessdenied centre" onclick="window.location.href='../php/login/logout.php'">Log in</button>
    </div>
</body>
</html>