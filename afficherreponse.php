<?php
include 'headerBack.php';
include '../Controller/ReponseController.php';
	$reponseC=new ReponseController();
	$listeReponse=$reponseC->afficherReponses(); 


?>


<div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-large tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">Nom de l etudiant</th>
                    <th scope="col" style="{position:center;}">Reponse</th>
                    <th scope="col">classe</th>
                    <th scope="col">numero de question</th>
					<th></th>
					<th></th>
                   
                  </tr>
                </thead>
                <tbody>
				<?php
				foreach($listeReponse as $response){
			?>
                  <tr>
                    <td class="tm-product-name"><?php echo $response['etudiant']; ?></td>
                    <td><?php echo $response['description']; ?></td>
                    <td><?php echo $response['classe']; ?></td>
                    <td><?php echo $response['questionId']; ?></td>
                   
                    
                    <td>
					
				</td>
				<td>
				<a href="supprimerreponse.php?id=<?php echo $response['id']; ?>"  class="tm-product-delete-link" >
				<i class="far fa-trash-alt tm-product-delete-icon"></i>
			</a>
			
                    
                    </td>
                  </tr>
                  
				  <?php
				}
			?>
                  
                 
                 
                </tbody>
              </table>
            </div>
            <!-- table container -->
			<a
              href="ajouterreponse.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new Response</a>

              	<a
              href="recherche.php"
              class="btn btn-primary btn-block text-uppercase mb-3">search etudiant</a>
               	<a
              href="listeforback.html"
              class="btn btn-primary btn-block text-uppercase mb-3">Go To Page And Add Your personal Tasks </a>
             	<a  href="MetierWow.html"
              class="btn btn-primary btn-block text-uppercase mb-3">Go To Page And Give Notes</a>



