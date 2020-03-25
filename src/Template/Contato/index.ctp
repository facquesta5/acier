
<div class="row">
    <h1 class="page-header">
        Contato
    </h1>
</div>
<div class="row">
<?= $this->Flash->render() ?>
    <div class="panel panel-default">
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
             <?= $this->Form->create($contato); ?>
            <div class="form-group">
                <?php echo $this->Form->input('nome', array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('email', array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('msg', array('type'=>'textarea','class'=>'form-control')); ?>
            </div>
            
            
            <div class="form-group">
                <?= $this->Form->button(__('Enviar'), array('class'=>'btn btn-primary btn-lg')) ?>
                <?= $this->Form->end() ?>

            </div>
        </div>
        </div>
    </div>
</div>