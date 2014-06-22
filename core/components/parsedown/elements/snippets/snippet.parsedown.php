<?php
/**
 * Parsedown
 *
 * @author Victor Häggqvist <victor@snilius.com>
 * @copyright Copyright 2014, Victor Häggqvist
 *
 * DESCRIPTION
 *
 * This snippet is Parsedown (https://github.com/erusev/parsedown) packaged for easy use in MODx.
 * Parsedown is a parser for Markdown in PHP with support for GFM (GitHub Flavored Markdown)
 *
 * USAGE
 *
 * [[*content:Parsedown]]
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
 */
$corePath = $modx->getOption('parsedown.core_path', null, $modx->getOption('core_path').'components/parsedown/');

require $corePath.'model/vendor/erusev/parsedown/Parsedown.php';

$parsedownmodx = $modx->getService('parsedownmodx', 'ParsedownMODx', $corePath.'model/parsedown/', $scriptProperties);
if (!($parsedownmodx instanceof ParsedownMODx)) return '';

$html = $parsedownmodx->parseText($input);

return $html;
