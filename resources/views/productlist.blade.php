<div class="container">
    <h1>Product List</h1>

    @if(!empty($products) && $products->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->quantity}}</td>
                        <td><a href="/editproduct/{{ $product->id }}" class="btn btn-primary">
                        edit</a>
                        <form action="/deleteproduct/{{ $product->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE') 
                            
                            <button type="submit" class="btn btn-danger">
                                DELETE
                            </button>
                        </form>
                        <td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info">No products available.</div>
    @endif
</div>
