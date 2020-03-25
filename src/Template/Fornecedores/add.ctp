<div class="row">
    <h1 class="page-header">
        Novo fornecedor
    </h1>
</div>
<div class="row">
<?= $this->Flash->render() ?>
    <div class="panel panel-default">
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
             <?= $this->Form->create($fornecedore) ?>
            <div class="form-group">
                <?php echo $this->Form->input('apelido', array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('razao_social', array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('cnpj', array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('telefone', array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('contato', array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('endereco', array('class'=>'form-control')); ?>
            </div>
            
            
            <div class="form-group">
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>

            </div>
        </div>
        </div>
    </div>
</div>