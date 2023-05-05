<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)): ?>
	<div class="header-main-menu hidden-xs">
		<nav id="primary-menu">
			<ul class="main-menu text-right">
				<?php foreach($arResult as $item): ?>
						<li>
							<a href="<?= $item['LINK'] ?>"<?= $item["SELECTED"] ? 'style="color: #009cbb"' : ''; ?> >
								<?= $item['TEXT'] ?>
								<?php if (!empty($item['subitems'])) : ?>
									<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
								<?php endif; ?>
							</a>
							<?php if (!empty($item['subitems'])) : ?>
								<ul class="dropdown">
									<?php foreach ($item['subitems'] as $subitem) : ?>
										<li>
											<a href="<?= $subitem['LINK']; ?>"><?= $subitem['TEXT'] ?? ''; ?></a>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</li>
				<?php endforeach; ?>
			</ul>
		</nav>
	</div>
<?php endif;?>

<!--?php

print_r($arResult);

?>




	


	<!-- <a href="services.html"> Услуги		
		<span class="indicator"><i class="fa fa-angle-down"></i></span></a>  
	<ul class="dropdown">
		<li>
			<a href="services_landing.html">Лендинг</a>
		</li>
		<li>
			<a href="services_online_shop.html">Интернет-магазин</a>
		</li>
	</ul>   -->