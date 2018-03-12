<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
block_get('3,4,6,5');?><?php include template('common/header'); require './source/function/function_post.php';?><?php require './config/config_global.php';?><style id="diy_style" type="text/css"></style>
<div id="append_parent"></div>
<div class="wp">
    <!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
    <div class="xiaomi cl">
        <div class="mn">
            <!--[diy=diylefttop]--><div id="diylefttop" class="area"><div id="frameBeEh6K" class="cl_frame_bm frame move-span cl frame-1"><div id="frameBeEh6K_left" class="column frame-1-c"><div id="frameBeEh6K_left_temp" class="move-span temp"></div><?php block_display('3');?></div></div></div><!--[/diy]-->
            <div class="theme">
                <?php $prefix=$_config['db']['1']['tablepre']?>                <?php $type = $_G['gp_type'];?>                <div class="theme_con">
                    <div class="theme_nav">
                        <a href="portal.php" class="theme_nav_list <?php if(!$type) { ?>current<?php } ?>">最新回复</a>
                        <a href="portal.php?type=1" class="theme_nav_list <?php if($type) { ?>current<?php } ?>">最新主题</a>
                        <a href="forum.php?mod=misc&amp;action=nav" onclick="showWindow('nav', this.href, 'get', 0)" class="btnn theme_nav_btn">发表新主题</a>
                    </div>
                    <?php $pagesize = 20;?>                    <?php if($type) { ?>
                    <?php $amount=0;?>                    <?php $count = DB::fetch_all("
                    SELECT
                        count(*) AS count
                    FROM "
                        .DB::table('forum_thread'). " t1
                    LEFT OUTER JOIN " .DB::table('forum_threadclass')." t2 ON t1.typeid = t2.typeid
                    LEFT OUTER JOIN ".DB::table('forum_forumrecommend')." t3 ON t1.tid = t3.tid
                    WHERE
                        t1.displayorder >= 0
                    AND t3.moderatorid <> ''
                    ");?>                    <?php $amount=$count[0]['count'];?>                    <?php $pagecount = $amount ? (($amount < $pagesize) ? 1 : (($amount % $pagesize) ? ((int)($amount / $pagesize) + 1) : ($amount / $pagesize))) : 0;?>                    <?php $page = !empty($_G['gp_page']) ? max(1, intval($_G['gp_page'])) : 1;?>                    <?php $page = $page > $pagecount ? 1 : $page;?>                    <?php $startlimit = ($page - 1) * $pagesize;?>                    <?php $multipage = multi($amount, $pagesize, $page, 'portal.php?type=1&', $pagecount);?>                    <?php $res = DB::fetch_all("SELECT
                                                     t1.tid,
                                                     t1.fid,
                                                     t1.typeid,
                                                     t1.authorid,
                                                     t1.author,
                                                     t2.`name` AS typename,
                                                     t1.`subject`,
                                                     t1.dateline AS dateline,
                                                     t1.views,
                                                     t1.replies,
                                                     t1.special,
                                                     t1.attachment,
                                                     t1.digest,
                                                     t1.displayorder,
                                                     t1.heats,
                                                     t3.moderatorid,
                                                     t1.highlight,
                                                     t1.bgcolor
                                                 FROM
                                                     ".DB::table('forum_thread')." t1
                                                 LEFT OUTER JOIN ".DB::table('forum_threadclass')." t2 ON t1.typeid = t2.typeid
                                                 LEFT OUTER JOIN ".DB::table('forum_forumrecommend')." t3 ON t1.tid = t3.tid
                                                 WHERE
                                                     t1.displayorder >= 0
                                                 ORDER BY
                                                     t1.dateline DESC LIMIT $startlimit, $pagesize");?>                    <?php } else { ?>
                    <?php $amount=0;?>                    <?php $count = DB::fetch_all("select count(*) as count from " .DB::table('forum_thread')." t1 where t1.displayorder>=0;");?>                    <?php $amount=$count[0]['count'];?>                    <?php $pagecount = $amount ? (($amount < $pagesize) ? 1 : (($amount % $pagesize) ? ((int)($amount / $pagesize) + 1) : ($amount / $pagesize))) : 0;?>                    <?php $page = !empty($_G['gp_page']) ? max(1, intval($_G['gp_page'])) : 1;?>                    <?php $page = $page > $pagecount ? 1 : $page;?>                    <?php $startlimit = ($page - 1) * $pagesize;?>                    <?php $multipage = multi($amount, $pagesize, $page, 'portal.php?', $pagecount);?>                    <?php $res = DB::fetch_all("SELECT
                                                    t1.tid,
                                                    t1.fid,
                                                    t1.typeid,
                                                    t1.authorid,
                                                    t1.author,
                                                    t2.`name` AS typename,
                                                    t1.`subject`,
                                                    t1.lastpost AS dateline,
                                                    t1.views,
                                                    t1.replies,
                                                    t1.special,
                                                    t1.attachment,
                                                    t1.digest,
                                                    t1.displayorder,
                                                    t1.heats,
                                                    t3.moderatorid,
                                                    t1.highlight,
                                                    t1.bgcolor
                                                FROM
                                                    ".DB::table('forum_thread')." t1
                                                LEFT OUTER JOIN ".DB::table('forum_threadclass')." t2 ON t1.typeid = t2.typeid
                                                LEFT OUTER JOIN ".DB::table('forum_forumrecommend')." t3 ON t1.tid = t3.tid
                                                WHERE
                                                    t1.displayorder >= 0
                                                ORDER BY
                                                    t1.lastpost DESC LIMIT $startlimit, $pagesize");?>                    <?php } ?>
                    <?php if(is_array($res)) foreach($res as $key => $thread) { ?>                    <ul>
                        <li id="thread_<?php echo $thread['tid'];?>">
                            <div class="theme_list_img">
                                <a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>" class="user_name">
                                   <?php echo avatar($thread['authorid'], 'small'); ?>                                </a>
                            </div>
                            <div class="theme_list_con">
                                <div class="title">
                                    <?php $colorarray= array('', '#EE1B2E', '#EE5023', '#996600', '#3C9D40', '#2897C5', '#2B65B7', '#8F2A90', '#EC1282');?>                                    <a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>" target="_blank" class="title_name"<?php if($thread['highlight']) { ?> style="<?php if($thread['highlight']) { ?>color:<?php echo $colorarray[$thread['highlight']];?>;<?php } if($thread['bgcolor']) { ?>background-color:<?php echo $thread['bgcolor'];?>;<?php } ?>"<?php } ?> ><?php echo $thread['subject'];?></a>
                                    <?php if($thread['special'] == 1) { ?>
                                    <img class="stamp" src="<?php echo $_G['style']['styleimgdir'];?>/pollsmall.png" />
                                    <?php } elseif($thread['special'] == 2) { ?>
                                    <img class="stamp" src="<?php echo $_G['style']['styleimgdir'];?>/tradesmall.png" />
                                    <?php } elseif($thread['special'] == 3) { ?>
                                    <img class="stamp" src="<?php echo $_G['style']['styleimgdir'];?>/rewardsmall.png" />
                                    <?php } elseif($thread['special'] == 4) { ?>
                                    <img class="stamp" src="<?php echo $_G['style']['styleimgdir'];?>/activitysmall.png" />
                                    <?php } elseif($thread['special'] == 5) { ?>
                                    <img class="stamp" src="<?php echo IMGDIR;?>/debatesmall.gif"/>
                                    <?php } ?>

                                    <?php if($thread['attachment'] == 2) { ?>
                                    <img src="<?php echo $_G['style']['styleimgdir'];?>/image_s.png" alt="attach_img"  align="absmiddle" />
                                    <?php } elseif($thread['attachment'] == 1) { ?>
                                    <img src="<?php echo STATICURL;?>image/filetype/common.gif" alt="attachment" align="absmiddle" />
                                    <?php } ?>
                                    <?php if($thread['digest']) { ?>
                                    <img src="<?php echo $_G['style']['styleimgdir'];?>/digest_<?php echo $thread['digest'];?>.png" align="absmiddle" alt="digest" />
                                    <?php } ?>

                                    <?php if($thread['heats']) { ?>
                                    <?php if($thread['heats']>3) { ?>
                                    <?php $thread[heats]=3?>                                    <?php } ?>
                                    <img src="<?php echo $_G['style']['styleimgdir'];?>/hot_<?php echo $thread['heats'];?>.png" align="absmiddle" alt="heatlevel" />
                                    <?php } ?>
                                    <?php if($thread['moderatorid']) { ?>
                                    <img src="<?php echo $_G['style']['styleimgdir'];?>/recommend.png" align="absmiddle" alt="recommend" />
                                    <?php } ?>

                                 </div>
                                <div class="auth_msg cl">
                                    <a  href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>" class="user_name" target="_blank"><?php echo $thread['author'];?></a>
<span class="time txt">
                                <?php echo date('Y-m-d H:i:s',$thread[dateline]);?>                                </span>
                                    <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $thread['fid'];?>&amp;filter=typeid&amp;typeid=<?php echo $thread['typeid'];?>" class="time txt"><?php echo $thread['typename'];?></a>
                                    <?php if(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
                                    <span class="stick txt">·置顶</span>
                                    <?php } ?>
                                    <span class="numb msg"><i></i><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>" class="xi2"><?php echo $thread['replies'];?></a></span>
                                    <span class="numb view"><i></i><?php echo $thread['views'];?></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <?php } ?>
                    <div class="base_widget_paging">
                        <div id="pag"><?php echo $multipage;?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sd">
            <!--[diy=diyrighttop]--><div id="diyrighttop" class="area"><div id="framefcYtcu" class="cl_frame_bm frame move-span cl frame-1"><div id="framefcYtcu_left" class="column frame-1-c"><div id="framefcYtcu_left_temp" class="move-span temp"></div><?php block_display('4');?><?php block_display('6');?><?php block_display('5');?></div></div></div><!--[/diy]-->
            <!--[diy=diyrightbottom]--><div id="diyrightbottom" class="area"></div><!--[/diy]-->
        </div>
    </div>
</div><?php include template('common/footer'); ?>