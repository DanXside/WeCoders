<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<!--?php
	echo '<pre>';
	print_r($arResult);
	echo '</pre>';
?!-->

<?php if (!empty($arResult['ITEMS'])) : ?>
	<section id="pricing" class="pricing-area bg-color pt-60 pb-60">
		<div class="container">
			<div class="row">
				<div class="section-heading text-center mb-70">
					<h2>Разработка сайта</h2>
					<p>Какой сайт вам нужен? Выбирайте, оставляйте заявку в форме ниже и мы свяжемся с вами!</p>
				</div>
			</div>
			<div class="row">
				<?php foreach($arResult['ITEMS'] as $arItem) : ?>
					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="single-pricing text-center mb-30">
							<div class="pricing-head">
								<h2 class="pricing-title text-uppercase"><?= $arItem['NAME'] ?? ''; ?></h2>
								<span><?= $arItem['PREVIEW_TEXT'] ?? ''; ?></span>
							</div>
							<div class="pricing-plan-price <?= $arItem['PROPERTIES']['color_price']['VALUE'] ?? ''; ?>">
								<span><span>от </span><?= $arItem['PROPERTIES']['price']['VALUE']
								? number_format($arItem['PROPERTIES']['price']['VALUE'], null, null, ' ') : ''; ?><span> ₽</span></span>
							</div>

							<?php if (!empty($arItem['PROPERTIES']['list_info']['VALUE'])) : ?>
								<div class="pricing-plan-list">
									<ul>
										<?php foreach ($arItem['PROPERTIES']['list_info']['VALUE'] as $propValue) : ?>
											<li><?= $propValue ?></li>
										<?php endforeach; ?>
									</ul>
								</div>
							<?php endif; ?>

							<div class="get-started">
								<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="btn <?= $arItem['PROPERTIES']['color_link']['VALUE'] ?? ''; ?>">
									<?= $arItem['PROPERTIES']['link']['VALUE'] ?? ''; ?>
								</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
