<section>
    <footer></footer>
</section>
<script>
    const button = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    button.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
</script>