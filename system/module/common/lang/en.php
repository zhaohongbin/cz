<?php
/**
 * The common simplified chinese file of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv11.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     chanzhiEPS
 * @version     $Id$
 * @link        http://www.zentao.net
 */
/* Common sign setting. */
$lang->colon      = ' : ';
$lang->prev       = '‹';
$lang->next       = '›';
$lang->laquo      = '&laquo;';
$lang->raquo      = '&raquo;';
$lang->minus      = ' - ';
$lang->dollarSign = '$';
$lang->divider    = "<span class='divider'>{$lang->raquo}</span> ";
$lang->back2Top   = 'T<br/>O<br/>P';
$lang->cancel = 'cancel';

/* Lang items for xirang. */
$lang->chanzhiEPS     = 'chanzhiEPS';
$lang->chanzhiEPSx    = 'Chanzhi';
$lang->agreement      = "I Agree to the <a href='http://zpl.pub/page/zplv11.html' target='_blank'>Z PUBLIC LICENSE 1.1</a>, <span class='text-danger'>and promise to keep the logo, link of ChanZhi.</span>";
$lang->poweredBy      = "<a href='http://www.chanzhi.org/?v=%s' target='_blank' title='%s'>%s</a>";
$lang->poweredByAdmin = "<span id='poweredBy'>Powered by <a href='http://www.chanzhi.org/?v=%s' target='_blank' title='%s'>ChanzhiEPS %s</a></span>";
$lang->newVersion     = "Notice: ChanzhiEPS has been upgraded to version: <span id='version'></span> at <span id='releaseDate'></span>. <a href='' target='_blank' id='upgradeLink'>DownLoad Now</a>";

/* Global lang items. */
$lang->home           = 'Home';
$lang->welcome        = 'Welcome, <strong>%s</strong>!';
$lang->messages       = "<strong><i class='icon-comment-alt'></i> %s</strong>";
$lang->todayIs        = 'Today is %s, ';
$lang->aboutUs        = 'About';
$lang->link           = 'Links';
$lang->frontHome      = 'Front';
$lang->forumHome      = 'Forum';
$lang->bookHome       = 'Book';
$lang->dashboard      = 'Dashboard';
$lang->register       = 'Register';
$lang->logout         = 'Logout';
$lang->login          = 'Login';
$lang->account        = 'Account';
$lang->password       = 'Password';
$lang->changePassword = 'Change password';
$lang->forgotPassword = 'Forgot password?';
$lang->currentPos     = 'Positon';
$lang->categoryMenu   = 'Categories';
$lang->wechatTip      = 'Wechat';
$lang->qrcodeTip      = 'Mobile';

/* Global action items. */
$lang->reset          = 'Reset';
$lang->edit           = 'Edit';
$lang->copy           = 'Copy';
$lang->hide           = 'Hide';
$lang->delete         = 'Delete';
$lang->close          = 'Close';
$lang->save           = 'Save';
$lang->confirm        = 'Confirm';
$lang->send           = 'Send';
$lang->preview        = 'Preview';
$lang->goback         = 'Back';
$lang->search         = 'Search';
$lang->more           = 'More';
$lang->actions        = 'Actions';
$lang->feature        = 'Feature';
$lang->year           = 'Year';
$lang->selectAll      = 'All';
$lang->selectReverse  = 'Reverse';
$lang->loading        = 'Loading...';
$lang->saveSuccess    = 'Successfully saved.';
$lang->setSuccess     = 'Successfully saved.';
$lang->sendSuccess    = 'Successfully sended.';
$lang->deleteSuccess  = 'Successfully deleted.';
$lang->fail           = 'Failed';
$lang->noResultsMatch = 'No matched results.';
$lang->alias          = 'For SEO, could be numbers, words enclosed by ".';

$lang->setOkFile = <<<EOT
<h5>For security reason, please do these steps. </h5>
<p>Create %s file. If this file exists already, reopen it and save again.</p>
EOT;

/* Items for javascript. */
$lang->js = new stdclass();
$lang->js->confirmDelete = 'Are sure to delete it?';
$lang->js->deleteing     = 'Deleting...';
$lang->js->doing         = 'Processing...';
$lang->js->loading       = 'Loading...';
$lang->js->timeout       = 'Timeout';
$lang->js->errorThrown   = '<h4>Something error ：</h4>';

/* Contact fields*/
$lang->company = new stdclass();
$lang->company->contactUs = 'Contact US';
$lang->company->contacts  = 'Contacts';
$lang->company->address   = 'Address';
$lang->company->phone     = 'Phone';
$lang->company->email     = 'Email';
$lang->company->fax       = 'Fax';
$lang->company->qq        = 'QQ';
$lang->company->skype     = 'Skype';
$lang->company->weibo     = 'Weibo';
$lang->company->weixin    = 'Wechat';
$lang->company->wangwang  = 'Wangwang';
$lang->company->site      = 'Site';

/* Sitemap settings. */
$lang->sitemap = new stdclass();
$lang->sitemap->common = 'Sitemap';

/* The main menus. */
$lang->menu = new stdclass();
$lang->menu->admin    = 'Home|admin|index|';
$lang->menu->article  = 'Article|article|admin|';
$lang->menu->blog     = 'Blog|article|admin|type=blog';
$lang->menu->product  = 'Product|product|admin|';
$lang->menu->book     = 'Book|book|admin|';
$lang->menu->page     = 'Page|article|admin|type=page';
$lang->menu->forum    = 'Forum|forum|admin|';
$lang->menu->site     = 'Site|site|setbasic|';
$lang->menu->ui       = 'UI|ui|setlogo|';
$lang->menu->company  = 'Company|company|setbasic|';
$lang->menu->user     = 'User|user|admin|';
$lang->menu->order    = 'Order|order|admin|';
$lang->menu->feedback = 'Feedback|message|admin|';
$lang->menu->package  = 'Extension|package|browse|';

/* Menu groups setting. */
$lang->menuGroups = new stdclass();
$lang->menuGroups->tag     = 'site';
$lang->menuGroups->mail    = 'site';
$lang->menuGroups->nav     = 'site';
$lang->menuGroups->links   = 'site';
$lang->menuGroups->wechat  = 'site';
$lang->menuGroups->group   = 'site';
$lang->menuGroups->block   = 'ui';
$lang->menuGroups->slide   = 'ui';
$lang->menuGroups->tree    = 'article';
$lang->menuGroups->message = 'feedback';

/* Menu of article module. */
$lang->article = new stdclass();
$lang->article->menu = new stdclass();
$lang->article->menu->browse = 'All articles|article|admin|';

/* Menu of blog module. */
$lang->blog = new stdclass();
$lang->blog->menu = new stdclass();
$lang->blog->menu->browse = 'All blogs|article|admin|type=blog';

/* Menu of page module. */
$lang->page = new stdclass();
$lang->page->menu = new stdclass();
$lang->page->menu->browse = array('link' => 'List|article|admin|type=page', 'alias' => 'edit');
$lang->page->menu->create = 'Create|article|create|type=page';

/* Menu of product module. */
$lang->product = new stdclass();
$lang->product->menu = new stdclass();
$lang->product->menu->browse = array('link' => 'All products|product|admin|', 'alias' => 'create, edit');

/* Menu of UI module. */
$lang->ui = new stdclass();
$lang->ui->menu = new stdclass();
$lang->ui->menu->logo    = 'Logo|ui|setlogo|';
$lang->ui->menu->favicon = 'Favicon|ui|setfavicon|';
$lang->ui->menu->slide   = array('link' => 'Slide|slide|admin|',  'alias' => 'create,edit');
$lang->ui->menu->theme   = 'Theme|ui|settemplate|';
$lang->ui->menu->admin   = array('link' => 'Blocks|block|admin|', 'alias' => 'create,edit');
$lang->ui->menu->pages   = array('link' => 'Layout|block|pages|', 'alias' => 'setregion');
$lang->ui->menu->styles  = 'Base Style|ui|setbasestyle|';

/* Menu of user module. */
$lang->user = new stdclass();
$lang->user->menu = new stdclass();
$lang->user->menu->all    = 'All Users|user|admin|';
$lang->user->menu->sina   = 'Weibo Users|user|admin|provider=sina';
$lang->user->menu->wechat = 'Wechat Users|user|admin|provider=wechat';
$lang->user->menu->qq     = 'QQ Users|user|admin|provider=qq';
$lang->user->menu->admin  = 'Admin Users|user|admin|admin=1';
$lang->user->menu->group  = array('link' => 'Group|group|browse|', 'alias' => 'managepriv,managemember');
$lang->user->menu->log    = 'Login logs|user|adminlog|';

/* Menu of comment module. */
$lang->feedback = new stdclass();
$lang->feedback->menu = new stdclass();
$lang->feedback->menu->message = 'Message|message|admin|type=message';
$lang->feedback->menu->comment = 'Comment|message|admin|type=comment';
$lang->feedback->menu->answer  = 'Answer|message|admin|type=reply';
$lang->feedback->menu->thread  = 'Threads|forum|admin|tab=feedback';
$lang->feedback->menu->reply   = 'Replies|reply|admin|order=id_desc&tab=feedback';
$lang->feedback->menu->wechat  = 'Wechat|wechat|message|mode=replied&replied=0';

$lang->message = new stdclass();
$lang->message->menu = $lang->feedback->menu;

/* Menu of forum module. */
$lang->forum = new stdclass();
$lang->forum->menu = new stdclass();
$lang->forum->menu->browse = 'Threads|forum|admin|';
$lang->forum->menu->reply  = 'Replies|reply|admin|';
$lang->forum->menu->tree   = 'Boards|tree|browse|type=forum';
$lang->forum->menu->update = 'Update|forum|update|';

/* Menu of site module. */
$lang->site = new stdclass();
$lang->site->menu = new stdclass();
$lang->site->menu->basic      = 'Basic|site|setbasic|';
$lang->site->menu->lang       = 'Language|site|setlang|';
$lang->site->menu->nav        = 'Navigation|nav|admin|';
$lang->site->menu->security   = 'Security|site|setsecurity|';
$lang->site->menu->upload     = 'Uploads|site|setupload|';
$lang->site->menu->tag        = 'Tags|tag|admin|';
$lang->site->menu->recPerPage = 'Set Records Per Page|site|setrecperpage|';
#$lang->site->menu->robots    = 'Robots|site|setrobots|';
$lang->site->menu->oauth      = 'Open OAuth|site|setoauth|';
$lang->site->menu->link       = 'Links|links|admin|';
$lang->site->menu->mail       = array('link' => 'Mail|mail|admin|', 'alias' => 'detect,edit,save,test');
$lang->site->menu->wechat     = array('link' => 'Wechat|wechat|admin|', 'alias' => 'create,setresponse');
$lang->site->menu->search     = 'Update Search Index|search|buildindex|';

/* Menu of company module. */
$lang->company->menu = new stdclass();
$lang->company->menu->basic   = 'Basic|company|setbasic|';
$lang->company->menu->contact = 'Contact|company|setcontact|';

$lang->cart    = new stdclass();
$lang->order   = new stdclass();
$lang->address = new stdclass();

$lang->order->menu = new stdclass();
$lang->order->menu->admin   = 'Order list|order|admin|';
$lang->order->menu->express = 'Express|tree|browse|type=express|';
$lang->order->menu->setting = 'Settings|order|setting|';

/* Menu of tree module. */
$lang->tree = new stdclass();
$lang->tree->menu = $lang->article->menu;

/* Menu of tag module. */
$lang->tag = new stdclass();
$lang->tag->menu = $lang->site->menu;

/* Menu of mail module. */
$lang->mail = new stdclass();
$lang->mail->menu = $lang->site->menu;

/* Menu of reply module. */
$lang->reply = new stdclass();
$lang->reply->menu = $lang->forum->menu;

/* Menu of wechat module. */
$lang->wechat = new stdclass();
$lang->wechat->menu = $lang->site->menu;

/* Menu of nav module. */
$lang->nav = new stdclass();
$lang->nav->menu = $lang->site->menu;

/* Menu of tree module. */
$lang->slide = new stdclass();
$lang->slide->menu = $lang->ui->menu;

/* Menu of block module. */
$lang->block = new stdclass();
$lang->block->menu = $lang->ui->menu;

/* Menu of tree module. */
$lang->links = new stdclass();
$lang->links->menu = $lang->site->menu;

/* Menu of group module. */
$lang->group = new stdclass();
$lang->group->menu = $lang->user->menu;

/* Menu of package module. */
$lang->package = new stdclass();

/* Error info. */
$lang->error = new stdclass();
$lang->error->length       = array("<strong>%s</strong>length should be<strong>%s</strong>", "<strong>%s</strong>length should between<strong>%s</strong>and <strong>%s</strong>.");
$lang->error->reg          = "<strong>%s</strong>should like<strong>%s</strong>";
$lang->error->unique       = "<strong>%s</strong>has<strong>%s</strong>already. If you are sure this record has been deleted, you can restore it in admin panel, trash page.";
$lang->error->notempty     = "<strong>%s</strong>can not be empty.";
$lang->error->equal        = "<strong>%s</strong>must be<strong>%s</strong>.";
$lang->error->gt           = "<strong>%s</strong> should be geater than <strong>%s</strong>.";
$lang->error->ge           = "<strong>%s</strong> should be not less than <strong>%s</strong>.";
$lang->error->lt           = "<strong>%s</strong> should be less than <strong>%s</strong>";
$lang->error->le           = "<strong>%s</strong> should be no greater than <strong>%s</strong>.";
$lang->error->in           = '<strong>%s</strong>must in<strong>%s</strong>。';
$lang->error->int          = array("<strong>%s</strong>should be interger", "<strong>%s</strong>should between<strong>%s-%s</strong>.");
$lang->error->float        = "<strong>%s</strong>should be a interger or float.";
$lang->error->email        = "<strong>%s</strong>should be email.";
$lang->error->URL          = "<strong>%s</strong>should be url.";
$lang->error->date         = "<strong>%s</strong>should be date";
$lang->error->account      = "<strong>%s</strong>should be a valid account.";
$lang->error->passwordsame = "Two passwords must be the same";
$lang->error->passwordrule = "Password should more than six letters.";
$lang->error->captcha      = 'Captcah wrong.';
$lang->error->noWritable   = '%s maybe not write, please modify permissions!';
$lang->error->fingerprint  = 'identity authent faild';
$lang->error->token        = 'Should English or numbers, length of 3-32 characters.';

/* The pager items. */
$lang->pager = new stdclass();
$lang->pager->noRecord   = "No records yet.";
$lang->pager->digest     = "<strong>%s</strong> records, %s <strong>%s/%s</strong> &nbsp; ";
$lang->pager->recPerPage = "<strong>%s</strong> per page";
$lang->pager->first      = "<i class='icon-step-backward' title='First'></i>";
$lang->pager->pre        = "<i class='icon-play icon-rotate-180' title='Previous'></i>";
$lang->pager->next       = "<i class='icon-play' title='Next'></i>";
$lang->pager->last       = "<i class='icon-step-forward' title='Last'></i>";
$lang->pager->locate     = "GO!";

$lang->date = new stdclass();
$lang->date->minute = 'minute';
$lang->date->day    = 'day';

/* Date times. */
define('DT_DATETIME1',  'Y-m-d H:i:s');
define('DT_DATETIME2',  'y-m-d H:i');
define('DT_MONTHTIME1', 'n/d H:i');
define('DT_MONTHTIME2', 'F j, H:i');
define('DT_DATE1',     'Y-m-d');
define('DT_DATE2',     'Ymd');
define('DT_DATE3',     'F j, Y ');
define('DT_DATE4',     'M j');
define('DT_TIME1',     'H:i:s');
define('DT_TIME2',     'H:i');

/* Keywords for chanzhi. */
$lang->k  = '蝉知门户，开源免费的企业建站系统!;';
$lang->k .= '蝉知门户，开源免费的cms!;';
$lang->k .= '蝉知门户，免费建站首选！;';
$lang->k .= '蝉知门户，企业网站建设专家！;';
$lang->k .= '蝉知门户，开源php企业建站系统！;';
$lang->k .= '蝉知门户，微网站专家！;';
$lang->k .= '蝉知门户，微网站首选！;';
$lang->k .= '蝉知门户，微信营销首选！';
