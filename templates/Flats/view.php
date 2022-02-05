<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flat $flat
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Flat'), ['action' => 'edit', $flat->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Flat'), ['action' => 'delete', $flat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flat->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Flats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Flat'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="flats view content">
            <h3><?= h($flat->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Flatname') ?></th>
                    <td><?= h($flat->flatname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Flattype') ?></th>
                    <td><?= h($flat->flattype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($flat->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Flatlat') ?></th>
                    <td><?= $this->Number->format($flat->flatlat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Flatlng') ?></th>
                    <td><?= $this->Number->format($flat->flatlng) ?></td>
                </tr>
                <tr>
                    <th><?= __('Flatlgbt') ?></th>
                    <td><?= $this->Number->format($flat->flatlgbt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Active') ?></th>
                    <td><?= $this->Number->format($flat->is_active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($flat->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($flat->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
