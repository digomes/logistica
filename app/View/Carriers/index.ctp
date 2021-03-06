<div class="row">
    <div class="span12">
            <?php echo $this->Html->link(__('Nova Transportadora'), array('action' => 'add'), array('class' => 'btn btn-large btn-success')); ?>
        <div class="span12"><?php echo $this->Html->tag('br'); ?></div>
    </div>
	<h2><?php echo __('Carriers'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table" id="tableProducts">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($carriers as $carrier): ?>
	<tr>
		<td><?php echo h($carrier['Carrier']['id']); ?>&nbsp;</td>
		<td><?php echo h($carrier['Carrier']['name']); ?>&nbsp;</td>
		<td><?php echo h($carrier['Carrier']['created']); ?>&nbsp;</td>
		<td><?php echo h($carrier['Carrier']['modified']); ?>&nbsp;</td>
		<td class="actions">
                <div class="btn-group">
                    <a class="btn btn-primary" href="#"><i class="icon-home icon-white"></i> Ações</a>
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $carrier['Carrier']['id'])); ?></li>
                        <li><a href="#"><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $carrier['Carrier']['id']), array(), __('Are you sure you want to delete # %s?', $category['Carrier']['id'])); ?></a></li>
                   </ul>
                </div>
		</td>
	</tr>
<?php endforeach; ?>
</tbody>
	</table>
</div>
