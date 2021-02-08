
<head>
  <?php
	include 'nav.php';
	?>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<?php
	include 'navbar.php';
	?>
	<div id="pagewrap">

		
        <?php
           
        include 'questions.php';
$totalCorrect = 0;
foreach($questions as $k => $q) {
    $postName = 'question-'.$k; // changed
    if($_POST[$postName] == $q['correct']) {
        $totalCorrect++;
    }
}
		print 'You have '.$totalCorrect.' out of 5';
        ?>
	
	</div>
	

	
<?php
	include 'footer.php';
	?>
</body>

</html>
