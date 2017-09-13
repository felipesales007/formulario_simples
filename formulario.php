<html>
	<head>
		<title>Formulário</title>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Language" content="pt-br">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#2A3F54">
		<link rel="icon" type="image/png" href="http://icon-icons.com/icons2/807/PNG/512/hospital-1_icon-icons.com_66068.png"/>
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-2.1.0.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<!-- Barra de menu -->
			<div class="navbar-fixed-top">
				<nav class="navbar navbar-default" style="box-shadow:0px 1px 25px #414141;">
					<div class="container">
						<!-- Barra para tela mobile -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobilemenu">
								<span class="sr-only"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<img class="navbar-left hidden-xs" src="http://icon-icons.com/icons2/807/PNG/512/hospital-1_icon-icons.com_66068.png" width="50" height="50">
							<a class="navbar-brand navbar-right"><b>&nbsp;Formulário</b></a>
						</div>
						<div class="collapse navbar-collapse" id="mobilemenu">
							<ul class="nav navbar-nav navbar-right text-center">
							<li><a class="d-inline-block align-top w3-hover-text-blue" href="formulario.php"><i class="fa fa-user"></i><b>&nbsp;Novo</b></a></li>
							<li><a class="d-inline-block align-top w3-hover-text-blue" href="lista.php"><i class="fa fa-list-alt"></i><b>&nbsp;Lista</b></a></li>
							<hr class="visible-xs">
							<li><a class="d-inline-block align-top w3-hover-text-red" href="index.php" title="Logout"><i class="fa fa-power-off"></i><b>&nbsp;Sair</b></a></li>
							</ul>
						</div>
						<!-- /Barra para tela mobile -->
					</div>
				</nav>
			</div>
		<!-- /Barra de menu -->	

		<!-- Corpo -->
			<div>
				<form class="well form-horizontal" action="lista.php">
					<fieldset>
						<!-- Tabela titulo -->
							<legend>
								<center>
									<b>Dados do Paciente</b>
									<h5>Avaliação multiprofissional de saúde</h5>
								</center>
							</legend>
						<!-- /Tabela titulo -->

							<b>
							<a id="contador" href="doc/1.pdf" target="_blank" title="Ajuda">?</a>
							<!-- Nome input -->
								<div class="form-group">
									<label for="nome" class="col-md-4 control-label">Nome</label>  
									<div class="col-md-4 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input required tabindex="1" id="nome" name="nome" placeholder="Digite o nome" class="form-control" type="text">
										</div>
									</div>
								</div>
							<!-- /Nome input -->

							<!-- Matricula input -->
								<div class="form-group">
									<label for="matricula" class="col-md-4 control-label">Matrícula</label> 
									<div class="col-md-4 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
											<input tabindex="2" required id="matricula" name="matricula" placeholder="Digite a matricula" onKeypress="return numeroR(event)" class="form-control" type="text">
										</div>
									</div>
								</div>
							<!-- /Matricula input -->

							<fieldset>
								<legend></legend>
									
									<!-- Novo tipo -->
										<center>
											<table class="table" id="espaco">
												<tr>
													<td>
														<center>
															<b>
																Histórico / Serviço Social
															</b>
														</center>
													</td>
												</tr>
											</table>
										</center>
									<!-- /Novo tipo  -->
									<a id="contador" href="doc/2.pdf" target="_blank" title="Ajuda">?</a>

									<!-- Telefone input -->
										<div class="form-group">
											<label for="telefone" class="col-md-4 control-label">Telefone</label>  
											<div class="col-md-2 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
													<input tabindex="3" id="telefone" name="telefone" placeholder="34052568" onKeypress="return numeroR(event)" class="form-control" type="number">
												</div>
											</div>
										</div>
									<!-- /Telefone input -->

									<!-- Email input -->
										<div class="form-group">
											<label for="email" class="col-md-4 control-label">E-mail</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
													<input tabindex="4" id="email" name="email" placeholder="Digite o E-mail" class="form-control" type="email">
												</div>
											</div>
										</div>
									<!-- /Email input -->

									<!-- Convenio input -->
										<div class="form-group">
											<label for="convenio" class="col-md-4 control-label">Convênio</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
													<input tabindex="5" id="convenio" name="convenio" placeholder="Digite o convenio" class="form-control" type="text">
												</div>
											</div>
										</div>
									<!-- /Convenio input -->

									<center><hr class="style13"></center>

									<!-- Idade input -->
										<div class="form-group">
											<label for="idade" class="col-md-4 control-label">Idade</label>  
											<div class="col-md-2 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
													<input tabindex="6" id="idade" name="idade" placeholder="25" onKeypress="return numeroR(event)" class="form-control" type="number">
												</div>
											</div>
										</div>
									<!-- /Idade input -->

									<!-- Sexo input -->
										<div class="form-group">
											<label for="sexo" class="col-md-4 control-label">Sexo</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='sexo' value="Masculino"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Masculino</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='sexo' value="Feminino"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Feminino</b></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									<!-- /Sexo input -->

									<!-- Cor input -->
										<div class="form-group">
											<label for="cor" class="col-md-4 control-label">Cor</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='cor' value="Branca"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b>  Branca</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='cor' value="Parda"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Parda</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='cor' value="Negra"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Negra</b></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									<!-- /Cor input -->

									<!-- Ensino input -->
										<div class="form-group">
											<label for="ensino" class="col-md-4 control-label">Grau de instrução</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='ensino' value="Fundamental"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b>  Fundamental</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='ensino' value="Médio"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Médio</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='ensino' value="Superior"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Superior</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='ensino' value="Pós graduação"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Pós graduação</b></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									<!-- /Ensino input -->
 							</fieldset>

							<fieldset>
								<legend></legend>
									<!-- Novo tipo -->
										<center>
											<table class="table" id="espaco">
												<tr>
													<td>
														<center>
															<b>
																Situação Laboral
															</b>
														</center>
													</td>
												</tr>
											</table>
										</center>
									<!-- /Novo tipo  -->
									<a id="contador" href="doc/3.pdf" target="_blank" title="Ajuda">?</a>

									<!-- Profissão input -->
										<div class="form-group">
											<label for="profissão" class="col-md-4 control-label">Profissão</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
													<input tabindex="7" id="profissão" name="profissão" placeholder="Digite a profissão" class="form-control" type="text">
												</div>
											</div>
										</div>
									<!-- /Profissão input -->

									<!-- Função input -->
										<div class="form-group">
											<label for="funcao" class="col-md-4 control-label">Função na UNIFACS</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
													<input tabindex="8" id="funcao" name="funcao" placeholder="Digite a função" class="form-control" type="text">
												</div>
											</div>
										</div>
									<!-- /Função input -->

									<!-- Atuante input -->
										<div class="form-group">
											<label for="atuante" class="col-md-4 control-label">Atuante</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='atuante' value="Sim"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b>  Sim</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='atuante' value="Não"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Não</b></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									<!-- /Atuante input -->

									<!-- Tempo input -->
										<div class="form-group">
											<label for="tempo" class="col-md-4 control-label">Tempo na instituição</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
													<input tabindex="9" id="tempo" name="tempo" placeholder="2 anos e 7 meses" class="form-control" type="text">
												</div>
											</div>
										</div>
									<!-- /Tempo input -->

									<center><hr class="style13"></center>

									<!-- Diária input -->
										<div class="form-group">
											<label for="diaria" class="col-md-4 control-label">Carga horária de trabalho</label>  
											<div class="col-md-2 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
													<input tabindex="10" id="diaria" name="diaria" placeholder="8" onKeypress="return numeroR(event)" class="form-control" type="number">
												</div>
											</div>
										</div>
									<!-- /Diária input -->

									<center><hr class="style13"></center>

									<!-- Vinculos input -->
										<div class="form-group">
											<label for="veiculo" class="col-md-4 control-label">Outros vinculos</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='vinculos' value="Sim" ><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Sim</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='vinculos' value="Não"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Não</b></span>
														</label>
													</div>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='modo' value="Formal"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Formal</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='modo' value="Informal"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Informal</b></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									<!-- /Veiculo input -->
							</fieldset>

							<fieldset>
								<legend></legend>
									<!-- Novo tipo -->
										<center>
											<table class="table" id="espaco">
												<tr>
													<td>
														<center>
															<b>
																Composição Familiar
															</b>
														</center>
													</td>
												</tr>
											</table>
										</center>
									<!-- /Novo tipo  -->
									<a id="contador" href="doc/4.pdf" target="_blank" title="Ajuda">?</a>

									<!-- Estado input -->
										<div class="form-group">
											<label for="estado" class="col-md-4 control-label">Estado Cívil</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='estado' value="Solteiro"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Solteiro</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='estado' value="Casado"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Casado</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='estado' value="Viúvo"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Viúvo</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='estado' value="União estável"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> União estável</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='estado' value="Divorciado"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Divorciado</b></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									<!-- /Estado input -->

									<!-- Filhos input -->
										<div class="form-group">
											<label for="filhos" class="col-md-4 control-label">Possui filhos</label>  
											<div class="col-md-2 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
													<input tabindex="11" id="filhos" name="filhos" placeholder="0" onKeypress="return numeroR(event)" class="form-control" type="number">
												</div>
											</div>
										</div>
									<!-- /Filhos input -->

									<!-- Reside input -->
										<div class="form-group">
											<label for="reside" class="col-md-4 control-label">Reside com</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													
													<div id="todos" class="tabcontent">
														<table class="toping">
															<thead>
																<tr>
																	<th class="text-left"><b>Nome</b></th>
																	<th class="text-left"><b>Parentesco</b></th>
																	<th class="text-left"><b>Idade</b></th>
																	<th class="text-left"><b>Profissão</b></th>
																</tr>
															</thead>
															<tr>
																<td><input tabindex="12" id="nome" name="nome" placeholder="Digite o nome" class="form-control" type="text"></td>
																<td><input tabindex="13" id="parentesco" name="parentesco" placeholder="Digite o parentesco" class="form-control" type="text"></td>
																<td><input tabindex="14" id="idade" name="idade" placeholder="Digite a idade" onKeypress="return numeroR(event)" class="form-control" type="text"></td>
																<td><input tabindex="15" id="profissao" name="profissao" placeholder="Digite a profissao" class="form-control" type="text"></td>
															</tr>
															<tr>
																<td><input id="nome" name="nome" placeholder="Digite o nome" class="form-control" type="text"></td>
																<td><input id="parentesco" name="parentesco" placeholder="Digite o parentesco" class="form-control" type="text"></td>
																<td><input id="idade" name="idade" placeholder="Digite a idade" onKeypress="return numeroR(event)" class="form-control" type="text"></td>
																<td><input id="profissao" name="profissao" placeholder="Digite a profissao" class="form-control" type="text"></td>
															</tr>
															<tr>
																<td><input id="nome" name="nome" placeholder="Digite o nome" class="form-control" type="text"></td>
																<td><input id="parentesco" name="parentesco" placeholder="Digite o parentesco" class="form-control" type="text"></td>
																<td><input id="idade" name="idade" placeholder="Digite a idade" onKeypress="return numeroR(event)" class="form-control" type="text"></td>
																<td><input id="profissao" name="profissao" placeholder="Digite a profissao" class="form-control" type="text"></td>
															</tr>
															<tr>
																<td><input id="nome" name="nome" placeholder="Digite o nome" class="form-control" type="text"></td>
																<td><input id="parentesco" name="parentesco" placeholder="Digite o parentesco" class="form-control" type="text"></td>
																<td><input id="idade" name="idade" placeholder="Digite a idade" onKeypress="return numeroR(event)" class="form-control" type="text"></td>
																<td><input id="profissao" name="profissao" placeholder="Digite a profissao" class="form-control" type="text"></td>
															</tr>
															<tr>
																<td><input id="nome" name="nome" placeholder="Digite o nome" class="form-control" type="text"></td>
																<td><input id="parentesco" name="parentesco" placeholder="Digite o parentesco" class="form-control" type="text"></td>
																<td><input id="idade" name="idade" placeholder="Digite a idade" onKeypress="return numeroR(event)" class="form-control" type="text"></td>
																<td><input id="profissao" name="profissao" placeholder="Digite a profissao" class="form-control" type="text"></td>
															</tr>
														</table>
													</div>						
												</div>
											</div>
										</div>
									<!-- /Reside input -->

									<!-- Trabalham input -->
										<div class="form-group">
											<label for="trabalham" class="col-md-4 control-label">Quantas pessoas trabalham na família</label>  
											<div class="col-md-2 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
													<input tabindex="16" id="trabalham" name="trabalham" placeholder="2" onKeypress="return numeroR(event)" class="form-control" type="number">
												</div>
											</div>
										</div>
									<!-- /Trabalham input -->

									<!-- Renda input -->
										<div class="form-group">
											<label for="renda" class="col-md-4 control-label">Renda familiar em salários mínimos</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='renda' value="1"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> 1</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='renda' value="De 1 a 3"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> De 1 a 3</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='renda' value="De 3 a 5"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> De 3 a 5</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='renda' value="Acima de 5"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Acima de 5</b></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									<!-- /Renda input -->

									<!-- Social input -->
										<div class="form-group">
											<label for="social" class="col-md-4 control-label">Família beneficiária de benefício social</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='social' value="Sim"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Sim</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='social' value="Não"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Não</b></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									<!-- /Social input -->

									<!-- Deficiênte input -->
										<div class="form-group">
											<label for="deficiencia" class="col-md-4 control-label">Familiar com deficiência</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="checkbox" name='deficiencia1' value="Física"><i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i><span><b> Física</b></span>
														</label>
														<label class="btn">
															<input type="checkbox" name='deficiencia2' value="Mental"><i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i><span><b> Mental</b></span>
														</label>
														<label class="btn">
															<input type="checkbox" name='deficiencia3' value="Auditiva"><i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i><span><b> Auditiva</b></span>
														</label>
														<input name="deficiencia4" placeholder="Outros" class="form-control" type="text">
													</div>
												</div>
											</div>
										</div>
									<!-- /Deficiênte input -->
							</fieldset>

							<fieldset>
								<legend></legend>
									<!-- Novo tipo -->
										<center>
											<table class="table" id="espaco">
												<tr>
													<td>
														<center>
															<b>
																Habitação
															</b>
														</center>
													</td>
												</tr>
											</table>
										</center>
									<!-- /Novo tipo  -->
									<a id="contador" href="doc/5.pdf" target="_blank" title="Ajuda">?</a>

									<!-- Moradia input -->
										<div class="form-group">
											<label for="moradia" class="col-md-4 control-label">Moradia</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='moradia' value="Própria"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Própria</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='moradia' value="Alugada"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Alugada</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='moradia' value="Cedida"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Cedida</b></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									<!-- /Moradia input -->

									<!-- Cômodos input -->
										<div class="form-group">
											<label for="comodos" class="col-md-4 control-label">Nº de cômodos</label>  
											<div class="col-md-2 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
													<input tabindex="17" id="comodos" name="comodos" placeholder="1" onKeypress="return numeroR(event)" class="form-control" type="number">
												</div>
											</div>
										</div>
									<!-- /Cômodos input -->

									<!-- Água input -->
										<div class="form-group">
											<label for="agua" class="col-md-4 control-label">Tratamento de água para uso doméstico</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='agua' value="Filtrada"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Filtrada</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='agua' value="Fervida"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Fervida</b></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									<!-- /Água input -->

									<!-- Asfalto input -->
										<div class="form-group">
											<label for="asfalto" class="col-md-4 control-label">Rua asfaltada</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='asfalto' value="Sim"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Sim</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='asfalto' value="Não"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Não</b></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									<!-- /Asfalto input -->

									<!-- Esgoto input -->
										<div class="form-group">
											<label for="esgoto" class="col-md-4 control-label">Esgotamento sanitário</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='esgoto' value="Sim"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Sim</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='esgoto' value="Não"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Não</b></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									<!-- /Esgoto input -->
							</fieldset>

							<fieldset>
								<legend></legend>
									<!-- Novo tipo -->
										<center>
											<table class="table" id="espaco">
												<tr>
													<td>
														<center>
															<b>
																Aspectos Lazer / Culturais / Religiosos
															</b>
														</center>
													</td>
												</tr>
											</table>
										</center>
									<!-- /Novo tipo  -->
									<a id="contador" href="doc/6.pdf" target="_blank" title="Ajuda">?</a>

									<!-- Religião input -->
										<div class="form-group">
											<label for="religiao" class="col-md-4 control-label">Religião</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-tower"></i></span>
													<input tabindex="18" name="religiao" placeholder="Digite a religião" class="form-control" type="text">
												</div>
											</div>
										</div>
									<!-- /Religião input -->

									<!-- Frenquenta input -->
										<div class="form-group">
											<label for="frenquenta" class="col-md-4 control-label">Frenquenta</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='frenquenta' value="Sim"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Sim</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='frenquenta' value="Não"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Não</b></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									<!-- /Frenquenta input -->

									<center><hr class="style13"></center>

									<!-- Lazer input -->
										<div class="form-group">
											<label for="lazer" class="col-md-4 control-label">Lazer</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="checkbox" name='lazer1' value="Esporte"><i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i><span><b> Esporte</b></span>
														</label>
														<label class="btn">
															<input type="checkbox" name='lazer2' value="TV"><i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i><span><b> TV</b></span>
														</label>
														<label class="btn">
															<input type="checkbox" name='lazer3' value="Cinema"><i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i><span><b> Cinema</b></span>
														</label>
														<label class="btn">
															<input type="checkbox" name='lazer4' value="Viagens"><i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i><span><b> Viagens</b></span>
														</label>
														<input name="lazer5" placeholder="Outros" class="form-control" type="text">
													</div>
												</div>
											</div>
										</div>
									<!-- /Lazer input -->

									<center><hr class="style13"></center>

									<!-- Voluntário input -->
										<div class="form-group">
											<label for="voluntario" class="col-md-4 control-label">Desenvolve atividades voluntárias</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-tree-deciduous"></i></span>
													<input tabindex="19" name="voluntario" placeholder="Digite a atividade" class="form-control" type="text">
												</div>
											</div>
										</div>
									<!-- /Volutário input -->
							</fieldset>

							<fieldset>
								<legend></legend>
									<!-- Novo tipo -->
										<center>
											<table class="table" id="espaco">
												<tr>
													<td>
														<center>
															<b>
																Aspectos de Saúde
															</b>
														</center>
													</td>
												</tr>
											</table>
										</center>
									<!-- /Novo tipo  -->
									<a id="contador" href="doc/7.pdf" target="_blank" title="Ajuda">?</a>

									<!-- Alcool input -->
										<div class="form-group">
											<label for="alcool" class="col-md-4 control-label">Consumo de álcool</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='alcool' value="Sim"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Sim</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='alcool' value="Não"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Não</b></span>
														</label>
														<input name="alcool" placeholder="Com quê frequência" class="form-control" type="text">
													</div>
												</div>
											</div>
										</div>
									<!-- /Alcool input -->
									
									<center><hr class="style13"></center>

									<!-- Fuma input -->
										<div class="form-group">
											<label for="fuma" class="col-md-4 control-label">Tabagismo</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='fuma' value="Não fuma"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Não fuma</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='fuma' value="Ex-fumante"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Ex-fumante</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='fuma' value="Sim"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Sim</b></span>
														</label>
														<input name="fuma" placeholder="Quantidade e frequência" class="form-control" type="text">
													</div>
												</div>
											</div>
										</div>
									<!-- /Fuma input -->
									
									<center><hr class="style13"></center>

									<!-- Deficiência input -->
										<div class="form-group">
											<label for="deficiente" class="col-md-4 control-label">Possui alguma deficiência</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='deficiente' value="Não"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Não</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='deficiente' value="Sim"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Sim</b></span>
														</label>
														<input name="deficiente" placeholder="Qual" class="form-control" type="text">
													</div>
												</div>
											</div>
										</div>
									<!-- /Deficiência input -->
									
									<center><hr class="style13"></center>

									<!-- Problema input -->
										<div class="form-group">
											<label for="problema" class="col-md-4 control-label">Problema de saúde</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='problema' value="Não"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Não</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='problema' value="Sim"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Sim</b></span>
														</label>
														<input name="problema" placeholder="Quais" class="form-control" type="text">
													</div>
												</div>
											</div>
										</div>
									<!-- /Problema input -->
									
									<center><hr class="style13"></center>

									<!-- Medicação input -->
										<div class="form-group">
											<label for="medicacao" class="col-md-4 control-label">Consumo de medicação de uso continuo</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<div class="btn-group" data-toggle="buttons">
														<label class="btn">
															<input type="radio" name='medicacao' value="Não"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Não</b></span>
														</label>
														<label class="btn">
															<input type="radio" name='medicacao' value="Sim"><i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i><span><b> Sim</b></span>
														</label>
														<input name="medicacao" placeholder="Qual" class="form-control" type="text">
													</div>
												</div>
											</div>
										</div>
									<!-- /Medicação input -->
							</fieldset>

							<fieldset>
								<legend></legend>
									<!-- Novo tipo -->
										<center>
											<table class="table" id="espaco">
												<tr>
													<td>
														<center>
															<b>
																Aspectos Sociais Relevantes / Orientações e Encaminhamentos
															</b>
														</center>
													</td>
												</tr>
											</table>
										</center>
									<!-- /Novo tipo  -->
									<a id="contador" href="doc/8.pdf" target="_blank" title="Ajuda">?</a>

									<!-- Orientações area -->
										<div class="form-group">
											<label for="orientacao" class="col-md-4 control-label"></label>
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
													<textarea tabindex="20" class="form-control" id="orientacao" name="orientacao" placeholder="Descrição" rows="4" style="resize:none;"></textarea>
												</div>
											</div>
										</div>
									<!-- /Orientações area -->
							</fieldset>

							<fieldset>
								<legend></legend>
									<!-- Novo tipo -->
										<center>
											<table class="table" id="espaco">
												<tr>
													<td>
														<center>
															<b>
																Parecer Social
															</b>
														</center>
													</td>
												</tr>
											</table>
										</center>
									<!-- /Novo tipo  -->
									<a id="contador" href="doc/9.pdf" target="_blank" title="Ajuda">?</a>

									<!-- Parecer area -->
										<div class="form-group">
											<label for="parecer" class="col-md-4 control-label"></label>
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
													<textarea tabindex="21" class="form-control" id="parecer" name="parecer" placeholder="Descrição" rows="4" style="resize:none;"></textarea>
												</div>
											</div>
										</div>
									<!-- /Parecer area -->
							</fieldset>

							<fieldset>
								<legend></legend>
									<a id="contador" href="doc/10.pdf" target="_blank" title="Ajuda">?</a>
									<!-- Data input -->
										<div class="form-group">
											<label for="data" class="col-md-4 control-label">Data</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
													<input required id="data" name="data" class="form-control" type="date">
												</div>
											</div>
										</div>
									<!-- /Data input -->

									<center><hr class="style13"></center>

									<!-- Assistente input -->
										<div class="form-group">
											<label for="assistente" class="col-md-4 control-label">Assistente</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
													<input required tabindex="22" id="assistente" name="assistente" class="form-control" placeholder="Digite o nome da assistente" type="text">
												</div>
											</div>
										</div>
									<!-- /Assistente input -->

									<center><hr class="style13"></center>

									<!-- Assistente2 input -->
										<div class="form-group">
											<label for="assistente2" class="col-md-4 control-label">Assistente</label>  
											<div class="col-md-4 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
													<input required tabindex="23" id="assistente2" name="assistente2" class="form-control" placeholder="Digite seu nome" type="text">
													<input tabindex="24" id="cress" name="cress" class="form-control" placeholder="CRESS" type="text">
												</div>
											</div>
										</div>
									<!-- /Assistente2 input -->
							</fieldset>

							<!-- Botão -->
								<center>
									<br>
									<div class="form-group">
										<label class="col-md-4 control-label"></label>
										<div class="col-md-4">
											<button tabindex="25" id="enter" type="submit" class="btn btn-success button"><b>Salvar </b><span class="glyphicon glyphicon-send"></span></button>&nbsp&nbsp&nbsp
											<a tabindex="26" class="btn btn-primary button" href="doc/documento.docx" title="Word"><b>Gerar Documento </b><i class="glyphicon glyphicon-file"></i></a>
										</div>
									</div>
								</center>
							<!-- /Botão -->
					</fieldset>
				</form>
			</div>
		<!-- /Corpo -->

		<style>
			#contador {
				background-color:#DDDDDD !important;
				color: #808080 !important;
				float:right !important;
				font-weight: bold !important;
				border: 1px solid #c0c0c0 !important;
				width:25px !important;
				height:23px !important;
				padding-left:6.5px;
				border-radius: 45px !important;
				text-decoration:none;
			}
			#contador:hover{
				background-color: #808080 !important;
				color: #DDDDDD !important;
			}

			.well {
				margin-top:50px;
			}
			#espaco {
				background:#DDDDDD;
				font-size:13px;
			}
			@media (min-width: 992px) {
				#espaco {
					background:#DDDDDD;
					width:500px;
					font-size:13px;
				}
			}
			hr.style13 {
				height: 3px;
				border: 0;
				box-shadow: 0 9px 8px -11px #8c8b8b inset;
			}
			@media (min-width: 992px) {
				hr.style13 {
				height: 3px;
				width:500px;
				border: 0;
				box-shadow: 0 9px 8px -11px #8c8b8b inset;
				}
			}
			.button:hover {
				box-shadow:0 3px 3px #808080;
			}
			
			.button:active {
				transform: translateY(4px);
			}
			input[type=number]::-webkit-inner-spin-button { 
				-webkit-appearance: none;
				cursor:pointer;
				display:block;
				width:8px;
				color: #333;
				text-align:center;
				position:relative;
			}
			input[type=number] { 
				-moz-appearance: textfield;
				appearance: textfield;
				margin: 0; 
			}
			label.btn span {
				font-size: 13.5px;
			}

			label input[type="radio"] ~ i.fa.fa-circle-o{
				color: #c8c8c8;    display: inline;
			}
			label input[type="radio"] ~ i.fa.fa-dot-circle-o{
				display: none;
			}
			label input[type="radio"]:checked ~ i.fa.fa-circle-o{
				display: none;
			}
			label input[type="radio"]:checked ~ i.fa.fa-dot-circle-o{
				color: #000000;    display: inline;
			}
			label:hover input[type="radio"] ~ i.fa {
			color: #000000;
			}

			label input[type="checkbox"] ~ i.fa.fa-square-o{
				color: #c8c8c8;    display: inline;
			}
			label input[type="checkbox"] ~ i.fa.fa-check-square-o{
				display: none;
			}
			label input[type="checkbox"]:checked ~ i.fa.fa-square-o{
				display: none;
			}
			label input[type="checkbox"]:checked ~ i.fa.fa-check-square-o{
				color: #000000;    display: inline;
			}
			label:hover input[type="checkbox"] ~ i.fa {
			color: #000000;
			}

			div[data-toggle="buttons"] label.active{
				color: #000000;
			}
			div[data-toggle="buttons"] label {
			display: inline-block;
			padding: 6px 12px;
			margin-bottom: 0;
			font-size: 14px;
			font-weight: normal;
			line-height: 2em;
			text-align: left;
			white-space: nowrap;
			vertical-align: top;
			cursor: pointer;
			background-color: none;
			border: 0px solid 
			#c8c8c8;
			border-radius: 3px;
			color: #c8c8c8;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			-o-user-select: none;
			user-select: none;
			}
			div[data-toggle="buttons"] label:hover {
			color: #000000;
			}
			div[data-toggle="buttons"] label:active, div[data-toggle="buttons"] label.active {
			-webkit-box-shadow: none;
			box-shadow: none;
			}
			th {
				color:#4E5066;;
				background:#DDDDDD;
				border: 1px solid #666B85;
				font-size:14px;
			}
			tr {
				border: 1px solid #4E5066;
				color:#4E5066;
			}
			td {
				border: 1px solid #C1C3D1;
				color:#666B85;
			}
			table {
				box-shadow:0.1px 3px 5px #676767;
			}
			 /* Largura da barra de rolagem */
                ::-webkit-scrollbar {
                width: 17px;
            }

            /* Fundo da barra de rolagem */
                ::-webkit-scrollbar-track-piece {
                background-color: #EEE;
                border-left: 1px solid #CCC
            }

            /* Cor do indicador de rolagem */
                ::-webkit-scrollbar-thumb:vertical,
                ::-webkit-scrollbar-thumb:horizontal {
                background-color: #BAC0C4
            }

            /* Cor do indicador de rolagem - ao passar o mouse */
                ::-webkit-scrollbar-thumb:vertical:hover,
                ::-webkit-scrollbar-thumb:horizontal:hover {
                background-color: #717171
            }
		</style>
		
		<!-- Para enter direito no botão -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!-- /Para enter direito no botão -->
		
		<!-- JavaSript --> 
			<script>						
				// Enter direto no botão principal da tela
					$(document).keypress(function(e) {
						if(e.which == 13) $('#enter').click();
					}); 
				
				// Permitir somente digitos numericos no campo ramal
					function numeroR(e){
						var expressao;
						expressao = /[0-9]+$/;
						if(expressao.test(String.fromCharCode(e.keyCode))){
							return true;
						}else{
							return false;
						}
					}
			</script>
		<!-- /JavaSript --> 
	</body>
</html>