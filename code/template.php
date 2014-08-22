
<?php
/**
 * @package     Wright
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2013 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */
// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<doctype>
	<html> 
		<head>
			<w:head /> 
			<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		</head>
		<body class="<?php   echo $responsive ?>">
		<!-- toolbar -->
			<?php if ($this->countModules('toolbar')) : ?>
			<w:nav containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode; ?>" wrapClass="navbar-fixed-top navbar-inverse" type="toolbar" name="toolbar" />
			<?php endif; ?>
			<!-- toolbar end -->
			<!-- header -->
			<header id="header">
				<!-- logo -->
				<div class="<?php echo $containerClass ?>">
					<div class="header-inner"> 
						<w:logo name="top"/>
						<div class="clear"></div> 
					</div>
					<!-- logo end -->
				</div>
			</header> 
			<!-- header end -->
			<!-- top -->
			<?php if ($this->countModules('top')) : ?> 
			<div id="top-header"> 
				<div class="<?php echo $containerClass ?>">
					<w:nav containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode; ?>" wrapClass="navbar-inverse" type="menu" name="menu" />
				</div>
			</div>
			<?php endif; ?>
			<!-- top end -->
			<!-- breadcrumbs -->
			<?php if ($this->countModules('breadcrumbs')) : ?>
			<div id="breadcrumbs">
				<div class="<?php echo $containerClass ?>">
					<div class="<?php echo $gridMode; ?>">
						<div class="span12">
							<w:module type="single" name="breadcrumbs" chrome="none" />
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<!-- breadcrumbs end -->
			<!-- Main container -->
				<!-- Featured -->
				<?php if ($this->countModules('featured')) : ?>
				<div class="<?php echo $containerClass ?>">	
                <div id="featured">
                	<w:module type="none" name="featured" chrome="xhtml" />
				</div>
				</div>
                <?php endif; ?>	
                <!-- Featured end -->
				<!-- grid-top -->
				<?php if ($this->countModules('grid-top')) : ?>	
				<div id="grid-top">
				<div class="<?php echo $containerClass ?>">		
					<w:module type="row-fluid" name="grid-top" chrome="wrightflexgrid" extradivs="module" />
				</div>
				</div>
				<?php endif; ?>
				<!-- grid-top end -->
				<!-- grid-top2 -->
				<?php if ($this->countModules('grid-top2')) : ?>
				<!-- grid-top2 -->
				<div id="grid-top2">
					<div class="<?php echo $containerClass ?>">	
					<w:module type="<?php echo $gridMode; ?>" name="grid-top2" chrome="wrightflexgrid" extradivs="module" />
				</div>
				</div>
				<?php endif; ?>
				<!-- grid-top2 end -->
				<?php if ($this->countModules('content') || $this->countModules('content2')) : ?>
				<div id="content-wrapper">
				<?php endif; ?>	
				<!-- content -->
				<?php if ($this->countModules('content')) : ?>
				<div id="content">
					<div class="<?php echo $containerClass ?>">	
					<w:module type="<?php echo $gridMode; ?>" name="content" chrome="wrightflexgrid" extradivs="module" />
					</div>
				</div>
				<?php endif; ?>
				<!-- content end -->
				<!-- content2 -->
				<?php if ($this->countModules('content2')) : ?>
				<div id="content2">
				<div class="<?php echo $containerClass ?>">	
					<w:module type="<?php echo $gridMode; ?>" name="content2" chrome="wrightflexgrid" extradivs="module" />
				</div>
				</div>
				<?php endif; ?>
				<!-- content2 end -->
				<?php if ($this->countModules('content') || $this->countModules('content2')) : ?>
				</div>
				<?php endif; ?>	
				<div class="<?php echo $containerClass ?>">
				<div id="main-content" class="<?php echo $gridMode; ?>">
					<!-- sidebar1 -->
					<aside id="sidebar1">
						<w:module name="sidebar1" chrome="xhtml" />
					</aside>
					<!-- sidebar1 end -->
					<!-- main -->
					<section id="main">
						<?php if ($this->countModules('above-content')) : ?>
						<!-- above-content -->
						<div id="above-content">
						<w:module type="none" name="above-content" chrome="xhtml" />
						</div>
						<?php endif; ?>
						<!-- above-content end -->
						<!-- component -->
						<w:content /> 
						<!-- component end -->
						<!-- below-content --> 
						<?php if ($this->countModules('below-content')) : ?>
						<div id="below-content">
							<w:module type="none" name="below-content" chrome="xhtml" />
						</div>
						<?php endif; ?> 
						<!-- below-content end -->
					</section>
					<!-- main end -->
					<!-- sidebar2 -->
					<aside id="sidebar2">
						<w:module name="sidebar2" chrome="xhtml" />
					</aside>
					<!-- sidebar2 end -->
				</div>
				</div>
			<!-- main container end -->
				<!-- grid-bottom -->
				<?php if ($this->countModules('grid-bottom')) :	?> 
				<div id="grid-bottom" >
					<div class="<?php echo $containerClass ?>">
					<w:module type="<?php echo $gridMode; ?>" name="grid-bottom" chrome="wrightflexgrid" extradivs="module" />
					</div>
				</div> 
				<?php endif; ?>
				<!-- grid-bottom end --> 
				<!-- grid-bottom2 --> 
				<?php if ($this->countModules('grid-bottom2')) : ?>
				<div id="grid-bottom2" >		
				<div class="<?php echo $containerClass ?>">
					<w:module type="<?php echo $gridMode; ?>" name="grid-bottom2" chrome="wrightflexgrid" extradivs="module" />
				</div>
				</div>  
				<?php endif; ?>
				<!-- grid-bottom2 end -->
			<!-- footer -->
			<div class="wrapper-footer">
				<footer id="footer" <?php if ($this->params->get('stickyFooter',1)) : ?> class="sticky" <?php endif; ?> >
					<!-- bottom-menu -->
					<?php if ($this->countModules('bottom-menu')) : ?>
					<w:nav containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode; ?>" name="bottom-menu" wrapClass="navbar-transparent" />
					<?php endif; ?>
					<!-- bottom-menu end -->
					<div class="<?php echo $containerClass ?> footer-content">
						<?php if ($this->countModules('footer')) : ?>
						<w:module type="<?php echo $gridMode; ?>" name="footer" chrome="wrightflexgrid" />
						<?php endif; ?>
						<w:footer /> 
					</div>
				</footer>
			</div>
		</body>
	</html>
</doctype>