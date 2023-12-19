<!DOCTYPE html>
<html lang="pt=BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300&display=swap" rel="stylesheet">
    
</head>
<body>
    <header class="ClassHeader">
                             
            <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img class="iconMenu" src="./img/menu_circular_button_burger_icon_124214 (1).png.crdownload"></span>
            <h2 class="textMain" >Portfolio</h2>
                   
            <nav>
                <div id="mySidenav" class="sidenav">
                 <a href ="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                 <a href="#">Portugues</a>
                 <a href="#">Inglês</a>
                 <a href="#">Francês</a>
                 <a href="#">Alemão</a>
                 <a href="#">Desenvolvimento Games</a>
                 <a href="#">Pixel art</a>
                 <a href="#">Desenvolvimento app</a>
                 <a href="#">Paginas Web</a>
                 
                </div>
                
            </nav>
         
          

         
          
            
         
            

         <script>
            function openNav() {
              document.getElementById("mySidenav").style.width = "250px";
            }
            
            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
            }
            </script>
                          
        </nav>  
           
    </header>
    
          <section class="sectionMain">
            <h3 class="texOla">Olá eu sou o  cleuber</h3>
           
            <h1 class="DeveloperWev">Programador e desenvolvedor Web</h1>
            
            <img class="Imgmain" src="./img/Ciencia-da-Computacao.jpg">
          </section>
         
          <div class="divMain">
            <img class="img1" src="./img/game-1.jpg">
            <img class="img2" src="./img/png-transparent-pixel-art-design-game-angle-simple.png">
            <img class="img3"  src="./img/1-1.jpg">
            <img class="img4" src="./img/web developer.jpg">
          </div>
           
          <div class="divMain2">
               
              
              <a href="https://www.linkedin.com/in/cleuber-maciel/"><img class="linkedinMain" src="./img/linkedin-social-media-icon-png_71812 1.png"></a> 
              <a href="https://github.com/cleuber979"><img  class="gitHurbMain"  src="./img/download 1.png"></a>  
          </div>
         <footer class="footerMain">
            <img class="email" src="./img/images (3).png">
            <h3 class="emailMain">cleubermaciel020284@gmail.com</h3>
            <img class="telefoneIcon" src="./img/telefone-icon.png">
            <h3 class="telefoneMain">024 981352210</h3>
            <h3 class="enderMain">Resende - Rio de Janeiro -  Brasil </h3>

         <script>
   function typewriterEffect(element, delay = 0) {
        let split_element = element.innerHTML.split('');
        element.innerHTML = '';
        setTimeout(() => {
            split_element.forEach((value, index) => {
                setTimeout(() => {
                    element.innerHTML += value
                }, 80 * index)
            })
        }, delay)
    }

    typewriterEffect(document.querySelector('h1'))
    typewriterEffect(document.querySelector('h1'), 1000)
    </script>
    
</body>
</html>