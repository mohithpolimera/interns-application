<html>
//rowwise
<form>
  <div class="form-group">
    <label for="formGroupExampleInput">Example label</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Another label</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
  </div>
</form>
//grid
<form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
</form>
//column sizing
<form>
  <div class="form-row">
    <div class="col-7">
      <input type="text" class="form-control" placeholder="City">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="State">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Zip">
    </div>
  </div>
</form>
</html>
//column auto sizing -<div class="col-auto">
//radio button
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom radio</label>
</div>


<html>
    <h1>APPLICATION FORM FOR INTERNSHIP/TRAINING</H1>
    <br>
    <h1>STUDENT DETAILS</h1>
    <form>
    <div class="row">
        <div class="col">
         <input type="text" class="form-control" placeholder="Name">
        </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="College Roll no">
    </div>
</div>
</form>
<form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Course">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Branch/Specialization">
    </div>
</div>
    </form>
</html>

<script>
    window.location.href = "http://localhost/first_project/profile.php?id=55";
 </script>
 print_R("Hello"+$_GET['id']);

 
<script>
    window.location.href = "http://localhost/kmrl_project/app.php?id=<?php $email ?>";
 </script>

<img src="<?php echo $image ?>"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />



                $query1 = "SELECT email FROM kmrlform";
$result2 = $conn->query($query1);

while ($row1 = $result2->fetch_assoc()) 
{
    $theDate = $row1["email"];
    echo "<a href='profile.php?email=$email'>view</a><br>";
}