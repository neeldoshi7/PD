$(document).ready(function() {
    loginPrompt();
})

const loginPrompt = () => {
    var thePrompt = window.open("", "", "widht=500");
    var theHTML = "";

    theHTML += "<p>The server http://localhost:8888 requires a username and password. The server says: These are restricted files, please authenticate yourself.</p>";
    theHTML += "<br/>";
    theHTML += "Username: <input type='text' id='theUser' placeholder='Enter Username...'/>";
    theHTML += "<br />";
    theHTML += "Password: <input type='text' id='thePass' placeholder='Enter Password...'/>";
    theHTML += "<br />";
    theHTML += "<input type='button' value='OK' id='authOK'/>";
    thePrompt.document.body.innerHTML = theHTML;

    var theUser = thePrompt.document.getElementById("theUser").value;
    var thePass = thePrompt.document.getElementById("thePass").value;
    thePrompt.document.getElementById("authOK").onclick = function () {
        doAuthentication(theUser, thePass);
    }
}

function doAuthentication(user, pass) {
    //do authentication
    if (user === "" && pass === "") {
        return true;
    }
}