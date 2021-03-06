<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
/**
 * Implements reading of SVN info XML.
 *
 * +----------------------------------------------------------------------+
 * | This LICENSE is in the BSD license style.                            |
 * | http://www.opensource.org/licenses/bsd-license.php                   |
 * |                                                                      |
 * | Redistribution and use in source and binary forms, with or without   |
 * | modification, are permitted provided that the following conditions   |
 * | are met:                                                             |
 * |                                                                      |
 * |  * Redistributions of source code must retain the above copyright    |
 * |    notice, this list of conditions and the following disclaimer.     |
 * |                                                                      |
 * |  * Redistributions in binary form must reproduce the above           |
 * |    copyright notice, this list of conditions and the following       |
 * |    disclaimer in the documentation and/or other materials provided   |
 * |    with the distribution.                                            |
 * |                                                                      |
 * |  * Neither the name of Clay Loveless nor the names of contributors   |
 * |    may be used to endorse or promote products derived from this      |
 * |    software without specific prior written permission.               |
 * |                                                                      |
 * | THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS  |
 * | "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT    |
 * | LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS    |
 * | FOR A PARTICULAR PURPOSE ARE DISCLAIMED.  IN NO EVENT SHALL THE      |
 * | COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,  |
 * | INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, |
 * | BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;     |
 * | LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER     |
 * | CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT   |
 * | LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN    |
 * | ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE      |
 * | POSSIBILITY OF SUCH DAMAGE.                                          |
 * +----------------------------------------------------------------------+
 *
 * PHP version 5
 *
 * @category  VersionControl
 * @package   VersionControl_SVN
 * @author    Alexander Opitz <opitz.alexander@gmail.com>
 * @copyright 2012 Alexander Opitz
 * @license   http://www.opensource.org/licenses/bsd-license.php BSD License
 * @link      http://pear.php.net/package/VersionControl_SVN
 */

require_once 'VersionControl/SVN/Parser/XML.php';

/**
 * Class VersionControl_SVN_Parser_Info - XML Parser for Subversion Info output
 *
 * @category VersionControl
 * @package  VersionControl_SVN
 * @author   Alexander Opitz <opitz.alexander@gmail.com>
 * @license  http://www.opensource.org/licenses/bsd-license.php BSD License
 * @version  @version@
 * @link     http://pear.php.net/package/VersionControl_SVN
 */
class VersionControl_SVN_Parser_XML_Info
    extends VersionControl_SVN_Parser_XML
{
    /**
     * @var array $xmlPathConfig The XML configuration (like a DTD).
     */
    protected $xmlPathConfig = array(
        'info' => array(
            'path' => array(
                'entry' => array(
                    'attribute' => array('kind', 'path', 'revision'),
                    'quantifier' => '+',
                    'path' => array(
                        'url' => array(
                            'config' => 'string',
                        ),
                        'relative-url' => array(
                            'config' => 'string',
                        ),
                        'repository' => array(
                            'path' => array(
                                'root' => array(
                                    'config' => 'string',
                                ),
                                'uuid' => array(
                                    'config' => 'string',
                                ),
                            ),
                        ),
                        'wc-info' => array(
                            'path' => array(
                                'wcroot-abspath' => array(
                                    'config' => 'string',
                                ),
                                'schedule' => array(
                                    'config' => 'string',
                                ),
                                'depth' => array(
                                    'config' => 'string',
                                ),
                            ),
                        ),
                        'commit' => array(
                            'attribute' => array('revision'),
                            'path' => array(
                                'author' => array(
                                    'config' => 'string',
                                ),
                                'date' => array(
                                    'config' => 'string',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    );
}
?>