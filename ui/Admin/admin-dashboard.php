<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZEITH - Add New Product</title>
    <style>
        :root {
            --primary-color: #f68b1e;
            --primary-hover: #e07a16;
            --text-dark: #111111;
            --text-muted: #666666;
            --border-color: #e2e8f0;
            --bg-light: #f8fafc;
            --card-bg: #ffffff;
            --star-color: #f59e0b;
            --shadow-sm: 0 4px 20px rgba(0, 0, 0, 0.05);
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
            justify-content: space-between;
            align-items: center;
            margin: 30px 0 20px 0;
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            border: 2px solid #cbd5e1;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            align-items: start;
        }

        .form-card, .preview-card {
            background-color: var(--card-bg);
            border-radius: var(--radius-lg);
            padding: 24px;
            box-shadow: var(--shadow-sm);
            border: 1px solid #f1f5f9;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--text-dark);
        }

        .form-control, .form-select, .form-textarea {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            font-size: 0.9rem;
            color: var(--text-dark);
            outline: none;
            transition: border-color 0.2s ease;
            background-color: #fff;
        }

        .form-control:focus, .form-select:focus, .form-textarea:focus {
            border-color: var(--primary-color);
        }

        .form-textarea {
            resize: vertical;
            min-height: 90px;
        }

        .image-upload-wrapper {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-top: 5px;
        }

        .image-preview-thumb {
            width: 80px;
            height: 80px;
            border-radius: var(--radius-md);
            object-fit: cover;
            border: 1px solid var(--border-color);
            background-color: #f1f5f9;
        }

        .upload-actions {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .btn-upload-group {
            display: flex;
            gap: 10px;
        }

        .btn-secondary {
            background: #ffffff;
            border: 1px solid var(--border-color);
            padding: 8px 14px;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 500;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: var(--text-dark);
            transition: all 0.2s ease;
        }

        .btn-secondary:hover {
            background-color: var(--bg-light);
        }

        .upload-hint {
            font-size: 0.75rem;
            color: var(--text-muted);
        }

        .btn-primary {
            width: 100%;
            background-color: var(--primary-color);
            color: #ffffff;
            border: none;
            padding: 12px 20px;
            border-radius: 25px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: background-color 0.2s ease;
            margin-top: 10px;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
        }

        .preview-header {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-bottom: 12px;
            font-weight: 500;
        }

        .preview-image-container {
            position: relative;
            width: 100%;
            height: 230px;
            border-radius: var(--radius-md);
            overflow: hidden;
            background-color: #f1f5f9;
            margin-bottom: 16px;
        }

        .preview-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .preview-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(0, 0, 0, 0.75);
            color: #fff;
            font-size: 0.7rem;
            padding: 3px 8px;
            border-radius: 4px;
            font-weight: 600;
        }

        .preview-details {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .preview-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .preview-category {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .preview-category span {
            color: var(--text-dark);
            font-weight: 500;
        }

        .preview-desc {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-top: 4px;
        }

        .preview-rating-badge {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            color: var(--text-dark);
            font-size: 0.85rem;
            font-weight: 700;
            margin-top: 6px;
        }

        .preview-rating-badge .stars {
            color: var(--star-color);
            letter-spacing: -1px;
            font-size: 0.9rem;
        }

        .preview-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 12px;
            border-top: 1px solid #f1f5f9;
        }

        .preview-price-label {
            font-size: 0.75rem;
            color: var(--text-muted);
        }

        .preview-price-value {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        @media (max-width: 850px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }

            .preview-card {
                order: 2;
            }
        }
    </style>
</head>
<body>

    <?php include 'admin-navbar.php'; ?>

    <div class="page-container">
        <div class="page-header">
            <h1 class="page-title">Add New Watch</h1>
        </div>

        <div class="dashboard-grid">

            <div class="form-card">
                <form action="process-add.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label class="form-label">Watch Image *</label>
                        <div class="image-upload-wrapper">
                            <img src="https://via.placeholder.com/150" id="thumbImg" class="image-preview-thumb" alt="Thumbnail">
                            <div class="upload-actions">
                                <div class="btn-upload-group">
                                    <label for="imageInput" class="btn-secondary">
                                        &#128269; Choose Image
                                    </label>
                                    <input type="file" id="imageInput" name="item_image" accept="image/*" style="display: none;">
                                    <button type="button" class="btn-secondary" id="removeImgBtn">&#128465; Remove</button>
                                </div>
                                <span class="upload-hint">Recommended: JPG/PNG. Max size: 5MB</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="itemName">Watch Name *</label>
                        <input type="text" id="itemName" name="item_name" class="form-control" placeholder="Enter watch name" value="New Watch" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="itemCategory">Collections *</label>
                        <select id="itemCategory" name="item_category" class="form-select" required>
                            <option value="Omega">Omega</option>
                            <option value="Patek-philippe">Patek-philippe</option>
                            <option value="Rolex">Rolex</option>
                            <option value="Apple">Apple</option>
                            <option value="Calvin-Klien">Calvin-Klien</option>
                            <option value="Cartier">Cartier</option>
                            <option value="G-shock">G-shock</option>
                            <option value="Hublot">Hublot</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label class="form-label" for="itemRating">&#9733; Rating (1.0 to 5.0) *</label>
                        <input type="number" step="0.1" min="1.0" max="5.0" id="itemRating" name="item_rating" class="form-control" placeholder="4.9" value="4.9" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="itemDesc">Description *</label>
                        <textarea id="itemDesc" name="item_description" class="form-textarea" placeholder="Short description about the watch"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="itemPrice">Price ($) *</label>
                        <input type="number" step="0.01" id="itemPrice" name="item_price" class="form-control" placeholder="199.99">
                    </div>

                    <button type="submit" class="btn-primary">
                        <span>&#10010;</span> Add Watch
                    </button>

                </form>
            </div>

            <div class="preview-card">
                <div class="preview-header">
                   Preview
                </div>

                <div class="preview-image-container">
                    <span class="preview-badge">New</span>
                    <img src="https://via.placeholder.com/400x300?text=Upload+Image" id="cardImg" class="preview-image" alt="Preview">
                </div>

                <div class="preview-details">
                    <h2 class="preview-title" id="cardTitle">New Watch</h2>
                    <div class="preview-category">Collection: <span id="cardCategory">Omega</span></div>
                    <p class="preview-desc" id="cardDesc">Watch description will appear here.</p>
                    
                    <div class="preview-rating-badge">
                        <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        (<span id="cardRating">4.9</span>)
                    </div>
                </div>

                <div class="preview-footer">
                    <span class="preview-price-label">Price</span>
                    <span class="preview-price-value" id="cardPrice">$0.00</span>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nameInput = document.getElementById('itemName');
            const categoryInput = document.getElementById('itemCategory');
            const ratingInput = document.getElementById('itemRating');
            const descInput = document.getElementById('itemDesc');
            const priceInput = document.getElementById('itemPrice');
            const imageInput = document.getElementById('imageInput');
            const removeImgBtn = document.getElementById('removeImgBtn');

            const cardTitle = document.getElementById('cardTitle');
            const cardCategory = document.getElementById('cardCategory');
            const cardRating = document.getElementById('cardRating');
            const cardDesc = document.getElementById('cardDesc');
            const cardPrice = document.getElementById('cardPrice');
            const cardImg = document.getElementById('cardImg');
            const thumbImg = document.getElementById('thumbImg');

            const defaultPlaceholder = 'https://via.placeholder.com/400x300?text=Upload+Image';

            nameInput.addEventListener('input', (e) => {
                cardTitle.textContent = e.target.value || 'New Watch';
            });

            categoryInput.addEventListener('change', (e) => {
                cardCategory.textContent = e.target.value;
            });

            ratingInput.addEventListener('input', (e) => {
                const val = parseFloat(e.target.value);
                cardRating.textContent = isNaN(val) ? '5.0' : val.toFixed(1);
            });

            descInput.addEventListener('input', (e) => {
                cardDesc.textContent = e.target.value || 'Watch description will appear here.';
            });

            priceInput.addEventListener('input', (e) => {
                const val = parseFloat(e.target.value);
                cardPrice.textContent = isNaN(val) ? '$0.00' : '$' + val.toFixed(2);
            });

            imageInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        cardImg.src = e.target.result;
                        thumbImg.src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                }
            });

            removeImgBtn.addEventListener('click', function() {
                imageInput.value = '';
                cardImg.src = defaultPlaceholder;
                thumbImg.src = 'https://via.placeholder.com/150';
            });
        });
    </script>
</body>
</html>