<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="styles/login.css">
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
       
    </style>
</head>

<body>
    <section class="vh-100" style="background-color: #525151;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-4">
                            <form action="action.php" method="post" class="needs-valdiation">
                                <div class="img text-center">
                                    <img src="imagens/Group.svg" alt="">
                                </div>
                                <h3 class="mb-4 text-center">Faça seu login</h3>

                                <div class="form-name mb-4 text-right">
                                    <label class="form-label">Email</label>
                                    <input type="name" id="typeLoginX-2" class="form-control-plaintext" name="name" required />
                                </div> 

                                <div class="invalid-feedback">
                                    crie o nome de usuário para fazer login!
                                </div>

                                <div class="form-password mb-4">
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                    <input type="password" id="password" class="form-control-plaintext" name="age" required />
                                    <span class="lnr lnr-eye"></span>
                                </div>

                                <div class="invalid-feedback">
                                    Digite sua senha de login
                                </div>

                                <div class="text-center mb-3">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Conectar</button>
                                </div>
                                <div class="btnSignin text-center mt-1 # ">
                                    <label for="form-label">Novo por aqui? <b><a href="tela_cadastro.html">Cadastre-se</a></b></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        let btn = document.querySelector('.lnr-eye');
        btn.addEventListener('click', function() {
        let input = document.querySelector('#password');
        if(input.getAttribute('type') == 'password') {
        input.setAttribute('type', 'text');
        } else {
        input.setAttribute('type', 'password');
        }
        });
    </script>
</body>

</html>