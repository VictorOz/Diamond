<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Diamond</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/icon-diamond.png" />
		<link rel="stylesheet" href="estilo/hojaStylo.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
		<script src="js/jquery-3.1.0.min.js"></script>
		<script type="text/javascript" src="js/jscript.js"></script>

	</head>
	<body>

		<header>
			<nav>
				<ul id="logo">
					<li>DIAMOND</li>
				</ul>
					<img id="diamond" src="img/img-p-2.png">
				<ul>
					<li><a href="#registro">Registro</a></li>
					<li>|</li>
					<li><a href="#contacto">Contacto</a></li>
				</ul>
				<ul>
					<li><a href="#nav-joyas">Joyas</a></li>
					<li><a href="#mas">Perfume</a></li>
				</ul>
			</nav>
		</header>

		<section id="banner">
			
		</section>
		
		<div class="container">

			<section id="welcome">

				<p class="title-diamond">
					¿Qué es <span>DIAMOND?</span>
				</p>

				<p class="text-diamond">
					Somos la más grande tienda online especializa en la venta de perfumes y joyas, 
					tanto para hombres como mujeres. Tenemos la más grande cartera de productos 
					del país y en la actualidad somos distribuidores exclusivos de algunas 
					de las principales marcas de este sector.
				</p>

				<br>
				<a class="saberMas" id="mas" href="#contacto">Saber más</a>
				
			</section>

			<section class="cont-secciones">

				<div class="titulo-seccion" id="perfume">
					<p>Perfume</p>
				</div>

				<div class="cont-p-primerN">

					<div class="cont-p-columna">
						<div class="cont-p-img">
							<img src="img/img-p-3.png" alt="">
						</div>
						<div class="cont-p-text">
								<span>1 million, Paco Rabanne</span>
							<br>
							<div class="text-mostrar">
								<p>
								Este perfume es el ganador del Men's Prestige Fragrance of the Year 2009.
								1 Million se lanzó en 2008. 1 Million fue creada por Christophe Raynaud, Olivier Pescheux y Michel Girard. 
								</p>
							</div>
							<div class="oculto" id="ocu">
								<p>Las Notas de Salida son: toronja (pomelo), menta y mandarina roja. Las Notas de Corazón 
								son: rosa, canela y notas especiadas. 
								Las Notas de Fondo son cuero , notas amaderadas, ámbar y pachulí hindú.</p>
							</div>
							<a class="mostrar" href="#perfume"><h3>Más</h3></a>
						</div>

					</div>

					<div class="cont-p-columna">

						<div class="cont-p-img">
							<img src="img/img-p-4.png" alt="">
						</div>
						<div class="cont-p-text">
								<span>Acqua di Gio, Giorgio Armani</span>
							<br>
							<div class="text-mostrar">
								<p>
								Este perfume entró al "Salon de la Fama" de las fragancias en el 2012. Acqua di Gio se lanzó en 1996. 
								La Nariz detrás de esta fragrancia es Alberto Morillas. 
								</p>
							</div>
							<div class="oculto" id="ocu2">
								<p>Las Notas de Salida son: naranja, lima (limón verde), mandarina, jazmín, bergamota, limón (lima ácida) y neroli.Las Notas de Corazón son: ciclamen (violeta persa),
								 nuez moscada, reseda (miñoneta).</p>
							</div>
							<a class="mostrar2" href="#perfume"><h3>Más</h3></a>
						</div>

					</div>

					<div class="flecha">
						<img src="img/img-p-5.png" id="flecha-grande">
					</div>
				</div>
				
				<div id="cont-p-segundoN">

					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">

						<div class="flipper">  
						    <!-- Front -->  
						    <div class="front">
						        <img src="img/img-p-6.png">  
						    </div>  
						    <!-- BACK -->  
						    <div class="back">
							    <h2>Perfume</h2>
		
							    <div class="list-nav2">
								    <ul>
								      	<li><a href="#">Hombres</a></li>
										<li><a href="#">Mujer</a></li>
								    </ul>
							  	 </div>
						    </div>
						</div>

					</div>

					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">

						<div class="flipper">
						    <!-- Front -->  
						    <div class="front">
						        <img src="img/img-p-7.png">  
						    </div>
						    <!-- BACK -->  
						    <div class="back" >
						        <h2>Joyas</h2>
						     
						        <div class="list-nav2">
							      <ul>
							      	<li><a href="#">Hombres</a></li>
									<li><a href="#">Mujer</a></li>
							      </ul>
						  	    </div>
						    </div>
						</div>
					</div>

					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">

						<div class="flipper">
						    <!-- Front -->  
						    <div class="front">
						        <img src="img/img-p-8.png"> 
						    </div>
						    <!-- BACK -->  
						    <div class="back" >
						    	<h2>Maquillaje</h2>
						     
						    	<div class="list-nav2">
							    	<ul>
							      		<li><a href="#" >Hombres</a></li>
										<li><a href="#" id="nav-joyas">Mujer</a></li>
									</ul>
						  	  </div>
						    </div>
						</div>

					</div>
				</div>

			</section>

			<section class="cont-secciones">
				
				<div class="titulo-seccion">
					<p>Joyas</p>
				</div>

				<div class="cont-j-primerN">

					<div class="cont-columna-j">

						<div class="img-j"><img src="img/img-j-1.png" alt=""></div>

						<div class="cont-principal-text-j">
							<span>	
								Pendienes en diamantes, Harry W 	
							</span>
								
							<div class="text-mostrar-j">
								<p>
								La firma abre en 1936 las puertas de su propia firma en Nueva York, tras haberse hecho con 
								la famosa colección de joyas millonaria Arabella Huntington y rediseñarla para mantenerla a la moda.
							</div>
								
							<div class="oculto-j" id="ocu3">
								<p>Hoy en día está presente en todo 
								el mundo y son famosas sus tiendas en Nueva York, Londres, Paris, Ginebra, Tokio, Hong Kong, y Shanghai.</p>
							</div>
								
							<a class="mostrar3" href="#joyas"><h3>Más</h3></a>
						</div>

					</div>

					<div class="cont-columna-j">

						<div class="img-j"><img src="img/img-j-2.png" alt=""></div>

						<div class="cont-principal-text-j">
							<span>
								Brasalete en diamentes,
								Bucellati
							</span>
							
							<div class="text-mostrar-j">
								<p>
								Una de las firmas más caras en el mundo de las joyas, pero también 
								de las más prestigiosas en su elaboración. Lavarmonía perfecta de elementos estilísticos y la habilidad del joyero son de importancia suprema para esta firma.
								</p>
							</div>
							
							<div class="oculto-j" id="ocu4">
								<p>Hoy en día está presente en todo 
								el mundo y son famosas sus tiendas en Nueva York, Londres, Paris, Ginebra, Tokio, Hong Kong, y Shanghai.</p>
							</div>
							<a class="mostrar4" href="#joyas"><h3>Más</h3></a>
						</div>
					</div>
						
					<div class="cont-columna-j">

						<div class="img-j"><img src="img/img-j-3.png" alt="">

						</div>

						<div class="cont-principal-text-j">
							<span>
								Gargantilla,
								Van Cleef 
							</span>
									
							<div class="text-mostra-j">
								<p>
								Firma fundada a comienzos del Siglo XX por el matrimonio que forman Estelle Arpels y Alfred Van Cleef. En realidad, la primera de sus tiendas se funda en 1906 a partir de las asociación entre Alfred y su cuñado. 
								</p>
							</div>
									
							<div class="oculto-j" id="ocu5">
								<p>Hoy en día está presente en todo 
								el mundo y son famosas sus tiendas en Nueva York, Londres, Paris, Ginebra, Tokio, Hong Kong, y Shanghai.</p>
							</div>
								
							<a class="mostrar5" href="#joyas"><h3>Más</h3></a>
						</div>

					</div>

					<div class="flecha">
						<img src="img/img-p-5.png" id="flecha-grande">
					</div>
				</div>

			</section>

			<section class="cont-secciones">

				<div class="titulo-seccion" id="contacto">
					<p>Contactos</p>
				</div>
				<div id="text-contacto">
					<p id="text-cont-parrafo">
						Ayudarnos a mejorar, favor enviarnos cualquier comentario que entienda que nos puede servir para  crecer y mantenernos actualizados.
					</p>
				</div>
				<div class="cont-principal-c" id="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.220497099171!2d-69.94458968558378!3d18.47366887542963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89e4e5607a45%3A0x1c209c7418cf0ad4!2sAv.+Winston+Churchill%2C+Santo+Domingo%2C+Rep%C3%BAblica+Dominicana!5e0!3m2!1ses!2ses!4v1471753691169" 
					width="460px" height="300px" frameborder="0" style="border:2px solid white" allowfullscreen></iframe>
				</div>

				<div class="cont-principal-c" id="cont-contacto-form">

					<form action="#" id="contacto_form">
							<ul>
								<li>
									<span>Comentarios</span>
								</li>
								<li class="line">
									<label for="nombre">Nombre</label>
									<input type="text" name="nombre" id="nombre" placeholder="Juan" required/>
								</li>
								<li class="line">
									<label for="Correo">Correo</label>
									<input type="mail" name="mail" id="mail" placeholder="Juan@hotmail.com" required/>
								</li>
								<li > 
									<label for="mensaje">Mensaje</label>
									<textarea name="mesaje" cols="" rows="3" placeholder="Saludos, quiero sugerir..." required></textarea>
								</li>
								<li><button class="submit" type="submit">Enviar comentario</button></li>
							</ul>
					</form>
				</div>
			</section>
		</div>
		<div class="container-footer" id="footer">

			<div class="img-redes">
				<a href="https://www.facebook.com/victorozoriag"><img src="img/img-s-f.png"></a>
				<a href="https://www.instagram.com/v.ozoria/"><img src="img/img-s-i.png"></a>
			</div>

			<div class="footer-text">
				<p>CopyRigth: Victor Oz 2016</p>
			</div>
			
		</div>
	</body>
</html>