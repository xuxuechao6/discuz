<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('forum');
0
|| checktplrefresh('./template/bigstyle/touch/search/forum.htm', './template/bigstyle/touch/search/pubsearch.htm', 1519828328, '6', './data/template/6_6_touch_search_forum.tpl.php', './template/bigstyle', 'touch/search/forum')
|| checktplrefresh('./template/bigstyle/touch/search/forum.htm', './template/bigstyle/touch/search/thread_list.htm', 1519828328, '6', './data/template/6_6_touch_search_forum.tpl.php', './template/bigstyle', 'touch/search/forum')
;?><?php include template('common/header'); ?><div class="mwt-h5bar headbar" style="top:0;height:40px;position:fixed;">
  <table class="mwt-bar-tb "><tr>
    <td width="100%" style="height:40px;"><button data-i="0" name="h5page-8NgVRo-head-btn" style=""><h1>搜索</h1></button></td>
  </tr></table>
</div>

<div style="height:45px">&nbsp;</div>

<form id="searchform" class="searchform" method="post" autocomplete="off" action="search.php?mod=forum&amp;mobile=2" 
 onsubmit="return checkpost();">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" /><?php if(!empty($srchtype)) { ?><input type="hidden" name="srchtype" value="<?php echo $srchtype;?>" /><?php } ?>
<div class="search">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<input value="<?php echo $keyword;?>" autocomplete="off" class="input" name="srchtxt" id="scform_srchtxt" value="" placeholder="搜索帖子">
</td>
<td width="66" align="center" class="scbar_btn_td">
<div><input type="hidden" name="searchsubmit" value="yes"><input type="submit" value="搜索" class="button2" id="scform_submit"></div>
</td>
</tr>
</tbody>
</table>
</div><?php $policymsgs = $p = '';?><?php if(is_array($_G['setting']['creditspolicy']['search'])) foreach($_G['setting']['creditspolicy']['search'] as $id => $policy) { ?><?php
$policymsg = <<<EOF

EOF;
 if($_G['setting']['extcredits'][$id]['img']) { 
$policymsg .= <<<EOF
{$_G['setting']['extcredits'][$id]['img']} 
EOF;
 } 
$policymsg .= <<<EOF
{$_G['setting']['extcredits'][$id]['title']} {$policy} {$_G['setting']['extcredits'][$id]['unit']}
EOF;
?><?php $policymsgs .= $p.$policymsg;$p = ', ';?><?php } if($policymsgs) { ?><p>每进行一次搜索将扣除 <?php echo $policymsgs;?></p><?php } ?>
</form>

<?php if(!empty($searchid) && submitcheck('searchsubmit', 1)) { ?><div class="threadlist">
<h2 class="thread_tit"><?php if($keyword) { ?>结果: <em>找到 “<span class="emfont"><?php echo $keyword;?></span>” 相关内容 <?php echo $index['num'];?> 个</em> <?php if($modfid) { ?><a href="forum.php?mod=modcp&amp;action=thread&amp;fid=<?php echo $modfid;?>&amp;keywords=<?php echo $modkeyword;?>&amp;submit=true&amp;do=search&amp;page=<?php echo $page;?>" target="_blank">进入管理面板</a><?php } } else { ?>结果: <em>找到相关主题 <?php echo $index['num'];?> 个</em><?php } ?></h2>
<?php if(empty($threadlist)) { ?>
<ul><li><a href="javascript:;">对不起，没有找到匹配结果。</a></li></ul>
<?php } else { ?>
<ul><?php if(is_array($threadlist)) foreach($threadlist as $thread) { ?><li>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['realtid'];?>&amp;highlight=<?php echo $index['keywords'];?>" <?php echo $thread['highlight'];?>><?php echo $thread['subject'];?></a>
</li>
<?php } ?>
</ul>
<?php } ?>
<?php echo $multipage;?>
</div>
<?php } ?>
<div style="height:45px">&nbsp;</div><?php include template('common/footer'); ?><script>
function checkpost()
{
var dom = document.getElementById("scform_srchtxt");
var v = dom.value;
//dom.value = encodeURI(v);
return true;
}
</script>
