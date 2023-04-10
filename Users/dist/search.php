
<?php 
include('connect.php');
?>
<table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>City</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <?php

if (isset($_GET['submit'])) {
    //Get search query from form
    $search_query = $_GET['search'];

    //Build SQL query
    $sql = "SELECT * FROM branch WHERE Bname LIKE '%$search_query%'";

    //Execute SQL query
    $result = mysqli_query($con, $sql);

    //Check if query was successful
    if ($data = mysqli_fetch_array($result))
    {
    foreach(  $result as $items)
    {
      
    ?>
    <tr>
    <td><?php echo $data['Bid']; ?></td>
                        <td><?php echo $data['Bname']; ?></td>
                        <td><?php echo $data['Bcno']; ?></td>
                        <td><?php echo $data['Bcity']; ?></td>
                        <td><?php echo $data['Bemail']; ?></td>
                        <td><?php echo $data['Badd']; ?></td>

    </tr>
    <?php
    }
    }
    else
    {
        ?>
    <tr>
    <td colspan="4">No Record Found</td>
    </tr>
    <?php
    }
}
?>
</tr>
</tbody>


