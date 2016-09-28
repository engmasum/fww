<?php 
	if(isset($_POST["search"])){
		$search=$_POST["search"];
		$sql=mysqli_query($conn,"SELECT * FROM db_listing WHERE  list_title REGEXP '$search' ");
		$result=mysqli_num_rows($sql);
		if($result== 0){
			echo" Search not found..";
		}else{
			while($row=mysqli_fetch_array($sql)) {?>
				
				<p class="card-row-title"><a href="?page=listing-details&id=<?=$row["submission_list_id"]?>"> <?=$row["list_title"] ?> </a></p>
				
			<?php }
			
		}
	}
?> 