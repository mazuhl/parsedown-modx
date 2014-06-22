<?php

/**
 * ParsedownMODx - A MODx Parsedown wrapper
 *
 * PHP version 5
 *
 * The MIT License (MIT)
 *
 * Copyright (c) 2014 Victor Häggqvist
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @author Victor Häggqvist <victor@snilius.com>
 * @copyright Copyright 2014, Victor Häggqvist
 * @package parsedown
 * @subpackage core
 */

class ParsedownMODx {

  /**
   * A modX instance
   * @var modX (Object)
   */
  public $modx;

  /**
   * Array of config stuff
   * @var array
   */
  public $config = array();

  /**
   * Parsedown instance
   * @var Parsedown (Object)
   */
  private $parsedown;

  function __construct(modX &$modx,array $config = array()) {
    $this->modx = &$modx;

    $basePath = $this->modx->getOption('parsedownmodx.core_path', $config,$this->modx->getOption('core_path').'components/parsedownmodx/');
    $assetsUrl = $this->modx->getOption('parsedownmodx.assets_url', $config,$this->modx->getOption('assets_url').'components/parsedownmodx/');
    $this->config = array_merge(array(
        'basePath' => $basePath,
        'corePath' => $basePath,
        'modelPath' => $basePath.'model/',
        'processorsPath' => $basePath.'processors/',
        'templatesPath' => $basePath.'templates/',
        'chunksPath' => $basePath.'elements/chunks/',
        'jsUrl' => $assetsUrl.'js/',
        'cssUrl' => $assetsUrl.'css/',
        'assetsUrl' => $assetsUrl,
        'connectorUrl' => $assetsUrl.'connector.php',
    ), $config);

    $this->parsedown = new Parsedown();
  }

  public function parseText($text) {
    return $this->parsedown->text($text);
  }
}
?>
