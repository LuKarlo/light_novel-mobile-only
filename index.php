<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php 
    
    $num_cap = 1;

    $cha = $_REQUEST["cha"];

    if($cha != ""){
        $num_cap = $cha;
    }

?>
<div class="chapter">
    <a href="./?cha=<?php if(($num_cap - 1) != 0){echo $num_cap - 1;}else{echo $num_cap;}?>" class="meno">
        &#8722;
    </a>
    <span><?php echo $num_cap ?></span>
    <a href="./?cha=<?php echo $num_cap + 1 ?>">
        &plus;
    </a>
</div>
<?php 

    $file_txt_cap = "./filetxt/capitolo" . $num_cap . ".txt";

    $handle = fopen($file_txt_cap,"r");
    $contenuto = fread($handle, filesize($file_txt_cap));
    fclose($handle);

    echo "<p>".$contenuto."</p>";
?>
<div class="chapter">
    <a href="./?cha=<?php if(($num_cap - 1) != 0){echo $num_cap - 1;}else{echo $num_cap;}?>" class="meno">
        &#8722;
    </a>
    <span><?php echo $num_cap ?></span>
    <a href="./?cha=<?php echo $num_cap + 1 ?>">
        &plus;
    </a>
</div>
</body>
</html>