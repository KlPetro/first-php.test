
  <div class="container">
    <div id="ajaxStatus"></div>
    <form class="form-group" action="#" method="post" id="formTwit">
      <input type="hidden" name="user_id" value="<?php echo getUserID(); ?>" >
      <label for="twit">Your twit</label>
      <textarea class="form-control" name="twit" id="twit"  rows="3"></textarea>
      <button class="btn btn-success">Send</button>
    </form>
  </div>
