<div class="row">
    <h1 class="page-header">
        Editar Usuário
    </h1>
</div>
<div class="row">
<?= $this->Flash->render() ?>
    <div class="panel panel-default">
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
             <?= $this->Form->create($user) ?>
            <div class="form-group">
                <?php echo $this->Form->input('nome',array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('telefone',array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('email',array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('username',array('class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('password',array('class'=>'form-control')); ?>
            </div>
            
            
            <div class="form-group">
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>

            </div>
        </div>
        </div>
    </div>
</div>