<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 17</title>
</head>
<body>
    

    <?php 

        $num = rand(10,20);
        $list = [];
        $colors = array("red", "orange", "green", "blue", "black ");
        for ($i=0; $i <=$num ; $i++) { 
            $list[] = $i;
        }
        
        $output_list = "<ol>";
        foreach ($list as $item) {
            $color = $colors[array_rand($colors)];
            $output_list.= "<li style='color: $color;'>$item</li>";
        }
        echo $output_list .="</ol>";
    ?>

</body>
</html>