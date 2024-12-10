<?php
    if(isset($_POST['SubmitInfos']))
    {
        include_once('Config.php');

        $Name = $_POST['UserName'];
        $Email = $_POST['UserEmail'];
        $Password = $_POST['UserPassword'];

        $result = mysqli_query($Conection, 
        "INSERT INTO semnome(Name, Email, Password) VALUE ('$Name', '$Email', '$Password')");
    }
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <form action="PaginaInicial.php" method="POST">
        <label for="InpN">Name</label><br>
        <input type="text" name="UserName" id="InpN" required><br>

        <label for="InpE">Email</label><br>
        <input type="email" name="UserEmail" id="InpE" required><br>

        <label for="InpP">Password</label><br>
        <input type="password" name="UserPassword" id="InpP" required><br>

        <input type="submit" name="SubmitInfos" value="Enviar" id="InpSub">
    </form>
</body>

</html>