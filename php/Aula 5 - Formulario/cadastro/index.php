<html>
<head>
<title>Cadastro</title>  
</head>
    <body>
        <h1>Novo Cliente</h1>
        
        <form action="resultado.php">
            
        <label>Nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome">
            
            
        <label>CPF</label>
            <input type="text" name="cpf" placeholder="Digite seu cpf">
            
        
        <label>Data de nascimento</label>
            <input type="date" name="ddn" placeholder="dd/mm/aaaa">
            <br> <br>
            
            
        <label>Endereço</label>
            <input type="text" name="endereco" placeholder="Endereço">
            
            
        <label>Bairro</label>
            <input type="text" name="bairro" placeholder="Bairro">
            
            
        <label>CEP</label>
            <input type="number" name="cep" placeholder="CEP">
            
            
        <label>Data de Cadastro</label>
            <input type="date" name="ddc" placeholder="Data de cadastro">
            <br> <br>
            
            
        <label>Municipio</label>
            <input type="text" name="municipio">
            
            
        <labe>Telefone</labe>
            <input type="number" name="telefone">
            
            
        <label>Celular</label>
            <input type="number" name="celular" placeholder="(xx) xxxxx-xxxx">
            
            
        <label>UF</label>
            <input type="text" name="uf1">
            
            
        <label>Inscrição estadual</label>
            <input type="text" name="ie">
            
            
        <label>UF</label>
            <input type="text" name="uf2">
            <br> <br>
            
            
        <button type="submit">Salvar</button>
            
        </form>
        
        <form action="index.php">
            <button type="submit">Cancelar</button>
        </form>
        
    </body>
</html>