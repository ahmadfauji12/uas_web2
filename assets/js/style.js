$(document).ready(function() {
    $('#example').DataTable(
        
         {     

      "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
        "iDisplayLength": 5
       } 
        );
} );


function checkAll(bx) {
  var cbs = document.getElementsByTagName('input');
  for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
      cbs[i].checked = bx.checked;
    }
  }
}

function validate()
		{
			if (document.myForm.nama.value == "") 
			{
				alert("Please Enter First Name");
				document.myForm.nama.focus();
				return false;
			}

			if (document.myForm.npm.value == "") 
			{
				alert("Please Enter Last Name");
				document.myForm.npm.focus();
				return false;
			}
			
			if (document.myForm.studi_studi.value == "") 
			{
				alert("Please Enter First Name");
				document.myForm.program_studi.focus();
				return false;
			}

			if (document.myForm.email.value == "")
			{
				alert("Please Create your Password");
				document.myForm.email.focus();
				return false;
			}

			if (document.myForm.nomor.value == "") 
			{
				alert("Please enter Mobile Number");
				document.myForm.nomor.focus();
				return false;
			}

			if (document.myForm.almat.value == "") 
			{
				alert("Please Enter E-Mail ID");
				document.myForm.alamat.focus();
				return false;
			}

			if (document.myForm.tgl_lahir.value == "") 
			{
				alert("Please Enter Address");
				document.myForm.tgl_lahir.focus();
				return false;
			}

			if (document.myForm.dob.value == "")
			{
				alert("Please Enter Date of Birth");
				document.myForm.dob.focus();
				return false;
			}
		}