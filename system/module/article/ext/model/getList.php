<?php
    /** 
     * Extend get article list.
     * 
     * @param  string  $type 
     * @param  array   $categories 
     * @param  string  $orderBy 
     * @param  object  $pager 
     * @access public
     * @return array
     */
    public function getList($type, $categories, $orderBy, $pager = null)
    {
        if($type == 'page')
        {
            $articles = $this->dao->select('*')->from(TABLE_ARTICLE)
                ->where('type')->eq('page')
                ->orderBy('id_desc')
                ->page($pager)
                ->fetchAll('id');
        }
        else
        {
            /* Get articles(use groupBy to distinct articles).  */
            $articles = $this->dao->select('t1.*, t2.category')->from(TABLE_ARTICLE)->alias('t1')
                ->leftJoin(TABLE_RELATION)->alias('t2')->on('t1.id = t2.id')
                ->where('t1.type')->eq($type)
                ->beginIf(defined('RUN_MODE') and RUN_MODE == 'front')
                ->andWhere('t1.addedDate')->le(helper::now())
                ->andWhere('t1.status')->eq('normal')
                ->fi()
                ->beginIf($categories)->andWhere('t2.category')->in($categories)->fi()
                ->groupBy('t2.id')				
                ->orderBy('isTop_desc, '.$orderBy)
                ->page($pager)
                ->fetchAll('id');

        }
        if(!$articles) return array();

        /* Get categories for these articles. */
        $categories = $this->dao->select('t2.id, t2.name, t2.alias, t1.id AS article')
            ->from(TABLE_RELATION)->alias('t1')
            ->leftJoin(TABLE_CATEGORY)->alias('t2')->on('t1.category = t2.id')
            ->where('t2.type')->eq($type)
            ->beginIf($categories)->andWhere('t1.category')->in($categories)->fi()
            ->fetchGroup('article', 'id');

        /* Assign categories to it's article. */
        foreach($articles as $article) $article->categories = isset($categories[$article->id]) ? $categories[$article->id] : array();

        /* Get images for these articles. */
        $images = $this->loadModel('file')->getByObject($type, array_keys($articles), $isImage = true);

		/* Assign images to it's article. */
        foreach($articles as $article)
        {
            if(empty($images[$article->id])) continue;

            $article->image = new stdclass();
            $article->image->list    = $images[$article->id];
            $article->image->primary = $article->image->list[0];
        }

        /* Assign summary to it's article. */
        foreach($articles as $article) $article->summary = empty($article->summary) ? helper::substr(strip_tags($article->content), 200, '...') : $article->summary;

        /* Assign comments to it's article. */
        $articleIdList = array_keys($articles);
        $comments = $this->dao->select("objectID, count(*) as count")->from(TABLE_MESSAGE)
            ->where('type')->eq('comment')
            ->andWhere('objectType')->eq('article')
            ->andWhere('objectID')->in($articleIdList)
            ->andWhere('status')->eq(1)
            ->groupBy('objectID')
            ->fetchPairs('objectID', 'count');
        foreach($articles as $article) $article->comments = isset($comments[$article->id]) ? $comments[$article->id] : 0;
 
        return $articles;
    }
