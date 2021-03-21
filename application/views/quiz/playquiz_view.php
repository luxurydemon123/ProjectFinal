<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiz Question</title>
	<link rel="icon" href="images/logo.png"  >
	<!-- Bootstrap CSS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800&amp;subset=vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/quiz.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	 	<!-- chat bot -->
	<script>!function(s,u,b,i,z){var o,t,r,y;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=["widget.subiz.net","storage.googleapis"+(t=".com"),"app.sbz.workers.dev",i+"a"+(o=function(k,t){var n=t<=6?5:o(k,t-1)+o(k,t-3);return k!==t?n:n.toString(32)})(20,20)+t,i+"b"+o(30,30)+t,i+"c"+o(40,40)+t],(y=function(k){var t,n;s._subiz_init_2094850928430||r[k]&&(t=u.createElement(b),n=u.getElementsByTagName(b)[0],t.async=1,t.src="https://"+r[k]+"/sbz/app.js?accid="+z,n.parentNode.insertBefore(t,n),setTimeout(y,2e3,k+1))})(0))}(window,document,"script","subiz","acqvwspriuukzbzylxnj")</script>
	<!--end  chat -->
</head>
<body>
	<div class="container list-quiz">
        <h1 class="page-header">Online Quiz</h1>
        <form action="<?= base_url() ?>Quiz/resultdisplay" method="POST" name="test-form" id="test-form">
        	<?php foreach ($question as $row): ?>
        		<?php $ans_array = array($row->choice1,$row->choice2, $row->choice3, $row->choice4 , $row->answer);
        			shuffle($ans_array);
        		 ?>
        	<div class="form-group">
	              <p style="font-weight: bold;">
	              	<?= $row->quiz_id?>. <?= $row->question?>
	              		
	              	</p>
	              <div class="row">
	                  <div class="col-md-6">
	                      <div class="radio" >
	                        <label>
	                            <input type="radio" name="quizid<?= $row->quiz_id ?>" value="<?= $ans_array[0] ?>" required > <?= $ans_array[0]?> <br>
	                        </label>
	                      </div>
	                      <div class="radio" >
	                        <label>
	                            <input type="radio" name="quizid<?= $row->quiz_id ?>" value="<?= $ans_array[1] ?>" required> <?= $ans_array[1]?> <br>
	                        </label>
	                      </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="radio" >
	                      <label>
	                          <input type="radio" name="quizid<?= $row->quiz_id ?>" value="<?= $ans_array[2] ?>" required> <?= $ans_array[2]?> <br>
	                      </label>
	                    </div>
	                    <div class="radio" >
	                      <label>
	                          <input type="radio" name="quizid<?= $row->quiz_id ?>" value="<?= $ans_array[3] ?>" required> <?= $ans_array[3]?> <br>
	                      </label>
	                    </div>
	                   
	             
	              </div>
            </div>
            <?php endforeach ?>
            <br> 
          	<input type="submit"class="btn btn-primary right " value="Submit">
        </form>
    </div>
		
</body>
</html>
