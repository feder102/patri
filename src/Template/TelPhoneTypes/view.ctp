<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\TelPhoneType $telPhoneType
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tel Phone Type'), ['action' => 'edit', $telPhoneType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tel Phone Type'), ['action' => 'delete', $telPhoneType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telPhoneType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tel Phone Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tel Phone Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="telPhoneTypes view large-9 medium-8 columns content">
    <h3><?= h($telPhoneType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($telPhoneType->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($telPhoneType->id) ?></td>
        </tr>
    </table>
</div>
