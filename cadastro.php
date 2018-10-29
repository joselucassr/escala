<?php 
	
	@$id=$_GET['id'];

	if($id){
		$sql= "SELECT * FROM inscrever WHERE id=$id ";
	
		$result= mysqli_query($conn,$sql);
		$row =  mysqli_fetch_assoc($result);

			$usu = @$row['usuario'];
			$senha = @$row['senha'];
			$conf_senha = @$row['conf_senha'];
			$email = @$row['email'];
			$cpf = @$row['cpf'];

	}

	


 ?>


<div id="cadastro">
        <h3 class="text-center text-black pt-5">Cadastro</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="cadastro-column" class="col-md-6">
                    <div id="cadastro-box" class="col-md-12">
						<form action="crud.php" method="POST" id="cadastro" >
							<div class="form-group">	
								<input type="text" name="usuario" id="usuario" value= "<?php echo @$usu ; ?>" class="form-control" placeholder="nome" required> 
                                       

								<br>
								
							</div >
							<div class="form-group">	
								<input type="password" name="senha" id="senha"  placeholder="Senha" class="form-control" required> 
                                
								<br>
								
							</div>
							<div class="form-group">	
								<input type="password" name="conf_senha" id="conf_senha"  placeholder="Confirme a senha" class="form-control" required>
                                
 
								<br>
								
							</div>
							<div class="form-group">	
								<input type="email" name="email" id="email" value="<?php echo @$email ; ?>" placeholder="Email" class="form-control" required > 
                                

								<br>
								
							</div>
							<div class="form-group">	
								<input type="text" name="cpf" id="CPF" value="<?php echo @$cpf ;?>" placeholder="CPF" class="form-control"  onkeyup="cpfCheck(this)" required>
                                <span id="cpfResponse"></span>
                                
 
								<br>
								
							</div>
							</div>
							
							<div class="form-group">	
								<input type="hidden" name="id" value="<?php echo @$id ; ?>" > 
							</div>
							<div class="form-group">	
								<input type="submit"   name="ok_cadastro" class="btn btn-ligth btn-md" value="Cadastrar" >
							</div>	
							</form>
					</div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">


    var senha = document.getElementById("senha")
  , conf_senha = document.getElementById("conf_senha");

function validatePassword(){
  if(senha.value != conf_senha.value) {
    conf_senha.setCustomValidity("Senhas diferentes!");
  } else {
    conf_senha.setCustomValidity('');
  }
}

senha.onchange = validatePassword;
conf_senha.onkeyup = validatePassword;


function is_cpf (c) {

  if((c = c.replace(/[^\d]/g,"")).length != 11)
    return false;

  if (c == "00000000000")
    return false;

  var r;
  var s = 0;

  for (i=1; i<=9; i++)
    s = s + parseInt(c[i-1]) * (11 - i);

  r = (s * 10) % 11;

  if ((r == 10) || (r == 11))
    r = 0;

  if (r != parseInt(c[9]))
    return false;

  s = 0;

  for (i = 1; i <= 10; i++)
    s = s + parseInt(c[i-1]) * (12 - i);

  r = (s * 10) % 11;

  if ((r == 10) || (r == 11))
    r = 0;

  if (r != parseInt(c[10]))
    return false;

  return true;
}
cpfCheck = function (el) {
    document.getElementById('cpfResponse').innerHTML = is_cpf(el.value)? '<span style="color:green">válido</span>' : '<span style="color:red">inválido</span>';
    if(el.value=='') document.getElementById('cpfResponse').innerHTML = '';
}


    
              
        

         
                   


}
</script>
