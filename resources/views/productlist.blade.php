<div class="container">

   @isset($success)
    <div class="alert alert-success" style=" color: #2c3c41; padding: 15px; margin-bottom: 20px;">
        {{ $success }}
    </div>
    @endisset


    <h1>Product List</h1>

    <form action="/addproduct/" method="GET" style="display:inline;">
            @csrf
            @method('POST') 
            
            <button type="submit" class="btn btn-danger">
                New Product
            </button>
    </form>

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
