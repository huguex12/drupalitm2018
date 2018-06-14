<?php

namespace Drupal\itm_lab3\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DateInformationBlock' block.
 *
 * @Block(
 *  id = "date_information_block",
 *  admin_label = @Translation("Date information block"),
 * )
 */
class DateInformationBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
   public function build() {
     $build = [];
     $build['date_information_block']['#markup'] = format_date(\Drupal::time()->getRequestTime(), 'long');

     return $build;
   }

   /**
    * {@inheritdoc}
    */
   function format_date($timestamp, $type) {
   return \Drupal::service('date.formatter')->format($timestamp, $type);
 }

}
