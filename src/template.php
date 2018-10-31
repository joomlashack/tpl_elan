<?php
/**
 * @package     Elan
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2016 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

?>
<doctype>
<html>
    <head>
        <w:head />
    </head>
    <body class="<?php echo $wrightBodyClass ?>">
        <?php
			if ($this->countModules('toolbar'))
				:
		?>
            <!-- toolbar -->
            <w:nav containerClass="<?php echo $wrightContainerClass ?> relative" rowClass="<?php echo $wrightGridMode; ?>" wrapClass="navbar-fixed-top navbar-inverse" type="toolbar" name="toolbar" />
            <!-- toolbar end -->
        <?php
            endif;
        ?>
        <div class="main-wrapper <?php echo $wrightContainerClass ?> bg-white full-height">
            <!-- header -->
            <header id="header">
                <div class="header-inner">
                    <div class="row-fluid">
                        <div class="<?php echo $topModuleClass ?>">
                            <w:logo name="top" />
                        </div>
                    </div>
                </div>
            </header>
            <!-- header end -->
            <?php
                if ($this->countModules('menu'))
                    :
            ?>
            <!-- menu -->
            <div id="top-header">
                <w:nav rowClass="row-fluid" type="menu" name="menu" />
            </div>
            <!-- menu end -->
            <?php
                endif;
            ?>
            <?php
                if ($this->countModules('featured'))
                    :
            ?>
            <!-- Featured -->
            <div id="featured">
                <w:module type="none" name="featured" />
            </div>
            <!-- Featured end -->
			<?php
				endif;
			?>
			<?php
				if ($this->countModules('breadcrumbs'))
					:
			?>
            <!-- breadcrumbs -->
            <div id="breadcrumbs">
                <div class="row-fluid">
                    <w:module type="single" name="breadcrumbs" chrome="none" />
                </div>
            </div>
            <!-- breadcrumbs end -->
			<?php
				endif;
			?>
			<?php
				if ($this->countModules('grid-top'))
					:
			?>
            <!-- grid-top -->
            <div id="grid-top">
                <w:module type="row-fluid" name="grid-top" chrome="wrightflexgrid" extradivs="module" />
            </div>
            <!-- grid-top end -->
			<?php
				endif;
			?>
			<?php
				if ($this->countModules('grid-top2'))
					:
			?>
            <!-- grid-top2 -->
            <div id="grid-top2">
                <w:module type="row-fluid" name="grid-top2" chrome="wrightflexgrid" extradivs="module" />
            </div>
            <!-- grid-top2 end -->
			<?php
				endif;
			?>
            <!-- main container -->
            <div id="main-content">
                    <!-- single image -->
                    <?php
						if ($wrightSingleArticleDisplay)
							:
					?>
                    <div class="row-fluid">
                    <div class="full-image span12 item-image">
                        <img
                        <?php if ($wrightSingleArticleCaption):
                            echo 'class="caption ' . $this->params->get('wright_bootstrap_images','') . '"'.' title="' .htmlspecialchars($wrightSingleArticleCaption) . '"';  // Wright .v.3: Added image class
                        /* Wright v.3: Image class when no caption present */
                        else:
                            echo 'class="' . $this->params->get('wright_bootstrap_images','') . '"';
                        /* End Wright v.3: Image class when no caption present */
                    endif; ?>
                    src="<?php echo htmlspecialchars($wrightSingleArticleImage); ?>" alt="<?php echo htmlspecialchars($wrightSingleArticleAlt); ?>"/>
                    </div>
                    </div>
                    <?php
						endif;
					?>
                    <!-- single image end -->
                <div class="row-fluid">
                    <!-- sidebar1 -->
                    <aside id="sidebar1">
                        <w:module name="sidebar1" />
                    </aside>
                    <!-- sidebar1 end -->
                    <!-- main -->
                    <section id="main">
						<?php
							if ($this->countModules('above-content'))
								:
						?>
                        <!-- above-content -->
                        <div id="above-content">
                            <w:module type="none" name="above-content" />
                        </div>
                        <!-- above-content end -->
						<?php
							endif;
						?>
                        <!-- component -->
                        <w:content />
                        <!-- component end -->
						<?php
							if ($this->countModules('below-content'))
								:
						?>
                        <!-- below-content -->
                        <div id="below-content">
                            <w:module type="none" name="below-content" />
                        </div>
                        <!-- below-content end -->
						<?php
							endif;
						?>
                    </section>
                    <!-- main end -->
                    <!-- sidebar2 -->
                    <aside id="sidebar2">
                        <w:module name="sidebar2" />
                    </aside>
                    <!-- sidebar2 end -->
                </div>
            </div>
            <!-- main container end -->
			<?php
				if ($this->countModules('grid-bottom'))
					:
			?>
            <!-- grid-bottom -->
            <div id="grid-bottom">
                <w:module type="row-fluid" name="grid-bottom" chrome="wrightflexgrid" extradivs="module" />
            </div>
            <!-- grid-bottom end -->
			<?php
				endif;
			?>
			<?php
				if ($this->countModules('grid-bottom2'))
					:
			?>
            <!-- grid-bottom2 -->
            <div id="grid-bottom2" class="m-b-0">
                <w:module type="row-fluid" name="grid-bottom2" chrome="wrightflexgrid" extradivs="module" />
            </div>
            <!-- grid-bottom2 end -->
			<?php
				endif;
			?>
            <!-- footer -->
            <w:module type="none" name="debug" chrome="none" />
            <div class="wrapper-footer <?php echo $wrightContainerClass ?>">
    			<footer id="footer" <?php
    				if ($this->params->get('stickyFooter', 1))
    					:
    				?> class="sticky bg-white"<?php
    				endif;
    				?>>
                    <?php
    					if ($this->countModules('bottom-menu'))
    						:
    				?>
                    <!-- bottom-menu -->
                    <w:nav rowClass="<?php echo $wrightGridMode; ?>" name="bottom-menu" />
                    <!-- bottom-menu end -->
                    <?php
    					endif;
    				?>
                    <div class="footer-content p-t-2 p-b-2">
    					<?php
    						if ($this->countModules('footer'))
    							:
    					?>
                        <w:module type="none" name="footer" />
                    </div>
					<?php
                        endif;
                        if ($this->params->get('rebrand', '0') !== '1') :
                    ?>
                    <div class="footer-credits clearfix">
                        <w:footer />
                    </div>
                    <?php
						endif;
                    ?>
                </footer>
            </div>
        </div>
        <?php
			if ($paramOption == 'com_content' && $paramLayout == 'blog') :
		?>
        <script type='text/javascript' src='<?php echo JURI::root(true) ?>/templates/js_elan/js/elanarticleinfo.js'></script>
        <?php
			endif;
		?>
    </body>
</html>
