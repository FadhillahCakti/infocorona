		var n1, n2, n3, res;

		function sum()
		{
			checklist();
			if(n1!="" && n2!="" && n3!=""){res=n1+n2+n3;}
			else if(n1!="" && n2!=""){res=n1+n2;}
			else if(n1!="" && n3!=""){res=n1+n3;}
			else if(n2!="" && n3!=""){res=n2+n3;}
			else {alert("masukkan input lagi"); res="";};
			document.isian.txtres.value = res;
		}

		function min()
		{
			checklist();
			if(n1!="" && n2!="" && n3!=""){res=n1-n2-n3;}
			else if(n1!="" && n2!=""){res=n1-n2;}
			else if(n1!="" && n3!=""){res=n1-n3;}
			else if(n2!="" && n3!=""){res=n2-n3;}
			else {alert("masukkan input lagi"); res="";};
			document.isian.txtres.value = res;
		}

		function mul()
		{
			checklist();
			if(n1!="" && n2!="" && n3!=""){res=n1*n2*n3;}
			else if(n1!="" && n2!=""){res=n1*n2;}
			else if(n1!="" && n3!=""){res=n1*n3;}
			else if(n2!="" && n3!=""){res=n2*n3;}
			else {alert("masukkan input lagi"); res="";};
			document.isian.txtres.value = res;
		}

		function div()
		{
			checklist();
			if(n1!="" && n2!="" && n3!=""){res=n1/n2/n3;}
			else if(n1!="" && n2!=""){res=n1/n2;}
			else if(n1!="" && n3!=""){res=n1/n3;}
			else if(n2!="" && n3!=""){res=n2/n3;}
			else {alert("masukkan input lagi"); res="";};
			document.isian.txtres.value = res;
		}

		function checklist()
		{
			n1=Number(document.isian.isian1.value);
			n2=Number(document.isian.isian2.value);
			n3=Number(document.isian.isian3.value);

			if(n1!=""){document.isian.cekn1.checked=true;}
			else {document.isian.cekn1.checked=false;};
			if(n2!=""){document.isian.cekn2.checked=true;}
			else {document.isian.cekn2.checked=false;};
			if(n3!=""){document.isian.cekn3.checked=true;}
			else {document.isian.cekn3.checked=false;};

		}	