

<?php $__env->startSection('title','Inicio'); ?>

<?php $__env->startSection('mis_estilos'); ?>
    <link href="<?= URL . 'css/style.css'?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content">
    <div id="lead">
        <div id="lead-content">
            <h1>Ronal Estrada</h1>
            <h2>Software Developer</h2>
            <a href="https://drive.google.com/file/d/1O7-EL20y4su5XIO2uF3QjdyIFK2mL8zZ/view?usp=sharing" class="btn-rounded-white" target="_blank">Descargar CV</a>
        </div>
        <!-- End #lead-content -->

        <div id="lead-overlay"></div>

        <div id="lead-down">
            <span>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </span>
        </div>
        <!-- End #lead-down -->
    </div>
    <!-- End #lead -->

    <div id="experience" class="background-alt">
        <h2 class="heading">Experiencia</h2>
        <div id="experience-timeline">
            <div data-date="Abril 2020 – Agosto 2021">
                <h3>Ronal Estrada</h3>
                <h4>Jefe de Proyecto</h4>
                <p>
                    # Implementación de un sistema de ventas de abarrotes.
                </p>
                <p>
                    # Implementación del sistema con la arquitectura N Capas.
                </p>
                <p>
                    # Uso de Buenas practicas.
                </p>
                
            </div>

            <div data-date="Sptiembre 2021 – Febrero 2022">
                <h3>Ronal Estrada</h3>
                <h4>Jefe de Proyecto</h4>
                <p>
                    # Implementación de un sistema gestión de proyectos.
                </p>
                <p>
                    # Implementación del sistema con la arquitectura MVC.
                </p>
                <p>
                    # Uso del Framework .NET Core.
                </p>
            </div>

            <div data-date="Septiembre 2021 – Febrero 2022">
                <h3>Ronal Estrada</h3>
                <h4>Jefe de Proyecto</h4>
                <p>
                    # Implementación de un juego en dispositivo basado en el juego "4 fotos una palabra".
                </p>
                <p>
                    # Juego realizado en el lenguaje de Kotlin.
                </p>
                <p>
                    # Implementación de navigation para pasar datos entre fragmentos.
                </p>
            </div>
        </div>
    </div>
    <!-- End #experience -->

    <div id="education">
        <h2 class="heading">Educación</h2>
        <div class="education-block">
            <h3>Instituto Superior Tec. Von Braun</h3>
            <span class="education-date">Abril 2019 - Julio 2022</span>
            <h4>Desarrollo de Sistemas</h4>
            <p>
                Actualmente me encuentro cursando el último ciclo de mi carrera tecnica.
            </p>
            <p>
                Tiene como fecha de finalización el 22 de Julio.
            </p>
            <p>
                Me encuentro Desarrollando un sistema de ventas con facturación electrónica para la sustentación de tesis.
            </p>
        </div>
        <!-- End .education-block -->

        <div class="education-block">
            <h3>Institución Educativa 20561 Laraos</h3>
            <span class="education-date">Marzo 2016 - Diciembre 2018</span>
            <h4>Educación Secundaria</h4>
            <ul>
                <li>
                    5to de Secundaria.
                </li>
                <li>
                    4to de Secundaria.
                </li>
                <li>
                    3to de Secundaria.
                </li>
            </ul>
        </div>

        <div class="education-block">
            <h3>Duolingo Education</h3>
            <span class="education-date">Marzo 2019 - Actualmente</span>
            <h4>Ingles - B2</h4>
            <ul>
                <li>
                    B2.
                </li>
                <li>
                    B1.
                </li>
                <li>
                    A1.
                </li>
            </ul>
        </div>
        <!-- End .education-block -->
    </div>
    <!-- End #education -->

    <div id="projects" class="background-alt">
        <h2 class="heading">Proyectos</h2>
        <div class="container">
            <div class="row">
                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="<?= URL . 'img/proyecto.jpg'?>" width="300px" height="200px"/>
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>Projecto - Gestor de Proyectos</h3>
                        <p>
                            Este Sistema fue realizado en el lenguaje C# con ASP .Net Core.
                            El proyecto fue realizado para que los programadores puedad distribuir mejor sus proyectos, dentro de sus proyectos sus sprints, epicas, sus historias de usuario, tambien ver el proceso en que se encuentra.
                        </p>
                        <a href="https://github.com/AndrexBrownie/ABEGestionProyectos" target="_blank">Ver Proyecto</a>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->

                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="<?= URL . 'img/proyecto2.jpg'?>" width="300px" height="200px"/>
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>Projecto - Sistema de Ventas</h3>
                        <p>
                            Este sistema fue realizado en el lenguaje C# con Winforms. Este sistema es principalmente para una tienda de abarrotes pero se puedo adaptar a otros rubros de venta, como ferreterias, Restaurantes, Bares.
                        </p>
                        <a href="https://github.com/AndrexBrownie/GSAMSistemaVentas" target="_blank">Ver Proyecto</a>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->
            </div>
        </div>
    </div>
    <!-- End #projects -->

    <div id="skills">
        <h2 class="heading">Habilidades</h2>
        <ul>
            <li>Python</li>
            <li>Java</li>
            <li>C#</li>
            <li>JavaScript</li>
            <li>Python</li>
            <li>MySql</li>
            <li>SQL Server</li>
            <li>Kotlin</li>
            <li>PHP</li>
            <li>Bootstrap</li>
            <li>Adobe</li>
            <li>Html</li>
            <li>Scratch</li>
            <li>Pseint</li>
            <li>Office</li>
            <li>3d Studio Max</li>
        </ul>
    </div>
    <!-- End #skills -->

    <div id="contact">
        <h2>Ponte en Contacto Conmigo</h2>
        <div id="contact-form">
            <form method="POST" action="https://formspree.io/email@email.com">
                <input type="hidden" name="_subject" value="Contact request from personal website" />
                <input type="email" name="_replyto" placeholder="Tu Correo Electrónico" required>
                <textarea name="message" placeholder="Tu Mensaje" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
        <!-- End #contact-form -->
    </div>
    <!-- End #contact -->
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mis_scripts'); ?>
    <script src="<?= URL . 'js/pruebas.js'?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miPortafolio\app\views/home/index.blade.php ENDPATH**/ ?>