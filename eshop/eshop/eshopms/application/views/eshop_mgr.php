<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta.php'; ?>

    <title>悦居后台管理系统 - 房源管理</title>

    <base href="<?php echo site_url(); ?>">

    <!--bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">

    <!--jQuery UI-->
    <link href="css/jquery-ui-1.10.3.css" rel="stylesheet">

    <!--font awesome-->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!--datatables-->
    <link href="js/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!--gritter-->
    <link href="js/gritter/css/jquery.gritter.css" rel="stylesheet"/>

    <!--pickers css-->
    <link rel="stylesheet" type="text/css" href="js/bootstrap-datepicker/css/datepicker-custom.css" />

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <?php include 'sidebar.php'; ?>
    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content">

        <!-- header section start-->
        <?php include 'header.php'; ?>
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                房源管理
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">首页</a>
                </li>
                <li>
                    <a href="#">房源管理</a>
                </li>
                <li class="active"> 房源管理</li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading custom-tab">
<!--                            房源数据列表-->
                            <ul class="nav nav-tabs " id="my-tabs">
                                <li class="active">
                                    <a href="#all-houses" data-toggle="tab" class="all-houses">全部房源</a>
                                </li>

                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content" id="my-tab-pane">
                                <div class="tab-pane active" id="all-houses">
                                    <div class="btn-group">
                                        <button class="btn btn-primary btn-new" type="button">添加 <i
                                                    class="fa fa-plus"></i>
                                        </button>
                                        <button class="btn btn-primary btn-all-del" type="button">删除 <i
                                                    class="fa fa-minus"></i>
                                        </button>
<!--                                        <button id="btn-recommend"  class="btn btn-primary" data-toggle="modal" type="button">推荐 <i-->
<!--                                                    class="fa fa-thumbs-up"></i>-->
<!--                                        </button>-->
                                    </div>
                                    <div class="adv-table">
                                        <table id="example" class="table table-house table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th><input type="checkbox" id="check-all"/></th>
                                                <th>编号</th>
                                                <th>名称</th>
                                                <th>价格</th>
                                                <th>描述</th>
                                                <th>操作</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <?php include 'footer.php'; ?>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>
<!--添加房源中添加设备模板-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close close-facility" type="button">×</button>
                <h4 class="modal-title">添加设备</h4>
            </div>
            <div class="modal-body">
                <form role="form" class="form-horizontal">
                    <div class="form-group clearfix">
                        <label for="facility-name" class="col-lg-3 col-sm-3 control-label">设备名称</label>
                        <div class="col-lg-8">
                            <input type="text" id="facility-name" name="title" class="form-control" placeholder="请输入设备名称" required>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <label for="is-free" class="col-lg-3 col-sm-3 control-label">是否付费</label>
                        <div class="col-lg-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="free[]" id="is-free" value="1">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                    </div>
                    <div class="form-group">
                        <label for="remark" class="col-lg-3 col-sm-3 control-label">备注</label>
                        <div class="col-sm-8">
                            <!-- 加载编辑器的容器 -->
                            <div id="facility-remark" name="content"></div>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <label class="col-lg-3 col-sm-3 control-label">设备照片</label>
                        <div class="col-lg-8">
                            <div class="fileupload fileupload-new house-upload-box" data-provides="fileupload">
                                <div class="fileupload-new thumbnail house-upload">
                                    <img src="images/photo-upload.jpg" alt="" id="facility-btn">
                                </div>
                                <ul id="facility-pics-box" class="ul_pics clearfix"></ul>
                            </div>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-lg-offset-3 col-lg-10">
                            <button type="submit" class="btn btn-primary" id="fac-submit">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-plot" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close close-plot" type="button">×</button>
                <h4 class="modal-title">添加小区</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group clearfix">
                        <label for="facility-name" class="col-lg-3 col-sm-3 control-label">小区名称</label>
                        <div class="col-lg-7">
                            <input type="text" id="plot-name" name="title" class="form-control" placeholder="请输入小区名称">
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <label class="col-lg-3 col-sm-3 control-label">小区介绍</label>
                        <div class="col-sm-8">
                            <!-- 加载编辑器的容器 -->
                            <div id="plot-description" name="content"></div>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <label class="col-lg-3 col-sm-3 control-label">视频链接</label>
                        <div class="col-sm-8">
                            <!-- 加载编辑器的容器 -->
                            <input type="text" id="plot-video" name="video" class="form-control" placeholder="请输入视频链接">
                        </div>
                    </div>
                    <div class="form-group" id="plot-select">
                        <label for="name" class="col-lg-3 col-sm-3 control-label">开发商</label>
                        <div class="col-lg-8">
                            <select class="form-control m-bot15" id="deve" name="deve">
<!--                                {{each deve as deve}}-->
<!--                                <option value="{{deve.developer_id}}">{{deve.developer_name}}</option>-->
<!--                                {{/each}}-->
                            </select>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary" id="plot-submit">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">房屋推荐理由</h4>
            </div>
            <div class="modal-body">
                <div class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">推荐理由</label>
                        <input type="hidden" id="rec-house-id">
                        <textarea type="text" class="form-control sm-input" id="exampleInputEmail5" placeholder="请输入推荐理由"></textarea>
                    </div>
                    <button type="submit" class="rec-btn-reason btn btn-primary">提交</button>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- templates -->
<script id="eshop-tpl" type="text/html">
    <?php include 'tpls/eshop_tpl.html'; ?>
</script>

<!-- templates -->
<script id="eshop-edit-tpl" type="text/html">
    <?php include 'tpls/eshop_edit_tpl.html'; ?>
</script>
<!-- templates -->
<script id="eshop-add-tpl" type="text/html">
    <?php include 'tpls/eshop_add_tpl.html'; ?>
</script>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-ui-1.10.3.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>


<script src="js/jquery.validate.min.js"></script>

<!--datatables script-->
<script src="js/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/datatables/js/dataTables.bootstrap.js"></script>

<!--gritter script-->
<script src="js/gritter/js/jquery.gritter.js"></script>

<!--plupload script-->
<script src="js/plupload.full.min.js"></script>

<!--validate script-->
<script src="js/jquery.validate.min.js"></script>

<script src="js/template.js"></script>
<script src="js/jquery.sidepanel.js"></script>
<script src="js/city.js"></script>
<!--pickers plugins-->
<script type="text/javascript" src="js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<!-- ueditor 配置文件 -->
<script src="js/ueditor/ueditor.config.js"></script>
<!-- ueditor 编辑器源码文件 -->
<script src="js/ueditor/ueditor.all.min.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

<script>
    $(function () {

        //房源列表
        var table = $('#example').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "eshop/eshop_mgr",
            "columns": [
                {
                    "width": "16px",
                    "className": "text-center",
                    "data": null,
                    "render": function (data, type, row) {
                        return '<input type="checkbox" name="del[]" value="' + row.prod_id + '" class="cb-house-id select_check"/>'
                    }
                },
                {"width": "30px", "data": "prod_id", "className": "text-center"},
                {"data": "prod_name"},
                {
                    "data": "prod_price"
                },
                {
                    "width": "90px",
                    "data": "description"},
                {
                    "data": null,
                    "render": function (data, type, row) {
                        return '<a href="javascript:;" class="btn-edit">编辑 <i class="fa fa-edit"></i></a> | <a href="javascript:;" class="btn-del" data-id="' + row.house_id + '">删除 <i class="fa fa-times"></i></a>';
                    },
                }
            ],
            "columnDefs": [
                {"orderable": false, "targets": [0, 2, 4 ,5]},
                {"className": "clicked-cell", "targets": [1, 2 ,3, 4]}
            ],
            "order": [[1, 'desc']]
        });
        /*****点击表格显示记录查情*****/
        $('#my-tab-pane').on('click', '.clicked-cell', function () {
//            console.log('aa');
//            alert(123);
            var dataId = $(this).parent().data('id');
            console.log(dataId);

            $.sidepanel({
                width: 700,
                title: '房源详情',
                tpl: 'eshop-tpl',
                dataSource: 'eshop/eshop_detail',
                data: {
                    eshopId: dataId
                },
                callback: function () {//sidepanel显示后的后续操作，主要是针对sidepanel中的元素的dom操作
                }
            });

        });
        $('.btn-new').on('click',function(){
            $.sidepanel({
                width: 700,
                title: '添加商品',
                tpl: 'eshop-add-tpl',
                callback: function () {//sidepanel显示后的后续操作，主要是针对sidepanel中的元素的dom操作
//                    $('#product-edit').on('click',function(){
//                        var id = $("#prod-id").text();
//                        var name = $('#name').val();
//                        var price = $('#price').val();
//                        var description = $('#description').val();
//                        $.post('eshop/edit_product',{
//                            id:id,
//                            name:name,
//                            price:price,
//                            description:description
//                        },function(data){
//
//                        },'text');
//
//                    });

                    //图片上传代码开始
                    var uploader = new plupload.Uploader({ //创建实例的构造方法
                        runtimes: 'html5,flash,silverlight,html4', //上传插件初始化选用那种方式的优先级顺序
                        browse_button: 'btn', // 上传按钮
                        url: "img_upload", //远程上传地址
                        filters: {
                            max_file_size: '500kb', //最大上传文件大小（格式100b, 10kb, 10mb, 1gb）
                            mime_types: [ //允许文件上传类型
                                {
                                    title: "files",
                                    extensions: "jpg,png,gif,ico,jpeg"
                                }
                            ]
                        },
                        multi_selection: true, //true:ctrl多文件上传, false 单文件上传
                        init: {
                            FilesAdded: function(up, files) { //文件上传前
                                if ($("#ul_pics").children("li").length > 30) {
                                    alert("您上传的图片太多了！");
                                    uploader.destroy();
                                } else {
                                    var li = '';
                                    plupload.each(files, function(file) { //遍历文件
                                        li += "<li id='" + file['id'] + "'><div class='progress'><span class='bar'></span><span class='percent'>0%</span></div></li>";
                                    });
//                                    $("#ul_pics").append(li);
                                    $('.house-upload-btn').before(li);
                                    uploader.start();
                                }
                            },
                            UploadProgress: function(up, file) { //上传中，显示进度条
                                var percent = file.percent;
                                $("#" + file.id).find('.bar').css({
                                    "width": percent + "%"
                                });
                                $("#" + file.id).find(".percent").text(percent + "%");
                            },
                            FileUploaded: function(up, file, info) { //文件上传成功的时候触发
                                var data = eval("(" + info.response + ")");
                                $("#" + file.id).html("<div class='img'><img src='" + data.pic + "'/><a class='del-img upload-del-btn'></a></div><p><input type='hidden' name='upload_img[]' value='"+ data.pic +"'></p>");
                            },
                            Error: function(up, err) { //上传出错的时候触发
                                alert(err.message);
                            }
                        }
                    });
                    uploader.init();
                    //鼠标滑入div,显示删除按钮
                    $('#ul_pics').on('mouseover','div.img',function () {
                        var $delImg = $(this).children('.del-img').show();
                    }).on('mouseout','div.img',function () {
                        var $delImg = $(this).children('.del-img').hide();
                    });

                    //图片删除
                    $('#ul_pics').on('click','.del-img',function () {
                        $(this).parents('li').remove();
                    });
                    //图片上传代码结束
                }
            });
        });

        $('#my-tab-pane').on('click', '.btn-edit', function () {
//            console.log('aa');
//            alert(123);
            var dataId = $(this).parents('tr').data('id');
            console.log(dataId);

            $.sidepanel({
                width: 700,
                title: '编辑商品',
                tpl: 'eshop-edit-tpl',
                dataSource: 'eshop/eshop_detail',
                data: {
                    eshopId: dataId
                },
                callback: function () {//sidepanel显示后的后续操作，主要是针对sidepanel中的元素的dom操作
                    $('#product-edit').on('click',function(){
                        var id = $("#prod-id").text();
                        var name = $('#name').val();
                        var price = $('#price').val();
                        var description = $('#description').val();
                        $.post('eshop/edit_product',{
                            id:id,
                            name:name,
                            price:price,
                            description:description
                        },function(data){

                        },'text');

                    });
                }
            });

        });



    });
</script>

</body>
</html>
