<!DOCTYPE html>
<html>
    <head>
        <title>Mi sitio web</title>
        <link href="css/estilo.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Allerta|Montserrat" rel="stylesheet">
    </head>
    <body>
        <div class="portada">
            <header id="header" class="header contenedor">
                <figure class="logotipo">            
                    <img src="img/2_Flat_logo_on_transparent_295x65.png" width="250"  alt="Kevin Velasco">
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
                    <h1 class="titulo">KAVD Soft</h1>
                    <h3 class="titulo-a">Always Coding</h3>
                    <button class="button">Biography</button>
                </div>
            </section>
        </div>
<section class="tabla">
    <div class="contenedor">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Año</th>
                <th scope="col">descripcion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Item 1</td>
                <td>2000</td>
                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique commodi adipisci repellendus modi quisquam, magnam aliquid et neque, atque quis perferendis corrupti laborum hic, sunt consequuntur cupiditate tenetur. Repellat, eligendi!</td>
            </tr>
            <tr>
                <td>Item 2</td>
                <td>2004</td>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur in pariatur deserunt officia esse dignissimos repellat rerum explicabo dolore repellendus expedita molestiae a necessitatibus at assumenda libero, temporibus repudiandae voluptas?</td>
            </tr>
            <tr>
                <td>Item 3</td>
                <td>2018</td>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur in pariatur deserunt officia esse dignissimos repellat rerum explicabo dolore repellendus expedita molestiae a necessitatibus at assumenda libero, temporibus repudiandae voluptas?</td>
            </tr>
        </tbody>
    </table>
    </div>
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
            <form class="formulario">
                <div class="col1">
                    <label for="nombre">Name</label>
                    <input type="text" id="nombre" name="nombre" required />        
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required/>                       
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
                        <label for="comentario">Comentarios</label>
                        <textarea name="comentario" id="comentario" cols="30" rows="7"></textarea>
                        <input class="button" type="submit" value="Enviar">
                    </div>
                </div>
            </form>
        </div>
    </footer>
</body>
</html>
