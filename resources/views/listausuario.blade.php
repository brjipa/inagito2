 @extends('layout')

 @section('conteudo')
    <table>
		<?php foreach ($usuario as $u): ?> 

		<tr>
			<td> <?= $u->name ?></td>
			<td> <?= $u->email ?> </td>
            <td> <a href="/usuarios/detalhes?id=<?= $u->id ?>"> Detalhes </a> </td>
		</tr>
		<?php endforeach ?>
	</table>

    
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

 @stop