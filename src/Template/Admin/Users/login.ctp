<div class="col-md-12">
   <div class="col-md-2"></div>
   <div class="users form col-md-6">
    <p class="text-center login-header">Login here</p>
          <div class="panel panel-default">
             <div class="panel-body">
                   <?= $this->Flash->render('auth') ?>

                   <?= $this->Form->create() ?>

                   <h3 class="text-center log-heading-two"><?= __('Login') ?> </h3> 

                   <?= $this->Form->input('email',['label'=>false,'placeholder'=>'Email','class'=>'username form-control','required'=>'true']) ?><br>

                   <?= $this->Form->input('password',['label'=>false,'placeholder'=>'Password','class'=>'username form-control','required'=>'true']) ?><br>

                  <?= $this->Form->button(__('Login'),['class'=>'login-btn btn btn-info form-control']); ?> 

                   <?= $this->Form->end() ?>

                   <?= $this->Flash->render() ?>
            </div>
             <div class="panel-footer text-center login-footer">
                   <P> </P>
             </div>
         </div>
       </div>
</div>