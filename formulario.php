   <!DOCTYPE html>
<?php
error_reporting(0);
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">

         <link rel="stylesheet" href="css/style.css">
        
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.10.1/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.10.1/dist/js/uikit.min.js"></script>

    <!-- Adicionando Javascript -->
    <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }

    };



function mascara(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "14");
   if (v.length == 3 || v.length == 7) i.value += ".";
   if (v.length == 11) i.value += "-";

}

function envia() {
        var rua = document.getElementById("rua").value;
        var nome = document.getElementById("nome").value;
        var cpf = document.getElementById("cpf").value;
        var numero = document.getElementById("numero").value;
        if(rua == '' ) {
            alert("Preencha o CEP corretamente!");
        }
        if(nome == '' ) {
            alert("Preencha o Nome corretamente!");
        }
        if(cpf == '' ) {
            alert("Preencha o cpf corretamente!");
        }
        if(numero == '' ) {
            alert("Preencha o numero corretamente!");
        }
        
        else {
            document.getElementById("formulario").submit();
        }   
    }
    </script>
    </head>

    <body>
        <?php
        $produto = $_GET["produto"];
        if(!isset($produto)){
            header('location: /index.php');
        }  
        ?>



 <div class="uk-container">



            <h1 class="titulo">Dados do Pedido</h1>

    <!-- Inicio do formulario -->
    <div class="formulario">
      <form method="post" action="cadastrar.php" id="formulario">
        <input name="produto" type="hidden" id="produto" value="<?php echo $produto; ?>"/></label>
        <label class="uk-legend">Nome: </label>
        <input class="uk-input" name="nome" type="text" id="nome" required/><br />
        <label class="uk-legend">CPF: </label>
        <input class="uk-input" name="cpf" type="text" id="cpf" oninput="mascara(this)"  maxlength="11" required/><br />
        <label class="uk-legend">Cep: </label>
        <input class="uk-input" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" required /><br />
        <label class="uk-legend">Rua: </label>
        <input class="uk-input" name="rua" type="text" id="rua" size="60" readonly="readonly" /><br />
        <label class="uk-legend">Bairro:
        <input class="uk-input" name="bairro" type="text" id="bairro" size="40" readonly="readonly"/></label><br />
         <label class="uk-legend">Numero: </label>
        <input class="uk-input" name="numero" type="text" id="numero" required/><br />
        <label class="uk-legend">Complemento:
        <input class="uk-input" name="complemento" type="text" id="complemento" /></label><br />
        <label class="uk-legend">Cidade: </label>
        <input class="uk-input" name="cidade" type="text" id="cidade" size="40" readonly="readonly" /><br />
        <label class="uk-legend">Estado:
        <input class="uk-input" name="uf" type="text" id="uf" size="2" readonly="readonly" /></label><br />
        <label class="uk-legend">IBGE: </label>
        <input class="uk-input" name="ibge" type="text" id="ibge" size="8" readonly="readonly"/><br /><br><br>
        <div style="text-align: center;">
        <button   class=" btnComp " type="button" value="cadastrar" onclick="return envia()">Cadastrar </button> 
    </div>
      </form>
  </div>


  </div>
    </body>

    </html>