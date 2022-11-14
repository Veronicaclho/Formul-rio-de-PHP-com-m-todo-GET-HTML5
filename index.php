<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title> 
    <link rel="shortcut icon" href="favicon-32x32.png" type="image/x-icon">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   
</head>
<style>
   body{
      display:block;
      color:white;
      font-weight:bold;
      background-image: url("702742.jpg");
      background-size: 100%;
      background-repeat: no-repeat, repeat;
   }
</style>
<body class="d-flex justify-content-center mt-5">

<div class="col-md-10">
<form class="row g-3" method="get" action="formulario.php">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" name="datanasc">
  </div>
  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Telefone</label>
    <input type="number" class="form-control" name="telefone">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Endereço</label>
    <input type="text" class="form-control" name="endereco" placeholder="seu endereço ">
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Cidade</label>
    <input type="text" class="form-control" name="cidade">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Estado</label>
    <select   class="form-select" name="estado">
       
      <option  selected>Selecione o estado</option>
      <option value="AC">Acre</option>
      <option value="Al">Alagoas</option>
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
      <option value="RJ">Rio de Janiro</option>
      <option value="RN">Rio Grande do Norte</option>
      <option value="RS">Rio Grande do Sul</option>
      <option value="RO">Rondônia</option>
      <option value="RR">Roraima</option>
      <option value="SC">Santa Catarina</option>
      <option value="SP">São Paulo</option>
      <option value="SE">Sergipe</option>
      <option value="TO">tocantins</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">CEP</label>
    <input type="text" class="form-control" name="cep">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-success">Cadastrar</button>
  </div>
</form>
</div>
<!--<fieldset>
    <legend>
      <strong>Formulário</strong>
   </legend>
   <form method="get" action="formulario.php">
    <table>
        <tr>
           <td><b>Nome:</b> <input type="text" name="nome" size="70" > </td>
           <td>
            <b>Data de Nascimento:</b>
            <input type="date" name="datanasc">
           </td>
        </tr>
        <tr>
            <td><b>Endereço:</b> <input type="text" name="endereco" size="70"></td>
            <td><b>Estado:</b> 
                <select name= "estado">
               <option value=""selected>Selecione o estado</option>
               <option value="AC">Acre</option>
               <option value="Al">Alagoas</option>
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
               <option value="RJ">Rio de Janiro</option>
               <option value="RN">Rio Grande do Norte</option>
               <option value="RS">Rio Grande do Sul</option>
               <option value="RO">Rondônia</option>
               <option value="RR">Roraima</option>
               <option value="SC">Santa Catarina</option>
               <option value="SP">São Paulo</option>
               <option value="SE">Sergipe</option>
               <option value="TO">tocantins</option>
               </select>
            </td>
         </tr>
         <tr>
            <td><b>CEP:</b> <input type="text" name="cep"></td>
            <td><b>Telefone:</b> <input type="text" name="telefone"></td>
      </tr>
       
    </table>
    <button type="submit">Cadastrar</button>
    </form>
 </fieldset><br>  -->
 
</body>
</html>