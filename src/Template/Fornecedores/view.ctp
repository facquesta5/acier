<div class="row">
    <h1 class="page-header">
        Detalhes do fornecedor 
    </h1>
    <ol class="breadcrumb">
    <li class="active">
        <i class="fa fa-dashboard"></i> Detalhes do fornecedor
    </li>
    </ol>
</div>
<div class="row">
    <div class="panel-body">
        <div class="form-group">
            <h4>Apelido</h4>
            <p><?= h($fornecedore->apelido) ?></p>
        </div>
        <div class="form-group">
            <h4>Razao Social</h4>
            <p><?= h($fornecedore->razao_social) ?></p>
        </div>
        <div class="form-group">
            <h4>Cnpj</h4>
            <p><?= h($fornecedore->cnpj) ?></p>
        </div>
        <div class="form-group">    
            <h4>Telefone</h4>
            <p><?= h($fornecedore->telefone) ?></p>
        </div>
        <div class="form-group">    
            <h4>Endereco</h4>
            <p><?= h($fornecedore->endereco) ?></p>
        </div>
        <div class="form-group">    
            <h4>Id</h4>
            <p><?= $this->Number->format($fornecedore->id) ?></p>
        </div>
    </div>  
</div>