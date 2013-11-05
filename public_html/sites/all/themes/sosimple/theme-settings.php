<?php



function sosimple_form_system_theme_settings_alter(&$form, &$form_state) {

    // Font
    $form['options']['font'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Body Font</h3>',
    );

      // Font Family
      $form['options']['font']['font_family'] = array(
        '#type' => 'select',
        '#title' => 'Select a font family',
        '#default_value' => theme_get_setting('font_family'),
        '#options' => array(
          'Open Sans Condensed, serif' => '"Open Sans Condensed", serif (default)',
          'Open Sans, serif' => '"Open Sans", serif',
          'PT+Sans:400,400italic,700,700italic' => 'PT Sans',
          'Quicksand:400,700,300' => 'Quicksand, sans-serif',
          'Arial, Helvetica, sans-serif' => 'Arial, Helvetica, sans-serif',
          'Georgia, serif' => 'Georgia, serif',
          '"Helvetica Neue", Helvetica, Arial, sans-serif' => '"Helvetica Neue", Helvetica, Arial, sans-serif',
          '"Times New Roman", Times, serif' => '"Times New Roman", Times, serif',
          'Verdana, Arial, Helvetica, sans-serif' => 'Verdana, Arial, Helvetica, sans-serif',
        ),
      );

    //Headings
    $form['options']['headings'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Headings</h3>',
    );

      // Font Family
      $form['options']['headings']['headings_font_family'] = array(
        '#type' => 'select',
        '#title' => 'Select a font family',
        '#default_value' => theme_get_setting('headings_font_family'),
        '#options' => array(
          'Open Sans Condensed, serif' => '"Open Sans Condensed", serif (default)',
          'Open Sans, serif' => '"Open Sans", serif',
          'PT+Sans:400,400italic,700,700italic' => 'PT Sans',
          'Quicksand:400,700,300' => 'Quicksand, sans-serif',
          'Arial, Helvetica, sans-serif' => 'Arial, Helvetica, sans-serif',
          'Georgia, serif' => 'Georgia, serif',
          '"Helvetica Neue", Helvetica, Arial, sans-serif' => '"Helvetica Neue", Helvetica, Arial, sans-serif',
          '"Times New Roman", Times, serif' => '"Times New Roman", Times, serif',
          'Verdana, Arial, Helvetica, sans-serif' => 'Verdana, Arial, Helvetica, sans-serif',
        ),
      );

}?>
