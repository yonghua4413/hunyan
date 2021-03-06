<?php $this->load->view('common/header2'); ?>
<ol class="breadcrumb">
    <li><a href="/common">首页</a></li>
    <li>VR场景列表</li>
</ol>

<div class="container-fluid">
    <fieldset>
        <legend>场景列表</legend>
        <a class="btn btn-primary" href="/vtourscene/add">场景制作</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>序号</th>
                    <th>名称</th>
                    <th>分类</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $k => $v):?>
                <tr>
                    <td><?php echo $k+1?></td>
                    <td><?php echo $v['name']?></td>
                    <td><?php echo $v['type_text']?></td>
                    <td><?php echo $v['create_time']?></td>
                    <td>
                        <a href="/vtourscene/scan/<?php echo $v['id']?>" target="_blank"  class="btn btn-primary btn-xs">查看</a>
                        <a href="/vtourscene/edit?id=<?php echo $v['id']?>" class="btn btn-primary btn-xs">修改</a>
                        <a data-id="<?php echo $v['id']?>" class="del btn btn-primary btn-xs">删除</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <!-- page -->
        <div class="row">
            <nav style="float: right">
                <ul class="pagination">
                    <li class="disabled"><a>共<?php echo $data_count?>条</a></li>
                    <?php echo !empty($pagestr) ? $pagestr : ''?>
                </ul>
            </nav>
        </div>
    </fieldset>
</div>
<?php $this->load->view('common/footer')?>
<script>
	seajs.use(['<?php echo css_js_url('vtour.js', 'admin')?>'], function(vtour){
		vtour.del();
	})
</script>
</body>
</html>
