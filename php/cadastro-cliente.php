<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cadastro de Clientes</title>
</head>

<body class="vh-100 d-flex align-items-center" style="background-color:#708090;">
    <div class="container mb-5 ">
        <div class="row ">
            <div class=" col-8 mx-auto align-self-center p-5" style="background-color:#fff;">
                <h3 class="text-center">Cadastro de Clientes</h3>
                <div class="row mt-1">
                    <div class="col-4">
                        <input type="text" name="codigo" class="form-control" placeholder="Código*">
                    </div>
                    <div class="col-4">
                        <input type="text" name="cpf" class="form-control" placeholder="CPF*">
                    </div>
                    <div class="col-4">
                        <input type="text" name="rg" class="form-control" placeholder="RG*">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-6">
                        <input type="text" name="nome" class="form-control" placeholder="Nome*">
                    </div>
                    <div class="col-6">
                        <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome*">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-12">
                        <input type="email" name="email" class="form-control" placeholder="Email*">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-6">
                        <input type="text" name="telefone" class="form-control" placeholder="Telefone*">
                    </div>
                    <div class="col-6">
                        <input type="text" name="celular" class="form-control" placeholder="Celular*">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-10">
                        <input type="text" name="endereco" class="form-control" placeholder="Endereço*">
                    </div>
                    <div class="col-2">
                        <input type="text" name="numero" class="form-control" placeholder="Número*">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-5">
                        <input type="text" name="bairro" class="form-control" placeholder="Bairro*">
                    </div>
                    <div class="col-5">
                        <input type="text" name="cidade" class="form-control" placeholder="Cidade*">
                    </div>
                    <div class="col-2 mt1">
                        <select name="uf" class="form-select">
                            <option selected>UF</option>
                            <option value="sp">SP</option>
                            <option value="rj">RJ</option>
                            <option value="mg">MG</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="cliente-ativo" id="cliente-a">
                            <label for="cliente-a">Cliente ativo</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-check">
                            <input class="form-check-input" value="ativo" type="radio" name="cliente-ativo" id="cliente-i" checked>
                            <label for="cliente-a">Cliente inativo</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" value="primium" type="checkbox" name="premium" id="primium">
                            <label class="form-check-label" for="premium">Cliente PREMIUM</label>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="text-center col-12">
                        <button type="submit" class="btn btn-primary btn-lg w-50 mt-3">Cadastar</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>