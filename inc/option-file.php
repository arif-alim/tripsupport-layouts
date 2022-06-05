<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'trip_settings';

    //
    // Create options
    CSF::createOptions( $prefix, array(
        'menu_title' => 'Trip Settings',
        'menu_slug'  => 'trip-settings',
    ) );

    //
    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Flight Settings',
        'fields' => array(

            //
            // A text field

            array(
                'id'            => 'opt-accordion-flight-1',
                'type'          => 'accordion',
                'title'         => 'Flight Settings',
                'accordions'    => array(
                    array(
                        'title'     => 'More destinations to explore Flight',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'     => 'opt-fieldset-flight-1',
                                'type'   => 'fieldset',
                                'title'  => 'General destinations item',
                                'fields' => array(
                                    array(
                                        'id'    => 'More_destinations_Title_flight',
                                        'type'  => 'text',
                                        'title' => 'Title Flight',
                                    ),
                                    array(
                                        'id'    => 'More_destinations_Description_flight',
                                        'type'  => 'textarea',
                                        'title' => 'Description Flight',
                                    ),
                                    array(
                                        'id'    => 'Tab_Destinations_Name_flight',
                                        'type'  => 'text',
                                        'title' => 'Tab Name Destinations Flight',
                                    ),
                                    array(
                                        'id'    => 'Tab_Destinations_World_Name_flight',
                                        'type'  => 'text',
                                        'title' => 'Tab Name Destinations In the World Flight',
                                    ),
                                    array(
                                        'id'    => 'Tab_to_Cities_Near_Name_flight',
                                        'type'  => 'text',
                                        'title' => 'Tab Cities Near Name Flight',
                                    ),
                                ),
                            ),
                        )
                    ),
                    array(
                        'title'     => 'Tab Item Top Destinations Flight',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'        => 'opt-group-flight-1',
                                'type'      => 'group',
                                'title'     => 'Items',
                                'fields'    => array(
                                    array(
                                        'id'    => 'Flight_Destinations_Title',
                                        'type'  => 'text',
                                        'title' => 'Destinations Title Flight',
                                    ),
                                    array(
                                        'id'    => 'Flight_Destinations_Url',
                                        'type'  => 'text',
                                        'title' => 'Destinations Url Flight',
                                    ),

                                ),
                            ),
                        )
                    ),
                    array(
                        'title'     => 'Tab Item Top Destinations In the World Flight',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'        => 'opt-group-flight-2',
                                'type'      => 'group',
                                'title'     => 'Items',
                                'fields'    => array(
                                    array(
                                        'id'    => 'Flight_Destinations_World_Title',
                                        'type'  => 'text',
                                        'title' => 'Destinations In the World Title Flight',
                                    ),
                                    array(
                                        'id'    => 'Flight_Destinations_World_Url',
                                        'type'  => 'text',
                                        'title' => 'Destinations In the World Url Flight',
                                    ),

                                ),
                            ),
                        )
                    ),
                    array(
                        'title'     => 'Tab Item Cities Near Flight',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'        => 'opt-group-flight-3',
                                'type'      => 'group',
                                'title'     => 'Items',
                                'fields'    => array(
                                    array(
                                        'id'    => 'Flights_to_Cities_Near_Title',
                                        'type'  => 'text',
                                        'title' => 'Cities Near Title Flight',
                                    ),
                                    array(
                                        'id'    => 'Flights_to_Cities_Near_Url',
                                        'type'  => 'text',
                                        'title' => 'Cities Near Url Flight',
                                    ),

                                ),
                            ),
                        )
                    ),
                )
            ),


        )
    ) );

    //
    // Vacation Settings
    CSF::createSection( $prefix, array(
        'title'  => 'Vacation Settings',
        'fields' => array(

            //
            // A text field

            array(
                'id'            => 'opt-accordion-vacation-1',
                'type'          => 'accordion',
                'title'         => 'Vacation Settings',
                'accordions'    => array(
                    array(
                        'title'     => 'More destinations to explore vacation',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'     => 'opt-fieldset-vacation-1',
                                'type'   => 'fieldset',
                                'title'  => 'General destinations item',
                                'fields' => array(
                                    array(
                                        'id'    => 'More_destinations_Title_vacation',
                                        'type'  => 'text',
                                        'title' => 'Title Vacation',
                                    ),
                                    array(
                                        'id'    => 'More_destinations_Description_vacation',
                                        'type'  => 'textarea',
                                        'title' => 'Description Vacation',
                                    ),
                                    array(
                                        'id'    => 'Tab_Destinations_Name_vacation',
                                        'type'  => 'text',
                                        'title' => 'Tab Name Destinations Vacation',
                                    ),
                                    array(
                                        'id'    => 'Tab_Destinations_World_Name_vacation',
                                        'type'  => 'text',
                                        'title' => 'Tab Name Destinations In the World Vacation',
                                    ),
                                    array(
                                        'id'    => 'Tab_to_Cities_Near_Name_vacation',
                                        'type'  => 'text',
                                        'title' => 'Tab Cities Near Name Vacation',
                                    ),
                                ),
                            ),
                        )
                    ),
                    array(
                        'title'     => 'Tab Item Top Destinations Vacation',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'        => 'opt-group-vacation-1',
                                'type'      => 'group',
                                'title'     => 'Items',
                                'fields'    => array(
                                    array(
                                        'id'    => 'Vacation_Destinations_Title',
                                        'type'  => 'text',
                                        'title' => 'Destinations Title Vacation',
                                    ),
                                    array(
                                        'id'    => 'Vacation_Destinations_Url',
                                        'type'  => 'text',
                                        'title' => 'Destinations Url Vacation',
                                    ),

                                ),
                            ),
                        )
                    ),
                    array(
                        'title'     => 'Tab Item Top Destinations In the World Vacation',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'        => 'opt-group-vacation-2',
                                'type'      => 'group',
                                'title'     => 'Items',
                                'fields'    => array(
                                    array(
                                        'id'    => 'Vacation_Destinations_World_Title',
                                        'type'  => 'text',
                                        'title' => 'Destinations In the World Title Vacation',
                                    ),
                                    array(
                                        'id'    => 'Vacation_Destinations_World_Url',
                                        'type'  => 'text',
                                        'title' => 'Destinations In the World Url Vacation',
                                    ),

                                ),
                            ),
                        )
                    ),
                    array(
                        'title'     => 'Tab Item Cities Near Vacation',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'        => 'opt-group-vacation-3',
                                'type'      => 'group',
                                'title'     => 'Items',
                                'fields'    => array(
                                    array(
                                        'id'    => 'Vacation_to_Cities_Near_Title',
                                        'type'  => 'text',
                                        'title' => 'Cities Near Title Vacation',
                                    ),
                                    array(
                                        'id'    => 'Vacation_to_Cities_Near_Url',
                                        'type'  => 'text',
                                        'title' => 'Cities Near Url Vacation',
                                    ),

                                ),
                            ),
                        )
                    ),
                )
            ),


        )
    ) );


    //
    // Sidebar Vacation
    CSF::createSection( $prefix, array(
        'title'  => 'Sidebar Vacation',
        'fields' => array(

            //
            // A text field

            array(
                'id'            => 'opt-accordion-sidebar-1',
                'type'          => 'accordion',
                'title'         => 'Sidebar Vacation',
                'accordions'    => array(

                    array(
                        'title'     => 'TripSupport Travel Deals',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'        => 'opt-group-sidebar-1',
                                'type'      => 'group',
                                'title'     => 'Items',
                                'fields'    => array(
                                    array(
                                        'id'    => 'Travel_Deals_Title',
                                        'type'  => 'text',
                                        'title' => 'Travel Deals Title',
                                    ),
                                    array(
                                        'id'    => 'Travel_Deals_Url',
                                        'type'  => 'text',
                                        'title' => 'Travel Deals Url',
                                    ),

                                ),
                            ),
                        )
                    ),
                    array(
                        'title'     => 'Vacation Packages',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'        => 'opt-group-sidebar-2',
                                'type'      => 'group',
                                'title'     => 'Items',
                                'fields'    => array(
                                    array(
                                        'id'    => 'Vacation_Packages_Title',
                                        'type'  => 'text',
                                        'title' => 'Vacation Packages Title',
                                    ),
                                    array(
                                        'id'    => 'Vacation_Packages_Url',
                                        'type'  => 'text',
                                        'title' => 'Vacation Packages Url',
                                    ),

                                ),
                            ),
                        )
                    ),

                )
            ),


        )
    ) );
	
	 //
    //Location Message
    CSF::createSection( $prefix, array(
        'title'  => 'User Location',
        'fields' => array(

            array(
                'id'        => 'opt-group-user',
                'type'      => 'group',
                'title'     => 'User Location Message',
                'fields'    => array(
                    array(
                        'id'    => 'opt-location',
                        'type'  => 'text',
                        'title' => 'Location',
                    ),
                    array(
                        'id'    => 'opt-message',
                        'type'  => 'wp_editor',
                        'title' => 'Message',
                    ),
                ),
            ),


        )
    ) );

  // ShortCode

    CSF::createSection( $prefix, array(
        'title'  => 'ShortCodes',
        'fields' => array(

            //
            // A text field

            array(
                'id'            => 'opt-accordion-shortcode',
                'type'          => 'accordion',
                'title'         => 'ShortCodes',
                'accordions'    => array(
                    array(
                        'title'     => 'Index ShortCodes',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'     => 'opt-fieldset-index1',
                                'type'   => 'fieldset',
                                'title'  => 'Section one',
                                'fields' => array(
                                    array(
                                        'id'         => 'opt-radio-section1',
                                        'type'       => 'radio',
                                        'title'      => 'Radio',
                                        'options'    => array(
                                            '0' => 'No',
                                            '1' => 'Yes',

                                        ),
                                        'default'    => '1'
                                    ),
                                    array(
                                        'id'      => 'opt-shortcode-text1',
                                        'type'    => 'text',
                                        'title'   => 'ShortCode',
                                    ),
                                ),
                            ),
                            array(
                                'id'     => 'opt-fieldset-index2',
                                'type'   => 'fieldset',
                                'title'  => 'Section Two',
                                'fields' => array(
                                    array(
                                        'id'         => 'opt-radio-section2',
                                        'type'       => 'radio',
                                        'title'      => 'Radio',
                                        'options'    => array(
                                            '0' => 'No',
                                            '1' => 'Yes',

                                        ),
                                        'default'    => '1'
                                    ),
                                    array(
                                        'id'      => 'opt-shortcode-text2',
                                        'type'    => 'text',
                                        'title'   => 'ShortCode',
                                    ),
                                ),
                            ),
                            array(
                                'id'     => 'opt-fieldset-index3',
                                'type'   => 'fieldset',
                                'title'  => 'Section There',
                                'fields' => array(
                                    array(
                                        'id'         => 'opt-radio-section3',
                                        'type'       => 'radio',
                                        'title'      => 'Radio',
                                        'options'    => array(
                                            '0' => 'No',
                                            '1' => 'Yes',

                                        ),
                                        'default'    => '1'
                                    ),
                                    array(
                                        'id'      => 'opt-shortcode-text3',
                                        'type'    => 'text',
                                        'title'   => 'ShortCode',
                                    ),
                                ),
                            ),
                        )
                    ),
                    array(
                        'title'     => 'Flight Landing ShortCodes',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'     => 'opt-fieldset-Flights1',
                                'type'   => 'fieldset',
                                'title'  => 'Section one',
                                'fields' => array(
                                    array(
                                        'id'         => 'opt-radio-section-Flights1',
                                        'type'       => 'radio',
                                        'title'      => 'Radio',
                                        'options'    => array(
                                            '0' => 'No',
                                            '1' => 'Yes',

                                        ),
                                        'default'    => '1'
                                    ),
                                    array(
                                        'id'      => 'opt-shortcode-text-Flights1',
                                        'type'    => 'text',
                                        'title'   => 'ShortCode',
                                    ),
                                ),
                            ),
                        )
                    ),
                    array(
                        'title'     => 'Flight Single ShortCodes',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'     => 'opt-fieldset-Flight1',
                                'type'   => 'fieldset',
                                'title'  => 'Section one',
                                'fields' => array(
                                    array(
                                        'id'         => 'opt-radio-section-Flight1',
                                        'type'       => 'radio',
                                        'title'      => 'Radio',
                                        'options'    => array(
                                            '0' => 'No',
                                            '1' => 'Yes',

                                        ),
                                        'default'    => '1'
                                    ),
                                    array(
                                        'id'      => 'opt-shortcode-text-Flight1',
                                        'type'    => 'text',
                                        'title'   => 'ShortCode',
                                    ),
                                ),
                            ),

                        )
                    ),
                    array(
                        'title'     => 'Vacation Landing ShortCodes',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(

                            array(
                                'id'     => 'opt-fieldset-Vacations1',
                                'type'   => 'fieldset',
                                'title'  => 'Section one',
                                'fields' => array(
                                    array(
                                        'id'         => 'opt-radio-section-Vacations1',
                                        'type'       => 'radio',
                                        'title'      => 'Radio',
                                        'options'    => array(
                                            '0' => 'No',
                                            '1' => 'Yes',

                                        ),
                                        'default'    => '1'
                                    ),
                                    array(
                                        'id'      => 'opt-shortcode-text-Vacations1',
                                        'type'    => 'text',
                                        'title'   => 'ShortCode',
                                    ),
                                ),
                            ),

                        )
                    ),
                    array(
                        'title'     => 'Vacation Single ShortCodes',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'     => 'opt-fieldset-Vacation1',
                                'type'   => 'fieldset',
                                'title'  => 'Section one',
                                'fields' => array(
                                    array(
                                        'id'         => 'opt-radio-section-Vacation1',
                                        'type'       => 'radio',
                                        'title'      => 'Radio',
                                        'options'    => array(
                                            '0' => 'No',
                                            '1' => 'Yes',

                                        ),
                                        'default'    => '1'
                                    ),
                                    array(
                                        'id'      => 'opt-shortcode-text-Vacation1',
                                        'type'    => 'text',
                                        'title'   => 'ShortCode',
                                    ),
                                ),
                            ),
                        )
                    ),
                    array(
                        'title'     => 'Hotel Landing ShortCodes',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'     => 'opt-fieldset-Hotels1',
                                'type'   => 'fieldset',
                                'title'  => 'Section one',
                                'fields' => array(
                                    array(
                                        'id'         => 'opt-radio-section-Hotels1',
                                        'type'       => 'radio',
                                        'title'      => 'Radio',
                                        'options'    => array(
                                            '0' => 'No',
                                            '1' => 'Yes',

                                        ),
                                        'default'    => '1'
                                    ),
                                    array(
                                        'id'      => 'opt-shortcode-text-Hotels1',
                                        'type'    => 'text',
                                        'title'   => 'ShortCode',
                                    ),
                                ),
                            ),
                        )
                    ),
                    array(
                        'title'     => 'Hotel Single ShortCodes',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'     => 'opt-fieldset-Hotel1',
                                'type'   => 'fieldset',
                                'title'  => 'Section one',
                                'fields' => array(
                                    array(
                                        'id'         => 'opt-radio-section-Hotel1',
                                        'type'       => 'radio',
                                        'title'      => 'Radio',
                                        'options'    => array(
                                            '0' => 'No',
                                            '1' => 'Yes',

                                        ),
                                        'default'    => '1'
                                    ),
                                    array(
                                        'id'      => 'opt-shortcode-text-Hotel1',
                                        'type'    => 'text',
                                        'title'   => 'ShortCode',
                                    ),
                                ),
                            ),
                            array(
                                'id'     => 'opt-fieldset-Hotel2',
                                'type'   => 'fieldset',
                                'title'  => 'Section one',
                                'fields' => array(
                                    array(
                                        'id'         => 'opt-radio-section-Hotel2',
                                        'type'       => 'radio',
                                        'title'      => 'Radio',
                                        'options'    => array(
                                            '0' => 'No',
                                            '1' => 'Yes',

                                        ),
                                        'default'    => '1'
                                    ),
                                    array(
                                        'id'      => 'opt-shortcode-text-Hotel2',
                                        'type'    => 'text',
                                        'title'   => 'ShortCode',
                                    ),
                                ),
                            ),
                            array(
                                'id'     => 'opt-fieldset-Hotel3',
                                'type'   => 'fieldset',
                                'title'  => 'Section one',
                                'fields' => array(
                                    array(
                                        'id'         => 'opt-radio-section-Hotel3',
                                        'type'       => 'radio',
                                        'title'      => 'Radio',
                                        'options'    => array(
                                            '0' => 'No',
                                            '1' => 'Yes',

                                        ),
                                        'default'    => '1'
                                    ),
                                    array(
                                        'id'      => 'opt-shortcode-text-Hotel3',
                                        'type'    => 'text',
                                        'title'   => 'ShortCode',
                                    ),
                                ),
                            ),
                        )
                    ),
                    array(
                        'title'     => 'Hotel-Flight Landing ShortCodes',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'     => 'opt-fieldset-FHotels1',
                                'type'   => 'fieldset',
                                'title'  => 'Section one',
                                'fields' => array(
                                    array(
                                        'id'         => 'opt-radio-section-FHotels1',
                                        'type'       => 'radio',
                                        'title'      => 'Radio',
                                        'options'    => array(
                                            '0' => 'No',
                                            '1' => 'Yes',

                                        ),
                                        'default'    => '1'
                                    ),
                                    array(
                                        'id'      => 'opt-shortcode-text-FHotels1',
                                        'type'    => 'text',
                                        'title'   => 'ShortCode',
                                    ),
                                ),
                            ),
                        )
                    ),
                    array(
                        'title'     => 'Hotel-Flight Single ShortCodes',
                        'icon'      => 'fa fa-gear',
                        'fields'    => array(
                            array(
                                'id'     => 'opt-fieldset-FHotel1',
                                'type'   => 'fieldset',
                                'title'  => 'Section one',
                                'fields' => array(
                                    array(
                                        'id'         => 'opt-radio-section-FHotel1',
                                        'type'       => 'radio',
                                        'title'      => 'Radio',
                                        'options'    => array(
                                            '0' => 'No',
                                            '1' => 'Yes',

                                        ),
                                        'default'    => '1'
                                    ),
                                    array(
                                        'id'      => 'opt-shortcode-text-FHotel1',
                                        'type'    => 'text',
                                        'title'   => 'ShortCode',
                                    ),
                                ),
                            ),
                        )
                    ),
                )
            ),


        )
    ) );

}

