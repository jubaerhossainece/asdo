<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" id="alert-modal">
      <div class="modal-body">
        <div class="alert-icon">
          <img src="{{url('assets/images/exclamation-mark.png')}}" alt="">          
        </div>
        <div class="alert-message">
          <div class="short-message">
           <h2>Are you sure!</h2>            
          </div>
          <div class="long-message">
            <p>Once you delete you will not be able to recover</p>          
          </div>
          <input type="hidden" id="delete-id" value="">
          <p>
            <script>
              document.getElementById('delete-id').value;
            </script>
        </p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">No, cancel!</button>
        <button type="button" class="btn btn-success" onclick="deleteUser($('#delete-id').value)" id="confirm" data-dismiss="modal">Yes, delete!</button>
      </div>
    </div>
  </div>
</div>