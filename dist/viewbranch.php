<?php
include('connect.php');
include('start.php');
?>
<html>
<head>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <link rel="stylesheet" href="CSS/table.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
    <script>
        $(document).ready(function () { $('[data-toggle="tooltip"]').tooltip(); });
    </script>
</head>
<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="title"><p>Branches</p>
                    <form class="form-search" method="get" action="">

<input type="search" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" placeholder="search..">
<button type="submit" name="submit">Search</button>

</form>
                    </div>
           
                    <div class="col-sm-7">
                        <a href="addbranch.php" class="btn btn-secondary"><span>Add New Branch</span></a>
                    </div>
                </div>
            </div>
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
                <tbody>
                <tr>
                    <?php

if (isset($_GET['submit'])) {
    //Get search query from form
    $search_query = $_GET['search'];

    //Build SQL query
    $sql = "SELECT * FROM branch WHERE Bname='$search_query'";

    //Execute SQL query
    $result = mysqli_query($con, $sql);

    //Check if query was successful
    if ($data = mysqli_fetch_array($result))
    {
    foreach($result as $items)
    {
      
    ?>
    <tr>
    <td><?php echo $data['Bid']; ?></td>
                        <td><?php echo $data['Bname']; ?></td>
                        <td><?php echo $data['Bcno']; ?></td>
                        <td><?php echo $data['Bcity']; ?></td>
                        <td><?php echo $data['Bemail']; ?></td>
                        <td><?php echo $data['Badd']; ?></td>
                        <td style="width: 200px; padding:0px;">
                            <a href="editbranch.php?id=<?php echo $data['Bid']; ?>">
                                <lord-icon src="https://cdn.lordicon.com/bxxnzvfm.json" trigger="hover"
                                    colors="primary:#3a3347,secondary:#ffc738,tertiary:#f9c9c0,quaternary:#ebe6ef"
                                    state="hover-1" style="width:50px;height:40px;display:inline-block;">
                                </lord-icon>
                            </a>
                            <a href="#">
                            <lord-icon class="iconx" src="https://cdn.lordicon.com/hbvgknxo.json" trigger="hover"
                                style="width:50px;height:40px;display:inline-block;">
                            </lord-icon>
                            </a>
                            <a href="deletebranch.php?id=<?php echo $data['Bid']; ?>">
                            <lord-icon class="iconx" src="https://cdn.lordicon.com/qjwkduhc.json" trigger="hover"
                                colors="primary:#646e78,secondary:#4bb3fd,tertiary:#ebe6ef" state="hover-empty"
                                style="width:50px;height:40px;display:inline-block;">
                            </lord-icon>
                            </a>
                        </td>

    </tr>
    <?php
    }
    }
   
        ?>
    <?php
  
}
?>
</tr>
</tbody>
                <?php 
                if($_GET['search']==null)
                {
                    $query="SELECT * FROM `branch`";
                    $stat = mysqli_query($con,$query);
                    while ($data = mysqli_fetch_array($stat)) {?>
                    <tr>
                        <td><?php echo $data['Bid']; ?></td>
                        <td><?php echo $data['Bname']; ?></td>
                        <td><?php echo $data['Bcno']; ?></td>
                        <td><?php echo $data['Bcity']; ?></td>
                        <td><?php echo $data['Bemail']; ?></td>
                        <td><?php echo $data['Badd']; ?></td>
                        <td style="width: 200px; padding:0px;">
                            <a href="editbranch.php?id=<?php echo $data['Bid']; ?>">
                                <lord-icon src="https://cdn.lordicon.com/bxxnzvfm.json" trigger="hover"
                                    colors="primary:#3a3347,secondary:#ffc738,tertiary:#f9c9c0,quaternary:#ebe6ef"
                                    state="hover-1" style="width:50px;height:40px;display:inline-block;">
                                </lord-icon>
                            </a>
                            <a href="#">
                            <lord-icon class="iconx" src="https://cdn.lordicon.com/hbvgknxo.json" trigger="hover"
                                style="width:50px;height:40px;display:inline-block;">
                            </lord-icon>
                            </a>
                            <a href="deletebranch.php?id=<?php echo $data['Bid']; ?>">
                            <lord-icon class="iconx" src="https://cdn.lordicon.com/qjwkduhc.json" trigger="hover"
                                colors="primary:#646e78,secondary:#4bb3fd,tertiary:#ebe6ef" state="hover-empty"
                                style="width:50px;height:40px;display:inline-block;">
                            </lord-icon>
                            </a>
                        </td>
                    </tr>
                <?php }}?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</html>
<?php
include('end.php');
?>