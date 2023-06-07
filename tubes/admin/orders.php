<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Try</title>

    <!-- Links start -->

    <!-- CSS -->
    <link rel="stylesheet" href="../css/orders.css">

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
    
                    <a href="workers.php" class= "workers">
    
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
    
                    <a href="#" class= "orders">
    
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

                    <a href="#">
                    <div> 
                        <i data-feather="log-out"></i>
                        <span>Logout</span>
                    </div>
                    </a>

                </li>

            </ul>

        </div>

    </aside>

    <section class= "buy">

        <div class= "top">

            <h2>Orders</h2>

        </div>

        <div class= "order-table">

            <table>

                <thead>

                    <tr>

                        <th>Client</th>
                        <th>Product Name</th>
                        <th>Product Number</th>
                        <th>Quantity</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th></th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>John Aberdeen</td>
                        <td>Portable Dining Set</td>
                        <td>548125</td>
                        <td>3 units</td>
                        <td>Due</td>
                        <td>Pending</td>
                        <td>Cancel | Finish</td>

                    </tr>

                    <tr>

                        <td>John Aberdeen</td>
                        <td>Portable Dining Set</td>
                        <td>548125</td>
                        <td>3 units</td>
                        <td>Due</td>
                        <td>Pending</td>
                        <td>Cancel | Finish</td>

                    </tr>

                    <tr>

                        <td>John Aberdeen</td>
                        <td>Portable Dining Set</td>
                        <td>548125</td>
                        <td>3 units</td>
                        <td>Due</td>
                        <td>Pending</td>
                        <td>Cancel | Finish</td>

                    </tr>

                    <tr>

                        <td>John Aberdeen</td>
                        <td>Portable Dining Set</td>
                        <td>548125</td>
                        <td>3 units</td>
                        <td>Due</td>
                        <td>Pending</td>
                        <td>Cancel | Finish</td>

                    </tr>

                    <tr>

                        <td>John Aberdeen</td>
                        <td>Portable Dining Set</td>
                        <td>548125</td>
                        <td>3 units</td>
                        <td>Due</td>
                        <td>Pending</td>
                        <td>Cancel | Finish</td>

                    </tr>

                </tbody>

            </table>

        </div>

        <div class= "butt">

            <div class= "new-order">

                <a href="">

                    Add New Order

                </a>

            </div>

        </div>

    </section>

    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>
</body>
</html>