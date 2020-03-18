<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://solusipress.com
 * @since      0.3.0
 *
 * @package    Cf7_Send_Wa
 * @subpackage Cf7_Send_Wa/admin/partials
 */
?>
<div class="wrap sp-admin-page solusipress-admin-container">
    
    <?php if( $settings_saved ) : ?>
    <div id="setting-error-settings_updated" class="notice notice-success settings-error is-dismissible"> 
    <p><strong>Settings saved.</strong></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>    
    <?php endif; ?>
    
    <h1 class="wp-heading-inline">CF7 Send to WhatsApp Settings</h1>
	<form method="post" class="sp-cf7sendwa-form">
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><label for="cf7sendwa_number">WhatsApp Number</label></th>
					<td><input type="text" id="cf7sendwa_number" 
                               placeholder="628123456789" 
                               name="whatsapp_number" size="20"
                               value="<?= $whatsapp_number ?>">
                        <p class="description">
                            Phone number must include the country code (eg. 62 for Indonesia)
                        </p>
                    </td>
				</tr>
				<tr>
					<th scope="row"><label for="cf7sendwa_disablemail">Disable mail sending</label></th>
					<td>
                        <?php
                        $checked1 = '';
                        if( $disable_mail == '1' ) {
                            $checked1 = ' checked="checked"';
                        }
                        ?>
                        <input type="checkbox" id="cf7sendwa_disablemail"<?= $checked1 ?>  
                               name="disable_send_mail" value="1">
                    </td>
				</tr>
			</tbody>
		</table>	
        <h3>Twilio Integration</h3>
        <p>Please create <a href="https://www.twilio.com/try-twilio" target="_blank">Twilio Account</a> to get Account SID &amp; Auth Token.</p>
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><label for="cf7sendwa_twilio_sid">Account SID</label></th>
                    <td><input type="text" name="twilio_sid" size="40" 
                               id="cf7sendwa_twilio_sid"
                               value="<?= $twilio_sid ?>"></td>
                </tr>
				<tr>
					<th scope="row"><label for="cf7sendwa_twilio_token">Auth Token</label></th>
                    <td><input type="text" name="twilio_token" size="40" 
                               id="cf7sendwa_twilio_token"
                               value="<?= $twilio_token ?>"></td>
                </tr>
				<tr>
					<th scope="row"><label for="cf7sendwa_use_twilio">Use Twilio</label></th>
					<td>
                        <?php
                        $checked2 = '';
                        if( $use_twilio == '1' ) {
                            $checked2 = ' checked="checked"';
                        }
                        ?>
                        <input type="checkbox" id="cf7sendwa_use_twilio"<?= $checked2 ?>  
                               name="use_twilio" value="1">
                    </td>
				</tr>
				<tr>
					<th scope="row"><label for="cf7sendwa_twilio_from">WhatsApp From</label></th>
                    <td><input type="text" name="twilio_from" size="20" 
                               id="cf7sendwa_twilio_from"
                               value="<?= $twilio_from ?>">
                        <p class="description">
                            Twilio valid number or your own WhatsApps' approved number.
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
		<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p>		
    </form>
</div>