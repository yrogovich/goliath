<!-- Modal HTML embedded directly into document -->
<div id="calc-price-modal" class="modal"> 
	<div class="decor"></div>

	<div class="title">Узнать стоимость</div>
	<div class="subtitle">Укажите номер телефона и мы вам перезвоним</div>
	<form class="content">
		<input type="hidden" name="form_name" value="Узнать стоимость">

		<div class="input-wrapper">
			<input type="text" name="name" placeholder="Ваше имя" required>
		</div>
		<!-- /.input-wrapper -->
		<div class="input-wrapper">
			<input type="text" name="phone" placeholder="Номер телефона" required>
		</div>
		<!-- /.input-wrapper -->

		<button class="btn btn-primary">
			<span>Узнать стоимость</span>
		</button>

		<div class="privacy-text">
			Нажимая на кнопку я соглашаюсь с 
			<a href="<?=get_privacy_policy_url()?>" class="privacy">политикой конфиденциальности</a>
		</div>
	</form>
</div>

<!-- Modal HTML embedded directly into document -->
<div id="thanks-modal" class="modal"> 
	<div class="h3">Заявка отправлена!</div>
	<div class="subtitle">В ближайшее время наш консультант свяжется с вами</div>
</div>