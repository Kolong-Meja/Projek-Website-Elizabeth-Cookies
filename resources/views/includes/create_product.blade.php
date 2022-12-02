<form action="#" method="post">
    <div class="col-name">
        <label for="product-name">Product Name:</label>
        <input type="text" name="name" required />
    </div>

    <div class="col-desc">
        <label for="product-desc">Product Description:</label>
        <textarea name="desc" id="desc" cols="30" rows="10" required></textarea>
    </div>

    <div class="col-image">
        <label for="product-image">Product Image</label>
        <input type="file" name="image" id="image" required />
    </div>

    <div class="col-price">
        <label for="product-price">Product Price:</label>
        <input type="text" name="price" id="price" placeholder="Rp.10.000" required />
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>{{ __('Create') }}</x-primary-button>

        @if (session('status') === 'product-created')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-black-600 dark:text-gray-400"
            >{{ __('Saved.') }}</p>
        @endif
    </div>
</form>