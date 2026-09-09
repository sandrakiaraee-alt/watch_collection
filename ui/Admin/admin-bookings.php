<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZEITH - Manage Bookings</title>
    <style>
        :root {
            --primary-color: #f68b1e;
            --primary-hover: #e07a16;
            --text-dark: #111111;
            --text-muted: #666666;
            --border-color: #e2e8f0;
            --bg-light: #f8fafc;
            --card-bg: #ffffff;
            
            /* Status Colors */
            --danger-bg: #fef2f2;
            --danger-color: #ef4444;
            --warning-bg: #fff7ed;
            --warning-color: #ea580c;
            --success-bg: #f0fdf4;
            --success-color: #16a34a;

            --shadow-sm: 0 4px 20px rgba(0, 0, 0, 0.04);
            --radius-lg: 16px;
            --radius-md: 10px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #ffffff;
            color: var(--text-dark);
            line-height: 1.5;
            padding-bottom: 50px;
        }

        .page-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .page-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 30px 0 20px 0;
        }

        .header-icon-box {
            width: 44px;
            height: 44px;
            border-radius: var(--radius-md);
            border: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            background-color: #ffffff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }

        .header-text h1 {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .header-text p {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .filter-card {
            background-color: var(--card-bg);
            border: 1px solid #f1f5f9;
            border-radius: var(--radius-lg);
            padding: 16px 24px;
            box-shadow: var(--shadow-sm);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .filter-title {
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .filter-controls {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .search-box {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-icon {
            position: absolute;
            left: 12px;
            color: var(--text-muted);
            font-size: 0.85rem;
        }

        .search-input {
            padding: 8px 12px 8px 32px;
            border: 1px solid var(--border-color);
            border-radius: 20px;
            font-size: 0.85rem;
            outline: none;
            width: 220px;
            transition: border-color 0.2s ease;
        }

        .search-input:focus {
            border-color: var(--primary-color);
        }

        .filter-select {
            padding: 8px 16px;
            border: 1px solid var(--border-color);
            border-radius: 20px;
            font-size: 0.85rem;
            outline: none;
            background-color: #fff;
            color: var(--text-dark);
            cursor: pointer;
        }

        .bookings-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .booking-row {
            background-color: var(--card-bg);
            border: 1px solid #f1f5f9;
            border-radius: var(--radius-lg);
            padding: 18px 24px;
            box-shadow: var(--shadow-sm);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .booking-row:hover {
            box-shadow: 0 6px 24px rgba(0, 0, 0, 0.06);
        }

        .booking-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--bg-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            color: var(--text-muted);
        }

        .booking-info {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .user-name {
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .booking-meta {
            font-size: 0.8rem;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .booking-meta span {
            color: var(--text-dark);
            font-weight: 500;
        }

        .booking-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .status-badge {
            padding: 6px 14px;
            border-radius: 15px;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .badge-cancelled {
            background-color: var(--danger-bg);
            color: var(--danger-color);
        }

        .badge-unpaid {
            background-color: #fff1f2;
            color: #e11d48;
        }

        .badge-paid {
            background-color: var(--success-bg);
            color: var(--success-color);
        }

        .status-dropdown {
            padding: 6px 12px;
            border: 1px solid var(--border-color);
            border-radius: 20px;
            font-size: 0.75rem;
            background-color: #ffffff;
            color: var(--text-muted);
            outline: none;
            cursor: pointer;
        }

        .btn-delete-icon {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            border: none;
            background-color: var(--danger-bg);
            color: var(--danger-color);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: opacity 0.2s ease;
        }

        .btn-delete-icon:hover {
            opacity: 0.8;
        }

        .btn-view-details {
            background-color: #ffffff;
            border: 1px solid var(--border-color);
            padding: 7px 16px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--text-dark);
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .btn-view-details:hover {
            background-color: var(--primary-color);
            color: #ffffff;
            border-color: var(--primary-color);
        }

        /* Responsive Breakpoints */
        @media (max-width: 850px) {
            .filter-card {
                flex-direction: column;
                align-items: stretch;
            }

            .filter-controls {
                flex-direction: column;
            }

            .search-input, .filter-select {
                width: 100%;
            }

            .booking-row {
                flex-direction: column;
                align-items: flex-start;
            }

            .booking-actions {
                width: 100%;
                justify-content: flex-start;
                flex-wrap: wrap;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>


    <?php include 'admin-navbar.php'; ?>

    <div class="page-container">

        <div class="page-header">
            <div class="header-icon-box">&#128197;</div>
            <div class="header-text">
                <h1>Manage Bookings</h1>
                <p>View and manage customer bookings</p>
            </div>
        </div>


        <div class="filter-card">
            <div class="filter-title">All Bookings (3)</div>
            <div class="filter-controls">
                <div class="search-box">
                    <input type="text" class="search-input" placeholder="Search bookings...">
                </div>
                <select class="filter-select">
                    <option value="all">All Status</option>
                    <option value="cancelled">Cancelled</option>
                    <option value="unpaid">Unpaid</option>
                    <option value="paid">Paid</option>
                </select>
            </div>
        </div>

        <div class="bookings-list">

            <div class="booking-row">
                <div class="booking-left">
                    <div class="user-avatar">&#128100;</div>
                    <div class="booking-info">
                        <div class="user-name">New</div>
                        <div class="booking-meta">
                            <span>tyson@gmail.com</span>
                            Order: <span>ORD-58f5031c-e4a9-406a-a8df-4da24536a7e5</span>
                        </div>
                    </div>
                </div>
                <div class="booking-actions">
                    <span class="status-badge badge-cancelled">Cancelled</span>
                    <span class="status-badge badge-unpaid">&#128091; Unpaid</span>
                    <select class="status-dropdown">
                        <option value="cancelled" selected>Cancelled</option>
                        <option value="paid">Paid</option>
                        <option value="pending">Pending</option>
                    </select>
                    <button class="btn-delete-icon" title="Delete Booking">&#128465;</button>
                    <a href="#" class="btn-view-details">View Details</a>
                </div>
            </div>

  
            <div class="booking-row">
                <div class="booking-left">
                    <div class="user-avatar">&#128100;</div>
                    <div class="booking-info">
                        <div class="user-name">Alex Johnson</div>
                        <div class="booking-meta">
                            <span>alex.j@example.com</span>
                            Order: <span>ORD-99b2011a-a1c2-302a-99ef-1da88431c1e0</span>
                        </div>
                    </div>
                </div>
                <div class="booking-actions">
                    <span class="status-badge badge-paid">Confirmed</span>
                    <span class="status-badge badge-paid">&#10004; Paid</span>
                    <select class="status-dropdown">
                        <option value="confirmed" selected>Confirmed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                    <button class="btn-delete-icon" title="Delete Booking">&#128465;</button>
                    <a href="#" class="btn-view-details">View Details</a>
                </div>
            </div>

      
            <div class="booking-row">
                <div class="booking-left">
                    <div class="user-avatar">&#128100;</div>
                    <div class="booking-info">
                        <div class="user-name">Sarah Connor</div>
                        <div class="booking-meta">
                            <span>sarah@sky.com</span>
                            Order: <span>ORD-12c8821x-z9b1-201a-88cb-3ea90123f990</span>
                        </div>
                    </div>
                </div>
                <div class="booking-actions">
                    <span class="status-badge badge-unpaid">Pending</span>
                    <span class="status-badge badge-unpaid">&#128091; Unpaid</span>
                    <select class="status-dropdown">
                        <option value="pending" selected>Pending</option>
                        <option value="paid">Paid</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                    <button class="btn-delete-icon" title="Delete Booking">&#128465;</button>
                    <a href="#" class="btn-view-details">View Details</a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>