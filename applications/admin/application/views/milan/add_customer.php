<?php $this->load->view('common/header2')?>
<ol class="breadcrumb">
    <li><a href="/common">首页</a></li>
    <li><a href="/customer/index">客户列表</a></li>
    <li class="active"><a href="#">添加客户</a></li>
</ol>

<div class="container-fluid" style="margin:10px">
    <fieldset>
        <legend><h1>添加客户</h1></legend>
        <form class="form-horizontal" method="post">
            <div class="form-group">
                <label class="col-sm-2 control-label">客户姓名*</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="name" valType="required" msg="客户姓名不能为空" placeholder="请输入客户姓名">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">客户手机号*</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="mobile" valType="MOBILE" msg="手机号格式不正确" placeholder="请输入客户手机号">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">宴会类型*</label>
                <div class="col-sm-4">
                    <select class="form-control" name="type" >
                        <?php foreach (C('party') as $k => $v):?>
                        <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">预留时间*</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control Wdate date" name="create_time" style="height:34px" placeholder="请选择时间">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">宴会时间</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control Wdate date" name="dinner_time" style="height:34px" placeholder="请选择时间">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">接单员</label>
                <div class="col-sm-4">
                    <input type="text" name="reception" class="form-control" placeholder="请输入接单员">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">首次跟踪记录</label>
                <div class="col-sm-4">
                    <textarea rows="3" name="content" class="form-control" placeholder="请输入"></textarea>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">备注</label>
                <div class="col-sm-4">
                    <textarea rows="3" name="remark" class="form-control" placeholder="请输入"></textarea>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-6 text-center">
                    <input type="submit" id="submit" value="保  存" class="btn btn-danger">
                </div>
            </div>
        </form>
    </fieldset>
</div>
<?php $this->load->view('common/footer')?>
<script type="text/javascript">
seajs.use(['<?php echo css_js_url('adddrinkorder.js', 'admin')?>', 'jqvalidate'], function(a){
	a.datepick();
})
</script>
</body>
</html>