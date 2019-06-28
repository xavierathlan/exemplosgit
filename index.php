<?php require'page/header.php'; ?>
<?php
require 'classe/relatorios.class.php';
require 'classe/usuario.class.php';
//$r = new Relatorios();
$u = new Usuario();

$id = 'id';
if(isset($_POST['id'])) {
	$id = $_POST['id'];
}

//$total_relatorios = $r->getTotalRelatorios($id);

//$total_usuarios = $u->getTotalUsuarios();

?>

    <h1>Bem vindo à X.Solutions</h1>
    <h2>Temos a solução ideal, para o seu tipo de negócio</h2>

<?php require'page/footer.php'; ?>
