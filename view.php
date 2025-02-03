<?php include 'connection.php'; ?>
<a href="index.php">Home</a>
<table border="2px" cellpadding="10" cellspacing="0px">
    <tr>
        <th>First_Name</th>
        <th>Last_Name</th>
        <th>Age</th>
        <th colspan="2">Actions</th>
    </tr>

    <?php  
    $query = "SELECT * FROM student";
    $data = mysqli_query($conn, $query);
    $result = mysqli_num_rows($data);

    if ($result) {
        while ($row = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                <td><a onclick="return confirm('Are you sure, you want to delete ?')" href="delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
            </tr>
            <?php
        }
    } else {
        ?>
        <tr>
            <td colspan="4">No record found</td>
        </tr>
        <?php
    }
    ?>
</table>
