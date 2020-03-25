<div class="row">
    <h1 class="page-header">
        Clientes 
    </h1>
</div>
<!-- /.col-lg-6 -->
<div class="row">
    <?= $this->Flash->render() ?>
    <div class="panel panel-default">
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <td><?php echo $this->Html->link('<i class="fa fa-plus"></i> Adicionar cliente ',array('controller'=>'clientes','action'=>'add'),array('escape'=>false)); ?></td>
                        </tr>
                        <tr>
                            <th><?= $this->Paginator->sort('apelido') ?></th>
                            <th><?= $this->Paginator->sort('telefone') ?></th>
                            <th><?= $this->Paginator->sort('contato') ?></th>
                            <th style="text-align: center">detalhes</th>
                            <th style="text-align: center">editar</th>
                            <th style="text-align: center">excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($clientes as $cliente): ?>
                            <tr>
                                <td><?= h($cliente->apelido) ?></td>
                                <td><?= h($cliente->telefone) ?></td>
                                <td><?= h($cliente->contato) ?></td>
                                <td class="acoes_table">
                                <?= $this->Html->link(__('<i class="fa fa-eye"></i>'), ['action' => 'view', $cliente->id],['escape'=>false]) ?>
                                </td>
                                <td class="acoes_table">
                                <?= $this->Html->link(__('<i class="fa fa-pencil"></i>'), ['action' => 'edit', $cliente->id],['escape'=>false]) ?>
                                </td>
                                <td class="acoes_table">
                                    
                                    <?= $this->Form->postLink(__('<i class="fa fa-times"></i>'), ['action' => 'delete', $cliente->id], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                </ul>
                <p><?= $this->Paginator->counter() ?></p>
            </div>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
</div>