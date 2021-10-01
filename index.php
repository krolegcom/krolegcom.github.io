<!DOCTYPE html>
<html lang="en">
<head>
	<title>fundraise Up. Frontend test</title>
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">


    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">	
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/assets/css/min/main.css?date=<?=time();?>">

	<script async src="/assets/js/scripts.js"></script>
</head>
<body>
	<div class="b-wrapper"><!-- NB! комменты к закрывашкам! И сделать копирование при клике на copy. Tabindex. Для читалок. Убрать xHTML-закрывашки. Check Safari. SCSS-переменные (и trabsform). Переключение валют -->
		<section class="b-panel">
			<div class="b-panel__top">
				<h1>Donations</h1>
			</div>
			<form class="b-panel__bottom">
				<div class="b-search">
					<i class="b-search__ico i-svg" data-symbol="loupe"></i>
					<input type="text" class="b-search__text" placeholder="Search" tabindex="1">
				</div>
				<div class="b-select b-select_light">
					<select name="status" id="status" tabindex="2">
						<option value="1">All statuses</option>
						<option value="2">New</option>
						<option value="3">In Progress</option>
						<option value="4">Resolve</option>
						<option value="5">Done</option>
					</select>
					<i class="b-select__arrow b-select__arrow_light i-svg" data-symbol="arrow_down"></i>
				</div>
			</form>
		</section>
		<div class="b-content">
			<nav class="b-menu">
				<ul class="b-menu__list">
					<li class="b-menu__elem">
						<a href="" class="b-menu__lnk"><i class="b-menu__ico i-svg" data-symbol="menu-elem-1"></i>Change Amount</a>
					</li>
					<li class="b-menu__elem">
						<a href="" class="b-menu__lnk"><i class="b-menu__ico i-svg" data-symbol="menu-elem-2"></i>Change Payment Method</a>
					</li>
					<li class="b-menu__elem">
						<span class="b-menu__lnk b-menu__lnk_act"><i class="b-menu__ico i-svg" data-symbol="menu-elem-3"></i>Change Date</span>
					</li>
					<li class="b-menu__elem">
						<a href="" class="b-menu__lnk"><i class="b-menu__ico i-svg" data-symbol="menu-elem-4"></i>Cancel Recurring</a>
					</li>
				</ul>
			</nav>
			<main class="b-center-zone">
				<section class="b-panel">
					<div class="b-panel__top">
						<div class="b-main-info">
							<div class="b-main-info__left">
								<div class="b-main-info__head"><i class="b-main-info__head__ico i-svg" data-symbol="dollar-usa"></i>Donation</div>
								<div class="b-main-info__money">
									<span class="b-main-info__money__total">&euro;20.60 EUR</span>
									<span class="b-main-info__money__in-dollar">≈ $22.22 USD</span>
								</div>
							</div>
							<div class="b-main-info__right">
								<div class="b-main-info__id">ID</div>
								<div class="b-main-info__id-value">
									DYHY694Y
									<a href="" class="b-main-info__id-value__ico i-svg" data-symbol="copy"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="b-panel__bottom">
						<ul class="b-service-info">
							<li class="b-service-info__elem">
								<div class="b-service-info__head">Status</div>
								<div class="b-service-info__status">
									<i class="b-service-info__status__ico i-svg" data-symbol="round-check"></i>Success
								</div>
							</li>
							<li class="b-service-info__elem">
								<div class="b-service-info__head">Supporter</div>
								<a href="#">Charlotte Ann</a>
							</li>
							<li class="b-service-info__elem">
								<div class="b-service-info__head">Campaign</div>
								<a href="#">Workout for water</a>
							</li>
						</ul>
					</div>
				</section>
	
				<form class="b-panel" autocomplete="off">
					<div class="b-panel__top">
						<div class="b-tabs">
							<input id="behavior-tab" type="radio" name="tabs" checked="checked" class="b-tabs__head-radio">
							<label for="behavior-tab" class="b-tabs__head b-tabs__head_order1">Behavior</label>
						
							<div class="b-tabs__content">
								<dl class="b-tabs__form">
									<dt class="b-tabs__form__dt"><label for="designation">Designation</label></dt>
									<dd class="b-tabs__form__dd">
										<div class="b-select">
											<select name="designation" id="designation" tabindex="11">
												<option value="0">Match Checkout Settings</option>
											</select>
											<i class="b-select__arrow i-svg" data-symbol="arrow_down"></i>
										</div>
									</dd>
									<dt class="b-tabs__form__dt"><label for="">Goal</label></dt>
									<dd class="b-tabs__form__dd b-tabs__form__dd_input-select">
										<div class="b-currency" data-currency="dollar">
											<input type="text" tabindex="12" id="goal">
										</div>
										<div class="b-select">
											<select name="currency" id="currency" tabindex="13">
												<option value="usd">USD</option>
												<option value="euro">EURO</option>
												<option value="rouble">RUB</option>
											</select>
											<i class="i-svg b-select__arrow" data-symbol="arrow_down"></i>
										</div>
									</dd>
									
									<dt class="b-tabs__form__dt b-tabs__form__dt_start"><label>Default Amount</label></dt>
									<dd class="b-tabs__form__dd b-tabs__form__dd_free">
										<fieldset class="b-tabs__form__fieldset">
											<div class="b-tabs__form__radio-wrap">
												<label class="b-radio"><input type="radio" name="radio1" id="match_checkout_setting" tabindex="14"><span class="b-radio__ico"></span>Match Checkout Setting</label>
											</div>
											<div class="b-tabs__form__radio-wrap">
												<label class="b-radio"><input type="radio" name="radio1" id="customize" tabindex="15"><span class="b-radio__ico"></i></span>Customize</label>
											</div>
										</fieldset>
										<div class="b-tabs__form__dd__checkbox-wrap">
											<label class="b-checkbox"><input type="checkbox" name="allow_donor" tabindex="16"><span class="b-checkbox__ico i-svg" data-symbol="checkbox"></span>Allow donor to change default currency</label>
										</div>
									</dd>
									<dt class="b-tabs__form__dt"><label for="border_size">Border size</label></dt>
									<dd class="b-tabs__form__dd b-tabs__form__dd_slider">
										<div class="b-tabs__form__dd__slider-wrap">
											<input type="range" id="border_size" min="0" max="5" step="1" value="2" tabindex="17">
										</div>
										<div class="b-tabs__form__dd__slider-info">2px</div>
									</dd>
									<dt class="b-tabs__form__dt"><label for="border_radius">Border radius</label></dt>
									<dd class="b-tabs__form__dd b-tabs__form__dd_slider">
										<div class="b-tabs__form__dd__slider-wrap">
											<input type="range" id="border_radius" min="0" max="5" step="1" value="4" tabindex="18">
										</div>
										<div class="b-tabs__form__dd__slider-info">4px</div>
									</dd>
								</dl>
							</div>
							
							
							<input id="appearance-tab" type="radio" name="tabs" class="b-tabs__head-radio">
							<label for="appearance-tab" class="b-tabs__head b-tabs__head_order2">Appearance</label>
							<div class="b-tabs__content">Content tab2</div>
							
							
							<input id="custom-fields-tab" type="radio" name="tabs" class="b-tabs__head-radio">
							<label for="custom-fields-tab" class="b-tabs__head b-tabs__head_order3">Custom Fields</label>
							<div class="b-tabs__content">Content tab3</div>
							
							
							<input id="questions-tab" type="radio" name="tabs" class="b-tabs__head-radio">
							<label for="questions-tab" class="b-tabs__head b-tabs__head_order4">Questions</label>
							<div class="b-tabs__content">Content tab4</div>
							
							
							<input id="url-control-tab" type="radio" name="tabs" class="b-tabs__head-radio">
							<label for="url-control-tab" class="b-tabs__head b-tabs__head_order5">URL control</label>
							<div class="b-tabs__content">Content tab5</div>
						</div>
					</div>
					<div class="b-panel__bottom b-panel__bottom_pink">
						<input type="submit" value="Save changes" tabindex="100">
						<input type="reset" value="Cancel" tabindex="101">
					</div>
				</form>
			</main>
		</div>
	</div>
</body>
</html>