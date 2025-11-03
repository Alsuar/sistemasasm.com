<?php 
  $producto = $_POST['producto'];
  $descri = $_POST['descripcion'];

  echo'
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">'.$producto.'</h4>
        </div>
        <div class="modal-body">
          <p>'.$descri.'</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" id="cmodal">Close</button>
        </div>
      </div>
    </div>
  </div>';
?>