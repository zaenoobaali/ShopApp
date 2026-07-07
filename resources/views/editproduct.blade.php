<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/editproduct/{{$product->id}}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required>
        </div>

        <div>
            <label for="price">Price</label>
            <input type="number" id="price" name="price" step="0.01" value="{{ old('price', $product->price) }}" required>
        </div>

        <div>
            <label for="quantity">Quantity</label>
            <input type="number" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}" required>
        </div>

        <button type="submit">Update Product</button>
    </form>
</body>
</html>
