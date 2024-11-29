@foreach ($products as $product)
        <div class="col-md-6 col-lg-4 col-xl-3 product-item" data-subcategory-id="{{ $product->subcategory_id }}">
            <div class="rounded position-relative fruite-item">
                <div class="fruite-img">
                    <img src="{{ asset('uploads/products/' . $product->image) }}" class="img-fluid w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">{{ $product->subcategory->name }}</div>
                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                    <h4>{{ $product->title }}</h4>
                    <p>{{ $product->description }}</p>
                    <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">{{ $product->price }}</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
                            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Event listener for category click
    document.querySelectorAll('.category-item').forEach(function (categoryItem) {
        categoryItem.addEventListener('click', function () {
            var categoryId = categoryItem.getAttribute('data-category-id');
            
            // Show only products from the selected category's subcategory
            filterProducts(categoryId);
        });
    });

    function filterProducts(categoryId) {
        // Get all product items
        var products = document.querySelectorAll('.product-item');

        products.forEach(function (product) {
            // Get the subcategory ID from the data attribute
            var subcategoryId = product.getAttribute('data-subcategory-id');
            
            // If the product's subcategory matches the selected category, show it
            if (subcategoryId == categoryId) {
                product.style.display = 'block'; // Show the product
            } else {
                product.style.display = 'none'; // Hide the product
            }
        });
    }
});
</script>