<?php 
$customFontURL = null;
if(isset($customFontURL)) {
    echo "It doesn't work";
} else {
    echo "It works!!";
}

$location = $_GET["location"];
echo $location;

?>
<!DOCTYPE html>
<html>
<head>
<title>Test Environment</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>
<body>
<p id="id1"></p><br>
<i class="fas fa-bars"></i>
<script>
    x = window.document.body.clientWidth;
    document.getElementById("id1").innerHTML = x
</script>
</body>
</html>