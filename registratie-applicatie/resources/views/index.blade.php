<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home pagina</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
    <script src="https://kit.fontawesome.com/2842fd03de.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="top-bar">
        <div class="top-bar-image">
            <img src="images/talland-college-logo.png" alt="Logo" class="logo">
        </div>
    </div>
    <div class="hamburger">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="container">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="logo-container">
                <img src="images/talland-college-logo.png" alt="Logo" class="logo">
            </div>
            <ul>
                <li><a href="#home"><i class="fa fa-fw fa-home"></i> Home</a></li>
                <li><a href="#home"><i class="fa-solid fa-diagram-project"></i> Projecten</a></li>
                <li><a href="#home"><i class="fa-solid fa-circle-info"></i> Over ons</a></li>
                <li><a href="#home"><i class="fa-solid fa-right-from-bracket"></i> Inloggen</a></li>
            </ul>
        </nav>
        <main>
            <!-- Header -->
            <header>
                <h1>Home pagina</h1>
            </header>

            <!-- Content -->
            <section id="home" class="dashboard-section">
                <div class="card-container">
                    <div class="left-column">
                        <div class="card card-left-purple">
                            <h2>Werk samen met anderen aan nieuwe<br><b>Digitale kansen</b></h2>
                            <p>Ben jij mkb-ondernemer en wil je graag tijd en geld besparen met digitalisering, maar is
                                het vaak te duur en weet je niet waar je moet beginnen? Werkplaats Digitaal Ondernemen
                                brengt de vraagstukken van ondernemers als project in het onderwijs.</p>
                            <a href="#" class="button-white">Bekijk</a>
                        </div>

                        <div class="bottom-row">


                            <video width="600" controls>
                                <source src="video/Talland_promo_vid.mp4" type="video/mp4">
                            </video>


                            <div class="card card-left">
                                <h3>Ingediende projectvoorstellen</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-container">
                    <div class="left-column">
                        <div class="card card-right">
                            <h3>Ingediende projectvoorstellen</h3>
                            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet velit.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script>
        document.querySelector('.hamburger').addEventListener('click', function() {
            this.classList.toggle('active');
            document.querySelector('.sidebar').classList.toggle('active');
            document.querySelector('.top-bar').classList.toggle('active', !document.querySelector('.sidebar')
                .classList.contains('active'));
        });
    </script>
</body>

</html>
