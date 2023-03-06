<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Exercicio</title>
</head>

<body style="background-color:#708090;">
    <!-- incio do formulário -->
    <form action="" class="form-horizontal mt-5">
        <fieldset>

            <div class=" col-9 mx-auto align-self-center p-5" style="background-color:#fff; ">
                <div class="panael-heading bg-black text-center mt-2">
                    <h1 class=" text-white">Cadastro de Clientes</h1>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-11 control-label">
                            <h3 class="help-block   text-black">
                                <h11>*</h11>Campo Obrigatório
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-md-2 ">
                    <img src="../img/images.jpg" class="img-fluid form-control" alt="...">
                    </div>
                </div>
                <div class="form-group ">
               
                    <label for="nome" class="col-md-2 control-label ">Nome<h11>*</h11></label>
                    <div class="col-md-8">
                        <input type="text" id="nome" name="nome" placeholder="" class="form-control input-md" required>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="nome" class="col-md-2 control-label">CPF<h11>*</h11></label>
                    <div class="col-md-2">
                        <input type="text" id="cpf" name="cpf" placeholder="Apenas Número" class="form-control input-md" maxlength="11" pattern="[0-9]+$" required>

                    </div>
                    <label for="nome" class="col-md-1 control-label">Nacimento<h11>*</h11></label>
                    <div class="col-md-2">
                        <input type="text" id="dtnasc" nome="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()" required>
                    </div>
                    <label for="radio" class="col-md-1 control-label">Sexo<h11>*</h11></label>
                    <div class="col-md-4">
                        <label for="radio-0" class="radio-inlene">
                            <input type="radio" name="sexo" id="sexo" value="feminino">
                            Femonino
                        </label>
                        <label for="radio-0" class="radio-inlene">
                            <input type="radio" name="sexo" id="sexo" value="masculino">
                            Masculino
                        </label>

                    </div>

                </div>

                <div class="form-group ">
                    <label for="prependedtext" class="col-md-2 control-label">Telefone<h11>*</h11></label>
                    <div class="col-md-2">
                        <div class="input-group">
                            <span class="input-group-text "><i class="glyphicon   glyphicon-earphone"></i></span>
                            <input type="text" id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">

                        </div>
                    </div>
                    <label for="prependedtext" class="col-md-2 control-label">Telefone</label>
                    <div class="col-md-2">
                        <div class="input-group">
                            <span class="input-group-text"><i class="glyphicon   glyphicon-earphone"></i></span>
                            <input type="text" id="prependedtext" name="prependedtext" class="form-control " placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="prependedtext" class="col-md-2 control-label">Email<h11>*</h11></label>
                    <div class="col-md-5">
                        <div class="input-group ">
                            <span class="input-group-text"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label for="cpf" class="col-md-2 control-label">Cep<h11>*</h11></label>
                    <div class="col-md-3">
                        <input id="cep" name="cep" class="form-control input-md" placeholder="Apenas número" required="" type="search" maxlength="13" pattern="[0-9]+$">
                    </div>

                    <div class="col-md-3">
                        <button type="button" class="btn btn-primary" onclick="pesquizarcep(cep.value)">Pesquizar</button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="prependedtext" class="col-md-2 control-label">Endereço</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-text">Rua</span>
                            <input type="text" id="rua" name="rua" class="form-control" readonly="readonly">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="input-group">
                            <span class="input-group-text">Nº</span>
                            <input type="number" id="numero" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-text">Bairro</span>
                            <input type="text" id="bairro" name="bairro" class="form-control" readonly="readonly">
                        </div>
                    </div>


                </div>
                <div class="form-group">
                    <label for="prependedtext" class="col-md-2 control-label"></label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-text">Cidade</span>
                            <input type="text" id="cidade" name="cidade" class="form-control " readonly="readonly">
                        </div>
                    </div>


                    <div class="col-md-3 ">
                        <div class="input-group ">
                            <span class="input-group-text   ">Estado</span>
                            <select required id="Estado " name="Estado " class="form-control form-select">
                                <option value="Estado">Selecione</option>
                                <option value="sp">São Paulo</option>
                                <option value="rj">Rio de Janeiro</option>
                                <option value="mg">Minas Gerais</option>
                                <option value="al">Alagoas</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label for="estado civil"  class="col-md-2 control-label">Estado Civil<h11>*</h11></label>
                    <div class="col-md-2">
                        <select name="estado civil" id="estado civil" class="form-control form-select">
                            <option value=""></option>
                            <option value="solteiro(a)">Solteiro(a)</option>
                            <option value="casado(a)">Casado(a)</option>
                            <option value="divorciado(a)">Divorciado(a)</option>
                            <option value="viuvo">Viuvo(a)</option>
                        </select>
                    </div>

                    <label for="filhos" class="col-md-1 control-label">Filhos<h11>*</h11></label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-text">
                                <label for="radio-0" class="radio-inline">
                                    <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('filhos_qtd')" required>
                                    Não
                                </label>
                                <label for="radio-1" class="radio-inline">
                                    <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilitar('filhos_qtd')">
                                    Sim
                                </label>
                            </span>
                            <input type="text" id="filhos_qtd" name="filhos_qtd" class="form-control" placeholder="Quantos?" pattern="[0-9]+$">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="selectbasic" class="col-md-2 control-label">Escolaridade<h11>*</h11></label>
                    <div class="col-md-3">
                        <select name="escolaridade" id="escolaridade" class="form-control form-select">
                            <option value="selecione">Selecione</option>
                            <option value="analfabeto">Analfabeto</option>
                            <option value="fundamental incompleto">Fundamental Incompleto</option>
                            <option value="fundamental completo">Fundamental Completo</option>
                            <option value="medio incompleto">Médio Incompleto</option>
                            <option value="medio completo">Médio Completo</option>
                            <option value="superior incompleto">Suparior Incompleto</option>
                            <option value="superior completo">Suparior Completo</option>
                        </select>
                    </div>
                    <label for="profissao" class="col-md-1 control-label">Profissão<h11>*</h11></label>
                    <div class="col-md-4">
                        <input type="text" id="profissao" name="profissao" class="form-control input-md" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="encaminamento" class="col-md-2 control-label">Emcaminhamento<h11>*</h11></label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-text">
                                <label class="radio-inline" for="radio-0">
                                    <input type="radio" name="enc" id="enc" value="nao" onclick="desabilita('enc_instituicao')">
                                    Não
                                </label>
                                <label class="radio-inline" for="radio-1">
                                    <input type="radio" name="enc" id="enc" value="sim" onclick="habilita('enc_instituicao')">
                                    Sim
                                </label>
                            </span>
                            <input type="text" id="enc_institicao" name="enc"  class="form-control" placeholder="Instituição">
                        </div>
                        
                    </div>
                    <label for="encaminamento" class="col-md-2 control-label">Aluno FAP-Boletin<h11>*</h11></label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-text">
                            <label class="radio-inline" for="radio-0">
                                    <input type="radio" name="aluno" id="enc" value="nao"  required>
                                    Não
                                </label>
                                <label class="radio-inline" for="radio-1">
                                    <input type="radio" name="enc" id="enc" value="sim" >
                                    Sim
                                </label>
                            </span>
                            <input type="text" id="enc" name="curso"  class="form-control" placeholder="Curso">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                <label for="mensagem" class="col-md-2 control-label">Mensagem<h11>*</h11></label>
                <div class="col-md-4">
                <div class="input-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                </div>

                </div>

            </div>



        </fieldset>
    </form>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>