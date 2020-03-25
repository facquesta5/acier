<?php
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php 
        //para leitura e divisão de url para usar no menu dropdown
        $url_amigo = $this->Url->build(null, true);
        $url_pedacos = explode("/", $url_amigo);
        //echo $url_pedacos[4];
        if($url_pedacos[4] == 'users' && (is_null($checkUser))){
        $title_url = "login";
        }else{
            $title_url = $url_pedacos[4];
        }
        if($url_pedacos[4] =='' && (!is_null($checkUser))){
        $title_url = "home";
        }

        $title_for_layout = 'ACIER | '.$title_url;
        echo $title_for_layout; ?>
    </title>
    <?php //$this->Html->meta('icon') ?>
    <?= $this->Html->css('bower_components/bootstrap/dist/css/bootstrap.min'); ?>
    <?= $this->Html->css('dist/css/sb-admin-2'); ?>
    <?= $this->Html->css('bower_components/font-awesome/css/font-awesome.min'); ?>
    <?= $this->Html->css('style'); ?>

    <?= $this->fetch('meta') ?>
   
    <?= $this->Html->script('bower_components/jquery/dist/jquery.min') ?>
    <?= $this->Html->script('bower_components/bootstrap/dist/js/bootstrap.min') ?>
    <?= $this->Html->script('bower_components/metisMenu/dist/metisMenu.min') ?>
    <?= $this->Html->script('bower_components/raphael/raphael-min') ?>
    <?= $this->Html->script('dist/js/sb-admin-2') ?>
</head>
<body>
<?php if(!is_null($checkUser)){?>
<div id="wrapper">
        <?php echo $this->element('menu'); ?>
        <div style="min-height: 224px;" id="page-wrapper">
                <?php echo $this->fetch('content'); ?>
        </div>
    </div>
<?php }else{ 
    echo $this->fetch('content'); 
 } ?>

</body>
</html>
