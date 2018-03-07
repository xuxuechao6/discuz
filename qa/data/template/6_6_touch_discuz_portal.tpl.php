<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); include template('common/mwt_frame'); ?><script>
jQuery(document).ready(function($) {
    var catid = <?php if($_GET['catid']) { ?>'<?php echo $_GET['catid'];?>'<?php } else { ?>0<?php } ?>;
require(["jsapp","mwt"],function(jsapp){
jsapp.run("portal/index",catid);
});
});
</script><?php include template('common/footer'); ?>