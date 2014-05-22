/**
 * Created by Aneesh Neelam <neelam.aneesh@gmail.com> on 10/4/14.
 */

function validatepwd()
{
    var pwd = document.getElementById("pwd");
    var cpwd = document.getElementById("cpwd");
    var pwdmsg = document.getElementById("pwdmsg");
    if (pwd.value === cpwd.value)
    {
        pwdmsg.style.visibility = "collapse";
    }
    else
    {
        pwdmsg.style.visibility = "visible";
    }
}
