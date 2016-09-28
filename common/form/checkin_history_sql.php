<?php
     $projects = array();
     // fetch data from the database
     $records = mysql_query('select project_num, project_status, project_name from tblprojects') or die("Query fail: " . mysqli_error());
?>


<table  class="table table-striped table-condensed" id="tblData">
    <thead>
        <tr>
            <th>Project Name</th>
            <th>Project Number</th>
            <th>Project Status</th>
       </tr>
    </thead>

    <tbody>
       <?php 
            while (  $row =  mysql_fetch_assoc($records)    )
            {
                $projects[] = $row;
                foreach ($projects as $project):
      ?>
        <tr>
            <td><?echo $project['proj_name']; ?></td>
            <td><?echo $proj['proj_num']; ?></td>
            <td><?echo $proj['proj_status']; ?></td>
        </tr>

      <?php endforeach; 
           }
      ?>


    </tbody>        
</table>
<?php
     $projects = array();
     // fetch data from the database
     $records = mysql_query('select project_num, project_status, project_name from tblprojects') or die("Query fail: " . mysqli_error());
?>

<html>
<body>
<table  class="table table-striped table-condensed" id="tblData">
    <thead>
        <tr>
            <th>Project Name</th>
            <th>Project Number</th>
            <th>Project Status</th>
       </tr>
    </thead>

    <tbody>
       <?php 
            while (  $row =  mysql_fetch_assoc($records)    )
            {
                $projects[] = $row;
                foreach ($projects as $project):
      ?>
        <tr>
            <td><?echo $project['proj_name']; ?></td>
            <td><?echo $proj['proj_num']; ?></td>
            <td><?echo $proj['proj_status']; ?></td>
        </tr>

      <?php endforeach; 
           }
      ?>


    </tbody>        
</table>
</body>
</html>