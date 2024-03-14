<?php
require 'header.php'
?>
<?php include 'connection.php'?>
<div class="customer">
<center><h1>Customers</h1></center>

<div class="customer-search">
    <input type="text" placeholder="search product here">
</div>

<div class="customer-table">
    <table >
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Country</th>
                <th>Zipcode</th>
                <th>Mobile</th>
                <th>Email</th>
            </tr>
        </thead>
        <?php
					$query = mysqli_query($conn, "SELECT * FROM `customer`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query))
						{
				?>
                <tr>
                <td><?php echo $fetch['firstname'];?>&nbsp;<?php echo  $fetch['lastname'];?></td>
					<td><?php echo $fetch['address']?></td>
					<td><?php echo $fetch['country']?></td>
					<td><?php echo $fetch['zipcode']?></td>
					<td><?php echo $fetch['mobile']?></td>
					<td><?php echo $fetch['email']?></td>
				</tr>		
				<?php
					}
				?>
    </table>
</div>
</div>