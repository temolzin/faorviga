<!DOCTYPE html>
<html lang="en">
   <?php
    require 'menu.php';
    $menu = new Menu();
   ?>
<head>
	<title>FAORVIGA | Contacto</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="wrap">
	   <div class="container">
		  <div class="row">
			 <div class="col-md-12">
				<div class="bg-wrap">
				   <div class="row">
					  <div class="col-md-6 d-flex align-items-center" >
						 <p class="mb-0 phone pl-md-2">
							<a href="tel:5536586694" class="mr-2"><span class="fa fa-phone mr-1"></span>+52 5536586694</a> 
							<a href="mailto:info@faorviga.com"><span  class="fa fa-paper-plane mr-1"></span> info@faorviga.com</a>
						 </p>
					  </div>
					  <div class="col-md-6 d-flex justify-content-md-end">
						 <div class="social-media">
							<p class="mb-0 d-flex">
							   <a title="Facebook" href="https://www.facebook.com/Faorviga-103726655592845" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							   <a title="Twitter" href="https://twitter.com/FaorvigaM" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							   <a title="Instagram" href="https://www.instagram.com/faorvigamx/" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							</p>
						 </div>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
   <?php
    $menu->header('contact');
   ?>
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	   <div class="overlay"></div>
	   <div class="container">
		  <div class="row no-gutters slider-text align-items-end">
			 <div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Contacto <i class="ion-ios-arrow-forward"></i></span></p>
				<h1 class="mb-0 bread">Contacto</h1>
			 </div>
		  </div>
	   </div>
	</section>
	<section class="ftco-section bg-light">
	   <div class="container">
		  <div class="row justify-content-center">
			 <div class="col-md-12">
				<div class="wrapper">
				   <div class="row no-gutters">
					  <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
						 <div class="contact-wrap w-100 p-md-5 p-4">
							<h3 class="mb-4">¡CONTÁCTANOS!</h3>
							<div id="form-message-warning" class="mb-4"></div>
							<div id="form-message-success" class="mb-4">
							   Mandános mensaje, en breve nos comunicaremos contigo.
							</div>
							<div id="divLoading" name="divLoading" class="col-lg-12 col-xs-12 text-center" style="display: none"></div>
							<div id="divContact">
								<form id="formContact" name="formContact" method="post" role="form" class="contactForm">
								   <div class="row">
									  <div class="col-md-12">
										 <div class="form-group">
											<label class="label" for="name">Nombre Completo(*)</label>
											<input type="text" class="form-control" name="name" id="name">
										 </div>
									  </div>
									  <div class="col-md-6">
										 <div class="form-group">
											<label class="label" for="email">Email(*)</label>
											<input type="email" class="form-control" name="email" id="email">
										 </div>
									  </div>
									  <div class="col-md-6">
									<div class="form-group">
										<label class="label" for="telefono">Telefono(*)</label>
										<input type="text" class="form-control" name="phonenumber" id="phonenumber" data-inputmask='"mask": "(999) 999-9999"' data-mask>
									</div>
									</div>
									  <div class="col-md-12">
										 <div class="form-group">
											<label class="label" for="subject">Asunto(*)</label>
											<input type="text" class="form-control" name="subject" id="subject">
										 </div>
									  </div>

									  <div class="col-md-12">
										 <div class="form-group">
											<label class="label" for="message">Mensaje(*)</label>
											<textarea class="form-control" name="message" id="message" cols="30" rows="6"></textarea>
										 </div>
									  </div>
									  <div class="col-md-12">
										 <div class="form-group">
											<div class="text-center"><button type="submit"  class="btn btn-primary">Envíar Mensaje</button></div>
										 </div>
									  </div>
								   </div>
								</form>
							</div>
						 </div>
					  </div>
					  <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
						 <div class="info-wrap bg-primary w-100 p-md-5 p-4">
							<h3>Mantengámonos en contacto</h3>
							<br>
							<div class="dbox w-100 d-flex align-items-start">
							   <div class="icon d-flex align-items-center justify-content-center">
								  <span class="fa fa-map-marker"></span>
							   </div>
							   <div class="text pl-3">
								  <p><span>Dirección:</span> Av. Coyoacan #753 Col. del Valle Alcaldia Benito Juarez C.P. 03100  CDMX</p>
							   </div>
							</div>
							<br>
							<div class="dbox w-100 d-flex align-items-center">
							   <div class="icon d-flex align-items-center justify-content-center">
								  <span class="fa fa-phone"></span>
							   </div>
							   <div class="text pl-3">
								  <p><span>Telefono:</span> <a href="tel:5536586694">+52 5536586694</a></p>
							   </div>
							</div>
							<br>
							<div class="dbox w-100 d-flex align-items-center">
							   <div class="icon d-flex align-items-center justify-content-center">
								  <span class="fa fa-paper-plane"></span>
							   </div>
							   <div class="text pl-3">
								  <p><span>Email:</span> <a href="mailto:info@faorviga.com"> info@faorviga.com</a></p>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</section>
   <?php
    $menu->footer();
   ?>
	
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="plugins/inputmask/jquery.inputmask.min.js"></script>

    <script>
		$(window).on('beforeunload', function(){
			$(window).scrollTop(0);
		});
		$('[data-mask]').inputmask();
	</script>
	<script>
		$(document).ready(function () {
		  enviarFormulario();
		});
  
		var enviarFormulario = function () {
		  $.validator.setDefaults({
			submitHandler: function () {
			  var datos = $('#formContact').serialize() + "&action=sendemail";
			  $('#divContact').hide();
			  $('#divLoading').show();
			  $('#divLoading').html('<br><br><br><br><br><img src="assets/img/loading_2.gif" class="img-fluid img-responsive"><br><br><br><br><br><br><br><br><br>');
			  $.ajax({
				type: "POST",
				url: "functions/controller/emailController.php",
				data: datos,
				success: function(data){
				  console.log(data);
				  $('#divContact').show();
				  $('#divLoading').hide();
				  if(data == 'okok') {
					Swal.fire(
					  "Éxito!",
					  "El mensaje se envío correctamente",
					  "success"
					  );
					$(":text").each(function(){ 
					  $($(this)).val('');
					});
					$('#message').val('');
					$('#phonenumber').val('');
					$('#email').val('');
				  } else {
					Swal.fire(
					  "¡Error!",
					  "Ha ocurrido un error al envíar el correo, intentalo nuevamente. <br>" + data,
					  "error"
					  );
				  }
				},
			  });
			}
		  });
		  $('#formContact').validate({
			rules: {
			  name: {
				required: true
			  },
			  email: {
				required: true,
				email: true
			  },
			  phonenumber: {
				required: true
			  },
			  subject: {
				required: true
			  },
			  message : {
				required: true
			  }
			},
			messages: {
			  name: {
				required: "<p align='center' class='text-danger'> Campo obligatorio: Ingresa un nombre</p>"
			  },
			  email: {
				required: "<p align='center' class='text-danger'> Campo obligatorio: Ingresa un email</p>",
				email: "<p align='center' class='text-danger'> El email no es válido</p>"
			  }, 
			  phonenumber: {
				required: "<p align='center' class='text-danger'> Campo obligatorio: Ingresa un número de teléfono</p>"
			  },
			  subject: {
				required: "<p align='center' class='text-danger'> Campo obligatorio: Ingresa el asunto del mensaje</p>"
			  },
			  message: {
				required: "<p align='center' class='text-danger'> Campo obligatorio: Ingresa el mensaje</p>",
			  }
			},
			errorElement: 'span',
			errorPlacement: function (error, element) {
			  error.addClass('invalid-feedback');
			  element.closest('.form-group').append(error);
			},
			highlight: function (element, errorClass, validClass) {
			  $(element).addClass('is-invalid');
			},
			unhighlight: function (element, errorClass, validClass) {
			  $(element).removeClass('is-invalid');
			}
		  });
		}
	  </script>

</body>
</html>