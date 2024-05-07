<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO ALUNO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <?php require ("conexao.php"); ?>
    <h2>CADASTRO DE ALUNO</h2>
    <form action="create.php" method="post">
    <div class="form-group">
    <label for="n1">Nome</label>
    <input type="text" class="form-control" id="n1" name="nome" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Sexo</label><br>
    <label class="radio-inline">
  <input type="radio" name="sexo" id="inlineRadio1" value="M"> Masculino
</label>
<label class="radio-inline">
  <input type="radio" name="sexo" id="inlineRadio2" value="F"> Feminino
</label>
<label class="radio-inline">
  <input type="radio" name="sexo" id="inlineRadio3" value="A"> Alienígena
</label>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="endereco" placeholder="Endereço">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Número</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="numero" placeholder="Número">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Complemento</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="complemento" placeholder="Complemento">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Bairro</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="bairro" placeholder="Bairro">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cidade</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="cidade" placeholder="Cidade">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">UF</label>
    <select class="form-control" name="uf">
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
    <option value="ET">Alienígena</option>
</select>
  </div>
  <label for="exampleInputEmail1">Modalidade</label> <br>
  <select name="modalidade" id="modalidade">
    <option value="Natação">Natação</option>
    <option value="Pilates">Pilates</option>
    <option value="Musculação">Musculação</option>
  </select> <br> <br>
  <button type="submit" class="btn btn-primary">Enviar</button> <br> <br>
</form>
</body>
</html>