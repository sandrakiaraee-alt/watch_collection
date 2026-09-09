<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZEITH - Collection</title>
    <style>
        :root {
            --primary-color: #f68b1e;
            --text-dark: #111111;
            --text-muted: #666666;
            --border-color: #f1f5f9;
            --bg-light: #f8fafc;
            --card-bg: #ffffff;
            --danger-color: #ef4444;
            --star-color: #f59e0b;
            --shadow-sm: 0 4px 15px rgba(0, 0, 0, 0.04);
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


        .page-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--text-dark);
            margin: 30px 0 24px 0;
        }

 
        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .product-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 16px;
            box-shadow: var(--shadow-sm);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .product-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

   
        .card-image-box {
            width: 100%;
            height: 160px;
            border-radius: var(--radius-md);
            overflow: hidden;
            background-color: var(--bg-light);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

  
        .card-details {
            display: flex;
            flex-direction: column;
            gap: 4px;
            margin-bottom: 12px;
        }

        .card-title {
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--text-dark);
            text-transform: uppercase;
            letter-spacing: 0.3px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .card-subtext {
            font-size: 0.75rem;
            color: var(--text-muted);
        }

        .card-category {
            font-size: 0.8rem;
            color: var(--text-muted);
            margin-top: 2px;
        }

       
        .preview-rating-badge {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            color: var(--text-dark);
            font-size: 0.8rem;
            font-weight: 700;
            margin-top: 4px;
        }

        .preview-rating-badge .stars {
            color: var(--star-color);
            letter-spacing: -1px;
            font-size: 0.85rem;
        }


        .card-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 10px;
            border-top: 1px solid var(--border-color);
        }

        .card-price {
            font-size: 1rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .btn-delete {
            background: transparent;
            border: none;
            color: var(--danger-color);
            font-size: 0.8rem;
            font-weight: 500;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            transition: opacity 0.2s ease;
        }

        .btn-delete:hover {
            opacity: 0.7;
        }


        @media (max-width: 992px) {
            .product-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .product-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <?php include 'admin-navbar.php'; ?>

    <div class="page-container">
   
        <h1 class="page-title">Watch Collection</h1>

        <div class="product-grid">

            <div class="product-card">
                <div>
                    <div class="card-image-box">
                        <img src="https://via.placeholder.com/300x300?text=Patek+Philippe" alt="New Watch">
                    </div>
                    <div class="card-details">
                        <div class="card-title">The Nautilus Series</div>
                        <div class="card-subtext">Patek-philippe</div>
                        <div class="card-subtext">A rounded octagonal bezel inspired by a ship’s porthole</div>
                        <div class="preview-rating-badge">
                            <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            (4.9)
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="card-price">$300,000</span>
                    <button class="btn-delete" title="Delete Item">
                        <span>&#128465;</span> Delete
                    </button>
                </div>
            </div>

            <div class="product-card">
                <div>
                    <div class="card-image-box">
                        <img src="https://via.placeholder.com/300x300?text=D1+Milano" alt="D1 Milano">
                    </div>
                    <div class="card-details">
                        <div class="card-title">Speedmaster (The "Moonwatch")</div>
                        <div class="card-subtext">Omega</div>
                        <div class="card-category">The definitive racing and aerospace chronograph</div>
                        <div class="preview-rating-badge">
                            <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            (4.8)
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="card-price">$700,000</span>
                    <button class="btn-delete" title="Delete Item">
                        <span>&#128465;</span> Delete
                    </button>
                </div>
            </div>

            <div class="product-card">
                <div>
                    <div class="card-image-box">
                        <img src="https://via.placeholder.com/300x300?text=IWC" alt="IWC Portugieser">
                    </div>
                    <div class="card-details">
                        <div class="card-title">The Aquanaut Series</div>
                        <div class="card-subtext">Patek-philippe</div>
                        <div class="card-category">Rounded square cushion case</div>
                        <div class="preview-rating-badge">
                            <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            (5.0)
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="card-price">$500,000</span>
                    <button class="btn-delete" title="Delete Item">
                        <span>&#128465;</span> Delete
                    </button>
                </div>
            </div>

            <div class="product-card">
                <div>
                    <div class="card-image-box">
                        <img src="https://via.placeholder.com/300x300?text=Bvlgari" alt="Bvlgari Octo">
                    </div>
                    <div class="card-details">
                        <div class="card-title">Rolex Oyster Perpetual</div>
                        <div class="card-subtext">Rolex</div>
                        <div class="card-category">Rolex in its purest, most minimalist form</div>
                        <div class="preview-rating-badge">
                            <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            (4.7)
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="card-price">$300,000</span>
                    <button class="btn-delete" title="Delete Item">
                        <span>&#128465;</span> Delete
                    </button>
                </div>
            </div>

            <div class="product-card">
                <div>
                    <div class="card-image-box">
                        <img src="https://via.placeholder.com/300x300?text=H.+Moser" alt="H. Moser & Cie">
                    </div>
                    <div class="card-details">
                        <div class="card-title">Apple Watch Series 11</div>
                        <div class="card-subtext">Apple</div>
                        <div class="card-category">Silver </div>
                        <div class="preview-rating-badge">
                            <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            (4.6)
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="card-price">$100,000</span>
                    <button class="btn-delete" title="Delete Item">
                        <span>&#128465;</span> Delete
                    </button>
                </div>
            </div>


            <div class="product-card">
                <div>
                    <div class="card-image-box">
                        <img src="https://via.placeholder.com/300x300?text=Jacob+%26+Co" alt="Jacob & Co">
                    </div>
                    <div class="card-details">
                        <div class="card-title">The Minimal Line</div>
                        <div class="card-subtext">Calvin-Klien</div>
                        <div class="card-category">ultra-thin cases</div>
                        <div class="preview-rating-badge">
                            <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            (4.5)
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="card-price">$100,000</span>
                    <button class="btn-delete" title="Delete Item">
                        <span>&#128465;</span> Delete
                    </button>
                </div>
            </div>


            <div class="product-card">
                <div>
                    <div class="card-image-box">
                        <img src="https://via.placeholder.com/300x300?text=Maserati" alt="Maserati">
                    </div>
                    <div class="card-details">
                        <div class="card-title">Clé de Cartier</div>
                        <div class="card-subtext">Cartier</div>
                        <div class="card-category">distinctive rectangular</div>
                        <div class="preview-rating-badge">
                            <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            (4.9)
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="card-price">$100,000,000</span>
                    <button class="btn-delete" title="Delete Item">
                        <span>&#128465;</span> Delete
                    </button>
                </div>
            </div>

        
            <div class="product-card">
                <div>
                    <div class="card-image-box">
                        <img src="https://via.placeholder.com/300x300?text=Omega" alt="Omega">
                    </div>
                    <div class="card-details">
                        <div class="card-title">The Original Origin (5600 "Square" Series)</div>
                        <div class="card-subtext">G-shock</div>
                        <div class="card-category">Survival-grade sensors </div>
                        <div class="preview-rating-badge">
                            <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            (4.8)
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="card-price">$200,000</span>
                    <button class="btn-delete" title="Delete Item">
                        <span>&#128465;</span> Delete
                    </button>
                </div>
            </div>

        </div>
    </div>

</body>
</html>