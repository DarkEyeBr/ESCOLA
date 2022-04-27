<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Cadastro</title>
		<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
				<h1 class="title">Cadastro de Clientes</h1>
        <form action="index.php" method="POST">
						<div class="wrapper">
							<div class="form-group">
								<label for="nome">Nome</label>
								<input type="text" id="nome" name="nome" required>
							</div>
							
							
							<div class="form-group">
								<label for="data">Data de Nascimento</label>
								<input type="date" id="data" name="data_nasc" required>
							</div>
	
	
							<div class="form-group">	
								<label for="celular">Celular</label>
								<input type="tel" name="celular" id="celular" placeholder="(19) 99999-9999" required>
							</div>
	
	
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" id="email" required>
							</div>
	
	
							<div class="form-group">
								<label for="rua">Rua</label>
								<input type="text" id="rua" name="rua" required>
							</div>
	
	
							<div class="form-group">	
								<label for="numero">Número</label>
								<input type="text" id="numero" name="numero" required>
							</div>
	
	
							<div class="form-group">
								<label for="bairro">Bairro</label>
								<input type="text" id="bairro" name="bairro" required>
							</div>
	
	
							<div class="form-group">			
								<label for="cep">CEP</label>
								<input type="text" id="cep" name="cep" required>
							</div>
	
	
							<div class="form-group">	
								<label for="cidade">Cidade</label>
								<input type="text" id="cidade" name="cidade" required>
							</div>
	
	
							<div class="form-group">						
								<label for="estado">Estado</label>
								<select name="estado" id="estado">
									<option value="" selected disabled>Escolha seu estado</option>
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="ES">Espírito Santo</option>
									<option value="GO">Goiás</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraíba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="SC">Santa Catarina</option>
									<option value="SP">São Paulo</option>
									<option value="SE">Sergipe</option>
									<option value="TO">Tocantins</option>
								</select>
							</div>
					
	
							<div class="form-group btns">			
								<input type="submit" value="Enviar">
								<input type="reset" value="Limpar">
							</div>
						</div>
			</form>
    </div>
</body>
</html>

<?php

	require_once "conexao.php";

	if ($_POST) {
		$nome = $_POST['nome'];
		$data_nasc = $_POST['data_nasc'];
		$celular = $_POST['celular'];
		$email = $_POST['email'];
		$rua = $_POST['rua'];
		$numero = $_POST['numero'];
		$bairro = $_POST['bairro'];
		$cep = $_POST['cep'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];

		$sql = " insert into cliente (nome, data_nasc, celular, email, rua, numero, bairro, cep, cidade, estado)  
		values ('$nome' , '$data_nasc',  '$celular', '$email', '$rua', '$numero', '$bairro', '$cep', '$cidade' , '$estado')";

		$result = mysqli_query($conexao,$sql);
		if ($result) {
	    echo "Cliente cadastrado com sucesso !!!";
		} else {
	    echo "Ocorreu um erro";
		}
	}
?>