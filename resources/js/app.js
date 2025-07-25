import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
  const btn = document.getElementById('menu-button');
  const menu = document.getElementById('mobile-menu');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
});

document.addEventListener('DOMContentLoaded', function () {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
      button.addEventListener('click', () => {
        // Hapus active di semua button
        tabButtons.forEach(btn => btn.classList.remove('bg-blue-100', 'active'));
        // Sembunyikan semua konten
        tabContents.forEach(content => content.classList.add('hidden'));

        // Aktifkan yang dipilih
        const target = button.getAttribute('data-tab');
        document.getElementById(target).classList.remove('hidden');
        button.classList.add('bg-blue-100', 'active');
      });
    });
});
