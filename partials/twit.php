
  <div class="container">
    <div id="ajaxStatus"></div>
    <form class="form-group" action="/modules/add-twit.php" method="post" id="formTwit" enctype="multipart/form-data">
      <input type="hidden" name="user_id" value="<?php echo getUserID(); ?>" >
      <label for="twit">Your twit</label>
      <textarea class="form-control" name="twit" id="twit"  rows="3"></textarea>
    <div class="d-flex">
      <input id="twitImage" type="file" name="image" class="form-control">
      <button class="btn btn-success ">&nbsp&nbsp&nbsp&nbspSend&nbsp&nbsp&nbsp&nbsp</button>
    </div>
    </form>
  </div>
