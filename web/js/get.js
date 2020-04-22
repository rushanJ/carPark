
function viewProfile() {
    
    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function() {
        //alert ("fdsfdgfdssSDDF");
            if (this.readyState == 4 && this.status == 200) {
                alert (this.responseText);
                //myObj = JSON.parse(this.responseText);
                // success = myObj.success;
                // id = myObj.id;
                // name = myObj.name;
                // nic = myObj.nic;
                // uniId = myObj.uniId;
                // gender = myObj.gender;
                // hometown = myObj.hometown;
                // batch = myObj.batch;
                // faculty = myObj.faculty;
                // degree = myObj.degree;
                // mob1 = myObj.mob1;
                // mob2 = myObj.mob2;
                // mob3 = myObj.mob3;
                // email = myObj.email;
                // alert(email);
                


            }
    }

    
    xmlhttp.open("GET", "php/getProfile.php", true);
    xmlhttp.send();
    //alert ("fdsfdgfdssSDDF");
}