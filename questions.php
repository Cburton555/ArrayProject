
<head>
   <meta charset="utf-8">
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">
		
        <?php
$questions = array(
    1 => array(
        'question' => 'Which color mode does a computer monitor use?',
        'answers' => array(
            'a' => 'RGB',
            'b' => 'CMYX',
            'c' => 'LOL',
            'd' => 'I give up',
        ),
        'correct' => 'a',
    
    ),
    2 => array(
        'question' => 'RGB stands for:',
        'answers' => array(
            'a' => 'Red Giant Branch',
            'b' => 'Robust Graphics Booster',
            'c' => 'Raw Ground Beef',
            'd' => 'Red Green Blue',
        ),
        'correct' => 'd',
    
    ),
	
	   3 => array(
        'question' => 'When working with art work, what is the best practice?',
        'answers' => array(
            'a' => 'There are no best practices ',
            'b' => 'Never save  files',
            'c' => 'Save frequently',
            'd' => 'I give up',
        ),
        'correct' => 'c',
    
    ),
	
	   4 => array(
        'question' => 'The preferred print resolution is ____ DPI.',
        'answers' => array(
            'a' => '4k',
            'b' => '150',
            'c' => '72',
            'd' => '300',
        ),
        'correct' => 'd',
    
    ),
	
	   5 => array(
        'question' => 'What file does NOT support transparency',
        'answers' => array(
            'a' => 'TIFF',
            'b' => 'PNG',
            'c' => 'BMP',
            'd' => 'JPEG',
        ),
        'correct' => 'd',
    
    ),
	


);
     
        ?>
	
	</div>
	


</body>

</html>
