<?php

namespace MediaWiki\Skins\Wilds2025;

use MediaWiki\MainConfigNames;
use MediaWiki\Skin\SkinComponentUtils;
use SkinMustache;

/**
 * 
 */
class SkinWilds2025 extends SkinMustache
{
  public function getTemplateData()
  {
    // http://localhost/mhwilds_wiki_sandbox/index.php/Main_page?useskin=skinjson
    $data = parent::getTemplateData();
    # Example
    $data['html-myskin-hello-world'] = '<strong>Hello world!</strong>'; // or $this->msg('msg-key')->parse();
    # Custom data set
    # ------------------------------------
    // Resources
    $data['resources'] = $GLOBALS['wgResourceBasePath'] . '/resources';
    // User
    $data['user'] = [
      "name" => $this->username,
      "page_uri" => $this->userpageUrlDetails['href'],
      // "talk_uri" => $this->getConfig()->get(MainConfigNames::ScriptPath),
    ];
    $data['user-menu'] = $data['data-portlets']['data-user-menu']['array-items'];

    return $data;
  }
}
