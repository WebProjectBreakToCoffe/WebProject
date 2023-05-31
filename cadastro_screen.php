<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="/styles/cadastro.css">
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Index.js"></script>
    <title>Cadastro</title>
</head>

<body>
    <section class="vh-100" style="background-color: #525151;">
        <div class="container py-2 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-3 m-0">
                            <div class="img text-center">
                                <img src="Group.svg" alt="">
                            </div>
                            <h3 class="mb-0 text-center" style="font-size: 25px;">Faça seu cadastro</h3>

                            <form class="row mt-0 g-2 needs-validation" action="php/action.php">

                                <div class="form-name mb-0 text-right">
                                    <label class="form-label">Nome de usuário</label>
                                    <input type="text" id="usuario" placeholder="Crie seu nome de usuário"
                                        class="form-control-plaintext" required /> 
                                    <div class="invalid-feedback">
                                        crie o nome de usuário para fazer login!
                                    </div>
                                </div>

                                <div class="form-sobrenome mb-0 text-right">
                                    <label class="form-label">Nome completo</label>
                                    <input type="text" id="nome" placeholder="Insira seu nome completo"
                                        class="form-control-plaintext" required />
                                    <div class="invalid-feedback">
                                        Preencha o campo com seu nome completo!
                                    </div>
                                </div>

                                <div class="form-Email mb-0 text-right">
                                    <label class="form-label">Email</label>
                                    <input type="email" id="email" placeholder="example@email.com"
                                        class="form-control-plaintext" required />
                                    <div class="invalid-feedback">
                                        Prencha o campo com seu email(formato:email@email.com)
                                    </div>
                                </div>

                                <div class="form-Email mb-0 text-right">
                                    <label class="form-label">Senha</label>
                                    <div id="teste">
                                        <input type="password" id="senha"
                                        placeholder="min: 8 digitos Exemplo: Abc12345678 "
                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control-plaintext"
                                        required />
                                        <span class="lnr lnr-eye"></span>
                                    </div>
                                    
                                    <div class="invalid-feedback">
                                        Digite sua senha de login
                                    </div>
                                </div>

                                <div class="form-outline mb-2">
                                    <div class="input-password mb">
                                        <label class="form-label" for="typePasswordX-2">Confirmar senha</label>
                                    </div>
                                    <input type="password" id="confirmar_senha"
                                        placeholder="Insira sua senha novamente"
                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control-plaintext"
                                        required />
                                    <div class="invalid-feedback">
                                        Digite sua senha novamente
                                    </div>
                                </div>

                                <div class="text-center mb-3">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Registrar</button>
                                </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        </form>
    </section>
    <script>
        var password = document.getElementById("senha")
            , confirm_password = document.getElementById("confirmar_senha");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Senhas diferentes!");
            } else {
                confirm_password.setCustomValidity('');
            }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;

        let btn = document.querySelector('.lnr-eye');
        btn.addEventListener('click', function() {
        let input = document.querySelector('#senha');
        if(input.getAttribute('type') == 'password') {
            input.setAttribute('type', 'text');
        } else {
            input.setAttribute('type', 'password');
        }
        });
    </script>
</body>
</html>