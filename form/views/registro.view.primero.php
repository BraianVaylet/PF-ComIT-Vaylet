	<?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\head.php'; ?>
	<?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\barra_nav.php'; ?>
			<main class="z-depth-3">
					<div class="contenedor">
										<h1 class="titulo">Registro 1 de 3</h1>

										<div class="pregunta">
												<p class="texto_small">Bienvenido a WolaloW, nos pone muy contento que quieras formar parte de nosotros!!!</p>
												<h4 class="titulo_pregunta">A continuación, vamos a necesitar algunos datos para completar su registro</h4>
										</div>

										<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario col" name="login" enctype="multipart/form-data" id="formulario"> <!--enctype="multipart/form-data" : para q el form pueda subir archivos -->

												<!-- DATOS PERSONALES ==============================================================================-->
												<div class="row dos_campos">
														<div class="input-field col s12 m12 l6">
																<h4 class="label_textarea" for="usuario">¿Cuál es tu nombre y apellido? *</h4>
																<input type="text" name="usuario" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese su nombre y luego separado por un espacio su apellido" id="usuario" value="<?php if(!$enviado && isset($usuario)) { echo $usuario; }?>">
																<!-- ERROR -->
																<?php if(!empty($error_usuario)): ?>
						                      <p class="texto_error" id="error_usuario"><?php echo $error_usuario; ?></p>
						                    <?php endif; ?>
														</div>

														<div class="input-field col s12 m12 l6">
																<h4 class="label_textarea" for="correo">¿Cuál es su correo electrónico? *</h4>
																<input type="email" name="correo" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese su casilla de correos para poder ser contactado" id="correo" value="<?php if(!$enviado && isset($correo)) { echo $correo; }?>">
																<!-- ERROR -->
																<?php if(!empty($error_correo)): ?>
						                      <p class="texto_error" id="error_correo"><?php echo $error_correo; ?></p>
						                    <?php endif; ?>
														</div>
												</div>

												<div class="row dos_campos">
														<div class="input-field col s12 m12 l6">
																<h4 class="label_textarea" for="password">Ingrese una contraseña *</h4>
																<input type="password" name="password" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese una contraseña para su cuenta" id="password" placeholder="mínimo 6 caracteres con letras y números.">
																<!-- ERROR -->
																<?php if(!empty($error_password)): ?>
						                      <p class="texto_error" id="error_password"><?php echo $error_password; ?></p>
						                    <?php endif; ?>
														</div>

														<div class="input-field col s12 m12 l6">
																<h4 class="label_textarea" for="password2">Verificar contraseña *</h4>
																<input type="password" name="password2" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Solo para verificar, vuelva a ingresar la contraseña" id="password2">
																<!-- ERROR -->
																<?php if(!empty($error_password2)): ?>
						                      <p class="texto_error" id="error_password2"><?php echo $error_password2; ?></p>
						                    <?php endif; ?>
														</div>
												</div>

												<div class="row dos_campos">
														<div class="input-field col s12 m12 l4">
																<h4 class="label_textarea" for="telefono">¿Cuál es su número de teléfono? *</h4>
																<input type="text" name="telefono" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese su numero de teléfono para poder ser contactado por los usuarios" value="<?php if(!$enviado && isset($telefono)) { echo $telefono; }?>">
																<!-- ERROR -->
																<?php if(!empty($error_telefono)): ?>
						                      <p class="texto_error" id="error_telefono"><?php echo $error_telefono; ?></p>
						                    <?php endif; ?>
														</div>

														<div class="col s12 m12 l2">
																<input type="checkbox" name="whatsapp" class="" id="whatsapp">
																<label class="label_textarea campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Seleccione esta casilla si utiliza whatsapp para comunicarse con sus clientes" for="whatsapp">usas whatsapp?</label>
														</div>
														<div class="input-field col s12 m12 l6">
																<h4 class="label_textarea" for="dni">¿Cuál es su número de documento? *</h4>
																<input type="text" name="dni" class="campo tooltipped" id="dni" data-position="bottom" data-delay="50" data-tooltip="Ingrese su numero de DNI" value="<?php if(!$enviado && isset($dni)) { echo $dni; }?>">
																<!-- ERROR -->
																<?php if(!empty($error_dni)): ?>
						                      <p class="texto_error" id="error_dni"><?php echo $error_dni; ?></p>
						                    <?php endif; ?>
														</div>
												</div>

												<div class="row un_campo">
														<div class="input-field col s12 m12 l6 offset-l3">
																<h4 class="label_textarea">¿En qué fecha naciste? *</h4>
																<input type="text" name="fecha_nacimiento" class="datepicker campo tooltipped" data-position="right" data-delay="50" data-tooltip="Ingrese su fecha de nacimiento" id="fecha_nacimiento" value="<?php if(!$enviado && isset($fecha_nacimiento)) { echo $fecha_nacimiento; }?>">
																<!-- ERROR -->
																<?php if(!empty($error_fecha_nacimiento)): ?>
						                      <p class="texto_error" id="error_fecha_nacimiento"><?php echo $error_fecha_nacimiento; ?></p>
						                    <?php endif; ?>
														</div>
												</div>

												<!-- FOTO ==============================================================================-->
												<div class="row un_campo">
													<div class="col s12 m12 l6 offset-l3">
															<div class="file-field input-field">
														      <div class="btn">
																			<span>Foto perfil</span>
																			<input type="file" name="foto_perfil" class="campo tooltipped" data-position="left" data-delay="50" data-tooltip="Seleccione un foto de su Ordenador o Movil" id="foto_perfil" placeholder="Seleccione una Foto de Perfil"value="<?php if(!$enviado && isset($foto_perfil)) { echo $foto_perfil; }?>">
														      </div>
														      <div class="file-path-wrapper">
														        	<input class="file-path validate" type="text">
														      </div>
													    </div>
													</div>
												</div>

												<!-- CIUDAD ==============================================================================-->
												<h4 class="label_textarea">Seleccione su ciudad *</h4>
												<div class="row un_campo">
													<div class="col s12 m12 l6">
				                      <div class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Seleccione su ciudad">
																<select class="icons" id="ciudad" name="ciudad[]">
					                          <option value="" disabled selected></option>
					                          <option value="Bahia Blanca">Bahía Blanca</option>
																		<option value="Punta Alta">Punta Alta</option>
																		<option value="Buenos Aires">Buenos Aires</option>
																		<option value="La Plata">La Plata</option>
																		<option value="Sierra de la Ventana">Sierra de la Ventana</option>
																		<option value="Villa Ventana">Villa Ventana</option>
																		<option value="Monte Hermosos">Monte Hermosos</option>
					                      </select>
																<!-- ERROR -->
																<?php if(!empty($error_ciudad)): ?>
						                      <p class="texto_error" id="error_ciudad"><?php echo $error_ciudad; ?></p>
						                    <?php endif; ?>
				                      </div>
				                  </div>
													<div class="col s12 m12 l6">
														<div class="mensaje_admin z-depth-3">
															<p>Hola!, soy el Administrador...</p>
															<p>Si la ciudad que quiere ingresar no se encuentra no se preocupe, utilice el botón de contacto en la parte superior derecha para avisarnos y poder agregarla a nuestra base de datos.</p>
															<p>Muchas gracias!!!</p>
														</div>
													</div>
												</div>

												<!-- SERVICIOS ==============================================================================-->
												<div class="pregunta">
														<h4 class="titulo_pregunta">¿Qué tipos de servicios realiza? *</h4>
												</div>

												<div class="registro_check">
													<div class="row check tooltipped" data-position="bottom" data-delay="50" data-tooltip="Seleccione el/los servicios que usted realiza">
															<div class="col s12 m12 l4 offset-l5">
																	<input type="checkbox" class="checkbox" name="soy_cadete" id="soy_cadete" />
																	<label for="soy_cadete">Servicios de cadeterías</label>
																	<br>
																	<input type="checkbox" class="checkbox" name="soy_flete" id="soy_flete" />
																	<label for="soy_flete">Servicios de fletes</label>
															</div>
															<!-- ERROR -->
															<?php if(!empty($error_checkbox)): ?>
																<p class="texto_error" id="error_checkbox"><?php echo $error_checkbox; ?></p>
															<?php endif; ?>
													</div>
												</div>

												<button class="btn waves-effect waves-light" type="submit" id="submit" class="submit" name="button">Continuar<i class="material-icons right">arrow_forward</i></button>

												<?php if(!empty($errores)) { ?>
														<div class="error">
																<ul>
																	<?php echo $errores; ?>
																</ul>
															</div>
												<?php } ?>
										</form>

									<div class="texto">
											<p class="texto_small">¿Ya tienes una cuenta?</p>
									</div>
									<div class="reg">
											<a class="link_reg" href="login.php">Iniciar sesión</a>
									</div>
									<div class="back">
											<a class="link_back" href="../index.php">volver</a>
									</div>
					</div>
			</main>
	<?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\footer.php'; ?>
	<?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\script.php'; ?>
	<!-- Se hizo con PHP la validacion del registro -->
	<!-- <script src="<?php echo RUTA; ?>/js/misArchivos/registro_primero.js" charset="utf-8"></script> -->
	</body>
	</html>
