<div class="row">
<div class="col-lg-12">
    <h1 class="page-header">
        Alterar Cliente 
    </h1>
</div>
</div>
<!-- /.col-lg-6 -->
<div class="row">
<?= $this->Flash->render() ?>
    <div class="panel panel-default">
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
             <?= $this->Form->create($cliente) ?>
            <div class="form-group">
                <?php echo $this->Form->input('apelido',array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('razao_social',array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('cnpj',array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('telefone',array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('contato',array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('endereco',array('class'=>'form-control')); ?>
            </div>
             
            <div class="form-group">
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>

            </div>
        </div>
        </div>
    </div>
</div>