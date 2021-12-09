<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="main.css" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_GET['v']))
            $id = $_GET['v'];
        $myFile = "rank.txt";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $id . "\n");
        fclose($fh);
        if ($id == 1)
            echo "<script type='text/javascript'>window.location.href='team-A.html'</script>";
        elseif ($id == 2)
            echo "<script type='text/javascript'>window.location.href='team-B.html'</script>";
        elseif ($id == 3)
            echo "<script type='text/javascript'>window.location.href='team-C.html'</script>";
        elseif ($id == 4)
            echo "<script type='text/javascript'>window.location.href='team-D.html'</script>";
            
        ?>
        
        <div id="buzzer">

        </div>
    </body>
</html>
