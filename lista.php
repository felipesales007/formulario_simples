<!DOCTYPE html>
<html>
	<head>
		<title>Lista | Formulário</title>
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
        <!-- CSS da tabela -->
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css'>
        <link rel='stylesheet prefetch' href='http://rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css'>
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

        <!-- Lista -->
            <div id="todos" class="container">
                <table class="toping" id="table" 
                    data-toggle="table"
                    data-search="true"
                    data-filter-control="false" 
                    data-show-export="false"
                    data-click-to-select="false"
                    data-toolbar="#toolbar">
                    <thead>
                        <tr>
                            <th class="text-left" colspan='6'><center><h3>Pascientes</h3></center></th>
                        </tr>
                        <tr>
                            <th data-field="prenom" data-filter-control="input" data-sortable="false" class="text-left">Nome</th>
                            <th data-field="date" data-filter-control="select" data-sortable="false" class="text-left">Matricula</th>
                            <th data-field="examen" data-filter-control="select" data-sortable="false" class="text-left"><center><i class="glyphicon glyphicon-pencil"></i></center></th>
                            <th data-field="note" data-filter-control="select" data-sortable="false" class="text-left"><center><i class="glyphicon glyphicon-trash"></i></center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lucas Abrão</td>
                            <td>12345</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        
                        <tr>
                            <td>Caio Fernandiz</td>
                            <td>67890</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Luiz Salles</td>
                            <td>37890</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Carla Tiniz</td>
                            <td>87954</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Thais Hildiz</td>
                            <td>61307</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Iuri Gabriel</td>
                            <td>80535</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Valeria Nascimento</td>
                            <td>56732</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Cosme Fernando</td>
                            <td>96432</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Rodrigo Bush</td>
                            <td>94362</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Bob Sulivan</td>
                            <td>74321</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Alex Couro</td>
                            <td>64326</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Saiane Santos</td>
                            <td>75432</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Xavier Gouveria</td>
                            <td>78453</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Dante Cry</td>
                            <td>54297</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Morgana Luz</td>
                            <td>08721</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Nohan Hiuz</td>
                            <td>97145</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Caio Civil</td>
                            <td>48521</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Solange Almeida</td>
                            <td>76456</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Lucas Abrão</td>
                            <td>12345</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Caio Fernandiz</td>
                            <td>67890</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Luiz Salles</td>
                            <td>37890</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Carla Tiniz</td>
                            <td>87954</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Thais Hildiz</td>
                            <td>61307</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Iuri Gabriel</td>
                            <td>80535</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Valeria Nascimento</td>
                            <td>56732</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Cosme Fernando</td>
                            <td>96432</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Rodrigo Bush</td>
                            <td>94362</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Bob Sulivan</td>
                            <td>74321</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Alex Couro</td>
                            <td>64326</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Saiane Santos</td>
                            <td>75432</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Xavier Gouveria</td>
                            <td>78453</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Dante Cry</td>
                            <td>54297</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Morgana Luz</td>
                            <td>08721</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Nohan Hiuz</td>
                            <td>97145</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Caio Civil</td>
                            <td>48521</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Solange Almeida</td>
                            <td>76456</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Lucas Abrão</td>
                            <td>12345</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Caio Fernandiz</td>
                            <td>67890</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Luiz Salles</td>
                            <td>37890</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Carla Tiniz</td>
                            <td>87954</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Thais Hildiz</td>
                            <td>61307</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Iuri Gabriel</td>
                            <td>80535</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Valeria Nascimento</td>
                            <td>56732</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Cosme Fernando</td>
                            <td>96432</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Rodrigo Bush</td>
                            <td>94362</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Bob Sulivan</td>
                            <td>74321</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Alex Couro</td>
                            <td>64326</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Saiane Santos</td>
                            <td>75432</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Xavier Gouveria</td>
                            <td>78453</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Dante Cry</td>
                            <td>54297</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Morgana Luz</td>
                            <td>08721</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Nohan Hiuz</td>
                            <td>97145</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Caio Civil</td>
                            <td>48521</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Solange Almeida</td>
                            <td>76456</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Lucas Abrão</td>
                            <td>12345</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Caio Fernandiz</td>
                            <td>67890</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Luiz Salles</td>
                            <td>37890</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Carla Tiniz</td>
                            <td>87954</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Thais Hildiz</td>
                            <td>61307</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Iuri Gabriel</td>
                            <td>80535</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Valeria Nascimento</td>
                            <td>56732</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Cosme Fernando</td>
                            <td>96432</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Rodrigo Bush</td>
                            <td>94362</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Bob Sulivan</td>
                            <td>74321</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Alex Couro</td>
                            <td>64326</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Saiane Santos</td>
                            <td>75432</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Xavier Gouveria</td>
                            <td>78453</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Dante Cry</td>
                            <td>54297</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Morgana Luz</td>
                            <td>08721</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Nohan Hiuz</td>
                            <td>97145</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Caio Civil</td>
                            <td>48521</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>Solange Almeida</td>
                            <td>76456</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <!-- /Lista -->

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js'></script>
        <script src='http://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js'></script>
        
        <style>
            #todos {
                margin-top:55px;
            }
            
            table {
                border-color:black;
                background-color:white;
            }
            
            @import url(http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

            .toping {
                background: #EBEBEB;
                border-collapse: collapse;
                width: 100%;
            }

            th {
                padding-left:7px;
                color:#D5DDE5;;
                background:#800000;
                border-right: 1px solid #666B85;
                font-size:23px;
                font-weight: 100;
                text-align:left;
            }

            tr {
                border-bottom: 1px solid #C1C3D1;
                color:#666B85;
            }

            td {
                border-left: 1px solid #C1C3D1;
                border-right: 1px solid #C1C3D1;
                color:#666B85;
                max-width: 10ch;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                padding-left:7px;
                width:50%;
            }

            tr:hover td {
                background:#4E5066;
                color:#000000;
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
    </body>
</html>