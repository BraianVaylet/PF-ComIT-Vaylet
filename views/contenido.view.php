<?php require(RAIZ . '/views/head.php');
			require(RAIZ . '/views/barra_nav.php');?>

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
												<p>en WolaloW desde: <?php echo $fecha_ingreso; ?></p>
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
	 						 <div class="modal-content formulario_contacto">
	 							 <?php require(RAIZ . 'formulario_contacto_vistas.php'); ?>
	 						 </div>
	 						 <div class="box_compra_vistas">
	 							 <img src="<?php echo RUTA; ?>/img/mplogo.png" alt="imagen de mercadopago">
	 						 </div>
	 						 <div class="box_compra_vistas">
	 							 <h6>Recibirás a tu casilla de correos un link de mercado pago para realizar la compra</h6>
	 						 </div>
							 	<img src="<?php echo RUTA; ?>/img/mini_logo.jpg" width="200" alt="imagen de wolalow.com">
	 					 </div>

							<div class="info z-depth-3">
								<ul class="collection with-header">
									<li class="collection-item">
										<div class="flex_ico">
											<div class="icono">
												<i class="material-icons">contact_mail</i>
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
													?> <i class="material-icons">contact_phone</i> <?php
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
												<i class="material-icons">home</i>
											</div>
											<div class="">
												<p class="texto">de <?php echo $ciudad; ?></p>
											</div>
										</div>
									</li>

									<li class="collection-item">
										<div class="flex_ico">
											<div class="icono">
												<i class="material-icons">cake</i>
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
																<i class="material-icons">directions_bike</i>
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
																<i class="material-icons">local_shipping</i>
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
															<i class="material-icons">access_time</i>
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
															<i class="material-icons">directions_car</i>
														</div>
														<div class="">
															Sobre mi Vehículo:<p class="texto"><?php echo $tipo; ?></p>
														</div>
													</div>
												</li>

												<li class="collection-item">
													<div class="flex_ico">
														<div class="icono">
															<i class="material-icons">work</i>
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

	<?php require(RAIZ . '/views/footer.php');
				require(RAIZ . '/views/script.php');
				if (session()): ?>
					<script src="<?php echo RUTA; ?>/js/misArchivos/contenido_cerrar.js" charset="utf-8"></script>
	<?php endif ?>
	</body>
	</html>
