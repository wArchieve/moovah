<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<div align="left" style="font-size:12pt">
        <?php
            echo '<br>';
            $python = `python contents.py`;
	    //echo '<br>';
            //echo $python;
	    $res = split('#', $python);
            foreach ($res as $value){
                echo "$value <br>";
            }
        ?>
    <br>
    <br>
    <br>	
    </div>			
    </body>
</html>