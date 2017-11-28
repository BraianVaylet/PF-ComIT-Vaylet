	<?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\head.php'; ?>
	<?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\barra_nav.php'; ?>

		<!-- ESTE ES EL PERFIL COMPLETO DE CADA USUARIO. -->
			<main class="z-depth-3">
				<div class="contenedor">

					<div class="row ">
						<div class="col s12 m12 l4">

							<div class="sec1 z-depth-3">
								<div class="perfil_top">
										<div class="perfil_usuario">
												<h1 class="titulo_perfil">Bienvenido</h1>
												<h2 class="titulo_perfil"><?php echo $usuario; ?></h2>
												<li class="collection-item">
													<div class="box_calificacion">
														<?php for ($i=0; $i < $calificacion; $i++) { ?>
															<i class="small material-icons calificacion">grade</i>
														<?php	} ?>
													</div>
												</li>
										</div>
										<div class="perfil_foto">
												<img src="<?php echo RUTA; ?>/fotos_perfiles/<?php echo $foto_perfil; ?>" class="responsive-img circle z-depth-3 foto_perfil" alt="IMAGEN DE PERFIL">
										</div>
										<div class="">
												<p>en WololoW desde: <?php echo $fecha_ingreso; ?></p>
										</div>
								</div>
							</div>

							<div class="z-depth-3">
								<ul class="collection with-header">
									<li class="collection-item">
										<!-- TRABAJO LAS VIDAS -->
										<div class="">
											<?php if ($vidas !== 0 and $vidas < 11) { ?>
													<?php for ($i=0; $i < $vidas; $i++) { ?>
														 <i class="small material-icons vidas">visibility</i>
													<?php	} ?>

													<?php for ($j=$vidas; $j < 10; $j++) { ?>
														 <i class="small material-icons vidas_no">visibility_off</i>
													<?php	} ?>
											<?php } ?>
											<?php if ($vidas == 0 ) { ?>
														<p class="texto">¡No te quedan más vistas!</p><p>¿Necesitas más vistas?</p>
														<a class="modal-trigger" href="#modal_contacto_vistas"><i class="medium material-icons mas_vistas">add_circle</i></a>
											<?php } ?>
										</div>
									</li>
								</ul>
							</div>

							<!-- MENU CONTACTO PARA + VISTAS: -->
	            <!-- Modal Structure -->
	            <div id="modal_contacto_vistas" class="modal">
	              <div class="modal-content">
	                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="contacto">
	                  <div class="row vistas_titulo">
											<div class="col s8 offset-s2 ">
		                      <h4 class="titulo_pregunta">Contacto:</h4>
													<h6>Para conseguir mas vistas complete el siguiente formulario</h6>
		                  </div>
	                  </div>

	                  <div class="row">
	  									<div class="col s6 offset-s3">
	                      <label class="label_textarea" for="dni">DNI *</label>
	                      <input type="text" name="dni" placeholder="Ingrese su numero de documento." class="campo tooltipped" data-position="right" data-delay="50" data-tooltip="Ingrese su número de documento" id="dni">
	  									</div>
	                  </div>

	                  <div class="row">
	    								<div class="col s6 offset-s3">
	    										<label for="correo" class="label_textarea" data-error="incoorecto, vuelva a intentarlo" data-success="perfecto,gracias">Correo * </label>
	    										<input type="email" name="correo" placeholder="Ingrese su correo." class="campo tooltipped" data-position="right" data-delay="50" data-tooltip="Ingresesu correo electrónico" id="correo">
	                  </div>

										<div class="row">
	  									<div class="col s8 offset-s2">
												<div class="registro_check">
													<div class="row check tooltipped" data-position="bottom" data-delay="50" data-tooltip="Seleccione una de las opciones.">
															<div class=" flex_radio">
																	<div class="radio_btn">
																		<input type="radio" class="radio" name="vistas" id="opc_1" />
																		<label class="label_radio_btn" for="opc_1">5 Vistas por $75.00</label>
																	</div>
																	<div class="radio_btn">
																		<input type="radio" class="radio" name="vistas" id="opc_2" />
																		<label class="label_radio_btn" for="opc_2">10 Vistas por $150.00</label>
																	</div>
															</div>
															<!-- ERROR -->
															<p class="texto_error" id="error_checkbox"></p>
													</div>
												</div>
	  									</div>
	                  </div>
	                </form>
									<div class="">
										<div class="box_compra_vistas">
											<img src="<?php echo RUTA; ?>/img_pagina/mplogo.png" alt="imagen de mercadopago">
										</div>
										<div class="box_compra_vistas">
											<h6>Recibirás a tu casilla de correos un link de mercado pago para realizar la compra</h6>
										</div>
										<div class="box_compra_vistas">
											<button class="btn waves-effect waves-light" type="submit" id="submit" class="submit" name="button">Enviar<i class="material-icons right">send</i></button>
										</div>
									</div>
	              </div>
	            </div>
	            </div>

							<div class="info z-depth-3">
								<ul class="collection with-header">
									<li class="collection-item">
										<div class="flex_ico">
											<div class="icono">
												<i class="medium material-icons">contact_mail</i>
											</div>
											<div class="">
												<p class="texto"><?php echo $correo; ?></p>
											</div>
										</div>
									</li>

									<li class="collection-item">
										<div class="flex_ico">
											<div class="icono">
												<?php if ($whatsapp == 1) {
														?> <i class="fa fa-whatsapp fa-4x" aria-hidden="true"></i><?php
												} else {
													?> <i class="medium material-icons">contact_phone</i> <?php
												}?>
											</div>
											<div class="">
												<p class="texto"><?php echo $telefono; ?></p>
											</div>
										</div>
									</li>

									<li class="collection-item">
										<div class="flex_ico">
											<div class="icono">
												<i class="medium material-icons">home</i>
											</div>
											<div class="">
												<p class="texto">de <?php echo $ciudad; ?></p>
											</div>
										</div>
									</li>

									<li class="collection-item">
										<div class="flex_ico">
											<div class="icono">
												<i class="medium material-icons">cake</i>
											</div>
											<div class="">
												<p class="texto"><?php echo $fecha_nacimiento; ?></p>
											</div>
										</div>
									</li>
								</ul>
							</div>

							<div class="info z-depth-3">
								<ul class="collection with-header">
									<li class="collection-header"><h4>Servicios:</h4></li>
									<li class="collection-item">
											<div class="flex_ico">
												<?php
														if ($soy_cadete == 1) { ?>
															<div class="icono">
																<i class="medium material-icons">directions_bike</i>
															</div>
															<div>
																<p class="texto">$<?php echo $monto_cadeterias; ?></p>
																<p><?php echo $modo_monto_cadete; ?></p>
															</div>
													<?php } ?>
											</div>
									</li>

									<li class="collection-item">
											<div class="flex_ico">
												<?php
														if ($soy_flete == 1) { ?>
															<div class="icono">
																<i class="medium material-icons">local_shipping</i>
															</div>
															<div>
																<p class="texto">$<?php echo $monto_fletes; ?></p>
																<p><?php echo $modo_monto_flete; ?></p>
															</div>
													<?php } ?>
											</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="col s12 m12 l8">
							<div class="sec2">
									<div class="perfil_titulo">
										<h2 class="titulo">Tu Perfil</h2>
									</div>
									<div class="z-depth-3">
										<ul class="collection with-header info1">

												<li class="collection-item">
													<div class="flex_ico">
														<div class="icono">
															<i class="medium material-icons">access_time</i>
														</div>
														<div class="">
															<?php if ($am == 1 && $pm == 0) {
																?>
																	<p class="texto">Solo de mañana</p>
																<?php
															}  ?>
															<?php if ($am == 0 && $pm == 1) {
																?>
																	<p class="texto">Solo de tarde</p>
																<?php
															}  ?>
															<?php if ($am == 1 && $pm == 1) {
																?>
																	<p class="texto">de mañana y de tarde</p>
																<?php
															}  ?>
														</div>
													</div>
												</li>

												<li class="collection-item">
													<div class="flex_ico">
														<div class="icono">
															<i class="medium material-icons">directions_car</i>
														</div>
														<div class="">
															Sobre mi Vehículo:<p class="texto"><?php echo $tipo; ?></p>
														</div>
													</div>
												</li>

												<li class="collection-item">
													<div class="flex_ico">
														<div class="icono">
															<i class="medium material-icons">view_compact</i>
														</div>
														<div class="">
															Capacidad:<p class="texto"><?php echo $capacidad; ?></p>
														</div>
													</div>
												</li>

												<li class="collection-item">
													<div class="flex_ico">
														<div class="icono">
															<i class="medium material-icons">work</i>
														</div>
														<div class="">
															Algunos de mis Trabajos:<p class="texto"><?php echo $trabajos; ?></p>
														</div>
													</div>
												</li>
											</ul>
										</div>

										<div class="info z-depth-3">
											<ul class="collection with-header">
												<li class="collection-header"><h4>Acerca de mis servicios:</h4></li>
								        <li class="collection-item"><div>Distancia Mínima:<p class="texto"><?php echo $dist_min; ?> km</p><a class="secondary-content"></a></div></li>
								        <li class="collection-item"><div>Distancia Máxima:<p class="texto"><?php echo $dist_max; ?> km</p><a class="secondary-content"></a></div></li>
												<li class="collection-item"><div>Peso Máximo:<p class="texto"><?php echo $peso_max; ?> kg</p><a class="secondary-content"></a></div></li>
								        <li class="collection-item">
													<div>
														<?php if ($dist_trabajo == 1) {
															?>
																<p class="texto">Realizo trabajos fuera de <?php echo $ciudad; ?></p>
															<?php
														} else {
																 ?>
	 																<p class="texto">Realizo trabajos únicamente en <?php echo $ciudad; ?></p>
	 															<?php
														}; ?>
													</div>
												</li>

												<li class="collection-item">
													<div>
														<?php if ($encargos == 1) {
															?>
																<p class="texto">Realizo encargos en el día</p>
															<?php
														} else {
																 ?>
	 																<p class="texto">Solo realizo encargos con previa anticipación</p>
	 															<?php
														}; ?>
													</div>
												</li>

							      </ul>
									</div>
							</div>
					</div>

					<div class="col s12 m12 l12">
						<div class="sec2">
								<div class="info z-depth-3">
									<ul class="collection with-header">
											<li class="collection-header"><h4>Más Información: </h4></li>
											<li class="collection-item"><div><p class="texto"><?php echo $extracto; ?></p><a href="#!" class="secondary-content"></a></div></li>
									</ul>
								</div>
						</div>
						<div class="btn_delet_mod">
							<a href="editar_contenido.php" class="btn z-depth-3 mod ">Editar datos</a>
							<a href="#" class="btn z-depth-3 delet ">Eliminar cuenta</a>
						</div>
				</div>
				
				</div>
			</div>
			</main>

	<?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\footer.php'; ?>
	<?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\script.php'; ?>
	<?php if (session()): ?>
		<script src="<?php echo RUTA; ?>/js/misArchivos/contenido_cerrar.js" charset="utf-8"></script>
	<?php endif ?>


	</body>
	</html>
