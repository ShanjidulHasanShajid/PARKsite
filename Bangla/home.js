function viewGarage() {
    var oldContent = document.getElementById("homeCard");
    oldContent.textContent = "";
    var newDiv = document.createElement("div");
    newDiv.innerHTML = `   <div class="tab2div">
    <h1>Rent your garage now and start earning extra!</h1>
    <p style="margin-bottom:0px;">Get the best out of your unused garages!</p>
    <br>
    <a href="signup.html"><button
                                class="tab2button2">Sign Up</button></a>
</div>
    `;
    oldContent.appendChild(newDiv);
}

function changeBackgroundImage1() {
    var div1 = document.getElementById("banner");
    div1.style.backgroundImage = "url('../images/customer.jpg')";
    div1.style.backgroundSize = "contain";
    div1.style.backgroundRepeat = "no-repeat";
}
function changeBackgroundImage2() {
    var div1 = document.getElementById("banner");
    div1.style.backgroundImage = "url('../images/parking.jpg')";
    banner.style.backgroundSize = "contain";
    banner.style.backgroundRepeat = "no-repeat";
}
function changeBackgroundImage3() {
    var div1 = document.getElementById("banner");
    div1.style.backgroundImage =
        "url('../images/security-guard-workspace.jpg')";
    div1.style.backgroundSize = "contain";
    div1.style.backgroundRepeat = "no-repeat";
}

function viewParking() {
    var oldContent = document.getElementById("homeCard");
    oldContent.textContent = "";
    var newDiv = document.createElement("div");
    newDiv.innerHTML = ` 
    <div class="tab1div">
    <h2>Looking for a parking spot?</h2>
    <input
        type="text" placeholder="Enter Current Location">
    <br>
    <input
        type="text" placeholder="Enter Desired Location">
    <br>
    <a href="signup.html"><button
                                class="tab1button1"
                                >Search</button></a>
                            <a href="signup.html"><button
                                class="tab1button2">Sign Up</button></a>
</div>
    `;
    oldContent.appendChild(newDiv);
}

function viewSuper() {
    var oldContent = document.getElementById("homeCard");
    oldContent.textContent = "";
    var newDiv = document.createElement("div");
    newDiv.innerHTML = ` 
    <div class="tab3div">
                            <h1>Earn more by ensuring security</h1>
                            <p>Sign up to earn extra by guarding garages!</p>
                            <br>
                            <a href="signup.html"><button
                                class="tab3button2">Sign Up</button></a>
                        </div>
    `;
    oldContent.appendChild(newDiv);
}
