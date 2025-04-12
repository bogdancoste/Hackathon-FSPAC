<html>

<head>
    <link rel="stylesheet" href="style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/07a38bbad54db72a40b406bed1c72f53?family=Gotham+Pro+Regular"
        rel="stylesheet">

    <title>Authentication</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body id="body">

    <div id="logoStack1">

        <img id="blueLogo" src="media/mathnovaBlue.png">

        <span id="platformTitle"> MATHNOVA </span>

    </div>

    <div id="content1">

        <div id="cage1">

            <form id="signup" action="signup.out" method="post">

                <p id="accountCreateText">Create Account</p>

                <div id="scaler1">

                    <p>Sign up using one of these platforms</p>

                </div>

                <div id="socialnetworks">

                    <img id="facebookLogo" src="media/FB-logo.png">
                    <img id="googleLogo" src="media/GOOG-logo.png">
                    <img id="microsoftLogo" src="media/MSFT-logo.png">

                </div>

                <div id="scaler2">

                    <div id="bar"> </div>
                    <p id="choice"> OR </p>
                    <div id="bar"> </div>

                </div>

                <input type="text" class="custom-input" id="username" name="username" placeholder="Username">
                <i id="nameIcon" class="fa fa-user fa-lg fa-fw userLogo" aria-hidden="true"></i></input>

                <input type="email" class="custom-input" id="emailNew" name="emailNew" placeholder="Email">
                <i id="emailLogo" class="fa fa-envelope fa-lg fa-fw userLogo" aria-hidden="true"></i></input>

                <input type="password" class="custom-input" id="passwordNew" name="passwordNew" placeholder="Password">
                <i id="passwordIcon" class="fa fa-key fa-lg fa-fw userLogo" aria-hidden="true"></i></input>

                <div id="separer">

                    <div id="bundle1">

                        <input type="checkbox" id="acceptEulaSet" />

                        <span id="inElement">By proceeding, you agree with MATHNOVA EULA.</span>
                    </div>
                    <input id="acceptEULA" type="hidden" name="acceptEULA" value="unchecked" />

                </div>

                <div id="positioner">
                    <button id="sendDataNew" name="sendDataNew" class="button"><span id="txtBtn1">SIGN
                            UP</span></button>
                </div>

            </form>

        </div>


        <div id="cage2" style="display: none;">

            <form id="signin" action="login.php" method="POST">

                <p id="logInExistingAcc">Sign in to MATHNOVA</p>

                <div id="scaler1">

                    <p>Sign in using one of these platforms</p>

                </div>

                <div id="socialnetworks">

                    <img id="facebookLogo1" src="media/FB-logo.png">
                    <img id="googleLogo1" src="media/GOOG-logo.png">
                    <img id="microsoftLogo1" src="media/MSFT-logo.png">

                </div>

                <div id="scaler2">

                    <div id="bar"> </div>
                    <p id="choice"> OR </p>
                    <div id="bar"> </div>

                </div>

                <div id="positioner3">

                    <div id="submask">

                        <div id="submask1">

                            <input type="text" class="custom-input" id="usernameUsed" name="usernameUsed"
                                placeholder="Username">
                            <i id="emailLogo1" class="fa fa-user fa-lg fa-fw userLogo" aria-hidden="true"></i></input>

                            <input type="password" class="custom-input" id="passwordUsed" name="passwordUsed"
                                placeholder="Password">

                            <i id="passwordIcon1" class="fa fa-key fa-lg fa-fw userLogo" aria-hidden="true"></i></input>

                        </div>

                    </div>

                </div>

                <div id="positioner2">

                    <a href="#">
                        <p id="passwordRecovery">Forgot your password?</p>
                    </a>

                </div>

                <div id="positioner1">

                    <button id="sendDataUsed" name="sendDataUsed" class="button"><span id="txtBtn2">SIGN
                            IN</span></button>

                </div>

            </form>

        </div>

    </div>

    </div>

    <div id="content2">

        <div id="environmentCage">

            <div id="envMask">

                <div id="logoStack2" style="display: none;">

                    <img id="blueLogo1" src="media/mathnovaWhite.png">

                    <span id="platformTitle1"> MATHNOVA </span>

                </div>

                <div id="correctMask">
                    <span id="environmentText">Welcome back!</span>
                </div>

                <span id="environmentText1">
                    <p id="centrate">Connect with our services by loging in with your information.</p>
                </span>

                <div id="maskCorrect2">
                    <button id="changeEnv"><span id="buttonSpan2">SIGN IN</span></button>
                </div>

            </div>

        </div>

    </div>

</body>

</html>

<script>

    $(document).ready(function () {

        var isLogoStack2Visible = false;

        $("#changeEnv").on("click", function () {
            if ($("#content1").css("left") === "0px") {
                $("#content1").animate({
                    left: "40%",
                    right: "0"
                }, 700);

                $("#content2").animate({
                    right: "60%",
                    left: "0"
                }, 700);

                if (!isLogoStack2Visible) {
                    $("#logoStack2").delay(510).show(0);
                } else {
                    $("#logoStack2").delay(150).hide(0);
                }

                isLogoStack2Visible = !isLogoStack2Visible;

                $("#cage1").delay(390).hide(0);
                $("#cage2").delay(420).show(0);

                $("#buttonSpan2").text("SIGN UP");
                $("#environmentText").text("Hello, friend!");
                $("#centrate").text("Enter your personal details and start the journey with us.");

            } else {
                $("#content1").animate({
                    right: "39%",
                    left: "0"
                }, 700);

                $("#content2").animate({
                    left: "61%",
                    right: "0"
                }, 700);

                if (!isLogoStack2Visible) {
                    $("#logoStack2").delay(510).show(0);
                } else {
                    $("#logoStack2").delay(150).hide(0);
                }

                isLogoStack2Visible = !isLogoStack2Visible;

                $("#cage2").delay(390).hide(0);
                $("#cage1").delay(420).show(0);

                $("#buttonSpan2").text("SIGN IN");
                $("#environmentText").text("Welcome back!");
                $("#centrate").text("Connect with our services by loging in with your information.");
            }
        });
    });

</script>

<script>

    // JavaScript to synchronize checkbox state with hidden input field
    const checkboxSet = document.getElementById("acceptEulaSet");
    const hiddenInput = document.getElementById("acceptEULA");

    // Function to set the hidden input field value based on checkbox state
    function syncCheckbox() {
        hiddenInput.value = checkboxSet.checked ? "checked" : "unchecked";
    }

    // Initially synchronize checkbox state with hidden input field
    syncCheckbox();

    // Add event listener to update hidden input field when checkbox state changes
    checkboxSet.addEventListener("change", syncCheckbox);
    
</script>

<style>
    #content1 {
    font-family: "Gotham Pro Regular";
    width: 60%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
}

#content2 {
    width: 39%;
    height: 100%;
    background-color: #3498db;
    position: absolute;
    top: 0;
    right: 0;
}

#facebookSignUp,
#googleSignUp {

    height: 60px;
    margin-left: 10px;
}

.left {
    left: 0;
    right: auto;
    transition: left 0.7s, right 0.7s;
}

.right {
    transition: left 0.7s, right 0.7s;
}

/** Body elements **/

#username,
#emailNew,
#passwordNew,
#sendDataNew {

    display: block;
    margin-top: 10px;

}

#usernameUsed,
#passwordUsed,
#sendDataUsed {

    display: block;
    margin-top: 10px;

}

#username,
#emailNew,
#passwordNew {

    font-family: "Gotham Pro Regular";
    width: 400px;
    height: 40px;
    background-color: #F5F5F5;
    border: 0px;

}

#usernameUsed,
#passwordUsed {

    font-family: "Gotham Pro Regular";
    width: 400px;
    height: 40px;
    background-color: #F5F5F5;
    border: 0px;

}

#content1,
#cage1 {

    display: flex;
    justify-content: center;
    align-items: center;

}

#accountCreateText {

    font-size: 40px;
    text-align: center;
    font-weight: 600;
    color: #3498db;

}

#logInExistingAcc {

    font-size: 40px;
    text-align: center;
    font-weight: 600;
    color: #3498db;

}

#positioner,
#positioner1,
#positioner2,
#positioner3 {

    width: 100%;

}

#positioner,
#sendDataNew {

    display: flex;
    justify-content: center;

}

#positioner1,
#sendDataUsed {

    display: flex;
    justify-content: center;

}

#positioner2,
#passwordRecovery {

    display: flex;
    justify-content: center;

}

#positioner3,
#submask {

    display: flex;
    justify-content: center;

}

#usernameUsed,
#passwordUsed {

    display: block;

}

.userLogo {

    margin-top: -20px;
    color: #808080;

}

.custom-input {

    padding-left: 30px;
}

#sendDataNew {

    margin-top: 20px;
}

.button {

    font-size: 20px;
    border: 0px;
    width: 200px;
    height: 46px;
    font-family: "Gotham Pro Regular";
    background-color: #3498db;
    color: white;
    border-radius: 10px;
    transition: background-color 0.5s ease-in-out;

}

.button:hover {

    color: #eee;
    background-color: #333;
    cursor: pointer;
}

#sendDataNew,
#txtBtn1 {

    display: flex;
    justify-content: center;
    align-items: center;

}

#txtBtn1,
#txtBtn2 {

    font-weight: 600;

}

#sendDataUsed,
#txtBtn2 {

    display: flex;
    justify-content: center;
    align-items: center;

}

#logoStack1 {

    display: flex;
    justify-content: center;
    align-items: center;
    width: 200px;

}

#platformTitle {

    font-family: "Gotham Pro Regular";
    font-weight: 600;
    color: black;
}

#logoStack2 {

    display: flex;
    justify-content: center;
    align-items: center;
    width: 200px;
    position: absolute;
    top: 1%;
    left: 1%;

}

#platformTitle1 {

    font-family: "Gotham Pro Regular";
    font-weight: 600;
    color: white;

}

#content2,
#environmentCage {

    display: flex;
    justify-content: center;
    align-items: center;

}

#environmentText {

    font-family: "Gotham Pro Regular";
    font-size: 40px;
    font-weight: 600;
    color: white;

}

#environmentText1 {

    font-family: "Gotham Pro Regular";
    font-size: 20px;
    font-weight: 600;
    color: white;
    margin-top: 50px;
    padding-left: 30px;

}

#correctMask,
#environmentText1 {

    display: block;

}

#correctMask,
#environmentText {

    display: flex;
    justify-content: center;

}

#changeEnv {

    font-size: 20px;
    border: 0px;
    width: 200px;
    height: 46px;
    font-family: "Gotham Pro Regular";
    font-weight: 600;
    border: 2px solid white;
    background-color: #3498db;
    color: white;
    border-radius: 10px;
    transition: background-color 0.5s ease-in-out;
    margin-top: 40px;

}

#changeEnv:hover {

    color: white;
    background-color: #333;
    cursor: pointer;

}

#maskCorrect2,
#changeEnv {

    display: flex;
    justify-content: center;

}

#changeEnv,
#buttonSpan2 {

    display: flex;
    justify-content: center;
    align-items: center;

}

#centrate {
    text-align: center;
}

/** Body elements **/

#facebookLogo {

    height: 50px;

}

#googleLogo {

    height: 50px;
    margin-left: 20px;

}

#microsoftLogo {

    height: 48px;
    margin-left: 20px;

}

#facebookLogo1 {

    height: 50px;

}

#googleLogo1 {

    height: 50px;
    margin-left: 20px;

}

#microsoftLogo1 {

    height: 48px;
    margin-left: 20px;

}

#socialnetworks {

    display: flex;
    justify-content: center;

}

#scaler1 {

    display: flex;
    justify-content: center;
    margin-top: -30px;

}

#scaler2 {

    display: flex;
    justify-content: center;
    align-items: center;

}

#bar {

    height: 0px;
    width: 140px;
    border: 1px solid grey;
    margin-left: 10px;
    margin-right: 10px;

}

#choice {

    font-family: "Gotham Pro Regular";

}

#inElement {

    font-size: 13px;

}

#bundle1{
    
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}
</style>