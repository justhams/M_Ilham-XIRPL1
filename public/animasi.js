document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('main'); // Select the main content element
    const toggleButton = document.getElementById('sidebar-toggle');

    toggleButton.addEventListener('click', function () {
        sidebar.classList.toggle('open');
        mainContent.classList.toggle('open'); // Toggle the "open" class on main content
    });
});
