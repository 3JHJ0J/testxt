<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuario</title>
	<meta>
</head>
<body>
	<main>
		<form action="" class="formulario" id="formulario">
			<!-- grupo usuario-->
			<div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario "class="formulario__label">Usuario</label>
					<div class="fotmilario__grupo-input">
						<input type="email"class="formulario__input" name="usuario" id="usuario" placeholder="ejemplo@gmail.com">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__validacion-error">el usuario tiene que ser un correo electronico valido</p>
			</div>

			<!-- grupo nombre-->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre "class="formulario__label">Nombre</label>
					<div class="fotmilario__grupo-input">
						<input type="text"class="formulario__input" name="nombre" id="nombre" placeholder="ingrese su nombre">
						<i class="formulario__validacion-estado fas fa-times-circle" ></i>
					</div>
					<p class="formulario__validacion-error">el nombre no debe llevar numero</p>
			</div>

			<!-- grupo password-->
			<div class="formulario__grupo" id="grupo__password">
				<label for="password "class="formulario__label">Contraseña</label>
					<div class="fotmilario__grupo-input">
						<input type="password"class="formulario__input" name="password" id="password" placeholder="ingrese su contraseña">
						<i class="formulario__validacion-estado fas fa-times-circle" ></i>
					</div>
					<p class="formulario__validacion-error">la contraseña debe tener de 4 a 12 digitos</p>
			</div>

			<!-- grupo pasword2-->
			<div class="formulario__grupo" id="grupo__password">
				<label for="password2"class="formulario__label">Repetir Contraseña</label>
					<div class="formulario__grupo-input">
						<input type="password"class="formulario__input" name="password2" id="password2" placeholder="ingrese su contraseña">
						<i class="formulario__validacion-estado fas fa-times-circle" ></i>
					</div>
					<p class="formulario__validacion-error">las contraseña deben ser iguales</p>
			</div>

			<!-- grupo correo Electronico-->
			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo"class="formulario__label">Correo Electronico</label>
					<div class="fotmilario__grupo-input">
						<input type="email"class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
						<i class="formulario__validacion-estado fas fa-times-circle" ></i>
					</div>
					<p class="formulario__validacion-error">El correo solo puede tener letras, numeros, puntos, guiones y guion bajo</p>
			</div>

			<!-- grupo telefono-->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="telefono"class="formulario__label">Telefono</label>
					<div class="fotmilario__grupo-input">
						<input type="email"class="formulario__input" name="telefono" id="telefono" placeholder="0000-0000">
						<i class="formulario__validacion-estado fas fa-times-circle" ></i>
					</div>
					<p class="formulario__validacion-error"></p>
			</div>
		</form>
	</main>
	<script src="js/formulario.js"></script>
	<script src="https://kit.fortawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>