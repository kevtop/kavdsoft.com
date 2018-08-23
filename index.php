<!DOCTYPE html>
<html>
    <head>
        <title>kavdSoft</title>
        <link href="css/estilo.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Allerta|Montserrat" rel="stylesheet">
    </head>
    <body>
        <div class="portada">
            <header id="header" class="header contenedor">
                <figure class="logotipo">
                    <a href="index.html"><img src="img/2_Flat_logo_on_transparent_295x65.png" width="250"  alt="Kevin Velasco"></a>
                </figure>
                
                <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent">
                        <div class="collapse navbar-collapse menu" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="index.php#skills">Skills</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="index.php#contacto">Contact</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="Biography.php">Biography</a>
                            </li>
                          </ul>
                        </div>
                      </nav>
            </header>        
            <section id="portada">
                <div class="contenedor">
                    <h1 class="titulo">kavdSoft</h1>
                    <h3 class="titulo-a">Always Coding</h3>
                    <button class="button">Biography</button>
                </div>
            </section>
        </div>
        <section id="skills" class="skills contenedor">
            <h2>Skills</h2>
            <article class="skill">
                <img src="img/java.png" width="350" alt="Java" class="right">
                <div class="contenedor-skill-a">
                    <h3 class="titulo-b">Java</h3>       
                    <ol>
                        <li>JPA</li>
                        <li>JavaFX</li>
                        <li>JDBC</li>
                    </ol>        
                </div>
            </article>
            <article class="skill">
                <img src="img/net.png" width="350" alt="-NET" class="left">
                <div class="contenedor-skill-b">
                    <h3 class="titulo-b">.NET</h3>        
                    <ol>
                        <li>Entity Framework</li>
                        <li>LINQ</li>
                        <li>WPF</li>
                    </ol>
                </div>
            </article>
            <article class="skill">
                    <img src="img/html5-css-javascript-logos.png" width="350" alt="HTMl" class="left">
                    <div class="contenedor-skill-b">
                        <h3 class="titulo-b">FrontEnd</h3>
                        <ol>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JS</li>
                        </ol>
                    </div>
                </article>
        </section>
        <footer class="footer">
            <div id="contacto" class="contenedor">
                <div class="contacto">
                    <img width="300" src="img/2_Flat_logo_on_transparent_295x65.png" alt="logo">
                    <a href="tel:+50241543339">
                        <strong>Telefono:</strong> 
                        <span>+(502) 40243253</span>
                    </a>
                    <a href="mailto:kevinvelascodiaz@gmail.com">
                        <strong>Email</strong> 
                        <span>kevinvelascodiaz@gmail.com</span>
                    </a>
                </div>
                <form class="formulario" action="contactform.php" method="POST" >
                    <div class="col1">
                        <label for="nombre">Name</label>
                        <input type="text" name="name" placeholder="nombre" required />        
                        <label for="email">Email</label>
                        <input type="email" name="mail" placeholder="email" required/>                       
                        <div class="perfil">
                            <label for="junior">
                                <input type="radio" 
                                    name="developer" 
                                    id="junior" 
                                    checked 
                                    value="junior">Junior
                            </label>
                            <label for="senior">
                                <input type="radio" 
                                    name="developer" 
                                    id="senior" 
                                    value="senior">Senior
                            </label>
                        </div>
                        <div class="intereses">
                            <label for="c#">
                                <input type="checkbox" name="intereses" id="c#" value="c#">C#
                            </label>
                            <label for="vb">
                                <input type="checkbox" name="intereses" id="vb" value="vb">Visual Basic                            
                            </label>
                            <label for="sql">
                                <input type="checkbox" name="intereses" id="sql" value="sql">SQL
                            </label>
                            <label for="java">
                                <input type="checkbox" name="intereses" id="java" value="java">Java
                            </label>
                        </div>
                    </div>
                    <div class="col2">
                        <div>
                            <label for="comentario">Comments</label>
                            <textarea name="comments" id="comentario" cols="30" rows="7"></textarea>
                            <button class="button" type="submit" name="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </footer>
    </body>
</html>
