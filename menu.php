<?php

class Menu
{


function header($active)
{
	$activeIndex = '';
	$activeAbout = '';
	$activeServices = '';
	$activeContact = '';
	if($active == 'index') {
		$activeIndex = 'active';
	} else if($active == 'about') {
		$activeAbout = 'active';
	} else if($active == 'services') {
		$activeServices = 'active';
	} else if($active == 'contact') {
		$activeContact = 'active';
	}
	echo'	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" >
	   <div class="container">
		  <a  class="navbar-brand" href="index.php" >
			<img id="logonanbar" src="images/logo-faorviga.jpg" >
	      </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="fa fa-bars"></span> Menu
		  </button>
		  <div class="collapse navbar-collapse" id="ftco-nav"  >
			 <ul class="navbar-nav m-auto">
				<li class="nav-item '. $activeIndex .'"><a href="index.php" class="nav-link">Inicio</a></li>
				<li class="nav-item '. $activeAbout .'"><a href="about.php" class="nav-link">Acerca de</a></li>
				<li class="nav-item '. $activeServices .'"><a href="services.php" class="nav-link">Servicios</a></li>
				<li class="nav-item '. $activeContact .'"><a href="contact.php" class="nav-link">Contacto</a></li>
			 </ul>
		  </div>
	   </div>
	</nav>';
}


	  function footer()
  {
  	 echo ' 
  	 <footer class="site-footer">
	   <div class="container">
		  <div class="row">
			 <div class="col-sm-12 col-md-6">
				<h6>FAORVIGA SA DE CV</h6>
				<p class="text-justify">Brindamos confiabilidad a través de nuestros servicios profesionales gestionando los riesgos y gastos para incrementar las utilidades, asi mismo brindando resultados consistentes y efectivos.</p>
			 </div>
			 <div class="col-xs-6 col-md-3">
				<h6>Servicios</h6>
				<ul class="footer-links">
				   <li><a href="services.php#nuestrosservicios">Nuestros servicios</a></li>
				   <li><a href="services.php#cobranzaadministraticaextrajudicial">Cobranza Administrativa o Extrajudicial</a></li>
				   <li><a href="services.php#procesolegal">Proceso Legal</li>
				   <li><a href="services.php#cobranzas">Cobranza Preventiva</a></li>
				</ul>
			 </div>
			 <div class="col-xs-6 col-md-3">
				<h6>Enlaces rapidos</h6>
				<ul class="footer-links">
				   <li><a href="about.php#informacionaboutus">¿Quiénes Somos?</a></li>
				   <li><a href="contact.php">Contacto</a></li>
				   <li><a href="assets/docs/AvisoDePrivacidad-FAORVIGA.pdf"  target="_blank">Aviso de Privacidad</a></li>
				</ul>
				<BR>
			 </div>
		  </div>
		  <hr>
	   </div>
	   <div class="container">
		  <div class="row">
			 <div class="col-md-8 col-sm-6 col-xs-12">
				<br>
				<p class="copyright-text">Copyright &copy; 2022 <a href="index.php">FAORVIGA </a>  
				</p>
			 </div>
			 <div class="col-md-4 col-sm-6 col-xs-12">
				<br>
				<ul class="social-icons">
				   <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
				   <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
				   <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
				   <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			 </div>
		  </div>
	   </div>
	</footer>
  	 ';
  }

}
?>