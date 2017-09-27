<html>
    <head>
        <title> Sobre </title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body  style="background-color: #FFFFFF;">
        
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
            <form action="sbr.php">
                <div class="col-md-1">
                    <button type="submit" class="btn btn-danger">Sobre</button>
                </div>
            </form>
            </div>
        </center>
    </nav>
            

                
      </div>
 
        
<div>
 <?php         
    

        echo "
            <br><br>
            <center>
            <h1><b>Sobre a Aeroviagens</b></h1>
            </center>
            <br>";
    
    
        
            
        echo "
            <div class=row>
            <div class=col-md-1></div>
            <div class=col-md-10>
        Você sabia que a Aeroviagens foi a primeira companhia aérea do Brasil a trabalhar de maneira inovadora?

Este novo modelo de negócio revolucionou o mercado de aviação no país, democratizando o acesso ao transporte aéreo.

Também fomos pioneiros ao lançar o primeiro serviço de check-in feito inteiramente pelo celular, o serviço de geolocalização mobile para clientes e um site com recursos de acessibilidade para atender pessoas com deficiência visual e motora.

Operamos desde 2001 e, hoje, estamos entre as companhias aéreas que mais crescem no mundo. Também somos a empresa de aviação que mais transporta passageiros no Brasil, realizando cerca de 900 voos por dia.
        </div>
        </div>";
    
 ?>       
    </div>
    
        
        
        
    
</body>
</html>