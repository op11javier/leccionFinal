<?php
require_once 'becarioColector.php';
require_once 'becario.php';


$alm = new becario();
$model = new becarioColector();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>becas</title>       
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:left;">idPrograma</th>
                            <th style="text-align:left;">nombre</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->ListarBECARIO() as $r): ?>
                        <tr>
                          <td><?php echo $r->getidPrograma(); ?></td>
                          <td><?php echo $r->getNombre(); ?></td>
                          

                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>
