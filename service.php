<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8" />
        <title>Admin | service </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />

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
                            <h1>Admin service
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
                    <!-- END PAGE BREADCRUMB -->



                    <div class="row">
                        <div class="col-md-12 ">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase">service Page</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form" method="post" action="service/service_save.php">
                                        <div class="form-body">
                                            
                                            <div class="form-group">
                                                <label>Title</label>
                                                <div class="input-icon input-icon-lg">
                                                    <i class="fa fa-file"></i>
                                                    <input type="text" name="title" class="form-control input-lg" placeholder="Title"> </div>
                                            </div>

                                             <div class="row fileupload-buttonbar">
                         
                        </div>

                                            <div class="form-group">
                                                <label>Detail</label>
                                                <textarea class="form-control" name="detail" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                            </div>
                        </div>

                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i>service View </div>
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
                                                    <th> Title </th>
                                                    <th> Detail </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require_once('connect.php');

                                                $query = mysql_query("select * from service");
                                                while ($data = mysql_fetch_array($query)):
                                                    $title = $data['title'];
                                                    $detail = $data['detail'];
                                                    $id = $data['id'];
                                                ?>

                                                <tr>
                                                    <td> <?php echo $id?> </td>
                                                    <td> <?php echo $title?> </td>
                                                    <td> <?php echo $detail?> </td>
                                                    <td> 
                                                        <a href="service_edit.php?id=<?php echo $id?>" class="btn blue btn-outline">Edit</a>
                                                        <a href="service/service_delete.php?id=<?php echo $id?>" class="btn red btn-outline">Delete</a>
                                                     </td>

                                                    
                                                </tr>
                                               <?php endwhile?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->


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
</body>
</html>