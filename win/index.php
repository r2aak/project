<?php 
include './inc/db.php';
include './inc/form.php';
include './inc/dp_close.php';
include './inc/select.php';



?>

<?php include_once './parts/header.php'; ?>


<div class="container">


<!--- بداية الكونتينر -->
<center>
  <div class="d">

    <div class="p-4 p-md-5 mb-4 text-black rounded">
    <div class="col-md-6 px-0">
      <img src="img/imgs.png">
      <h1 class="display-4 fst-italic">اربح مع راكان</h1>
      <p class="lead my-3">باقي على نهايه المسابقه .. </p>
      <h3 id="countdown"></h3>
    <div class="container">
    <ul class="list-group list-group-flush"><br>
  <li class="list-group-item">المشروع</li>
  <li class="list-group-item">عمل الطالب : راكان محمد الغامدي</li>
  <li class="list-group-item">لدخول في السحب الرجاء متابعه حساباتي على التواصل الاجتماعي</li>
  <li class="list-group-item">السحب سيكون في بث مباشر , مده البث ساعه واحده</li>
</ul>
</div>
</center>


 <div class="position-relative text-right">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <h3>الرجاء ادخال معلوماتك للتسجيل</h3>
<!---->
        <div class="mb-3">
        <i class='fas fa-user-circle'></i>
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>
  <!---->
  <div class="mb-3">
  <i class='fas fa-user-circle'></i>
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $lastName ?>">
    <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>
<!---->
 <div class="mb-3">
 <i class="fa-solid fa-envelope"></i>
    <label for="email" class="form-label">البريد الإلكتروني</label>
    <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
    <div class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div> 
  <br>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" require>
    <label class="form-check-label" for="exampleCheck1">هل انت متأكد من معلوماتك ؟</label>
  </div>
  <button type="submit" name="submit" class="btn123">تسجيل المعلومات</button>
</form>
</div>
  </div>


<!---->
       <div class="loader-con">
    <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
<div class="button-wrapper">
</div>
</div>

<!---->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-outline-dark">
إختيار الرابح
</button>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']);?></h1>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<a class="btn btn-outline-dark" href="https://tvtc.gov.sa" target="_blank">موقع الكلية التقنية</a>

<?php include_once './parts/footer.php'; ?>





