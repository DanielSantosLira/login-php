<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body>
    <section class="h-100 gradient-form" style="background-color:#708090;">
        <div class="container py-4 h-90">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-6">
                    <div class="card rounded-3 text-dark">
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <div class="card-body p-md-8 mx-md-9 ">

                                    <div class="text-left">
                                        <img src="../img/login.jpg" style="width: 195px;" alt="logo">
                                        <h4 class="mt-4 mb-2 pb-5">Faça Seu Login</h4>
                                    </div>

                                    <form action="index.php" method="$_POST">


                                        <div class="form-outline mb-2">
                                            <label class="form-label" for="form2Example11">Usuario</label>
                                            <input type="text" id="form2Example11" class="form-control usuario" />

                                        </div>

                                        <div class="form-outline mb-8">
                                            <label class="form-label" for="form2Example22">Senha</label>
                                            <input type="password" id="form2Example22" class="form-control senha" />

                                        </div>

                                        <div class="text-center pt-3 mb-5 pb-1  ">
                                        <button type="submit" class="btn btn-primary btn-lg  btn-block">Entrar</button>

                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>