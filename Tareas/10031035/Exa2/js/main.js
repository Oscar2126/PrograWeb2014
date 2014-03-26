//manejo de jquery con parte javascrip

$(document).ready(
  function(){



		$('#btn1').click(function(){
			var d;
			var m;
			var a;
			var c;
			var e;
			var f;

			d=parseInt(document.getElementById('dia').value);
			m=parseInt(document.getElementById('mes').value);
			a=parseInt(document.getElementById('año').value);


			if(m>2)
			{
				//3
				m=m-2;

				//4
				c=parseInt(a/100);
				e=a%100;

				//5
				b = parseInt(((13*m)-1)/5) + parseInt(e/4) + parseInt(c/4);

				//6
				f = (b + e + d - (2*c))%7;

			}
			else
			{
				//2
				m=m+10;
				a=a-1;	

				//4
				c=parseInt(a/100);
				e=a%100;

				//5
				b = parseInt(((13*m)-1)/5) + parseInt(e/4) + parseInt(c/4);

				//6
				f = (b + e + d - (2*c))%7;		
			}

			alert(f);

			switch (f){
				case 0:
					document.getElementById("resul").innerHTML="Domingo";
					break;
				case 1:
					document.getElementById("resul").innerHTML="Lunes";
					break;
				case 2:
					document.getElementById("resul").innerHTML="Martes";
					break;
				case 3:
					document.getElementById("resul").innerHTML="Miercoles";
					break;
				case 4:
					document.getElementById("resul").innerHTML="Jueves";
					break;
				case 5:
					document.getElementById("resul").innerHTML="Viernes";
					break;
				case 6:
					document.getElementById("resul").innerHTML="Sabado";
					break;
					
			}



		});	

	}
);





/*
			var d;
			var m;
			var a;
			var c;
			var e;
			var f;

			d=parseInt(document.getElementById('dia').value);
			m=parseInt(document.getElementById('mes').value);
			a=parseInt(document.getElementById('año').value);


			if(m>2)
			{
				//3
				m=m-2;

				//4
				c=parseInt(a/100);
				e=a%100;

				//5
				e=parseInt(e/4);
				c=parseInt(c/4);
				b=(((13*m)-1)/5+e+c);

				//6
				f=parseInt((b+e+d-2*c)%7));

			}
			else
			{
				//2
				m=m+10;
				a=a-1;	

				//4
				c=parseInt(a/100);
				e=a%100;

				//5
				e=parseInt(e/4);
				c=parseInt(c/4);
				b=(((13*m)-1)/5+e+c);

				//6
				f=parseInt((b+e+d-2*c)%7));		
			}
*/