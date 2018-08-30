<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title>展覧会について｜日本の景色写真展</title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
  <header id="top">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>">
        <?php
				 $custom_logo_id = get_theme_mod( 'custom_logo' );
				 $image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
				 $format = '<img';
				 $format .= ' src="' . $image[0] . '"';
				 $format .= ' width="' . $image[1] . '"';
				 $format .= ' height="' . $image[2] . '"';
				 $format .= ' alt="' . get_bloginfo( 'name' ) . '">';
				 echo $format;

				 ?>
      </a>
    </h1>
  </header>
	<nav>
		<ul>
			<li class="nav_introduction"><a href="introduction.html">展覧会について</a></li>
			<li class="nav_schedule"><a href="schedule.html">スケジュール</a></li>
			<li class="nav_gallery"><a href="gallery.html">作品紹介</a></li>
			<li class="nav_tickets"><a href="tickets.html">前売り券申し込み</a></li>
		</ul>
	</nav>
