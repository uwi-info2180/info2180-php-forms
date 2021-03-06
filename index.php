<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forms and PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="styles.css" media="screen">
  </head>
  <body>
    <div class="container">
      <?php include 'header.php'; ?>
      
      <main>
        <h2>Writing a simple letter</h2>
        <form action="letter.php" method="post">
          <div class="form-group">
            <label for="firstname">First name</label>
            <input type="text" name="firstname" id="firstname" class="form-control" />
          </div>
          <div class="form-group">
            <label for="lastname">Last name</label>
            <input type="text" name="lastname" id="lastname" class="form-control" />
          </div>
          <fieldset>
            <legend>Gender</legend>
            <div class="form-group">
              <label class="radio-inline">
                <input type="radio" name="gender" value="he" id="male"> Male
              </label>
              <label class="radio-inline">
                <input type="radio" name="gender" value="she" id="female"> Female
              </label>
            </div>
          </fieldset>
        <fieldset>
          <legend>Academic Information</legend>
          <div class="form-group">
            <label for="faculty">Faculty</label>
            <select class="form-control" name="faculty" id="faculty">
              <option value="Science and Technology">Science and Technology</option>
              <option value="Social Sciences">Social Sciences</option>
              <option value="Medical Sciences">Medical Sciences</option>
              <option value="Law">Law</option>
              <option value="Humanities and Education">Humanities and Education</option>
            </select>
          </div>
          <div class="form-group">
            <label for="year_of_study">Year of Study</label>
            <select class="form-control" name="year_of_study" id="year_of_study">
              <option value="1st Year">1st Year</option>
              <option value="2nd Year">2nd Year</option>
              <option value="3rd Year">3rd Year</option>
            </select>
          </div>
        </fieldset>
        <div class="form-group">
          <label for="comments">Additional Comments</label>
          <textarea name="comments" rows="5" cols="40" class="form-control"></textarea>
        </div>
          <button type="submit" name="submitBtn" class="btn btn-primary">Submit</button>
        </form>
      </main>

      <?php include 'footer.php'; ?>
    </div>
  </body>
</html>
