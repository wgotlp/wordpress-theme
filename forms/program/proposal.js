// proposal form checker
// $Id: proposal.js,v 1.7 2007/11/20 05:38:35 ep Exp wgot $
//

//
// overload String to add trim method
String.prototype.trim = function () {
    return this.replace(/^\s+|\s+$/g,"");
};

//
// check if the email address is valid.
//
// from http://www.codetoad.com/javascript/is_valid_email.asp
function isValidEmail(email)
{
    return (email.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1);
}

//
// check if we have a valid phone number.
//
// based on code from  http://developer.apple.com/internet/webcontent/validation.html
// and http://www.codetoad.com/javascript/isnumeric.asp
function isValidPhone(phone)
{
    var validchars = "0123456789";

    // strip space, dash, periods and parens
    var stripped = phone.replace(/[\(\)\.\-\ ]/g, "");

    // then check to make sure there are 10-values
    if (stripped.length != 10) {
        return false;
    }

    // now check to make sure what is left is all numbers
    for (var i = 0; i < stripped.length; i++) 
    { 
        Char = stripped.charAt(i); 
        if (validchars.indexOf(Char) == -1) {
            return false;
        }
    }

    return true;
}

//
// check form values
function checkValues()
{
    var reqfields = [ 'title', 'type', 'duration', 'description', 'name', 'phone', 'email' ];

    for (var i = 0; i < reqfields.length; i++)
    {
	if (reqfields[i] != 'duration' && reqfields[i] != 'type')
	{
	    var str = document.getElementById(reqfields[i]).value.trim();

            // check if the field is blank
	    if (str == "")
	    {
                var msg;
                if ((reqfields[i] == 'title') || (reqfields[i] == 'description')) {
                    msg = "Please enter a " + reqfields[i] + " for your proposed program";
                }
                else if ((reqfields[i] == 'name') || (reqfields[i] == 'phone')) {
                    msg = "Please enter your " + reqfields[i];
                }
                else if (reqfields[i] == 'email') {
                    msg = "Please enter your email address";
                }
		alert(msg);
		return false;
	    }

            // for email addresses, make sure it's valid
            if (reqfields[i] == 'email')
            {
                if (!isValidEmail(str))
                {
		    alert("Please enter a valid email address");
                    return false;
                }
            }
            else if (reqfields[i] == 'phone')
            {
                if (!isValidPhone(str))
                {
		    alert("Please enter a valid 10-digit phone number (including area code)");
                    return false;
                }
            }
	}
	else
	{
            if (reqfields[i] == 'duration')
            {
                // duration is a radio so we check if one of the options is
                // checked
	        var radio = [ 'dlt30', 'd30', 'd60', 'd120', 'dgt120' ];

	        for (var j = 0; j < radio.length; j++) 
                {
		    if (document.getElementById(radio[j]).checked)
		        break;
	        }

	        if (j == radio.length)
	        {
		    alert("Please select a program duration");
		    return false;
	        }
            }
            else if (reqfields[i] == 'type')
            {
	        var radio = [ 'music', 'talk' ];

	        for (var j = 0; j < radio.length; j++) 
                {
		    if (document.getElementById(radio[j]).checked)
		        break;
	        }

	        if (j == radio.length)
	        {
		    alert("Please select a program type");
		    return false;
	        }
            }
	}
    }

    return true;
}

//
// enable or disable the 'sample[]' text fields
function setSampleFieldMode(cnt)
{
    var mode;
    var tf;

    if ( document.getElementById('talk').checked ) {
        mode = true;
    }
    else {
        mode = false;
    }

    for (var i = 0; i < cnt; i++) {
	tf = document.getElementById('sample' + i);
        tf.disabled = mode;

	if (!mode) {
	  tf.style.backgroundColor = "white";
        }
	else {
  	  tf.style.backgroundColor = "#ddd";
	}
    }
}
