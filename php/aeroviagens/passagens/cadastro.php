<html>
    <head>
        <title>Cadastro</title>  
        <link rel="stylesheet" href="css/bootstrap.css" >
    </head>
    
<body  style="background-color: #FFFFFF;">
        
        <div class="row">
            <center>
            <img src="\aeroviagens\imgs\aero.png"/>
            </center>
            
        <div class="col-md-4"></div>
            <div class="well col-md-4">
                <center>
                <h1>Novo Cliente</h1>
                </center>
            </div>
    </div>
    
    <div class="row>">
        <div class="col-md-4"></div>
            <div class="col-md-2">
        
        <form action="dados2.php" method="post">
            
        <div class="form-group">  
            <label>Nome:</label><br>
                <input type="text" name="nome" placeholder="Digite seu nome">
        </div>
            
        <div class="form-group">   
        <label>CPF:</label><br>
            <input type="text" name="cpf" placeholder="Digite seu cpf">
        </div>
            
        <div class="form-group">
            <label>Data de nascimento:</label><br>
                <input type="date" name="ddn" placeholder="dd/mm/aaaa">
        </div>
            
        <div class="form-group">    
            <label>Endereço:</label><br>
                <input type="text" name="endereco" placeholder="Endereço">
        </div>
            
        <div class="form-group">    
            <label>Bairro:</label><br>
                <input type="text" name="bairro" placeholder="Bairro">
        </div>
            </div>            
        <div class="form-group">
            <label>CEP:</label><br>
                <input type="number" name="cep" placeholder="CEP">
        </div> 
                
        <div class="form-group">    
            <label>Telefone:</label><br>
                <input type="number" name="telefone" placeholder="(xx) xxxx-xxxx">
        </div>
            
        <div class="form-group">    
            <label>Celular:</label><br>
            <input type="number" name="celular" placeholder="(xx) xxxxx-xxxx">
        </div>
            
        <div class="form-group">
            <label>UF:</label><br>
                <input type="text" name="uf" placeholder="Estado">
        </div>
                
        <div class="form-group">
            <label>E-mail:</label><br>
                <input type="text" name="email" placeholder="E-mail">
        </div>
            
 <br> <br>
                
        <div class="col-md-4"></div>
                <div class="col-md-2">
         <center>   
        <button type="submit" class="btn btn-success">Salvar</button>
         </center>
                </div>
                    
                <div class="col-md-1">
        </form>
             <center>
        <form action="\aeroviagens\index.php">
            <button type="submit" class="btn btn-warning">Cancelar</button>
            
            </center> 
        </form>
        
                </div>
        
        </div>
    </body>
    
</html>