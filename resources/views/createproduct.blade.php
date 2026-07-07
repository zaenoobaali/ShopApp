<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add New Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    <form action="/addproduct" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        <div>
            <label for="quantity">Quantity</label>
            <input type="number" id="quantity" name="quantity" required>
        </div>
        <button type="submit">Create Product</button>
    </form>
</body>
</html>
