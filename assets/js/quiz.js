/* validate that each quiz question has been answered */
function validate() {
    "use strict";
    var valid1 = false;
    var valid2 = false;
    var valid3 = false;
    
    var qArray = document.getElementsByClassName("radio");
    
    for (var i = 0; i < 4; i++) {
        if (qArray[i].checked) {
            valid1 = true;
        }
    }
    for (var i = 4; i < 8; i++) {
        if (qArray[i].checked) {
            valid2 = true;
        }
    }
    for (var i = 8; i < 12; i++) {
        if (qArray[i].checked) {
            valid3 = true;
        }
    }
    
    console.log(valid1 + " " + valid2 + " " + valid3);
    return (valid1 && valid2 && valid3);
}