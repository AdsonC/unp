<html>
    <head>
        <title>Voucher</title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        
<!--        <form action="\aeroviagens\passagens\pdf.php">-->
        <div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default coupon">
      <div class="panel-heading" id="head">
        <div class="panel-title" id="title">
          <img src="aeroviagens\imgs\aero.png">
          <span class="hidden-xs">Voucher de Confirmação</span>
          <span class="visible-xs">Voucher Aeroviagens</span>
        </div>
      </div>
      <div class="panel-body">
        <img src="\aeroviagens\imgs\aero180x75.png" class="coupon-img img-rounded">
        <div class="col-md-9">
          <ul class="items">
            <?php
              session_start();
             echo
                 "<li><b> Nome: </b>" . $_SESSION["nome"] . "</li>";
              echo
                 "<li><b> CPF: </b>" . $_SESSION["cpf"] . "</li>";
              echo
                 "<li><b> Endereço: </b>" . $_SESSION["endereco"] . "<b>   Bairro: </b>" . $_SESSION["bairro"] . "<b>   CEP: </b>" . $_SESSION["cep"] . "</li>";
              echo
                 "<li><b> Telefone: </br" . $_SESSION["telefone"] . "</li>";
              echo
                  "<li><b> Estado: </b>" . $_SESSION["uf"] . "</li>";
              echo
                  "<li><b> Email: </b>" . $_SESSION["email"] . "</li>";
                
             
           
              echo"
          </ul>
        </div>
        <div class=col-md-3>
          <div class=offer>
            <span class=usd><sup>R$</sup></span>
            <span class=number>" . $_SESSION["vtotal"] . "</span>";
            echo
            "<br><br><br>
            <span class=cents><sup>Embarque: " .$_SESSION["ida"]. "</sup></span>";
                echo"
          </div>
        </div>
        <div class=col-md-12>
            <p class=disclosure>Estamos agradecidos por escolher a <b>Aeroviagens</b> para viagem, preparamos tudo de bom e melhor para garantir seu conforto e segurança.</p>
        </div>
      </div>
      <div class=panel-footer>
        <div class=exp>Aeroviagens</div>
      </div>
    </div>
  </div>
</div>
";

              
              ?>
            
              
<!--    </form>          -->
    
    
 </body>
</html>