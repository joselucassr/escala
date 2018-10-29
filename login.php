<?php 



?>

 <div id="login">
        <h3 class="text-center text-black pt-5">Faça login para se voluntariar a leitura</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <form action="crud.php" method="POST">
                            <h3 class="text-center text-dark">Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-dark">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Senha:</label><br>
                                <input type="password" name="senha" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="ok_login" class="btn btn-dark btn-md" value="entrar">
                            </div>
                            <div id="register-link" class="text-right">
                               <button class="btn btn-dark btn-md"> <a href="./?pag=2" class="text-light">cadastre-se</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
