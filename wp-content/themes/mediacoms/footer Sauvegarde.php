		
<footer id="contacts" class="contact">
	<a name="contacts"></a>	
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-10">
				<h1 class="sectionTitle text-white">
					Nous <span class="text-orange">contacter</span>
				</h1>
				<p class="text-center text-white">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pretium aliquet aliquam. Curabitur dapibus dapibus urna porttitor ornare. Aliquam erat volutpat.
				</p>
			</div>
		</div>
		<!-- Formulaire -->
		<div class="row justify-content-md-center">
			<div class="col-md-10">
				<form class="text-white">
					<div class="row">
						<!--Formulaire colonne 1  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="nom">Nom</label>
								<input class="form-control" type="text" name="nom" id="nom" placeholder="Votre nom" />
								<p class="error"></p>
							</div>
							<div class="form-group">
								<label for="Prénom">Prénom</label>
								<input class="form-control" type="text" name="prenom" id="prenom" placeholder="Votre prénom" />
								<p class="error"></p>
							</div>
							<div class="form-group">
								<label for="Prénom">Adresse mail</label>
								<input class="form-control" type="email" name="email" id="email" placeholder="nom@exemple.com" />
								<p class="error"></p>
							</div>
							<div class="form-group">
								<label for="telephone">Téléphone</label>
								<input class="form-control" type="tel" name="telNumber" id="telNumber" placeholder="Votre n° de téléphone" />
								<p class="error"></p>
							</div>
						</div>
						<!--Formulaire colonne 2  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="message">Votre demande</label>
								<textarea class="form-control" id="message" rows="11"></textarea>
								<p class="error"></p>
							</div>
							<button type="submit"  class="btn btn-block btn-warning" id="send">Envoyez</button>
							<p class="infos"></p>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- Fin row -->
		
		<p class="mentions text-center">Sarl MédiaComs | Capital 7500 Euros | 2 C rue JF Champollion 18 000 Bourges | Tél : 02 48 65 02 25 | Fax : 02 48 65 02 53 | Mél : contact@mediacoms.fr | SIRET : 44887997300031 | Organisme de formation N° 24180071718 | Directeur de la publication : Laurent Garofalo | Hébergement : mise sur orbite | Création, images et vidéos: MédiaComs</p>
	</div>
	<!-- Fin container -->
</footer>
<?php wp_footer(); ?>
</body>
</html> 