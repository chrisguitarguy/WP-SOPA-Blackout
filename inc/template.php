<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title(''); ?></title>
    
    <link rel="stylesheet" type="text/css" href="<?php echo CD_SOPABLACKOUT_URL; ?>css/style.css" />
    
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'sopa-blackout' ); ?> id="sopa-page">
    <div class='container'>
        <h1><?php _e( 'Stop American Censorship' ); ?></h1>
        <p><?php _e( 'Congress is about to pass internet censorship, even though the vast majority of Americans are opposed. We need to kill the bill - PIPA in the Senate and SOPA in the House - to protect our rights to free speech, privacy, and prosperity.' ); ?></p>
        <p><a href="http://americancensorship.org/">Learn more</a>.</p>
        
        <iframe src="http://player.vimeo.com/video/31100268?byline=0&amp;portrait=0" width="700" height="394" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        <p>&nbsp;</p>
        <iframe src="http://americancensorship.org/callwidget" width="588" height="625" border="0"></iframe>
    </div>
<?php wp_footer(); ?>
</body>
</html>
