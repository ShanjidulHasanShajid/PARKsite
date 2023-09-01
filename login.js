function load() {
    var selectedOption = document.getElementById("menuX").value;
    var urlToLoad = "";
    var number = Math.random();

    if (selectedOption === "1" && number < 0.7) {
        urlToLoad = "bookGarage.html";
    }
    else if (selectedOption === "1" && number >= 0.7 && number < 0.85) {
        urlToLoad = "processing.html";
    }
    else if (selectedOption === "1" && number >= 0.85) {
        urlToLoad = "ban.html";
    } 
    else if (selectedOption === "2" && number < 0.7) {
        urlToLoad = "offerGarage.html";
    }
    else if (selectedOption === "2" && number >= 0.7 && number < 0.85) {
        urlToLoad = "processing.html";
    }
    else if (selectedOption === "2" && number >= 0.85) {
        urlToLoad = "ban.html";
    } 
    else if (selectedOption === "3" && number < 0.7) {
        urlToLoad = "supervise.html";
    }
    else if (selectedOption === "3" && number >= 0.7 && number < 0.85) {
        urlToLoad = "processing.html";
    }
    else if (selectedOption === "3" && number >= 0.85) {
        urlToLoad = "ban.html";
    } 

    if (urlToLoad !== "") {
        window.location.href = urlToLoad;
        return false;
    }

    return true;
}