<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $iteFieldType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $iteFieldType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ite Field Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="iteFieldTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($iteFieldType) ?>
    <fieldset>
        <legend><?= __('Edit Ite Field Type') ?></legend>
        <?php
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
