<?php

/**
 * Information about the author 0.2.2
 */

	function NicolasBONNIOT_1_0_links( $plugin ) {
	
		$name			= 'Nicolas BONNIOT';
		$gravatar		= 'bcf135c235a3106265a24cd5960ec39f';
		$url_author		= 'http://www.nicolasbonniot.com';
		$url_plugin		=  'http://www.nicolasbonniot.com/category/conception-informatique/projets-web/'. $plugin;
		$feedburner		= 'http://feedburner.google.com/fb/a/mailverify?uri=nicolasbonniot&loc=en_US'; // subscribe feed per mail
		$profile		= 'http://wordpress.org/extend/plugins/profile/nbonniot';
	
		/***/
	
		$vote			= 'http://wordpress.org/extend/plugins/' . $plugin;
		$homeFeed		= 'http://www.nicolasbonniot.com/feed/';
		$donate			= 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=NJHGNJ9NLWWAA';
 ?>
	
		<table class="widefat margeTable" id="nbbox" style="width:27%;" align="right">
            <thead>
                <tr>
                    <th><?php _e( 'Do you like this plugin?', $plugin ); ?></th>
                </tr>
            </thead>
            <tbody>
              <tr valign="top">
                <td> 
                	<div class="gravatar" >
						<a href="<?php echo $url_author ?>"><img src="http://www.gravatar.com/avatar/<?php echo $gravatar ?>?s=50" alt="<?php echo $name ?>" title="<?php echo $name ?>" /></a>
						<br />
						<?php echo $name ?>
					</div>
                    <ul >
                        <li>
                            <?php printf( __( "<a href=\"%s\">Rate it !</a>", $plugin ), $vote ) ?> <br />
                        </li>
                        <li>
                            <?php printf( __( "<a href=\"%s\">Visit its homepage</a>", $plugin ), $url_plugin ) ?> <br />
                        </li>
                        <!--<li>
                            <?php printf( __( "<a href=\"%s\">Subscribe</a> the feed", $plugin ), $commentsFeed ) ?> <br />
                        </li>-->
                        <li>
                            <?php printf( __( "<a href=\"%s\">Donate</a>!", $plugin ), $donate ) ?> <br />
                        </li>
                    </ul>
 				</td>
              </tr>
              <tr valign="top">
              	<td>
                	<strong><?php _e( 'About the author', $plugin ) ?></strong> <br />
                    <ul >
                        <li>
                            <?php printf( __( '<a href="%s">My website</a> (and the <a href="%s">blog</a> coming with it)', $plugin ), $url_author, $url_author . "/blog" ) ?> <br />
                        </li>
                        <li>
                            <?php printf( __( "Subscribe via <a href=\"%s\">RSS</a> or <a href=\"%s\">email</a>", $plugin ), $homeFeed, $feedburner ) ?> <br />
                        </li>
                        <li>
                        	<?php printf( __( "<a href=\"%s\">My others plugins</a>", $plugin ), $profile ) ?> <br />
                        </li>
                    </ul>
                </td>
              </tr>
            </tbody>
        </table>
<?php
}
?>

