<?php
   	
      $server="localhost";
      $username="root";
      $password="";
      $dbname="back";

      $conn=mysqli_connect($server,$username,$password,$dbname);
      if(!$conn) {
      	echo 'connection failure';
    
      }
      $sql="SELECT * from info";

      $data=mysqli_query($conn,$sql);

      if(mysqli_num_rows($data)>0) 
      {

      	while($row=mysqli_fetch_assoc($data)) {
      		?>
      		<tr>
      			<td><?php echo $row['id'];?></td>
      			<td><?php echo $row['name'];?></td>
      			<td><?php echo $row['email'];?></td>
      		</tr>
          <?php 
      	}
     
      }


   	?>

   </table>
</body>
</html>
