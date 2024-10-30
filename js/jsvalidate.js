function validateform()
{
	var name = document.callback.callback_fe_name;
    var name = document.callback.callback_fe_name;
    var number = document.callback.callback_fe_number;
    var time = document.callback.callback_fe_time;
    var numbersspace= /^[0-9 ]+$/;

    if (name.value == "")
    {
        window.alert("Please enter a name.");
        name.focus();
        return false;
    }
    if (number.value == "")
    {
        window.alert("Please enter a phone number.");
        number.focus();
        return false;
    }
	if (number.value.match(numbersspace)){
	return true;
	}else{
	window.alert("Please Enter Numbers Only.");
	number.focus();
	return false;
	}
    if (time.value == "")
    {
        window.alert("Please enter a time for us to call.");
        hours.focus();
        return false;
    }
    return true;
}