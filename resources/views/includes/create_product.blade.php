<form action={{ route('product.store')}} method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-name">
        <label for="product-name">Product Name:</label>
        <input type="text" name="name">
    </div>

    <div class="col-desc">
        <label for="product-desc">Product Description:</label>
        <textarea name="description" id="desc" cols="30" rows="10"></textarea>
    </div>

    <div class="col-image">
        <label for="product-image">Product Image</label>
        <input type="file" name="image" id="image">
    </div>

    <div class="col-price">
        <label for="product-price">Product Price:</label>
        <input type="text" name="price" id="price" placeholder="Rp.10.000">
    </div>

   <button type="submit" class="btn btn-md btn-primary">Submit</button>
   <button type="reset" class="btn btn-md btn-warning">Reset</button>
</form>