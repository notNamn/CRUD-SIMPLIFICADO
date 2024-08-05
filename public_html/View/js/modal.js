document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("myModal");
    const modalContent = document.getElementById("modal-content");
    const closeModalBtn = document.getElementsByClassName("close")[0];

    function openModal(url) {
        modal.style.display = "block";
        fetch(url)
            .then(response => response.text())
            .then(data => {
                modalContent.innerHTML = data;
            })
            .catch(error => console.log('Error:', error));
    }

    document.querySelectorAll('.modal-link').forEach(item => {
        item.addEventListener('click', event => {
            event.preventDefault();
            openModal(item.getAttribute('href'));
        });
    });

    closeModalBtn.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});
