<?php
include 'classes.php';

$menu = new GenerateContent();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMERA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="menu_toggle">
            <span></span>
        </div>

        <div class="logo">
            <p><span>Luxe </span>CAMERA</p>
        </div>
        
        <nav>
            <?php $menu->renderHeader(); ?>
        </nav>
        
        
    </header>

    <section id="home">
        <div class="left">
            <h1>Buy <span>Your Camera</span> <hr> Cheaper From Us</h1>
            <i><p>Capturez chaque instant avec nos caméras de haute qualité</p></i>
            <blockquote>
                
                <footer>Luxe <cite>CAMERA</cite></footer>
            </blockquote>
            <br><br><br><br>

            <b><a href="#">BUY NOW</a></b>
        </div>
        <div class="right">
            <img src="images/img1.png" alt="1">
        </div>
    </section>
    <section id="cars">
        <h1 class="section_title">Nos Cameras</h1>
        <div class="images">
            <ul>
                <?php
                class Camera {
                    private $image;
                    private $name;
                    private $price;
                    private $link;

                    public function __construct($image, $name, $price, $link) {
                        $this->image = $image;
                        $this->name = $name;
                        $this->price = $price;
                        $this->link = $link;
                    }

                    public function render() {
                        ?>
                        <li class="car">
                            <div>
                                <img src="<?php echo $this->image; ?>" alt="">
                            </div>
                            <span><?php echo $this->name; ?></span>
                            <span class="prix"><?php echo $this->price; ?></span>
                            <a href="<?php echo $this->link; ?>">ACHETER</a>
                        </li>
                        <?php
                    }
                }

                $cameras = [
                    new Camera("images/cam1.jpg", "SONY XXX", "3.000$", "#"),
                    new Camera("images/cam2.jpg", "SONY XXX", "1.000$", "#"),
                    new Camera("images/cam3.jpg", "SONY XXX", "1.500$", "#"),
                    new Camera("images/cam4.jpg", "SONY XXX", "2.000$", "#"),
                    new Camera("images/cam5.jpg", "SONY XXX", "3.500$", "#"),
                    new Camera("images/cam6.jpg", "SONY XXX", "4.000$", "#"),
                ];

                foreach ($cameras as $camera) {
                    $camera->render();
                }
                ?>
            </ul>
        </div>
    </section>
    
    <section id="contact">
        <h1 class="section_title">Nos Contacts</h1>
        <div class="localisation_contact_div">
            <div class="localisation">
                <h3>Notre Adresse</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10499.966567606692!2d2.285747998068967!3d48.85836977022069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1644955637071!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="form_contact">
                <h3>Envoyer un message</h3>
                <form action="#">
                    <input type="text" placeholder="Nom">
                    <input type="email" placeholder="Adresse Mail">
                    <input type="text" placeholder="Objet">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </section>
    <?php
abstract class Footer {
    protected $copyright;

    public function __construct($copyright) {
        $this->copyright = $copyright;
    }

    abstract public function display();
}

class ConcreteFooter extends Footer {
    public function display() {
        echo '<footer>';
        echo '<p>&copy; ' . $this->copyright . ' Luxe Camera. Tous droits réservés.</p>';
        echo '</footer>';
    }
}


$footer = new ConcreteFooter('2024');
$footer->display();

?>
</body>
</html>
