<!DOCTYPE html>
<html>

<head>
	<?php
	include 'nav.php';
	?>
</head>

<body>
<?php
	include 'navbar.php';
	?>
	<div id="pagewrap">
       
		<h1 class ="marker">Illustrator Quiz</h1>
		
		<form action="grade.php" method="post" id="quiz">
		
            <ol>
            
       
             
        <?php
					
                   include 'questions.php';
//print head, div, ol
foreach($questions as $k => $q) {
    print "\n\t".'<li>';
    print "\n\t\t".'<h3>';
    print $q['question'].'</h3>';
    print '<div>';
    foreach($q['answers'] as $letter => $answer) {
        print "\n\t\t\t".'<input type="radio" name="question-'.$k
        //.'-'.$letter
        .'" value="'.$letter.'">';
        print "\n\t\t\t".'<label for=".question-'.$k.'-'.$letter.'">'.$letter.' '.$answer.'</label>';
    }
    print "\n\t".'</div>';
}
				?>

                
                </li>
            
            </ol>
            <div id ="button">
            <input type="submit" value="Submit Quiz" />
		    </div>
		</form>
	
	</div>

	
<?php
	include 'footer.php';
	?>
</body>

</html>
