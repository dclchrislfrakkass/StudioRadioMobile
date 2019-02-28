<?php /* Template Name: Acces */ ?>

<?php get_header(); ?>


<!-- *********************************** -->
<!-- ************* Header ************* -->
<!-- *********************************** -->
<?php 
$currentClassName = get_the_title();
include 'php/PDO.php'; ?>



<main>

<section>
<!--début du formulaire -->
<h2>Inscription</h2>


<form action="#" method = "post">
	<input type="email" name = "Votre mail" />
	<input type="password" name = "Votre mot de passe" />
	<input type="submit" value = "Envoyez" />
</form>
<!-- 
<form action="" method="post" name="inscription">
		<div class="form-field">    
			<label>Email </label>
			<input name="email" type="email" placeholder="Votre email" required>
		</div>
		<div class="form-field">    
			<label>Mot de passe </label>
			<input name="text"  type="text" placeholder="Type a valid email" required>
		</div>
	
		<input type="hidden" name="action" value="send_form" style="display: none; visibility: hidden; opacity: 0;">
		<button type="submit">S'inscrire</button>
	</form> -->









</section>


<!-- ************* Les liens ************* -->
<!-- ************************************ -->

</main>


<?php get_footer(); ?>