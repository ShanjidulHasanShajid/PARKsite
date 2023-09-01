document.addEventListener("DOMContentLoaded", function() {
    const garageSelect = document.getElementById("garageSelect");

    // Fetch garageid values from the get_garage_ids.php file
    fetch("offerGarageFetch.php")
        .then(response => response.json())
        .then(data => {
            data.forEach(garageId => {
                const option = document.createElement("option");
                option.value = garageId;
                option.textContent = garageId;
                garageSelect.appendChild(option);
            });
        });

    const submitButton = document.getElementById("submitButton");
    submitButton.addEventListener("click", function() {
        const form = document.getElementById("reservationForm");
        const formData = new FormData(form);

        // Send the form data to the submit_reservation.php file for database update
        fetch("offerGarageSubmit.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            console.log(result);
        });
    });
});
