<div class="row-fluid">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Usuário'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('class' => 'span4', 'label' => 'Nome'));
		echo $this->Form->input('username', array('class' => 'span4', 'label' => 'Usuário'));
		echo $this->Form->input('password', array('class' => 'span4', 'label' => 'Senha'));
		echo $this->Form->input('group_id', array('class' => 'span4', 'label' => 'Grupo'));
		echo $this->Form->input('workshop_id', array('class' => 'span4', 'label' => 'Posto'));
		echo $this->Form->input('email', array('class' => 'span4', 'label' => 'Email', 'type' => 'email'));
		echo $this->Form->input('active', array('label' => 'Ativo'));
	?>
	</fieldset>
<?php echo $this->Form->button('Cadastrar', array('class' => 'btn btn-inverse'));?>  
<?php echo $this->Form->end(); ?>
</div>

