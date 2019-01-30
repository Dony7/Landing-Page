<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Thasadith" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <div class="content">
            <div class="logo">
                <img src="images/CDA.png" alt="Logo">
            </div>
            <div class="contact">
                <a href="#footer">Contact Us</a>
            </div>

            <div class="panels">
                <div class="panel panel1 open-active">
                    <p>We</p>
                    <p>Make</p>
                    <p>Websites</p>
                </div>
                <div class="panel panel2 open-active">
                    <p>Just</p>
                    <p>Contact</p>
                    <p>Us</p>
                </div>
                <div class="panel panel3 open-active">
                    <p>Always</p>
                    <p>Professional</p>
                    <p>Services</p>
                </div>
            </div>
        </div>
    </div>
    <div class="info">
        <div class="about">
            <h1 class="info-title">About us</h1>
            <p class="about-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas, mollitia cumque
                ullam impedit est quidem velit doloremque veritatis? Fugiat deleniti eveniet, ullam neque maxime
                incidunt quae consectetur magni modi dolorum, veritatis numquam ab quasi, voluptatum vitae quisquam
                accusantium eum nesciunt?</p>
        </div>
        <div class="cards">
            <div class="card" data-aos="fade-up" data-aos-duration="500">
                <div class="card__side card__side--front">
                    <div class="image-container">

                    </div>
                    <div class="card__picture card__picture--1">
                        <h1>Recipe App</h1>
                        <p>Look for the latest recipes here.</p>

                    </div>

                </div>
                <div class="card__side card__side--back card__side--back-1">
                    <button>Visit Page</button>
                    <div class="card__cta">

                    </div>
                </div>
            </div>

            <div class="card" data-aos="fade-up" data-aos-duration="1000">
                <div class="card__side card__side--front">
                    <div class="image-container2">

                    </div>
                    <div class="card__picture card__picture--1">
                        <h1>Contacts App</h1>
                        <p>Manage your contacts with this app.</p>
                    </div>


                </div>
                <div class="card__side card__side--back card__side--back-1">
                    <button>Visit Page</button>
                    <div class="card__cta">

                    </div>
                </div>
            </div>

            <div class="card" data-aos="fade-up" data-aos-duration="1500">
                <div class="card__side card__side--front">
                    <div class="card__picture card__picture--1">
                        &nbsp;
                    </div>

                </div>
                <div class="card__side card__side--back card__side--back-1">
                    <button>Visit Page</button>
                    <div class="card__cta">

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="footer" id="footer">
        <div class="sections">
            <div class="section">
                <h2 id="title">Lorem ipsum dolor sit amet.</h2>
                <p id="text">Sit amet, consectetur adipisicing elit. Eaque laudantium officia pariatur veritatis autem
                    unde possimus aliquam voluptatem commodi!</p>
                <h2 id="title">Follow Us on...</h2>
                <div class="logos">
                    <a href="#"><img src="images/twitter.png" alt="Twitter"></a>
                    <a href="#"><img src="images/insta.png" alt="Insta"></a>
                    <a href="#"><img src="images/github.png" alt="Github"></a>
                    <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
                </div>
                <p id="copyright">&copy; 2019 CDA Sites</p>
            </div>
            <div class="section">
                <h2 id="title">Contact Us</h2>
                <form method="post" action="contactform.php">
                    <div class="inputs">
                        <div class="field half first">
                            <input type="text" name="name" id="name" placeholder="Name"required />
                        </div>
                        <div class="field half second">
                            <input type="text" name="email" id="email" placeholder="Email" required />
                        </div>
                    </div>
                    <div class="field">
                        <textarea name="message" id="message" rows="4" placeholder="Message" required></textarea>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Send" class="special" id="send" name="submit" /></li>
                        <li><input type="reset" value="Reset" id="reset" /></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>