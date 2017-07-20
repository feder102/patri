<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\IteClass $iteClass
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ite Class'), ['action' => 'edit', $iteClass->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ite Class'), ['action' => 'delete', $iteClass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iteClass->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ite Classes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ite Class'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="iteClasses view large-9 medium-8 columns content">
    <h3><?= h($iteClass->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($iteClass->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($iteClass->id) ?></td>
        </tr>
    </table>
</div>
