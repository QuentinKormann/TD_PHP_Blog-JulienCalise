<?php

date_default_timezone_set("Europe/Paris");



	if(!empty($_POST['pseudo']) && !empty($_POST['titre']) && !empty($_POST['Message']))
	{
		$pseudo  = $_POST['pseudo'];
		$titre	 = $_POST['titre'];
		$message = $_POST['Message'];
		$date 	 = date("d/m/y G:i:s");

		fputs(fopen('historique.txt','a+'), "<p id=content></br><p id=label>Pseudo:</p> $pseudo</br> <p id=label>Titre:</p> $titre</br> <p id=label>Message :</p></br>$message</br></br> Date: $date</br></p>");
		fputs(fopen('historique.txt','a+'), "\r\n");

		echo'<script language = "javascript">document.location.href="blog.php"</script>';	
	}

	else
	{
?>
		<script language="javascript">

			if (confirm("Il manque des informations !"))
			{
				document.location.href="blog.php"
			}
			else
			{
				document.location.href="blog.php"
			}

		</script>
		<?php
	}
?>