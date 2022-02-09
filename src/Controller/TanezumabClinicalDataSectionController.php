<?php

namespace Drupal\tanezumab_clinical_data\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;
use Drupal\Core\Database\Database;

/**
 * Class TanezumabClinicalDataSectionController.
 */
class TanezumabClinicalDataSectionController extends ControllerBase {

  /**
   * Custom template for oaHipOrKnee page.
   */
  public function oaHipOrKnee() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $tanezumab_clinical_data_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_clinical_data_pages')
      ->condition('field_section_type_', 'oa_hip_or_knee', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $tanezumab_clinical_data_page_query_execute = $tanezumab_clinical_data_page_query->execute();

    foreach ($tanezumab_clinical_data_page_query_execute as $tanezumab_clinical_data_page_query_execute_nids) {

      $entity_load = Node::load($tanezumab_clinical_data_page_query_execute_nids);

      $oahiporknee[$tanezumab_clinical_data_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $oahiporknee[$tanezumab_clinical_data_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $detail_description = $entity_load->get('body')->value;

      if (!empty($detail_description)) {
        $oahiporknee[$tanezumab_clinical_data_page_query_execute_nids]['detail_description'] = $detail_description;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $oahiporknee[$tanezumab_clinical_data_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $oahiporknee[$tanezumab_clinical_data_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $oahiporknee[$tanezumab_clinical_data_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $oahiporknee[$tanezumab_clinical_data_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $oahiporknee[$tanezumab_clinical_data_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $oahiporknee[$tanezumab_clinical_data_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'oahiporknee',
      '#oahiporknee' => $oahiporknee,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for modeOfAction page.
   */
  public function modeOfAction() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $tanezumab_clinical_data_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_clinical_data_pages')
      ->condition('field_section_type_', 'mode_of_action', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $tanezumab_clinical_data_page_query_execute = $tanezumab_clinical_data_page_query->execute();

    foreach ($tanezumab_clinical_data_page_query_execute as $tanezumab_clinical_data_page_query_execute_nids) {

      $entity_load = Node::load($tanezumab_clinical_data_page_query_execute_nids);

      $modeofaction[$tanezumab_clinical_data_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $modeofaction[$tanezumab_clinical_data_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $detail_description = $entity_load->get('body')->value;

      if (!empty($detail_description)) {
        $modeofaction[$tanezumab_clinical_data_page_query_execute_nids]['detail_description'] = $detail_description;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $modeofaction[$tanezumab_clinical_data_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $modeofaction[$tanezumab_clinical_data_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $modeofaction[$tanezumab_clinical_data_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $modeofaction[$tanezumab_clinical_data_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $modeofaction[$tanezumab_clinical_data_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $modeofaction[$tanezumab_clinical_data_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'modeofaction',
      '#modeofaction' => $modeofaction,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study1056 page.
   */
  public function study1056() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study1056_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_1056', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $study1056_page_query_execute = $study1056_page_query->execute();

    foreach ($study1056_page_query_execute as $study1056_page_query_execute_nids) {

      $entity_load = Node::load($study1056_page_query_execute_nids);

      $study1056[$study1056_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $study1056[$study1056_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $study1056[$study1056_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $study1056[$study1056_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $study1056[$study1056_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $study1056[$study1056_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $study1056[$study1056_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $study1056[$study1056_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        $study_information_data[] = '<a href="study-1056/study-information?type=item' . $i . '">' . str_replace(' (Study-1056)', '', $study_information_term_load->getName()) . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $study1056[$study1056_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_co_primary_endpoints = $entity_load->get('field_co_primary_endpoints')->referencedEntities();

      foreach ($field_co_primary_endpoints as $field_co_primary_endpoints_value) {
        $field_co_primary_endpoints_term_tid = $field_co_primary_endpoints_value->get('tid')->value;
        $field_co_primary_endpoints_term_load = Term::load($field_co_primary_endpoints_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_co_primary_endpoints_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_co_primary_endpoints_tid_term_url = $term_alias;
        $field_co_primary_endpoints_data[] = '<a href="' . $field_co_primary_endpoints_tid_term_url . '">' . str_replace(' (Study-1056)', '', $field_co_primary_endpoints_term_load->getName()) . '</a>';
      }

      if (!empty($field_co_primary_endpoints_data)) {
        $study1056[$study1056_page_query_execute_nids]['field_co_primary_endpoints_data'] = $field_co_primary_endpoints_data;
      }

      $field_secondary_endpoints = $entity_load->get('field_secondary_endpoints')->referencedEntities();

      foreach ($field_secondary_endpoints as $field_secondary_endpoints_value) {
        $field_secondary_endpoints_term_tid = $field_secondary_endpoints_value->get('tid')->value;
        $field_secondary_endpoints_term_load = Term::load($field_secondary_endpoints_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_secondary_endpoints_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_secondary_endpoints_tid_term_url = $term_alias;
        $field_secondary_endpoints_data[] = '<a href="' . $field_secondary_endpoints_tid_term_url . '">' . str_replace(' (Study-1056)', '', $field_secondary_endpoints_term_load->getName()) . '</a>';
      }

      if (!empty($field_secondary_endpoints_data)) {
        $study1056[$study1056_page_query_execute_nids]['field_secondary_endpoints_data'] = $field_secondary_endpoints_data;
      }

      $field_onset_maintenance_endpoint = $entity_load->get('field_onset_maintenance_endpoint')->referencedEntities();

      foreach ($field_onset_maintenance_endpoint as $field_onset_maintenance_endpoint_value) {
        $field_onset_maintenance_endpoint_term_tid = $field_onset_maintenance_endpoint_value->get('tid')->value;
        $field_onset_maintenance_endpoint_term_load = Term::load($field_onset_maintenance_endpoint_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_onset_maintenance_endpoint_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_onset_maintenance_endpoint_tid_term_url = $term_alias;
        $field_onset_maintenance_endpoint_data[] = '<a href="' . $field_onset_maintenance_endpoint_tid_term_url . '">' . str_replace(' (Study-1056)', '', $field_onset_maintenance_endpoint_term_load->getName()) . '</a>';
      }

      if (!empty($field_onset_maintenance_endpoint_data)) {
        $study1056[$study1056_page_query_execute_nids]['field_onset_maintenance_endpoint_data'] = $field_onset_maintenance_endpoint_data;
      }

      $field_other_endpoints = $entity_load->get('field_other_endpoints')->referencedEntities();

      foreach ($field_other_endpoints as $field_other_endpoints_value) {
        $field_other_endpoints_term_tid = $field_other_endpoints_value->get('tid')->value;
        $field_other_endpoints_term_load = Term::load($field_other_endpoints_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_other_endpoints_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_other_endpoints_tid_term_url = $term_alias;
        $field_other_endpoints_data[] = '<a href="' . $field_other_endpoints_tid_term_url . '">' . str_replace(' (Study-1056)', '', $field_other_endpoints_term_load->getName()) . '</a>';
      }

      if (!empty($field_other_endpoints_data)) {
        $study1056[$study1056_page_query_execute_nids]['field_other_endpoints_data'] = $field_other_endpoints_data;
      }

      $field_other_joint_safety_joint_a = $entity_load->get('field_other_joint_safety_joint_a')->referencedEntities();

      foreach ($field_other_joint_safety_joint_a as $field_other_joint_safety_joint_a_value) {
        $field_other_joint_safety_joint_a_term_tid = $field_other_joint_safety_joint_a_value->get('tid')->value;
        $field_other_joint_safety_joint_a_term_load = Term::load($field_other_joint_safety_joint_a_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_other_joint_safety_joint_a_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_other_joint_safety_joint_a_tid_term_url = $term_alias;
        $field_other_joint_safety_joint_a_data[] = '<a href="' . $field_other_joint_safety_joint_a_tid_term_url . '">' . str_replace(' (Study-1056)', '', $field_other_joint_safety_joint_a_term_load->getName()) . '</a>';
      }

      if (!empty($field_other_joint_safety_joint_a_data)) {
        $study1056[$study1056_page_query_execute_nids]['field_other_joint_safety_joint_a_data'] = $field_other_joint_safety_joint_a_data;
      }

      $field_safety_endpoints = $entity_load->get('field_safety_endpoints')->referencedEntities();

      foreach ($field_safety_endpoints as $field_safety_endpoints_value) {
        $field_safety_endpoints_term_tid = $field_safety_endpoints_value->get('tid')->value;
        $field_safety_endpoints_term_load = Term::load($field_safety_endpoints_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_safety_endpoints_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_safety_endpoints_tid_term_url = $term_alias;
        $field_safety_endpoints_data[] = '<a href="' . $field_safety_endpoints_tid_term_url . '">' . str_replace(' (Study-1056)', '', $field_safety_endpoints_term_load->getName()) . '</a>';
      }

      if (!empty($field_safety_endpoints_data)) {
        $study1056[$study1056_page_query_execute_nids]['field_safety_endpoints_data'] = $field_safety_endpoints_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $study1056[$study1056_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $study1056[$study1056_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'study1056',
      '#study1056' => $study1056,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study_information_1056 page.
   */
  public function studyinformation1056() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_1056_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_1056', '=')
      ->sort('tid', 'ASC');

    $study_information_1056_query_execute = $study_information_1056_query->execute();

    foreach ($study_information_1056_query_execute as $study_information_1056_query_execute_nids) {

      $study_information_term = Term::load($study_information_1056_query_execute_nids);
      $study_info_1056[$study_information_1056_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_1056[$study_information_1056_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_1056', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformation1056',
      '#study_info_1056' => $study_info_1056,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for study_information_1057 page.
   */
  public function studyinformation1057() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_1057_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_1057', '=')
      ->sort('tid', 'ASC');

    $study_information_1057_query_execute = $study_information_1057_query->execute();

    foreach ($study_information_1057_query_execute as $study_information_1057_query_execute_nids) {

      $study_information_term = Term::load($study_information_1057_query_execute_nids);
      $study_info_1057[$study_information_1057_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_1057[$study_information_1057_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_1057', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformation1057',
      '#study_info_1057' => $study_info_1057,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for study_information_1027 page.
   */
  public function studyinformation1027() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_1027_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_1027', '=')
      ->sort('tid', 'ASC');

    $study_information_1027_query_execute = $study_information_1027_query->execute();

    foreach ($study_information_1027_query_execute as $study_information_1027_query_execute_nids) {

      $study_information_term = Term::load($study_information_1027_query_execute_nids);
      $study_info_1027[$study_information_1027_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_1027[$study_information_1027_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_1027', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformation1027',
      '#study_info_1027' => $study_info_1027,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for study1027 page.
   */
  public function study1027() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study1027_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_1027', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $study1027_page_query_execute = $study1027_page_query->execute();

    foreach ($study1027_page_query_execute as $study1027_page_query_execute_nids) {

      $entity_load = Node::load($study1027_page_query_execute_nids);

      $study1027[$study1027_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $study1027[$study1027_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $study1027[$study1027_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $study1027[$study1027_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $study1027[$study1027_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $study1027[$study1027_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $study1027[$study1027_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $study1027[$study1027_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        $study_information_data[] = '<a href="study-1027/study-information?type=item' . $i . '">' . str_replace(' (Study-1027)', '', $study_information_term_load->getName()) . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $study1027[$study1027_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $study1027[$study1027_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $study1027[$study1027_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'study1027',
      '#study1027' => $study1027,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study1057 page.
   */
  public function study1057() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study1057_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_1057', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $study1057_page_query_execute = $study1057_page_query->execute();

    foreach ($study1057_page_query_execute as $study1057_page_query_execute_nids) {

      $entity_load = Node::load($study1057_page_query_execute_nids);

      $study1057[$study1057_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $study1057[$study1057_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $study1057[$study1057_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $study1057[$study1057_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $study1057[$study1057_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $study1057[$study1057_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $study1057[$study1057_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $study1057[$study1057_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        $study_information_data[] = '<a href="study-1057/study-information?type=item' . $i . '">' . str_replace(' (Study-1057)', '', $study_information_term_load->getName()) . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $study1057[$study1057_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_co_primary_endpoints = $entity_load->get('field_co_primary_endpoints')->referencedEntities();

      foreach ($field_co_primary_endpoints as $field_co_primary_endpoints_value) {
        $field_co_primary_endpoints_term_tid = $field_co_primary_endpoints_value->get('tid')->value;
        $field_co_primary_endpoints_term_load = Term::load($field_co_primary_endpoints_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_co_primary_endpoints_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_co_primary_endpoints_tid_term_url = $term_alias;
        $field_co_primary_endpoints_data[] = '<a href="' . $field_co_primary_endpoints_tid_term_url . '">' . str_replace(' (Study-1057)', '', $field_co_primary_endpoints_term_load->getName()) . '</a>';
      }

      if (!empty($field_co_primary_endpoints_data)) {
        $study1057[$study1057_page_query_execute_nids]['field_co_primary_endpoints_data'] = $field_co_primary_endpoints_data;
      }

      $field_secondary_endpoints = $entity_load->get('field_secondary_endpoints')->referencedEntities();

      foreach ($field_secondary_endpoints as $field_secondary_endpoints_value) {
        $field_secondary_endpoints_term_tid = $field_secondary_endpoints_value->get('tid')->value;
        $field_secondary_endpoints_term_load = Term::load($field_secondary_endpoints_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_secondary_endpoints_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_secondary_endpoints_tid_term_url = $term_alias;
        $field_secondary_endpoints_data[] = '<a href="' . $field_secondary_endpoints_tid_term_url . '">' . str_replace(' (Study-1057)', '', $field_secondary_endpoints_term_load->getName()) . '</a>';
      }

      if (!empty($field_secondary_endpoints_data)) {
        $study1057[$study1057_page_query_execute_nids]['field_secondary_endpoints_data'] = $field_secondary_endpoints_data;
      }

      $field_onset_maintenance_endpoint = $entity_load->get('field_onset_maintenance_endpoint')->referencedEntities();

      foreach ($field_onset_maintenance_endpoint as $field_onset_maintenance_endpoint_value) {
        $field_onset_maintenance_endpoint_term_tid = $field_onset_maintenance_endpoint_value->get('tid')->value;
        $field_onset_maintenance_endpoint_term_load = Term::load($field_onset_maintenance_endpoint_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_onset_maintenance_endpoint_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_onset_maintenance_endpoint_tid_term_url = $term_alias;
        $field_onset_maintenance_endpoint_data[] = '<a href="' . $field_onset_maintenance_endpoint_tid_term_url . '">' . str_replace(' (Study-1057)', '', $field_onset_maintenance_endpoint_term_load->getName()) . '</a>';
      }

      if (!empty($field_onset_maintenance_endpoint_data)) {
        $study1057[$study1057_page_query_execute_nids]['field_onset_maintenance_endpoint_data'] = $field_onset_maintenance_endpoint_data;
      }

      $field_other_endpoints = $entity_load->get('field_other_endpoints')->referencedEntities();

      foreach ($field_other_endpoints as $field_other_endpoints_value) {
        $field_other_endpoints_term_tid = $field_other_endpoints_value->get('tid')->value;
        $field_other_endpoints_term_load = Term::load($field_other_endpoints_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_other_endpoints_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_other_endpoints_tid_term_url = $term_alias;
        $field_other_endpoints_data[] = '<a href="' . $field_other_endpoints_tid_term_url . '">' . str_replace(' (Study-1057)', '', $field_other_endpoints_term_load->getName()) . '</a>';
      }

      if (!empty($field_other_endpoints_data)) {
        $study1057[$study1057_page_query_execute_nids]['field_other_endpoints_data'] = $field_other_endpoints_data;
      }

      $field_other_joint_safety_joint_a = $entity_load->get('field_other_joint_safety_joint_a')->referencedEntities();

      foreach ($field_other_joint_safety_joint_a as $field_other_joint_safety_joint_a_value) {
        $field_other_joint_safety_joint_a_term_tid = $field_other_joint_safety_joint_a_value->get('tid')->value;
        $field_other_joint_safety_joint_a_term_load = Term::load($field_other_joint_safety_joint_a_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_other_joint_safety_joint_a_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_other_joint_safety_joint_a_tid_term_url = $term_alias;
        $field_other_joint_safety_joint_a_data[] = '<a href="' . $field_other_joint_safety_joint_a_tid_term_url . '">' . str_replace(' (Study-1057)', '', $field_other_joint_safety_joint_a_term_load->getName()) . '</a>';
      }

      if (!empty($field_other_joint_safety_joint_a_data)) {
        $study1057[$study1057_page_query_execute_nids]['field_other_joint_safety_joint_a_data'] = $field_other_joint_safety_joint_a_data;
      }

      $field_safety_endpoints = $entity_load->get('field_safety_endpoints')->referencedEntities();

      foreach ($field_safety_endpoints as $field_safety_endpoints_value) {
        $field_safety_endpoints_term_tid = $field_safety_endpoints_value->get('tid')->value;
        $field_safety_endpoints_term_load = Term::load($field_safety_endpoints_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_safety_endpoints_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_safety_endpoints_tid_term_url = $term_alias;
        $field_safety_endpoints_data[] = '<a href="' . $field_safety_endpoints_tid_term_url . '">' . str_replace(' (Study-1057)', '', $field_safety_endpoints_term_load->getName()) . '</a>';
      }

      if (!empty($field_safety_endpoints_data)) {
        $study1057[$study1057_page_query_execute_nids]['field_safety_endpoints_data'] = $field_safety_endpoints_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $study1057[$study1057_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $study1057[$study1057_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'study1057',
      '#study1057' => $study1057,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study_information_1030 page.
   */
  public function studyinformation1030() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_1030_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_1030', '=')
      ->sort('tid', 'ASC');

    $study_information_1030_query_execute = $study_information_1030_query->execute();

    foreach ($study_information_1030_query_execute as $study_information_1030_query_execute_nids) {

      $study_information_term = Term::load($study_information_1030_query_execute_nids);
      $study_info_1030[$study_information_1030_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_1030[$study_information_1030_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_1030', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformation1030',
      '#study_info_1030' => $study_info_1030,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for study1030 page.
   */
  public function study1030() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study1030_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_1030', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $study1030_page_query_execute = $study1030_page_query->execute();

    foreach ($study1030_page_query_execute as $study1030_page_query_execute_nids) {

      $entity_load = Node::load($study1030_page_query_execute_nids);

      $study1030[$study1030_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $study1030[$study1030_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $study1030[$study1030_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $study1030[$study1030_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $study1030[$study1030_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $study1030[$study1030_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $study1030[$study1030_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $study1030[$study1030_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        $study_information_data[] = '<a href="study-1030/study-information?type=item' . $i . '">' . str_replace(' (Study-1030)', '', $study_information_term_load->getName()) . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $study1030[$study1030_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $study1030[$study1030_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $study1030[$study1030_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'study1030',
      '#study1030' => $study1030,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study_information_1018 page.
   */
  public function studyinformation1018() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_1018_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_1018', '=')
      ->sort('tid', 'ASC');

    $study_information_1018_query_execute = $study_information_1018_query->execute();

    foreach ($study_information_1018_query_execute as $study_information_1018_query_execute_nids) {

      $study_information_term = Term::load($study_information_1018_query_execute_nids);
      $study_info_1018[$study_information_1018_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_1018[$study_information_1018_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_1018', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformation1018',
      '#study_info_1018' => $study_info_1018,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for study1018 page.
   */
  public function study1018() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study1018_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_1018', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $study1018_page_query_execute = $study1018_page_query->execute();

    foreach ($study1018_page_query_execute as $study1018_page_query_execute_nids) {

      $entity_load = Node::load($study1018_page_query_execute_nids);

      $study1018[$study1018_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $study1018[$study1018_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $study1018[$study1018_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $study1018[$study1018_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $study1018[$study1018_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $study1018[$study1018_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $study1018[$study1018_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $study1018[$study1018_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        $study_information_data[] = '<a href="study-1018/study-information?type=item' . $i . '">' . str_replace(' (Study-1018)', '', $study_information_term_load->getName()) . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $study1018[$study1018_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $study1018[$study1018_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $study1018[$study1018_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'study1018',
      '#study1018' => $study1018,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study_information_1025 page.
   */
  public function studyinformation1025() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_1025_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_1025', '=')
      ->sort('tid', 'ASC');

    $study_information_1025_query_execute = $study_information_1025_query->execute();

    foreach ($study_information_1025_query_execute as $study_information_1025_query_execute_nids) {

      $study_information_term = Term::load($study_information_1025_query_execute_nids);
      $study_info_1025[$study_information_1025_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_1025[$study_information_1025_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_1025', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformation1025',
      '#study_info_1025' => $study_info_1025,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for study1025 page.
   */
  public function study1025() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study1025_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_1025', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $study1025_page_query_execute = $study1025_page_query->execute();

    foreach ($study1025_page_query_execute as $study1025_page_query_execute_nids) {

      $entity_load = Node::load($study1025_page_query_execute_nids);

      $study1025[$study1025_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $study1025[$study1025_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $study1025[$study1025_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $study1025[$study1025_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $study1025[$study1025_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $study1025[$study1025_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $study1025[$study1025_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $study1025[$study1025_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        $study_information_data[] = '<a href="study-1025/study-information?type=item' . $i . '">' . str_replace(' (Study-1025)', '', $study_information_term_load->getName()) . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $study1025[$study1025_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $study1025[$study1025_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $study1025[$study1025_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'study1025',
      '#study1025' => $study1025,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study_information_1017 page.
   */
  public function studyinformation1017() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_1017_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_1017', '=')
      ->sort('tid', 'ASC');

    $study_information_1017_query_execute = $study_information_1017_query->execute();

    foreach ($study_information_1017_query_execute as $study_information_1017_query_execute_nids) {

      $study_information_term = Term::load($study_information_1017_query_execute_nids);
      $study_info_1017[$study_information_1017_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_1017[$study_information_1017_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_1017', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformation1017',
      '#study_info_1017' => $study_info_1017,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for study1017 page.
   */
  public function study1017() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study1017_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_1017', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $study1017_page_query_execute = $study1017_page_query->execute();

    foreach ($study1017_page_query_execute as $study1017_page_query_execute_nids) {

      $entity_load = Node::load($study1017_page_query_execute_nids);

      $study1017[$study1017_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $study1017[$study1017_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $study1017[$study1017_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $study1017[$study1017_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $study1017[$study1017_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $study1017[$study1017_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $study1017[$study1017_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $study1017[$study1017_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        $study_information_data[] = '<a href="study-1017/study-information?type=item' . $i . '">' . str_replace(' (Study-1017)', '', $study_information_term_load->getName()) . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $study1017[$study1017_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $study1017[$study1017_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $study1017[$study1017_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'study1017',
      '#study1017' => $study1017,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study_information_1016 page.
   */
  public function studyinformation1016() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_1016_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_1016', '=')
      ->sort('tid', 'ASC');

    $study_information_1016_query_execute = $study_information_1016_query->execute();

    foreach ($study_information_1016_query_execute as $study_information_1016_query_execute_nids) {

      $study_information_term = Term::load($study_information_1016_query_execute_nids);
      $study_info_1016[$study_information_1016_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_1016[$study_information_1016_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_1016', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformation1016',
      '#study_info_1016' => $study_info_1016,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for study1016 page.
   */
  public function study1016() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study1016_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_1016', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $study1016_page_query_execute = $study1016_page_query->execute();

    foreach ($study1016_page_query_execute as $study1016_page_query_execute_nids) {

      $entity_load = Node::load($study1016_page_query_execute_nids);

      $study1016[$study1016_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $study1016[$study1016_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $study1016[$study1016_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $study1016[$study1016_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $study1016[$study1016_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $study1016[$study1016_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $study1016[$study1016_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $study1016[$study1016_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        $study_information_data[] = '<a href="study-1016/study-information?type=item' . $i . '">' . str_replace(' (Study-1016)', '', $study_information_term_load->getName()) . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $study1016[$study1016_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $study1016[$study1016_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $study1016[$study1016_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'study1016',
      '#study1016' => $study1016,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study_information_1015 page.
   */
  public function studyinformation1015() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_1015_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_1015', '=')
      ->sort('tid', 'ASC');

    $study_information_1015_query_execute = $study_information_1015_query->execute();

    foreach ($study_information_1015_query_execute as $study_information_1015_query_execute_nids) {

      $study_information_term = Term::load($study_information_1015_query_execute_nids);
      $study_info_1015[$study_information_1015_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_1015[$study_information_1015_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_1015', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformation1015',
      '#study_info_1015' => $study_info_1015,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for study1015 page.
   */
  public function study1015() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study1015_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_1015', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $study1015_page_query_execute = $study1015_page_query->execute();

    foreach ($study1015_page_query_execute as $study1015_page_query_execute_nids) {

      $entity_load = Node::load($study1015_page_query_execute_nids);

      $study1015[$study1015_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $study1015[$study1015_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $study1015[$study1015_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $study1015[$study1015_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $study1015[$study1015_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $study1015[$study1015_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $study1015[$study1015_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $study1015[$study1015_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        $study_information_data[] = '<a href="study-1015/study-information?type=item' . $i . '">' . str_replace(' (Study-1015)', '', $study_information_term_load->getName()) . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $study1015[$study1015_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $study1015[$study1015_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $study1015[$study1015_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'study1015',
      '#study1015' => $study1015,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study_information_1014 page.
   */
  public function studyinformation1014() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_1014_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_1014', '=')
      ->sort('tid', 'ASC');

    $study_information_1014_query_execute = $study_information_1014_query->execute();

    foreach ($study_information_1014_query_execute as $study_information_1014_query_execute_nids) {

      $study_information_term = Term::load($study_information_1014_query_execute_nids);
      $study_info_1014[$study_information_1014_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_1014[$study_information_1014_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_1014', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformation1014',
      '#study_info_1014' => $study_info_1014,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for study1014 page.
   */
  public function study1014() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study1014_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_1014', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $study1014_page_query_execute = $study1014_page_query->execute();

    foreach ($study1014_page_query_execute as $study1014_page_query_execute_nids) {

      $entity_load = Node::load($study1014_page_query_execute_nids);

      $study1014[$study1014_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $study1014[$study1014_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $study1014[$study1014_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $study1014[$study1014_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $study1014[$study1014_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $study1014[$study1014_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $study1014[$study1014_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $study1014[$study1014_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        $study_information_data[] = '<a href="study-1014/study-information?type=item' . $i . '">' . str_replace(' (Study-1014)', '', $study_information_term_load->getName()) . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $study1014[$study1014_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $study1014[$study1014_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $study1014[$study1014_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'study1014',
      '#study1014' => $study1014,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study_information_1011 page.
   */
  public function studyinformation1011() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_1011_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_1011', '=')
      ->sort('tid', 'ASC');

    $study_information_1011_query_execute = $study_information_1011_query->execute();

    foreach ($study_information_1011_query_execute as $study_information_1011_query_execute_nids) {

      $study_information_term = Term::load($study_information_1011_query_execute_nids);
      $study_info_1011[$study_information_1011_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_1011[$study_information_1011_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_1011', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformation1011',
      '#study_info_1011' => $study_info_1011,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for study1011 page.
   */
  public function study1011() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study1011_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_1011', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $study1011_page_query_execute = $study1011_page_query->execute();

    foreach ($study1011_page_query_execute as $study1011_page_query_execute_nids) {

      $entity_load = Node::load($study1011_page_query_execute_nids);

      $study1011[$study1011_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $study1011[$study1011_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $study1011[$study1011_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $study1011[$study1011_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $study1011[$study1011_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $study1011[$study1011_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $study1011[$study1011_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $study1011[$study1011_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        $study_information_data[] = '<a href="study-1011/study-information?type=item' . $i . '">' . str_replace(' (Study-1011)', '', $study_information_term_load->getName()) . '</a>';
        $i = $i + 1;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $study1011[$study1011_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $study1011[$study1011_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

      if (!empty($study_information_data)) {
        $study1011[$study1011_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'study1011',
      '#study1011' => $study1011,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study1064 page.
   */
  public function study1064() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study1064_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_1064', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $study1064_page_query_execute = $study1064_page_query->execute();

    foreach ($study1064_page_query_execute as $study1064_page_query_execute_nids) {

      $entity_load = Node::load($study1064_page_query_execute_nids);

      $study1064[$study1064_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $study1064[$study1064_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $study1064[$study1064_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $study1064[$study1064_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $study1064[$study1064_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $study1064[$study1064_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $study1064[$study1064_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $study1064[$study1064_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        $study_information_data[] = '<a href="study-1064/study-information?type=item' . $i . '">' . str_replace(' (Study-1064)', '', $study_information_term_load->getName()) . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $study1064[$study1064_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $study1064[$study1064_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $study1064[$study1064_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'study1064',
      '#study1064' => $study1064,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study_information_pooledefficacy page.
   */
  public function studyinformationpooledefficacy() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_pooledefficacy_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_pooled_efficacy', '=')
      ->sort('tid', 'ASC');

    $study_information_pooledefficacy_query_execute = $study_information_pooledefficacy_query->execute();

    foreach ($study_information_pooledefficacy_query_execute as $study_information_pooledefficacy_query_execute_nids) {

      $study_information_term = Term::load($study_information_pooledefficacy_query_execute_nids);
      $study_info_pooledefficacy[$study_information_pooledefficacy_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_pooledefficacy[$study_information_pooledefficacy_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_pooled_efficacy', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformationpooledefficacy',
      '#study_info_pooledefficacy' => $study_info_pooledefficacy,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for studypooledefficacy page.
   */
  public function studypooledefficacy() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $studypooledefficacy_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_pooled_efficacy', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $studypooledefficacy_page_query_execute = $studypooledefficacy_page_query->execute();

    foreach ($studypooledefficacy_page_query_execute as $studypooledefficacy_page_query_execute_nids) {

      $entity_load = Node::load($studypooledefficacy_page_query_execute_nids);

      $studypooledefficacy[$studypooledefficacy_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $studypooledefficacy[$studypooledefficacy_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $studypooledefficacy[$studypooledefficacy_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $studypooledefficacy[$studypooledefficacy_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $studypooledefficacy[$studypooledefficacy_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $studypooledefficacy[$studypooledefficacy_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $studypooledefficacy[$studypooledefficacy_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $studypooledefficacy[$studypooledefficacy_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        global $base_url;
        $var_url = $base_url . '/pooled-efficacy/study-information?type=item' . $i;
        $study_information_data[] = '<a href=' . $var_url . '>' . str_replace(' (Pooled Efficacy)', '', $study_information_term_load->getName()) . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $studypooledefficacy[$studypooledefficacy_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $studypooledefficacy[$studypooledefficacy_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $studypooledefficacy[$studypooledefficacy_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'studypooledefficacy',
      '#studypooledefficacy' => $studypooledefficacy,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study_information_pooledpaindiaryindex page.
   */
  public function studyinformationpooledpaindiaryindex() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_pooledpaindiaryindex_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_pooled_pain_diary_index', '=')
      ->sort('tid', 'ASC');

    $study_information_pooledpaindiaryindex_query_execute = $study_information_pooledpaindiaryindex_query->execute();

    foreach ($study_information_pooledpaindiaryindex_query_execute as $study_information_pooledpaindiaryindex_query_execute_nids) {

      $study_information_term = Term::load($study_information_pooledpaindiaryindex_query_execute_nids);
      $study_info_pooledpaindiaryindex[$study_information_pooledpaindiaryindex_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_pooledpaindiaryindex[$study_information_pooledpaindiaryindex_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_pooled_pain_diary_index', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformationpooledpaindiaryindex',
      '#study_info_pooledpaindiaryindex' => $study_info_pooledpaindiaryindex,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for studypooledpaindiaryindex page.
   */
  public function studypooledpaindiaryindex() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $studypooledpaindiaryindex_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_pooled_pain_diary_index', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $studypooledpaindiaryindex_page_query_execute = $studypooledpaindiaryindex_page_query->execute();

    foreach ($studypooledpaindiaryindex_page_query_execute as $studypooledpaindiaryindex_page_query_execute_nids) {

      $entity_load = Node::load($studypooledpaindiaryindex_page_query_execute_nids);

      $studypooledpaindiaryindex[$studypooledpaindiaryindex_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $studypooledpaindiaryindex[$studypooledpaindiaryindex_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $studypooledpaindiaryindex[$studypooledpaindiaryindex_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $studypooledpaindiaryindex[$studypooledpaindiaryindex_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $studypooledpaindiaryindex[$studypooledpaindiaryindex_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $studypooledpaindiaryindex[$studypooledpaindiaryindex_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $studypooledpaindiaryindex[$studypooledpaindiaryindex_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $studypooledpaindiaryindex[$studypooledpaindiaryindex_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        global $base_url;
        $var_url = $base_url . '/pooled-pain-diary-index/study-information?type=item' . $i;
        $study_information_data[] = '<a href=' . $var_url . '>' . $field_study_information_value->get('field_sub_title')->value . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $studypooledpaindiaryindex[$studypooledpaindiaryindex_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $studypooledpaindiaryindex[$studypooledpaindiaryindex_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $studypooledpaindiaryindex[$studypooledpaindiaryindex_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'studypooledpaindiaryindex',
      '#studypooledpaindiaryindex' => $studypooledpaindiaryindex,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study_information_pooledjointsafety page.
   */
  public function studyinformationpooledjointsafety() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_pooledjointsafety_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_pooled_joint_safety', '=')
      ->sort('tid', 'ASC');

    $study_information_pooledjointsafety_query_execute = $study_information_pooledjointsafety_query->execute();

    foreach ($study_information_pooledjointsafety_query_execute as $study_information_pooledjointsafety_query_execute_nids) {

      $study_information_term = Term::load($study_information_pooledjointsafety_query_execute_nids);
      $study_info_pooledjointsafety[$study_information_pooledjointsafety_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_pooledjointsafety[$study_information_pooledjointsafety_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_pooled_joint_safety', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformationpooledjointsafety',
      '#study_info_pooledjointsafety' => $study_info_pooledjointsafety,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for studypooledjointsafety page.
   */
  public function studypooledjointsafety() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $studypooledjointsafety_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_pooled_joint_safety', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $studypooledjointsafety_page_query_execute = $studypooledjointsafety_page_query->execute();

    foreach ($studypooledjointsafety_page_query_execute as $studypooledjointsafety_page_query_execute_nids) {

      $entity_load = Node::load($studypooledjointsafety_page_query_execute_nids);

      $studypooledjointsafety[$studypooledjointsafety_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $studypooledjointsafety[$studypooledjointsafety_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $studypooledjointsafety[$studypooledjointsafety_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $studypooledjointsafety[$studypooledjointsafety_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $studypooledjointsafety[$studypooledjointsafety_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $studypooledjointsafety[$studypooledjointsafety_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $studypooledjointsafety[$studypooledjointsafety_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $studypooledjointsafety[$studypooledjointsafety_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        global $base_url;
        $var_url = $base_url . '/pooled-joint-safety/study-information?type=item' . $i;
        $study_information_data[] = '<a href=' . $var_url . '>' . $field_study_information_value->get('field_sub_title')->value . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $studypooledjointsafety[$studypooledjointsafety_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $studypooledjointsafety[$studypooledjointsafety_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $studypooledjointsafety[$studypooledjointsafety_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'studypooledjointsafety',
      '#studypooledjointsafety' => $studypooledjointsafety,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study_information_pooledgeneralsafety page.
   */
  public function studyinformationpooledgeneralsafety() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_pooledgeneralsafety_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_pooled_general_safety', '=')
      ->sort('tid', 'ASC');

    $study_information_pooledgeneralsafety_query_execute = $study_information_pooledgeneralsafety_query->execute();

    foreach ($study_information_pooledgeneralsafety_query_execute as $study_information_pooledgeneralsafety_query_execute_nids) {

      $study_information_term = Term::load($study_information_pooledgeneralsafety_query_execute_nids);
      $study_info_pooledgeneralsafety[$study_information_pooledgeneralsafety_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_pooledgeneralsafety[$study_information_pooledgeneralsafety_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_pooled_general_safety', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformationpooledgeneralsafety',
      '#study_info_pooledgeneralsafety' => $study_info_pooledgeneralsafety,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for studypooledgeneralsafety page.
   */
  public function studypooledgeneralsafety() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $studypooledgeneralsafety_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_pooled_general_safety', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $studypooledgeneralsafety_page_query_execute = $studypooledgeneralsafety_page_query->execute();

    foreach ($studypooledgeneralsafety_page_query_execute as $studypooledgeneralsafety_page_query_execute_nids) {

      $entity_load = Node::load($studypooledgeneralsafety_page_query_execute_nids);

      $studypooledgeneralsafety[$studypooledgeneralsafety_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $studypooledgeneralsafety[$studypooledgeneralsafety_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $studypooledgeneralsafety[$studypooledgeneralsafety_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $studypooledgeneralsafety[$studypooledgeneralsafety_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $studypooledgeneralsafety[$studypooledgeneralsafety_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $studypooledgeneralsafety[$studypooledgeneralsafety_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $studypooledgeneralsafety[$studypooledgeneralsafety_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $studypooledgeneralsafety[$studypooledgeneralsafety_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        global $base_url;
        $var_url = $base_url . '/pooled-general-safety/study-information?type=item' . $i;
        $study_information_data[] = '<a href=' . $var_url . '>' . $field_study_information_value->get('field_sub_title')->value . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $studypooledgeneralsafety[$studypooledgeneralsafety_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $studypooledgeneralsafety[$studypooledgeneralsafety_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $studypooledgeneralsafety[$studypooledgeneralsafety_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }
    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');
    return [
      '#theme' => 'studypooledgeneralsafety',
      '#studypooledgeneralsafety' => $studypooledgeneralsafety,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

  /**
   * Custom template for study_information_1058 page.
   */
  public function studyinformation1058() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study_information_1058_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'study_information')
      ->condition('field_study_type', 'study_1058', '=')
      ->sort('tid', 'ASC');

    $study_information_1058_query_execute = $study_information_1058_query->execute();

    foreach ($study_information_1058_query_execute as $study_information_1058_query_execute_nids) {

      $study_information_term = Term::load($study_information_1058_query_execute_nids);
      $study_info_1058[$study_information_1058_query_execute_nids]['field_sub_title'] = $study_information_term->get('field_sub_title')->value;
      $study_info_1058[$study_information_1058_query_execute_nids]['field_detail_information'] = $study_information_term->get('field_detail_information')->value;

    }

    $study_information_tab_query = \Drupal::entityQuery('taxonomy_term')
      ->condition('status', 1, '=')
      ->condition('vid', 'tabs_and_links_for_study_informa')
      ->condition('field_study_type', 'study_1058', '=')
      ->sort('tid', 'ASC');
    $study_information_tab_query_execute = $study_information_tab_query->execute();

    foreach ($study_information_tab_query_execute as $study_information_tab_query_execute_nids) {

      $study_information_term_tab = Term::load($study_information_tab_query_execute_nids);

      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_title'] = $study_information_term_tab->get('field_first_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_first_tab_description'] = $study_information_term_tab->get('field_first_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_title'] = $study_information_term_tab->get('field_second_tab_title')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_second_tab_description'] = $study_information_term_tab->get('field_second_tab_description')->value;

      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_pervious_button'] = $study_information_term_tab->get('field_footer_pervious_button')->value;
      $study_info_tab[$study_information_tab_query_execute_nids]['field_footer_next_button'] = $study_information_term_tab->get('field_footer_next_button')->value;

    }

    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'studyinformation1058',
      '#study_info_1058' => $study_info_1058,
      '#study_info_tab' => $study_info_tab,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];

  }

  /**
   * Custom template for study1058 page.
   */
  public function study1058() {

    $database = \Drupal::database();

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $study1058_page_query = \Drupal::entityQuery('node')
      ->condition('status', 1, '=')
      ->condition('type', 'tanezumab_study')
      ->condition('field_study_type', 'study_1058', '=')
      ->condition('langcode', $lang_code, '=')
      ->sort('created', 'DESC');

    $study1058_page_query_execute = $study1058_page_query->execute();

    foreach ($study1058_page_query_execute as $study1058_page_query_execute_nids) {

      $entity_load = Node::load($study1058_page_query_execute_nids);

      $study1058[$study1058_page_query_execute_nids]['title'] = $entity_load->getTitle();

      $field_sub_description = $entity_load->get('field_sub_description')->value;

      if (!empty($field_sub_description)) {
        $study1058[$study1058_page_query_execute_nids]['field_sub_description'] = $field_sub_description;
      }

      $chart_section_first = $entity_load->get('body')->value;

      if (!empty($chart_section_first)) {
        $study1058[$study1058_page_query_execute_nids]['chart_section_first'] = $chart_section_first;
      }

      $chart_section_second = $entity_load->get('field_chart_section_second')->value;

      if (!empty($chart_section_second)) {
        $study1058[$study1058_page_query_execute_nids]['chart_section_second'] = $chart_section_second;
      }

      $field_first_tab_title = $entity_load->get('field_first_tab_title')->value;

      if (!empty($field_first_tab_title)) {
        $study1058[$study1058_page_query_execute_nids]['field_first_tab_title'] = $field_first_tab_title;
      }

      $field_first_tab_description = $entity_load->get('field_first_tab_description')->value;

      if (!empty($field_first_tab_description)) {
        $study1058[$study1058_page_query_execute_nids]['field_first_tab_description'] = $field_first_tab_description;
      }

      $field_second_tab_title = $entity_load->get('field_second_tab_title')->value;

      if (!empty($field_second_tab_title)) {
        $study1058[$study1058_page_query_execute_nids]['field_second_tab_title'] = $field_second_tab_title;
      }

      $field_second_tab_description = $entity_load->get('field_second_tab_description')->value;

      if (!empty($field_second_tab_description)) {
        $study1058[$study1058_page_query_execute_nids]['field_second_tab_description'] = $field_second_tab_description;
      }

      $field_study_information = $entity_load->get('field_study_information')->referencedEntities();
      $i = 1;
      foreach ($field_study_information as $field_study_information_value) {
        $study_information_term_tid = $field_study_information_value->get('tid')->value;
        $study_information_term_load = Term::load($study_information_term_tid);
        $term_url = '/taxonomy/term/' . $study_information_term_tid;
        $term_name_id = str_replace(' ', '_', $study_information_term_load->getName());
        // $study_information_data[] = '<a href="'.$term_url.'">'.$study_information_term_load->getName().'</a>';
        $study_information_data[] = '<a href="study-1058/study-information?type=item' . $i . '">' . str_replace(' (Study-1058)', '', $study_information_term_load->getName()) . '</a>';
        $i = $i + 1;
      }

      if (!empty($study_information_data)) {
        $study1058[$study1058_page_query_execute_nids]['study_information_data'] = $study_information_data;
      }

      $field_co_primary_endpoints = $entity_load->get('field_co_primary_endpoints')->referencedEntities();

      foreach ($field_co_primary_endpoints as $field_co_primary_endpoints_value) {
        $field_co_primary_endpoints_term_tid = $field_co_primary_endpoints_value->get('tid')->value;
        $field_co_primary_endpoints_term_load = Term::load($field_co_primary_endpoints_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_co_primary_endpoints_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_co_primary_endpoints_tid_term_url = $term_alias;
        $field_co_primary_endpoints_data[] = '<a href="' . $field_co_primary_endpoints_tid_term_url . '">' . str_replace(' (Study-1058)', '', $field_co_primary_endpoints_term_load->getName()) . '</a>';
      }

      if (!empty($field_co_primary_endpoints_data)) {
        $study1058[$study1058_page_query_execute_nids]['field_co_primary_endpoints_data'] = $field_co_primary_endpoints_data;
      }

      $field_secondary_endpoints = $entity_load->get('field_secondary_endpoints')->referencedEntities();

      foreach ($field_secondary_endpoints as $field_secondary_endpoints_value) {
        $field_secondary_endpoints_term_tid = $field_secondary_endpoints_value->get('tid')->value;
        $field_secondary_endpoints_term_load = Term::load($field_secondary_endpoints_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_secondary_endpoints_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_secondary_endpoints_tid_term_url = $term_alias;
        $field_secondary_endpoints_data[] = '<a href="' . $field_secondary_endpoints_tid_term_url . '">' . str_replace(' (Study-1058)', '', $field_secondary_endpoints_term_load->getName()) . '</a>';
      }

      if (!empty($field_secondary_endpoints_data)) {
        $study1058[$study1058_page_query_execute_nids]['field_secondary_endpoints_data'] = $field_secondary_endpoints_data;
      }

      $field_onset_maintenance_endpoint = $entity_load->get('field_onset_maintenance_endpoint')->referencedEntities();

      foreach ($field_onset_maintenance_endpoint as $field_onset_maintenance_endpoint_value) {
        $field_onset_maintenance_endpoint_term_tid = $field_onset_maintenance_endpoint_value->get('tid')->value;
        $field_onset_maintenance_endpoint_term_load = Term::load($field_onset_maintenance_endpoint_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_onset_maintenance_endpoint_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_onset_maintenance_endpoint_tid_term_url = $term_alias;
        $field_onset_maintenance_endpoint_data[] = '<a href="' . $field_onset_maintenance_endpoint_tid_term_url . '">' . str_replace(' (Study-1058)', '', $field_onset_maintenance_endpoint_term_load->getName()) . '</a>';
      }

      if (!empty($field_onset_maintenance_endpoint_data)) {
        $study1058[$study1058_page_query_execute_nids]['field_onset_maintenance_endpoint_data'] = $field_onset_maintenance_endpoint_data;
      }

      $field_other_endpoints = $entity_load->get('field_other_endpoints')->referencedEntities();

      foreach ($field_other_endpoints as $field_other_endpoints_value) {
        $field_other_endpoints_term_tid = $field_other_endpoints_value->get('tid')->value;
        $field_other_endpoints_term_load = Term::load($field_other_endpoints_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_other_endpoints_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_other_endpoints_tid_term_url = $term_alias;
        $field_other_endpoints_data[] = '<a href="' . $field_other_endpoints_tid_term_url . '">' . str_replace(' (Study-1058)', '', $field_other_endpoints_term_load->getName()) . '</a>';
      }

      if (!empty($field_other_endpoints_data)) {
        $study1058[$study1058_page_query_execute_nids]['field_other_endpoints_data'] = $field_other_endpoints_data;
      }

      $field_other_joint_safety_joint_a = $entity_load->get('field_other_joint_safety_joint_a')->referencedEntities();

      foreach ($field_other_joint_safety_joint_a as $field_other_joint_safety_joint_a_value) {
        $field_other_joint_safety_joint_a_term_tid = $field_other_joint_safety_joint_a_value->get('tid')->value;
        $field_other_joint_safety_joint_a_term_load = Term::load($field_other_joint_safety_joint_a_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_other_joint_safety_joint_a_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_other_joint_safety_joint_a_tid_term_url = $term_alias;
        $field_other_joint_safety_joint_a_data[] = '<a href="' . $field_other_joint_safety_joint_a_tid_term_url . '">' . str_replace(' (Study-1058)', '', $field_other_joint_safety_joint_a_term_load->getName()) . '</a>';
      }

      if (!empty($field_other_joint_safety_joint_a_data)) {
        $study1058[$study1058_page_query_execute_nids]['field_other_joint_safety_joint_a_data'] = $field_other_joint_safety_joint_a_data;
      }

      $field_safety_endpoints = $entity_load->get('field_safety_endpoints')->referencedEntities();

      foreach ($field_safety_endpoints as $field_safety_endpoints_value) {
        $field_safety_endpoints_term_tid = $field_safety_endpoints_value->get('tid')->value;
        $field_safety_endpoints_term_load = Term::load($field_safety_endpoints_term_tid);
        $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field_safety_endpoints_term_tid);
        $term_alias = $term->get('path')->alias;
        $field_safety_endpoints_tid_term_url = $term_alias;
        $field_safety_endpoints_data[] = '<a href="' . $field_safety_endpoints_tid_term_url . '">' . str_replace(' (Study-1058)', '', $field_safety_endpoints_term_load->getName()) . '</a>';
      }

      if (!empty($field_safety_endpoints_data)) {
        $study1058[$study1058_page_query_execute_nids]['field_safety_endpoints_data'] = $field_safety_endpoints_data;
      }

      $field_footer_pervious_button = $entity_load->get('field_footer_pervious_button')->value;

      if (!empty($field_footer_pervious_button)) {
        $study1058[$study1058_page_query_execute_nids]['field_footer_pervious_button'] = $field_footer_pervious_button;
      }

      $field_footer_next_button = $entity_load->get('field_footer_next_button')->value;

      if (!empty($field_footer_next_button)) {
        $study1058[$study1058_page_query_execute_nids]['field_footer_next_button'] = $field_footer_next_button;
      }

    }
    $tanezumab_config = \Drupal::config('tanezumab_clinical_data.settings');
    $tanezumab_header = $tanezumab_config->get('tanezumab_header');
    $tanezumab_footer = $tanezumab_config->get('tanezumab_footer');
    $tanezumab_menu = $tanezumab_config->get('tanezumab_menu');

    return [
      '#theme' => 'study1058',
      '#study1058' => $study1058,
      '#tanezumab_header' => $tanezumab_header,
      '#tanezumab_footer' => $tanezumab_footer,
      '#tanezumab_menu' => $tanezumab_menu,
    ];
  }

}
