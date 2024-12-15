<?php

namespace MediaWiki\Skins\Wilds2025\Components;

/**
 * Component interface for managing Wilds-modified components
 *
 * @internal
 */
interface WildsComponent
{
  /**
   * @return array of Mustache compatible data
   */
  public function getTemplateData(): array;
}
