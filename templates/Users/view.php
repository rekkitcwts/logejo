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
            <h1 class="m-0"><?= __('Viewing User {0}', $user->username) ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= $this->request->getAttribute('webroot') ?>dashboard"><?= __('Home') ?></a></li>
              <li class="breadcrumb-item"><?= $this->Html->link(__('Users'), ['action' => 'index']) ?></li>
	      <li class="breadcrumb-item active"><?= __('View User') ?></li>
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
	     <?php
		if ($this->Number->format($user->is_active)==1)
		{
		  $card_colour = "success";
		}
		else
		{
		  $card_colour = "danger";
		}
	     ?>
	     <div class="card card-<?= $card_colour ?>">
              <div class="card-header">
                <h3 class="card-title">User Information</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td><?= __('Username') ?></td>
                      <td><?= h($user->username) ?></td>
                    </tr>
                    <tr>
                      <td><?= __('Role') ?></td>
                      <td>
                        <?= h($user->role) ?>
                      </td>
                    </tr>
                    <tr>
                      <td><?= __('Created At') ?></td>
                      <td>
                        <?= h($user->created) ?>
                      </td>
                    </tr>
                    <tr>
                      <td><?= __('Last Modified') ?></td>
                      <td>
                        <?= h($user->modified) ?>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
	  </div>
	</div><!--/. row -->
	<div class="row">
	  <div class="col-md-12">
            <!-- Actions card -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Actions</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
		<?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'btn btn-warning']) ?>
            
            <?= $this->Html->link(__('Back to users list'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
	  </div>
	</div> <!-- row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
