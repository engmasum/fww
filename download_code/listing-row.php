<?php include("common/conn.php");?>
<?php include("common/common.php");?>
<?php  ini_set('display_errors', '1'); ?>
<!-- /admin-tables -->
<?php include("themes/dashboard-leftbar.php");?>

<link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<div class="content-admin">
    <div class="content-admin-wrapper">
        <div class="content-admin-main">
            <div class="content-admin-main-inner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="page-title">
                                <h1>Tables</h1>
                            </div><!-- /.page-title -->

                            <div class="background-white p20 mb50">
                                <h2 class="page-title">Hovered Example</h2>

                                <table class="table table-hover mb0" id="listintTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Business Details</th>
                                            <th>Business Hours</th>
                                            <th>Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                <?php 
                                $result=mysqli_query($conn,"SELECT* FROM db_listing"); 
                                while($row=mysqli_fetch_array($result))  
                                {?>
                                <tr>
                                    <td><?=$row["submission_list_id"]?></td>
                                    <td>
                                        <b><?=$row["list_title"]?></b><br>
                                        <b>Address</b>: <?=$row["list_address"]?><br>
                                        <b>Phone</b>  : <?=$row["list_phone"]?><br>
                                        <b>Email</b>  : <?=$row["list_email"]?><br>
                                        <b>Website</b>: <?=$row["list_website"]?><br>
                                    </td>
                                    <td>
                                        <b>Mon</b>: <?=$row["list_hour_mon"]?><br>
                                        <b>Tue</b>: <?=$row["list_hour_tue"]?><br>
                                        <b>Wed</b>: <?=$row["list_hour_wed"]?><br>
                                        <b>Thu</b>: <?=$row["list_hour_thu"]?><br>
                                        <b>Fri</b>: <?=$row["list_hour_fri"]?><br>
                                        <b>Sat</b>: <?=$row["list_hour_sat"]?><br>
                                        <b>Sun</b>: <?=$row["list_hour_sun"]?><br>
                                    </td>
                                    <td><?=$row["submission_date"]?></td>
                                    <th>
                                        <button class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button>
                                    </th>
                                </tr>
                                <?}?>


                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </div><!-- /.content-admin-main-inner -->
    </div><!-- /.content-admin-main -->
<script>
$(document).ready(function() {
    $('#listintTable').DataTable();
} );
</script>
