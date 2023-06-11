<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Tubes</title>

    <!-- Links start -->

    <!-- CSS -->
    <link rel="stylesheet" href="../css/admin.css">

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
    
                    <a href="#" class= "home">
    
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

    <section class= "dashboard" id= "home">

        <div class= "top">

            <h1>Dashboard</h1>
    
            <div class= "date">
    
                <input type="date">
    
            </div>

        </div>

        <div class= "info">

            <div class= "sales"> 

                <span class="material-symbols-outlined">analytics</span>
                
                <div class= "middle">

                    <div class= "left">

                        <h3>Total Sales</h3>
                        <h1>Rp. 13,675,000</h1>

                    </div>
                    <div class= "progress">

                        <svg>

                            <circle cx= "38" cy= "38" r= "36"></circle>

                        </svg>
                        <div class= "percentage">

                            <p>100%</p>

                        </div>

                    </div>

                </div>

                <small class= "text-muted">Last 24 Hours</small>

            </div>
            <!-- End of Sales -->
            <div class= "income"> 

                <span class="material-symbols-outlined">stacked_line_chart</span>

                <div class= "middle">

                    <div class= "left">

                        <h3>Total Income</h3>
                        <h1>Rp. 5,427,000</h1>

                    </div>
                    <div class= "progress">

                        <svg>

                            <circle cx= "38" cy= "38" r= "36"></circle>

                        </svg>
                        <div class= "percentage">

                            <p>81%</p>

                        </div>

                    </div>

                </div>

                <small class= "text-muted">Last 24 Hours</small>

            </div>
            <!-- End of Income -->
            <div class= "expenses"> 

                <span class="material-symbols-outlined">grouped_bar_chart</span>

                <div class= "middle">

                    <div class= "left">

                        <h3>Total Expenses</h3>
                        <h1>Rp. 8,248,000</h1>

                    </div>
                    <div class= "progress">

                        <svg>

                            <circle cx= "38" cy= "38" r= "36"></circle>

                        </svg>
                        <div class= "percentage">

                            <p>53%</p>

                        </div>

                    </div>

                </div>

                <small class= "text-muted">Last 24 Hours</small>

            </div>
            <!-- End of Expenses -->

        </div>
        <!-- End of Info -->

        <div class= "recent-orders">

            <h2>Recent Orders</h2>

            <div class= "order-table">

                <table>

                    <thead>

                        <tr>

                            <th>Product Name</th>
                            <th>Product Number</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th></th>

                        </tr>

                    </thead>
                    <tbody>

                        <tr>

                            <td>Portable Dining Set</td>
                            <td>548125</td>
                            <td>Due</td>
                            <td class= "warning">Pending</td>
                            <td>Details</td>

                        </tr>

                        <tr>

                            <td>Portable Dining Set</td>
                            <td>548125</td>
                            <td>Due</td>
                            <td class= "warning">Pending</td>
                            <td>Details</td>

                        </tr>

                        <tr>

                            <td>Portable Dining Set</td>
                            <td>548125</td>
                            <td>Due</td>
                            <td class= "warning">Pending</td>
                            <td>Details</td>

                        </tr>

                        <tr>

                            <td>Portable Dining Set</td>
                            <td>548125</td>
                            <td>Due</td>
                            <td class= "warning">Pending</td>
                            <td>Details</td>

                        </tr>

                        <tr>

                            <td>Portable Dining Set</td>
                            <td>548125</td>
                            <td>Due</td>
                            <td class= "warning">Pending</td>
                            <td>Details</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <a href="orders.php">Show All</a>

        </div>

    </section>

    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>
</body>
</html>