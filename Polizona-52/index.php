<html lang="es">
	<head>
		<Title>empresa individual de José Ángel Acatitla González </Title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    	<link href="bootstrap.min.css">
		<meta charset = "UTF-8">
	</head>
	<style>
	body{
          background-color: #38AF79;
		  text-align: center;
	}
	form {
    display: inline-block;
	margin: 50px;
	align: "center";
	}
	</style> 
	<body>
		<div class="container">
				<div class="row align-items-center">
					<div class="col-12 align-self-center text-center p-4">
						<h1>José Ángel Acatitla González</h1>
						<h2>Diseño de Sistemas.</h2>
						<h2>2CM32</h2>
						<br>
						<div class="row container my-4">
							<form class="mx-50px" action="general_data.html" method="get">
								<button type="submit">Datos Generales</button>
							</form>
							<form action="funcion.php" method="get">
								<button type="submit">Función</button>
							</form>
							<form action="elements.html" method="get">
								<button type="submit">Ejemplo Elementos de objetos</button>
							</form>
							<form action="empresa.php" method="get">
								<button type="submit">Consulta de Industria</button>
							</form>
							<br>
					
						</div>
						<div class ="row text-center">
							<form action="asiento.php" method="post">
								<fieldset>
								<legend> Ingrese Asiento </legend>
								<p>
								<label>Empresa:
								<input type="int" name="idempresa" />
								</label>
								</p>
								<p>
								<label>Asiento: 
								<input type="int" name="idasiento" />
								</label>
								</p>
								<p>
								<label> Monto:  
								<input type="decimal" name="monto" />
								</label>
								</p>
								<p>
								<input type="submit" value="enviar"/>
								</p>
								</fieldset>
							</form>

							<form action="cargo.php" method="post">
								<fieldset>
								<legend> Ingrese Cargo </legend>
								<p>
								<label>Empresa:
								<input type="int" name="idempresa" />
								</label>
								</p>
								<p>
								<label>Asiento: 
								<input type="int" name="idasiento" />
								</label>
								</p>
								<p>
								<label>Cargo: 
								<input type="int" name="idcargo" />
								</label>
								</p>
								<p>
								<label>Cuenta: 
								<input type="int" name="idcuenta" />
								</label>
								</p>
								<p>
								<label> Monto:  
								<input type="decimal" name="monto" />
								</label>
								</p>
								<p>
								<input type="submit" value="enviar"/>
								</p>
								</fieldset>
							</form>

							<form action="abono.php" method="post">
								<fieldset>
								<legend> Ingrese Abono </legend>
								<p>
								<label>Empresa:
								<input type="int" name="idempresa" />
								</label>
								</p>
								<p>
								<label>Asiento: 
								<input type="int" name="idasiento" />
								</label>
								</p>
								<p>
								<label>Abono: 
								<input type="int" name="idabono" />
								</label>
								</p>
								<p>
								<label>Cuenta: 
								<input type="int" name="idcuenta" />
								</label>
								</p>
								<p>
								<label> Monto:  
								<input type="float" name="monto" />
								</label>
								</p>
								<p>
								<input type="submit" value="enviar"/>
								</p>
								</fieldset>
							</form>

						</div>
					</div>
				</div>	
			</div>
	</body>
</html>