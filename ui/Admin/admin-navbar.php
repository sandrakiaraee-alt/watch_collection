<?php

$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="admin-navbar">
    <div class="navbar-container">
        <a href="#" class="navbar-brand">
           ZEITH
        </a>

        <button class="navbar-toggler" id="navbarToggler" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="navbar-menu" id="navbarMenu">
            <a href="admin-dashboard.php" class="nav-item <?php echo ($current_page == 'admin-dashboard.php') ? 'active' : ''; ?>">
                <span class="nav-icon">&#10010;</span> Add
            </a>
            <a href="admin-list.php" class="nav-item <?php echo ($current_page == 'admin-list.php') ? 'active' : ''; ?>">
                <span class="nav-icon">&#9776;</span> List
            </a>
            <a href="admin-bookings.php" class="nav-item <?php echo ($current_page == 'admin-bookings.php') ? 'active' : ''; ?>">
                <span class="nav-icon">&#128197;</span> Manage Bookings
            </a>
        </div>
    </div>
</nav>

<style>
:root {
    --primary-color: #f68b1e;
    --text-color: #111111;
    --text-muted: #666666;
    --bg-light: #f8fafc;
    --bg-white: #ffffff;
    --border-radius: 30px;
    --transition: all 0.3s ease;
}


.admin-navbar {
    width: 100%;
    max-width: 1100px;
    margin: 20px auto;
    padding: 0 15px;
    box-sizing: border-box;
}

.navbar-container {
    background-color: var(--bg-light);
    border-radius: var(--border-radius);
    padding: 8px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
    position: relative;
}


.navbar-brand {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--text-color);
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    letter-spacing: 0.5px;
}

.brand-icon {
    font-size: 1.2rem;
}


.navbar-menu {
    display: flex;
    align-items: center;
    gap: 10px;
}


.nav-item {
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 8px 18px;
    border-radius: 20px;
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: 500;
    color: var(--text-muted);
    transition: var(--transition);
}

.nav-item:hover {
    color: var(--text-color);
}


.nav-item.active {
    background-color: var(--primary-color);
    color: #ffffff;
}

.nav-icon {
    font-size: 0.9rem;
}


.navbar-toggler {
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 24px;
    height: 18px;
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 0;
}

.navbar-toggler span {
    width: 100%;
    height: 2px;
    background-color: var(--text-color);
    border-radius: 2px;
    transition: var(--transition);
}


@media (max-width: 768px) {

    .navbar-menu {
        display: none;
        position: absolute;
        top: 110%;
        left: 0;
        right: 0;
        background-color: var(--bg-white);
        flex-direction: column;
        padding: 15px;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        gap: 8px;
    }

    .navbar-menu.show {
        display: flex;
    }

    .nav-item {
        width: 100%;
        box-sizing: border-box;
        justify-content: flex-start;
        padding: 10px 16px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggler = document.getElementById('navbarToggler');
    const menu = document.getElementById('navbarMenu');

    if (toggler && menu) {
        toggler.addEventListener('click', function() {
            menu.classList.toggle('show');
        });
    }
});
</script>