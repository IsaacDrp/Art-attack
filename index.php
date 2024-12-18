<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto de Titulación</title>
    <link rel="stylesheet" href="./src/css/styles.css">
    <!-- <link rel="stylesheet" href="./src/css/styles2.css"> -->

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav class="nav-menu" id="nav-menu">
        <div class="header-menu">
            <h1>UNAM</h1>
            <button>
                <i class='bx bx-x' id="close-menu-btn"></i>
            </button>
        </div>
        <div class="links-contact"> 
            <div class="links">
                <a href="#" class="link-menu">Perfil Egresado</a>
                <a href="#" class="link-menu">Historial Académico</a>
                <a href="#" class="link-menu">Estructura y serialización</a>
            </div>
            <div class="contact">
                <h3>Contactos:</h3>
                <div class="contact-wrapper">
                    <p class="contact-title">Titulo</p>
                    <p class="contact-content">ejemplo@aragon.unam.mx</p>
                </div>
                <div class="contact-wrapper">
                    <p class="contact-title">Titulo</p>
                    <p class="contact-content">ejemplo@aragon.unam.mx</p>
                </div>
            </div>
        </div>
    </nav>

    <main class="main-container" id="main-container">
        <header class="header">
            <div class="logo">
                <h1>UNAM</h1>
            </div>
            <div class="menu-bar">
                <a href="./login/pagina_login/login.php"><i class='bx bxs-user' id="login-btn"></i></a>
                <i class='bx bx-menu' id="open-menu-btn"></i>
            </div>
        </header>

        <section class="hero">
            <div class="hero-text">
                <h2>Formas de Titulación</h2>
                <p>Modalidades y planes de estudio</p>
            </div>
        </section>

        <section class="container">
            <h1>Planes de estudio</h1>
            <div class="tab">
                <input type="radio" name="abrir" id="acc1"/>
                <label for="acc1">
                    <h2>01</h2>
                    <h3>2119</h3>
                </label>
                <div class="content">
                    <p>
                        Requisitos de Titulación
                     </p>
             
                     <ul>
                         <li>100% Creditos</li>
                         <li>Carta de liberación del servicio social (480hr)</li>
                         <li>Constancia idioma</li>
                         <li>Actividades de formación complementaria (480hr)</li>
                     </ul>
                </div>
            </div>
            <div class="tab">
                <input type="radio" name="abrir" id="acc2"/>
                <label for="acc2">
                    <h2>02</h2>
                    <h3>1279</h3>
                </label>
                <div class="content">
                    <p>
                        Requisitos de Titulación
                     </p>
             
                     <ul>
                         <li>100% Creditos</li>
                         <li>Carta de liberación del servicio social</li>
                         <li>Constancia idioma</li>
                     </ul>
                </div>
            </div>
            <div class="tab">
                <input type="radio" name="abrir" id="acc3"/>
                <label for="acc3">
                    <h2>03</h2>
                    <h3>8082</h3>
                </label>
                <div class="content">
                    <p>
                       Requisitos de Titulación
                    </p>
            
                    <ul>
                        <li>100% Creditos</li>
                        <li>Carta de liberación del servicio social</li>
                    </ul>
        
                </div>
            </div>
        </section>

        <section class="container">
            <h1>Modalidades de titulación</h1>
            <select name="" id="">
                <option value="">Plan 1</option>
                <option value="">Plan 2</option>
            </select>
            <div class="tab">
                <input type="radio" name="abrir" id="acc1-m"/>
                <label for="acc1-m">
                    <h2>01</h2>
                    <h3>2119</h3>
                </label>
                <div class="content">
                    <p>
                        Requisitos de Titulación
                     </p>
             
                     <ul>
                         <li>100% Creditos</li>
                         <li>Carta de liberación del servicio social (480hr)</li>
                         <li>Constancia idioma</li>
                         <li>Actividades de formación complementaria (480hr)</li>
                     </ul>
                </div>
            </div>
            <div class="tab">
                <input type="radio" name="abrir" id="acc2-m"/>
                <label for="acc2-m">
                    <h2>02</h2>
                    <h3>1279</h3>
                </label>
                <div class="content">
                    <p>
                        Requisitos de Titulación
                     </p>
             
                     <ul>
                         <li>100% Creditos</li>
                         <li>Carta de liberación del servicio social</li>
                         <li>Constancia idioma</li>
                     </ul>
                </div>
            </div>
            <div class="tab">
                <input type="radio" name="abrir" id="acc3-m"/>
                <label for="acc3-m">
                    <h2>03</h2>
                    <h3>8082</h3>
                </label>
                <div class="content">
                    <p>
                       Requisitos de Titulación
                    </p>
            
                    <ul>
                        <li>100% Creditos</li>
                        <li>Carta de liberación del servicio social</li>
                    </ul>
        
                </div>
            </div>
        </section>

        <footer>
            <p>Nombre del Estudiante | Asesor: Nombre del Asesor | Universidad</p>
            <p>"Por mi raza hablará el espíritu" - Chagoya</p>
        </footer>
    </main>

    <script src="./src/js/menu.js"></script>
</body>
</html>
