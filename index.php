<!DOCTYPE html>
<html>

<head>



  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet' type='text/css' href='css/login.css'>
  <link rel='stylesheet' type='text/css' href='css/select_menu.css'>


  <title>DPU</title>
 <!-- add icon link -->
 <link rel = "icon" href = 
 "src/logo1.png" 
        type = "image/x-icon">

</head>

<body>


  <style>
    .container {
      height: 300px;
      position: relative;
    }

    .center {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
  </style>


  <div class="bg-image">
    <TABLE style='font-size:20px;color: WHITE;' align='center' cellpadding='10' width='80%'>

      <tr  class='active' align='center'>
        <TD width='50%'>


          <img src="src/logo1.png" alt="HTML5 Icon" style="width:200px;height:128px;
  object-fit: cover;">
        </TD>
        <TD width='50%'>

          <h2>
            زانكویا پولیته‌كنیكی یا دهوك
            <br>
            په‌یمانگه‌ها ته‌كنیكی کارگێرى
          </h2>

        </TD>
      </tr>

    </table>


    <div class="container">
      <div class="center">
        <h2 style='font-size:50px;color: wHITE;' align='center'> ئەنجامێن قوناغا دووێ</h2>

        <button onclick="document.getElementById('id01').style.display='block'" style="width:100%;  font-size: 30px;">دیارکرنا
          ئەنجامان</button>

      </div>
    </div>



    <div id="id01" class="modal">

      <form class="modal-content animate" action="result.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close"
            title="Close Modal">&times;</span>
          <img src="src/logo1.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <label for="uname"><b>کورد</b></label>
          <input type="text" placeholder="کودی لڤێرێ بنڤێسە" name="uname" required>

          <label for="cars_">بەش </label>
          <div class="custom-select" style="width:100%;">
            <select name="cars_" required>
              <option value="0">بەشی هەلبژێرە</option>
              <option value="1">ژمێريارى - سپێده‌يان</option>
              <option value="2">كارگێرى كار - سپێده‌يان</option>
              <option value="3">ته‌ندروستى - سپێده‌يان</option>
              <option value="4">سيسته‌مێ زانيارى - سپێده‌يان</option>
              <option value="5">راگه‌هاندن - سپێده‌يان</option>
              <option value="6">ژمێريارى - ئێڤاران</option>
              <option value="7">كارگێرى كار - ئێڤاران</option>
              <option value="8">ته‌ندروستى - ئێڤاران</option>
              <option value="9">سيسته‌مێ زانيارى - ئێڤاران</option>
            </select>
          </div>
          <br><br>

          <button type="Show Result" style="font-size: 30px;"><B>دیتنا ئەنجامان</B></button>

        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'"
            class="cancelbtn">Cancel</button>

        </div>
      </form>
    </div>

  </div>

  <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

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
        c.addEventListener("click", function (e) {
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
      a.addEventListener("click", function (e) {
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