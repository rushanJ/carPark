
function viewProfile() {
   
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myObj = JSON.parse(this.responseText);
            success = myObj.success;
            id = myObj.id;
            name = myObj.name;
            nic = myObj.nic;
            uniId = myObj.uniId;
            gender = myObj.gender;
            hometown = myObj.hometown;
            pw = myObj.pw;
            // faculty = myObj.faculty;
            // degree = myObj.degree;
            mob1 = myObj.mob1;
            mob2 = myObj.mob2;
            mob3 = myObj.mob3;
            email = myObj.email;
            //]alert(id);

            document.getElementById("name").innerHTML = name;
            document.getElementById("uniId").innerHTML = uniId;
            document.getElementById('profileImg').src = "php/uploads/profile/" + id + '.jpg'
            document.getElementById("nic").innerHTML = nic;
            document.getElementById("gender").innerHTML = gender;
            document.getElementById("hometown").innerHTML = hometown;
            document.getElementById("pw").value = pw;
            // document.getElementById("faculty").innerHTML = faculty;
            // document.getElementById("degree").innerHTML = degree;
            document.getElementById("mob1").innerHTML = mob1;
            document.getElementById("email").innerHTML = email;
            // if (mob2 != 0)
            //     document.getElementById("mob2").innerHTML = mob2;
            // if (mob3 != 0)
            //     document.getElementById("mob3").innerHTML = mob3;

            document.getElementById('profileImg').src = "php/uploads/profile/" + id + '.jpg'
   
        }
    };
    xmlhttp.open("GET", "php/getProfile.php", true);
    xmlhttp.send();
}
