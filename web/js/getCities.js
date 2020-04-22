function viewProfile() {
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myObj = JSON.parse(this.responseText);
            success = myObj.success;

        }
    };
    xmlhttp.open("GET", "php/getProfile.php", true);
    xmlhttp.send();
}