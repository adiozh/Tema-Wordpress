<?php get_header(); ?>
<?php get_sidebar(); ?>
    <div id="content">
    <?php if (have_posts()) : 
            while (have_posts()) : the_post(); ?><br>          
			<div class="list-posting">
                <h1><?php the_title(); ?></h1>
                <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                <p><?php the_content(__('(more...)')); ?></p><br>              </div>
            <?php 
            endwhile; 
          else: ?>
            <p>
                <?php _e('Maaf posting tidak tersedia'); ?></p>
    <?php endif; ?>
	
    </div>
<div id="sidebar_kanan">
<br>

<div align="center">
<b> Objek di Kanvas <b>
</div>
<div id="kanvasku">

<canvas id="kanvas" width="130" height="200" style="margin:10px auto; border:none; border-radius:2em">
</canvas>
<script type="text/javascript">
var a=document.getElementById("kanvas");
var konten=a.getContext("2d");
konten.fillStyle="blue";
konten.fillRect(80,25,10,50); //posisi x, posisi y, width, height

konten.fillStyle="lime";//tangan
konten.fillRect(90,40,70,5); //posisi x, posisi y, width, height

konten.fillStyle="lime";//tangan
konten.fillRect(90,50,70,5); //posisi x, posisi y, width, height

konten.fillStyle="black";//kaki
konten.fillRect(95,70,10,30); //posisi x, posisi y, width, height

konten.fillStyle="red";//kaki
konten.fillRect(75,70,30,5); //posisi x, posisi y, width, height

konten.fillStyle="red";
konten.beginPath();
konten.arc(80,18,15,0,Math.PI*2,true);
konten.closePath();
konten.fill();


konten.fillStyle="black";
konten.fillRect(80,12,5,5); //posisi x, posisi y, width, height

konten.fillStyle="black";
konten.fillRect(80,25,10,2); //posisi x, posisi y, width, height

</script>
</div>
</div>

<br><div class="clear"></div>
<?php get_footer(); ?>
<script type="text/javascript">
$(function() {
	$(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:500,
		speed:1000
	});
});
</script>