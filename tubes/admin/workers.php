<?php 

    require '../function.php';

    // Retrieve worker data from database

    $sql = "SELECT * FROM workers";
    $result = connection() -> query($sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workers TRY</title>

     <!-- Links start -->

    <!-- CSS -->
    <link rel="stylesheet" href="../css/workers.css">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Roboto+Slab:wght@700&family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    
    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Links end -->
</head>
<body>
    
    <aside class= "sidebar">

        <div class= "logo">

            <h2>LOGO</h2>

        </div>

        <div class= "buttons">

            <ul>

                <li>
    
                    <a href="admin.php" class= "home">
    
                        <i data-feather="home"></i>
                        <span>Dashboard</span>
    
                    </a>
    
                </li>
    
                <li>
    
                    <a href="#" class= "workers">
    
                        <i data-feather="users"></i>
                        <span>Workers</span>
    
                    </a>
    
                </li>
    
                <li>
    
                    <a href="#" class= "reports">
    
                        <i data-feather="alert-circle"></i>
                        <span>Reports</span>
    
                    </a>
    
                </li>
    
                <li>
    
                    <a href="#" class= "stats">
    
                        <i data-feather="trending-up"></i>
                        <span>Statistics</span>
    
                    </a>
    
                </li>
    
                <li>
    
                    <a href="orders.php" class= "orders">
    
                        <i data-feather="shopping-cart"></i>
                        <span>Orders</span>
    
                    </a>
    
                </li>
    
                <li>
    
                    <a href="#" class= "messages">
    
                        <i data-feather="mail"></i>
                        <span>Messages</span>
    
                    </a>
    
                </li>
    
                <li>
    
                    <a href="#" class= "settings">
    
                        <i data-feather="settings"></i>
                        <span>Settings</span>    
    
                    </a>
    
                </li>
    
                <li>
    
                    <a href="#" class="account">
    
                        <i data-feather="user"></i>
                        <span>My Account</span>
    
                    </a>
    
                </li>
    
                <li>
    
                    <a href="#" class= "new">
    
                        <i data-feather="plus"></i>
                        <span>Add Section</span>
    
                    </a>
    
                </li>
    
            </ul>

        </div>

        <div class= "logout">

            <ul>

                <li>

                    <a href="../index.php">
                    <div> 
                        <i data-feather="log-out"></i>
                        <span>Logout</span>
                    </div>
                    </a>

                </li>

            </ul>

        </div>

    </aside>
<!-- End of Sidebar -->

    <section class= "employees" id= "worker">

        <div class= "top">

            <h1>Workers</h1>

        </div>

        <div class= "worker-table">

            <table>

                <thead>

                    <tr>

                        <th>Picture</th>
                        <th>Name</th>
                        <th>Date Joined</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Salary</th>

                    </tr>

                </thead>

                <tbody>

                <?php
                     // Fetch worker data from the database
                    $sql = "SELECT * FROM workers";
                    $result = connection()->query($sql);

                    // Check if there are any rows returned
                    if ($result->num_rows > 0) {
                    // Loop through each row and display the worker data
                    while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><img src="../img/default2.jpeg" alt="" class="propic"></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["date_joined"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["phone_number"]; ?></td>
                        <td><?php echo $row["salary"]; ?></td>
                        <td>Fire</td>
                    </tr>
                <?php
                    }
                    } else {
                        echo "<tr><td colspan='7'>No workers found.</td></tr>";
                }

                ?>

                </tbody>

            </table>

        </div>

        <div class= "butt">

            <button class= "new-worker">

                <a href="worker.new.php">

                    Add New Worker

                </a>

            </button>

        </div>

    </section>

<!-- Feather Icons -->
    <script>
        feather.replace()
    </script>    
</body>
</html>