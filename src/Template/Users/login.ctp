
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <div class="login_flash">
            <?php echo $this->Flash->render('auth', array('class' => 'super')); ?>
            </div>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <div class="logo_login">
                        ACIER
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php echo $this->Form->create('user'); ?>
                            <fieldset>
                                <div class="form-group">
                                    <?php echo $this->Form->input('username',array('class'=>'form-control')); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->input('password',array('class'=>'form-control')); ?>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <?php echo $this->Form->button('Entrar'); ?>
                                <?php echo $this->Form->end(); ?>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
