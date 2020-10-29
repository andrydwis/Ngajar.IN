<a type="button" class="badge badge-pill badge-primary p-3 m-3 text-white" data-toggle="modal" data-target="#addreview">
    Review
</a>
<div class="modal fade" id="addreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Review</label>
                    <textarea class="form-control" cols="30" rows="3" placeholder="write your review..."></textarea>
                    <br>
                    <center>
                    <meta charset="utf-8">
                    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
                    <link rel="stylesheet" href="{{ asset('css/star.css') }}">

                    <div class="wrapper">
                      <input type="radio" id="r1" name="rg1">
                      <label for="r1"><ion-icon name="star"></ion-icon></label>
                      <input type="radio" id="r2" name="rg1">
                      <label for="r2"><ion-icon name="star"></ion-icon></label>
                      <input type="radio" id="r3" name="rg1">
                      <label for="r3"><ion-icon name="star"></ion-icon></label>
                      <input type="radio" id="r4" name="rg1">
                      <label for="r4"><ion-icon name="star"></ion-icon></label>
                      <input type="radio" id="r5" name="rg1">
                      <label for="r5"><ion-icon name="star"></ion-icon></label>
                    </div>
                  </center>             
                  </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn btn-success" value="Submit" data-toggle="modal">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>          
      </div>            
    </div>
  </div>