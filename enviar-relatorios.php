<?php require'page/header.php'; ?>
<?php
if(empty($_SESSION['cLogin'])) {
	?>
	<script type="text/javascript">window.location.href="login.php";</script>
	<?php
	exit;
}
?>

<div class="container">
	<h2>Enviar Relatório:</h2>

	<?php 
	require 'classe/relatorios.class.php';
	$r = new Relatorios();
	if(isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome = addslashes($_POST['nome']);
		$mes = addslashes($_POST['mes']);
		$publicacao = addslashes($_POST['publicacao']);
		$video = addslashes($_POST['video']);
		$hora = addslashes($_POST['hora']);
		$revisita = addslashes($_POST['revisita']);
		$estudo = addslashes($_POST['estudo']);
		$observ = addslashes($_POST['observ']);

		if(!empty($nome) && !empty($mes) && !empty($publicacao) && !empty($video) && !empty($hora) && !empty($revisita) && !empty($estudo) && !empty($observ)) {
			if($r->enviarRelatorios($nome, $mes, $publicacao, $video, $hora, $revisita, $estudo, $observ)) {
				?>
				<div class="alert alert-success">
					<strong>Parabéns!</strong>
					Relatório enviado com sucesso.<a href="./" class="alert alert-link"></a>	
				</div>
			 	<?php
			} else {
				?>
				<div class="alert alert-warning">
				Este relatório já foi enviado! <a href="login.php" class="alert alert-link">Faça login agora</a>
				</div>
			 	<?php
			}	
		} else {
			?>
			<div class="alert alert-warning">
				Preencha todos os campos!
			</div>
			<?php
		}
	}	
	?>

	<form method="POST">
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" class="form-control" />
		</div>
		<div class="form-group">
	  		<label for="mes">Mês:</label>
	  		<input type="date" name="mes" id="mes" class="form-control" />
		</div>
		<div class="form-group">
		    <label for="publicacao">Publicações (impressas e eletrônicas):</label>
			<input type="number" name="publicacao" id="publicacao" class="form-control" />
		</div>
		<div class="form-group">
			<label for="video">Vídeos mostrados:</label>
			<input type="number" name="video" id="video" class="form-control" />
		</div>
		<div class="form-group">
		    <label for="hora">Horas:</label>
		    <input type="number" name="hora" id="hora" class="form-control" />
		</div>
		<div class="form-group">
		   	<label for="revisita">Revisitas:</label>
		   	<input type="number" name="revisita" id="revisita" class="form-control" />
		</div>
		<div class="form-group">
		    <label for="estudo">Estudos bíblicos:</label>
		    <input type="number" name="estudo" id="estudo" class="form-control" />
		</div>
		<div class="form-group">
			<label for="observ">Observações:</label>
			<textarea class="form-control" rows="5" id="observ" name="observ"></textarea>
		</div>
		<input type="submit" value="Enviar" class="btn btn-default" />
	</form>
	
</div>

<?php require'page/footer.php'; ?>