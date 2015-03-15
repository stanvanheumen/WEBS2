<div class="container">
	<div class="row vertical-offset-20">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Product wijzigen</h4>
				</div>
				<div class="panel-body">
					<form method="post" role="form">
					    <div class="form-group">
							<label for="categorie">Categorie:</label>
							<select class="form-control" id="categorie" name="categorie">
							{foreach $categorie as $cat}
							  	<option value="{$cat->getId()}}">{$cat->getNaam()}</option>
							{/foreach}
							</select>
					    </div>
					    <div class="form-group">
					     	<label for="productnaam">Productnaam:</label>
					      	<input type="text" class="form-control" id="productnaam" name="productnaam" placeholder="Productnaam" />
					    </div>
					    <div class="form-group">
					     	<label for="prijs">Prijs:</label>
					      	<input type="text" class="form-control" id="prijs" name="prijs" placeholder="Prijs" />
					    </div>
					    <div class="form-group">
					     	<label for="beschrijving">Beschrijving:</label>
					      	<textarea type="text" class="form-control" id="beschrijving" name="beschrijving" placeholder="Beschrijving"></textarea>
					    </div>
					    <div class="form-group">
					     	<label for="voorraad">Voorraad:</label>
					      	<input type="text" class="form-control" id="voorraad" name="voorraad" placeholder="Voorraad" />
					    </div>
					    <div class="form-group">
					     	<label for="kortingsprijs">Kortingsprijs:</label>
					      	<input type="text" class="form-control" id="kortingsprijs" name="kortingsprijs" placeholder="Kortingsprijs" />
					    </div>
					    <button type="submit" class="btn btn-default">Toevoegen</button>
					    <a href="/cms/dashboard" class="btn btn-default">Annuleren</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>