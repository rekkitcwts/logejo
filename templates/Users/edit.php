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
            <h1 class="m-0"><?= __('Edit User {0}', $user->username) ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= $this->request->getAttribute('webroot') ?>dashboard"><?= __('Home') ?></a></li>
              <li class="breadcrumb-item"><?= $this->Html->link(__('Users'), ['action' => 'index']) ?></li>
	      <li class="breadcrumb-item active"><?= __('Edit User {0}', $user->username) ?></li>
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
                <h3 class="card-title"><?= __('Edit User {0}', $user->username) ?></h3>
		<?= $this->Flash->render() ?>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?= $this->Form->create($user) ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="editUserUsername">Username</label>
                    <?= $this->Form->text('username', ['label' => false,'required' => true, 'class' => 'form-control', 'id' => 'editUserUsername']) ?>
                  </div>
                  <div class="form-group">
                    <label for="editUserRole">User Role</label>
		    <?= $this->Form->select('role', ['int_admin' => 'Internal - Admin', 'ext_user' => 'External - Site User'], ['label' => false,'required' => true, 'class' => 'custom-select form-control', 'id' => 'editUserRole']) ?>
                  </div>
		  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
		      <?= $this->Form->hidden('is_active', ['id' => 'editUserIsActive']); ?>
                      <input type="checkbox" class="custom-control-input" id="is_active">
                      <label class="custom-control-label" for="is_active">Active User</label>
                    </div>
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

<?php
	$this->start('page_scripts');
?>
<script>
  $(function () {
    //console.log($('#editUserIsActive').val());
    var initialActive = $('#editUserIsActive').val();
    if (initialActive == 0)
    {
        $('#is_active').prop('checked', false);
    }
    else
    {
	$('#is_active').prop('checked', true);
    }

    $('#is_active').on('change', function(){
	statusNew = this.checked ? 1 : 0;
   	$('#editUserIsActive').val(statusNew);
	// console.log($('#editUserIsActive').val());
    }).change();
  });
</script>
<?php
	$this->end();
?>
