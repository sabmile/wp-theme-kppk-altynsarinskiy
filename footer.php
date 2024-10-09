<footer class="footer">
		
		<div class="container">

			<div class="footer__top">

			</div>
		
			<div class="footer__bottom">
	
			</div>

		</div>

	</footer>
	
	<?php
   /* Всегда используйте wp_footer() перед закрывающим тегом </body>
	* иначе множество плагинов не будут работать корректно, потому что
	* они используют этот хук для вставки различных JS и других кодов.
	*/
		wp_footer();
	?>
	
</body>
</html>