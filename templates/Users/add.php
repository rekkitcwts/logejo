<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= __('Add Users') ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= $this->request->getAttribute('webroot') ?>dashboard"><?= __('Home') ?></a></li>
              <li class="breadcrumb-item"><?= $this->Html->link(__('Users'), ['action' => 'index']) ?></li>
	      <li class="breadcrumb-item active"><?= __('Add User') ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
		<!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add a new user below.</h3>
		<?= $this->Flash->render() ?>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?= $this->Form->create($user) ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="addUserUsername">Username</label>
                    <?= $this->Form->text('username', ['label' => false,'required' => true, 'class' => 'form-control', 'id' => 'addUserUsername']) ?>
                  </div>
                  <div class="form-group">
                    <label for="addUserPassword">Password</label>
                    <?= $this->Form->password('password', ['label' => false,'required' => true, 'class' => 'form-control', 'id' => 'addUserPassword']) ?>
                  </div>
                  <div class="form-group">
                    <label for="addUserRole">User Role</label>
                  <select name="role" class="custom-select form-control" id="addUserRole">
                    <option value="int_admin">Internal - Admin</option>
                    <option value="ext_user">External - Site User</option>
                  </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
		  <?= $this->Form->submit(__('Submit'), ['class' => 'btn btn-primary']); ?>
</div>
                </div>
              <?= $this->Form->end() ?>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
	  </div> <!--/. col-md-12 -->
	</div><!--/. row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
