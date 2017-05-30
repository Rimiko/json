<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Json_practice</title>
</head>
<body>


<?php


    $jsondata = file_get_contents('sample.json');

    var_dump($jsondata);

echo '<br>';

    $array = json_decode($jsondata,true);

    var_dump($array);

echo '<br>';
echo '名前:' . $array['name'] . '<br>';
echo '性別:' . $array['gender'] . '<br>';



?>
<ul>

<li><?php echo '趣味:' . $array['hobby'][0]; ?></li>
<li><?php echo '趣味:' . $array['hobby'][1]; ?></li>




</ul>

</body>
</html>