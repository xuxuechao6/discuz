<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if($_G['uid']) { ?>
<div id="login">
    <a href="home.php?mod=space&amp;do=notice&amp;view=mypost" class="header_msg_wrap">
        <span class="headerbtn header_msg">消息</span>
        <span class="msgnum"><?php if($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></span>
    </a>
    <a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" onmouseover="showMenu({'ctrlid':'user_con','pos':'34'});" class="user cl" id="user_con">
        <span class="user_name"><?php echo $_G['member']['username'];?></span><?php echo avatar($_G[uid],small);?>    </a>
</div>
<?php } else { ?>
<div id="login">
    <a class="loginbtn" href="./member.php?mod=logging&amp;action=login">登录</a>
    <a href="./member.php?mod=register" class="registerbtn">注册</a>
</div>
<?php } ?>