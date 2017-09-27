<html>
    <head>
        <title> Aeroviagens </title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
<body  style="background-color: #FFFFFF">
        
        <div class="row">
            <center>
            <img src="\aeroviagens\imgs\aero.png"/>
            </center>
            
        <nav class="navbar navbar-default">
            
            
            <center>
            
            <div>
            <form action="\aeroviagens\index.php">    
                <div class="col-md-1">
                    <button type="submit" name="home" class="btn btn-danger">Home</button>
                </div>
            </form>
            </div>      

            
            <div>
            <form action="\aeroviagens\passagens\psgs.php">
                <div class="col-md-1">
                    <button type="submit" name="psgs" class="btn btn-danger">Passagens</button>
                </div>     
            </form>
            </div>
        
        
          <div>
            <form action="\aeroviagens\sobre\sbr.php">
                <div class="col-md-1">
                    <button type="submit" class="btn btn-danger">Sobre</button>
                </div>
            </form>
            </div>
            </center>
        </nav>
            </div>

<?php
session_start ();
            
    $_SESSION["origem"];
    $_SESSION["destino"];
    $_SESSION["ida"];
    $_SESSION["volta"];
    $valor1  = 0;
    $valor2  = 0;
    $valorT  = 0;
            
            if ($_SESSION["origem"] == $_SESSION["destino"]){
                echo "
                    <br><br><br>
                    <center><h4>
                        Olár, nós desculpe, essa viagem está indisponivel no momento, por favor entre em contato através do numero: (84) 3233-6580  para obter mais informações.
                        </h4></center>";
                echo
                    "   <center>
                        <br><br><br>
                        <div>
                            <form action=\aeroviagens\passagens\psgs.php>
                                <button type=submit name=contCompra class=btn btn-success>Voltar</button>
                            </form>
                        </div>
                        </center>";
                    
            }
                
            elseif($_SESSION["ida"] == null) {
                 echo "
                        <br><br><br>
                        <center><h4>
                            Nos desculpe, e necessario informar a data de partida para poder prosseguir
                        </h4></center>";
                echo
                    "   <center>
                        <br><br><br>
                        <div>
                            <form action=\aeroviagens\passagens\psgs.php>
                                <button type=submit name=contCompra class=btn btn-success>Voltar</button>
                            </form>
                        </div>
                        </center>";
                
            }   
    
    
            elseif($_SESSION["volta"] == null)
                {
    
        switch($_SESSION["origem"]){
            case 1;
                $valor1 = 223.15;
                break;
            case 2;
                $valor1 = 199;
                break;
            case 3;
                $valor1= 272;
                break;
            case 4; 
                $valor1= 222;
                break;
            case 5; 
                $valor1= 228;
                break;
            case 6; 
                $valor1= 261;
                break;
            case 7; 
                $valor1= 227;
                break;
            case 8; 
                $valor1= 228;
                break;
            case 9; 
                $valor1= 372;
                break;
        }
        switch($_SESSION["destino"]){
            case 1;
                $valor2 = 223.15;
                break;
            case 2;
                $valor2 = 199;
                break;
            case 3;
                $valor2= 272;
                break;
            case 4; 
                $valor2= 222;
                break;
            case 5; 
                $valor2= 228;
                break;
            case 6; 
                $valor2= 261;
                break;
            case 7; 
                $valor2= 227;
                break;
            case 8; 
                $valor2= 228;
                break;
            case 9; 
                $valor2= 372;
                break;
        }
  
       
        $valorT = $valor1 + $valor2;
        $_SESSION["vtotal"] = $valorT;
        
        
           echo "
            <br><br>
            <center><b><h4>
            O valor total da viagem é: R$"
               . $_SESSION["vtotal"] . "
            </h4></b></center>";
            
           echo "
            <center>
            <br><br><br>
            <div>
                <form action=\aeroviagens\passagens\cadastro.php>
                    <button type=submit name=contCompra class=btn btn-success>Comprar</button>
                </form>
                  </div>
            </center>";
     }
    else //if($_SESSION["volta"] == null)
                {
    
        switch($_SESSION["origem"]){
            case 1;
                $valor1 = 223.15;
                break;
            case 2;
                $valor1 = 199;
                break;
            case 3;
                $valor1= 272;
                break;
            case 4; 
                $valor1= 222;
                break;
            case 5; 
                $valor1= 228;
                break;
            case 6; 
                $valor1= 261;
                break;
            case 7; 
                $valor1= 227;
                break;
            case 8; 
                $valor1= 228;
                break;
            case 9; 
                $valor1= 372;
                break;
        }
        switch($_SESSION["destino"]){
            case 1;
                $valor2 = 223.15;
                break;
            case 2;
                $valor2 = 199;
                break;
            case 3;
                $valor2= 272;
                break;
            case 4; 
                $valor2= 222;
                break;
            case 5; 
                $valor2= 228;
                break;
            case 6; 
                $valor2= 261;
                break;
            case 7; 
                $valor2= 227;
                break;
            case 8; 
                $valor2= 228;
                break;
            case 9; 
                $valor2= 372;
                break;
        }
  
       
        $valorT = $valor1 + $valor2;
        $_SESSION["vtotal"] = $valorT * 2;
        
        
           echo "
            <br><br>
            <center><b><h4>
            O valor total da viagem é: R$"
               . $_SESSION["vtotal"] . "
            </h4></b></center>";
            
           echo "
            <center>
            <br><br><br>
            <div>
                <form action=\aeroviagens\passagens\cadastro.php>
                    <button type=submit name=contCompra class=btn btn-success>Comprar</button>
                </form>
                  </div>
            </center>";
     }
    
    

?>
    
           
    </body>

</html> 