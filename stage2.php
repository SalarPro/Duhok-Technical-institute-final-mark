<!doctype html>
<html lang="ar" dir="rtl">

<head>

  <title>DPU</title>

  <link rel="icon" href="src/logo1.png" type="image/x-icon">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <div class="row  align-items-center  p-5">
      <div class="col-5">
        <p class="h3">زانكویا پولیته‌كنیكی یا دهوك
          <br>
          په‌یمانگه‌ها ته‌كنیكی کارگێرى
        </p>
      </div>
      <div class="col-2"></div>
      <div class="col-5">
        <img src="src/logo1.png" class="img-fluid" style="max-height: 150px;" alt="Responsive image">
      </div>
    </div>


    

    <div class="row m-5">
      <div class="col-12">
        <form class="modal-content animate" action="result.php" method="post">
          <div class="card text-dark bg-light" style="">
            <div class="card-body">
              <div class="mb-3">
                <div class="h1 text-center ">قوناغا دووێ</div>
              </div> 
            </div>
          </div>
        </form>
      </div>
    </div>
    
    <div class="row m-5">
      <div class="col-12">
        <form class="modal-content animate" action="result.php" method="post">
          <div class="card text-dark bg-light" style="">
            <div class="card-body">
              <div class="mb-3">
                <div class="h1 text-center ">سپێدەهیا قوناغا ئێکێ</div>
              </div>
              <div class="mb-3">
                <label for="stdcode" class="form-label">کود</label>
                <input require type="name" class="form-control" name="stdcode" placeholder="کود" required>
              </div>
              <div class="mb-3">
                <label for="class_name" class="form-label">بەش</label>
                <select class="form-select " name="class_name" aria-label="Default select example" required>
                  <option value="" selected>بەشی هەلبژێرە</option>
                  <option value="acc_2_mor">ژمێريارى</option>
                  <option value="ba_2_mor">كارگێرى كار</option>
                  <option value="hm_2_mor">ته‌ندروستى</option>
                  <option value="mis_2_mor">سيسته‌مێ زانيارى</option>
                  <option value="mt_2_mor">راگه‌هاندن</option>
                </select>
              </div>
              <div class="mt-5 ml-5 mr-5 d-grid gap-2">
                <input class="btn btn-primary" type="submit" value="دیار کرنا ئەنجامان">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>


    <div class="row m-5">
      <div class="col-12">
        <div class="col-12">
          <form class="modal-content animate" action="result.php" method="post">
            <div class="card text-dark bg-light" style="">
              <div class="card-body">
                <div class="mb-3">
                  <div class="h1 text-center">ئێڤاران</div>

                </div>
                <div class="mb-3">
                  <label for="stdcode" class="form-label">کود</label>
                  <input type="name" class="form-control" name="stdcode" placeholder="کود" required>
                </div>
                <div class="mb-3">
                  <label for="class_name" class="form-label">بەش</label>
                  <select class="form-select" name="class_name" aria-label="Default select example" required>
                    <option value="" selected>بەشی هەلبژێرە</option>
                    <option value="acc_2_eve">ژمێريارى</option>
                    <option value="ba_2_eve">كارگێرى كار</option>
                    <option value="hm_2_eve">ته‌ندروستى</option>
                    <option value="mis_2_eve">سيسته‌مێ زانيارى</option>
                  </select>
                </div>
                <div class="mt-5 ml-5 mr-5 d-grid gap-2">
                  <input class="btn btn-primary" type="submit" value="دیار کرنا ئەنجامان">
                </div>

              </div>
            </div>
        </div>
        </form>




      </div>
    </div>
  </div>
</body>
</html>
