<!-- Criar um arquivo imprimir.php que imprima a variável $_GET através de um var_dump.-->
<!-- inserir ?nome=valor na url em caso do GET. -->
<?php var_dump($_POST) ?>

<!DOCTYPE HTML>
<html>
<body>
<form action="imprimir.php" method="POST">
Nome: <input type="text" name="nome"><br>
E-mail: <input type="text" name="email"><br>
Como você ficou sabendo deste site? <br>
<input type="checkbox" name="site" value="google" id="google">
<label for="google">Google</label><br>
<input type="checkbox" name="site" value="amigo" id="friend">
<label for="friend">Amigo</label><br>
Declare seu sexo: <br>
<input type="radio" name="gender" value="feminino "id="fem">
<label for="fem">feminino</label>
<input type="radio" name="gender" value="masculino" id="masc">
<label for="masc">masculino</label>
<input type="radio" name="gender" value="não declarado" id="none">
<label for="none">não declarar</label><br>
<select name="select">
  <option value="valor1">1</option> 
  <option value="valor2" selected>2</option>
  <option value="valor3">3</option>
  <option value="valor4">4</option> 
  <option value="valor5">5</option>
  <option value="valor6">6</option>
  <option value="valor7">7</option> 
  <option value="valor8">8</option>
  <option value="valor9">9</option>
  <option value="valor10">10</option>
</select> <br>
<input type="checkbox" name="terms" id="terms">
<label for="terms">Aceitar termos e condições</label><br>
<input type="submit">
</form>
</body>
</html>

<?php var_dump($_POST);                          /* quebra de linha */ echo '<br>';                      
//a. O que acontece agora em imprimir.php?
// RESPOSTA: imprime um array com os campos preenchidos no formulário.
// b. Modificar imprimir.php para que imprima algum valor específico de $_GET. 
echo $_POST['nome'];                             /* quebra de linha */ echo '<br>';
//c. Modificar imprimir.php para que imprima todos os valores utilizando um foreach. 
foreach ($_POST as $value) {
    echo "$value, ";
}                                                /* quebra de linha */ echo '<br>';
/* Modificar o HTML do ponto 2 para que ele envie os dados através de
POST. Como deveríamos modificar imprimir.php para que continue
funcionando? */
//RESPOSTA: Devemos modificar a superglobal $_GET para $_POST.
// Adicionar ao formulário os seguintes inputs:
// a. Adicionar uma checkbox com opções, que responda à pergunta “Como você ficou sabendo deste site?”. 
// FEITO.
// b. Adicionar um radio button para selecionar o sexo. 
// FEITO
// c. Adicionar um select de 1 a 10 que responda à pergunta “Dormiu bem ontem?”.
// FEITO
// d. Adicionar uma checkbox para aceitar “Termos e Condições”. 
// FEITO.
// e. Completar o formulário, selecionando várias opções das checkboxes, e enviá-lo através do método POST. 
// O resultado mudou como você esperava?
// Sim, cada campo foi adicionado ao array de elementos _POST
/* Testar a função de php getAllHeaders() e imprimir o resultado. O que
encontramos? Imprimir todos os valores usando foreach. */
echo implode(getAllHeaders());               /* quebra de linha */ echo '<br>';
$header = getAllHeaders();
foreach ($header as $value) {
    echo "$value, ";
}                                             /* quebra de linha */ echo '<br>';
/* 6. Assim como imprimimos $_POST e $_GET, existem outras variáveis
    globais vamos imprimir. Testar cada variável em um pedido vazio ou
    vindo de um formulário: */
    echo "<pre>";
    print_r($_SERVER);                               /* quebra de linha */ echo '<br>';
    echo "</pre>";
    echo "<pre>";
    print_r($_FILES);                                /* quebra de linha */ echo '<br>';
    echo "</pre>";
    echo "<pre>";
    print_r($_REQUEST);                              /* quebra de linha */ echo '<br>';
    echo "</pre>";
    echo "<pre>";
    print_r($_SESSION);                              /* quebra de linha */ echo '<br>';
    echo "</pre>";
    echo "<pre>";
    print_r($_ENV);                                  /* quebra de linha */ echo '<br>';
    echo "</pre>";
    echo "<pre>";
    print_r($_COOKIE);                               /* quebra de linha */ echo '<br>';
    echo "</pre>";
    echo "<pre>";
    print_r($GLOBALS);                               /* quebra de linha */ echo '<br>';
    echo "</pre>";