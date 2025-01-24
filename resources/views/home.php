<?php
views("components/header");
?>
<?php
views("components/navbar");
?>
<!-- Birinchi Slider -->
<div class="relative w-full overflow-hidden">
    <div id="slider1" class="flex transition-transform duration-700">
        <!-- Slide 1 -->
        <div class="min-w-full">
            <img src="https://images.pexels.com/photos/965989/pexels-photo-965989.jpeg"
                 alt="Slide 1" class="w-full h-screen object-cover">
        </div>

        <div class="min-w-full">
            <img src="https://images.unsplash.com/photo-1445205170230-053b83016050?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y2xvdGhlc3xlbnwwfHwwfHx8MA%3D%3D"
                 alt="Slide 2" class="w-full h-screen object-cover">
        </div>
        <!-- Slide 2 -->
        <div class="min-w-full">
            <img src="https://media.istockphoto.com/id/1442034369/photo/mockup-for-bathing-products-top-view-flat-lay-spa-razor-toothpaste-soap-gel-and-other-various.jpg?s=612x612&w=0&k=20&c=U_OCaoXNJ0Oj9tBNXY0fm9G-KRATbBS-Vf5kRtfI3IE="
                 alt="Slide 3" class="w-full h-screen object-cover">
        </div>
        <!-- Slide 3 -->
        <div class="min-w-full">
            <img src="https://www.bhg.com/thmb/Mwd_YEkDbVg_fPsUDcWr3eZk9W0=/5645x0/filters:no_upscale():strip_icc()/difference-between-fruits-vegetables-01-5f92e7ec706b463287bcfb46985698f9.jpg"
                 alt="Slide 4" class="w-full h-screen object-cover">
        </div>
        <div class="min-w-full">
            <img src="https://c8.alamy.com/comp/W25FJG/asian-supermarket-shelves-instant-soups-dresden-germany-supermarkets-W25FJG.jpg"
                 alt="Slide 5" class="w-full h-screen object-cover">
        </div>
    </div>
</div>

<!-- Ikkinchi Slider -->
<div class="relative w-full overflow-hidden mt-8">
    <div id="slider2" class="flex transition-transform duration-500">
        <!-- Slide 1 -->
        <div class="min-w-full">
            <img src="https://www.shutterstock.com/image-photo/poznan-poland-oct-28-2021-600nw-2071581119.jpg"
                 alt="Slide 1" class="w-full h-screen object-cover">
        </div>
        <!-- Slide 2 -->
        <div class="min-w-full">
            <img src="https://yurt.farm/upload/933913636523058686666563.jpg"
                 alt="Slide 2" class="w-full h-screen object-cover">
        </div>
        <!-- Slide 3 -->
        <div class="min-w-full">
            <img src="https://ogoh.uz/wp-content/uploads/2021/11/IMG_20211130_080758_415.jpg"
                 alt="Slide 3" class="w-full h-screen object-cover">
        </div>

        <div class="min-w-full">
            <img src="https://www.nzherald.co.nz/resizer/CU3f3ntWK0jje3iSqk0UCZym0Vs=/arc-anglerfish-syd-prod-nzme/public/HTUYSKRBTNGVJGN7DCSMK2RZTM.jpg"
                 alt="Slide 4" class="w-full h-screen object-cover">
        </div>

        <div class="min-w-full">
            <img src="https://as2.ftcdn.net/jpg/03/54/77/77/1000_F_354777778_uPtd0QQ6cwJYkHo4fQxNiHL8bMg6uZCf.jpg"
                 alt="Slide 5" class="w-full h-screen object-cover">
        </div>
    </div>
</div>

<button id="scrollToTopBtn" class="fixed bottom-10 right-10 p-4 bg-blue-500 text-white rounded-full shadow-lg">
    ↑
</button>

<script>
    const slider1 = document.getElementById('slider1');
    let index1 = 0;

    function autoSlide1() {
        index1++;
        if (index1 >= slider1.children.length) {
            index1 = 0;
        }
        slider1.style.transform = `translateX(-${index1 * 100}%)`;
    }

    const slider2 = document.getElementById('slider2');
    let index2 = 0;

    function autoSlide2() {
        index2++;
        if (index2 >= slider2.children.length) {
            index2 = 0;
        }
        slider2.style.transform = `translateX(-${index2 * 100}%)`;
    }

    setInterval(autoSlide1, 3000);
    setInterval(autoSlide2, 3000);
</script>

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
