<?php global $firmasite_settings; ?>
<header id="masthead" class="site-header" role="banner">
  <div id="masthead-inner" class="<?php echo $firmasite_settings["layout_container_class"]; ?>">

   <?php do_action( 'open_header' ); ?>
   
    <div id="logo" class="pull-left">         
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" id="logo-link" class="logo" data-section="body">
            <?php if (isset($firmasite_settings["logo"]) && !empty($firmasite_settings["logo"])) {?>
            <img src="<?php echo $firmasite_settings["logo"];?>" alt="<?php bloginfo( 'description' ); ?>" title="<?php bloginfo( 'name' ); ?>" id="logo-img" />
             <?php } else {?>
            <span class="label label-<?php echo $firmasite_settings["color-logo-text"];?> logo-text pull-left"><?php bloginfo( 'name' ); ?></span>
            <?php }?>
        </a>
    </div>
    
    <?php do_action( 'logo_side_before' ); ?>
    
    <div id="logo-side" class="pull-right">
       <?php do_action( 'logo_side_open' ); ?>

       <?php if (get_bloginfo( 'description' )) {?>
       	<div id="site-description" class="no-margin-bot text-right text-muted hidden-xs hidden-sm hidden-fixed-top"><?php bloginfo( 'description' ); ?></div>
       <?php } ?>

       <?php do_action( 'logo_side_close' ); ?>           
    </div>
    
    <?php do_action( 'logo_side_after' ); ?>
    
    <div id="navbar-splitter" class="clearfix hidden-fixed-top"></div>
    
    <?php if (has_nav_menu('main_menu')) : 
           switch ($firmasite_settings["menu-style"]) {
                case "simple":
           ?>
                  <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainmenu">
                            <span class="sr-only"><?php _e("Toggle navigation", 'firmasite' );?></span>
                            <span class="icon-reorder"></span>
                            <b class="caret"></b>
                        </button>                    
                  </div> 
                  <nav id="mainmenu" class="collapse navbar-collapse simple-menu-collapse" role="navigation">
                    <?php  wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'nav nav-pills')); ?>
                  </nav>
           <?php
                break;
               
                case "default":
                case "alternative":
                default:
           ?>
            <nav id="mainmenu" role="navigation" class="site-navigation main-navigation navbar <?php if ((isset($firmasite_settings["alternative"]) && !empty($firmasite_settings["alternative"])) || "alternative" == $firmasite_settings["menu-style"]){ echo " navbar-inverse";} else { echo " navbar-default"; } ?>">          
              <div class="navbar-header">
                  <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-main">
                   <!-- <span class="sr-only"><?php _e("Toggle navigation", 'firmasite' );?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> -->
                    <span style="color: white;">Menu</span>
                  </button>
              </div>                
              <div id="nav-main" class="collapse navbar-collapse" role="navigation">
                <?php  wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'nav navbar-nav')); ?>
                <div style="left: 200px; width: 20%; top: 5px;"class="input-group">
               <form style="z-index: 999;"role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <label class="sr-only" for="s"><span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'firmasite' ); ?></span></label>
                <div class="form-group">
                       <div class="input-group">
                           <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'firmasite' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" x-webkit-speech />
                           <div class="input-group-btn">
                               <button type="submit" class="search-submit btn btn-default"><?php echo esc_attr_x( 'Search', 'submit button', 'firmasite' ); ?></button>
                           </div>
                       </div>
                   </div>
               </form> </div>
              </div>
            </nav>    <!-- .site-navigation .main-navigation --> 
           <?php 
                break;
           }
    endif; ?>
   
    <?php do_action( 'close_header' ); ?>
    
  </div>
</header><!-- #masthead .site-header -->
