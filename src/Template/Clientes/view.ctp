<div class="row">
    <h1 class="page-header">
        Detalhes do cliente 
    </h1>
</div>
<div class="row">
    <div class="panel-body">
        <div class="form-group">
            <h4>Apelido</h4>
            <p><?= h($cliente->apelido) ?></p>
        </div>
        <div class="form-group">
            <h4>Razao Social</h4>
            <p><?= h($cliente->razao_social) ?></p>
        </div>
        <div class="form-group">
            <h4>Cnpj</h4>
            <p><?= h($cliente->cnpj) ?></p>
        </div>
        <div class="form-group">    
            <h4>Telefone</h4>
            <p><?= h($cliente->telefone) ?></p>
        </div>
        <div class="form-group">    
            <h4>Endereco</h4>
            <p><?= h($cliente->endereco) ?></p>
        </div>
        <div class="form-group">    
            <h4>Id</h4>
            <p><?= $this->Number->format($cliente->id) ?></p>
        </div>
    </div>  
</div>