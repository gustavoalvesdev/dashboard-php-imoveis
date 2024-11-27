<?php 
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-1">
                        <h3 class="mb-0">Cadastro de Usuário</h3>
                    </div>

                    <div class="container" style="margin-top: 10px;">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nome</label>
                                        <input type="text" class="form-control form-control-alternative" placeholder="Nome completo" name="nome" required="" autofocus="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleFormControlSelect1">Nível do Usuário</label>
                                    <select class="form-control form-control-alternative" id="exampleFormControlSelect1" name="nivel" autocomplete="off">
                                        <option>Gerente</option>
                                        <option>Vendedor</option>
                                        <option>Administrador</option>
                                        <option>Recepcionista</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Usuário</label>
                                        <input type="text" class="form-control form-control-alternative" placeholder="Usuário sem Espaços" name="usuario" required="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Senha</label>
                                        <input type="password" class="form-control form-control-alternative" placeholder="Mínimo 8 Dígitos" name="senha" required="" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">E-mail</label>
                                        <input type="text" class="form-control form-control-alternative" placeholder="Digite um E-mail Válido" name="usuario" required="" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer py-4">
                                <div style="text-align: right;">
                                    <a href="#" role="button" class="btn btn-primary">Cadastrar</a>
                                </div>
                            </div>
                        </form>
                    </div>

                    
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                            target="_blank">Creative Tim</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md"
                                class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>


    <?php 
        include 'rodape.php';
    ?>

</body>

</html>