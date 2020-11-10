<?php
/**
 *
 * 自由列表
 *
 * @version        $Id: freelist.php 1 15:38 2010年7月8日 $
 * @package        DedeCMS.Site
 * @copyright      Copyright (c) 2007 - 2020, 上海卓卓网络科技有限公司.
 * @license        http://help.dedecms.com/usersguide/license.html
 * @link           http://www.dedecms.com
 */
require_once(dirname(__FILE__)."/../include/common.inc.php");
require_once(DEDEINC."/arc.freelist.class.php");
if(!empty($lid)) $tid = $lid;

$tid = (isset($tid) && is_numeric($tid) ? $tid : 0);
if($tid==0) die(" Request Error! ");

$fl = new FreeList($tid);
$fl->Display();