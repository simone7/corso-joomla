<?php
/**
 * @copyright	Copyright (C) 2011 Mark Dexter & Louis Landry. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Output as a list of links in a ul element
?>
<ul class="joompro<?php echo $moduleclass_sfx; ?>">
<h1>Il mio primo override</h1>
<ul class="latestnews<?php echo $moduleclass_sfx;?>">
    <?php foreach ($list as $item) : ?>
    <li><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></li>
    <?php echo substr($item->introtext, 0, 50) . '...'; ?>
<?php endforeach; ?>
</ul>
</ul>