		</div>
	</div>
</div>
<div id="footer" class="container">
<p>
	<?php bloginfo('description') ?>
</p>
<p>© <?php 
        $year = date('Y'); 
        if($year != 2013)	{ 
            echo "2013"."-".$year; 
        } else	{ 
            echo $year; 
        } ?> 
        <?php bloginfo('name'); ?>. تمام حقوق سایت محفوظ است.
</p>
</div>
</div>
</body>
</html>
<?php wp_footer(); ?>

