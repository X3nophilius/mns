<?php 
?>
<!DOCTYPE html>
<html style="style=--text-color: rgb(0,0,0); --main-bg-color: rgb(255,255,255); --body-color: rgb(47,46,68); --border-color: undefined; --body-bg-color: rgb(0,0,0);">
    <head>
        <title><?php echo ucfirst($_GET['organell'])?></title>
        <link rel="stylesheet" href="organell.css">
    </head>
    <body>
        <div id="main">
            <div class="info">
                <button class="zurück" onclick="history.back();">X</button>
                <?php echo "<h1>".ucfirst($_GET['organell'])."</h1>"; ?>
                <p>
                    <?php echo file_get_contents("organelletext/".ucfirst($_GET['organell']).".txt")?>
                </p>
            </div>
            <div class="right">
                <?php 
                    echo '<img src="images/'.$_GET['organell'].'.svg" alt='.$_GET['organell'].'>';
                ?>
            </div>
        </div>
        <script src="organell.js"></script>
    </body>
</html>