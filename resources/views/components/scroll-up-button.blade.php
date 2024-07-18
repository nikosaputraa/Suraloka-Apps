<button id="scrollUpButton" 
    class="z-50 fixed bottom-8 right-8 bg-emerald-900 hover:bg-emerald-800 text-white px-4 py-2 rounded-full shadow hidden"
    onclick="scrollToTop()"
    x-show="isVisible"
>
<span class="iconify text-white" data-icon="mingcute:up-fill" data-inline="false" style="font-size: 20px;"></span>
</button>



<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    const scrollUpButton = document.getElementById('scrollUpButton');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            scrollUpButton.classList.remove('hidden');
        } else {
            scrollUpButton.classList.add('hidden');
        }
    });
</script