<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="index.html">ACIER</a>
            </div>
            <div class="sidebar-nav navbar-collapse">
                   
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                
                <!-- -->
                <ul class="nav navbar-nav side-nav">
                    <!--  -->
                    <?php 
                    //programador para leitura e divisão de url para usar no menu dropdown
                    $url_amigo = $this->Url->build(null, true);
                    $url_pedacos = explode("/", $url_amigo);
                    //echo $url_pedacos[4];
                    ?>
                    <!-- dropdown fornecedores-->
                    <li>
                        <?php echo $this->Html->link(__('<i class="fa fa-fw fa-arrows-v"></i> Fornecedores <i class="fa fa-fw fa-caret-down"></i>'),
                                ['controller'=>'fornecedores',
                                'action' => 'index',],
                                ['href'=>'javascript:;',
                                'data-toggle'=>'collapse',
                                'data-target'=>'#demo',
                                'class'=>'',
                                'escape'=>false]);
                        ?>

                        <?php if($url_pedacos[4] == 'fornecedores'){  ?>
                        <ul id="demo" class="collapse in">
                        <?php }elseif($url_pedacos[4] != 'fornecedores') { ?>
                        <ul style="" aria-expanded="true" id="demo" class="collapse">
                        <?php } ?>
                            <li>
                                <?= $this->Html->link(__('<i class="fa fa-fw fa-caret-down"></i> Listar'),
                                ['controller'=>'fornecedores',
                                'action' => 'index',],
                                ['escape'=>false]) ?>
                            </li>
                            <li>
                                <?= $this->Html->link(__('<i class="fa fa-fw fa-caret-down"></i> Adicionar'),
                                ['controller'=>'fornecedores',
                                'action' => 'add',],
                                ['escape'=>false]) ?>
                            </li>
                        </ul>
                    </li> 
                    <!-- dropdown fornecedores -->
                    <!-- dropdown clientes -->
                    <li>
                        <?php echo $this->Html->link(__('<i class="fa fa-fw fa-arrows-v"></i> Clientes <i class="fa fa-fw fa-caret-down"></i>'),
                                ['controller'=>'clientes',
                                'action' => 'index',],
                                ['href'=>'javascript:;',
                                'data-toggle'=>'collapse',
                                'data-target'=>'#demo2',
                                'class'=>'',
                                'escape'=>false]);
                        ?>
                        <?php if($url_pedacos[4] == 'clientes'){  ?>
                        <ul id="demo" class="collapse in">
                        <?php }elseif($url_pedacos[4] != 'clientes') { ?>
                        <ul style="" aria-expanded="true" id="demo2" class="collapse">
                        <?php } ?>
                            <li>
                                <?= $this->Html->link(__('<i class="fa fa-fw fa-caret-down"></i> Listar'),
                                ['controller'=>'clientes',
                                'action' => 'index',],
                                ['escape'=>false]) ?>
                            </li>
                            <li>
                                <?= $this->Html->link(__('<i class="fa fa-fw fa-caret-down"></i> Adicionar'),
                                ['controller'=>'clientes',
                                'action' => 'add',],
                                ['escape'=>false]) ?>
                            </li>
                        </ul>
                    </li> 
                    <!-- dropdown clientes-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>