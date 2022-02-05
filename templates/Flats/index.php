<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flat[]|\Cake\Collection\CollectionInterface $flats
 */
?>
<div class="flats index content">
    <?= $this->Html->link(__('New Flat'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Flats') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('flatname') ?></th>
                    <th><?= $this->Paginator->sort('flattype') ?></th>
                    <th><?= $this->Paginator->sort('flatlat') ?></th>
                    <th><?= $this->Paginator->sort('flatlng') ?></th>
                    <th><?= $this->Paginator->sort('flatlgbt') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('is_active') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flats as $flat): ?>
                <tr>
                    <td><?= $this->Number->format($flat->id) ?></td>
                    <td><?= h($flat->flatname) ?></td>
                    <td><?= h($flat->flattype) ?></td>
                    <td><?= $this->Number->format($flat->flatlat) ?></td>
                    <td><?= $this->Number->format($flat->flatlng) ?></td>
                    <td><?= $this->Number->format($flat->flatlgbt) ?></td>
                    <td><?= h($flat->created) ?></td>
                    <td><?= h($flat->modified) ?></td>
                    <td><?= $this->Number->format($flat->is_active) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $flat->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flat->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flat->id)]) ?>
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
