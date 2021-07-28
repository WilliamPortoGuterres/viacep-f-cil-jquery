<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>busca cep fácil</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <h1 class=" mb-5 mt-5">Busca cep fácil viacep</h1>
        </div>

        <form action="#" method="post">
            <div class="row justify-content-md-center">
                <div class="col-md-6 mb-3">
<div class="container">
<p>Escolha a cidade e UF, após digitar o nome da rua clique no campo cep se existir ele retornara o cep e uma lista de até 50 nomes em um campo select a baixo.   </p>
</div>
                    <div class="row justify-content-md-center">
                        <div class="mb-3 col-md-9">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="Porto Alegre">
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="mb-3 col-md-3">
                            <label for="uf">UF</label>
                            <input type="text" class="form-control" id="uf" name="uf" placeholder="RS" value="RS">
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-md-9 mb-3">
                            <label for="endereco">Endereço </label>
                            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua">
                            <select name="logradouro" id="logradouro">
                            </select>
                            <div class="mb-3">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control cep" id="cep" name="cep" placeholder="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-sm"> </div>
                <div class="col-2-sm">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
                </div>
                <div class="col-sm"> </div>
            </div>

        </form>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="script/localiza_cep.js"></script>
</body>

</html>