<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'my_framework';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'Theme Options',
  'menu_slug'  => 'my-framework',
) );


//
// Create a section
//

CSF::createSection( $prefix, array(
  'id'     => 'about_section',
  'title'  => 'About Section',
  'icon'   => 'fas fa-align-left',
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'about_section',
  'title'  => 'our loan',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'loan_text',
      'type' => 'text',
      'title' => 'Small Text',
      'default' => 'Take look at our',
    ),
    array (
      'id' => 'loan_heading',
      'type' => 'text',
      'title' => 'Heading Text',
      'default' => 'Our Loans',
    ),
    array (
      'id' => 'loan_content',
      'type' => 'textarea',
      'title' => 'Loan Content',
      'default' => 'In vitae nisi aliquam, scelerisque leo a, volutpat sem. Viva mus rutrum dui fermentum eros hendrerit.',
    ),
    array (
      'id' => 'loan_button',
      'type' => 'text',
      'title' => 'Button Text',
      'default' => 'Discover',
    ),
    array (
      'id' => 'loan_button_url',
      'type' => 'text',
      'title' => 'Button Url',
      'default' => 'Enter Button Url Here',
    ),
  ),
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'about_section',
  'title'  => 'our loan Features',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array(
      'id'     => 'loan_features',
      'type'   => 'group',
      'title'  => 'Loan Features',
      'fields' => array(
        //
        // A text field
        //
        array(
          'id'    => 'feature_text',
          'type'  => 'text',
          'title' => 'Feature Text',
        ),
        array(
          'id'     => 'feature_image',
          'type'   => 'media',
          'title'  => 'Feature Image',
          'library' => 'image',
        ),
      ),
      'default' => array(
        array(
          'feature_text'     => 'We take care of you',
        ),
        array(
          'feature_text'     => 'No documents needed',
        ),
        array(
          'feature_text'     => 'Fast & easy loans',
        ),
      )
    ),
  )
));

//
// Create a section
//

CSF::createSection( $prefix, array(
  'id'     => 'helping_section',
  'title'  => 'Helping Section',
  'icon'   => 'fas fa-align-left',
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'helping_section',
  'title'  => 'Image',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'helping_image',
      'type' => 'background',
      'title' => 'Add An Image',
      'output' => '.bg-img',
      'default' => array(
        'background-image'              => 'https://i.ibb.co/fHRZnFq/demo-preview.jpg',
        'background-size'               => 'cover',
        'background-position'           => 'center center',
        'background-repeat'             => 'no-repeat',
      ),
    ),
  ),
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'helping_section',
  'title'      => 'Details',
  'icon'       => 'fas fa-arrow-right',
  'fields'     => array(
    array (
      'id'      => 'helping_txt',
      'type'    => 'text',
      'title'   => 'Title Small Text',
      'default' => 'Bold desing and beyound',
    ),
    array (
      'id'      => 'helping_heading',
      'type'    => 'text',
      'title'   => 'Heading',
      'default' => 'Helping small businesses like yours',
    ),
    array (
      'id'      => 'helping_content',
      'type'    => 'textarea',
      'title'   => 'Helping Content',
      'default' => 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sod ales. Maecenas sed magna tempor, efficitur maur is in, sollicitudin augue. Praesent pretium finibus quam.',
    ),
    array (
      'id'      => 'helping_btn',
      'type'    => 'text',
      'title'   => 'Button Name',
      'default' => 'Read More',
    ),
    array (
      'id'      => 'helping_btn_url',
      'type'    => 'text',
      'title'   => 'Button Url',
      'default' => 'Enter Button Url Here.....',
    ),
  ),
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'helping_section',
  'title'  => 'Circles',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array(
      'id'     => 'circles',
      'type'   => 'group',
      'title'  => 'Circle Group',
      'fields' => array(
        //
        // A text field
        //
        array(
          'id'    => 'circle_txt',
          'type'  => 'text',
          'title' => 'Circle Text',
        ),
        array(
          'id'     => 'circle_percent',
          'type'   => 'number',
          'title'  => 'Data Percent',
        ),
        array(
          'id'     => 'percent_value',
          'type'   => 'number',
          'title'  => 'Data Percent',
        ),
      ),
      'default' => array(
        array(
          'circle_txt' => 'Energy',
          'circle_percent' => 90,
          'percent_value' => .90,
        ),
        array(
          'circle_txt' => 'Power',
          'circle_percent' => 80,
          'percent_value' => .80,
        ),
        array(
          'circle_txt' => 'Resource',
          'circle_percent' => 75,
          'percent_value' => .75,
        ),
      )
    ),
  )
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'helping_section',
  'title'  => 'Circles 2',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array(
      'id'     => 'circles_2',
      'type'   => 'group',
      'title'  => 'Circle Group 2',
      'fields' => array(
        //
        // A text field
        //
        array(
          'id'    => 'circle_txt_2',
          'type'  => 'text',
          'title' => 'Circle Text',
        ),
        array(
          'id'     => 'circle_percent_2',
          'type'   => 'number',
          'title'  => 'Data Percent',
        ),
        array(
          'id'     => 'percent_value_2',
          'type'   => 'number',
          'title'  => 'Data Percent',
        ),
      ),
      'default' => array(
        array(
          'circle_txt_2' => 'Energy',
          'circle_percent_2' => 90,
          'percent_value_2' => .90,
        ),
        array(
          'circle_txt_2' => 'Power',
          'circle_percent_2' => 80,
          'percent_value_2' => .80,
        ),
      )
    ),
  )
));

//
// Create a section
//

CSF::createSection( $prefix, array(
  'title'  => 'Get Touch Section',
  'icon'   => 'fas fa-align-left',
  'fields'     => array(
    array (
      'id'      => 'get_touch_txt',
      'type'    => 'text',
      'title'   => 'Text Here',
      'default' => 'Are you in need for a load? Get in touch with us.',
    ),
    array (
      'id'      => 'get_touch_btn',
      'type'    => 'text',
      'title'   => 'Text Here',
      'default' => 'Read More',
    ),
    array (
      'id'      => 'get_touch_btn_url',
      'type'    => 'text',
      'title'   => 'Text Here',
      'default' => 'Enter url here .......',
    ),
  )
));


//
// Create a section
//

CSF::createSection( $prefix, array(
  'id'     => 'service_section',
  'title'  => 'Service Section',
  'icon'   => 'fas fa-align-left',
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'service_section',
  'title'      => 'Heading Title',
  'icon'       => 'fas fa-arrow-right',
  'fields'     => array(
    array (
      'id'      => 'services_title',
      'type'    => 'text',
      'title'   => 'Service Title Small',
      'default' => 'Take look at our',
    ),
    array (
      'id'      => 'services_heading',
      'type'    => 'text',
      'title'   => 'Service Heading',
      'default' => 'Our services',
    ),
  )
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'service_section',
  'title'  => 'Services',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array(
      'id'     => 'services',
      'type'   => 'group',
      'title'  => 'Services Group',
      'fields' => array(
        array(
          'id'     => 'service_title',
          'type'   => 'text',
          'title'  => 'Service Title',
        ),
        array(
          'id'    => 'service_icon',
          'type'  => 'icon',
          'title' => 'Service Icon',
        ),
        array(
          'id'     => 'service_desc',
          'type'   => 'textarea',
          'title'  => 'Service Description',
        ),
      ),
      'default' => array(
        array(
          'service_icon' => 'icon-profits',
          'service_title' => 'All the loans',
          'service_desc' => 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.',
        ),
        array(
          'service_icon' => 'icon-money-1',
          'service_title' => 'Easy and fast answer',
          'service_desc' => 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.',
        ),
        array(
          'service_icon' => 'icon-coin',
          'service_title' => 'No additional papers',
          'service_desc' => 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.',
        ),
        array(
          'service_icon' => 'icon-smartphone-1',
          'service_title' => 'Secure financial services',
          'service_desc' => 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.',
        ),
        array(
          'service_icon' => 'icon-diamond',
          'service_title' => 'Good investments',
          'service_desc' => 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.',
        ),
        array(
          'service_icon' => 'icon-piggy-bank',
          'service_title' => 'Accumulation goals',
          'service_desc' => 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.',
        ),
      )
    ),
  )
));


//
// Create a section
//

CSF::createSection( $prefix, array(
  'id'     => 'miscellaneous_section',
  'title'  => 'Miscellaneous Section',
  'icon'   => 'fas fa-align-left',
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'miscellaneous_section',
  'title'      => 'Image',
  'icon'       => 'fas fa-arrow-right',
  'fields'     => array(
    array (
      'id'      => 'misc_image',
      'type'    => 'media',
      'title'   => 'Misc Image',
    ),
  )
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'miscellaneous_section',
  'title'      => 'Contact Info',
  'icon'       => 'fas fa-arrow-right',
  'fields'     => array(
    array (
      'id'      => 'contact_heading',
      'type'    => 'text',
      'title'   => 'Contact Heading',
      'default' => 'Get in touch',
    ),
  )
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'miscellaneous_section',
  'title'      => 'Contact Address',
  'icon'       => 'fas fa-arrow-right',
  'fields'     => array(
    array (
      'id'      => 'contact_address',
      'type'    => 'text',
      'title'   => 'Contact Address',
      'default' => '3007 Sarah Drive </br> Franklin, LA 70538',
    ),
  )
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'miscellaneous_section',
  'title'      => 'Contact Phone',
  'icon'       => 'fas fa-arrow-right',
  'fields'     => array(
    array (
      'id'      => 'contact_phone',
      'type'    => 'text',
      'title'   => 'Contact Phone',
      'default' => '337-413-9538',
    ),
    array (
      'id'      => 'phone_availability',
      'type'    => 'text',
      'title'   => 'Contact Phone Availability',
      'default' => 'mon-fri , 08.am - 17.pm',
    ),
  )
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'miscellaneous_section',
  'title'      => 'Contact Email',
  'icon'       => 'fas fa-arrow-right',
  'fields'     => array(
    array (
      'id'      => 'contact_email',
      'type'    => 'text',
      'title'   => 'Contact Email',
      'default' => 'contact@yourbusiness.com',
    ),
    array (
      'id'      => 'email_availability',
      'type'    => 'text',
      'title'   => 'Contact Email Availability',
      'default' => 'we reply in 24 hrs',
    ),
  )
));

//
// Create a section for service page
//

CSF::createSection( $prefix, array(
  'id'     => 'service_page',
  'title'  => 'Service Page',
  'icon'   => 'fas fa-list-ul',
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'service_page',
  'title'      => 'First Section',
  'icon'       => 'fas fa-arrow-right',
  'fields'     => array(
    array (
      'id'      => 'service_pg_sec_1_sml_txt',
      'type'    => 'text',
      'title'   => 'Small Text',
      'default' => 'Bold desing and beyound',
    ),
    array (
      'id'      => 'service_pg_sec_1_headline',
      'type'    => 'text',
      'title'   => 'Headline',
      'default' => 'Easy and Fast credits',
    ),
    array (
      'id'      => 'service_pg_sec_1_content',
      'type'    => 'textarea',
      'title'   => 'Content',
      'default' => 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sod ales. Maecenas sed magna tempor, efficitur maur is in, sollicitudin augue. Praesent pretium finibus quam.',
    ),
    array (
      'id'      => 'service_pg_sec_1_btn',
      'type'    => 'text',
      'title'   => 'Button',
      'default' => 'Read More',
    ),
    array (
      'id'      => 'service_pg_sec_1_btn_url',
      'type'    => 'text',
      'title'   => 'Button Url',
      'default' => 'Url here........',
    ),
    array (
      'id'      => 'service_pg_sec_1_bg',
      'type'    => 'background',
      'title'   => 'Background Image',
      'output'  => '.special-feature-thumbnail.bg-img.jarallax',
      'default' => array(
        'background-size'               => 'cover',
        'background-position'           => 'center center',
        'background-repeat'             => 'no-repeat',
      ),
    ),
  )
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'service_page',
  'title'      => 'Second Section',
  'icon'       => 'fas fa-arrow-right',
  'fields'     => array(
    array (
      'id'      => 'service_pg_sec_2_bg',
      'type'    => 'background',
      'title'   => 'Background Image',
      'output'  => '.special-feature-thumbnail.bg-2.bg-img.jarallax',
      'default' => array(
        'background-size'               => 'cover',
        'background-position'           => 'center center',
        'background-repeat'             => 'no-repeat',
      ),
    ),
    array (
      'id'      => 'service_pg_sec_2_sml_txt',
      'type'    => 'text',
      'title'   => 'Small Text',
      'default' => 'Bold desing and beyound',
    ),
    array (
      'id'      => 'service_pg_sec_2_headline',
      'type'    => 'text',
      'title'   => 'Headline',
      'default' => 'Easy and Fast credits',
    ),
    array (
      'id'      => 'service_pg_sec_2_content',
      'type'    => 'textarea',
      'title'   => 'Content',
      'default' => 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sod ales. Maecenas sed magna tempor, efficitur maur is in, sollicitudin augue. Praesent pretium finibus quam.',
    ),
    array (
      'id'      => 'service_pg_sec_2_btn',
      'type'    => 'text',
      'title'   => 'Button',
      'default' => 'Read More',
    ),
    array (
      'id'      => 'service_pg_sec_2_btn_url',
      'type'    => 'text',
      'title'   => 'Button Url',
      'default' => 'Url here........',
    ),
  )
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'service_page',
  'title'  => 'Third Section',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array(
      'id'     => 'service_pg_group',
      'type'   => 'group',
      'title'  => 'Services Faq Group',
      'fields' => array(
        array(
          'id'     => 'service_sec_pg_3_btn',
          'type'   => 'text',
          'title'  => 'Button',
        ),
        array(
          'id'    => 'service_sec_pg_3_content',
          'type'  => 'textarea',
          'title' => 'Content',
        ),
      ),
      'default' => array(
        array(
          'service_sec_pg_3_btn' => 'Expand Section One',
          'service_sec_pg_3_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        ),
        array(
          'service_sec_pg_3_btn' => 'Expand Section Two',
          'service_sec_pg_3_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        ),
        array(
          'service_sec_pg_3_btn' => 'Expand Section Three',
          'service_sec_pg_3_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        ),
        array(
          'service_sec_pg_3_btn' => 'Expand Section Four',
          'service_sec_pg_3_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        ),
      )
    ),
    array(
      'id'     => 'service_pg_3_img',
      'type'   => 'media',
      'title'  => 'Add An Image',
    ),
    array(
      'id'     => 'service_pg_3_img_url',
      'type'   => 'text',
      'title'  => 'Image Url Here',
      'default'=> 'Url Here'
    ),
  )
));

//
// Create a section for service page
//

CSF::createSection( $prefix, array(
  'id'     => 'about_page',
  'title'  => 'About Page',
  'icon'   => 'fas fa-list-ul',
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'about_page',
  'title'      => 'First Section',
  'icon'       => 'fas fa-arrow-right',
  'fields'     => array(
    array (
      'id'      => 'about_pg_sec_1_sml_txt',
      'type'    => 'text',
      'title'   => 'Small Text',
      'default' => 'Take look at our',
    ),
    array (
      'id'      => 'about_pg_sec_1_headline',
      'type'    => 'text',
      'title'   => 'Headline',
      'default' => 'About our company',
    ),
    array (
      'id'      => 'about_pg_sec_1_content_b',
      'type'    => 'textarea',
      'title'   => 'Content Big',
      'default' => 'In vitae nisi aliquam, scelerisque leo a, volutpat sem. Viva mus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. ',
    ),
    array (
      'id'      => 'about_pg_sec_1_content',
      'type'    => 'textarea',
      'title'   => 'Content',
      'default' => 'Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Duis non volutpat arcu. Pellentesque lobortis neque non sem dapibus, non rutrum dolor pretium.',
    ),
    array (
      'id'      => 'about_pg_sec_1_btn',
      'type'    => 'text',
      'title'   => 'Button',
      'default' => 'Discover',
    ),
    array (
      'id'      => 'about_pg_sec_1_btn_url',
      'type'    => 'text',
      'title'   => 'Button Url',
      'default' => 'Url here........',
    ),
    array (
      'id'      => 'about_pg_sec_1_img',
      'type'    => 'media',
      'title'   => 'Add An Image',
    ),
  )
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'about_page',
  'title'      => 'Second Section',
  'icon'       => 'fas fa-arrow-right',
  'fields'     => array(
    array (
      'id'      => 'about_pg_sec_2_sml_txt',
      'type'    => 'text',
      'title'   => 'Small Text',
      'default' => 'Bold desing and beyound',
    ),
    array (
      'id'      => 'about_pg_sec_2_headline',
      'type'    => 'text',
      'title'   => 'Headline',
      'default' => 'Some Milestones',
    ),
    array (
      'id'      => 'about_pg_sec_2_content',
      'type'    => 'textarea',
      'title'   => 'Content',
      'default' => 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sod ales. Maecenas sed magna tempor, efficitur maur is in, sollicitudin augue. Praesent pretium finibus quam.',
    ),
    array(
      'id'     => 'achivements',
      'type'   => 'group',
      'title'  => 'Achivements Counter',
      'fields' => array(
        array(
          'id'     => 'achive_name',
          'type'   => 'text',
          'title'  => 'Service Title',
        ),
        array(
          'id'    => 'achive_icon',
          'type'  => 'icon',
          'title' => 'Achive Icon',
        ),
        array(
          'id'     => 'achive_amount',
          'type'   => 'number',
          'title'  => 'Achive Number',
        ),
      ),
      'default' => array(
        array(
          'achive_name' => 'Clients',
          'achive_icon' => 'icon-piggy-bank',
          'achive_amount' => 55,
        ),
        array(
          'achive_name' => 'Creditors',
          'achive_icon' => 'icon-coin',
          'achive_amount' => 35,
        ),
        array(
          'achive_name' => 'Awards',
          'achive_icon' => 'icon-diamond',
          'achive_amount' => 11,
        ),
      )
    ),
    array (
      'id'      => 'about_pg_sec_2_bg',
      'type'    => 'background',
      'title'   => 'Background Image',
      'output'  => '.cta-thumbnail.bg-img.about-bg-2.jarallax',
      'default' => array(
        'background-size'               => 'cover',
        'background-position'           => 'center center',
        'background-repeat'             => 'no-repeat',
      ),
    ),
  )
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'about_page',
  'title'      => 'Third Section',
  'icon'       => 'fas fa-arrow-right',
  'fields'     => array(
    array (
      'id'      => 'about_pg_sec_3_b_txt',
      'type'    => 'text',
      'title'   => 'Small Text',
      'default' => 'Are you in need for a load? Get in touch with us.',
    ),
    array (
      'id'      => 'about_pg_sec_3_s_txt',
      'type'    => 'text',
      'title'   => 'Headline',
      'default' => 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.',
    ),
    array (
      'id'      => 'about_pg_sec_3_btn',
      'type'    => 'textarea',
      'title'   => 'Content',
      'default' => 'Read More',
    ),
    array (
      'id'      => 'about_pg_sec_3_btn_url',
      'type'    => 'textarea',
      'title'   => 'Content',
      'default' => 'url here......',
    ),
  )
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'about_page',
  'title'      => 'Team Section',
  'icon'       => 'fas fa-arrow-right',
  'fields'     => array(
    array (
      'id'      => 'about_team_title',
      'type'    => 'text',
      'title'   => 'Small Text',
      'default' => 'Take look at our',
    ),
    array (
      'id'      => 'about_team_heading',
      'type'    => 'text',
      'title'   => 'Headline',
      'default' => 'Our Team',
    ),
    array (
      'id'      => 'about_members',
      'type'    => 'group',
      'title'   => 'All Members',
      'fields' => array(
        array (
          'id'      => 'about_member_name',
          'type'    => 'text',
          'title'   => 'Name',
        ),
        array (
          'id'      => 'about_member_position',
          'type'    => 'text',
          'title'   => 'Job Title',
        ),
        array (
          'id'      => 'about_member_img',
          'type'    => 'media',
          'title'   => 'Team Member Image',
        ),
        array (
          'id'      => 'about_member_details_link',
          'type'    => 'text',
          'title'   => 'Member Details Link',
        ),
      ),
      'default' => array(
        array (
          'about_member_name'         => 'Janet Smith',
          'about_member_position'     => 'Loan Manager',
          'about_member_details_link' => 'Details url here....',
        ),
        array (
          'about_member_name'         => 'Jame Smith',
          'about_member_position'     => 'Loan Manager',
          'about_member_details_link' => 'Details url here....',
        ),
        array (
          'about_member_name'         => 'Justin Smith',
          'about_member_position'     => 'Loan Manager',
          'about_member_details_link' => 'Details url here....',
        ),
        array (
          'about_member_name'         => 'Rose Smith',
          'about_member_position'     => 'Loan Manager',
          'about_member_details_link' => 'Details url here....',
        ),
      )
    ),
  )
));

//
// Create a section
//

CSF::createSection( $prefix, array(
  'id'     => 'contact_page',
  'title'  => 'Contact Page',
  'icon'   => 'fas fa-list-ul',
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'contact_page',
  'title'      => 'Contact Page About',
  'icon'       => 'fas fa-arrow-right',
  'fields'     => array(
    array (
      'id'      => 'contact_pg_company_details',
      'type'    => 'textarea',
      'title'   => 'Contact Page Content',
      'default' => 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Tut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis.',
    ),
  )
));

//
// Create sub section section
//
CSF::createSection( $prefix, array(
  'parent'     => 'contact_page',
  'title'      => 'Contact Advisor',
  'icon'       => 'fas fa-arrow-right',
  'fields'     => array(
    array (
      'id'      => 'contact_pg_advisors_title',
      'type'    => 'text',
      'title'   => 'Contact Page Advisor',
      'default' => 'Contact an advisor',
    ),
    array (
      'id'      => 'contact_pg_advisors',
      'type'    => 'group',
      'title'   => 'Contact Advisor Group',
      'fields'     => array(
        array (
          'id'      => 'contact_pg_advisors_name',
          'type'    => 'text',
          'title'   => 'Contact Page Advisor',
        ),
        array (
          'id'      => 'contact_pg_advisors_post',
          'type'    => 'text',
          'title'   => 'Advisor Post',
        ),
        array (
          'id'      => 'contact_pg_advisors_phone',
          'type'    => 'text',
          'title'   => 'Advisor Phone',
        ),
        array (
          'id'      => 'contact_pg_advisors_photo',
          'type'    => 'media',
          'title'   => 'Advisor Photo',
        ),
      ),
      'default'     => array(
        array(
          'contact_pg_advisors_name'    => 'Jame Smith',
          'contact_pg_advisors_post'    => 'Advisor',
          'contact_pg_advisors_phone'   => '+456 347 53433',
        ),
        array(
          'contact_pg_advisors_name'    => 'Justin Smith',
          'contact_pg_advisors_post'    => 'Advisor',
          'contact_pg_advisors_phone'   => '+456 347 53433',
        ),
      )
    ),
  )
));

//
// Field: map
//
CSF::createSection( $prefix, array(
  'parent'      => 'contact_page',
  'title'       => 'Contact Map',
  'icon'       => 'fas fa-arrow-right',
  'fields'      => array(
    array(
      'id'            => 'contact_map',
      'type'          => 'map',
      'title'         => 'Contact Page Background Map',
      'default'       => array(
        'address'     => 'New York, United States of America',
        'latitude'    => '40.7127281',
        'longitude'   => '-74.0060152',
        'zoom'        => '15',
      )
    ),
    
  )
) );

//
// Submenu For contact form
//
CSF::createSection( $prefix, array(
  'parent'      => 'contact_page',
  'title'       => 'Contact Form',
  'icon'       => 'fas fa-arrow-right',
  'fields'      => array(
    array(
      'id'            => 'contact_form_name',
      'type'          => 'text',
      'title'         => 'Contact Form Name',
      'default'       => 'Send Us a Message',
    ),
    array(
      'id'            => 'contact_form_id',
      'type'          => 'text',
      'title'         => 'Contact Form Id',
      'default'       => '[contact-form-7 id="258" title="Contact Form"]',
    ),
  )
) );