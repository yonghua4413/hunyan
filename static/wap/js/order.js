/**
 * 册子详情页js
 * @author yonghua@gz-zc.cn
 */
define(function(require, exports, module){
	require('dialog');
	var public = require('public');
	require('dropload');
	require('fastclick');
	var my_dialog = require('my_dialog');
	
	var attachFastClick  = Origami.fastclick;
	module.exports = {
			alert:function(msg){
				var d = dialog({
					title:"提示",
					content:msg,
					cancelValue:"确定",
					cancel:function(){},
				})
				d.width(150);
				d.showModal();
			},
			jump:function(){
				$('.jump').on('click', function(){
					var id = $(this).attr('data');
					window.location.href='/order/order_detail?id='+id;
				})
			},
			load:function(){
				attachFastClick(document.body);
				$('.checkout').on('click', function(){
				  var url = '/order/payment?id=' + $('#order_id').val();
	        window.location.href = url;
				});
			},
			del:function(){
				$('.yes').on('click', function(){
					var id = $(this).attr('data');
					$.post('/order/del_order',{'id':id}, function(data){
						if(data){
							if(data.code == 1){
								//success
								$(".page-bg").removeClass("act");
				                $(".to-cancel").removeClass("act");
				                $('#o_'+id).remove();
							}else{
								module.exports.alert(data.msg);
							}
						}else{
							module.exports.alert('网络异常');
						}
					})
				})
			},
			view_HD: function(){
			  
        $('.view_HD .list').on('click', function(){
          var id = $(this).data('id');
          $.ajax({
            type:'post',
            url:'/order/view_HD_picture',
            data: {
              order_id: $('#order_id').val(),
              photo_id: id,
            },
            dataType:'json',
            success:function(res){
              if(res.status == 0){
                window.location.href = res.data.image;
              }else{
                my_dialog.alert(res.msg);
              }
            },
            error:function(){

              my_dialog.alert('网络出错，请稍后再试');

            }
          })

        })
     },
	}
})