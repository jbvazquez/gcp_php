<?php 

$helloWorld = "Hello World from Google Cloud! 2022";

?>

<html>

    <head>

        <title><?php echo $helloWorld ?></title>

    </head>

    <body>

        <h1><?php echo $helloWorld ?></h1>
		<p> <?php $name = getenv('NAME', true) ?: 'World';?>
			<br>		
			<?phpecho sprintf('Hello %s!', $name);?>
		</p>

    </body>

</html>