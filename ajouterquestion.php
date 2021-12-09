<?php
       include 'headerBack.php';
       include '../Controller/QuestionController.php';
	  $questionC=new QuestionController();
  //  $categorieC=new ProduitController();
	//$listeCategorie=$categorieC->affichercategories(); 

    $error = "";

    // create adherent
    $question = null;
   // $listeQuestion=$reponseC->afficherQuestions(); 
    if (
       
		isset($_POST["description"]) &&		
        isset($_POST["type"]) &&
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
            $questionC->ajouterquestion($question);
           
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
			<h2 class="tm-block-title d-inline-block">Add Question</h2>
		  </div>
		</div>
		<div class="row tm-edit-product-row">
		  <div class="col-xl-12 col-lg-12 col-lg-12">
			<form action="" class="tm-edit-product-form" method="POST" name="form" onSubmit="return verif()">
			  <div class="form-group lg-12">
				<label
				  for="name"
				  >Description
				</label>
				<input type="text" name="description" id="description" maxlength="200"  class="form-control validate" required="required" > 
  

			  </div>
			  <div class="form-group mb-3">
				<label
				  for="type"
				  >Type
				  </label>

				<input type="text" name="type" id="type" maxlength="200"  class="form-control validate" required="required"> 

			  </div>

			  <div class="form-group mb-3">
				<label
				  for="classe"
				  >Cours
				  </label>

				<textarea type="text" name="course" id="classe" maxlength="200"  class="form-control validate" required="required"></textarea>

			  </div>

			
			
			  
		  </div>
		 
		  <div class="col-12">
      
			 
			<input type="submit" href="afficherquestionB.php"class="btn btn-primary btn-block text-uppercase" value="Add Question Now"  onclick ="return verif()"   > </input>
	  
		</div>
   
		</form>
		</div>
	  </div>
	</div>
  </div>
</div>

<script type="text/javascript" language="javascript">
function verif()
 {
 if(document.form.description.value == "") {  
   alert("Veuillez entrer une description valide!");
   document.form.description.focus();
   return false;
  }
 
 else if(document.form.type.value == "") {  
   alert("Veuillez entrer un type valide!");
   document.form.type.focus();
   return false;
  }
  
}
</script>

</body>
</html>