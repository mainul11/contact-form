<?php

class WPUF_Contact_Form_Template_Rating extends WPUF_Post_Form_Template {

    public function __construct() {
        parent::__construct();

        $this->enabled            = class_exists( 'WeForms_Pro' );
        $this->title              = __( 'User Rating Form', 'weforms' );
        $this->description        = __( 'Form used by a website owner for allowing visitors to rate their service and experience.', 'weforms' );
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

			array(
                'input_type'       => 'ratings',
                'template'         => 'ratings_564225523',
                'required'         => 'yes',
                'label'            => __( 'Your Ratings', 'weforms' ),
                'name'             => 'your_ratings',
                'is_meta'          => 'yes',
                'help'             => '',
                'css'              => '',
                'selected'         => array(),
                'inline'           => 'no',
                'options'          => array(
                    '1'             => __( '1', 'weforms' ),
                    '2'       => __( '2', 'weforms' ),
                    '3'            => __( '3', 'weforms' ),
                    '4'     => __( '4', 'weforms' ),
                    '5'      => __( '5', 'weforms' ),
                ),
                'wpuf_cond'        => $this->conditionals
            ), 

            array(
                'input_type'       => 'textarea',
                'template'         => 'textarea_field',
                'required'         => 'no',
                'label'            => __( 'Comments', 'weforms' ),
                'name'             => 'comments',
                'is_meta'          => 'yes',
                'help'             => '',
                'css'              => '',
                'rows'             => 5,
                'cols'             => 25,
                'placeholder'      => '',
                'default'          => '',
                'rich'             => 'no',
                'word_restriction' => '',
                'wpuf_cond'        => $this->conditionals
            ),
		);

        $this->form_settings      = array ( 
        	'redirect_to' 				=> 'same', 
        	'message' 					=> 'Thank you for your Ratings. We appreciate your remarks.', 
        	'page_id' 					=> '', 
        	'url' 						=> '', 
        	'submit_text' 				=> 'Submit Your Ratings', 
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

        );
    }
}