<?php

namespace MediaWiki\Skins\Wilds2025;

use SkinMustache;

/**
 * 
 */
class SkinWilds2025 extends SkinMustache
{
  public function getTemplateData()
  {
    $data = parent::getTemplateData();
    $data['html-myskin-hello-world'] = '<strong>Hello world!</strong>'; // or $this->msg('msg-key')->parse();
    return $data;
  }
}
