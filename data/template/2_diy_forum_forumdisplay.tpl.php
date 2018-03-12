<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('forumdisplay');
0
|| checktplrefresh('data/diy/./template/fxiaomi//forum/forumdisplay.htm', './template/default/forum/forumdisplay_leftside.htm', 1520824556, 'diy', './data/template/2_diy_forum_forumdisplay.tpl.php', 'data/diy/./template/fxiaomi/', 'forum/forumdisplay')
|| checktplrefresh('data/diy/./template/fxiaomi//forum/forumdisplay.htm', './template/default/common/seccheck.htm', 1520824556, 'diy', './data/template/2_diy_forum_forumdisplay.tpl.php', 'data/diy/./template/fxiaomi/', 'forum/forumdisplay')
|| checktplrefresh('data/diy/./template/fxiaomi//forum/forumdisplay.htm', './template/fxiaomi/forum/forumdisplay_list.htm', 1520824556, 'diy', './data/template/2_diy_forum_forumdisplay.tpl.php', 'data/diy/./template/fxiaomi/', 'forum/forumdisplay')
|| checktplrefresh('data/diy/./template/fxiaomi//forum/forumdisplay.htm', './template/default/forum/forumdisplay_sort.htm', 1520824556, 'diy', './data/template/2_diy_forum_forumdisplay.tpl.php', 'data/diy/./template/fxiaomi/', 'forum/forumdisplay')
|| checktplrefresh('data/diy/./template/fxiaomi//forum/forumdisplay.htm', './template/fxiaomi/forum/recommend.htm', 1520824556, 'diy', './data/template/2_diy_forum_forumdisplay.tpl.php', 'data/diy/./template/fxiaomi/', 'forum/forumdisplay')
|| checktplrefresh('data/diy/./template/fxiaomi//forum/forumdisplay.htm', './template/default/forum/search_sortoption.htm', 1520824556, 'diy', './data/template/2_diy_forum_forumdisplay.tpl.php', 'data/diy/./template/fxiaomi/', 'forum/forumdisplay')
|| checktplrefresh('data/diy/./template/fxiaomi//forum/forumdisplay.htm', './template/default/forum/search_sortoption.htm', 1520824556, 'diy', './data/template/2_diy_forum_forumdisplay.tpl.php', 'data/diy/./template/fxiaomi/', 'forum/forumdisplay')
;
block_get('34');?><?php include template('common/header'); if($_G['forum']['ismoderator']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum_moderate.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } ?>
<style id="diy_style" type="text/css">#portal_block_34 {  background-color:#e6e6e6 !important;background-image:none !important;margin:1px !important;}</style>
<!--[diy=diynavtop]--><div id="diynavtop" class="area"></div><!--[/diy]--><?php echo adshow("text/wp a_t");?><div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<div class="boardnav xiaomi">
<div class="contain_header" <?php if(!$_G['forum']['icon']) { ?>style="width: 968px;padding-left: 20px;"<?php } ?>>
<?php if($_G['forum']['icon']) { ?>
<img src="data/attachment/common/<?php echo $_G['forum']['icon'];?>">
<?php } ?>
<div class="contain_header_con">
<div>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>"><h2><?php echo $_G['forum']['name'];?></h2></a>
<a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=forum&amp;id=<?php echo $_G['fid'];?>&amp;handlekey=favoriteforum&amp;formhash=<?php echo FORMHASH;?>"
   id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);"><span class="attention">收藏</span></a>
已有<span class="num"><?php echo $_G['forum']['favtimes'];?></span> 人收藏
</div>
<div>
<span class="intro"><p><?php echo $_G['forum']['description'];?></p></span>
</div>
</div>
<a href="javascript:;" class="btnn" <?php if(!$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && !$_G['forum']['threadsorts']['required']) { ?> onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>')"<?php } else { ?> onclick="location.href='forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>';return false;"<?php } ?> title="发新帖">+发表新主题</a>
<div class="gearedto">
<a href="forum.php?mod=rss&amp;fid=<?php echo $_G['fid'];?>&amp;auth=<?php echo $rssauth;?>" class="fa_rss" target="_blank" title="RSS">订阅</a>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?mod=forum&action=recyclebin&frames=yes<?php } elseif($_G['forum']['ismoderator']) { ?>forum.php?mod=modcp&action=recyclebin&fid=<?php echo $_G['fid'];?><?php } ?>" class="fa_bin" target="_blank">回收站</a>
<?php if($_G['forum']['status'] != 3) { ?>
<a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" class="fa_Panel">管理面板</a>
<?php } else { ?>
<a href="forum.php?mod=group&amp;action=manage&amp;fid=<?php echo $_G['fid'];?>">管理面板</a>
<?php } ?>
</div>
</div>
<div id="ct" class="wp cl<?php if($_G['forum']['allowside']) { ?> ct2<?php } ?>"<?php if($leftside) { ?> style="margin-left:<?php echo $_G['leftsidewidth_mwidth'];?>px"<?php } ?>>
<?php if($leftside) { ?>
<div id="sd_bdl" class="bdl" onmouseover="showMenu({'ctrlid':this.id, 'pos':'dz'});" style="width:<?php echo $_G['setting']['leftsidewidth'];?>px;margin-left:-<?php echo $_G['leftsidewidth_mwidth'];?>px">
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_leftside_top'])) echo $_G['setting']['pluginhooks']['forumdisplay_leftside_top'];?>
<!--[diy=diyleftsidetop]--><div id="diyleftsidetop" class="area"></div><!--[/diy]-->

<div class="tbn" id="forumleftside"><?php if($leftside['favorites']) { ?>
<h2 class="mbn"><a href="home.php?mod=space&amp;do=favorite&amp;type=forum">收藏的版块</a></h2>
<dl id="lf_fav" class="bdl_fav mbm"><?php if(is_array($leftside['favorites'])) foreach($leftside['favorites'] as $favfid => $fdata) { ?><dd>
<?php if(!empty($_G['cache']['forums'][$favfid]['domain']) && !empty($_G['setting']['domain']['root']['forum'])) { ?>
<a href="http://<?php echo $_G['cache']['forums'][$favfid]['domain'];?>.<?php echo $_G['setting']['domain']['root']['forum'];?>" title="<?php echo $fdata['0'];?>"><?php echo $fdata['0'];?></a>
<?php } else { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $favfid;?>"><?php echo $fdata['0'];?></a>
<?php } ?>

</dd>
<?php } ?>
</dl>
<?php } else { ?>
<h2 class="bdl_h">版块导航</h2>
<?php } if(is_array($leftside['forums'])) foreach($leftside['forums'] as $upfid => $gdata) { ?><dl class="<?php if($fgroupid == $upfid || $_G['setting']['leftsideopen']) { ?>a<?php } ?>" id="lf_<?php echo $upfid;?>">
<dt><a href="javascript:;" hidefocus="true" onclick="leftside('lf_<?php echo $upfid;?>')" title="<?php echo $gdata['name'];?>"><?php echo $gdata['name'];?></a></dt><?php if(is_array($gdata['sub'])) foreach($gdata['sub'] as $subfid => $name) { ?><dd<?php if($_G['fid'] == $subfid || $_G['forum']['fup'] == $subfid) { ?> class="bdl_a"<?php } ?>>
<?php if(!empty($_G['cache']['forums'][$subfid]['domain']) && !empty($_G['setting']['domain']['root']['forum'])) { ?>
<a href="http://<?php echo $_G['cache']['forums'][$subfid]['domain'];?>.<?php echo $_G['setting']['domain']['root']['forum'];?>" title="<?php echo $name;?>"><?php echo $name;?></a>
<?php } else { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $subfid;?>" title="<?php echo $name;?>"><?php echo $name;?></a>
<?php } ?>
</dd>
<?php } ?>
</dl>
<?php } ?></div>

<!--[diy=diyleftsidebottom]--><div id="diyleftsidebottom" class="area"></div><!--[/diy]-->
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_leftside_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_leftside_bottom'];?>
</div>
<?php } ?>

<div class="mn">
<div class="theme">
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_top'])) echo $_G['setting']['pluginhooks']['forumdisplay_top'];?>

<?php if($subexists && $_G['page'] == 1) { include template('forum/forumdisplay_subforum'); } ?>

<div class="drag">
<!--[diy=diy4]--><div id="diy4" class="area"></div><!--[/diy]-->
</div>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_middle'])) echo $_G['setting']['pluginhooks']['forumdisplay_middle'];?>

<?php if(!$subforumonly) { if($recommendgroups && !$_G['forum']['allowside']) { ?>
<div class="bm bmw fl<?php if($_G['forum']['forumcolumns']) { ?> flg<?php } ?>">
<div class="bm_h cl">
<span class="o"><img id="recommendgroups_<?php echo $_G['forum']['fid'];?>_img" src="<?php echo IMGDIR;?>/<?php echo $collapseimg['recommendgroups'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('recommendgroups_<?php echo $_G['forum']['fid'];?>');" /></span>
<h2>推荐<?php echo $_G['setting']['navs']['3']['navname'];?></h2>
</div>
<div class="bm_c" id="recommendgroups_<?php echo $_G['forum']['fid'];?>" style="<?php echo $collapse['recommendgroups'];?>">
<table cellspacing="0" cellpadding="0" class="fl_tb"><?php if(is_array($recommendgroups)) foreach($recommendgroups as $key => $group) { if($_G['forum']['forumcolumns']) { if($key && ($key % $_G['forum']['forumcolumns'] == 0)) { ?>
</tr>
<?php if($key < $_G['forum']['forumcolumns']) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g">
<div class="fl_icn_g">
<a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" title="<?php echo $group['name'];?>" target="_blank"><img src="<?php echo $group['icon'];?>" alt="<?php echo $group['name'];?>" width="32" /></a>
</div>
<dl>
<dt><a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" target="_blank"><?php echo $group['name'];?></a><span class="xg1 xw0"> (<?php echo $group['membernum'];?> 人)</span>
<dd><em>主题: <?php echo $group['threads'];?></em></dd>
<dd>
<?php if(is_array($group['lastpost'])) { if($_G['forum']['forumcolumns'] < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $group['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($group['lastpost']['subject'], 30); ?></a> <cite><?php echo $group['lastpost']['dateline'];?> <?php if($group['lastpost']['author']) { ?><a href="home.php?mod=space&amp;username=<?php echo $group['lastpost']['encode_author'];?>"><?php echo $group['lastpost']['author'];?></a><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $group['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo $group['lastpost']['dateline'];?></a>
<?php } ?>				<?php } else { ?>
从未
<?php } ?>
</dd>
</dl>
</td>
<?php } else { ?>
<tr <?php if($key != 0) { ?>class="fl_row"<?php } ?>>
<td class="fl_icn">
<a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" title="<?php echo $group['name'];?>" target="_blank"><img src="<?php echo $group['icon'];?>" alt="<?php echo $group['name'];?>" width="32" /></a>
</td>
<td>
<h2><a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" target="_blank"><?php echo $group['name'];?></a><span class="xg1 xw0"> (<?php echo $group['membernum'];?> 人)</span></h2>
<p><?php echo cutstr($group['description'], 100); ?></p>
</td>
<td class="fl_i">
<span class="xi2"><?php echo $group['threads'];?> 主题</span>
</td>
<td class="fl_by">
<div>
<?php if(is_array($group['lastpost'])) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $group['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($group['lastpost']['subject'], 30); ?></a> <cite><?php echo $group['lastpost']['dateline'];?> <?php if($group['lastpost']['author']) { ?><a href="home.php?mod=space&amp;username=<?php echo $group['lastpost']['encode_author'];?>"><?php echo $group['lastpost']['author'];?></a><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
从未
<?php } ?>
</div>
</td>
</tr>
<?php } } ?>
</table>
</div>
</div>
<?php } if($threadmodcount) { ?><div class="bm"><div class="ntc_l hm xi2"><strong><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=thread&amp;view=me&amp;type=thread&amp;from=&amp;filter=aduit">您有 <?php echo $threadmodcount;?> 个主题正等待审核中，点击查看</a></strong></div></div><?php } if($livethread) { ?>
<div id="livethread" class="tl bm bmw cl" style="padding:10px 15px;">
<div class="livethreadtitle vm">
<span class="replynumber xg1">回复 <span id="livereplies" class="xi1"><?php echo $livethread['replies'];?></span></span>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $livethread['tid'];?>" target="_blank"><?php echo $livethread['subject'];?></a> <img src="<?php echo IMGDIR;?>/livethreadtitle.png" />
</div>
<div class="livethreadcon"><?php echo $livemessage;?></div>
<div id="livereplycontentout">
<div id="livereplycontent">
</div>
</div>
<div id="liverefresh">有新的发言了，点击刷新</div>
<div id="livefastreply">
<form id="livereplypostform" method="post" action="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $livethread['tid'];?>&amp;replysubmit=yes&amp;infloat=yes&amp;handlekey=livereplypost&amp;inajax=1" onsubmit="return livereplypostvalidate(this)">
<div id="livefastcomment">
<textarea id="livereplymessage" name="message" style="color:gray;<?php if(!$liveallowpostreply) { ?>display:none;<?php } ?>">#在这里快速回复#</textarea>
<?php if(!$liveallowpostreply) { ?>
<div>
<?php if(!$_G['uid']) { ?>
您需要登录后才可以回帖 <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)" class="xi2">登录</a> | <a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2"><?php echo $_G['setting']['reglinkname'];?></a>
<?php } else { ?>
您现在无权发帖。<a href="javascript:;" onclick="ajaxpost('livereplypostform', 'livereplypostreturn', 'livereplypostreturn', 'onerror', $('livereplysubmit'));" class="xi2">点击查看原因</a>
<?php } ?>
</div>
<?php } ?>
</div>
<div id="livepostsubmit" style="display:none;">
<?php if($secqaacheck || $seccodecheck) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id)"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
<div class="mtm sec" style="text-align:right;"><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?></div>
<?php } ?>
<p class="ptm pnpost" style="margin-bottom:10px;">
<button type="submit" name="replysubmit" class="pn pnc vm" style="float:right;" value="replysubmit" id="livereplysubmit">
<strong>发表</strong>
</button>
</p>
</div>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="subject" value="  ">
</form>
</div>
<span id="livereplypostreturn"></span>
</div>
<script type="text/javascript">
var postminchars = parseInt('<?php echo $_G['setting']['minpostsize'];?>');
var postmaxchars = parseInt('<?php echo $_G['setting']['maxpostsize'];?>');
var disablepostctrl = parseInt('<?php echo $_G['group']['disablepostctrl'];?>');
var replycontentlist = new Array();
var addreplylist = new Array();
var timeoutid = timeid = movescrollid = waitescrollid = null;
var replycontentnum = 0;
getnewlivepostlist(1);
timeid = setInterval(getnewlivepostlist, 5000);
$('livereplycontent').style.position = 'absolute';
$('livereplycontent').style.width = ($('livereplycontentout').clientWidth - 50) + 'px';
$('livereplymessage').onfocus = function() {
if(this.style.color == 'gray') {
this.value = '';
this.style.color = 'black';
$('livepostsubmit').style.display = 'block';
this.style.height = '56px';
$('livefastcomment').style.height = '57px';
}
};
$('livereplymessage').onblur = function() {
if(this.value == '') {
this.style.color = 'gray';
this.value = '#在这里快速回复#';
}
};

$('liverefresh').onclick = function() {
$('livereplycontent').style.position = 'absolute';
getnewlivepostlist();
this.style.display = 'none';
};

$('livereplycontentout').onmouseover = function(e) {

if($('livereplycontent').style.position == 'absolute' && $('livereplycontent').clientHeight > 215) {
$('livereplycontent').style.position = 'static';
this.scrollTop = this.scrollHeight;
}

if(this.scrollTop + this.clientHeight != this.scrollHeight) {
clearInterval(timeid);
clearTimeout(timeoutid);
clearInterval(movescrollid);
timeid = timeoutid = movescrollid = null;

if(waitescrollid == null) {
waitescrollid = setTimeout(function() {
$('liverefresh').style.display = 'block';
}, 60000 * 10);
}
} else {
clearTimeout(waitescrollid);
waitescrollid = null;
}
};

$('livereplycontentout').onmouseout = function(e) {
if(this.scrollTop + this.clientHeight == this.scrollHeight) {
$('livereplycontent').style.position = 'absolute';
clearInterval(timeid);
timeid = setInterval(getnewlivepostlist, 10000);
}
};

function getnewlivepostlist(first) {
var x = new Ajax('JSON');
x.getJSON('forum.php?mod=misc&action=livelastpost&fid=<?php echo $livethread['fid'];?>', function(s, x) {
var count = s.data.count;
$('livereplies').innerHTML = count;
var newpostlist = s.data.list;
for(i in newpostlist) {
var postid = i;
var postcontent = '';
postcontent += newpostlist[i].authorid ? '<dt><a href="home.php?mod=space&amp;uid=' + newpostlist[i].authorid + '" target="_blank">' + newpostlist[i].avatar + '</a></dt>' : '<dt></dt>';
postcontent += newpostlist[i].authorid ? '<dd><a href="home.php?mod=space&amp;uid=' + newpostlist[i].authorid + '" target="_blank">' + newpostlist[i].author + '</a></dd>' : '<dd>' + newpostlist[i].author + '</dd>';
postcontent += '<dd>' + htmlspecialchars(newpostlist[i].message) + '</dd>';
postcontent += '<dd class="dateline">' + newpostlist[i].dateline + '</dd>';
if(replycontentlist[postid]) {
$('livereply_' + postid).innerHTML = postcontent;
continue;
}
addreplylist[postid] = '<dl id="livereply_' + postid + '">' + postcontent + '</dl>';
}
if(first) {
for(i in addreplylist) {
replycontentlist[i] = addreplylist[i];
replycontentnum++;
var div = document.createElement('div');
div.innerHTML = addreplylist[i];
$('livereplycontent').appendChild(div);
delete addreplylist[i];
}
} else {
livecontentfacemove();
}
});
}

function livecontentfacemove() {
//note 从队列中取出数据
var reply = '';
for(i in addreplylist) {
reply = replycontentlist[i] = addreplylist[i];
replycontentnum++;
delete addreplylist[i];
break;
}
if(reply) {
var div = document.createElement('div');
div.innerHTML = reply;
var oldclientHeight = $('livereplycontent').clientHeight;
$('livereplycontent').appendChild(div);
$('livereplycontentout').style.overflowY = 'hidden';
$('livereplycontent').style.bottom = oldclientHeight - $('livereplycontent').clientHeight + 'px';

if(replycontentnum > 20) {
$('livereplycontent').removeChild($('livereplycontent').firstChild);
for(i in replycontentlist) {
delete replycontentlist[i];
break;
}
replycontentnum--;
}

if(!movescrollid) {
movescrollid = setInterval(function() {
if(parseInt($('livereplycontent').style.bottom) < 0) {
$('livereplycontent').style.bottom =
((parseInt($('livereplycontent').style.bottom) + 5) > 0 ? 0 : (parseInt($('livereplycontent').style.bottom) + 5)) + 'px';
} else {
$('livereplycontentout').style.overflowY = 'auto';
clearInterval(movescrollid);
movescrollid = null;
timeoutid = setTimeout(livecontentfacemove, 1000);
}
}, 100);
}
}
}

function livereplypostvalidate(theform) {
var s;
if(theform.message.value == '' || $('livereplymessage').style.color == 'gray') {
s = '抱歉，您尚未输入内容';
}
if(!disablepostctrl && ((postminchars != 0 && mb_strlen(theform.message.value) < postminchars) || (postmaxchars != 0 && mb_strlen(theform.message.value) > postmaxchars))) {
s = '您的帖子长度不符合要求。\n\n当前长度: ' + mb_strlen(theform.message.value) + ' 字节\n系统限制: ' + postminchars + ' 到 ' + postmaxchars + ' 字节';
}
if(s) {
showError(s);
doane();
$('livereplysubmit').disabled = false;
return false;
}
$('livereplysubmit').disabled = true;
theform.message.value = theform.message.value.replace(/([^>=\]"'\/]|^)((((https?|ftp):\/\/)|www\.)([\w\-]+\.)*[\w\-\u4e00-\u9fa5]+\.([\.a-zA-Z0-9]+|\u4E2D\u56FD|\u7F51\u7EDC|\u516C\u53F8)((\?|\/|:)+[\w\.\/=\?%\-&~`@':+!]*)+\.(jpg|gif|png|bmp))/ig, '$1[img]$2[/img]');
theform.message.value = parseurl(theform.message.value);
ajaxpost('livereplypostform', 'livereplypostreturn', 'livereplypostreturn', 'onerror', $('livereplysubmit'));
return false;
}

function succeedhandle_livereplypost(url, msg, param) {
$('livereplymessage').value = '';
$('livereplycontent').style.position = 'absolute';
if(param['sechash']) {
updatesecqaa(param['sechash']);
updateseccode(param['sechash']);
}
getnewlivepostlist();
}
</script>
<?php } if(($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || count($_G['forum']['threadsorts']['types']) > 0) { ?>
<div class="filtrate">
<ul class="cl">
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_threadtype_inner'])) echo $_G['setting']['pluginhooks']['forumdisplay_threadtype_inner'];?>
<?php if($_G['forum']['threadtypes']) { if(is_array($_G['forum']['threadtypes']['types'])) foreach($_G['forum']['threadtypes']['types'] as $id => $name) { if($_GET['typeid'] == $id) { ?>
<li class="a"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?><?php if($_GET['sortid']) { ?>&amp;filter=sortid&amp;sortid=<?php echo $_GET['sortid'];?><?php } if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>"><?php if($_G['forum']['threadtypes']['icons'][$id] && $_G['forum']['threadtypes']['prefix'] == 2) { ?><img class="vm" src="<?php echo $_G['forum']['threadtypes']['icons'][$id];?>" alt="" /> <?php } ?><?php echo $name;?></a></li>
<?php } else { ?>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=typeid&amp;typeid=<?php echo $id;?><?php echo $forumdisplayadd['typeid'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>"><?php if($_G['forum']['threadtypes']['icons'][$id] && $_G['forum']['threadtypes']['prefix'] == 2) { ?><img class="vm" src="<?php echo $_G['forum']['threadtypes']['icons'][$id];?>" alt="" /> <?php } ?><?php echo $name;?></a></li>
<?php } } } if($_G['forum']['threadsorts']) { if($_G['forum']['threadtypes']) { ?><li><span class="pipe">|</span></li><?php } if(is_array($_G['forum']['threadsorts']['types'])) foreach($_G['forum']['threadsorts']['types'] as $id => $name) { if($_GET['sortid'] == $id) { ?>
<li class="a"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?><?php if($_GET['typeid']) { ?>&amp;filter=typeid&amp;typeid=<?php echo $_GET['typeid'];?><?php } if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>"><?php echo $name;?></a></li>
<?php } else { ?>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=sortid&amp;sortid=<?php echo $id;?><?php echo $forumdisplayadd['sortid'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>"><?php echo $name;?></a></li>
<?php } } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_filter_extra'])) echo $_G['setting']['pluginhooks']['forumdisplay_filter_extra'];?>
</ul>
</div>

<script type="text/javascript">showTypes('thread_types');</script>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_threadtype_extra'])) echo $_G['setting']['pluginhooks']['forumdisplay_threadtype_extra'];?>
<?php if(empty($_G['forum']['sortmode'])) { ?><div id="threadlist" class="tl bm bmw"<?php if($_G['uid']) { ?> style="position: relative;"<?php } ?>>
<?php if($quicksearchlist && !$_GET['archiveid']) { ?><script type="text/javascript">
var forum_optionlist = <?php if($forum_optionlist) { ?>'<?php echo $forum_optionlist;?>'<?php } else { ?>''<?php } ?>;
</script>
<script src="<?php echo $_G['setting']['jspath'];?>threadsort.js?<?php echo VERHASH;?>" type="text/javascript"></script><?php if(is_array($quicksearchlist)) foreach($quicksearchlist as $optionid => $option) { $formsearch = '';?>        <?php if(getstatus($option['search'], 1)) { ?>
        <?php
$__VERHASH = VERHASH;$formsearch = <<<EOF

            <div style="
EOF;
 if($option['type'] == 'checkbox') { 
$formsearch .= <<<EOF
clear:left;padding-bottom: 5px;
EOF;
 } else { 
$formsearch .= <<<EOF
float: left;width: 48%;height: 30px; overflow: hidden;
EOF;
 } 
$formsearch .= <<<EOF
">
                <span style="padding-right: 1em;">{$option['title']}:</span>
                
EOF;
 if(in_array($option['type'], array('radio', 'checkbox', 'select', 'range'))) { 
$formsearch .= <<<EOF

                    <span id="select_{$option['identifier']}">
                    
EOF;
 if($option['type'] == 'select') { 
$formsearch .= <<<EOF

                        
EOF;
 if($_GET['searchoption'][$optionid]['value']) { 
$formsearch .= <<<EOF

                            <script type="text/javascript">
                                changeselectthreadsort('{$_GET['searchoption'][$optionid]['value']}', {$optionid}, 'search');
                            </script>
                        
EOF;
 } else { 
$formsearch .= <<<EOF

                            <select name="searchoption[{$optionid}][value]" id="{$option['identifier']}" onchange="changeselectthreadsort(this.value, '{$optionid}', 'search');" class="ps vm">
                                <option value="0">请选择</option>
                            
EOF;
 if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$formsearch .= <<<EOF
                                
EOF;
 if(!$value['foptionid']) { 
$formsearch .= <<<EOF

                                <option value="{$id}">{$value['content']} 
EOF;
 if($value['level'] != 1) { 
$formsearch .= <<<EOF
&raquo;
EOF;
 } 
$formsearch .= <<<EOF
</option>
                                
EOF;
 } 
$formsearch .= <<<EOF

                            
EOF;
 } 
$formsearch .= <<<EOF

                            </select>
<input type="hidden" name="searchoption[{$optionid}][type]" value="{$option['type']}">
                        
EOF;
 } 
$formsearch .= <<<EOF

                    
EOF;
 } elseif($option['type'] != 'checkbox') { 
$formsearch .= <<<EOF

                        <select name="searchoption[{$optionid}][value]" id="{$option['identifier']}" class="ps vm">
                            <option value="0">请选择</option>
                        
EOF;
 if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$formsearch .= <<<EOF
                            <option value="{$id}" 
EOF;
 if($_GET['searchoption'][$optionid]['value'] == $id) { 
$formsearch .= <<<EOF
selected="selected"
EOF;
 } 
$formsearch .= <<<EOF
>{$value}</option>
                        
EOF;
 } 
$formsearch .= <<<EOF

                        </select>
                        <input type="hidden" name="searchoption[{$optionid}][type]" value="{$option['type']}">
                    
EOF;
 } else { 
$formsearch .= <<<EOF

                        
EOF;
 if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$formsearch .= <<<EOF
                            <label><input type="checkbox" class="pc" name="searchoption[{$optionid}][value][{$id}]" value="{$id}" 
EOF;
 if(is_array($_GET['searchoption'][$optionid]) && $_GET['searchoption'][$optionid]['value'][$id]) { 
$formsearch .= <<<EOF
checked="checked"
EOF;
 } 
$formsearch .= <<<EOF
>{$value}</label>
                        
EOF;
 } 
$formsearch .= <<<EOF

                        <input type="hidden" name="searchoption[{$optionid}][type]" value="checkbox">
                    
EOF;
 } 
$formsearch .= <<<EOF

                    </span>
                
EOF;
 } else { 
$formsearch .= <<<EOF

                    
EOF;
 if($option['type'] == 'calendar') { 
$formsearch .= <<<EOF

                        <script src="{$_G['setting']['jspath']}calendar.js?{$__VERHASH}" type="text/javascript"></script>
                        <input type="text" name="searchoption[{$optionid}][value]" size="15" class="px vm" value="
EOF;
 if(is_array($_GET['searchoption'][$optionid])) { 
$formsearch .= <<<EOF
{$_GET['searchoption'][$optionid]['value']}
EOF;
 } 
$formsearch .= <<<EOF
" onclick="showcalendar(event, this, false)" />
                    
EOF;
 } else { 
$formsearch .= <<<EOF

                        <input type="text" name="searchoption[{$optionid}][value]" size="15" class="px vm" value="
EOF;
 if(is_array($_GET['searchoption'][$optionid])) { 
$formsearch .= <<<EOF
{$_GET['searchoption'][$optionid]['value']}
EOF;
 } 
$formsearch .= <<<EOF
" />
                    
EOF;
 } 
$formsearch .= <<<EOF

                
EOF;
 } 
$formsearch .= <<<EOF

            </div>
            
EOF;
?>
<?php } ?>
    <?php $formsearch_html .= $formsearch;?><?php $fontsearch = '';$showoption = array();$tmpcount = 0;?><?php if(getstatus($option['search'], 2)) { ?>
    <?php
$fontsearch = <<<EOF

<tr>
<th width="8%">{$option['title']}:</th>
            <td>
                <ul class="cl">
                    <li
EOF;
 if($_GET[''.$option['identifier']] == 'all') { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1{$filterurladd}&amp;{$option['identifier']}=all{$sorturladdarray[$option['identifier']]}" class="xi2">不限</a></li>

EOF;
 if($option['type'] == 'select') { if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { if($value['foptionid'] == 0) { 
$fontsearch .= <<<EOF

<li
EOF;
 if(preg_match('/^'.$value['optionid'].'\./i', $_GET[''.$option['identifier']]) || preg_match('/^'.$value['optionid'].'$/i', $_GET[''.$option['identifier']])) { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1&amp;{$option['identifier']}={$id}{$sorturladdarray[$option['identifier']]}" class="xi2">{$value['content']}</a></li>

EOF;
 } } if(!($_GET[''.$option['identifier']] == 'all' || !isset($_GET[''.$option['identifier']]))) { if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { if((preg_match('/^'.$value['foptionid'].'\./i', $_GET[''.$option['identifier']]) || preg_match('/^'.$value['foptionid'].'$/i', $_GET[''.$option['identifier']])) && ($showoption[$value['count']][$id] = $value)) { } } if(ksort($showoption)) { } if(is_array($showoption)) foreach($showoption as $optioncount => $values) { if($tmpcount != $optioncount && ($tmpcount = $optioncount)) { 
$fontsearch .= <<<EOF

</ul><ul class="subtsm cl">
EOF;
 if(is_array($values)) foreach($values as $id => $value) { 
$fontsearch .= <<<EOF
<li
EOF;
 if(preg_match('/^'.$value['optionid'].'\./i', $_GET[''.$option['identifier']]) || preg_match('/^'.$value['optionid'].'$/i', $_GET[''.$option['identifier']])) { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1&amp;{$option['identifier']}={$id}{$sorturladdarray[$option['identifier']]}" class="xi2">{$value['content']}</a></li>

EOF;
 } 
$fontsearch .= <<<EOF

</ul><ul>

EOF;
 } } } } else { if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$fontsearch .= <<<EOF
<li
EOF;
 if($_GET[''.$option['identifier']] && !strcmp($id, $_GET[''.$option['identifier']])) { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1&amp;{$option['identifier']}={$id}{$sorturladdarray[$option['identifier']]}" class="xi2">{$value}</a></li>

EOF;
 } } 
$fontsearch .= <<<EOF

                </ul>
            </td>
</tr>

EOF;
?>
     <?php } ?>
     <?php $fontsearch_html .= $fontsearch;?><?php } if($formsearch_html || $fontsearch_html) { ?>
<div>
<?php if($fontsearch_html) { ?>
    <div class="ptn pbn mbm bbs">
    <table id="fontsearch" class="tsm cl">
         <?php echo $fontsearch_html;?>
    </table>
    </div>
<?php } if($formsearch_html) { ?>
    <form method="post" autocomplete="off" name="searhsort" id="searhsort" class="bbs bm_c pns mfm cl" action="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=sortid&amp;sortid=<?php echo $_GET['sortid'];?>">
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
        <div class="ptm cl"><?php echo $formsearch_html;?>
        <button type="submit" class="pn pnc" name="searchsortsubmit"><em>搜索</em></button></div>
    </form>
<?php } ?>
</div>
<?php } } ?>
<div class="theme_con">
<div class="screen cl">
<div class="z">
<a id="filter_special" href="javascript:;" class="dropdown_text" onclick="showMenu(this.id)"><span>
<?php if($_GET['specialtype'] == 'poll') { ?>投票<?php } elseif($_GET['specialtype'] == 'trade') { ?>商品
<?php } elseif($_GET['specialtype'] == 'reward') { ?>悬赏<?php } elseif($_GET['specialtype'] == 'activity') { ?>活动
<?php } elseif($_GET['specialtype'] == 'debate') { ?>辩论<?php } else { ?>全部主题<?php } ?></span><i></i>
</a>
<a id="filter_date" href="javascript:;" class="dropdown_text" onclick="showMenu(this.id)"><span>
<?php if($_GET['dateline'] == '86400') { ?>一天
<?php } elseif($_GET['dateline'] == '172800') { ?>两天
<?php } elseif($_GET['dateline'] == '604800') { ?>一周
<?php } elseif($_GET['dateline'] == '2592000') { ?>一个月
<?php } elseif($_GET['dateline'] == '7948800') { ?>三个月
<?php } else { ?>全部时间
<?php } ?>
</span><i></i></a>
<a id="filter_sort" href="javascript:;" class="dropdown_text" onclick="showMenu(this.id)"><span>
<?php if($_GET['orderby'] == 'dateline') { ?>发帖时间
<?php } elseif($_GET['orderby'] == 'replies') { ?>回复/查看
<?php } elseif($_GET['orderby'] == 'views') { ?>查看
<?php } else { ?>默认排序<?php } ?>
</span><i></i></a>
<?php if($_GET['specialtype'] == 'reward') { ?>
<a id="filter_reward" href="javascript:;" class="dropdown_text" onclick="showMenu(this.id)"><span>
<?php if($_GET['rewardtype'] == '') { ?>全部悬赏
<?php } elseif($_GET['rewardtype'] == '1') { ?>进行中
<?php } elseif($_GET['rewardtype'] == '2') { ?>已解决
<?php } ?></span><i></i></a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_filter_extra'])) echo $_G['setting']['pluginhooks']['forumdisplay_filter_extra'];?>
</div>
<div class="y">
<span id="atarget" <?php if($_G['cookie']['atarget'] > 0) { ?>onclick="setatarget(-1)" class="y atarget_1"<?php } else { ?>onclick="setatarget(1)" class="y"<?php } ?> title="在新窗口中打开帖子">新窗</span>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=lastpost&amp;orderby=lastpost<?php echo $forumdisplayadd['lastpost'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" class="screen_btn">最新</a>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=heat&amp;orderby=heats<?php echo $forumdisplayadd['heat'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" class="screen_btn">热门</a>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=hot" class="screen_btn">热帖</a>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=digest&amp;digest=1<?php echo $forumdisplayadd['digest'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" class="screen_btn">精华</a>
</div>

</div>
<?php if(empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']) { ?>
<script type="text/javascript">var lasttime = <?php echo $_G['timestamp'];?>;var listcolspan= '<?php if(!$_GET['archiveid'] && $_G['forum']['ismoderator']) { ?>6<?php } else { ?>5<?php } ?>';</script>
<?php } ?>
<div id="forumnew" style="display:none"></div>
<form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&amp;action=moderate&amp;fid=<?php echo $_G['fid'];?>&amp;infloat=yes&amp;nopost=yes">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="listextra" value="<?php echo $extra;?>" />
<script type="text/javascript">hideStickThread();</script>
<ul class="themelistcon" summary="forum_<?php echo $_G['fid'];?>" id="threadlisttableid">
<?php if((!$simplestyle || !$_G['forum']['allowside'] && $page == 1) && !empty($announcement)) { ?>
<li>
<div class="theme_list_img">
<a href="home.php?mod=space&amp;uid=<?php echo $announcement['authorid'];?>" c="1"><?php echo avatar($announcement['authorid'], 'small'); ?></a>
</div>
<div class="theme_list_con">
<div class="title"><?php if(empty($announcement['type'])) { ?><a class="title_name" href="forum.php?mod=announcement&amp;id=<?php echo $announcement['id'];?>#<?php echo $announcement['id'];?>" target="_blank">
公告: <?php echo $announcement['subject'];?></a><?php } else { ?><a href="<?php echo $announcement['message'];?>" target="_blank">公告: <?php echo $announcement['subject'];?></a><?php } ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/ann_icon.png" alt="公告" />
</div>
<div class="auth_msg cl">
<a class="user_name" href="home.php?mod=space&amp;uid=<?php echo $announcement['authorid'];?>" c="1"><?php echo $announcement['author'];?></a>
<span class="time txt"><?php echo $announcement['starttime'];?></span>
</div>
</div>
</li>
<?php } if(is_array($_G['forum_threadlist'])) foreach($_G['forum_threadlist'] as $key => $thread) { ?><li id="<?php echo $thread['id'];?>"<?php if($_G['hiddenexists'] && $thread['hidden']) { ?> style='display:none'<?php } ?>>
<div class="theme_list_img">
<a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>"  class="user_name" c="1"<?php if($groupcolor[$thread['authorid']]) { ?> style="color: <?php echo $groupcolor[$thread['authorid']];?>;"<?php } ?>><?php echo avatar($thread['authorid'], 'small'); ?></a>
</div>
<div class="theme_list_con">
<div class="title">

<?php if(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
<span class="stick txt title_top">置顶</span>
<?php } ?>

<a href="javascript:;" id="content_<?php echo $thread['tid'];?>" class="showcontent y" title="更多操作" onclick="CONTENT_TID='<?php echo $thread['tid'];?>';CONTENT_ID='<?php echo $thread['id'];?>';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<?php if(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
<a href="javascript:void(0);" onclick="hideStickThread('<?php echo $thread['tid'];?>')" class="showhide y" title="隐藏置顶帖">隐藏置顶帖</a></em>
<?php } if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } if(!$_G['setting']['forumdisplaythreadpreview'] && !($thread['readperm'] && $thread['readperm'] > $_G['group']['readaccess'] && !$_G['forum']['ismoderator'] && $thread['authorid'] != $_G['uid'])) { if(!(!empty($_G['setting']['antitheft']['allow']) && empty($_G['setting']['antitheft']['disable']['thread']) && empty($_G['forum']['noantitheft']))) { ?>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('<?php echo $thread['moved'] ? $thread['closed'] : $thread['tid']; ?>', '<?php echo $thread['id'];?>');">预览</a>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_thread'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_thread'][$key];?>
<?php if($thread['moved']) { ?>
移动:<?php $thread[tid]=$thread[closed];?><?php } ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>"<?php echo $thread['highlight'];?><?php if($thread['isgroup'] == 1 || $thread['forumstick']) { ?> target="_blank"<?php } else { ?> onclick="atarget(this)"<?php } ?> class="title_name"><?php echo $thread['subject'];?></a>
<?php if($_G['setting']['threadhidethreshold'] && $thread['hidden'] >= $_G['setting']['threadhidethreshold']) { ?><span class="xg1">隐藏</span>&nbsp;<?php } if($thread['icon'] >= 0) { ?>
<img src="<?php echo STATICURL;?>image/stamp/<?php echo $_G['cache']['stamps'][$thread['icon']]['url'];?>" alt="<?php echo $_G['cache']['stamps'][$thread['icon']]['text'];?>" align="absmiddle" />
<?php } if($thread['rushreply']) { ?>
<img src="<?php echo IMGDIR;?>/rushreply_s.png" alt="抢楼" align="absmiddle" />
<?php if($rushinfo[$thread['tid']]) { ?>
<span id="rushtimer_<?php echo $thread['tid'];?>"> 【还有 <span id="rushtimer_body_<?php echo $thread['tid'];?>"></span> <script language="javascript">settimer(<?php echo $rushinfo[$thread['tid']]['timer'];?>, 'rushtimer_body_<?php echo $thread['tid'];?>');</script><?php if($rushinfo[$thread['tid']]['timertype'] == 'start') { ?> 开始 <?php } else { ?> 结束 <?php } ?> 】</span>
<?php } } if($stemplate && $sortid) { ?><?php echo $stemplate[$sortid][$thread['tid']];?><?php } if($thread['readperm']) { ?>[阅读权限 <span class="xw1"><?php echo $thread['readperm'];?></span>]<?php } if($thread['price'] > 0) { if($thread['special'] == '3') { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype=1" title="只看进行中的"><span class="xi1">[悬赏 <span class="xw1"><?php echo $thread['price'];?></span> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['title'];?>]</span></a>
<?php } else { ?>
[售价 <span class="xw1"><?php echo $thread['price'];?></span> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?>]
<?php } } elseif($thread['special'] == '3' && $thread['price'] < 0) { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype=2" title="只看已解决的">[已解决]</a>
<?php } if($thread['folder'] == 'lock') { ?>
<img src="<?php echo IMGDIR;?>/folder_lock.gif" />
<?php } elseif($thread['special'] == 1) { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/pollsmall.png" alt="投票" />
<?php } elseif($thread['special'] == 2) { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/tradesmall.png" alt="商品" />
<?php } elseif($thread['special'] == 3) { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/rewardsmall.png" alt="悬赏" />
<?php } elseif($thread['special'] == 4) { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/activitysmall.png" alt="活动" />
<?php } elseif($thread['special'] == 5) { ?>
<img src="<?php echo IMGDIR;?>/debatesmall.gif" alt="辩论" />
<?php } if($thread['attachment'] == 2) { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/image_s.png" alt="attach_img" title="图片附件" align="absmiddle" />
<?php } elseif($thread['attachment'] == 1) { ?>
<img src="<?php echo STATICURL;?>image/filetype/common.gif" alt="attachment" title="附件" align="absmiddle" />
<?php } if($thread['mobile']) { ?>
<img src="<?php echo IMGDIR;?>/mobile-attach-<?php echo $thread['mobile'];?>.png" alt="手机发帖" align="absmiddle" />
<?php } if($thread['digest'] > 0 && $filter != 'digest') { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/digest_<?php echo $thread['digest'];?>.png" align="absmiddle" alt="digest" title="精华 <?php echo $thread['digest'];?>" />
<?php } if($thread['displayorder'] == 0) { if($thread['recommendicon']) { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/recommend.png" align="absmiddle" alt="recommend" title="评价指数 <?php echo $thread['recommends'];?>" />
<?php } if($thread['heatlevel']) { ?>
<img src="<?php echo $_G['style']['styleimgdir'];?>/hot_<?php echo $thread['heatlevel'];?>.png" align="absmiddle" alt="heatlevel" title="热度: <?php echo $thread['heats'];?>" />
<?php } if($thread['rate'] > 0) { ?>
<img src="<?php echo IMGDIR;?>/agree.gif" align="absmiddle" alt="agree" title="帖子被加分" />
<?php } elseif($thread['rate'] < 0) { ?>
<img src="<?php echo IMGDIR;?>/disagree.gif" align="absmiddle" alt="disagree" title="帖子被减分" />
<?php } } if($thread['replycredit'] > 0) { ?>
<span class="xi1">[回帖奖励 <strong> <?php echo $thread['replycredit'];?></strong> ]</span>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_thread_subject'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_thread_subject'][$key];?>
<?php if($thread['multipage']) { ?>
<span class="tps"><?php echo $thread['multipage'];?></span>
<?php } if($thread['weeknew']) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $thread['tid'];?>&amp;goto=lastpost#lastpost" class="xi1">New</a>
<?php } if(!$thread['forumstick'] && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { if($thread['related_group'] == 0 && $thread['closed'] > 1) { $thread[tid]=$thread[closed];?><?php } if($groupnames[$thread['tid']]) { ?>
<span class="fromg xg1"> [来自: <a href="forum.php?mod=group&amp;fid=<?php echo $groupnames[$thread['tid']]['fid'];?>" target="_blank" class="xg1"><?php echo $groupnames[$thread['tid']]['name'];?></a>]</span>
<?php } } ?>

</div>
<div class="auth_msg cl">
<?php if($thread['authorid'] && $thread['author']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>"  class="user_name" c="1"<?php if($groupcolor[$thread['authorid']]) { ?> style="color: <?php echo $groupcolor[$thread['authorid']];?>;"<?php } ?>><?php echo $thread['author'];?></a><?php if(!empty($verify[$thread['authorid']])) { ?> <?php echo $verify[$thread['authorid']];?><?php } } else { ?>
<?php echo $_G['setting']['anonymoustext'];?>
<?php } ?>
<span class="time txt"><span<?php if($thread['istoday']) { ?> class="xi1"<?php } ?>><?php echo $thread['dateline'];?></span></span>
<?php if($thread['typeid']) { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $thread['fid'];?>&amp;filter=typeid&amp;typeid=<?php echo $thread['typeid'];?>" class="time txt"><?php echo $thread['typename'];?></a>
<?php } ?>

<span class="numb msg"><i></i><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>" class="xi2"><?php echo $thread['allreplies'];?></a></span>
<span class="numb view"><i></i><?php if($thread['isgroup'] != 1) { ?><?php echo $thread['views'];?><?php } else { ?><?php echo $groupnames[$thread['tid']]['views'];?><?php } ?></span>
</div>
</div>
<?php if(!$_GET['archiveid'] && $_G['forum']['ismoderator']) { if($thread['fid'] == $_G['fid']) { if($thread['displayorder'] <= 3 || $_G['adminid'] == 1) { ?>
<input onclick="tmodclick(this)" type="checkbox" name="moderate[]" value="<?php echo $thread['tid'];?>" class="operate" />
<?php } else { ?>
<input type="checkbox" disabled="disabled" class="operate"/>
<?php } } else { ?>
<input type="checkbox" disabled="disabled" class="operate" />
<?php } } ?>
</li>
<?php } ?>
</ul>
<?php if($_G['forum']['ismoderator'] && $_G['forum_threadcount']) { include template('forum/topicadmin_modlayer'); } ?>
</form>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_threadlist_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_threadlist_bottom'];?>
</div>
<div class="base_widget_paging">
<?php echo $multipage;?>
</div>
</div>

<?php if(!IS_ROBOT) { ?>
<div id="filter_special_menu" class="p_pop pop_menu" style="display:none" change="location.href='forum.php?mod=forumdisplay&fid=<?php echo $_G['fid'];?>&filter='+$('filter_special').value">
<ul>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">全部主题</a></li>
<?php if($showpoll) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=poll<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">投票</a></li><?php } if($showtrade) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=trade<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">商品</a></li><?php } if($showreward) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">悬赏</a></li><?php } if($showactivity) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=activity<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">活动</a></li><?php } if($showdebate) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=debate<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">辩论</a></li><?php } ?>
</ul>
</div>
<div id="filter_reward_menu" class="p_pop pop_menu" style="display:none" change="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype='+$('filter_reward').value">
<ul>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">全部悬赏</a></li>
<?php if($showpoll) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype=1">进行中</a></li><?php } if($showtrade) { ?><li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=specialtype&amp;specialtype=reward<?php echo $forumdisplayadd['specialtype'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>&amp;rewardtype=2">已解决</a></li><?php } ?>
</ul>
</div>
<div id="filter_sort_menu" class="p_pop pop_menu" style="display:none">
<ul class="pop_moremenu">
<li>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=&amp;orderby=<?php echo $forumdisplayadd['author'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">默认排序</a>
</li>
<li>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=author&amp;orderby=dateline<?php echo $forumdisplayadd['author'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">发帖时间</a>
</li>
<li>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=reply&amp;orderby=replies<?php echo $forumdisplayadd['reply'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">回复/查看</a>
</li>
<li>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=reply&amp;orderby=views<?php echo $forumdisplayadd['view'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">查看</a>
</li>
</ul>
</div>
<div id="filter_date_menu" class="p_pop pop_menu" style="display:none">
<ul class="pop_moremenu">
<li>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">全部时间</a>
</li>
<li>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline&amp;dateline=86400<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">一天</a>
</li>
<li>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline&amp;dateline=172800<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">两天</a>
</li>
<li>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline&amp;dateline=604800<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">一周</a>
</li>
<li>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline&amp;dateline=2592000<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">一个月</a>
</li>
<li>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;orderby=<?php echo $_GET['orderby'];?>&amp;filter=dateline&amp;dateline=7948800<?php echo $forumdisplayadd['dateline'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">三个月</a>
</li>
</ul>
</div>
<?php if(!$_G['setting']['closeforumorderby']) { ?>
<div id="filter_orderby_menu" class="p_pop pop_menu" style="display:none">
<ul>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">默认排序</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=author&amp;orderby=dateline<?php echo $forumdisplayadd['author'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">发帖时间</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=reply&amp;orderby=replies<?php echo $forumdisplayadd['reply'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">回复/查看</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=reply&amp;orderby=views<?php echo $forumdisplayadd['view'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">查看</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=lastpost&amp;orderby=lastpost<?php echo $forumdisplayadd['lastpost'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">最后发表</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=heat&amp;orderby=heats<?php echo $forumdisplayadd['heat'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>">热门</a></li>
</ul>
</div>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_postbutton_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_postbutton_bottom'];?><?php } else { ?><div id="threadlist" class="bm bmw"<?php if($_G['uid']) { ?> style="position: relative;"<?php } ?>>
<?php if($quicksearchlist && !$_GET['archiveid']) { ?><script type="text/javascript">
var forum_optionlist = <?php if($forum_optionlist) { ?>'<?php echo $forum_optionlist;?>'<?php } else { ?>''<?php } ?>;
</script>
<script src="<?php echo $_G['setting']['jspath'];?>threadsort.js?<?php echo VERHASH;?>" type="text/javascript"></script><?php if(is_array($quicksearchlist)) foreach($quicksearchlist as $optionid => $option) { $formsearch = '';?>        <?php if(getstatus($option['search'], 1)) { ?>
        <?php
$__VERHASH = VERHASH;$formsearch = <<<EOF

            <div style="
EOF;
 if($option['type'] == 'checkbox') { 
$formsearch .= <<<EOF
clear:left;padding-bottom: 5px;
EOF;
 } else { 
$formsearch .= <<<EOF
float: left;width: 48%;height: 30px; overflow: hidden;
EOF;
 } 
$formsearch .= <<<EOF
">
                <span style="padding-right: 1em;">{$option['title']}:</span>
                
EOF;
 if(in_array($option['type'], array('radio', 'checkbox', 'select', 'range'))) { 
$formsearch .= <<<EOF

                    <span id="select_{$option['identifier']}">
                    
EOF;
 if($option['type'] == 'select') { 
$formsearch .= <<<EOF

                        
EOF;
 if($_GET['searchoption'][$optionid]['value']) { 
$formsearch .= <<<EOF

                            <script type="text/javascript">
                                changeselectthreadsort('{$_GET['searchoption'][$optionid]['value']}', {$optionid}, 'search');
                            </script>
                        
EOF;
 } else { 
$formsearch .= <<<EOF

                            <select name="searchoption[{$optionid}][value]" id="{$option['identifier']}" onchange="changeselectthreadsort(this.value, '{$optionid}', 'search');" class="ps vm">
                                <option value="0">请选择</option>
                            
EOF;
 if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$formsearch .= <<<EOF
                                
EOF;
 if(!$value['foptionid']) { 
$formsearch .= <<<EOF

                                <option value="{$id}">{$value['content']} 
EOF;
 if($value['level'] != 1) { 
$formsearch .= <<<EOF
&raquo;
EOF;
 } 
$formsearch .= <<<EOF
</option>
                                
EOF;
 } 
$formsearch .= <<<EOF

                            
EOF;
 } 
$formsearch .= <<<EOF

                            </select>
<input type="hidden" name="searchoption[{$optionid}][type]" value="{$option['type']}">
                        
EOF;
 } 
$formsearch .= <<<EOF

                    
EOF;
 } elseif($option['type'] != 'checkbox') { 
$formsearch .= <<<EOF

                        <select name="searchoption[{$optionid}][value]" id="{$option['identifier']}" class="ps vm">
                            <option value="0">请选择</option>
                        
EOF;
 if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$formsearch .= <<<EOF
                            <option value="{$id}" 
EOF;
 if($_GET['searchoption'][$optionid]['value'] == $id) { 
$formsearch .= <<<EOF
selected="selected"
EOF;
 } 
$formsearch .= <<<EOF
>{$value}</option>
                        
EOF;
 } 
$formsearch .= <<<EOF

                        </select>
                        <input type="hidden" name="searchoption[{$optionid}][type]" value="{$option['type']}">
                    
EOF;
 } else { 
$formsearch .= <<<EOF

                        
EOF;
 if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$formsearch .= <<<EOF
                            <label><input type="checkbox" class="pc" name="searchoption[{$optionid}][value][{$id}]" value="{$id}" 
EOF;
 if(is_array($_GET['searchoption'][$optionid]) && $_GET['searchoption'][$optionid]['value'][$id]) { 
$formsearch .= <<<EOF
checked="checked"
EOF;
 } 
$formsearch .= <<<EOF
>{$value}</label>
                        
EOF;
 } 
$formsearch .= <<<EOF

                        <input type="hidden" name="searchoption[{$optionid}][type]" value="checkbox">
                    
EOF;
 } 
$formsearch .= <<<EOF

                    </span>
                
EOF;
 } else { 
$formsearch .= <<<EOF

                    
EOF;
 if($option['type'] == 'calendar') { 
$formsearch .= <<<EOF

                        <script src="{$_G['setting']['jspath']}calendar.js?{$__VERHASH}" type="text/javascript"></script>
                        <input type="text" name="searchoption[{$optionid}][value]" size="15" class="px vm" value="
EOF;
 if(is_array($_GET['searchoption'][$optionid])) { 
$formsearch .= <<<EOF
{$_GET['searchoption'][$optionid]['value']}
EOF;
 } 
$formsearch .= <<<EOF
" onclick="showcalendar(event, this, false)" />
                    
EOF;
 } else { 
$formsearch .= <<<EOF

                        <input type="text" name="searchoption[{$optionid}][value]" size="15" class="px vm" value="
EOF;
 if(is_array($_GET['searchoption'][$optionid])) { 
$formsearch .= <<<EOF
{$_GET['searchoption'][$optionid]['value']}
EOF;
 } 
$formsearch .= <<<EOF
" />
                    
EOF;
 } 
$formsearch .= <<<EOF

                
EOF;
 } 
$formsearch .= <<<EOF

            </div>
            
EOF;
?>
<?php } ?>
    <?php $formsearch_html .= $formsearch;?><?php $fontsearch = '';$showoption = array();$tmpcount = 0;?><?php if(getstatus($option['search'], 2)) { ?>
    <?php
$fontsearch = <<<EOF

<tr>
<th width="8%">{$option['title']}:</th>
            <td>
                <ul class="cl">
                    <li
EOF;
 if($_GET[''.$option['identifier']] == 'all') { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1{$filterurladd}&amp;{$option['identifier']}=all{$sorturladdarray[$option['identifier']]}" class="xi2">不限</a></li>

EOF;
 if($option['type'] == 'select') { if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { if($value['foptionid'] == 0) { 
$fontsearch .= <<<EOF

<li
EOF;
 if(preg_match('/^'.$value['optionid'].'\./i', $_GET[''.$option['identifier']]) || preg_match('/^'.$value['optionid'].'$/i', $_GET[''.$option['identifier']])) { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1&amp;{$option['identifier']}={$id}{$sorturladdarray[$option['identifier']]}" class="xi2">{$value['content']}</a></li>

EOF;
 } } if(!($_GET[''.$option['identifier']] == 'all' || !isset($_GET[''.$option['identifier']]))) { if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { if((preg_match('/^'.$value['foptionid'].'\./i', $_GET[''.$option['identifier']]) || preg_match('/^'.$value['foptionid'].'$/i', $_GET[''.$option['identifier']])) && ($showoption[$value['count']][$id] = $value)) { } } if(ksort($showoption)) { } if(is_array($showoption)) foreach($showoption as $optioncount => $values) { if($tmpcount != $optioncount && ($tmpcount = $optioncount)) { 
$fontsearch .= <<<EOF

</ul><ul class="subtsm cl">
EOF;
 if(is_array($values)) foreach($values as $id => $value) { 
$fontsearch .= <<<EOF
<li
EOF;
 if(preg_match('/^'.$value['optionid'].'\./i', $_GET[''.$option['identifier']]) || preg_match('/^'.$value['optionid'].'$/i', $_GET[''.$option['identifier']])) { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1&amp;{$option['identifier']}={$id}{$sorturladdarray[$option['identifier']]}" class="xi2">{$value['content']}</a></li>

EOF;
 } 
$fontsearch .= <<<EOF

</ul><ul>

EOF;
 } } } } else { if(is_array($option['choices'])) foreach($option['choices'] as $id => $value) { 
$fontsearch .= <<<EOF
<li
EOF;
 if($_GET[''.$option['identifier']] && !strcmp($id, $_GET[''.$option['identifier']])) { 
$fontsearch .= <<<EOF
 class="a"
EOF;
 } 
$fontsearch .= <<<EOF
><a href="forum.php?mod=forumdisplay&amp;fid={$_G['fid']}&amp;filter=sortid&amp;sortid={$_GET['sortid']}&amp;searchsort=1&amp;{$option['identifier']}={$id}{$sorturladdarray[$option['identifier']]}" class="xi2">{$value}</a></li>

EOF;
 } } 
$fontsearch .= <<<EOF

                </ul>
            </td>
</tr>

EOF;
?>
     <?php } ?>
     <?php $fontsearch_html .= $fontsearch;?><?php } if($formsearch_html || $fontsearch_html) { ?>
<div>
<?php if($fontsearch_html) { ?>
    <div class="ptn pbn mbm bbs">
    <table id="fontsearch" class="tsm cl">
         <?php echo $fontsearch_html;?>
    </table>
    </div>
<?php } if($formsearch_html) { ?>
    <form method="post" autocomplete="off" name="searhsort" id="searhsort" class="bbs bm_c pns mfm cl" action="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=sortid&amp;sortid=<?php echo $_GET['sortid'];?>">
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
        <div class="ptm cl"><?php echo $formsearch_html;?>
        <button type="submit" class="pn pnc" name="searchsortsubmit"><em>搜索</em></button></div>
    </form>
<?php } ?>
</div>
<?php } } ?>
<?php echo $sorttemplate['header'];?>
<form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&amp;action=moderate&amp;fid=<?php echo $_G['fid'];?>&amp;infloat=yes&amp;nopost=yes">
<?php echo $sorttemplate['body'];?>
<?php if($_G['forum']['ismoderator'] && $_G['forum_threadcount']) { include template('forum/topicadmin_modlayer'); } ?>
</form>
<?php echo $sorttemplate['footer'];?>
</div>

<div class="bm bw0 pgs cl">
<?php echo $multipage;?>
<span <?php if($_G['setting']['visitedforums']) { ?>id="visitedforumstmp" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id,'pos':'21'})"<?php } ?> class="pgb y"><a href="forum.php">返&nbsp;回</a></span>
<?php if(!$_GET['archiveid']) { ?><a href="javascript:;" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})"<?php if(!$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle'])) { ?> onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>')"<?php } else { ?> onclick="location.href='forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>';return false;"<?php } ?> title="发新帖"><img src="<?php echo IMGDIR;?>/pn_post.png" alt="发新帖" /></a><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_postbutton_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_postbutton_bottom'];?>
</div><?php } } ?>
</div>
<!--[diy=diyfastposttop]--><div id="diyfastposttop" class="area"></div><!--[/diy]-->

<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_bottom'];?>
<!--[diy=diyforumdisplaybottom]--><div id="diyforumdisplaybottom" class="area"></div><!--[/diy]-->
</div>

<?php if($_G['forum']['allowside']) { ?>
<div class="sd">
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_side_top'])) echo $_G['setting']['pluginhooks']['forumdisplay_side_top'];?>
<div class="left_wrap ">
<div class="rank">
今日: <strong
class="xi1"><?php echo $_G['forum']['todayposts'];?></strong><?php if($_G['forum']['todayposts']) { if($_G['forum']['todayposts'] < $_G['forum']['yesterdayposts']) { ?>
<b class="ico_fall">&nbsp;</b><?php } else { ?><b class="ico_increase">&nbsp;</b><?php } } ?><span class="pipe">|</span>主题:
<strong class="xi1"><?php echo $_G['forum']['threads'];?></strong><?php if($_G['forum']['rank']) { ?><span class="pipe">|</span>排名:
<strong class="xi1"
title="上次排名:<?php echo $_G['forum']['oldrank'];?>"><?php echo $_G['forum']['rank'];?></strong><?php if($_G['forum']['rank'] <= $_G['forum']['oldrank']) { ?>
<b class="ico_increase">&nbsp;</b><?php } else { ?><b class="ico_fall">&nbsp;</b><?php } } ?>
</div>
</div>
<?php if((!empty($_G['forum']['domain']) && !empty($_G['setting']['domain']['root']['forum'])) || $moderatedby || ($_G['page'] == 1 && $_G['forum']['rules'])) { ?>
<div class="left_wrap ">
<div class="con">
<div class="hotspot">
<?php if($_G['forum']['rules']) { ?>
<h3>公告:</h3>
<div class="announcement clearfix">
<p><?php echo $_G['forum']['rules'];?></p>
</div>
<?php } if($moderatedby) { ?>
<h4>版主:</h4>
<div class="moderators"><?php echo $moderatedby;?></div>
<?php } ?>
</div>
</div>
</div>
<?php } ?>
<div class="drag">
<!--[diy=diy2]--><div id="diy2" class="area"><div id="framefYijyy" class="cl_frame_bm frame move-span cl frame-1"><div id="framefYijyy_left" class="column frame-1-c"><div id="framefYijyy_left_temp" class="move-span temp"></div><?php block_display('34');?></div></div><div id="frameQgGAkZ" class="cl_frame_bm frame move-span cl frame-1"><div id="frameQgGAkZ_left" class="column frame-1-c"><div id="frameQgGAkZ_left_temp" class="move-span temp"></div></div></div><div id="frameMLjbsg" class="cl_frame_bm frame move-span cl frame-1"><div id="frameMLjbsg_left" class="column frame-1-c"><div id="frameMLjbsg_left_temp" class="move-span temp"></div></div></div></div><!--[/diy]-->
</div>
<?php if(!empty($_G['forum']['recommendlist'])) { ?><div class="left_wrap">
<div class="con">
<div class="hotspot">
<h3>推荐主题</h3>
<ul class="cl"><?php if(is_array($_G['forum']['recommendlist'])) foreach($_G['forum']['recommendlist'] as $rtid => $recommend) { ?><li><span></span><a href="forum.php?mod=viewthread&amp;tid=<?php echo $rtid;?>" <?php echo $recommend['subjectstyles'];?> target="_blank"><span></span><?php echo $recommend['subject'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_side_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_side_bottom'];?>
</div>
<?php } ?>
</div>
</div>
<?php if($_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])) { ?>
<ul class="p_pop" id="newspecial_menu" style="display: none">
<?php if(!$_G['forum']['allowspecialonly']) { ?><li><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>">发表帖子</a></li><?php } if($_G['forum']['threadsorts'] && !$_G['forum']['allowspecialonly']) { if(is_array($_G['forum']['threadsorts']['types'])) foreach($_G['forum']['threadsorts']['types'] as $id => $threadsorts) { if($_G['forum']['threadsorts']['show'][$id]) { ?>
<li class="popupmenu_option"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;extra=<?php echo $extra;?>&amp;sortid=<?php echo $id;?>"><?php echo $threadsorts;?></a></li>
<?php } } } if($_G['group']['allowpostpoll']) { ?><li class="poll"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=1">发起投票</a></li><?php } if($_G['group']['allowpostreward']) { ?><li class="reward"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=3">发布悬赏</a></li><?php } if($_G['group']['allowpostdebate']) { ?><li class="debate"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=5">发起辩论</a></li><?php } if($_G['group']['allowpostactivity']) { ?><li class="activity"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=4">发起活动</a></li><?php } if($_G['group']['allowposttrade']) { ?><li class="trade"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=2">出售商品</a></li><?php } if($_G['setting']['threadplugins']) { if(is_array($_G['forum']['threadplugin'])) foreach($_G['forum']['threadplugin'] as $tpid) { if(array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])) { ?>
<li class="popupmenu_option"<?php if($_G['setting']['threadplugins'][$tpid]['icon']) { ?> style="background-image:url(source/plugin/<?php echo $tpid;?>/<?php echo $_G['setting']['threadplugins'][$tpid]['icon'];?>)"<?php } ?>><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;specialextra=<?php echo $tpid;?>"><?php echo $_G['setting']['threadplugins'][$tpid]['name'];?></a></li>
<?php } } } ?>
</ul>
<?php } if($_G['setting']['visitedforums'] && $_G['forum']['status'] != 3) { ?>
<div id="visitedforums_menu" class="p_pop blk cl" style="display: none;">
<table cellspacing="0" cellpadding="0">
<tr>
<td id="v_forums">
<h3 class="mbn pbn bbda xg1">浏览过的版块</h3>
<ul class="xl xl1">
<?php echo $_G['setting']['visitedforums'];?>
</ul>
</td>
</tr>
</table>
</div>
<?php } if($_G['setting']['threadmaxpages'] > 1 && $page && !$subforumonly) { ?>
<script type="text/javascript">document.onkeyup = function(e){keyPageScroll(e, <?php if($page > 1) { ?>1<?php } else { ?>0<?php } ?>, <?php if($page < $_G['setting']['threadmaxpages'] && $page < $_G['page_next']) { ?>1<?php } else { ?>0<?php } ?>, 'forum.php?mod=forumdisplay&fid=<?php echo $_G['fid'];?>&filter=<?php echo $filter;?>&orderby=<?php echo $_GET['orderby'];?><?php echo $forumdisplayadd['page'];?>&<?php echo $multipage_archive;?>', <?php echo $page;?>);}</script>
<?php } if(empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && empty($_GET['filter']) ) { ?>
<script type="text/javascript">checkForumnew_handle = setTimeout(function () {checkForumnew(<?php echo $_G['fid'];?>, lasttime);}, checkForumtimeout);</script>
<?php } ?>
<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>
<?php if(empty($_G['setting']['disfixednv_forumdisplay']) ) { ?><script>fixed_top_nv();</script><?php } include template('common/footer'); ?>