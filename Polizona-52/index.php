<html>
	<head>
		<Title>empresa individual de José Ángel Acatitla González </Title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    	<link href="bootstrap.min.css">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
		<meta charset = "utf-8">
	</head>
	<style>
	body, html{
          background-position: center-center;
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center center;
          font-family: "Poppins";
          background-color:#38AF79;
      }

		h2 {
			text-align:center;
			font-weight: bold;  
		}

		select{
			font-size:11px;
		}

		.barra{
			width:20rem; 
		}
			
	</style>
		<body>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 align-self-center text-center p-4">
						<h1>José Ángel Acatitla González</h1>
						<!--<h2>Este es un ejemplo de como subir los archivos desde git bash</h2> -->
							<form action="misprocesos.php" method="get">
								<label>Mi modelo de negocio consta de los siguientes procesos</label><br><br>
								Selecciona el proceso que deseas ejecutar:
								<select name="opciones">
									<option value="A"> Clasificación de objetos</option>
									<option value="B"> Agrupación de objetos</option>
									<option value="C"> Cálculo de indicadores</option>
								</select><br><br>
								<input type="submit"/>
							</form>
							<br>
							<form action="funcion.php" method="get">
							<button type="submit">Función</button>
							</form>
							<br>
					</div>
				</div>	
			</div>
		</body>
</html>