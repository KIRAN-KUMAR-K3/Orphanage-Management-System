<?php include './admin_components/admin_header.php'; ?>

<div class="ui container">
    <!-- Top Navigation Bar -->
    <?php include './admin_components/admin_top-menu.php'; ?>

    <!-- BODY Content -->
    <div class="ui grid">
        <!-- Left menu -->
        <?php include './admin_components/admin_side-menu.php'; ?>
        
        <!-- right content -->
        <div class="twelve wide column">
            <h1>Child Registration Requests</h1>

            <?php
            // Database connection
            include '../db-connection.php'; // Make sure to include your database connection script

            $sql = "SELECT * FROM child_registration_requests";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='ui celled table'>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date of Birth</th>
                                <th>Year of Enroll</th>
                                <th>Class</th>
                                <th>Story</th>
                                <th>Photo</th>
                            </tr>
                        </thead>
                        <tbody>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row['cname']."</td>
                            <td>".$row['cdob']."</td>
                            <td>".$row['cyoe']."</td>
                            <td>".$row['cclass']."</td>
                            <td>".$row['cstory']."</td>
                            <td><img src='../uploads/".$row['cphoto']."' alt='Child Photo' width='50'></td>
                          </tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<p>No registration requests found.</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>
</div>

<?php include './admin_components/admin_footer.php'; ?>
