<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/69c405441a.js"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="footer.css">

    <title>ZEITH | Dashboard</title>
</head>

<body>
    <header class="dashboard-header">

        <div class="dashboard-logo">
            <h1>ZEITH</h1>
        </div>

        <div class="header-right">

            <button class="notification">
                <i class="fa-regular fa-bell"></i>
            </button>

            <div class="user">

                <div class="user-avatar">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="user-name">
                    <span>Welcome</span>
                    <h2>Customer</h2>
                </div>

                <i class="fa-solid fa-chevron-down arrow"></i>

            </div>

        </div>

    </header>

    <main class="dashboard">
        <aside class="sidebar">
            <nav class="side-nav">

                <a href="#" class="active">
                    <i class="fa-solid fa-chart-line"></i>
                    <span>Dashboard</span>
                </a>

                <a href="#">
                    <i class="fa-solid fa-box"></i>
                    <span>My Orders</span>
                </a>

                <a href="#">
                    <i class="fa-regular fa-heart"></i>
                    <span>Wishlist</span>
                </a>

                <a href="#">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Addresses</span>
                </a>

                <!-- <a href="#">
                    <i class="fa-regular fa-user"></i>
                    <span>Profile</span>
                </a> -->

                <a href="#">
                    <i class="fa-solid fa-gear"></i>
                    <span>Settings</span>
                </a>

                <a href="#" class="logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>

            </nav>

        </aside>

        <section class="dashboard-content">
            <div class="welcome">
                <div>

                    <p class="label">
                        MY ACCOUNT
                    </p>

                    <h2>
                        Welcome back, <span>Customer.</span>
                    </h2>

                    <p class="welcome-text">
                        Manage your orders, wishlist and account details.
                    </p>

                </div>

                <button class="shop-btn">
                    <i class="fa-solid fa-bag-shopping"></i>
                    Continue Shopping
                </button>

            </div>

            <div class="stats">

                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="fa-solid fa-box"></i>
                    </div>

                    <div>
                        <p>Total Orders</p>
                        <h3>12</h3>
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>

                    <div>
                        <p>In Delivery</p>
                        <h3>2</h3>
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="fa-regular fa-heart"></i>
                    </div>

                    <div>
                        <p>Wishlist</p>
                        <h3>5</h3>
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        <i class="fa-solid fa-wallet"></i>
                    </div>

                    <div>
                        <p>Total Spent</p>
                        <h3>₦385k</h3>
                    </div>

                </div>

            </div>

            <div class="dashboard-grid">

                <section class="orders">

                    <div class="section-heading">

                        <div>
                            <p class="label">
                                RECENT ACTIVITY
                            </p>

                            <h3>
                                Recent Orders
                            </h3>
                        </div>

                        <a href="#">
                            View all
                        </a>

                    </div>

                    <div class="order">

                        <div class="order-image">
                            <img src="./Images/pngwing.com (6).png"
                                alt="Classic Black Watch">
                        </div>

                        <div class="order-details">

                            <h4>
                                Classic Black
                            </h4>
                            <strong>
                                ₦85,000
                            </strong>

                        </div>

                        <span class="status delivered">
                            Delivered
                        </span>

                    </div>

                    <div class="order">

                        <div class="order-image">
                            <img src="./Images/pngwing.com (11).png"
                                alt="Chrono Silver Watch">
                        </div>

                        <div class="order-details">

                            <h4>
                                Chrono Silver
                            </h4>
                            <strong>
                                ₦95,000
                            </strong>

                        </div>

                        <span class="status shipping">
                            Shipping
                        </span>

                    </div>

                    <div class="order">

                        <div class="order-image">
                            <img src="./Images/pngwing.com (4).png"
                                alt="Executive Gold Watch">
                        </div>

                        <div class="order-details">

                            <h4>
                                Executive Gold
                            </h4>
                            <strong>
                                ₦110,000
                            </strong>

                        </div>

                        <span class="status delivered">
                            Delivered
                        </span>

                    </div>

                </section>

                <section class="account">

                    <div class="section-heading">

                        <div>

                            <p class="label">
                                YOUR DETAILS
                            </p>

                            <h3>
                                Account
                            </h3>

                        </div>

                        <a href="#">
                            Edit
                        </a>

                    </div>


                    <div class="account-details">

                        <div class="detail">

                            <i class="fa-solid fa-user"></i>

                            <div>
                                <small>Name</small>
                                <p>ZEITH Customer</p>
                            </div>

                        </div>


                        <div class="detail">

                            <i class="fa-solid fa-envelope"></i>

                            <div>
                                <small>Email</small>
                                <p>customer@example.com</p>
                            </div>

                        </div>


                        <div class="detail">

                            <i class="fa-solid fa-phone"></i>

                            <div>
                                <small>Phone</small>
                                <p>0800 000 0000</p>
                            </div>

                        </div>


                        <div class="detail">

                            <i class="fa-solid fa-location-dot"></i>

                            <div>
                                <small>Address</small>
                                <p>Lagos, Nigeria</p>
                            </div>

                        </div>

                    </div>

                </section>

            </div>

            <section class="recommended">

                <div class="section-heading">

                    <div>

                        <p class="label">
                            FOR YOU
                        </p>

                        <h3>
                            You May Also Like
                        </h3>

                    </div>

                    <a href="#">
                        Explore
                    </a>

                </div>


                <div class="recommend-grid">


                    <div class="recommend-card">

                        <div class="recommend-image">

                            <img src="./Images/pngwing.com (9).png"
                                alt="Urban Black">

                        </div>

                        <p>ZEITH</p>

                        <h4>
                            Urban Black
                        </h4>

                        <strong>
                            ₦75,000
                        </strong>

                        <button>
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>

                    </div>


                    <div class="recommend-card">

                        <div class="recommend-image">

                            <img src="./Images/pngwing.com (13).png"
                                alt="Executive Silver">

                        </div>

                        <p>ZEITH</p>

                        <h4>
                            Executive Silver
                        </h4>

                        <strong>
                            ₦120,000
                        </strong>

                        <button>
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>

                    </div>


                    <div class="recommend-card">

                        <div class="recommend-image">

                            <img src="./Images/pngwing.com (12).png"
                                alt="Chrono Black">

                        </div>

                        <p>ZEITH</p>

                        <h4>
                            Chrono Black
                        </h4>

                        <strong>
                            ₦105,000
                        </strong>

                        <button>
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>

                    </div>


                </div>

            </section>


        </section>

    </main>
    <?php include 'footer.php'; ?>
</body>

</html>