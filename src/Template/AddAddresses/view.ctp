<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\AddAddress $addAddress
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Add Address'), ['action' => 'edit', $addAddress->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Add Address'), ['action' => 'delete', $addAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addAddress->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Add Addresses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Add Address'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="addAddresses view large-9 medium-8 columns content">
    <h3><?= h($addAddress->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Street') ?></th>
            <td><?= h($addAddress->street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= h($addAddress->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cp') ?></th>
            <td><?= h($addAddress->cp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District') ?></th>
            <td><?= h($addAddress->district) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($addAddress->id) ?></td>
        </tr>
    </table>
</div>
