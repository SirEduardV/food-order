<?php include('partials/menu.php'); ?>

    <!-- Main Content Section Starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Admin</h1>

            <br>

            <?php
                if(isset($_SESSION['add'])) {
                    echo $_SESSION['add']; // Displaying Session Message
                    unset($_SESSION['add']); // Removing Session Message
                }
            ?>

            <br>
            <br>

            <!-- Button to Add Admin -->
            <a href="add-admin.php" class="btn-primary">Add Admin</a>

            <br>
            <br>
            <br>

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>1. </td>
                    <td>Eduards Usačovs</td>
                    <td>eduardsusacovs</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                        <a href="#" class="btn-danger">Delete Admin</a>
                    </td>
                </tr>
                <tr>
                    <td>2. </td>
                    <td>Eduards Usačovs</td>
                    <td>eduardsusacovs</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                        <a href="#" class="btn-danger">Delete Admin</a>
                    </td>
                </tr>
                <tr>
                    <td>3. </td>
                    <td>Eduards Usačovs</td>
                    <td>eduardsusacovs</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                        <a href="#" class="btn-danger">Delete Admin</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- Main Content Section Ends -->

<?php include('partials/footer.php'); ?>