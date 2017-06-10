<?php
/**
 * LyanZ,A Typecho Theme
 * 
 * @package LyanZ 
 * @author 野狼
 * @version 0.0.1
 * @link https://www.sstype.com
 */
	 $this->need('header.php');
	 $this->need('sidebar.php');
?>
	<div id="lzSideMenu" v-bind:style="marValue" class="w3-main w3-light-grey">
		<div class="w3-teal">
 		<button onclick="lzSidebar.lzSideLookC(true)" class="w3-button w3-teal w3-xlarge">&#9776;</button>
 		</div>
		<div class="w3-container w3-teal">
			<h1><?php $this->options->title(); ?></h1>
			<p><?php $this->options->description() ?></p>
		</div>
<?php $this->need('crumbs.php'); ?>
		<?php while($this->next()): ?>
		<div style="margin-top: 10px" class="w3-container w3-card-4">
			<div class="lz-list" >
				<a href="<?php $this->permalink() ?>"><h2><?php $this->title() ?></h2></a>
			</div>
			<div class="lz-list" >
				<?php $this->content(); ?>
				<center><button class="w3-btn w3-teal w3-round-xxlarge lz-center"><a href="<?php $this->permalink() ?>">Continue Reading...</a></button></center>
			</div>
			<div class="w3-right lz-list" >
				<p><?php $this->date('F j, Y'); ?></p>
			</div>
		</div>
		<?php endwhile; ?>
		<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
	<?php $this->need('footer.php'); ?>