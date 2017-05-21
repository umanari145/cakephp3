<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customeritems'), ['controller' => 'Customeritems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customeritem'), ['controller' => 'Customeritems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customers view large-9 medium-8 columns content">
    <h3><?= h($customer->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($customer->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($customer->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice Name') ?></th>
            <td><?= h($customer->invoice_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transfer Date Type') ?></th>
            <td><?= h($customer->transfer_date_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created User') ?></th>
            <td><?= $this->Number->format($customer->created_user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified User') ?></th>
            <td><?= $this->Number->format($customer->modified_user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customer->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Delete') ?></th>
            <td><?= $customer->is_delete ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Transfer Account') ?></h4>
        <?= $this->Text->autoParagraph(h($customer->transfer_account)); ?>
    </div>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($customer->note)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Customeritems') ?></h4>
        <?php if (!empty($customer->customeritems)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('Task Id') ?></th>
                <th scope="col"><?= __('Unit Cost') ?></th>
                <th scope="col"><?= __('Task Span') ?></th>
                <th scope="col"><?= __('Order Number') ?></th>
                <th scope="col"><?= __('Created User') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified User') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Is Delete') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->customeritems as $customeritems): ?>
            <tr>
                <td><?= h($customeritems->id) ?></td>
                <td><?= h($customeritems->customer_id) ?></td>
                <td><?= h($customeritems->project_id) ?></td>
                <td><?= h($customeritems->task_id) ?></td>
                <td><?= h($customeritems->unit_cost) ?></td>
                <td><?= h($customeritems->task_span) ?></td>
                <td><?= h($customeritems->order_number) ?></td>
                <td><?= h($customeritems->created_user) ?></td>
                <td><?= h($customeritems->created) ?></td>
                <td><?= h($customeritems->modified_user) ?></td>
                <td><?= h($customeritems->modified) ?></td>
                <td><?= h($customeritems->is_delete) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Customeritems', 'action' => 'view', $customeritems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Customeritems', 'action' => 'edit', $customeritems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customeritems', 'action' => 'delete', $customeritems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customeritems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Invoices') ?></h4>
        <?php if (!empty($customer->invoices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Target Month') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Sale Type Note') ?></th>
                <th scope="col"><?= __('Reserve Type Note') ?></th>
                <th scope="col"><?= __('Other Type Note') ?></th>
                <th scope="col"><?= __('Expense1 Name') ?></th>
                <th scope="col"><?= __('Expense1 Num') ?></th>
                <th scope="col"><?= __('Expense1 Per Cost') ?></th>
                <th scope="col"><?= __('Expense1 Cost') ?></th>
                <th scope="col"><?= __('Expense1 Note') ?></th>
                <th scope="col"><?= __('Expense1 Tax Has') ?></th>
                <th scope="col"><?= __('Expense2 Name') ?></th>
                <th scope="col"><?= __('Expense2 Num') ?></th>
                <th scope="col"><?= __('Expense2 Per Cost') ?></th>
                <th scope="col"><?= __('Expense2 Cost') ?></th>
                <th scope="col"><?= __('Expense2 Note') ?></th>
                <th scope="col"><?= __('Expense2 Tax Has') ?></th>
                <th scope="col"><?= __('Expense3 Name') ?></th>
                <th scope="col"><?= __('Expense3 Num') ?></th>
                <th scope="col"><?= __('Expense3 Per Cost') ?></th>
                <th scope="col"><?= __('Expense3 Cost') ?></th>
                <th scope="col"><?= __('Expense3 Note') ?></th>
                <th scope="col"><?= __('Expense3 Tax Has') ?></th>
                <th scope="col"><?= __('Expense4 Name') ?></th>
                <th scope="col"><?= __('Expense4 Num') ?></th>
                <th scope="col"><?= __('Expense4 Per Cost') ?></th>
                <th scope="col"><?= __('Expense4 Cost') ?></th>
                <th scope="col"><?= __('Expense4 Note') ?></th>
                <th scope="col"><?= __('Expense4 Tax Has') ?></th>
                <th scope="col"><?= __('Expense5 Name') ?></th>
                <th scope="col"><?= __('Expense5 Num') ?></th>
                <th scope="col"><?= __('Expense5 Per Cost') ?></th>
                <th scope="col"><?= __('Expense5 Cost') ?></th>
                <th scope="col"><?= __('Expense5 Note') ?></th>
                <th scope="col"><?= __('Expense5 Tax Has') ?></th>
                <th scope="col"><?= __('Expense6 Name') ?></th>
                <th scope="col"><?= __('Expense6 Num') ?></th>
                <th scope="col"><?= __('Expense6 Per Cost') ?></th>
                <th scope="col"><?= __('Expense6 Cost') ?></th>
                <th scope="col"><?= __('Expense6 Note') ?></th>
                <th scope="col"><?= __('Expense6 Tax Has') ?></th>
                <th scope="col"><?= __('Expense7 Name') ?></th>
                <th scope="col"><?= __('Expense7 Num') ?></th>
                <th scope="col"><?= __('Expense7 Per Cost') ?></th>
                <th scope="col"><?= __('Expense7 Cost') ?></th>
                <th scope="col"><?= __('Expense7 Note') ?></th>
                <th scope="col"><?= __('Expense7 Tax Has') ?></th>
                <th scope="col"><?= __('Expense8 Name') ?></th>
                <th scope="col"><?= __('Expense8 Num') ?></th>
                <th scope="col"><?= __('Expense8 Per Cost') ?></th>
                <th scope="col"><?= __('Expense8 Cost') ?></th>
                <th scope="col"><?= __('Expense8 Note') ?></th>
                <th scope="col"><?= __('Expense8 Tax Has') ?></th>
                <th scope="col"><?= __('Expense9 Name') ?></th>
                <th scope="col"><?= __('Expense9 Num') ?></th>
                <th scope="col"><?= __('Expense9 Per Cost') ?></th>
                <th scope="col"><?= __('Expense9 Cost') ?></th>
                <th scope="col"><?= __('Expense9 Note') ?></th>
                <th scope="col"><?= __('Expense9 Tax Has') ?></th>
                <th scope="col"><?= __('Expense10 Name') ?></th>
                <th scope="col"><?= __('Expense10 Num') ?></th>
                <th scope="col"><?= __('Expense10 Per Cost') ?></th>
                <th scope="col"><?= __('Expense10 Cost') ?></th>
                <th scope="col"><?= __('Expense10 Note') ?></th>
                <th scope="col"><?= __('Expense10 Tax Has') ?></th>
                <th scope="col"><?= __('Created User') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified User') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Is Delete') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->invoices as $invoices): ?>
            <tr>
                <td><?= h($invoices->id) ?></td>
                <td><?= h($invoices->target_month) ?></td>
                <td><?= h($invoices->customer_id) ?></td>
                <td><?= h($invoices->sale_type_note) ?></td>
                <td><?= h($invoices->reserve_type_note) ?></td>
                <td><?= h($invoices->other_type_note) ?></td>
                <td><?= h($invoices->expense1_name) ?></td>
                <td><?= h($invoices->expense1_num) ?></td>
                <td><?= h($invoices->expense1_per_cost) ?></td>
                <td><?= h($invoices->expense1_cost) ?></td>
                <td><?= h($invoices->expense1_note) ?></td>
                <td><?= h($invoices->expense1_tax_has) ?></td>
                <td><?= h($invoices->expense2_name) ?></td>
                <td><?= h($invoices->expense2_num) ?></td>
                <td><?= h($invoices->expense2_per_cost) ?></td>
                <td><?= h($invoices->expense2_cost) ?></td>
                <td><?= h($invoices->expense2_note) ?></td>
                <td><?= h($invoices->expense2_tax_has) ?></td>
                <td><?= h($invoices->expense3_name) ?></td>
                <td><?= h($invoices->expense3_num) ?></td>
                <td><?= h($invoices->expense3_per_cost) ?></td>
                <td><?= h($invoices->expense3_cost) ?></td>
                <td><?= h($invoices->expense3_note) ?></td>
                <td><?= h($invoices->expense3_tax_has) ?></td>
                <td><?= h($invoices->expense4_name) ?></td>
                <td><?= h($invoices->expense4_num) ?></td>
                <td><?= h($invoices->expense4_per_cost) ?></td>
                <td><?= h($invoices->expense4_cost) ?></td>
                <td><?= h($invoices->expense4_note) ?></td>
                <td><?= h($invoices->expense4_tax_has) ?></td>
                <td><?= h($invoices->expense5_name) ?></td>
                <td><?= h($invoices->expense5_num) ?></td>
                <td><?= h($invoices->expense5_per_cost) ?></td>
                <td><?= h($invoices->expense5_cost) ?></td>
                <td><?= h($invoices->expense5_note) ?></td>
                <td><?= h($invoices->expense5_tax_has) ?></td>
                <td><?= h($invoices->expense6_name) ?></td>
                <td><?= h($invoices->expense6_num) ?></td>
                <td><?= h($invoices->expense6_per_cost) ?></td>
                <td><?= h($invoices->expense6_cost) ?></td>
                <td><?= h($invoices->expense6_note) ?></td>
                <td><?= h($invoices->expense6_tax_has) ?></td>
                <td><?= h($invoices->expense7_name) ?></td>
                <td><?= h($invoices->expense7_num) ?></td>
                <td><?= h($invoices->expense7_per_cost) ?></td>
                <td><?= h($invoices->expense7_cost) ?></td>
                <td><?= h($invoices->expense7_note) ?></td>
                <td><?= h($invoices->expense7_tax_has) ?></td>
                <td><?= h($invoices->expense8_name) ?></td>
                <td><?= h($invoices->expense8_num) ?></td>
                <td><?= h($invoices->expense8_per_cost) ?></td>
                <td><?= h($invoices->expense8_cost) ?></td>
                <td><?= h($invoices->expense8_note) ?></td>
                <td><?= h($invoices->expense8_tax_has) ?></td>
                <td><?= h($invoices->expense9_name) ?></td>
                <td><?= h($invoices->expense9_num) ?></td>
                <td><?= h($invoices->expense9_per_cost) ?></td>
                <td><?= h($invoices->expense9_cost) ?></td>
                <td><?= h($invoices->expense9_note) ?></td>
                <td><?= h($invoices->expense9_tax_has) ?></td>
                <td><?= h($invoices->expense10_name) ?></td>
                <td><?= h($invoices->expense10_num) ?></td>
                <td><?= h($invoices->expense10_per_cost) ?></td>
                <td><?= h($invoices->expense10_cost) ?></td>
                <td><?= h($invoices->expense10_note) ?></td>
                <td><?= h($invoices->expense10_tax_has) ?></td>
                <td><?= h($invoices->created_user) ?></td>
                <td><?= h($invoices->created) ?></td>
                <td><?= h($invoices->modified_user) ?></td>
                <td><?= h($invoices->modified) ?></td>
                <td><?= h($invoices->is_delete) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Invoices', 'action' => 'view', $invoices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Invoices', 'action' => 'edit', $invoices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Invoices', 'action' => 'delete', $invoices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Reports') ?></h4>
        <?php if (!empty($customer->reports)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Register Dt') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Items Count') ?></th>
                <th scope="col"><?= __('Total Cost') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col"><?= __('Created User') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified User') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Is Delete') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->reports as $reports): ?>
            <tr>
                <td><?= h($reports->id) ?></td>
                <td><?= h($reports->register_dt) ?></td>
                <td><?= h($reports->customer_id) ?></td>
                <td><?= h($reports->items_count) ?></td>
                <td><?= h($reports->total_cost) ?></td>
                <td><?= h($reports->note) ?></td>
                <td><?= h($reports->created_user) ?></td>
                <td><?= h($reports->created) ?></td>
                <td><?= h($reports->modified_user) ?></td>
                <td><?= h($reports->modified) ?></td>
                <td><?= h($reports->is_delete) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reports', 'action' => 'view', $reports->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reports', 'action' => 'edit', $reports->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reports', 'action' => 'delete', $reports->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reports->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
