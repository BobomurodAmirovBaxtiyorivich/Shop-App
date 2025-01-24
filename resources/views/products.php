<?php
views("components/header");
?>
<?php
views("components/navbar");
?>

<div class="container flex flex-wrap justify-center gap-4 mx-auto w-full overflow-x-hidden">
    <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
        <div class="relative overflow-hidden rounded-t-lg">
            <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                 alt="card-image"
                 class="object-cover w-full h-80 rounded-t-lg"/>
        </div>
        <div class="p-4 flex flex-col items-center justify-center text-center">
            <h6 class="mb-2 text-slate-800 text-xl font-semibold">Product name</h6>
            <h5 class="mb-2 text-slate-800 bg-yellow-400 text-xl font-semibold rounded-lg px-4 py-2">Product price</h5>
        </div>
    </div>
    <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
        <div class="relative overflow-hidden rounded-t-lg">
            <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                 alt="card-image"
                 class="object-cover w-full h-80 rounded-t-lg"/>
        </div>
        <div class="p-4 flex flex-col items-center justify-center text-center">
            <h6 class="mb-2 text-slate-800 text-xl font-semibold">Product name</h6>
            <h5 class="mb-2 text-slate-800 bg-yellow-400 text-xl font-semibold rounded-lg px-4 py-2">Product price</h5>
        </div>
    </div>
    <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
        <div class="relative overflow-hidden rounded-t-lg">
            <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                 alt="card-image"
                 class="object-cover w-full h-80 rounded-t-lg"/>
        </div>
        <div class="p-4 flex flex-col items-center justify-center text-center">
            <h6 class="mb-2 text-slate-800 text-xl font-semibold">Product name</h6>
            <h5 class="mb-2 text-slate-800 bg-yellow-400 text-xl font-semibold rounded-lg px-4 py-2">Product price</h5>
        </div>
    </div>
    <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
        <div class="relative overflow-hidden rounded-t-lg">
            <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                 alt="card-image"
                 class="object-cover w-full h-80 rounded-t-lg"/>
        </div>
        <div class="p-4 flex flex-col items-center justify-center text-center">
            <h6 class="mb-2 text-slate-800 text-xl font-semibold">Product name</h6>
            <h5 class="mb-2 text-slate-800 bg-yellow-400 text-xl font-semibold rounded-lg px-4 py-2">Product price</h5>
        </div>
    </div>
    <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
        <div class="relative overflow-hidden rounded-t-lg">
            <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                 alt="card-image"
                 class="object-cover w-full h-80 rounded-t-lg"/>
        </div>
        <div class="p-4 flex flex-col items-center justify-center text-center">
            <h6 class="mb-2 text-slate-800 text-xl font-semibold">Product name</h6>
            <h5 class="mb-2 text-slate-800 bg-yellow-400 text-xl font-semibold rounded-lg px-4 py-2">Product price</h5>
        </div>
    </div>
    <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
        <div class="relative overflow-hidden rounded-t-lg">
            <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                 alt="card-image"
                 class="object-cover w-full h-80 rounded-t-lg"/>
        </div>
        <div class="p-4 flex flex-col items-center justify-center text-center">
            <h6 class="mb-2 text-slate-800 text-xl font-semibold">Product name</h6>
            <h5 class="mb-2 text-slate-800 bg-yellow-400 text-xl font-semibold rounded-lg px-4 py-2">Product price</h5>
        </div>
    </div>
</div>

<button id="scrollToTopBtn" class="fixed bottom-10 right-10 p-4 bg-blue-500 text-white rounded-full shadow-lg">
    ↑
</button>

<script>
    window.onscroll = function () {
        let button = document.getElementById("scrollToTopBtn");
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            button.style.display = "block";
        } else {
            button.style.display = "none";
        }
    };

    document.getElementById("scrollToTopBtn").addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>

<?php
views("components/footer");
?>
