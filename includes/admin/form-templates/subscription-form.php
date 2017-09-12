<?php

class WPUF_Contact_Form_Template_Subscription extends WPUF_Post_Form_Template {

    public function __construct() {
        parent::__construct();

        $this->enabled            = true;
        $this->title              = __( 'Subscription Form', 'weforms' );
        $this->description        = __( 'Form used by a website owner for allowing visitors to subscribe to newsletter.', 'weforms' );

        $this->form_fields        = array ( 
			array(
                'input_type'       => 'name',
                'template'         => 'name_field',
                'required'         => 'yes',
                'label'            => __( 'Your Name', 'weforms' ),
                'name'             => 'name',
                'is_meta'          => 'yes',
                'format'           => 'first-last',
                'first_name'       => array(
                    'placeholder'      => '',
                    'default'          => '',
                    'sub'              => __( 'First', 'weforms' ),
                ),
                'middle_name'      => array(
                    'placeholder'      => '',
                    'default'          => '',
                    'sub'              => __( 'Middle', 'weforms' ),
                ),
                'last_name'        => array(
                    'placeholder'      => '',
                    'default'          => '',
                    'sub'              => __( 'Last', 'weforms' ),
                ),
                'hide_subs'        => '',
                'help'             => '',
                'css'              => '',
                'wpuf_cond'        => $this->conditionals
            ),

            array ( 
				'input_type' 			=> 'email', 
				'template' 				=> 'email_address', 
				'required' 				=> 'yes', 
				'label' 				=> 'Your Email', 
				'name' 					=> 'your_email', 
				'is_meta' 				=> 'yes', 
				'help' 					=> '', 
				'css' 					=> '', 
				'placeholder' 			=> '', 
				'default' 				=> '', 
				'size' 					=> 40, 
				'wpuf_cond' 			=> $this->conditionals
			), 

			
		);

        $this->form_settings      = array ( 
        	'redirect_to' 				=> 'same', 
        	'message' 					=> 'Thank you for subscribing. We have sent you a confirmation email.', 
        	'page_id' 					=> '', 
        	'url' 						=> '', 
        	'submit_text' 				=> 'Subscribe Now', 
        	'schedule_form' 			=> 'false', 
        	'schedule_start' 			=> '', 
        	'schedule_end' 				=> '', 
        	'sc_pending_message' 		=> 'Form submission hasn\'t been started yet', 
        	'sc_expired_message' 		=> 'Form submission is now closed.', 
        	'require_login' 			=> 'false', 
        	'req_login_message' 		=> 'You need to login to send a message.', 
        	'limit_entries' 			=> 'false', 
        	'limit_number' 				=> '100', 
        	'limit_message' 			=> 'Sorry, we have reached the maximum number of submissions.', 
        	'label_position' 			=> 'left', 
        );

        $this->form_notifications = array ( 
        	array ( 
        		'active' 				=> 'true', 
        		'name' 					=> 'Admin Notification', 
        		'subject' 				=> '[{form_name}] New Form Submission #{entry_id}', 
        		'to' 					=> '{admin_email}', 
        		'replyTo' 				=> '{field:email}', 
        		'message' 				=> '{all_fields}', 
        		'fromName' 				=> '{site_name}', 
        		'fromAddress' 			=> '{admin_email}', 
        		'cc' 					=> '', 
        		'bcc' 					=> '', 
        	), 

			array ( 
				'active' 				=> 'true', 
				'name' 					=> 'Subscription Notification', 
				'subject' 				=> 'Thanks for your subscription at [{site_name}] ', 
				'to' 					=> '{field:your_email}', 
				'replyTo' 				=> '{admin_email}', 
				'message' 				=> '{Hi,<br>Thank you very much for your subscription at [{site_name}]. We will sent you amazing and useful emails occasionally. We Promise not to send spam as we love our subscribers.<br><br>P.S. This is a auto generated email.}', 
				'fromName' 				=> '{site_name}', 
				'fromAddress' 			=> '{admin_email}', 
				'cc' 					=> '', 
				'bcc' 					=> '', 
			),
        );
    }
}