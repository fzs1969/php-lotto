<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Ez az index.php
        <?php
			// függvényekkel kezdete
			include("fgv.php");
			$sorsolt=sorsolas();
			var_dump($sorsolt);
			lottoszelveny($sorsolt);
			// függvényekkel vége
			
			// objektumorientált kezdete
			include("lottosorsolas.php");
			$friss=new lottosorsolas(5);
			$friss->lottoszelveny();
			// objektumorientált vége
			
        ?>
    </body>
</html>
