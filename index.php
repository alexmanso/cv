<?php 
	$error = '';
	$post = $_POST;
	if (isset($_POST['nombre']) && $_POST['nombre'] == '')
	{
		$success = FALSE;
		$error .= '<p>El campo nombre es obligatorio<p>';
	}
	if (isset($_POST['email']) && $_POST['email'] == '')
	{
		$success = FALSE;
		$error .= '<p>El campo email es obligatorio<p>';
	}
	if (isset($_POST['mensaje']) && $_POST['mensaje'] == '')
	{
		$success = FALSE;
		$error .= '<p>El campo mensaje es obligatorio<p>';
	}

	if (!isset($success) && isset($_POST['submit']))
	{
		$area = isset($_POST['area']) ? $_POST['area'] : 0;
		switch ($area)
		{	
			default:
				$email = 'kreative.alex@gmail.com,';
				break;
		}
		$mensaje = "CV ALEX\n
					Nombre: {$_POST['nombre']}  \n
					Email: {$_POST['email']}  \n
					Mensaje: {$_POST['mensaje']}  \n";
		mail($email, 'Mensaje Web Alex - CV ', $mensaje);
		$post = NULL;
		$success = TRUE;
	}


?>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alex Manso - Diseñadora y Back-end-developer</title>
    <link rel="stylesheet" type="text/css" href="style.css">  
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">  
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">

</head>
<body>

<div class="first-wrap" id="top">
  <div class="first-div">
    <p class="datos-contacto">
      <a href="mailto:hola@alexmanso.cl" class="icon-color-small"><i class="fa fa-envelope-o" aria-hidden="true"></i>hola@alexmanso.cl</a> 
      &nbsp&nbsp&nbsp 
        <a href="tel:+56956058962" class="icon-color-small"><i class="fa fa-phone" aria-hidden="true"></i>+56 9 5605 8962</a>
    </p>
    <div class="first-inner-div">
      	<div class="left">
			<div class="link link--kukuri" href="#" data-letters="Alex Manso">Alex Manso</div>
	   	 	<h1>Diseñadora Gráfica y Web</h1>
	   	 	<p>Diseñadora gráfica y desarrolladora web de 28 años. Nacida en Barcelona y desde 2012 residiendo en Chile, con más de 6 años de experiencia en diseño gráfico y más de 3 años en el diseño y desarrollo de sitios web.</p>

	   	 	<a href="#exp" class="icon-color">
	   	 		<i class="fa fa-angle-down fa-3x faa-pulse animated"></i>
	    	</a>   
     	</div>
    </div>
  </div>
</div>

<div class="second-wrap">
  <div class="second-div" id="exp">
    <h3>
      <span class="line-separator"></span>
     	<div class="link link--ilin" href=""><span>Experiencia</span><span>Profesional</span></div>
      <span class="line-separator"></span>
    </h3>
  </div>
  <div class="third-div">
  		<div class="col-1">
  			<article>
  				<h3> Diseñadora Gráfica y Back-end-Developer <span><a href="">> SKYMEDIA</a></span></h3>
  				<p class="date">Junio 2016 - Actualidad <span> Limache, Chile.</span> </p>
  				<p>Diseño e implementación de sitios web autoadministrables (CMS) Wordpress. Control y ejecucción del proceso creativo y productivo: desde la propuesta de diseño a la entrega final. Gestión con los clientes, capacitacion y asesoramiento para administración de los sitios web.</p>
  			</article>
  			<article>
  				<h3> Diseñadora Gráfica y Back-end-Developer <span><a href="">> MASTODONIT</a></span></h3>
  				<p class="date">Junio 2016 - Mayo 2017 <span> Viña del Mar, Chile.</span> </p>
  				<p>Diseño e implementación de sitios web autoadministrables (CMS) Wordpress. Control y ejecucción del proceso creativo y productivo: desde la propuesta de diseño a la entrega final. Gestión con los clientes, capacitacion y asesoramiento para administración de los sitios web.</p>
  			</article>
  			<article>
  				<h3> Gestor Proyecto Marca Sectorial 2 "Chilebiotech" <span><a href="">> ASEMBIO</a></span></h3>
  				<p class="date">Diciembre 2013 - Mayo 2015 <span> Santiago, Chile.</span> </p>
  				<p>Encargada de medios comunicacionales de la Asociación de Empresas Chilenas de Biotecnología en el marco del proyecto Marca Sectorial 2 “Chilebiotech” financiado por Pro-Chile.</p>
  			</article>
  			<article>
  				<h3> Diseñadora Gráfica y Back-end-Developer <span> <a href="">> POCKET DIGITAL</a></span></h3>
  				<p class="date">Abril 2013 - Enero 2015 <span> Viña del Mar, Chile.</span> </p>
  				<p>Diseñadora de proyectos multidisciplinares en fotografía, audiovisual, branding, editorial y web.</p>
  			</article>
  			<article>
  				<h3> Diseñadora Gráfica y Community Manager <span><a href="">> GRUPO VIRTUAL 360</a></span></h3>
  				<p class="date">Junio 2011 - Noviembre 2012 <span> Palma de Mallorca, España.</span> </p>
  				<p>Diseñadora de material gráfico y audiovisual. Creación de animaciones y banner para sitio web. Encargada medios comunicacionales y community manager.</p>
  			</article>
  			<article>
  				<h3> Diseñadora Gráfica <span><a href="">> ARTESANÍA DE CATALUÑA</a></span></h3>
  				<p class="date">Enero 2011 - Abril 2011 <span> Barcelona, España.</span> </p>
  				<p>Proyecto Oficis Singulars. Documentación fotográfica en workshop “La pell d’Igualada i Vic”. Retratos, diseño catálogo y exposición colectiva en “Museu de l’Art i la Pell de Vic” en Barcelona.</p>
  			</article>
  			<article style="border-bottom: none!important">
  				<h3> Diseñadora Gráfica <span><a href="">> LA TIRA DE PROMOCIONS</a></span></h3>
  				<p class="date">Septiembre 2010 - Febrero 2011 <span> Girona, España.</span> </p>
  				<p>Diseño de anuncios publicitarios y maquetación de contenido para revista de publicidad. Aprendizaje en conocimientos de pre-impresión e impresión en offset y digital.</p>
  			</article>

  		</div>
  </div>
</div>

<div class="third-wrap">
	<div class="second-div" >
	    <h3>
	      <span class="line-separator"></span>
	     	<a class="link link--ilin" href=""><span>Formación</span><span>Académica</span></a>
	      <span class="line-separator"></span>
	    </h3>
	</div>
	<div class="third-div">
  		<div class="col-1">
  			<article>
  				<h3> Postítulo en creación y desarrollo de sitio web</h3>
  				<p class="date">Abril 2013 - Octubre 2013 <span> Universidad del Pacífico, Chile.</span> </p>
  				<p>Herramientas necesarias para el diseño e implementación de sitios web dinámicos; utilizando software y hardware en el desarrollo de proyectos on-line.</p>
  			</article>
  			<article>
  				<h3> CFGS Diseño Gráfico Publicitario</h3>
  				<p class="date">Septiembre 2008 - Junio 2011 <span> EART Vic, Barcelona, España.</span> </p>
  				<p>Formación integral en Diseño Gráfico que contempla las técnicas tradicionales, digitales y los contenidos culturales, artísticos y formales que debe dominar el profesional del diseño gráfico.</p>
  			</article>
  			<article style="border-bottom: none!important">
  				<h3> Batxillerato Artístico</h3>
  				<p class="date">Septiembre 2006 - Junio 2008 <span> EART Vic, Barcelona, España.</span> </p>
  				<p>Formación en artes, tales como historia del arte, dibujo artístico, escultura, cerámica, dibujo técnico, fotografía, entre otros.</p>
  			</article>
  		</div>
  	</div>
</div>
<div class="fifth-wrap">
	<div class="second-div" id="exp">
	    <h3>
	      <span class="line-separator"></span>
	     	<a class="link link--ilin" href=""><span>Habilidades</span><span>Técnicas</span></a>
	      <span class="line-separator"></span>
	    </h3>
	</div>
	<div class="fourth-div">
  		<div class="col-3">
  			<h2>Diseño Gráfico</h2>
		    <ul class="skills-bar-container">
		      <label>Photoshop CC</label>
		      <span class="percent"></span>
		      <li>
		        <span class="progressbar progressblue" id="progress-photoshop"></span>
		      </li>

		      <label>Illustrator CC</label>
		      <span class="percent"></span>
		      <li>
		        <span class="progressbar progressblue" id="progress-illustrator"></span>
		      </li>

		      <label>Indesign CC</label>
		      <span class="percent"></span>
		      <li>
		        <span class="progressbar progressblue" id="progress-indesign"></span>
		      </li>

		      <label>After Effects CC</label>
		      <span class="percent"></span>
		      <li>
		        <span class="progressbar progressblue" id="progress-aftereffects"></span>
		      </li>

		      <label>Fotografía</label>
		      <span class="percent"></span>
		      <li>
		        <span class="progressbar progressblue" id="progress-foto"></span>
		      </li>
		    </ul>
  		</div>
  		<div class="col-3">
  			<h2>Diseño Web</h2>
		    <ul class="skills-bar-container">
		      <label>HTML5 / CSS3</label>
		      <span class="percent"></span>
		      <li>
		        <span class="progressbar progressblue" id="progress-htmlcss"></span>
		      </li>

		      <label>JavaScript / jQuery</label>
		      <span class="percent"></span>
		      <li>
		        <span class="progressbar progressblue" id="progress-jsjq"></span>
		      </li>

		      <label>WORDPRESS</label>
		      <span class="percent"></span>
		      <li>
		        <span class="progressbar progressblue" id="progress-wp"></span>
		      </li>

		      <label>ANALYTICS / SEO</label>
		      <span class="percent"></span>
		      <li>
		        <span class="progressbar progressblue" id="progress-seo"></span>
		      </li>

		      <label>UX / UI</label>
		      <span class="percent"></span>
		      <li>
		        <span class="progressbar progressblue" id="progress-uxui"></span>
		      </li>
		    </ul>
  		</div>
  		<div class="col-3">
  			<h2>Lenguajes de Programación</h2>
		    <ul class="skills-bar-container">
		      <label>PHP</label>
		      <span class="percent"></span>
		      <li>
		        <span class="progressbar progressblue" id="progress-php"></span>
		      </li>

		      <label>MYSQL</label>
		      <span class="percent"></span>
		      <li>
		        <span class="progressbar progressblue" id="progress-sql"></span>
		      </li>

		      <label>JAVA</label>
		      <span class="percent"></span>
		      <li>
		        <span class="progressbar progressblue" id="progress-java"></span>
		      </li>

		      <label>PYTHON</label>
		      <span class="percent"></span>
		      <li>
		        <span class="progressbar progressblue" id="progress-python"></span>
		      </li>
		    </ul>
  		</div>
	</div>
</div>
<div class="fourth-wrap">
	<div class="second-div">
	    <h3>
	      <span class="line-separator"></span>
	     	<a class="link link--ilin" href=""><span>Cursos</span><span>Talleres</span></a>
	      <span class="line-separator"></span>
	    </h3>
	</div>
	<div class="third-div">
  		<div class="col-1">
  			<article>
  				<h3> Ciclo de marketing operativo <span><a href="">> PROCHILE</a></span></h3>
  				<p class="date">22 y 29 Octubre 2014<span> Hotel Diego de Almagro, Valparaiso, Chile.</span> </p>
  				<p>Estrategia de posicionamiento, Modelo 3D: Marca, Mercado, Consumidor. Herramientas y oportunidades que entregan el marketing digital: herramientas para el diseño de una estrategia de comunicaciones, escenarios de riesgos, grupos de interés, acciones claves dentro de un plan de comunicaciones, entre otros.</p>
  			</article>
  			<article>
  				<h3> Taller Marketing Digital <span><a href="">> PROCHILE</a></span></h3>
  				<p class="date">4 Diciembre 2013 <span>Hotel Plaza San Francisco, Santiago, Chile</span> </p>
  				<p>Fortalecer las capacidades exportadoras de las Pymes, poniendo énfasis en los aspectos relacionados al origen y sentido del marketing digital. Google y la importancia del SEO, Redes sociales, Emailing y e-commerce, entre otros.</p>
  			</article>
  			<article style="border-bottom: none!important">
  				<h3> Curso Fotografía Profesional (220h) <span><a href="">> EART</a></span></h3>
  				<p class="date">Septiembre 2010 - Marzo 2011 <span> EART Vic, Barcelona, España.</span> </p>
  				<p>Formación en historia de la fotografía, técnicas de iluminación y técnicas fotográficascomo: cámara estenopeica o pin hole, fotogramas, cianotipia, fotografía analógica y digital.</p>
  			</article>
  		</div>
	</div>
</div>
<div class="fifth-wrap">
	<div class="second-div" id="exp">
	    <h3>
	      <span class="line-separator"></span>
	     	<a class="link link--ilin" href=""><span>Proyectos</span><span>Portafolio</span></a>
	      <span class="line-separator"></span>
	    </h3>
	</div>
	<div class="fourth-div">
  		<div class="col-1">
  			<a href="http://www.alexmanso.cl" target="_blank"><img src="img/bg-portafolio.jpg"></a>   
  			<h3><a href="http://www.alexmanso.cl" target="_blank">www.alexmanso.cl</a></h3>
  		</div>	
	</div>
</div>
<div class="six-wrap">
  <div class="six-div">
    <p class="datos-contacto">
      <a href="mailto:hola@alexmanso.cl" class="icon-color-small"><i class="fa fa-envelope-o" aria-hidden="true"></i>hola@alexmanso.cl</a> 
      &nbsp&nbsp&nbsp 
      <a href="#" class="icon-color-small"><i class="fa fa-phone" aria-hidden="true"></i>+56 9 5605 8962</a>
    </p>
    <div class="six-inner-div">
    	<div class="col-1-form">
    		<a class="link link--kukuri" href="#" data-letters="Escríbeme">Escríbeme</a>
	   	 	<h1>En cualquier momento, a cualquier hora</h1>
    	</div>
    	<div class="col-1-form">
    		    <div class="panel-alerta">
                <?php if (isset($success) && $success === TRUE): ?>
                	<div  class = "alert alert-success"  role = "alert" >Se ha enviado tu mensaje correctamente</div>     

                <?php elseif (isset($success) && $success === FALSE): ?>
               		<div  class = "alert alert-danger"  role = "alert" >
                
                <?=$error;?>
                    </div> 
                <?php endif; ?>
						</div>
                <form role="form" method="post" action="index.php" role="form">
                
					<div class="form-group">
						<label for="ejemplo_nombre_1"></label>
    					<input type="nombre" class="form-control" id="ejemplo_nombre_1" placeholder="Nombre " name="nombre" value="<?= isset($post['nombre']) ? $post['nombre'] : ''; ?>">
					</div>
					<div class="form-group">
						<label for="ejemplo_email_1"></label>
    					<input type="email" class="form-control" id="ejemplo_email_1" placeholder="Email" name="email"value="<?= isset($post['email']) ? $post['email'] : ''; ?>" >
					</div>
					<div class="form-group">
						<label for="ejemplo_mensaje_1"></label>
				 		<textarea class="form-control" cols="3" rows="3" placeholder="Mensaje" name="mensaje"><?= isset($post['mensaje']) ? $post['mensaje'] : ''; ?></textarea>
                    </div>
                    <div class="result"></div>
					<button type="submit" name="submit" value="1" class="btn btn-primary">Enviar</button>
							
				</form>
    	</div>
      
     	<a href="#top" class="icon-color">
	   	 	<i class="fa fa-angle-up fa-3x"></i>
	    </a>  
    </div>
  </div>
</div>
<script type="text/javascript">
/*
  Parallax.
*/
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 700);
        return false;
      }
    }
  });
});

/*
  Back to top scroll button.
*/
if ($('#back-to-top').length) {
  var scrollTrigger = 100, // px
    backToTop = function() {
      var scrollTop = $(window).scrollTop();
      if (scrollTop > scrollTrigger) {
        $('#back-to-top').addClass('show');
      } else {
        $('#back-to-top').removeClass('show');
      }
    };
  backToTop();
  $(window).on('scroll', function() {
    backToTop();
  });
  $('#back-to-top').on('click', function(e) {
    e.preventDefault();
    $('html,body').animate({
      scrollTop: 0
    }, 700);
  });
}
</script>
</body>

</html>

