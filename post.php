<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('sidebar.php'); ?>

<div id="lzSideMenu" v-bind:style="marValue" class="w3-main w3-light-grey">
	<div class="w3-teal">
 		<button onclick="lzSidebar.lzSideLookC(true)" class="w3-button w3-teal w3-xlarge">&#9776;</button>
 	</div>
	<div class="w3-container w3-teal">
		<h1><?php $this->options->title(); ?></h1>
		<p><?php $this->options->description() ?></p>
	</div>
<?php $this->need('crumbs.php'); ?>
	<div class="w3-card-4">

			<header class="w3-container w3-dark-gray">
			  <h2><?php $this->title() ?></h2>
			  <p class="w3-right">发表于 <?php $this->date('F j, Y'); ?></p>
			</header>

			<div class="w3-container">
		  		<?php $this->content(); ?>
			</div>

			<footer class="w3-container w3-indigo">
			  <h5>标签 / Tags：<span class="w3-tag w3-round w3-teal"><?php $this->tags('</span> <span class="w3-tag w3-round w3-teal">', true, '小编懒死啦，连个标签都不加233'); ?></span></h5>
			</footer>

	</div>
<?php $this->need('comments.php'); ?>
	


<?php $this->need('footer.php'); ?>