<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
/**
 * The MIT License
 *
 * Copyright 2013 Eric VILLARD <dev@eviweb.fr>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * 
 * @package     evidev\laravel4\extensions\workbench\tests
 * @author      Eric VILLARD <dev@eviweb.fr>
 * @copyright	(c) 2013 Eric VILLARD <dev@eviweb.fr>
 * @license     http://opensource.org/licenses/MIT MIT License
 */

namespace evidev\laravel4\extensions\workbench\tests;

final class Bootstrapper
{
    private $nspaths;

    private function __construct()
    {
    }

    public static function create()
    {
        return new static();
    }

    public function prepareNsPaths($nspaths = array())
    {
        $this->nspaths = $nspaths;
        return $this;
    }
    
    public function loadFiles($files = array())
    {
        foreach ($files as $file) {
            if (file_exists($file)) {
                require_once $file;
            }
        }
        return $this;
    }

    public function run()
    {
        $loader = require(__DIR__.'/../vendor/autoload.php');
        foreach ($this->nspaths as $ns => $paths) {
            $loader->add($ns, $paths);
        }
    }
}

Bootstrapper::create()
    ->prepareNsPaths(
        array('evidev' => array(__DIR__))
    )
    ->loadFiles(
        array(__DIR__.'/../vendor/antecedent/patchwork/Patchwork.php')
    )->run();
