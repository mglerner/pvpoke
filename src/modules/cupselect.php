<select class="cup-select">
	<option value="all">All Pokemon</option>
	<option value="boulder">Boulder Cup</option>
	<option value="twilight">Twilight Cup</option>
	<option value="tempest">Tempest Cup</option>
	<option value="kingdom">Kingdom Cup</option>
	<option value="nightmare">Nightmare Cup</option>
	<option value="regionals-1">Season 1 Regionals</option>
	<option value="rainbow">Rainbow Cup</option>
	
	<?php if(strpos($_SERVER['REQUEST_URI'], 'battle') !== false): ?>
		<option value="custom">Custom</option>
	<?php endif; ?>
	
</select>