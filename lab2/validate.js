
window.onload = function() {
	var formHandle = document.forms[0];
	formHandle.onsubmit = processForm;

	function processForm() {


		// var radio1 = document.getElementById('male').checked;
		// var radio2 = document.getElementById('female').checked;

		// if (radio1 == false && radio2 == false) {
		// 	alert("Select a title!");

		// 	return false;

		// } else {

		// 	return true;
		// }

		var myDisplay = document.getElementById('thanks_msg');
			var nameElem = formHandle.f_Name;
			var nameInput = formHandle.f_Name.value;
			console.log(nameInput);

			if (nameElem.value === "" || nameElem.value === null) {
				nameElem.style.background = 'red';
				nameElem.focus();
				alert("Enter your name");

				return false;
			}
			if (isNaN(nameElem.value)){
				console.log("valid");
			}
			else {

			}

			var custp = formHandle.p_num.value;
			var custElem = formHandle.p_num;



			if (custElem.value === "" || custElem.value === null) {
				custElem.style.background = 'red'
				custElem.focus();
				alert("Enter 10 digits");

				return false;
			}

			if (/^\d{10}$/.test(custElem.value)) {
				console.log("phone number");
				return false;
			}


			if (!isNaN(custElem.value)) {
				console.log("enter number");
			}
			else {
				console.log("not a number");
				custElem.style.background = 'red'
				custElem.focus();
				return false;
			}
			console.log(custp);


			document.getElementById('thanksCustomer').innerHTML = nameInput +  " (Phone " + custp + ")";

		formHandle.style.display = 'none';
		myDisplay.style.display = 'block';


		return false;
	}
}