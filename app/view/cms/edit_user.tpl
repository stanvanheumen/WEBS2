<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Gebruiker wijzigen</h4>
				</div>
				<div class="panel-body">
					<form action="/cms/edit_user_post?id={$user->getId()}" method="post" role="form">
						<fieldset>
							<div class="form-group">
								<span class="label label-default">Persoonlijke gegevens</span>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<input class="form-control" value="{$user->getVoornaam()}" placeholder="Voornaam" name="first_name" type="text" required>
									</div>
									<div class="col-md-4">
										<input class="form-control" value="{$user->getTussenvoegsel()}" placeholder="Tussenvoegsel" name="infix_name" type="text">
									</div>
									<div class="col-md-4">
										<input class="form-control" value="{$user->getAchternaam()}" placeholder="Achternaam" name="last_name" type="text" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<input class="form-control" value="{$user->getStraat()}" placeholder="Straat" name="street" type="text" required>
									</div>
									<div class="col-md-6">
										<input class="form-control" value="{$user->getPostcode()}" placeholder="Postcode" name="postal_code" type="text" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input class="form-control" value="{$user->getWoonplaats()}" placeholder="Woonplaats" name="place" type="text" required>
							</div>
							<div class="form-group">
								<input class="form-control" value="{$user->getTelefoonnummer()}" placeholder="Telefoonnummer" name="number" type="text" required>
							</div>
							<div class="form-group">
								<select class="form-control" name="gender" required>
									<option value="0">Man</option>
									<option value="1">Vrouw</option>
									<option value="2">Ik weet het niet/beide</option>
								</select>
							</div>
						
							<button type="submit" class="btn btn-default">Wijzigen</button>
							<a href="/cms/users" class="btn btn-default">Annuleren</a>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>