document.addEventListener("DOMContentLoaded", function () {
    // Product Details Image Switcher
    const thumbnails = document.querySelectorAll('.product-thumb');
    const mainImage = document.getElementById('mainProductImage');

    if (thumbnails.length > 0 && mainImage) {
        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', function () {
                // Update main image source
                mainImage.src = this.src;

                // Remove border from all, add to clicked
                thumbnails.forEach(t => t.classList.remove('border', 'border-dark'));
                this.classList.add('border', 'border-dark');
            });
        });
    }

    // Quantity Increment/Decrement
    const qtyButtons = document.querySelectorAll('.qty-btn');

    if (qtyButtons.length > 0) {
        qtyButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                const action = this.getAttribute('data-action');
                const input = this.parentElement.querySelector('.qty-input');
                let currentValue = parseInt(input.value);

                if (action === 'plus') {
                    input.value = currentValue + 1;
                } else if (action === 'minus' && currentValue > 1) {
                    input.value = currentValue - 1;
                }
            });
        });
    }
});