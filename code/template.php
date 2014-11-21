<?php
/**
 * @package     Elan
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2014 Joomlashack. Meritage Assets.
 *              All rights reserved.
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
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100,400' rel='stylesheet' type='text/css'>
    </head>
    <body class="<?php echo $responsive ?>">
        <?php if ($this->countModules('toolbar')) : ?>
            <!-- toolbar -->
            <w:nav containerClass="<?php echo $containerClass ?> relative" rowClass="<?php echo $gridMode; ?>" wrapClass="navbar-fixed-top navbar-inverse" type="toolbar" name="toolbar" />
            <!-- toolbar end -->
        <?php endif; ?>
        <?php if ($this->params->get('stickyFooter',1)) : ?>
        <div class="<?php echo $containerClass . ' wrapper-absolute' ?>"></div>
        <?php endif; ?>
        <div class="main-wrapper <?php echo $containerClass ?>">
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
            <?php if ($this->countModules('menu')) : ?>
            <!-- menu -->
            <div id="top-header">
                <w:nav rowClass="row-fluid" type="menu" name="menu" />
            </div>
            <!-- menu end -->
            <?php endif; ?>
            <?php if ($this->countModules('featured')) : ?>
            <!-- Featured -->
            <div id="featured">
                <w:module type="none" name="featured" chrome="xhtml" />
            </div>
            <!-- Featured end -->
            <?php endif; ?>
            <?php if ($this->countModules('breadcrumbs')) : ?>
            <!-- breadcrumbs -->
            <div id="breadcrumbs">
                <div class="row-fluid">
                    <w:module type="single" name="breadcrumbs" chrome="none" />
                </div>
            </div>
            <!-- breadcrumbs end -->
            <?php endif; ?>
            <?php if ($this->countModules('grid-top')) : ?>
            <!-- grid-top -->
            <div id="grid-top">
                <w:module type="row-fluid" name="grid-top" chrome="wrightflexgrid" extradivs="module" />
            </div>
            <!-- grid-top end -->
            <?php endif; ?>
            <?php if ($this->countModules('grid-top2')) : ?>
            <!-- grid-top2 -->
            <div id="grid-top2">
                <w:module type="row-fluid" name="grid-top2" chrome="wrightflexgrid" extradivs="module" />
            </div>
            <!-- grid-top2 end -->
            <?php endif; ?>
            <!-- main container -->
            <div id="main-content">
                    <!-- single image -->
                    <?php
                        if ($wrightSingleArticleImage != ''):
                    ?>
                    <div class="row-fluid">
                    <div class="full-image span12">
                        <img src="<?php echo $wrightSingleArticleImage ?>" alt="<?php echo $wrightSingleArticleAlt ?>" />
                    </div>
                    </div>
                    <?php
                        endif;
                    ?>
                    <!-- single image end -->
                <div class="row-fluid">
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
                        <!-- above-content end -->
                        <?php endif; ?>
                        <!-- component -->
                        <w:content />
                        <!-- component end -->
                        <?php if ($this->countModules('below-content')) : ?>
                        <!-- below-content -->
                        <div id="below-content">
                            <w:module type="none" name="below-content" chrome="xhtml" />
                        </div>
                        <!-- below-content end -->
                        <?php endif; ?>
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
            <?php if ($this->countModules('grid-bottom')) : ?>
            <!-- grid-bottom -->
            <div id="grid-bottom">
                <w:module type="row-fluid" name="grid-bottom" chrome="wrightflexgrid" extradivs="module" />
            </div>
            <!-- grid-bottom end -->
            <?php endif; ?>
            <?php if ($this->countModules('grid-bottom2')) : ?>
            <!-- grid-bottom2 -->
            <div id="grid-bottom2">
                <w:module type="row-fluid" name="grid-bottom2" chrome="wrightflexgrid" extradivs="module" />
            </div>
            <!-- grid-bottom2 end -->
            <?php endif; ?>
            <!-- footer -->
        </div>
        <div class="wrapper-footer">
            <footer id="footer" <?php if ($this->params->get('stickyFooter',1)) : ?> class="sticky"<?php endif; ?>>
                <?php if ($this->countModules('bottom-menu')) : ?>
                <!-- bottom-menu -->
                <w:nav containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode; ?>" name="bottom-menu" wrapClass="navbar-transparent" />
                <!-- bottom-menu end -->
                <?php endif; ?>
                <div class="footer-content">
                    <?php if ($this->countModules('footer')) : ?>
                    <div class="<?php echo $containerClass ?>">
                        <w:module type="<?php echo $gridMode; ?>" name="footer" chrome="xhtml" />
                    </div>
                    <?php endif; ?>
                    <div class="<?php echo $containerClass ?>">
                        <w:footer />
                    </div>
                </div>
            </footer>
        </div>
        <?php
        if ($paramOption == 'com_content' && $paramView == 'article') :
         ?>
        <script type='text/javascript' src='<?php echo JURI::root(true) ?>/templates/js_elan/js/elan.js'></script>
        <?php
            endif;
         ?>

    </body>
</html>
