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

            while($nbDiv <= 7)
            {
                if($nbDiv % 2 == 0)
                    {
                        $element = "<div class=black></div>";
                        echo "$element";
                        ++$nbDiv;
                    }

                    else
                    {
                        $element = "<div class=white></div>";
                        echo"$element";
                        ++$nbDiv;
                    }
            }   

            while($nbDiv <= 15)
            {
                if($nbDiv % 2 == 0)
                    {
                        $element = "<div class=white></div>";
                        echo "$element";
                        ++$nbDiv;
                    }

                    else
                    {
                        $element = "<div class=black></div>";
                        echo"$element";
                        ++$nbDiv;
                    }
            }

            while($nbDiv <= 23)
            {
                if($nbDiv % 2 == 0)
                    {
                        $element = "<div class=black></div>";
                        echo "$element";
                        ++$nbDiv;
                    }

                    else
                    {
                        $element = "<div class=white></div>";
                        echo"$element";
                        ++$nbDiv;
                    }
            }

            while($nbDiv <= 31)
            {
                if($nbDiv % 2 == 0)
                    {
                        $element = "<div class=white></div>";
                        echo "$element";
                        ++$nbDiv;
                    }

                    else
                    {
                        $element = "<div class=black></div>";
                        echo"$element";
                        ++$nbDiv;
                    }
            }

            while($nbDiv <= 39)
            {
                if($nbDiv % 2 == 0)
                    {
                        $element = "<div class=black></div>";
                        echo "$element";
                        ++$nbDiv;
                    }

                    else
                    {
                        $element = "<div class=white></div>";
                        echo"$element";
                        ++$nbDiv;
                    }
            }

            while($nbDiv <= 47)
            {
                if($nbDiv % 2 == 0)
                    {
                        $element = "<div class=white></div>";
                        echo "$element";
                        ++$nbDiv;
                    }

                    else
                    {
                        $element = "<div class=black></div>";
                        echo"$element";
                        ++$nbDiv;
                    }
            }
            
            while($nbDiv <= 55)
            {
                if($nbDiv % 2 == 0)
                    {
                        $element = "<div class=black></div>";
                        echo "$element";
                        ++$nbDiv;
                    }

                    else
                    {
                        $element = "<div class=white></div>";
                        echo"$element";
                        ++$nbDiv;
                    }
            }

            while($nbDiv <= 63)
            {
                if($nbDiv % 2 == 0)
                    {
                        $element = "<div class=white></div>";
                        echo "$element";
                        ++$nbDiv;
                    }

                    else
                    {
                        $element = "<div class=black></div>";
                        echo"$element";
                        ++$nbDiv;
                    }
            }
            
            ?>
    </div>

</body>
</html>