<?php
$corpo ="
$nome= $_post['name'];
$matricula= $_post['matricula'];
$periodo= $_post['periodo'];
$data= $_post['data'];
$sala= $_post['laboratorio'];
$problema= $_post['prob'];
$mensagem= $_post['msg'];
";
mail('diego.cruz58@etec.sp.gov.br', $corpo, 'from: problemas etec');
echo 'Enviado com sucesso'












?>