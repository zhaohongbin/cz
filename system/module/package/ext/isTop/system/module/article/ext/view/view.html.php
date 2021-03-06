<?php 
include TPL_ROOT . 'common/header.html.php'; 
include TPL_ROOT . 'common/treeview.html.php'; 

/* set categoryPath for topNav highlight. */
js::set('path', $article->path);
js::set('articleID', $article->id);
js::set('categoryID', $category->id);
js::set('categoryPath', explode(',', trim($category->path, ',')));
css::internal($article->css);
js::execute($article->js);
?>
<?php $common->printPositionBar($category, $article);?>
<div class='row'>
  <div class='col-md-9 col-main'>
    <div class='article'>
      <header>
        <h1>
			<?php
				echo $article->title;
				if($article->isTop){
					echo "<span class='label label-isTop'>{$lang->article->isTop}</span>";
				}
			?>
		</h1>
        <dl class='dl-inline'>
          <dd data-toggle='tooltip' data-placement='top' data-original-title='<?php printf($lang->article->lblAddedDate, formatTime($article->addedDate));?>'><i class='icon-time icon-large'></i> <?php echo formatTime($article->addedDate); ?></dd>
          <dd data-toggle='tooltip' data-placement='top' data-original-title='<?php printf($lang->article->lblAuthor, $article->author);?>'><i class='icon-user icon-large'></i> <?php echo $article->author; ?></dd>
          <?php if($article->source != 'original'):?>
          <dt><?php echo $lang->article->sourceList[$article->source] . $lang->colon;?></dt>
          <dd><?php $article->copyURL ? print(html::a($article->copyURL, $article->copySite, "target='_blank'")) : print($article->copySite); ?></dd>
          <?php else: ?>
          <span class='label label-success'><?php echo $lang->article->sourceList[$article->source]; ?></span>
          <?php endif;?>
          <dd class='pull-right'>
            <?php
            if(!empty($this->config->oauth->sina))
            {
                $sina = json_decode($this->config->oauth->sina);
                if($sina->widget) echo "<div class='sina-widget'>" . $sina->widget . '</div>';
            }
            ?>
            <span class='label label-warning' data-toggle='tooltip' data-placement='top' data-original-title='<?php printf($lang->article->lblViews, $article->views);?>'><i class='icon-eye-open'></i> <?php echo $article->views; ?></span>
          </dd>
        </dl>
        <?php if($article->summary):?>
        <section class='abstract'><strong><?php echo $lang->article->summary;?></strong><?php echo $lang->colon . $article->summary;?></section>
        <?php endif; ?>
      </header>
      <section class='article-content'>
        <?php echo $article->content;?>
      </section>
      <section class="article-files">
        <?php $this->loadModel('file')->printFiles($article->files);?>
      </section>
      <footer>
        <div class='article-moreinfo clearfix'>
          <?php if($article->editor):?> 
          <?php $editor = $this->loadModel('user')->getByAccount($article->editor);?>
          <?php if(!empty($editor)): ?> 
          <p class='text-right pull-right'><?php printf($lang->article->lblEditor, $editor->realname, formatTime($article->editedDate));?></p>
          <?php endif;?>
          <?php endif;?>
          <?php if($article->keywords):?>
          <p class='small'><strong class="text-muted"><?php echo $lang->article->keywords;?></strong><span class="article-keywords"><?php echo $lang->colon . $article->keywords;?></span></p>
          <?php endif; ?>
        </div>
        <?php extract($prevAndNext);?>
        <ul class='pager pager-justify'>
          <?php if($prev): ?>
          <li class='previous'><?php echo html::a(inlink('view', "id=$prev->id", "category={$category->alias}&name={$prev->alias}"), '<i class="icon-arrow-left"></i> ' . $prev->title); ?></li>
          <?php else: ?>
          <li class='preious disabled'><a href='###'><i class='icon-arrow-left'></i> <?php print($lang->article->none); ?></a></li>
          <?php endif; ?>
          <?php if($next):?>
          <li class='next'><?php echo html::a(inlink('view', "id=$next->id", "category={$category->alias}&name={$next->alias}"), $next->title . ' <i class="icon-arrow-right"></i>'); ?></li>
          <?php else:?>
          <li class='next disabled'><a href='###'> <?php print($lang->article->none); ?><i class='icon-arrow-right'></i></a></li>
          <?php endif; ?>
        </ul>
      </footer>
    </div>
    <div id='commentBox'><?php echo $this->fetch('message', 'comment', "objectType=article&objectID={$article->id}");?></div>
  </div>
  <div class='col-md-3 col-side'><?php $this->block->printRegion($layouts, 'article_view', 'side');?></div>
</div>
<?php include TPL_ROOT . 'common/footer.html.php'; ?>
