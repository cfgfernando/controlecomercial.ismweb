<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="login-form">

<h3>Tela de Login</h3>
<?php
		get_msg('msgerro');
		get_msg('msgsucess');
	?>

<form action="" class="" name="form-login" id="form-login" method="post">
	<input type="email" name="login_email" value="" class="input-sistema" autocomplete="off" placeholder="Entre com seu e-mail" required>
	<input type="password" name="login_senha" value="" class="input-sistema" autocomplete="off" placeholder="Entre com sua senha" required>

	<button form="form-login" type="submit" class="btn btn-success btn-lg btn-block">ENTRAR</button>
	
</form>


</div>