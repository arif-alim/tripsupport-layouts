<?php add_action('cmb2_admin_init', 'cmb2_sample_metaboxes');
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes()
{

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box(array(
        'id' => 'test_metabox',
        'title' => __('Metabox', 'cmb2'),
        'object_types' => array('vacation', 'flights', 'hotel'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
// 'cmb_styles' => false, // false to disable the CMB stylesheet
// 'closed'     => true, // Keep the metabox closed by default
    ));









    //////////////////////////////////////////////////////////////////////////////////////////////////////
    // BEGIN Custom Metaboxes for Post Types - flight_deals, vacation_deals, hotel_deals and destinations
    /////////////////////////////////////////////////////////////////////////////////////////////////////

    //BEGIN BANNER METABOX ///////////////////////////////////////////////////////////////////////////////////////////////
    $banners = new_cmb2_box(array(
        'id' => 'banners_metabox',
        'title' => __('Banner Section', 'cmb2'),
        'object_types' => array('flights', 'vacations', 'hotels', 'flight_deals', 'vacation_deals', 'hotel_deals', 'destinations'), // Post types
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));

    $banners->add_field(array(
        'id'   => 'banner_title',
        'name' => 'Banner Title',
        'type' => 'text',
    ));

    $banners->add_field( array(
        'name'    => 'Banner Image',
        'desc'    => 'Upload an image or enter an URL.',
        'id'      => 'banner_image',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => true, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add Image' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
            'type' => array(
                'image/jpeg',
                'image/png',
            ),
        ),
        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ));
    
    // END BANNER METABOX


    // BEGIN FLIGHTS CONTENT METABOX ////////////////////////////////////////////////////////////////////////////////////////////
    $flights = new_cmb2_box(array(
      'id' => 'flights_metabox',
        'title' => __('Flights Content Section', 'cmb2'),
        'object_types' => array('flight_deals'), // Post types
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));

    // heading and content 1
    $flights->add_field(array(
        'name' => 'Heading',
        'desc' => '(example: Toronto Pearson Airport (YYZ)',
        'id' => 'flights_heading1',
        'type' => 'text',

    ));

    $flights->add_field(array(
        'name' => 'Description',
        'desc' => 'Add description',
        'id' => 'flights_description1',
        'type' => 'textarea',

    ));

    // Flight video
    $flights->add_field(array(
        'name' => 'Video URL',
        'id'   => 'flights_video',
        'desc' => 'Copy and paste the destination link',
        'type' => 'text_url',
        'protocols' => array( 'http', 'https'), // Array of allowed protocols
    ));

    // heading and content 2
    $flights->add_field(array(
        'name' => 'Heading',
        'desc' => '(example: Find The Best Deals)',
        'id' => 'flights_heading2',
        'type' => 'text',

    ));

    $flights->add_field(array(
        'name' => 'Description',
        'desc' => 'Add description',
        'id' => 'flights_description2',
        'type' => 'textarea',

    ));

    // heading and content 3
    $flights->add_field(array(
        'name' => 'Heading',
        'desc' => '(example: Find The Best Deals)',
        'id' => 'flights_heading3',
        'type' => 'text',

    ));

    $flights->add_field(array(
        'name' => 'Description',
        'desc' => 'Add description',
        'id' => 'flights_description3',
        'type' => 'textarea',

    ));

    // END FLIGHTS CONTENT METABOX ////////////////////////////////////////////////////////////////////////////////////////////////////

    // BEGIN VACATIONS CONTENT METABOX ////////////////////////////////////////////////////////////////////////////////////////////
    $vacations = new_cmb2_box(array(
      'id' => 'vacations_metabox',
        'title' => __('Main Section', 'cmb2'),
        'object_types' => array('vacation_deals'), // Post types
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));

    // heading and content 1
    $vacations->add_field(array(
        'name' => 'Heading',
        'desc' => '(example: Luxury Vacations)',
        'id' => 'vacations_heading_main',
        'type' => 'text',

    ));

    $vacations->add_field(array(
        'name' => 'Description',
        'desc' => 'Add description',
        'id' => 'vacations_description_main',
        'type' => 'textarea',

    ));

    
    
    $vacation = $vacations->add_field( array(
        'id'          => 'vacation_sub_content',
        'type'        => 'group',
        // 'description' => __( 'Add FAQ\'s to the page', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Sub Section with image {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Section', 'cmb2' ),
            'remove_button'     => __( 'Remove Section', 'cmb2' ),
            'sortable'          => false,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ));

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $vacations->add_group_field( $vacation, array(
        'name' => 'Heading',
        'desc' => '(example: Luxury Vacations)',
        'id' => 'vacations_subheading',
        'type' => 'text',
    ));
    $vacations->add_group_field( $vacation, array(
        'name' => 'Description',
        'desc' => 'Add description',
        'id' => 'vacations_sub_description',
        'type' => 'textarea',
    ));
    $vacations->add_group_field( $vacation, array(
        'name'    => 'Image',
        'desc'    => 'Upload an image or enter an URL.',
        'id'      => 'vacations_image',
        'type'    => 'file',

        'text'    => array(
          'add_upload_file_text' => 'Add Image or AWS URL' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(

          // allow jpg, or png images
          'type' => array(
            'image/jpeg',
            'image/png',
          ),
        ),
        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ));
    // END VACATIONS CONTENT METABOX ////////////////////////////////////////////////////////////////////////////////////////////////////

    // BEGIN HOTELS CONTENT METABOX ////////////////////////////////////////////////////////////////////////////////////////////
    $hotels = new_cmb2_box(array(
      'id' => 'hotels_metabox',
      'title' => __('Hotels Content Section', 'cmb2'),
      'object_types' => array('hotel_deals'), // Post types
      'context' => 'normal',
      'priority' => 'high',
      'show_names' => true, // Show field names on the left
      'cmb_styles' => false, // false to disable the CMB stylesheet
      // 'closed'     => true, // Keep the metabox closed by default
    ));

    // heading and content 1
    $hotels->add_field(array(
        'name' => 'Heading',
        'desc' => '(example: Popular Hotels in USA)',
        'id' => 'hotels_main_heading',
        'type' => 'text',
    ));
    $hotels->add_field(array(
        'name' => 'Description',
        'desc' => 'Add description',
        'id' => 'hotels_main_description',
        'type' => 'textarea',
    ));
    

    $hotels->add_field(array(
      'name'    => 'Upload Image',
      'desc'    => 'Upload an image or enter an URL (col1: top-left img)',
      'id'      => 'image_one',
      'type'    => 'file',

      'options' => array(
        'url' => true, 
      ),
      'text'    => array(
        'add_upload_file_text' => 'Add Image'
      ),

      'query_args' => array(
        'type' => array(
        	'image/jpeg',
        	'image/png',
        ),
      ),
      'preview_size' => 'small')
    );

    $hotels->add_field(array(
      'name'    => 'Upload Image',
      'desc'    => 'Upload an image or enter an URL (col1: top-right img)',
      'id'      => 'image_two',
      'type'    => 'file',

      'options' => array(
        'url' => true, 
      ),
      'text'    => array(
        'add_upload_file_text' => 'Add Image'
      ),

      'query_args' => array(
        'type' => array(
        	'image/jpeg',
        	'image/png',
        ),
      ),

      'preview_size' => 'small')
    );

    $hotels->add_field(array(
      'name'    => 'Upload Image',
      'desc'    => 'Upload an image or enter an URL (col1: bottom-lg img)',
      'id'      => 'image_three',
      'type'    => 'file',

      'options' => array(
        'url' => true, 
      ),
      'text'    => array(
        'add_upload_file_text' => 'Add Image'
      ),

      'query_args' => array(
        'type' => array(
        	'image/jpeg',
        	'image/png',
        ),
      ),

      'preview_size' => 'small')
    );

    $hotels->add_field(array(
      'name'    => 'Upload Image',
      'desc'    => 'Upload an image or enter an URL (col2: top-left img)',
      'id'      => 'image_four',
      'type'    => 'file',

      'options' => array(
        'url' => true, 
      ),
      'text'    => array(
        'add_upload_file_text' => 'Add Image'
      ),

      'query_args' => array(
        'type' => array(
        	'image/jpeg',
        	'image/png',
        ),
      ),

      'preview_size' => 'small')
    );

    $hotels->add_field(array(
      'name'    => 'Upload Image',
      'desc'    => 'Upload an image or enter an URL (col2: top-right img)',
      'id'      => 'image_five',
      'type'    => 'file',

      'options' => array(
        'url' => true, 
      ),
      'text'    => array(
        'add_upload_file_text' => 'Add Image'
      ),

      'query_args' => array(
        'type' => array(
        	'image/jpeg',
        	'image/png',
        ),
      ),

      'preview_size' => 'small')
    );

    $hotels->add_field(array(
      'name'    => 'Upload Image',
      'desc'    => 'Upload an image or enter an URL (col2: bottom-lg img)',
      'id'      => 'image_six',
      'type'    => 'file',

      'options' => array(
        'url' => true, 
      ),
      'text'    => array(
        'add_upload_file_text' => 'Add Image'
      ),

      'query_args' => array(
        'type' => array(
        	'image/jpeg',
        	'image/png',
        ),
      ),

      'preview_size' => 'small')
    );

    // for additional heading and descriptions after the image

    $hotel = $hotels->add_field( array(
        'id'          => 'hotels_sub_content',
        'type'        => 'group',
        // 'description' => __( 'Add FAQ\'s to the page', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Sub Section', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Section', 'cmb2' ),
            'remove_button'     => __( 'Remove Section', 'cmb2' ),
            'sortable'          => false,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ));
    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $hotels->add_group_field( $hotel, array(
        'name' => 'Heading',
        'desc' => '(example: Hotels in Las Vegas)',
        'id' => 'hotels_sub_heading',
        'type' => 'text',
    ));
    $hotels->add_group_field( $hotel, array(
        'name' => 'Description',
        'desc' => 'Add description',
        'id' => 'hotels_sub_description',
        'type' => 'textarea',
    ));
    // END HOTELS CONTENT METABOX ////////////////////////////////////////////////////////////////////////////////////////////////////

    // BEGIN DESTINATIONS CONTENT METABOX ////////////////////////////////////////////////////////////////////////////////////////////
    $destinations = new_cmb2_box(array(
      'id' => 'destinations_metabox',
        'title' => __('Destinations Content Section', 'cmb2'),
        'object_types' => array('destinations'), // Post types
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));

    // Main content heading and description
    $destinations->add_field(array(
        'name' => 'Heading',
        'desc' => '(example: About Cuba)',
        'id' => 'destinations_main_heading',
        'type' => 'text',
    ));
    $destinations->add_field(array(
        'name' => 'Description',
        'desc' => 'Add description',
        'id' => 'destinations_main_description',
        'type' => 'textarea',
    ));

    $destinations->add_field(array(
      'name'    => 'Upload Image',
      'desc'    => 'Upload an image or enter an URL.',
      'id'      => 'dest_image',
      'type'    => 'file',

      'options' => array(
        'url' => true, 
      ),
      'text'    => array(
        'add_upload_file_text' => 'Add Image'
      ),

      'query_args' => array(
        'type' => array(
        	'image/jpeg',
        	'image/png',
        ),
      ),

      'preview_size' => 'small'
      ));

      $destinations->add_field( array(
        'name' => __( 'Snazzy Maps URL', 'cmb2' ),
        'id'   => 'iframe_url',
        'desc' => 'Please enter snazzy maps iframe url here',
        'type' => 'text_url',
        'protocols' => array( 'http', 'https') // Array of allowed protocols
      ));

      $destinations->add_field( array(
        'name'    => 'Weather Shortcode',
        'desc'    => 'Please go to Location Weather and copy and paste shortcode',
        'id'      => 'shortcode',
        'type'    => 'text',
      ));


      $todo = $destinations->add_field( array(
        'id'          => 'todo',
        'type'        => 'group',
        // 'description' => __( 'Add FAQ\'s to the page', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Section: What to do?', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add thing to do', 'cmb2' ),
            'remove_button'     => __( 'Remove thing to do', 'cmb2' ),
            'sortable'          => false,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
      ));

      $destinations->add_group_field($todo, array(
        'name'    => 'Heading',
        'desc'    => 'What to do sub heading',
        'id'      => 'todo_heading',
        'type'    => 'text',
      ));

      $destinations->add_group_field($todo, array(
        'name'    => 'Description',
        'desc'    => 'Description of the thing to do',
        'id'      => 'todo_description',
        'type'    => 'textarea',
      ));

      $destinations->add_field(array(
      'name'    => 'Upload image of a thing to do',
      'desc'    => 'Upload an image or enter an URL.',
      'id'      => 'todo_image',
      'type'    => 'file',

      'options' => array(
        'url' => true, 
      ),
      'text'    => array(
        'add_upload_file_text' => 'Add Image'
      ),

      'query_args' => array(
        'type' => array(
        	'image/jpeg',
        	'image/png',
        ),
      ),

      'preview_size' => 'small'
      ));
      
      $tosee = $destinations->add_field( array(
        'id'          => 'tosee',
        'type'        => 'group',
        // 'description' => __( 'Add FAQ\'s to the page', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Section: What to see?', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add what to see', 'cmb2' ),
            'remove_button'     => __( 'Remove what to see', 'cmb2' ),
            'sortable'          => false,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
      ));

      $destinations->add_group_field($tosee, array(
        'name'    => 'Heading',
        'desc'    => 'What to see sub heading',
        'id'      => 'tosee_heading',
        'type'    => 'text',
      ));

      $destinations->add_group_field($tosee, array(
        'name'    => 'Description',
        'desc'    => 'Description things or places to see',
        'id'      => 'tosee_description',
        'type'    => 'textarea',
      ));

      $destinations->add_field(array(
      'name'    => 'Upload image of things or places to see',
      'desc'    => 'Upload an image or enter an URL.',
      'id'      => 'tosee_image',
      'type'    => 'file',

      'options' => array(
        'url' => true, 
      ),
      'text'    => array(
        'add_upload_file_text' => 'Add Image'
      ),

      'query_args' => array(
        'type' => array(
        	'image/jpeg',
        	'image/png',
        ),
      ),

      'preview_size' => 'small'
      ));
      
      $tostay = $destinations->add_field( array(
        'id'          => 'tostay',
        'type'        => 'group',
        // 'description' => __( 'Add FAQ\'s to the page', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Section: Where to stay?', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add place to stay', 'cmb2' ),
            'remove_button'     => __( 'Remove place to stay', 'cmb2' ),
            'sortable'          => false,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
      ));

      $destinations->add_group_field($tostay, array(
        'name'    => 'Heading',
        'desc'    => 'Where to stay sub heading',
        'id'      => 'tostay_heading',
        'type'    => 'text',
      ));

      $destinations->add_group_field($tostay, array(
        'name'    => 'Description',
        'desc'    => 'Description of the place',
        'id'      => 'tostay_description',
        'type'    => 'textarea',
      ));

      $destinations->add_field(array(
      'name'    => 'Upload image of a place to stay',
      'desc'    => 'Upload an image or enter an URL.',
      'id'      => 'tostay_image',
      'type'    => 'file',

      'options' => array(
        'url' => true, 
      ),
      'text'    => array(
        'add_upload_file_text' => 'Add Image'
      ),

      'query_args' => array(
        'type' => array(
        	'image/jpeg',
        	'image/png',
        ),
      ),

      'preview_size' => 'small'
      ));
    // END DESTINATIONS CONTENT METABOX ////////////////////////////////////////////////////////////////////////////////////////////////////


    // BEGIN FAQS METABOX /////////////////////////////////////////////////////////////////////////////////////////////////////
    $faqs = new_cmb2_box(array(
        'id' => 'faqs',
        'title' => __('FAQs Section', 'cmb2'),
        'object_types' => array('flight_deals', 'vacation_deals', 'hotel_deals', 'destinations'), // Post types
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));
    
    $faq = $faqs->add_field( array(
        'id'          => 'faq',
        'type'        => 'group',
        // 'description' => __( 'Add FAQ\'s to the page', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'FAQ {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Faq', 'cmb2' ),
            'remove_button'     => __( 'Remove Faq', 'cmb2' ),
            'sortable'          => false,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ));

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $faqs->add_group_field( $faq, array(
        'name' => 'Question',
        'desc' => 'Copy and paste question here',
        'id'   => 'faq_question',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));

    $faqs->add_group_field( $faq, array(
        'name' => 'Answer',
        'description' => 'Copy and paste answer here',
        'id'   => 'faq_answer',
        'type' => 'textarea_small',
    ));
    // END FAQS METABOX ///////////////////////////////////////////////////////////////////////////////////////////////////////

    
    // BEGIN EXPLORE METABOX //////////////////////////////////////////////////////////////////////////////////////////////////
    $explores = new_cmb2_box(array(
        'id' => 'explores_metabox',
        'title' => __('Explore Section', 'cmb2'),
        'object_types' => array('flight_deals', 'vacation_deals', 'hotel_deals', 'destinations'), // Post types
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));
    
    $destination = $explores->add_field( array(
        'id'          => 'destination_metabox',
        'type'        => 'group',
        // 'description' => __( 'Add FAQ\'s to the page', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Destination {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Destination', 'cmb2' ),
            'remove_button'     => __( 'Remove Destination', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ));

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $explores->add_group_field( $destination, array(
        'name' => 'Destination Title',
        'desc' => 'Example: (Flights to Tehran)',
        'id'   => 'destination_title',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));

    $explores->add_group_field( $destination, array(
        'name' => __( 'Destination URL', 'cmb2' ),
        'id'   => 'destination_url',
        'desc' => 'Copy and paste the destination link',
        'type' => 'text_url',
        'protocols' => array( 'http', 'https'), // Array of allowed protocols
    ));
    // END EXPLORE METABOX //////////////////////////////////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    // END Custom Metaboxes for Post Types - flight_deals, vacation_deals, hotel_deals and destinations
    ////////////////////////////////////////////////////////////////////////////////////////////////////












    $cmb_post = new_cmb2_box(array(
        'id' => 'post_metabox',
        'title' => __('Metabox Cover Image ', 'cmb2'),
        'object_types' => 'post', // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
// 'cmb_styles' => false, // false to disable the CMB stylesheet
// 'closed'     => true, // Keep the metabox closed by default
    ));

    $cmb_hotel = new_cmb2_box(array(
        'id' => 'hotel_metabox',
        'title' => __('Metabox Hotel Api ', 'cmb2'),
        'object_types' => 'hotel_api', // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
// 'cmb_styles' => false, // false to disable the CMB stylesheet
// 'closed'     => true, // Keep the metabox closed by default
    ));

// Regular text field

    $cmb_post->add_field( array(
        'name' => 'Cover Image',
        'id' => 'cover_image',
        'type' => 'file',
        'query_args' => array('type' => 'image'),
    ));

// Add other metaboxes as needed
    $cmb->add_field(array(
        'name' => 'Map',
        'id' => 'Map_url',
        'type' => 'text_url',
        'desc'    => 'Create map links :  <a href="https://media.star-telegram.com/static/labs/GoogleMapLink2/index.html">https://media.star-telegram.com/static/labs/GoogleMapLink2/index.html</a>',
    ));
    $cmb->add_field(array(
        'name' => 'Currency',
        'id' => 'currency',
        'type' => 'text',
    ));
    $cmb->add_field(array(
        'name' => 'ShortCode Weather',
        'id' => 'weather',
        'type' => 'text',
        'desc'    => 'Sample ShortCode :[wpc-weather id="7578"/] <br> Create ShortCode Weather :  <a href="https://tripsupport.ca/wp-admin/edit.php?post_type=wpc-weather">https://tripsupport.ca/wp-admin/edit.php?post_type=wpc-weather</a>',

    ));
    $cmb->add_field(array(
        'name' => 'Image City',
        'desc' => '',
        'id' => 'slider_image',
        'type' => 'file_list',
        // 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array('type' => 'image'), // Only images attachment
        // Optional, override default text strings
        'text' => array(
            'add_upload_files_text' => 'Upload Images', // default: "Add or Upload Files"
            'remove_image_text' => 'Replacement', // default: "Remove Image"
            'file_text' => 'Replacement', // default: "File:"
            'file_download_text' => 'Replacement', // default: "Download"
            'remove_text' => 'Replacement', // default: "Remove"
        ),
    ));
    $cmb->add_field(array(
        'name' => 'Do you use Elementor',
        'id' => 'elementor_radio',
        'type' => 'radio_inline',
        'options' => array(
            'true' => __('Yes', 'cmb2'),
            'false' => __('No', 'cmb2'),

        ),
        'default' => 'false',
    ));

    $Travel_Guide = $cmb->add_field(array(
        'id' => 'Travel_Guide',
        'type' => 'group',
        'repeatable' => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'Travel Guide',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($Travel_Guide, array(
        'name' => 'Title',
        'id' => 'Travel_Guide_Title',
        'type' => 'text',

    ));
    $cmb->add_group_field($Travel_Guide, array(
        'name' => 'Description',
        'id' => 'Travel_Guide_Description',
        'type' => 'textarea',

    ));
    $cmb->add_group_field($Travel_Guide, array(
        'name' => 'Title What To Do',
        'id' => 'Travel_Guide_Title_what_to_do',
        'type' => 'text',

    ));
    $cmb->add_group_field($Travel_Guide, array(
        'name' => 'Title What To See',
        'id' => 'Travel_Guide_Title_what_to_see',
        'type' => 'text',

    ));
    $cmb->add_group_field($Travel_Guide, array(
        'name' => 'Title What To Stay',
        'id' => 'Travel_Guide_Title_what_to_stay',
        'type' => 'text',

    ));



    $city_info = $cmb->add_field(array(
        'id' => 'city_info_todo',
        'type' => 'group',
        'repeatable' => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'What To Do In',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($city_info, array(
        'name' => 'What To Do Title',
        'id' => 'WhatToDoTitle',
        'type' => 'text',

    ));
    $cmb->add_group_field($city_info, array(
        'name' => 'What To Do Description',
        'id' => 'WhatToDoDescription',
        'type' => 'textarea',

    ));

    $city_info_see = $cmb->add_field(array(
        'id' => 'city_info_to_see',
        'type' => 'group',
        'repeatable' => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'What to see In',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($city_info_see, array(
        'name' => 'What to see Title',
        'id' => 'WhatToSeeTitle',
        'type' => 'text',

    ));
    $cmb->add_group_field($city_info_see, array(
        'name' => 'What to see Description',
        'desc' => 'Class for Title => box-travel-guide-subtitle  <br> Class for Description => box-travel-guide-description ',
        'id' => 'WhatToSeeDescription',
        'type' => 'textarea',

    ));

    $city_info_stay = $cmb->add_field(array(
        'id' => 'city_info_to_stay',
        'type' => 'group',
        'repeatable' => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'Where To Stay In',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($city_info_stay, array(
        'name' => 'Where To Stay Title',
        'id' => 'WhereToStayTitle',
        'type' => 'text',

    ));
    $cmb->add_group_field($city_info_stay, array(
        'name' => 'Where To Stay Description',
        'id' => 'WhereToStayDescription',
        'type' => 'textarea',

    ));


    $Faq = $cmb->add_field(array(
        'id' => 'faq_asked',
        'type' => 'group',
        'repeatable' => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'Asked Questions Title',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($Faq, array(
        'name' => 'Title',
        'id' => 'faq_asked_Title',
        'type' => 'text',

    ));
    $cmb->add_group_field($Faq, array(
        'name' => 'Description',
        'id' => 'faq_asked_Description',
        'type' => 'textarea',

    ));
    $questions = $cmb->add_field(array(
        'id' => 'questions',
        'type' => 'group',
        'repeatable' => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'Frequently asked questions',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($questions, array(
        'name' => 'Question',
        'id' => 'question',
        'type' => 'text',

    ));
    $cmb->add_group_field($questions, array(
        'name' => 'Answer',
        'id' => 'answer',
        'type' => 'textarea',

    ));

    $More_destinations_to_explore = $cmb->add_field(array(
        'id' => 'More_destinations_to_explore',
        'type' => 'group',
        'repeatable' => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'More destinations to explore',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($More_destinations_to_explore, array(
        'name' => 'Title',
        'id' => 'More_destinations_Title',
        'type' => 'text',

    ));
    $cmb->add_group_field($More_destinations_to_explore, array(
        'name' => 'Description',
        'id' => 'More_destinations_Description',
        'type' => 'textarea',

    ));
    $cmb->add_group_field($More_destinations_to_explore, array(
        'name' => 'Tab Name Destinations',
        'id' => 'Tab_Destinations_Name',
        'type' => 'text',

    ));
    $cmb->add_group_field($More_destinations_to_explore, array(
        'name' => 'Tab Name Destinations In the World',
        'id' => 'Tab_Destinations_World_Name',
        'type' => 'text',

    ));
    $cmb->add_group_field($More_destinations_to_explore, array(
        'name' => ' Tab Citie Near Name',
        'id' => 'Tab_to_Cities_Near_Name',
        'type' => 'text',

    ));

    $Top_Flight_Destinations = $cmb->add_field(array(
        'id' => 'Top_Flight_Destinations',
        'type' => 'group',
        'repeatable' => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'Top Destinations',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($Top_Flight_Destinations, array(
        'name' => 'Destinations Title',
        'id' => 'Flight_Destinations_Title',
        'type' => 'text',

    ));
    $cmb->add_group_field($Top_Flight_Destinations, array(
        'name' => 'Destinations Url',
        'id' => 'Flight_Destinations_Url',
        'type' => 'text_url',

    ));

    $Top_Flight_Destinations_In_the_World = $cmb->add_field(array(
        'id' => 'Top_Flight_Destinations_In_the_World',
        'type' => 'group',
        'repeatable' => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => ' Top Destinations In the World',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($Top_Flight_Destinations_In_the_World, array(
        'name' => ' Destinations In the World Title',
        'id' => 'Flight_Destinations_World_Title',
        'type' => 'text',

    ));
    $cmb->add_group_field($Top_Flight_Destinations_In_the_World, array(
        'name' => 'Destinations In the World Url',
        'id' => 'Flight_Destinations_World_Url',
        'type' => 'text_url',

    ));

    $Flights_to_Cities_Near = $cmb->add_field(array(
        'id' => 'Flights_to_Cities_Near',
        'type' => 'group',
        'repeatable' => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'Cities Near',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($Flights_to_Cities_Near, array(
        'name' => ' Citie Near Title',
        'id' => 'Flights_to_Cities_Near_Title',
        'type' => 'text',

    ));
    $cmb->add_group_field($Flights_to_Cities_Near, array(
        'name' => 'Cities Near Url',
        'id' => 'Flights_to_Cities_Near_Url',
        'type' => 'text_url',

    ));

  /*  $hotel_api = $cmb_hotel->add_field(array(
        'id' => 'hotel_info',
        'type' => 'group',
        'repeatable' => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'Hotel Information',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));*/
    $cmb_hotel->add_field( array(
        'name' => 'Hotel Image',
        'id' => 'hotel_image',
        'type' => 'file',
        'query_args' => array('type' => 'image'),
    ));
    $cmb_hotel->add_field( array(
        'name' => 'Hotel Name',
        'id' => 'hotel_name',
        'type' => 'text',

    ));
    $cmb_hotel->add_field( array(
        'name' => 'Description',
        'id' => 'hotel_description',
        'type' => 'textarea',

    ));
    $cmb_hotel->add_field( array(
        'name' => 'Hotel Url',
        'id' => 'hotel_url',
        'type' => 'text_url',

    ));
    $cmb_hotel->add_field( array(
        'name' => 'Country',
        'id' => 'hotel_country',
        'type' => 'text',

    ));
    $cmb_hotel->add_field( array(
        'name' => 'City',
        'id' => 'hotel_city',
        'type' => 'text',
    ));




}

function section_meta_box()
{
    add_meta_box('section_box', ' Useful Information Sidebar ', 'section_box_content', array('vacation', 'flights', 'hotel', 'flight_hotel', 'vacation-deals', 'vacation-deals-internal'));
}

function section_box_content($post)
{
    $useful = get_post_meta($post->ID, 'useful', true);
    $explore = get_post_meta($post->ID, 'explore', true);

    ?>
    <div class="meta-box-row">

        <fieldset>
            <div class="panel-frm-row">
                <div>
                    <legend> Useful Information about</legend>
                    <div>
                        <?php wp_editor($useful, '_wp_editor_test_2'); ?>
                    </div>
                </div>

                <div>
                    <legend>More to explore for</legend>
                    <div>
                        <?php wp_editor($explore, '_wp_editor_test_3'); ?>
                    </div>
                </div>

            </div>
        </fieldset>

    </div>
    <?php
}

function section_save($post_id)
{

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (isset($_POST['_wp_editor_test_2'])) $useful = $_POST['_wp_editor_test_2'];
    if (isset($_POST['_wp_editor_test_3'])) $explore = $_POST['_wp_editor_test_3'];


    if (isset($_POST['_wp_editor_test_2']) && (!empty($_POST['_wp_editor_test_2']))) {
        update_post_meta($post_id, 'useful', $useful);
    } else {
        delete_post_meta($post_id, 'useful');
    }
    if (isset($_POST['_wp_editor_test_3']) && (!empty($_POST['_wp_editor_test_3']))) {
        update_post_meta($post_id, 'explore', $explore);
    } else {
        delete_post_meta($post_id, 'explore');
    }

}

add_action('add_meta_boxes', 'section_meta_box');
add_action('save_post', 'section_save');