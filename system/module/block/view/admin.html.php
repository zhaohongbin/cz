<?php
/**
 * The browse view file of block module of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv11.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
?>
<?php include '../../common/view/header.admin.html.php';?>
<div class='panel'>
  <div class='panel-heading'>
    <strong><i class='icon-th'></i> <?php echo $lang->block->browseBlocks;?></strong>
    <?php foreach($templates as $template):?>
      <?php echo html::a(helper::createLink('block', 'admin', 'template=' . $template['code']), $template['name'], $currentTemplate == $template['code'] ? "class='active'" : "");?>
    <?php endforeach;?>
    <div class='panel-actions'>
      <?php commonModel::printLink('block', 'create', "template=$currentTemplate", '<i class="icon-plus"></i> ' . $lang->block->create, 'class="btn btn-primary"');?>
    </div>
  </div>
  <table class='table table-bordered table-hover table-striped'>
    <tr class='text-center'>
      <th class='text-center w-100px'><?php echo $lang->block->id;?></th>
      <th><?php echo $lang->block->title;?></th>
      <th><?php echo $lang->block->type;?></th>
      <th class='w-200px'><?php echo $lang->actions;?></th>
    </tr>
    <?php foreach($blocks as $block):?>
    <tr class='text-center'>
      <td><?php echo $block->id;?></td>
      <td class='text-left'><?php echo $block->title;?></td>
      <td><?php echo $lang->block->$currentTemplate->typeList[$block->type];?></td>
      <td>
        <?php 
        commonModel::printLink('block', 'edit',   "template=$currentTemplate&blockID=$block->id&type=$block->type", $lang->edit);
        commonModel::printLink('block', 'delete', "blockID=$block->id", $lang->delete, "class='deleter'");
        ?>
      </td>
    </tr>
    <?php endforeach;?>
    <tr>
      <td colspan='4'> <?php echo $pager->get(); ?> </td>
    </tr>
  </table>
</div>
<?php include '../../common/view/footer.admin.html.php';?>
