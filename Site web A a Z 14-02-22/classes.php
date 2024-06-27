<?php
trait Render {
    function renderHeader() {
        ?>
        <header>
            <div class="logo">Luxe <cite>CAMERA</div>
            <ul class="menu">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#cars">Cameras</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="menu_toggle">
                <span></span>
            </div>
        </header>
        <?php
    }

    function renderFooter() {
        
        ?>
        
        <?php
    }
}

interface Menu {
    public function renderHeader();
    public function renderFooter();
}

class GenerateContent implements Menu {
    use Render;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>CAMERA</title>
</head>
<body>
    <?php
    $content = new GenerateContent();
    $content->renderHeader();
    ?>


    <?php
    $content->renderFooter();
    ?>
    
</body>
</html>
