<?php if( _hui('layout') == 'ui-navtop' ){ ?>
</div>
</section>
<div class="rollto"><a href="javascript:;"></a></div>
<?php } ?>
<footer class="footer">
    &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> &nbsp; <?php echo _hui('footer_seo') ?>
    <?php echo _hui('trackcode') ?>
</footer>
<?php if( _hui('layout') !== 'ui-navtop' ){ ?>
</section>
<?php } ?>

<?php  
$roll = 0;
if( is_home() && _hui('sideroll_index_s') ){
	$roll = _hui('sideroll_index');
}else if( (is_category() || is_tag() || is_search()) && _hui('sideroll_list_s') ){
	$roll = _hui('sideroll_list');
}else if( is_single() && _hui('sideroll_post_s') ){
	$roll = _hui('sideroll_post');
}else if( is_page() && _hui('sideroll_page_s') ){
	$roll = _hui('sideroll_page');
}
if( $roll ) $roll = json_encode(explode(' ', $roll));
?>
<script>
window.jui = {
	uri: '<?php echo THEME_URI ?>',
	roll: <?php print_r($roll) ?>,
	ajaxpager: '<?php echo _hui('ajaxpager') ?>'
}
</script>
<script type="text/javascript">
    (function(win,doc){
        var s = doc.createElement("script"), h = doc.getElementsByTagName("head")[0];
        if (!win.alimamatk_show) {
            s.charset = "gbk";
            s.async = true;
            s.src = "http://a.alimama.cn/tkapi.js";
            h.insertBefore(s, h.firstChild);
        };
        var o = {
            pid: "mm_119384109_21352958_71856423",/*推广单元ID，用于区分不同的推广渠道*/
            appkey: "",/*通过TOP平台申请的appkey，设置后引导成交会关联appkey*/
            unid: "",/*自定义统计字段*/
            type: "click" /* click 组件的入口标志 （使用click组件必设）*/
        };
        win.alimamatk_onload = win.alimamatk_onload || [];
        win.alimamatk_onload.push(o);
    })(window,document);
</script>
<?php wp_footer(); ?>
<?php if(isInWexin()) { 
    $wxShareConfig = wx_config();
?>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
    wx.config({
        debug: false,
        appId: '<?php echo $wxShareConfig["appId"];?>',
        timestamp: '<?php echo $wxShareConfig["timestamp"];?>',
        nonceStr: '<?php echo $wxShareConfig["nonceStr"];?>',
        signature: '<?php echo $wxShareConfig["signature"];?>',
        jsApiList: [
            'onMenuShareTimeline',
            'onMenuShareAppMessage'
        ]
    });
    wx.ready(function () {
        var shareSettiing = {
            title: document.title,
            desc: document.title,
            link: window.location.href,
            imgUrl: 'http://www.ankangbuy.com/share/zhi.png',
            success: function (res) {
                //alert('已分享');
            },
            fail: function (res) {
                alert(JSON.stringify(res));
            }
        };
        wx.onMenuShareAppMessage(shareSettiing);
        wx.onMenuShareTimeline(shareSettiing);
    });
</script>
<?php } ?>
</body>
</html>