document.addEventListener("DOMContentLoaded", function () {
    var searchInput = document.getElementById("searchInput");

    searchInput.addEventListener("keyup", function (event) {
        var searchTerm = event.target.value.toLowerCase();
        var rows = document.querySelectorAll("tbody tr");

        rows.forEach(function (row) {
            var nameCell = row.querySelector("td:nth-child(3)");
            var name = nameCell.textContent.toLowerCase();

            if (name.includes(searchTerm)) {
                row.style.display = "table-row";
            } else {
                row.style.display = "none";
            }
        });
    });
});
