<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


<link rel='stylesheet' type='text/css' href='css/select_menu.css'>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form"  action="../result.php" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						ئەنجام
					</span>

					<div class="wrap-input100 validate-input" data-validate = "کودی بنڤێسە">
						<input class="input100" type="text" name="uname" placeholder="کودی لڤێری بنڤێسە">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="custom-select" style="width:200px;">
					<select name="cars_" required>
							<option value="0">بەشی هەلبژێرە</option>
							<option value="1">ژمێريارى - سپێده‌يان</option>
							<option value="2">BMW</option>
							<option value="3">Citroen</option>
							<option value="4">Ford</option>
							<option value="5">Honda</option>
							<option value="6">Jaguar</option>
							<option value="7">Land Rover</option>
							<option value="8">Mercedes</option>
							<option value="9">Mini</option>
							<option value="10">Nissan</option>
							<option value="11">Toyota</option>
							<option value="12">Volvo</option>
						</select>
						</div>
						
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							زانینا ئەنجامان
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script>
		var x, i, j, l, ll, selElmnt, a, b, c;
		/*look for any elements with the class "custom-select":*/
		x = document.getElementsByClassName("custom-select");
		l = x.length;
		for (i = 0; i < l; i++) {
		  selElmnt = x[i].getElementsByTagName("select")[0];
		  ll = selElmnt.length;
		  /*for each element, create a new DIV that will act as the selected item:*/
		  a = document.createElement("DIV");
		  a.setAttribute("class", "select-selected");
		  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
		  x[i].appendChild(a);
		  /*for each element, create a new DIV that will contain the option list:*/
		  b = document.createElement("DIV");
		  b.setAttribute("class", "select-items select-hide");
		  for (j = 1; j < ll; j++) {
			/*for each option in the original select element,
			create a new DIV that will act as an option item:*/
			c = document.createElement("DIV");
			c.innerHTML = selElmnt.options[j].innerHTML;
			c.addEventListener("click", function(e) {
				/*when an item is clicked, update the original select box,
				and the selected item:*/
				var y, i, k, s, h, sl, yl;
				s = this.parentNode.parentNode.getElementsByTagName("select")[0];
				sl = s.length;
				h = this.parentNode.previousSibling;
				for (i = 0; i < sl; i++) {
				  if (s.options[i].innerHTML == this.innerHTML) {
					s.selectedIndex = i;
					h.innerHTML = this.innerHTML;
					y = this.parentNode.getElementsByClassName("same-as-selected");
					yl = y.length;
					for (k = 0; k < yl; k++) {
					  y[k].removeAttribute("class");
					}
					this.setAttribute("class", "same-as-selected");
					break;
				  }
				}
				h.click();
			});
			b.appendChild(c);
		  }
		  x[i].appendChild(b);
		  a.addEventListener("click", function(e) {
			  /*when the select box is clicked, close any other select boxes,
			  and open/close the current select box:*/
			  e.stopPropagation();
			  closeAllSelect(this);
			  this.nextSibling.classList.toggle("select-hide");
			  this.classList.toggle("select-arrow-active");
			});
		}
		function closeAllSelect(elmnt) {
		  /*a function that will close all select boxes in the document,
		  except the current select box:*/
		  var x, y, i, xl, yl, arrNo = [];
		  x = document.getElementsByClassName("select-items");
		  y = document.getElementsByClassName("select-selected");
		  xl = x.length;
		  yl = y.length;
		  for (i = 0; i < yl; i++) {
			if (elmnt == y[i]) {
			  arrNo.push(i)
			} else {
			  y[i].classList.remove("select-arrow-active");
			}
		  }
		  for (i = 0; i < xl; i++) {
			if (arrNo.indexOf(i)) {
			  x[i].classList.add("select-hide");
			}
		  }
		}
		/*if the user clicks anywhere outside the select box,
		then close all select boxes:*/
		document.addEventListener("click", closeAllSelect);
		</script>

</body>
</html>