<?php
views("components/header");
?>
<?php
views("components/navbar");
?>

<div class="container mx-auto my-8 p-6 bg-gray-50 shadow-lg rounded-lg w-full md:w-1/2">
    <h2 class="text-2xl font-semibold text-center text-gray-900 mb-6">Yangi mahsulot qo'shish</h2>

    <form class="space-y-4">
        <div>
            <label for="productName" class="block text-lg font-medium text-gray-800">Mahsulot nomi</label>
            <input type="text" id="productName" name="productName"
                   class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500"
                   placeholder="Enter product name" required>
        </div>

        <div>
            <label for="productPrice" class="block text-lg font-medium text-gray-800">Mahsulot narxi</label>
            <input type="number" id="productPrice" name="productPrice"
                   class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500"
                   placeholder="Enter product price" required>
        </div>

        <div>
            <label for="productImage" class="block text-lg font-medium text-gray-800">Product Image URL</label>
            <input type="url" id="productImage" name="productImage"
                   class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500"
                   placeholder="Enter image URL" required>
        </div>

        <div class="text-center">
            <button type="submit"
                    class="px-6 py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">Mahsulot qo'shish
            </button>
        </div>
    </form>
</div>

<?php
views("components/footer");
?>
