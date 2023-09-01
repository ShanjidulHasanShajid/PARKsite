function showVehicle() {
    var oldContent = document.getElementById("form");
    oldContent.textContent = "";
    var newDiv = document.createElement("div");
    newDiv.innerHTML = `<br><br>
                        <h2>Vehicle Owner Form</h2>
                        <form class="form" action="signup.php" method="POST">
                            <input type="hidden" name="accountType" value="Vehicle Owner">
                            <label>Full Name: </label>
                            <input class="field" name="name" required>
                            <label>Email: </label>
                            <input class="field" name="email" required>
                            <label>Password: </label>
                            <input class="field" name="pass" required>
                            <label>National ID: </label>
                            <input class="field" name="nid"  required>
                            <label>Phone Number: </label>
                            <input class="field" name="phone" required>
                            <label>License Number: </label>
                            <input class="field" name="vlisc" required>
                            <label>Vehicle Registration Number: </label>
                            <input class="field" name="vreg" required>
                            <label>Vehicle Type: </label>
                            <input class="field" name="vtype" required>
                            <label>Vehicle Model: </label>
                            <input class="field" name="vmodel" required>
                            <br>
                            <input type="submit" class="submit"></input>
                        </div>
                        <br>`;
    oldContent.appendChild(newDiv);
}

function showGarage() {
    var oldContent = document.getElementById("form");
    oldContent.textContent = "";
    var newDiv = document.createElement("div");
    newDiv.innerHTML = `<br><br>
                        <h2>Garage Owner Form</h2>
                        <form class="form" action="signup.php" method="POST">
                            <input type="hidden" name="accountType" value="Garage Owner">
                            <label>Full Name: </label>
                            <input class="field" name="name" required>
                            <label>Email: </label>
                            <input class="field" name="email" required>
                            <label>Password: </label>
                            <input class="field" name="pass" required>
                            <label>National ID: </label>
                            <input class="field" name="nid" required>
                            <label>Phone Number: </label>
                            <input class="field" name="phone" required>
                            <label>Garage Address: </label>
                            <input class="field" name="garadr" required>
                            <label>Garage Size/Area: </label>
                            <input class="field" name="garsize" required>
                            <label>Garage Capacity: </label>
                            <input class="field" name="garcap" required>
                            <label>Supervisor National ID: </label>
                            <input class="field" name="supnid" required>
                            <br>
                            <input type="submit" class="submit"></input>
                        </div>
                        <br>`;
    oldContent.appendChild(newDiv);
}

function showSuper() {
    var oldContent = document.getElementById("form");
    oldContent.textContent = "";
    var newDiv = document.createElement("div");
    newDiv.innerHTML = `<br><br>
                        <h2>Supervisor Form</h2>
                        <form class="form" action="signup.php" method="POST">
                            <input type="hidden" name="accountType" value="Supervisor"> 
                            <label>Full Name: </label>
                            <input class="field" name="name" required>
                            <label>Email: </label>
                            <input class="field" name="email" required>
                            <label>Password: </label>
                            <input class="field" name="pass" required>
                            <label>National ID: </label>
                            <input class="field" name="nid" required>
                            <label>Phone Number: </label>
                            <input class="field" name="phone" required>
                            <br>
                            <input type="submit" class="submit"></input>
                        </div>
                        <br>`;
    oldContent.appendChild(newDiv);
}
