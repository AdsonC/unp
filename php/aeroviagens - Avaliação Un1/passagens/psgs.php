<html>
    <head>
        <title> Aeroviagens </title>
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
            <form action="\aeroviagens\sobre\sbr.php">
                <div class="col-md-1">
                    <button type="submit" class="btn btn-danger">Sobre</button>
                </div>
            </form>
            </div>
            </center>
        </nav>
            </div>
        
      <div>
        <br><br>
        <form action="dados1.php" method="POST">
            
         <div class="col-md-3"></div>   
        <div class="col-md-3">
            
    <n><h4>Origem: </h4></n><select name="origem"> Origem
            <option value="1">Natal-RN</option>
            <option value="2">Maranhão-MA</option>
            <option value="3">Fortaleza-CE</option>
            <option value="4">Teresina-PI</option>
            <option value="5">João Pessoa-PB</option>
            <option value="6">Recife-PE</option>
            <option value="7">Maceió-AL</option>
            <option value="8">Aracaju-SE</option>
            <option value="9">Salvador-BA</option>
            
            </select>
        </div>
   
        <div class="col-md-4">
    <n><h4>Destino: </h4></n> <select name="destino">Destino
            <option value="1">Natal-RN</option>
            <option value="2">Maranhão-MA</option>
            <option value="3">Fortaleza-CE</option>
            <option value="4">Teresina-PI</option>
            <option value="5">João Pessoa-PB</option>
            <option value="6">Recife-PE</option>
            <option value="7">Maceió-AL</option>
            <option value="8">Aracaju-SE</option>
            <option value="9">Salvador-BA</option>
            
            </select>
        </div>       
   <br> <br> <br> <br> <br> <br> 
            
          <div class="col-md-3"></div>    
        
            <div class="col-md-3">
        <label>Ida: </label> <br>
            <input type="date" name="ida" placeholder="Informe a data que gostaria viajar">
        </div>
    
        <div class="col-md-4"s>
        <label>Volta: </label> <br>
            <input type="date" name="volta" placeholder="Informe a data que gostaria voltar">
        </div>
            
  <br> <br> <br> <br> <br> <br> <br>           
  <center>           
            <div>
        <button type="submit" name="psqsValor" class="btn btn-success">Pesquisar</button>
        </div>
      </center> 
            
        </form>
          
    </div>
</body>
</html>