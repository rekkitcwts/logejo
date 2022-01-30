<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= __('Users') ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?= __('Home') ?></a></li>
              <li class="breadcrumb-item active"><?= __('Users') ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
	<div class="users index content">
    		<?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-left btn btn-success']) ?>

    	<div class="table-responsive">
       	<table id="users" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('role') ?></th>
                  <!--  <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th> -->
                    <th><?= $this->Paginator->sort('is_active') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->role) ?></td>
                  <!--  <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td> -->
                    <td>
			<?php
				if ($this->Number->format($user->is_active) == 1)
				{
				echo '<span class="right badge badge-success">ACTIVE</span>';
				}
				else
				{
				echo '<span class="right badge badge-danger">INACTIVE</span>';
				}
			?>
		    </td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'button float-left btn btn-default']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'button float-left btn btn-warning']) ?> 
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
	</div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php
	$this->start('page_scripts');
?>
<script>
  $(function () {
    $("#users").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    });
  });
</script>
<?php
	$this->end();
?>
