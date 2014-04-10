/**
 * Created by Aneesh Neelam <neelam.aneesh@gmail.com> on 10/4/14.
 */

function validatepwd() {
    var pwd = document.getElementById("pwd").value;
    var cpwd = document.getElementById("cpwd").value;
    var pwdmsg = document.getElementById('pwdmsg');
    if (pwd === cpwd) {

        pwdmsg.style.visibility = "collapse";
    }
    else {
        pwdmsg.style.visibility = "visible";
    }
}
