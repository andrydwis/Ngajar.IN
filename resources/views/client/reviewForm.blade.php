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
              <label for="formControlRange">Example Range input</label>
                    <input type="range" class="form-control-range" id="formControlRange" min="1" max="5" step="1">
              <textarea class="form-control" cols="30" rows="3" placeholder="write your review..."></textarea>
              <br>
              <center>
                <meta charset="utf-8">
                <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
                <link rel="stylesheet" href="{{ asset('css/star.css') }}">

               

                <div class="box">
                  <ion-icon name="star" class="b1"></ion-icon>
                  <ion-icon name="star" class="b2"></ion-icon>
                  <ion-icon name="star" class="b3"></ion-icon>
                  <ion-icon name="star" class="b4"></ion-icon>
                  <ion-icon name="star" class="b5"></ion-icon>
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