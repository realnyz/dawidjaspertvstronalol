<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/jpeg" href="img/favicon.jpeg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bindy</title>
    <script src="powrot.js"></script>
</head>
<body>
    <img id="powrot" onclick="KOŃCZ()" src="img/kostka.gif" width=100px height=100x>
    <div id="informacja">Strona podczas budowy<br>
        <div style="font-size: 0.65em;">W tym czasie możesz pobrać se bindy.</div>
    </div>
    <div id="bindy">
    <?php
$path = "download/download.txt";
$file = fopen($path, 'r');
$data = fread($file, filesize($path));
fclose($file);

$lines =  explode(PHP_EOL,$data);
foreach($lines as $line) {
  echo '<a style="color: gold; text-decoration: none;" href="download/sound/'.$line.'.mp3" download>'.'<p>'.$line.'</p></a>';
}
?></div>
</body>
</html>