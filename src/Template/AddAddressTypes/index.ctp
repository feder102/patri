<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\AddAddressType[]|\Cake\Collection\CollectionInterface $addAddressTypes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Add Address Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="addAddressTypes index large-9 medium-8 columns content">
    <h3><?= __('Add Address Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($addAddressTypes as $addAddressType): ?>
            <tr>
                <td><?= $this->Number->format($addAddressType->id) ?></td>
                <td><?= h($addAddressType->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $addAddressType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $addAddressType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $addAddressType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addAddressType->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
