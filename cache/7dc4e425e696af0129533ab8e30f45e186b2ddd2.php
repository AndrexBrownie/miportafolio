<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio - <?php echo $__env->yieldContent('title'); ?></title>
	<link rel="shortcut icon" href="<?= URL . 'favicon.ico'?>" type="image/x-icon">
	<link rel="icon" href="<?= URL . 'img/favicon.ico'?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL . 'css/font-awesome.min.css'?>">

    
    <link href="<?= URL . 'css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?= URL . 'css/styles.css'?>" rel="stylesheet">
    <?php echo $__env->yieldContent('mis_estilos'); ?>
</head>

<body>
    <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <!-- End #mobile-menu-toggle -->
    <header>
        <div id="mobile-menu-close">
            <span>Close</span> <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <ul id="menu" class="shadow">
            <li>
                <a href="http://localhost/miportafolio/public/home/index">Inicio</a>
            </li>
            <li>
                <a href="#experience">Experiencia</a>
            </li>
            <li>
                <a href="#education">Educación</a>
            </li>
            <li>
                <a href="#projects">Projectos</a>
            </li>
            <li>
                <a href="#skills">Habilidades</a>
            </li>
            <li>
                <a href="#contact">Contacto</a>
            </li>
        </ul>
    </header>
    <!-- End header -->

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 copyright">
                    <p>
                        Copyright &copy; <span id="current-year">2022</span> ABE
                    </p>
                </div>
                <div class="col-sm-2 top">
                    <span id="to-top">
                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="col-sm-5 social">
                    <ul>
                        <li>
                            <a href="https://github.com/" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://stackoverflow.com/" target="_blank"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?= URL . 'js/scripts.min.js'?>"></script>
    <?php echo $__env->yieldContent('mis_scripts'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\miPortafolio\app\views/layouts/template.blade.php ENDPATH**/ ?>