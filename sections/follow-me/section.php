<?php
/*
	Section: Follow Me
	Author: Simple Mama
	Author URI: http://www.simplemama.com
	Description: Get more social media followers by adding this section to your website. For PageLines DMS only.
	Class Name: FollowMe
	Demo: http://www.simplemama.com
	Version: 1.02
	Filter: social
	v3: true
*/

class FollowMe extends PageLinesSection {

	const version = '1.02';

/* STUFF THAT LOADS ONLY IN THE SECTION HEADER */

	function section_head() {		
	}

/* THE FRONT END */

	function section_template() {
		$facebook     = $this->opt('facebook', $this->oset);
		$twitter      = $this->opt('twitter', $this->oset);
		$googleplus   = $this->opt('googleplus', $this->oset);
		$instagram    = $this->opt('instagram', $this->oset);
		$pinterest    = $this->opt('pinterest', $this->oset);
		$etsy         = $this->opt('etsy', $this->oset);
		$bloglovin    = $this->opt('bloglovin', $this->oset);
		$stumble      = $this->opt('stumble', $this->oset);
		$flickr       = $this->opt('flickr', $this->oset);
		$youtube      = $this->opt('youtube', $this->oset);
		$tumblr       = $this->opt('tumblr', $this->oset);
		$linkedin     = $this->opt('linkedin', $this->oset);
		$rss          = $this->opt('rss', $this->oset);
		$email        = $this->opt('email', $this->oset);
		$color        = $this->opt('followme_colors', $this->oset);
		$size		  = $this->opt('followme_icon_size', array( 'default' => 36 ));
		$string       = '<a class="followme_link" href="%s" title="%s" rel="nofollow" target="_blank"><img class="followme_image" src="'.$this->base_url.'/images/%s/%s.png" alt="%s" width="%spx" height="%spx" /></a>';
		if ($this->opt('facebook')) {
			printf($string, $facebook, 'Facebook', $color, 'facebook', 'Facebook', $size, $size);
		}
		if ($this->opt('twitter')) {
			printf($string, $twitter, 'Twitter', $color, 'twitter', 'Twitter', $size, $size);
		}
		if ($this->opt('googleplus')) {
			printf($string, $googleplus, 'Google+', $color, 'googleplus', 'Google', $size, $size);
		}
		if ($this->opt('instagram')) {
			printf($string, $instagram, 'Instagram', $color, 'instagram', 'Instagram', $size, $size);
		}
		if ($this->opt('pinterest')) {
			printf($string, $pinterest, 'Pinterest', $color, 'pinterest', 'Pinterest', $size, $size);
		}
		if ($this->opt('etsy')) {
			printf($string, $etsy, 'Etsy', $color, 'etsy', 'Etsy', $size, $size);
		}
		if ($this->opt('bloglovin')) {
			printf($string, $bloglovin, 'Bloglovin', $color, 'bloglovin', 'Bloglovin', $size, $size);
		}
		if ($this->opt('stumble')) {
			printf($string, $stumble, 'StumbleUpon', $color, 'stumble', 'StumbleUpon', $size, $size);
		}
		if ($this->opt('flickr')) {
			printf($string, $flickr, 'Flickr', $color, 'flickr', 'Flickr', $size, $size);
		}
		if ($this->opt('youtube')) {
			printf($string, $youtube, 'YouTube', $color, 'youtube', 'YouTube', $size, $size);
		}
		if ($this->opt('tumblr')) {
			printf($string, $tumblr, 'Tumblr', $color, 'tumblr', 'Tumblr', $size, $size);
		}
		if ($this->opt('linkedin')) {
			printf($string, $linkedin, 'LinkedIn', $color, 'linkedin', 'LinkedIn', $size, $size);
		}
		if ($this->opt('rss')) {
			printf($string, $rss, 'RSS Feed', $color, 'rss', 'RSS Feed', $size, $size);
		}
		if ($this->opt('email')) {
			printf($string, $email, 'Email Newsletter', $color, 'email', 'Email newsletter', $size, $size);
		} else {
			echo setup_section_notify($this, 'Please set up Follow Me');
		}
	}

/** WELCOME MESSAGE **/

	function welcome(){

		ob_start();

		?><div style="font-size:14px;"><?php _e('Thanks for purchasing Follow Me! Your contribution will go toward amazing things like putting my children through college. <i class="icon-smile"></i> If I can be of assistance, you may contact me at <a href="http://www.simplemama.com" target="_blank" title="Simple Mama">simplemama.com</a>. Enjoy your day!','follow-me');?></div><?php

		return ob_get_clean();
	}

/* THE ADMIN OPTIONS */

	function section_opts(){

/* WELCOME BOX */

		$options[]    = array(
			'key'        => 'followme_welcome',
			'type'       => 'template',
			'title'      => __('Welcome to Follow Me!','follow-me'),
			'template'   => $this->welcome()
		);
		
/* FOLLOW URLS */

		$options[]    = array(
			'key'        => 'followme_urls',
			'type'       => 'multi',
			'title'      => 'Your Social Media URLs (add http://)',
			'help'       => 'Where would you like your readers to connect with you? Enter your social media URLs. You may enter as few or as many as you would like. Be sure to include the http:// or the link will not work.',
			'opts'       => array(
				array(
					'key'      => 'facebook',
					'label'    => 'Facebook',
					'type'     => 'text',
				),
				array(
					'key'      => 'twitter',
					'label'    => 'Twitter',
					'type'     => 'text',
				),
				array(
					'key'      => 'googleplus',
					'label'    => 'Google+',
					'type'     => 'text',
				),
				array(
					'key'      => 'instagram',
					'label'    => 'Instagram',
					'type'     => 'text',
				),
				array(
					'key'      => 'pinterest',
					'label'    => 'Pinterest',
					'type'     => 'text',
				),
				array(
					'key'      => 'etsy',
					'label'    => 'Etsy',
					'type'     => 'text',
				),
				array(
					'key'      => 'bloglovin',
					'label'    => 'Bloglovin',
					'type'     => 'text',
				),
				array(
					'key'      => 'stumble',
					'label'    => 'StumbleUpon',
					'type'     => 'text',
				),
				array(
					'key'      => 'flickr',
					'label'    => 'Flickr',
					'type'     => 'text',
				),
				array(
					'key'      => 'youtube',
					'label'    => 'YouTube',
					'type'     => 'text',
				),
				array(
					'key'      => 'tumblr',
					'label'    => 'Tumblr',
					'type'     => 'text',
				),
				array(
					'key'      => 'linkedin',
					'label'    => 'LinkedIn',
					'type'     => 'text',
				),
				array(
					'key'      => 'rss',
					'label'    => 'RSS Feed',
					'type'     => 'text',
				),
				array(
					'key'      => 'email',
					'label'    => 'Email Newsletter',
					'type'     => 'text',
				)
			),
		);
		
/* COLOR OPTIONS */

		$options[]    = array(
			'key'        => 'followme_colors',
			'type'       => 'select',
			'title'      => 'Social Media Icon Color',
			'label'       => 'What color would you like your icons to be?',
			'default'    => 'grey',
			'opts'       => array(
				'blue'      => array('name'=> 'blue'),
				'brown'     => array('name'=> 'brown'),
				'gold'      => array('name'=> 'gold'),
				'green'     => array('name'=> 'green'),
				'grey'      => array('name'=> 'grey'),
				'lime'      => array('name'=> 'lime'),
				'orange'    => array('name'=> 'orange'),
				'pale'      => array('name'=> 'pale'),
				'pink'      => array('name'=> 'pink'),
				'purple'    => array('name'=> 'purple'),
			),
		);
		
/* SIZE OPTIONS */

		$options[]    = array(
			'key'        => 'followme_icon_size',
			'type'       => 'select',
			'title'      => 'Social Media Icon Size',
			'label'       => 'What size would you like your icons to be?',
			'default'    => '36',
			'opts'       => array(
				'24'        => array('name'=> '24x24'),
				'36'        => array('name'=> '36x36'),
				'48'        => array('name'=> '48x48'),
				'64'        => array('name'=> '64x64'),
			),
		);
		
		return $options;
	}

}//end class and file