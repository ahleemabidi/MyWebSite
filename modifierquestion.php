<?php
       include 'headerBack.php';
       include '../Controller/QuestionController.php';
	  $questionC=new QuestionController();
  //  $categorieC=new ProduitController();
	//$listeCategorie=$categorieC->affichercategories(); 

    $error = "";

    // create adherent
    $question = null;
    $listeQuestion=$questionC->afficherQuestions(); 
    if (
       
		isset($_POST["type"]) &&		
        isset($_POST["description"]) &&
        isset($_POST["course"]) 
       // isset($_POST["CategorieId"]) 
		
    ) {
        if (
           
			!empty($_POST['type']) &&
            !empty($_POST["description"]) &&
            !empty($_POST["course"]) 
           // !empty($_POST["CategorieId"])
        ) {
            $question = new Question(

				$_POST['description'],
                $_POST['type'], 
                $_POST["course"] ,
			
            );
           
            $questionC->modifierQuestion($question,$_POST["id"]);
           
           
        }
        else
            $error = "Missing information";
    }

    
?>








<div class="container tm-mt-big tm-mb-big">
  <div class="row">
	<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
	  <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
		<div class="row">
		  <div class="col-12" style="margin-left:300px">
			<h2 class="tm-block-title d-inline-block">Update Question</h2>
		  </div>
		</div>
        <?php
			if (isset($_POST['id'])){
			$question = $questionC->recupererQuestion($_POST['id']);
				
		?>
		<div class="row tm-edit-product-row">
		  <div class="col-xl-12 col-lg-12 col-lg-12">
			<form action="" class="tm-edit-product-form" method="POST" name="form">
			  <div class="form-group lg-12">
              <label for="id" >
                        </label>
                   <input type="text" style="color :transparent ; background:transparent ; border:transparent"  name="id" id="id" class="form-control validate" value="<?php echo $question['id']; ?>" maxlength="20" required="required">
                

				<label
				  for="name"
				  >Question 
				</label>
				<input type="text" name="description" id="description" maxlength="120"  value="<?php echo $question['description']; ?>"class="form-control validate" required="required">

			  </div>
			  <div class="form-group mb-3">
				<label
				  for="description"
				  >Type
				  </label>

				<input type="text" name="type" value="<?php echo $question['type']; ?>" id="description" maxlength="50"  class="form-control validate" required="required"></textarea>

			  </div>

			  <div class="form-group mb-3">
				<label
				  for="classe"
				  >Cours
				  </label>

				<input type="text" name="course" id="course" value="<?php echo $question['course']; ?>"maxlength="20"  class="form-control validate" required="required" ></textarea>

			  </div>

			
			  
		  </div>
		 
		  <div class="col-12">
			 
			<input type="submit" href="afficherquestionB.php"class="btn btn-primary btn-block text-uppercase" value="Update Question Now" onclick="return verif()"></input>
	  
		</div>
		</form>
		</div>
	  </div>
      <?php } ?>
	</div>
  </div>
</div>




