<?php
/**
 * @package parsedown
 * @subpackage build
 */
function getSnippetContent($filename) {
  $o = file_get_contents($filename);
  $o = trim(str_replace(array('<?php','?>'),'',$o));
  return $o;
}

$snippets = array();

$snippets[1] = $modx->newObject('modSnippet');
$snippets[1]->fromArray(array(
  'id' => 1,
  'name' => 'Parsedown',
  'description' => 'A markdown parser with GFM support',
  'snippet' => getSnippetContent($sources['elements'].'snippets/snippet.parsedown.php'),
),'',true,true);

return $snippets;

