<?php
	if(!is_page('order') && !is_page('orders') && !is_page('preview')) {
		 get_template_part('inc', 'get-count');
	}
 ?>
	</div><?php // main-container end ?>
		<footer id="footer" class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row margin-t-50">
						<div class="col-md-3">
							<div class="footer-logo"></div>
							<div class="footer-social-button">
								<div class="footer-fb social-item">
									<div id="fb-root"></div>
									<script>(function (d, s, id) {
											var js, fjs = d.getElementsByTagName(s)[0];
											if (d.getElementById(id)) return;
											js = d.createElement(s);
											js.id = id;
											js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5";
											fjs.parentNode.insertBefore(js, fjs);
										}(document, 'script', 'facebook-jssdk'));</script>
									<div class="fb-like" data-href="http://englishessays.net" data-layout="button_count"
										 data-action="like" data-show-faces="true" data-share="false"></div>
								</div>
								<div class="footer-twitter social-item">
									<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
									<script>!function (d, s, id) {
											var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
											if (!d.getElementById(id)) {
												js = d.createElement(s);
												js.id = id;
												js.src = p + '://platform.twitter.com/widgets.js';
												fjs.parentNode.insertBefore(js, fjs);
											}
										}(document, 'script', 'twitter-wjs');</script>
								</div>
								<div class="footer-g-plus social-item">
									<div class="g-plusone"></div>
									<script type="text/javascript">
										window.___gcfg = {lang: 'ru'};

										(function () {
											var po = document.createElement('script');
											po.type = 'text/javascript';
											po.async = true;
											po.src = 'https://apis.google.com/js/platform.js';
											var s = document.getElementsByTagName('script')[0];
											s.parentNode.insertBefore(po, s);
										})();
									</script>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="footer-menu">
								<?php if (has_nav_menu('footer_menu')) :
									$nav_args = array(
										'theme_location' => 'footer_menu',
										'container' => '',
										'depth' => 1
									);
									wp_nav_menu($nav_args);
								endif; ?>
							</div>
						</div>
						<div class="col-md-3 footer-right-block">
							<div class="footer-phone">
								<img src="<?php bloginfo('template_url'); ?>/images/footer_phone.png" alt="">
							</div>
							<div class="clearfix"></div>
							<div class="cards">
								<img src="<?php bloginfo('template_url'); ?>/images/cards.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="copyright">Copyright &copy; 2015 - <?php echo date("Y"); ?> <?php bloginfo('name'); ?>.
								All
								rights reserved.
							</div>
						</div>
						<div class="footer-tos-block col-sm-12">
							<!-- TOS start -->
							<div class="footer-tos">
						    	<a href="#" class="tos-service" data-crm-widget="termsPopup" data-tab="tos">Terms And Conditions</a>
								<a href="#" class="tos-service" data-crm-widget="termsPopup" data-tab="privacy">Policy</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>

		<script>
			$(document).ready(function() {
				/* ZOPIM CLEAR */
			    function ZopimClear(n){$(window).load(function(){function o(n,o,i,e){document.cookie=n+"="+o+"; expires="+i+"; domain="+e+"; path=/"}function i(n){for(var o=n+"=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var t=i[e];" "==t.charAt(0);)t=t.substring(1,t.length);if(0==t.indexOf(o))return t.substring(o.length,t.length)}return null}var e=i("ZopimSession");console.log(n),null==e&&(o("ZopimSession","",0,n),$zopim.livechat.clearAll())})}
			    ZopimClear(".<?php
			        $site_url = get_site_url();
			        $find = array( 'http://', 'https://', '/', 'track.' );
			        $replace = '';
			        $output = str_replace( $find, $replace, $site_url );
			        echo $output;
			    ?>");
			});
		</script>
		<?php if (function_exists ('drawRoyalBlock')) {
			echo drawRoyalBlock('build-exit-popup-ux');
		} ?>
	</body>
</html>