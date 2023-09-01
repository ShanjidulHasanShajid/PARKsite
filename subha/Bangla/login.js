function load() {
    var selectedOption = document.getElementById("menuX").value;
    var urlToLoad = "";
    var number = Math.random();

    if (selectedOption === "1" && number < 0.7) {
        urlToLoad = "bookGarageBangla.html";
    }
    else if (selectedOption === "1" && number >= 0.7 && number < 0.85) {
        urlToLoad = "processingBangla.html";
    }
    else if (selectedOption === "1" && number >= 0.85) {
        urlToLoad = "banBangla.html";
    } 
    else if (selectedOption === "2" && number < 0.7) {
        urlToLoad = "offerGarageBangla.html";
    }
    else if (selectedOption === "2" && number >= 0.7 && number < 0.85) {
        urlToLoad = "processingBangla.html";
    }
    else if (selectedOption === "2" && number >= 0.85) {
        urlToLoad = "banBangla.html";
    } 
    else if (selectedOption === "3" && number < 0.7) {
        urlToLoad = "superviseBangla.html";
    }
    else if (selectedOption === "3" && number >= 0.7 && number < 0.85) {
        urlToLoad = "processingBangla.html";
    }
    else if (selectedOption === "3" && number >= 0.85) {
        urlToLoad = "banBangla.html";
    } 

    if (urlToLoad !== "") {
        window.location.href = urlToLoad;
        return false;
    }

    return true;
}