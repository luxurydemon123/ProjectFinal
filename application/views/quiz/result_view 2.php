<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Result Question</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/quiz.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<div class="container list-quiz">
	<h1 class="page-header">The answer of the test</h1>
    
    <?php $score =0; ?>
    
      <?php $array1= array(); ?>
      <?php $array2= array(); ?>    
      <?php $array3= array(); ?>
      <?php $array4= array(); ?>
      <?php $array5= array(); ?>
      <?php $array6= array(); ?>
      <?php $array7= array(); ?>
      <?php $array8= array(); ?>
      <?php $array9= array(); ?>
      
         <?php foreach($checks as $checkans) { ?>
               <?php array_push($array1, $checkans); } ?>
               
               
        <?php foreach($results as $res) { ?>
               <?php array_push($array2, $res->answer); 
			         array_push($array3, $res->quiz_id); 
			         array_push($array4, $res->question); 
			         array_push($array5, $res->choice1); 
			         array_push($array6, $res->choice2); 
			         array_push($array7, $res->choice3);  
			         array_push($array8, $res->choice4); 
					 array_push($array9, $res->answer); 
			   } ?>
               
               
           <?php 
		       for ($x=0; $x <10; $x++) { ?>
 
    <form method="post" action="<?php echo base_url();?>quiz/index/">  
  
     <div class="form-group">
		    <p style="font-weight: bold;"><?=$array3[$x]?>.<?=$array4[$x]?></p>  


		     <?php if ($array2[$x]!=$array1[$x]) { ?>
		     <div class="row">
		    	<div class="col-md-6">
		    		<div >
		    			<label class="badge badge-warning">
		    				 <?=$array1[$x]?> <br>
		    			</label>

		    			<span class="glyphicon glyphicon-ok"></span>
		    		</div>
		    	</div>
		    	<div class="col-md-6">
		    		<div >
		    			<label class="badge badge-warning" >
		    				  <?=$array2[$x]?> <br>
		    			</label>

		    			<span class="glyphicon glyphicon-remove"></span>

		    		</div>
		    	</div>
		    </div>         
		      <?php } else { ?>
		      
		           <?=$array1[$x]?> <br>
		           
		           <?php $score = $score + 1; ?>
		      
		    <?php } } ?>
		    
		    <br>
		   
    
    <h2>Your Score: </h2>
      <h1><?=$score?>/10</h1>
    
    <input type="submit" value="Play Again!">
    
    </form>
    
</div>

</body>
</html>