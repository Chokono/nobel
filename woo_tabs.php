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
      $custom_product_data_fields['sposob_primeneniya'] = array(
       array(
             'tab_name'    => __('sposob_primeneniya', 'wc_cpdf'),
       ),
       // Textarea
       array(
             'id'          => '_sposob_primeneniya_textarea',
             'type'        => 'textarea',
             'label'       => __('Способ применения и дозы', 'wc_cpdf'),
             'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
             'style'       => 'width:70%;height:140px;',
             'description' => __('Способ применения и дозы.', 'wc_cpdf'),
             'desc_tip'    => true,
       )
     );
    $custom_product_data_fields['vzaimodeystviya'] = array(
       array(
             'tab_name'    => __('vzaimodeystviya', 'wc_cpdf'),
       ),
       // Textarea
       array(
             'id'          => '_vzaimodeystviya_textarea',
             'type'        => 'textarea',
             'label'       => __('Взаимодействия с препаратами', 'wc_cpdf'),
             'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
             'style'       => 'width:70%;height:140px;',
             'description' => __('Взаимодействия с препаратами.', 'wc_cpdf'),
             'desc_tip'    => true,
       )
     );
    $custom_product_data_fields['protivopokazaniya'] = array(
       array(
             'tab_name'    => __('protivopokazaniya', 'wc_cpdf'),
       ),
       // Textarea
       array(
             'id'          => '_protivopokazaniya_textarea',
             'type'        => 'textarea',
             'label'       => __('Противопоказания', 'wc_cpdf'),
             'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
             'style'       => 'width:70%;height:140px;',
             'description' => __('Противопоказания.', 'wc_cpdf'),
             'desc_tip'    => true,
       )
     );
    $custom_product_data_fields['pobochnie_deistviya'] = array(
       array(
             'tab_name'    => __('pobochnie_deistviya', 'wc_cpdf'),
       ),
       // Textarea
       array(
             'id'          => '_pobochnie_deistviya_textarea',
             'type'        => 'textarea',
             'label'       => __('Побочные действия', 'wc_cpdf'),
             'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
             'style'       => 'width:70%;height:140px;',
             'description' => __('Побочные действия.', 'wc_cpdf'),
             'desc_tip'    => true,
       )
     );
    $custom_product_data_fields['peredozirovka'] = array(
       array(
             'tab_name'    => __('peredozirovka', 'wc_cpdf'),
       ),
       // Textarea
       array(
             'id'          => '_peredozirovka_textarea',
             'type'        => 'textarea',
             'label'       => __('Передозировка', 'wc_cpdf'),
             'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
             'style'       => 'width:70%;height:140px;',
             'description' => __('Передозировка.', 'wc_cpdf'),
             'desc_tip'    => true,
       )
     );
    $custom_product_data_fields['usloviya_hraneniya'] = array(
       array(
             'tab_name'    => __('usloviya_hraneniya', 'wc_cpdf'),
       ),
       // Textarea
       array(
             'id'          => '_usloviya_hraneniya_textarea',
             'type'        => 'textarea',
             'label'       => __('Условия хранения', 'wc_cpdf'),
             'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
             'style'       => 'width:70%;height:140px;',
             'description' => __('Условия хранения.', 'wc_cpdf'),
             'desc_tip'    => true,
       )
     );
    $custom_product_data_fields['usloviya_otpuska'] = array(
       array(
             'tab_name'    => __('usloviya_otpuska', 'wc_cpdf'),
       ),
       // Textarea
       array(
             'id'          => '_usloviya_otpuska_text',
             'type'        => 'text',
             'label'       => __('Условия отпуска', 'wc_cpdf'),
             'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
             'style'       => 'width:70%;height:140px;',
             'description' => __('Условия отпуска.', 'wc_cpdf'),
             'desc_tip'    => true,
       )
     );
    $custom_product_data_fields['forma_vipuska'] = array(
       array(
             'tab_name'    => __('forma_vipuska', 'wc_cpdf'),
       ),
       // Text
       array(
             'id'          => '_forma_vipuska_text',
             'type'        => 'text',
             'label'       => __('Форма выпуска', 'wc_cpdf'),
             'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
             'style'       => 'width:70%;',
             'description' => __('Форма выпуска.', 'wc_cpdf'),
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
    'title'   => __( 'Состав', 'woocommerce' ),
    'priority'  => 50,
    'callback'  => 'woo_sostav_tab_content'
  );
  return $tabs;
}
function woo_sostav_tab_content() {
  global $wc_cpdf;
  echo '<h2>Состав</h2>';
  echo '<p>'.($wc_cpdf->get_value(get_the_ID(), '_sostav_textarea')).'</p>';
  
}

//pokazania
add_filter( 'woocommerce_product_tabs', 'woo_pokazania_tab' );
function woo_pokazania_tab( $tabs ) {
  
  // Adds the new tab 
  $tabs['test_tab'] = array(
    'title'   => __( 'Показания к применению', 'woocommerce' ),
    'priority'  => 50,
    'callback'  => 'woo_pokazania_tab_content'
  );
  return $tabs;
}
function woo_pokazania_tab_content() {
  global $wc_cpdf;
  echo '<h2>Показания к применению</h2>';
  echo '<p>'.($wc_cpdf->get_value(get_the_ID(), '_pokazania_textarea')).'</p>';
  
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

add_filter( 'woocommerce_product_tabs', 'woo_sposob_primeneniya_tab' );
function woo_sposob_primeneniya_tab( $tabs ) {
  
  // Adds the new tab 
  $tabs['woo_sposob_primeneniya_tab'] = array(
    'title'   => __( 'Способ применения и дозы', 'woocommerce' ),
    'priority'  => 50,
    'callback'  => 'woo_sposob_primeneniya_tab_content'
  );
  return $tabs;
}
function woo_sposob_primeneniya_tab_content() {
  global $wc_cpdf;
  echo '<h2>Способ применения и дозы</h2>';
  echo '<p>'.($wc_cpdf->get_value(get_the_ID(), '_sposob_primeneniya_textarea')).'</p>'; //from id 'id' => '_sposob_primeneniya_textarea',
   
}

add_filter( 'woocommerce_product_tabs', 'woo_vzaimodeystviya_tab' );
function woo_vzaimodeystviya_tab( $tabs ) {
  
  // Adds the new tab 
  $tabs['woo_vzaimodeystviya_tab'] = array(
    'title'   => __( 'Взаимодействия с препаратами', 'woocommerce' ),
    'priority'  => 50,
    'callback'  => 'woo_vzaimodeystviya_tab_content'
  );
  return $tabs;
}
function woo_vzaimodeystviya_tab_content() {
  global $wc_cpdf;
  echo '<h2>Взаимодействия с препаратами</h2>';
  echo '<p>'.($wc_cpdf->get_value(get_the_ID(), '_vzaimodeystviya_textarea')).'</p>'; //from id 'id' => '_vzaimodeystviya_textarea',
   
}

add_filter( 'woocommerce_product_tabs', 'woo_protivopokazaniya_tab' );
function woo_protivopokazaniya_tab( $tabs ) {
  
  // Adds the new tab 
  $tabs['woo_protivopokazaniya_tab'] = array(
    'title'   => __( 'Противопоказания', 'woocommerce' ),
    'priority'  => 50,
    'callback'  => 'woo_protivopokazaniya_tab_content'
  );
  return $tabs;
}
function woo_protivopokazaniya_tab_content() {
  global $wc_cpdf;
  echo '<h2>Противопоказания</h2>';
  echo '<p>'.($wc_cpdf->get_value(get_the_ID(), '_protivopokazaniya_textarea')).'</p>'; //from id 'id' => '_protivopokazaniya_textarea',
   
}

add_filter( 'woocommerce_product_tabs', 'woo_pobochnie_deistviya_tab' );
function woo_pobochnie_deistviya_tab( $tabs ) {
  
  // Adds the new tab 
  $tabs['woo_pobochnie_deistviya_tab'] = array(
    'title'   => __( 'Побочные действия', 'woocommerce' ),
    'priority'  => 50,
    'callback'  => 'woo_pobochnie_deistviya_tab_content'
  );
  return $tabs;
}
function woo_pobochnie_deistviya_tab_content() {
  global $wc_cpdf;
  echo '<h2>Побочные действия</h2>';
  echo '<p>'.($wc_cpdf->get_value(get_the_ID(), '_pobochnie_deistviya_textarea')).'</p>'; //from id 'id' => '_pobochnie_deistviya_textareaarea',
   
}

add_filter( 'woocommerce_product_tabs', 'woo_peredozirovka_tab' );
function woo_peredozirovka_tab( $tabs ) {
  
  // Adds the new tab 
  $tabs['woo_peredozirovka_tab'] = array(
    'title'   => __( 'Передозировка', 'woocommerce' ),
    'priority'  => 50,
    'callback'  => 'woo_peredozirovka_tab_content'
  );
  return $tabs;
}
function woo_peredozirovka_tab_content() {
  global $wc_cpdf;
  echo '<h2>Передозировка</h2>';
  echo '<p>'.($wc_cpdf->get_value(get_the_ID(), '_peredozirovka_textarea')).'</p>'; //from id 'id' => '_peredozirovka_textarea',
   
}

add_filter( 'woocommerce_product_tabs', 'woo_usloviya_hraneniya_tab' );
function woo_usloviya_hraneniya_tab( $tabs ) {
  
  // Adds the new tab 
  $tabs['woo_usloviya_hraneniya_tab'] = array(
    'title'   => __( 'Условия хранения', 'woocommerce' ),
    'priority'  => 50,
    'callback'  => 'woo_usloviya_hraneniya_tab_content'
  );
  return $tabs;
}
function woo_usloviya_hraneniya_tab_content() {
  global $wc_cpdf;
  echo '<h2>Условия хранения</h2>';
  echo '<p>'.($wc_cpdf->get_value(get_the_ID(), '_usloviya_hraneniya_textarea')).'</p>'; //from id 'id' => '_usloviya_hraneniya_textarea',
   
}

add_filter( 'woocommerce_product_tabs', 'woo_usloviya_otpuska_tab' );
function woo_usloviya_otpuska_tab( $tabs ) {
  
  // Adds the new tab 
  $tabs['woo_usloviya_otpuska_tab'] = array(
    'title'   => __( 'Условия отпуска', 'woocommerce' ),
    'priority'  => 50,
    'callback'  => 'woo_usloviya_otpuska_tab_content'
  );
  return $tabs;
}
function woo_usloviya_otpuska_tab_content() {
  global $wc_cpdf;
  echo '<h2>Условия отпуска</h2>';
  echo '<p>'.($wc_cpdf->get_value(get_the_ID(), '_usloviya_otpuska_text')).'</p>'; //from id 'id' => '_usloviya_otpuska_text',
   
}

add_filter( 'woocommerce_product_tabs', 'woo_forma_vipuska_tab' );
function woo_forma_vipuska_tab( $tabs ) {
  
  // Adds the new tab 
  $tabs['woo_forma_vipuska_tab'] = array(
    'title'   => __( 'Форма выпуска', 'woocommerce' ),
    'priority'  => 50,
    'callback'  => 'woo_forma_vipuska_tab_content'
  );
  return $tabs;
}
function woo_forma_vipuska_tab_content() {
  global $wc_cpdf;
  echo '<h2>Форма выпуска</h2>';
  echo '<p>'.($wc_cpdf->get_value(get_the_ID(), '_forma_vipuska_text')).'</p>'; //from id 'id' => '_forma_vipuska_text',
   
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