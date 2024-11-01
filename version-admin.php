<link href="<?php echo plugins_url('version-css.css', __FILE__);?>" rel='stylesheet' type='text/css' />	
<link href="version-css.css" rel="stylesheet" type="text/css" />
<div class='wrap'>
    <h2><?php _e('Website version parameters','wp-version'); ?></h2>
    
    <!-- action attribute and wp_nonce_field() using for options save -->
   	<form method='post' action='options.php'>
    <?php wp_nonce_field( 'update-options' ); ?>
    
    <?php
		// Get option set for the plugin
		$version = get_option( 'SWV_options' );	
		if($version == null)
			{
			_e('<p>No website version parameters found. Please reinstall the plugin and </p><a href="mailto:nicolas@nicolasbonniot.com" title="let me know your problems !">let me know</a><p>problems you could encounter.</p>', 'wp-version' );					
			}
    ?>
    
    <!-- Current version display -->   
    <div class="CurrentVersion"> 
    	<?php
    	_e('Current version : ', 'wp-version'); 	
		 echo get_option( 'version_major' ); ?> . <?php echo get_option( 'version_minor' ); ?>
        <span id='label_version_revision'> . <?php echo get_option( 'version_revision' ); ?></span> 
        <span id='label_version_build'> . <?php echo get_option( 'version_build' ); ?></span>
     </div>
     
     <?php require_once( 'NicolasBONNIOT.php' ); ?>
     <table class="widefat margeTable" style="width:70%;" align="left">
            <thead>
                <tr>
                    <th><?php _e('General options', 'wp-version'); ?></th>
                </tr>
            </thead>
            <tbody>             
             <tr valign="top">
                <td>
                    <p><?php _e('What text to be displayed before the version number?', 'wp-version'); ?></p>
                    <input type="text" name='TextBefore' <?php echo 'value="' . get_option( 'TextBefore' ) . '"'; ?> />
                </td>
             </tr>                    
              <tr valign="top">
                <td>
                    <p><?php _e('HTML Code <b>BEFORE</b> the version display :', 'wp-version'); ?></p>
                    <input type="text" class="CodeHTML" name='HTMLCodeBefore' <?php echo 'value="' . get_option( 'HTMLCodeBefore' ) . '"'; ?> />
                    <em><?php _e('Note : please use <b>single quotes only</b>. Ex : style=\'float:right;\'', 'wp-version'); ?></em> 
                </td>
             </tr>
			 <tr valign="top">
                <td>
                    <p><?php _e('HTML Code <b>AFTER</b> the version display :', 'wp-version'); ?></p>
                    <input type="text" class="CodeHTML" name='HTMLCodeAfter' <?php echo 'value="' . get_option( 'HTMLCodeAfter' ) . '"'; ?>/>
                    <em><?php _e('Note : please be careful to safely close here all the HTML tags you may have open in the previous text box, to ensure the proper display of the version.', 'wp-version'); ?></em> 
                </td>
             </tr>             
           </tbody>
        </table>               
    	<?php NicolasBONNIOT_1_0_links( 'wp-version' ) ?> 
        <div class="clearboth" />
       <!-- Save -->                          
		<p class='submit'>
			<input type='submit' class='button‐primary' value='<?php _e( 'Save Changes', 'wp-version' ) ?>' />
		</p>
        
	    <!-- Version update  -->
        <table class="widefat">
            <thead>
                <tr>        
        			<th colspan="4"><?php _e('Version update', 'wp-version'); ?></th>
                </tr>
            </thead>
            <tbody>
            	<tr valign="top">
                	<td colspan="4" style="border-bottom:none 0px;"><?php _e('Here you can modify the website current version. You have 2 choices, using <b>the manual</b> or <b>the incremental method</b>.', 'wp-version'); ?></td>
                </tr>
                <tr valign="top">
                	<td style="height:30px" colspan="4"><?php _e('<em>Note : The last one is quicker and handy when you just want increment one number for day-to-day releases.</em>', 'wp-version'); ?></td>
                </tr>
 				<tr valign="top">
                    <td colspan="4"> 
                        <p class='contenu'><?php _e('Show version with ', 'wp-version');?>                
                            <select name='nombre'>
                                <option <?php if(get_option( 'nombre' ) == '2' ) { echo 'selected'; } ?> value='2'>2</option>
                                <option <?php if(get_option( 'nombre' ) == '3' ) { echo 'selected'; } ?> value='3'>3</option>
                                <option <?php if(get_option( 'nombre' ) == '4' ) { echo 'selected'; } ?> value='4'>4</option>
                            </select><?php _e('numbers.', 'wp-version');?>
                        </p>
                    </td>
                 </tr>                    
                  <tr valign="top">
                    <td colspan="4">                    
                        <p class='contenu'>
                            <input 
                                type='checkbox' 
                                name='RAZ_Num' 
                                value='true' 
                                <?php if(get_option( 'RAZ_Num' ) == 'true' ) { echo( 'checked="checked"' ); } ?>
                            /> 
                            <?php _e('Inferior numbers reset when a number is changing.', 'wp-version'); ?>
                        </p>
                    </td>
                 </tr>                
                <tr>
                	<td style="font-weight:bold;"><?php _e('Manual method', 'wp-version'); ?></td>
                </tr>
                <tr valign="middle" style="line-height:50px;">
                    <td colspan="4" height="50px" valign="middle" style="line-height:50px;"> 
                        <input type='text' id='text_1'  name='version_major' value='<?php echo(get_option( 'version_major' )); ?>' /> .
                        <input type='text' id='text_2' name='version_minor' value='<?php echo(get_option( 'version_minor' )); ?>' /> 
                        <span id='input_text_revision'>.
                        <input type='text' id='text_3' name='version_revision' value='<?php echo(get_option( 'version_revision' )); ?>' /> 
                        </span> 
                        <span id='input_text_build'>.
                        <input type='text' id='text_4' name='version_build' value='<?php echo(get_option( 'version_build' )); ?>' />
                    </td>
                 </tr>                       
            	<tr>
                	<td style="font-weight:bold;"><?php _e('Incremental method', 'wp-version');?></td>
                </tr>
                <tr valign="top">
                    <td style="border-bottom:none 0px;" id="increment_label_version_major"><h1 style="text-align:center;"><?php echo(get_option( 'version_major' )); ?></td>
                    <td style="border-bottom:none 0px;" id="increment_label_version_minor"><h1 style="text-align:center;"><?php echo(get_option( 'version_minor' )); ?></td>
                    <td style="border-bottom:none 0px;" id="increment_label_version_revision"><h1 style="text-align:center;"><?php echo(get_option( 'version_revision' )); ?></td>
                    <td style="border-bottom:none 0px;" id="increment_label_version_build"><h1 style="text-align:center;"><?php echo(get_option( 'version_build' )); ?></td>
           		</tr>
                <tr valign="top">				
                    <td style="text-align:center;">
                        <input type="button" class="button-primary" name="inc_major" value="<?php _e('Major version increment', 'wp-version') ?>" />
                    </td>
                    <td style="text-align:center;">
                        <input type="button" class="button-primary" name="inc_minor" value="<?php _e('Minor version increment', 'wp-version') ?>" />
                    </td>		                
                    <td id="increment_button_version_revision" style="text-align:center;">
                        <input type="button" class="button-primary" name="inc_revision" value="<?php _e('Revision version increment', 'wp-version') ?>" />
                    </td>		                
                    <td id="increment_button_version_build" style="text-align:center;">
                        <input type="button" class="button-primary" name="inc_build" value="<?php _e('Build version increment', 'wp-version') ?>" />
                    </td>
                </tr>                                    
            </tbody>
        </table>
              
        <!-- Save -->   
        <p class='submit'>
			<input type='submit' class='button‐primary' value='<?php _e( 'Save Changes', 'wp-version' ) ?>' />
		</p>
        
        <!-- Hidden fields required for options savings -->   
        <input type='hidden' name='action' value='update' />
        <input type='hidden' name='page_options' value='nombre,RAZ_Num,version_major,version_minor,version_revision,version_build,HTMLCodeBefore,HTMLCodeAfter,TextBefore' />
	</form>
    <div class="Note">
    	<img /> <p style="line-height:28px; margin: 0 0 0 35px;"><?php _e('This plug-in is optimised for Mozilla Firefox.', 'wp-version');?><p>
        <p><?php _e("I'm learning php and Wordpress developpement, which could mean some troubles, errors... Please <a href=\"mailto:nicolas@nicolasbonniot.com\">let me know</a>, so it could become better ! In the same time, if you have any idea, suggestion, or remark to do on this plug-in, I'm more than interested <a href=\"mailto:nicolas@nicolasbonniot.com\">to hear them</a>.", 'wp-version');?></p>
        <p><b>Nicolas BONNIOT</b></p>

    </div>
    
	<!-- jQuery scripts -->   
	<script  type='text/javascript'>
		// FadeIn/out the number(s) required.
		jQuery.fn.FadeInOutVersionNum = function(NumberVisible) {
			switch(NumberVisible)
			{
				case '2':
					// label visible update
					jQuery( '#label_version_revision' ).fadeOut();
					jQuery( '#increment_label_version_revision' ).fadeOut();
					jQuery( '#increment_button_version_revision' ).fadeOut();
					
					jQuery( '#label_version_build' ).fadeOut();
					jQuery( '#increment_label_version_build' ).fadeOut();
					jQuery( '#increment_button_version_build' ).fadeOut();					
					
					// input visible update 
					jQuery( '#input_text_revision' ).fadeOut();
					jQuery( 'input[name=version_revision]' ).val( '0' );						
					jQuery( '#input_text_build' ).fadeOut();
					jQuery( 'input[name=version_build]' ).val( '0' );
					
					break;
				case '3':
					// label visible update
					jQuery( '#label_version_revision' ).fadeIn();
					jQuery( '#increment_label_version_revision' ).fadeIn();
					jQuery( '#increment_button_version_revision' ).fadeIn();

					jQuery( '#label_version_build' ).fadeOut();
					jQuery( '#increment_label_version_build' ).fadeOut();
					jQuery( '#increment_button_version_build' ).fadeOut();	
					// input visible update
					jQuery( '#input_text_revision:hidden' ).val( '0' ).fadeIn();
					jQuery( '#input_text_build' ).fadeOut();
					jQuery( 'input[name=version_build]' ).val( '0' );
					break;
				case '4':
					// label visible update
					jQuery( '#label_version_revision' ).fadeIn();
					jQuery( '#increment_label_version_revision' ).fadeIn();
					jQuery( '#increment_button_version_revision' ).fadeIn();

					jQuery( '#label_version_build' ).fadeIn();
					jQuery( '#increment_label_version_build' ).fadeIn();
					jQuery( '#increment_button_version_build' ).fadeIn();
					// input visible update					
					jQuery( '#input_text_revision' ).fadeIn();
					jQuery( '#input_text_build' ).fadeIn();
					break;
				default:
					jQuery(this).FadeInOutVersionNum(jQuery( 'select[name=nombre]' ).val());
				break;
			}
		};	
		
		// Incremental method function
		jQuery.fn.IncrementVersionNum= function(BoolReset,NumberIncremented) {
			NewNumber = parseInt(NewNumber);				
			switch(NumberIncremented)
				{						
					case 'inc_major':	
						var NewNumber = parseInt(jQuery('input[name=version_major]').val());
						NewNumber = NewNumber +1;				
						jQuery( 'input[name=version_major]' ).val(NewNumber);
						jQuery( '#increment_label_version_major' ).html('<h1 style="text-align: center;">' + NewNumber + '<h1>');
						if(BoolReset == true)
							{
								jQuery( 'input[name=version_minor]' ).val( '0' );
								jQuery( '#increment_label_version_minor' ).html('<h1 style="text-align: center;">0<h1>');
								jQuery( 'input[name=version_revision]' ).val( '0' );
								jQuery( '#increment_label_version_revision' ).html('<h1 style="text-align: center;">0<h1>');
								jQuery( 'input[name=version_build]' ).val( '0' );
								jQuery( '#increment_label_version_build' ).html('<h1 style="text-align: center;">0<h1>');
							}
						break;
						
					case 'inc_minor':
						var NewNumber = parseInt(jQuery('input[name=version_minor]').val());
						NewNumber = NewNumber +1;						
						jQuery( 'input[name=version_minor]' ).val(NewNumber);
						jQuery( '#increment_label_version_minor' ).html('<h1 style="text-align: center;">' + NewNumber + '<h1>');
						if(BoolReset == true)
							{
								jQuery( 'input[name=version_revision]' ).val( '0' );
								jQuery( '#increment_label_version_revision' ).html('<h1 style="text-align: center;">0<h1>');
								jQuery( 'input[name=version_build]' ).val( '0' );
								jQuery( '#increment_label_version_build' ).html('<h1 style="text-align: center;">0<h1>');	
							}				
						break;
						
					case 'inc_revision':
						var NewNumber = parseInt(jQuery('input[name=version_revision]').val());
						NewNumber = NewNumber +1;						
						jQuery( 'input[name=version_revision]' ).val(NewNumber);
						jQuery( '#increment_label_version_revision' ).html('<h1 style="text-align: center;">' + NewNumber + '<h1>');
						if(BoolReset == true)
							{
								jQuery( 'input[name=version_build]' ).val( '0' );
								jQuery( '#increment_label_version_build' ).html('<h1 style="text-align: center;">0<h1>');										
							}
						break;
						
					case 'inc_build':
						var NewNumber = parseInt(jQuery('input[name=version_build]').val());
						NewNumber = NewNumber +1;						
						jQuery( 'input[name=version_build]' ).val(NewNumber);
						jQuery( '#increment_label_version_build' ).html('<h1 style="text-align: center;">' + NewNumber + '<h1>');
						break;
					default:
						
					break;
				}	
		};
		// To reset the number under one level.
		jQuery.fn.ResetDescendantNumbers= function(BoolReset,NumberIncremented) {
			if(BoolReset == true)
				{
					switch(NumberIncremented)
					{
						case 'text_1':
							jQuery('#text_2').val( '0' );
							jQuery('#text_3').val( '0' );
							jQuery('#text_4').val( '0' );								
						break;
						case 'text_2':
							jQuery('#text_3').val( '0' );
							jQuery('#text_4').val( '0' );		
						break;
						case 'text_3':
							jQuery('#text_4').val( '0' );		
						break;
					}
				}
		};

		jQuery().ready(function() {		
			jQuery(this).FadeInOutVersionNum();
			jQuery( 'select[name=nombre]' ).change(function(){
				jQuery(this).FadeInOutVersionNum(jQuery(this).val());
			});
			// If version modification : RESET of the descendant numbers.
			jQuery('#Manual').find('input').change(function(){
				jQuery(this).ResetDescendantNumbers(jQuery( 'input[name=RAZ_Num]' ).attr( 'checked' ),jQuery(this).attr( 'id' ));			
			});
			// If incrementation version modification
			jQuery( "input[name^=inc_]" ).click(function(){
				jQuery(this).IncrementVersionNum(jQuery( 'input[name=RAZ_Num]' ).attr( 'checked' ),jQuery(this).attr('name'));

			});
		});
	</script>
 </div>