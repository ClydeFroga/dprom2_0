<!-- -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?150"></script>
<script type="text/javascript">
  VK.init({apiId: 6274941, onlyWidgets: true});
</script>
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.11&appId=2005773896303783';
                fjs.parentNode.insertBefore(js, fjs);
}
     (document, 'script', 'facebook-jssdk'));
    </script>
    <div class="comments">
	<input type="radio" class="comments__radio" name="comment" id="fbComment" checked>
	<label for="fbComment" class="comments__cmntTgl">Комментировать FB</label>
	<input type="radio"  class="comments__radio" name="comment" id="vkComment">
	<label for="vkComment" class="comments__cmntTgl">Комментировать VK</label>
	<div class="comments__commentTab" id="blockFb">
		<div class="fb-comments" data-href="<?php the_permalink();?>" data-width="auto" data-numposts="10">
		</div>
	</div>
	<div class="comments__commentTab" id="blockVk">
		<div id="vk_comments"></div>
                <script type="text/javascript">
                    VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
                </script>
	</div>
</div> 