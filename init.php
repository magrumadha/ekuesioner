<div class="body">

	<!-- Blue color scheme -->
	<form action="" class="sky-form">
		<header>
			Cyan color scheme
		</header>

		<fieldset>
			<section>
				<label class="label">Text input</label>
				<label class="input">
					<input type="text">
				</label>
			</section>

			<section>
				<label class="label">File input</label>
				<label for="file" class="input input-file">
					<div class="button">
						<input id="file" onchange="this.parentNode.nextSibling.value = this.value" type="file">
						Browse
					</div>
					<input readonly="readonly" type="text">
				</label>
			</section>

			<section>
				<label class="label">Input with autocomlete</label>
				<label class="input">
					<input list="list" type="text">
					<datalist id="list">
						<option value="Alexandra"></option>
						<option value="Alice"></option>
						<option value="Anastasia"></option>
						<option value="Avelina"></option>
						<option value="Basilia"></option>
						<option value="Beatrice"></option>
						<option value="Cassandra"></option>
						<option value="Cecil"></option>
						<option value="Clemencia"></option>
						<option value="Desiderata"></option>
						<option value="Dionisia"></option>
						<option value="Edith"></option>
						<option value="Eleanora"></option>
						<option value="Elizabeth"></option>
						<option value="Emma"></option>
						<option value="Felicia"></option>
						<option value="Florence"></option>
						<option value="Galiana"></option>
						<option value="Grecia"></option>
						<option value="Helen"></option>
						<option value="Helewisa"></option>
						<option value="Idonea"></option>
						<option value="Isabel"></option>
						<option value="Joan"></option>
						<option value="Juliana"></option>
						<option value="Karla"></option>
						<option value="Karyn"></option>
						<option value="Kate"></option>
						<option value="Lakisha"></option>
						<option value="Lana"></option>
						<option value="Laura"></option>
						<option value="Leona"></option>
						<option value="Mandy"></option>
						<option value="Margaret"></option>
						<option value="Maria"></option>
						<option value="Nanacy"></option>
						<option value="Nicole"></option>
						<option value="Olga"></option>
						<option value="Pamela"></option>
						<option value="Patricia"></option>
						<option value="Qiana"></option>
						<option value="Rachel"></option>
						<option value="Ramona"></option>
						<option value="Samantha"></option>
						<option value="Sandra"></option>
						<option value="Tanya"></option>
						<option value="Teresa"></option>
						<option value="Ursula"></option>
						<option value="Valerie"></option>
						<option value="Veronica"></option>
						<option value="Wilma"></option>
						<option value="Yasmin"></option>
						<option value="Zelma"></option>
					</datalist> </label>
				<div class="note">
					<strong>Note:</strong> works in Chrome, Firefox, Opera and IE10.
				</div>
			</section>
		</fieldset>

		<fieldset>
			<section>
				<label class="label">Select</label>
				<label class="select">
					<select>
						<option selected="selected" value="0">Choose name</option>
						<option value="1">Alexandra</option>
						<option value="2">Alice</option>
						<option value="3">Anastasia</option>
						<option value="4">Avelina</option>
					</select> <i></i> </label>
			</section>

			<section>
				<label class="label">Multiple select</label>
				<label class="select select-multiple">
					<select multiple="multiple">
						<option value="1">Alexandra</option>
						<option value="2">Alice</option>
						<option value="3">Anastasia</option>
						<option value="4">Avelina</option>
						<option value="5">Basilia</option>
						<option value="6">Beatrice</option>
						<option value="7">Cassandra</option>
						<option value="8">Clemencia</option>
						<option value="9">Desiderata</option>
					</select> </label>
				<div class="note">
					<strong>Note:</strong> hold down the ctrl/cmd button to select multiple options.
				</div>
			</section>
		</fieldset>

		<fieldset>
			<section>
				<label class="label">Textarea</label>
				<label class="textarea"> 					<textarea rows="3"></textarea> </label>
				<div class="note">
					<strong>Note:</strong> height of the textarea depends on the rows attribute.
				</div>
			</section>

			<section>
				<label class="label">Textarea resizable</label>
				<label class="textarea textarea-resizable"> 					<textarea rows="3"></textarea> </label>
			</section>

			<section>
				<label class="label">Textarea expandable</label>
				<label class="textarea textarea-expandable"> 					<textarea rows="3"></textarea> </label>
				<div class="note">
					<strong>Note:</strong> expands on focus.
				</div>
			</section>
		</fieldset>

		<fieldset>
			<section>
				<label class="label">Columned radios</label>
				<div class="row">
					<div class="col col-4">
						<label class="radio">
							<input name="radio" checked="checked" type="radio">
							<i></i>Alexandra</label>
						<label class="radio">
							<input name="radio" type="radio">
							<i></i>Alice</label>
						<label class="radio">
							<input name="radio" type="radio">
							<i></i>Anastasia</label>
					</div>
					<div class="col col-4">
						<label class="radio">
							<input name="radio" type="radio">
							<i></i>Avelina</label>
						<label class="radio">
							<input name="radio" type="radio">
							<i></i>Basilia</label>
						<label class="radio">
							<input name="radio" type="radio">
							<i></i>Beatrice</label>
					</div>
					<div class="col col-4">
						<label class="radio">
							<input name="radio" type="radio">
							<i></i>Cassandra</label>
						<label class="radio">
							<input name="radio" type="radio">
							<i></i>Clemencia</label>
						<label class="radio">
							<input name="radio" type="radio">
							<i></i>Desiderata</label>
					</div>
				</div>
			</section>

			<section>
				<label class="label">Inline radios</label>
				<div class="inline-group">
					<label class="radio">
						<input name="radio-inline" checked="checked" type="radio">
						<i></i>Alexandra</label>
					<label class="radio">
						<input name="radio-inline" type="radio">
						<i></i>Alice</label>
					<label class="radio">
						<input name="radio-inline" type="radio">
						<i></i>Anastasia</label>
					<label class="radio">
						<input name="radio-inline" type="radio">
						<i></i>Avelina</label>
					<label class="radio">
						<input name="radio-inline" type="radio">
						<i></i>Beatrice</label>
				</div>
			</section>
		</fieldset>

		<fieldset>
			<section>
				<label class="label">Columned checkboxes</label>
				<div class="row">
					<div class="col col-4">
						<label class="checkbox">
							<input name="checkbox" checked="checked" type="checkbox">
							<i></i>Alexandra</label>
						<label class="checkbox">
							<input name="checkbox" type="checkbox">
							<i></i>Alice</label>
						<label class="checkbox">
							<input name="checkbox" type="checkbox">
							<i></i>Anastasia</label>
					</div>
					<div class="col col-4">
						<label class="checkbox">
							<input name="checkbox" type="checkbox">
							<i></i>Avelina</label>
						<label class="checkbox">
							<input name="checkbox" type="checkbox">
							<i></i>Basilia</label>
						<label class="checkbox">
							<input name="checkbox" type="checkbox">
							<i></i>Beatrice</label>
					</div>
					<div class="col col-4">
						<label class="checkbox">
							<input name="checkbox" type="checkbox">
							<i></i>Cassandra</label>
						<label class="checkbox">
							<input name="checkbox" type="checkbox">
							<i></i>Clemencia</label>
						<label class="checkbox">
							<input name="checkbox" type="checkbox">
							<i></i>Desiderata</label>
					</div>
				</div>
			</section>

			<section>
				<label class="label">Inline checkboxes</label>
				<div class="inline-group">
					<label class="checkbox">
						<input name="checkbox-inline" checked="checked" type="checkbox">
						<i></i>Alexandra</label>
					<label class="checkbox">
						<input name="checkbox-inline" type="checkbox">
						<i></i>Alice</label>
					<label class="checkbox">
						<input name="checkbox-inline" type="checkbox">
						<i></i>Anastasia</label>
					<label class="checkbox">
						<input name="checkbox-inline" type="checkbox">
						<i></i>Avelina</label>
					<label class="checkbox">
						<input name="checkbox-inline" type="checkbox">
						<i></i>Beatrice</label>
				</div>
			</section>
		</fieldset>

		<fieldset>
			<div class="row">
				<section class="col col-5">
					<label class="label">Toggles based on radios</label>
					<label class="toggle">
						<input name="radio-toggle" checked="checked" type="radio">
						<i></i>Alexandra</label>
					<label class="toggle">
						<input name="radio-toggle" type="radio">
						<i></i>Anastasia</label>
					<label class="toggle">
						<input name="radio-toggle" type="radio">
						<i></i>Avelina</label>
				</section>

				<div class="col col-2"></div>

				<section class="col col-5">
					<label class="label">Toggles based on checkboxes</label>
					<label class="toggle">
						<input name="checkbox-toggle" checked="checked" type="checkbox">
						<i></i>Cassandra</label>
					<label class="toggle">
						<input name="checkbox-toggle" type="checkbox">
						<i></i>Clemencia</label>
					<label class="toggle">
						<input name="checkbox-toggle" type="checkbox">
						<i></i>Desiderata</label>
				</section>
			</div>
		</fieldset>

		<fieldset>
			<section>
				<label class="label">Ratings with different icons</label>
				<div class="rating">
					<input name="stars-rating" id="stars-rating-5" type="radio">
					<label for="stars-rating-5"><i class="icon-star"></i></label>
					<input checked="checked" name="stars-rating" id="stars-rating-4" type="radio">
					<label for="stars-rating-4"><i class="icon-star"></i></label>
					<input name="stars-rating" id="stars-rating-3" type="radio">
					<label for="stars-rating-3"><i class="icon-star"></i></label>
					<input name="stars-rating" id="stars-rating-2" type="radio">
					<label for="stars-rating-2"><i class="icon-star"></i></label>
					<input name="stars-rating" id="stars-rating-1" type="radio">
					<label for="stars-rating-1"><i class="icon-star"></i></label>
					Stars
				</div>

				<div class="rating">
					<input name="trophies-rating" id="trophies-rating-7" type="radio">
					<label for="trophies-rating-7"><i class="icon-trophy"></i></label>
					<input name="trophies-rating" id="trophies-rating-6" type="radio">
					<label for="trophies-rating-6"><i class="icon-trophy"></i></label>
					<input name="trophies-rating" id="trophies-rating-5" type="radio">
					<label for="trophies-rating-5"><i class="icon-trophy"></i></label>
					<input name="trophies-rating" id="trophies-rating-4" type="radio">
					<label for="trophies-rating-4"><i class="icon-trophy"></i></label>
					<input name="trophies-rating" id="trophies-rating-3" type="radio">
					<label for="trophies-rating-3"><i class="icon-trophy"></i></label>
					<input name="trophies-rating" id="trophies-rating-2" type="radio">
					<label for="trophies-rating-2"><i class="icon-trophy"></i></label>
					<input name="trophies-rating" id="trophies-rating-1" type="radio">
					<label for="trophies-rating-1"><i class="icon-trophy"></i></label>
					Trophies
				</div>

				<div class="rating">
					<input name="asterisks-rating" id="asterisks-rating-10" type="radio">
					<label for="asterisks-rating-10"><i class="icon-asterisk"></i></label>
					<input name="asterisks-rating" id="asterisks-rating-9" type="radio">
					<label for="asterisks-rating-9"><i class="icon-asterisk"></i></label>
					<input name="asterisks-rating" id="asterisks-rating-8" type="radio">
					<label for="asterisks-rating-8"><i class="icon-asterisk"></i></label>
					<input name="asterisks-rating" id="asterisks-rating-7" type="radio">
					<label for="asterisks-rating-7"><i class="icon-asterisk"></i></label>
					<input name="asterisks-rating" id="asterisks-rating-6" type="radio">
					<label for="asterisks-rating-6"><i class="icon-asterisk"></i></label>
					<input name="asterisks-rating" id="asterisks-rating-5" type="radio">
					<label for="asterisks-rating-5"><i class="icon-asterisk"></i></label>
					<input name="asterisks-rating" id="asterisks-rating-4" type="radio">
					<label for="asterisks-rating-4"><i class="icon-asterisk"></i></label>
					<input name="asterisks-rating" id="asterisks-rating-3" type="radio">
					<label for="asterisks-rating-3"><i class="icon-asterisk"></i></label>
					<input name="asterisks-rating" id="asterisks-rating-2" type="radio">
					<label for="asterisks-rating-2"><i class="icon-asterisk"></i></label>
					<input name="asterisks-rating" id="asterisks-rating-1" type="radio">
					<label for="asterisks-rating-1"><i class="icon-asterisk"></i></label>
					Asterisks
				</div>
				<div class="note">
					<strong>Note:</strong> you can use more than 300 vector icons for rating.
				</div>
			</section>
		</fieldset>

		<footer>
			<button type="submit" class="button">
				Submit
			</button>
			<button type="button" class="button button-secondary" onclick="window.history.back();">
				Back
			</button>
		</footer>
	</form>
	<!--/ Blue color scheme -->
</div>