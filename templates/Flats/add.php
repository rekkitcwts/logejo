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
            <?= $this->Html->link(__('List Flats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="flats form content">
            <?= $this->Form->create($flat) ?>
            <fieldset>
                <legend><?= __('Add Flat') ?></legend>
                <?php
                    echo $this->Form->control('flatname');
                    echo $this->Form->control('flattype');
                    echo $this->Form->control('flatlat');
                    echo $this->Form->control('flatlng');
                    echo $this->Form->control('flatlgbt');
                    echo $this->Form->control('is_active');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
