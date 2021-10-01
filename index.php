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
	<div class="b-wrapper" id="wrapper">
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
				<div class="b-menu__sandwich" id="menu__sandwich">
					<i class="b-menu__sandwich__ico i-menu__sandwich__ico i-svg none" data-symbol="close"></i>
					<i class="b-menu__sandwich__ico i-menu__sandwich__ico i-svg" data-symbol="sandwich"></i>
				</div>
				<menu class="b-menu__list" id="menu__list">
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
				</menu>
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
									<input type="text" class="i-copy-content" value="DYHY694Y" readonly size="8">
									<span class="b-main-info__id-value__ico i-svg i-copy" data-symbol="copy"></span>
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
										<div class="b-currency" id="currency-wrapper" data-currency="dollar">
											<input type="text" tabindex="12" id="goal">
										</div>
										<div class="b-select">
											<select name="currency" id="currency" tabindex="13">
												<option value="dollar">USD</option>
												<option value="euro">EUR</option>
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
										<div class="b-tabs__form__dd__slider-info" id="border_size_val">2px</div>
									</dd>
									<dt class="b-tabs__form__dt"><label for="border_radius">Border radius</label></dt>
									<dd class="b-tabs__form__dd b-tabs__form__dd_slider">
										<div class="b-tabs__form__dd__slider-wrap">
											<input type="range" id="border_radius" min="0" max="5" step="1" value="4" tabindex="18">
										</div>
										<div class="b-tabs__form__dd__slider-info" id="border_radius_val">4px</div>
									</dd>
								</dl>
							</div>
							
							<input id="appearance-tab" type="radio" name="tabs" class="b-tabs__head-radio">
							<label for="appearance-tab" class="b-tabs__head b-tabs__head_order2">Appearance</label>
							<div class="b-tabs__content">
								Molestie sed adipiscing in in est. Aenean risus sed consectetur justo consectetur et sit cursus ipsum arcu lectus et libero, tempus pellentesque in molestie ultricies. Mauris integer amet, sed dictum. Augue non sed amet et. Dictum lacinia in sit ultricies. In adipiscing luctus dictum. Ultricies. 
							</div>
							
							<input id="custom-fields-tab" type="radio" name="tabs" class="b-tabs__head-radio">
							<label for="custom-fields-tab" class="b-tabs__head b-tabs__head_order3">Custom Fields</label>
							<div class="b-tabs__content">Urna morbi vulputate orci, tortor, nulla nisi habitasse lacinia luctus pellentesque ornare hac et mattis nec ex. Urna tempus dolor leo, sit morbi habitasse urna integer nisi elit. Morbi mollis arcu tempus et. Orci, aenean dui molestie sapien dictum non mattis leo, non molestie platea dolor sit nunc tortor, est. Platea vel ornare venenatis venenati.
							</div>
							
							<input id="questions-tab" type="radio" name="tabs" class="b-tabs__head-radio">
							<label for="questions-tab" class="b-tabs__head b-tabs__head_order4">Questions</label>
							<div class="b-tabs__content">Ut. Mollis aenean vel cursus sit molestie et molestie et hac dolor morbi dictumst. Molestie adipiscing malesuada amet mattis sit augue amet hac dui risus platea aenean velit amet, ex.</div>
							
							<input id="url-control-tab" type="radio" name="tabs" class="b-tabs__head-radio">
							<label for="url-control-tab" class="b-tabs__head b-tabs__head_order5">URL control</label>
							<div class="b-tabs__content"> Pulvinar ornare tortor, pulvinar non tempus pellentesque molestie sapien risus ex. Ipsum arcu et integer quam, vestibulum id velit accumsan dictumst. Ipsum ut. Urna velit quis, venenatis sed malesuada imperdiet dapibus nec aenean vestibulum dictumst. Amet, libero, sed lacinia dolor sed dolor eleifend leo, consectetur ornare adipiscing tortor, risus sed imperdiet consectetur dictum. Lacinia vulputate lacinia nec imperdiet vitae in dui mattis sed eleifend imperdiet mollis non nulla in venenati.</div>
						</div><!-- //b-tabs -->
					</div><!-- //b-panel__top -->
					<div class="b-panel__bottom b-panel__bottom_pink">
						<input type="submit" value="Save changes" tabindex="100">
						<input type="reset" value="Cancel" tabindex="101">
					</div>
				</form><!-- //b-panel -->
			</main>
		</div><!-- //b-content -->
	</div><!-- //b-wrapper -->
</body>
</html>