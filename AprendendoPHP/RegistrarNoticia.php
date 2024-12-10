<!-- <?php
    sleep(2);
    
    if(isset($_POST['SubmitN']))
    {
        include_once('Config.php');

        $NewPost = $_POST['ProntoN'];;

        $result = mysqli_query($Conection, 
        "INSERT INTO posts(Post) VALUE ('$NewPost')");
    }
?> -->

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <form action="RegistrarNoticia.php" method="post">
        <label for="NoticiaI">Noticia</label><input type="checkbox" name="NoticiaN" id="NoticiaI" onchange="Change(1)">
        <label for="AnuncioI">Anuncio</label><input type="checkbox" name="AnuncioN" id="AnuncioI" onchange="Change(2)"> 
        <label for="EventoI">Evento</label><input type="checkbox" name="EventoN" id="EventoI" onchange="Change(3)"><br>

        <input type="text" id="TitleI" maxlength="15"><br>
        <input type="text" id="SubtitleI" maxlength="30"><br>

        <input type="file"><br>

        <textarea maxlength="510"></textarea><br>

        <input type="button" name="SubmitN" value="Enviar" onclick="Sub()">

        <input type="hidden" name="ProntoN" id="ProntoI" value="" required>
    </form>

    <script src="Script.js"></script>
</body>

</html>