<?php include_once "connect.php";
	protegePagina();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include_once "template/header.php"; ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Painel de Controle</title>
    </head>
    
    <body>
    <header>
    	<div class="logo">Logotipo</div>
    </header>
		<?php include_once "template/lateral.php"; ?>
    	<section class="conteudo">
        	<h1 class="titulo">Painel de Controle</h1>
            <table>
            	<thead>
            		<tr>
                    	<th>Título</th>
                        <th>Tipo</th>
                        <th>Data</th>
                        <th>Ação</th>
                    </tr>
				</thead>
                <tbody>
                	<tr>
                    	<td>Musica x</td>
                        <td>Audio</td>
                        <td>2018-01-01</td>
                        <td></td>
                    </tr>
                    <tr>
                    	<td>Video y</td>
                        <td>video</td>
                        <td>2018-01-01</td>
                        <td></td>
                    </tr>
                    <tr>
                    	<td>Musica z</td>
                        <td>Audio</td>
                        <td>2018-01-01</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </section>
    
    </body>

</html>