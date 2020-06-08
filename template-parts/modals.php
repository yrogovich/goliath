<!-- Modal HTML embedded directly into document -->
<div id="calc-price-modal" class="modal"> 
	<div class="custom-row">
		<div class="column-about">
			<div class="text">
				<div class="h2">Узнать стоимость</div>
				<p>Заполните поля формы, мы свяжемся с Вами в ближайшее время.</p>
			</div>
			<!-- /.text -->
			
			<div class="image">
				<img data-src="<?php bloginfo('template_url') ?>/src/img/modal-img.jpg" alt="goliath" class="lazy">
			</div>
		</div>
		<!-- /.column-about -->
		<div class="column-form">
			<form>
				<input type="hidden" name="form_name" value="Узнать стоимость">

				<div class="input-wrapper">
					<label for="#name">Имя*</label>
					<input type="text" name="name" id="name" placeholder="Иван петров" required>
				</div>
				<!-- /.input-wrapper -->
				<div class="input-wrapper">
					<label for="#phone">Ваш мобильный телефон*</label>
					<input type="text" name="phone" id="phone" placeholder="+1 234 5678 910" required>
				</div>
				<!-- /.input-wrapper -->
				<div class="input-wrapper">
					<label for="#phone">Комментарий</label>
					<textarea name="message" id="phone" placeholder="По какой услуге узнать стоимость?"></textarea>
				</div>
				<!-- /.input-wrapper -->

				<button class="btn btn-primary">
					Узнать стоимость
				</button>

	
				<label class="custom-checkbox privacy-text">
					<input type="checkbox" checked required>
					<span>Я согласен на обработку <a href="<?=get_privacy_policy_url()?>">персональных данных</a></span>
				</label>	
			</form>
		</div>
		<!-- /.column-form -->
	</div>
	<!-- /.custom-row -->
</div>

<!-- Modal HTML embedded directly into document -->
<div id="free-consult-modal" class="modal"> 
	<div class="custom-row">
		<div class="column-about">
			<div class="text">
				<div class="h2">Бесплатная консультация</div>
				<p>Заполните поля формы, мы свяжемся с Вами в ближайшее время.</p>
			</div>
			<!-- /.text -->
			
			<div class="image">
				<img data-src="<?php bloginfo('template_url') ?>/src/img/modal-img.jpg" alt="goliath" class="lazy">
			</div>
		</div>
		<!-- /.column-about -->
		<div class="column-form">
			<form>
				<input type="hidden" name="form_name" value="Бесплатная консультация">

				<div class="input-wrapper">
					<label for="#name">Имя*</label>
					<input type="text" name="name" id="name" placeholder="Иван петров" required>
				</div>
				<!-- /.input-wrapper -->
				<div class="input-wrapper">
					<label for="#phone">Ваш мобильный телефон*</label>
					<input type="text" name="phone" id="phone" placeholder="+1 234 5678 910" required>
				</div>
				<!-- /.input-wrapper -->
				<div class="input-wrapper">
					<label for="#phone">Комментарий</label>
					<textarea name="message" id="phone" placeholder="Опишите кратко, что Вас интересует"></textarea>
				</div>
				<!-- /.input-wrapper -->

				<button class="btn btn-primary">
					Получить консультацию
				</button>

	
				<label class="custom-checkbox privacy-text">
					<input type="checkbox" checked required>
					<span>Я согласен на обработку <a href="<?=get_privacy_policy_url()?>">персональных данных</a></span>
				</label>	
			</form>
		</div>
		<!-- /.column-form -->
	</div>
	<!-- /.custom-row -->
</div>

<!-- Modal HTML embedded directly into document -->
<div id="thanks-modal" class="modal"> 
	<div class="custom-row">
		<div class="column-about">
			<div class="text">
				<div class="h2">Заявка отправлена!</div>
				<p>В ближайшее время наш консультант свяжется с вами</p>
			</div>
			<!-- /.text -->
			
			<div class="image">
				<img data-src="<?php bloginfo('template_url') ?>/src/img/modal-img.jpg" alt="goliath" class="lazy">
			</div>
		</div>
		<!-- /.column-about -->
		<div class="column-form">
			<div class="h3">Спасибо за обращение</div>
			<div class="btn btn-primary" onclick="jQuery.fancybox.close()">Вернуться на главную</div>
		</div>
		<!-- /.column-form -->
	</div>
	<!-- /.custom-row -->
</div>