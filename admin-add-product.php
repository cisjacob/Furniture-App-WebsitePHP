<?php
    include_once('partials/admin_header.php');
?>
<div class="container my-5">
    <h1>ADD PRODUCT</h1>

    <form action="controller/admin-add-product_query.php" method = "post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Name </label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" min="1" required>
        </div>
        <div class="mb-3">
            <label class="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value = "">--Select Category--</option>
                <option value="Appliance">Appliance</option>
                <option value="Furniture">Furniture</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/png, image/jpeg" required>
        </div>
        <button type="submit" class="btn btn-primary" name="save">Submit</button>
        <a href="javascript:history.back()" class="btn btn-dark">Cancel</a>
    </form>
</div>