<!-- BEGIN STYLE CUSTOMIZER -->
<div class="color-panel hidden-phone">
	<div class="color-mode-icons icon-color mr20"></div>
	<div class="color-mode-icons icon-color-close"></div>
	<div class="color-mode">
		<p>THEME COLOR</p>
		<ul class="inline">
			<li class="color-black color-default <?=(!empty($_COOKIE['style_color'])) ? ($_COOKIE['style_color'] == 'default') ? 'current' : 'current' : 'current' ?>" data-style="default"></li>
			<li class="color-blue <?=(!empty($_COOKIE['style_color'])) ? ($_COOKIE['style_color'] == 'default') ? 'current': '' : ''?>" data-style="blue"></li>
			<li class="color-brown <?=(!empty($_COOKIE['style_color'])) ? ($_COOKIE['style_color'] == 'brown') ? 'current': '' : ''?>" data-style="brown"></li>
			<li class="color-purple <?=(!empty($_COOKIE['style_color'])) ? ($_COOKIE['style_color'] == 'purple') ? 'current': '' : ''?>" data-style="purple"></li>
			<li class="color-white color-light <?=(!empty($_COOKIE['style_color'])) ? ($_COOKIE['style_color'] == 'light') ? 'current': '' : ''?>" data-style="light"></li>
		</ul>
		<label class="hidden-phone">
		<input type="checkbox" class="header" checked value="" />
		<span class="color-mode-label">Fixed Header</span>
		</label>							
	</div>
</div>
<!-- END BEGIN STYLE CUSTOMIZER -->		