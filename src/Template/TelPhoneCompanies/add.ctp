<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tel Phone Companies'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="telPhoneCompanies form large-9 medium-8 columns content">
    <?= $this->Form->create($telPhoneCompany) ?>
    <fieldset>
        <legend><?= __('Add Tel Phone Company') ?></legend>
        <?php
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
