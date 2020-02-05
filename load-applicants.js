let count;
function showCustomer(str) {
    var xhttp;
    count = str;
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "getapplicant.php?q=" + str, true);
    xhttp.send();
}

function next() {
    count++;
    showCustomer(count);
}
function previous() {
    count--;
    showCustomer(count);
}

function forward() {
    window.location = 'selected_applicants.php';
}