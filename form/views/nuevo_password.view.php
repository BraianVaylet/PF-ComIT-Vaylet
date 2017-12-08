<?php require(RAIZ . '/views/head.php');
			require(RAIZ . '/views/barra_nav.php');?>

			<main class="z-depth-3">
					<div class="contenedor">
						<h1 class="titulo">Restaurar Contraseña</h1>

						<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login" id="formulario">
								<div class="row dos_campos">
	                <div class="input-field col s12 m12 l6 offset-l3">
												<h4 for="correo" class="label_textarea" data-error="incorrecto, vuelva a intentarlo" data-success="perfecto, gracias">Ingrese su correo: </h4>
												<input type="email" name="correo" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese su correo electrónico" id="correo" value="<?php if(!$enviado && isset($correo)) { echo $correo; }?>">
												<!-- ERROR -->
												<?php if(!empty($error_correo)): ?>
                          <p class="texto_error" id="error_correo"><?php echo $error_correo; ?></p>
                        <?php endif; ?>
										</div>
								</div>

								<div class="row dos_campos">
	                <div class="input-field col s12 m12 l6 offset-l3">
												<h4 for="password" class="label_textarea" >Ingrese su nueva contraseña: </h4>
												<input type="password" name="password" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese su contraseña" id="password">
												<!-- ERROR -->
												<?php if(!empty($error_password)): ?>
                          <p class="texto_error" id="error_password"><?php echo $error_password; ?></p>
                        <?php endif; ?>
										</div>
								</div>

								<button class="btn waves-effect waves-light" type="submit" id="submit" class="submit" name="button">Enviar<i class="material-icons right">send</i></button>

									<!-- MUESTRO ERRORES DE PHP -->
									<?php if(!empty($errores)): ?>
										<div class="box_mensaje_error">
											<ul>
												<p class="error"><?php echo $errores; ?></p>
											</ul>
										</div>
									<?php endif; ?>
						</form>

						<div class="back">
								<a class="link_back" href="<?php echo RUTA; ?>/form/login.php">volver</a>
						</div>
