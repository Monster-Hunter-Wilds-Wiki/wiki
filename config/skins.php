<?php

## Default skin: you can change the default skin. Use the internal symbolic
## names, e.g. 'vector' or 'monobook':
$wgDefaultSkin = 'vector-2022';
// $wgDefaultSkin = 'example';

# Enabled skins.
# The following skins were automatically enabled:
// wfLoadSkin('MinervaNeue');
// wfLoadSkin('MonoBook');
// wfLoadSkin('Timeless');
// wfLoadSkin('Mirage');
wfLoadSkin('Vector');
wfLoadSkin('Wilds2025');

// Load debug SkinJson skin if in dev
if ($env['environment'] === 'develop') {
  wfLoadSkin('SkinJson');
}
