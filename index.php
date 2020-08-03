<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>Raspberry Pi WiFi Controlled LED</title>
</head>
       <body>
       <center><h1>Control My Lamp!</h1>      
         <form method="get" action="index.php">                
            <input type="submit" style = "font-size: 14 pt" value="OFF" name="off">
            <input type="submit" style = "font-size: 14 pt" value="ON" name="on">
         </form>​​​
                         </center>
<?php
    shell_exec("/usr/local/bin/gpio -g mode 27 out");
    if(isset($_GET['off']))
        {
                        echo "Wow it's dark in here";
                        shell_exec("/usr/local/bin/gpio -g write 27 0");
        }
            else if(isset($_GET['on']))
            {
                        echo Ahhh! So Bright";
                        shell_exec("/usr/local/bin/gpio -g write 27 1");
            }
?>
   </body>
</html>
