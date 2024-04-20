<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stephanie Silva's HomePage</title>

        <!--bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <script type="text/javascript" src="./assets/js/homepage.js"></script>
        <link rel="stylesheet" href="./assets/styles/homepage.css">
        <link rel="stylesheet" href="./assets/styles/contact.css">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@100..800&display=swap" rel="stylesheet">

    </head>

    <body>
    <div class ="metallic-pink-background">
<div class ="menu">
    <div class="pages">
        <span class = "logo" id ="logo"> .ssilva. </span>
    <br>
        <span class="menu-item" id = "home-item">
            <span class="menu-number">01.</span> Home
        </span>
        <span class="divider">  </span>
        <span class="menu-item" id="projects-item">
            <span class="menu-number">02.</span> Projects
            
        </span>
        <span class="divider">  </span>
        <span class="menu-item" id="experience-item">
           
            <span class="menu-number">03.</span> Experience
        </span>
        <span class="divider">  </span>
        <span class="menu-item" id="contact-item">
            <span class="menu-number">04.</span> 
            <a href="./contact">Contact Me! </a>

        </span>
        <span class="divider">  </span>
        <span class="menu-item" id="resume-item">
            <span class = "menu-number"> 05.</span> Resume</span>
    </div>
</div>

    <section id ="home">

    </section>
        <br><br><br><br><br>
        <p>Hey, my name is </p>

        <h1>  Stephanie Silva.

        </h1>

        <h2>
        An aspiring Software Engineer.
        </h2>

        <h3>
            <br>
            I am a rising junior at Fordham University majoring in Computer Science
            and minoring in New Media and Digital Design.
            
            
        </h3>

        <h4>
            < / >
    </h4>

    <br><br><br>
        <footer class="footer d-flex justify-content-end align-items-center">
            <a class = "block hover: text-slate-200" href= "https://github.com/ssilva24" target ="_blank" rel="noferrer noopener" aria-label="Github" title="GitHub!">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#ad35e0" width="110" height="110" aria-hidden="true" style="padding-left: 65px; ">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
            </svg>
            </a>

            <a class ="block hover:text-slate-200" href="https://www.linkedin.com/in/stephanie-silva-/" targer="_blank" rel="noreferrer noopener" aria-label="LinkedIn" title ="LinkedIn!">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ad35e0" width="64" height="64" aria-hidden="true" style="padding-left: 25px;">
                <path d="M21 0H3a3 3 0 00-3 3v18a3 3 0 003 3h18a3 3 0 003-3V3a3 3 0 00-3-3zM8 19H5V9h3zm-1.5-8A1.5 1.5 0 116.5 9 1.5 1.5 0 016.5 11zM19 19h-3v-4c0-1.19-.42-2-1.5-2s-1.7.81-1.7 2v4h-3V9h3v1.17h.04a3.14 3.14 0 012.5-1.33c1.83 0 3.46 1.16 3.46 4.38z"/>
                </svg>
        </a>

        <a href="mailto:ssilva24@fordham.edu" target="_blank" rel= "noopener noreferrer" aria-label ="Email!">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ad35e0" width="77" height="77" aria-hidden="true" style="padding-left: 25px;">
        <path fill-rule="evenodd" d="M3 5.95V18c0 .555.445 1 .995 1H20.01c.548 0 .995-.448.995-1V5.95c0-.555-.445-1-.995-1H3.995C3.447 4.95 3 5.448 3 5.95zM12 13l-8-5h16l-8 5zm-8-7l8 4.997L20 6H4z"></path>
        </svg>
    </a>
            <br><br>
        </footer>
</section>

<br><br>


    <section id="projects">
                <?php include('projectsview.php'); ?>
        </section>

<br><br><br><br>
        <section id="experience">
            <?php include('experienceview.php'); ?>
    </section>

<br><br><br>
    <section id="resume">
                <?php include('resumeview.php'); ?>
            </section>

 


</div>


        <script src="./assets/js/contact.js"></script>

    </body>


</html>

