<table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Resaurant ID</th>
        <th>customer Email</th>
        <th> Check in Date </th>
        <th> Check in time </th>
      </tr>
    </thead>
  <?php 
  //$sql=mysqli_query($conn,"SELECT * FROM check_in WHERE restaurant_id='".$_SESSION["restaurant_no"]."'");
  $sql=mysqli_query($conn,"SELECT * FROM check_in WHERE   user_id='".$_SESSION["user_session_id"]."'");
  $row=mysqli_num_rows($sql);
   if($row==0){ echo"<center><p style='color:red'>"."Your Total Check-In Data"." "."$row"."</center></p>";}
   else{echo"<center><p style='color:green'>"."Your Total Check-In Data"." "."$row"."</center></p>";}
  $num=0;
  while($row=mysqli_fetch_array($sql)) {
    $num++
?>

<tbody>
<tr>
  <td><?php echo"000".$num;?> </td>
  <td><?=$row["restaurant_id"];?> </td>
  <td><?=$row["user_email"];?> </td>
  <td><?=$row["checkin_date"];?> </td>
  <td><?=$row["checkin_time"];?> </td>
</tr>
<?php } ?>
</tbody>
</table>