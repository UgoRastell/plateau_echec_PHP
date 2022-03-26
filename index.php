<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div id="plateau">
            <?php 
            $element = "<div></div>";
            $nbDiv = 0;

            while($nbDiv <= 63)
            {
                if($nbDiv <= 7)
                {
                    $color1 ="black";
                    $color2="white";
                }
                elseif($nbDiv <= 15)
                {
                    $color1 ="white";
                    $color2="black";
                }
                elseif($nbDiv <= 23)
                {
                    $color1 ="black";
                    $color2="white";
                }
                elseif($nbDiv <= 31)
                {
                    $color1 ="white";
                    $color2="black";
                }
                elseif($nbDiv <= 39)
                {
                    $color1 ="black";
                    $color2="white";
                }
                elseif($nbDiv <= 47)
                {
                    $color1 ="white";
                    $color2="black";
                }
                elseif($nbDiv <= 55)
                {
                    $color1 ="black";
                    $color2="white";
                }
                elseif($nbDiv <= 63)
                {
                    $color1 ="white";
                    $color2="black";
                }
                
                if($nbDiv % 2 == 0)
                    {
                        $element = "<div class=$color1></div>";
                        echo"$element";
                        ++$nbDiv;
                        ++$color2;
                        ++$color1;
                    }
                    elseif($nbDiv % 2 == 1)
                    {
                        $element = "<div class=$color2></div>";
                        echo"$element";
                        ++$nbDiv;
                    }

            }   
            
            ?>
    </div>

</body>
</html>