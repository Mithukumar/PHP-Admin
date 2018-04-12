<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8" />
        <title>Admin | logo </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />

        <style type="text/css">
            .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
        </style>

       <?php require_once('../layouts/style.php') ?>

 </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
       
       <?php require_once('../layouts/header.php') ?> 
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?php require_once('../layouts/sidebar.php') ?>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Admin logo
                                <small>statistics, charts, recent events and reports</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index-2.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Dashboard</span>
                        </li>
                    </ul>
                    


                    <div class="row">
                        <div class="col-md-12 ">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase">logo Page</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form" method="post" action="logo/logo_save.php" enctype="multipart/form-data">
                                        <div class="form-body">

                                            <!-- END PAGE BREADCRUMB -->
                                    <div class="row fileupload-buttonbar">
                                    <div class="container">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Upload Image</label>
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default btn-file">
                                                            Browse… <input type="file" accept="image/png, image/jpeg, image/gif" name="image" id="imgInp">
                                                        </span>
                                                    </span>
                                                    <input id='urlname'type="text" class="form-control" readonly>
                                                </div>
                                               <button id="clear" class="btn btn-default">Clear</button>
                                                <img id='img-upload'/>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn blue">Submit</button>
                                        </div>
                                        <!-- view -->
                                        <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i>logo View </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> ID </th>
                                                    <th> image </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require_once('connect.php');

                                                $query = mysql_query("select * from logo");
                                                while ($data = mysql_fetch_array($query)):
                                                    $image = $data['image'];
                                                    $id = $data['id'];
                                                ?>

                                                <tr>
                                                    <td> <?php echo $id?> </td>
                                                    <td> <?php echo $image?></td>
                                                    <td><img height="300px" src="../assets/logo_img/<?php echo $image?>"></td>
                                                    <td>
                                                        <a href="logo_edit.php?id=<?php echo $id?>" class="btn blue btn-outline">Edit</a>
                                                        <a href="logo/logo_delete.php?id=<?php echo $id?>" class="btn red btn-outline">Delete</a>
                                                     </td>

                                                    
                                                </tr>
                                               <?php endwhile?> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div> -->
                            </div>
                            <!-- view -->

                                    <!-- The global progress information -->
                                    <div class="col-lg-5 fileupload-progress fade">
                                        <!-- The global progress bar -->
                                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-success" style="width:0%;"> </div>
                                        </div>
                                        <!-- The extended global progress information -->
                                    </div>
                                </div>
                                            
                                            <!-- <div class="form-group">
                                                <label>logo title</label>
                                                <div class="input-icon input-icon-lg">
                                                    <i class="fa fa-file"></i>
                                                    <input type="text" name="title" class="form-control input-lg" placeholder="title"> </div>
                                            </div> -->
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                            </div>
                        </div>

                        


                    </div>
                </div>
            </div>
                   
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2016 &copy; Mithu Roy
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>

                
            </div>
        </div>
        <!-- END FOOTER -->
        
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->

<?php require_once('../layouts/script.php') ?>
<script type="text/javascript">
    $(document).ready( function() {
    
        $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
        
        });
        
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });
        
        $("#clear").click(function(){
            $('#img-upload').attr('src','');
            $('#urlname').val('');
        });
    });
</script>
</body>
</html>