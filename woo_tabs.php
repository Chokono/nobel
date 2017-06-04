<?php

function prefix_custom_product_data_tab_init(){
     $custom_product_data_fields = array();
     /** First product data tab starts **/
     /** ===================================== */
     $custom_product_data_fields['sostav'] = array(
       array(
             'tab_name'    => __('sostav', 'wc_cpdf'),
       ),
       // Textarea
       array(
             'id'          => '_sostav_textarea',
             'type'        => 'textarea',
             'label'       => __('Состав', 'wc_cpdf'),
             'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
             'style'       => 'width:70%;height:140px;',
             'description' => __('Состав препарата.', 'wc_cpdf'),
             'desc_tip'    => true,
       )
     );

     $custom_product_data_fields['pokazania'] = array(
       array(
             'tab_name'    => __('pokazania', 'wc_cpdf'),
       ),
       // Textarea
       array(
             'id'          => '_pokazania_textarea',
             'type'        => 'textarea',
             'label'       => __('Показания к применению', 'wc_cpdf'),
             'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
             'style'       => 'width:70%;height:140px;',
             'description' => __('Показания к применению.', 'wc_cpdf'),
             'desc_tip'    => true,
       )
     );

      $custom_product_data_fields['srok_godnosty'] = array(
       array(
             'tab_name'    => __('srok_godnosty', 'wc_cpdf'),
       ),
       // Textarea
       array(
             'id'          => '_srok_godnosty_text',
             'type'        => 'text',
             'label'       => __('Срок годности', 'wc_cpdf'),
             'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
             'style'       => 'width:70%;',
             'description' => __('Срок годности.', 'wc_cpdf'),
             'desc_tip'    => true,
       )
     );

     return $custom_product_data_fields;

}
add_action('wc_cpdf_init', 'prefix_custom_product_data_tab_init', 10, 0);

/* TABS */

//sostav
add_filter( 'woocommerce_product_tabs', 'woo_sostav_tab' );
function woo_sostav_tab( $tabs ) {
	
	// Adds the new tab	
	$tabs['test_tab'] = array(
		'title' 	=> __( 'Состав', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_sostav_tab_content'
	);
	return $tabs;
}

function woo_sostav_tab_content() {
	global $wc_cpdf;
	echo '<h2>Состав</h2>';
	echo '<p>'.($wc_cpdf->get_value(get_the_ID(), '_sostav_textarea')).'</p>';
	
}

//srok_godnosty
add_filter( 'woocommerce_product_tabs', 'woo_srok_godnosty_tab' );
function woo_srok_godnosty_tab( $tabs ) {
  
  // Adds the new tab 
  $tabs['woo_srok_godnosty_tab'] = array(
    'title'   => __( 'Срок годности', 'woocommerce' ),
    'priority'  => 50,
    'callback'  => 'woo_srok_godnosty_tab_content'
  );
  return $tabs;
}

function woo_srok_godnosty_tab_content() {
  global $wc_cpdf;
  echo '<h2>Срок годности</h2>';
  echo '<p>'.($wc_cpdf->get_value(get_the_ID(), '_srok_godnosty_text')).'</p>'; //from id 'id' => '_srok_godnosty_text',
   
}

/*
Состав 
Показания к применению 
Способ применения и дозы
Взаимодействия с препаратами
Противопоказания
Побочное действие
Передозировка
Условия хранения 
Условия отпуска
Срок годности
Форма выпуска  /text

важно правидьно расставить textarea и text
'type'        => 'textarea',
*/


?>