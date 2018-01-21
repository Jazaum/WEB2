<?php 
	$this->load->view('header');
?>
	<title>Todos Filmes</title>
   <div class="row">
	<div class="col-md-12" align="center">
	<h1 class="titulo">Todos os Filmes</h1>
	  <?php
		if($this->session->userdata('username')=='admin'){
		echo	'<a  href="http://localhost/cinema/index.php/Filmes/add"  class="btn btn-success margin-button15">Novo Filme</a>';
		}
			?>
	<br>
	
	</div>
	</div>
		


	
			
	<table class="table table-bordered titulo" >
				<thead>
					<tr>
					  <th class="text-center">Nome</th>
					  <th class="text-center">Duraçao</th>
					  <th class="text-center">Idade indicativa</th>
					  <th class="text-center">Genero</th>
					  <?php
						if($this->session->userdata('username')=='admin'){
						echo'<th colspan="2" class="text-center">Opções</th>';
						}
						?>
					</tr>
				</thead>
				 <?php
					foreach ($cinema as $filmes)
					{        
						echo '<tr>';
						  echo '<td>'.$filmes->nome.'</td>'; 
						  echo '<td class="text-right">'.$filmes->duracao.'</td>'; 
						  echo '<td class="text-right">'.$filmes->idade.'</td>'; 
						  echo '<td class="text-right">'.$filmes->genero.'</td>';
						  if($this->session->userdata('username')=='admin'){
							  echo "<td align='center' > <img height='30' width='30' src=\"/cinema/bootstrap/image/icone-editar.png\"> </td>'";
							  echo "<td align='center' > <img height='30' width='30' src=\"/cinema/bootstrap/image/icone-delete.png\"> </td>'";
						  }
						  echo '</td>'; 
						echo '</tr>';
					}
				?>

			</table>		  
		
	



   <?php 
	$this->load->view('footer');
	?>
