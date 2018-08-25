<?php
/**
 * Created by www.hidove.cn.
 * User: YuSheng
 * Date: 2018/6/28
 * Time: 17:06
 * 余生云提供高速免备案虚拟主机 yun.hidove.cn  */
include('header.php');
?>
<div class="container">
    <div class="list">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>影视名称</th>
                <th>影视类型</th>
                <th>更新时间</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <span class="jz">正在加载中...</span>
    </div>
</div>
<?php include('footer.php'); ?>
</body>
<script>
    var id = "<?php echo $id; ?>";
</script>
<script src="<?php echo "/template/" . $template ?>/js/read.js"></script>
</html>