<!-- Add Modal -->
<div class="modal fade" id="addModal" aria-labelledby="addModalLabel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addForm">
        <div class="modal-body">

          <div class="container-fluid">
            <div class="row">
              <div class="col-md-2">
                  <label class="control-label" style="position:relative; top:7px;">First Name: </label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control" name="firstname" id="firstname">
              </div>
            </div>
            <div style="height:10px"></div>
            <div class="row">
              <div class="col-md-2">
                  <label class="control-label" style="position:relative; top:7px;">Last Name: </label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control" name="lastname" id="lastname">
              </div>
            </div>
            <div style="height:10px"></div>
            <div class="row">
              <div class="col-md-2">
                  <label class="control-label" style="position:relative; top:7px;">Address: </label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control" name="address" id="address">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill btn-sm" data-bs-dismiss="modal">Cancel</button>
          <button type="button" id="addButton" class="btn btn-success rounded-pill btn-sm">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" aria-labelledby="editModalLabel"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Member</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="editForm">
        <div class="modal-body">

          <div class="container-fluid">
            <div class="row">
              <div class="col-md-2">
                  <label class="control-label" style="position:relative; top:7px;">First Name: </label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control" name="efirstname" id="efirstname">
              </div>
            </div>
            <div style="height:10px"></div>
            <div class="row">
              <div class="col-md-2"><input type="hidden" name="eid" id="eid">
                  <label class="control-label" style="position:relative; top:7px;">Last Name: </label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control" name="elastname" id="elastname">
              </div>
            </div>
            <div style="height:10px"></div>
            <div class="row">
              <div class="col-md-2">
                  <label class="control-label" style="position:relative; top:7px;">Address: </label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control" name="eaddress" id="eaddress">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill btn-sm" data-bs-dismiss="modal">Cancel</button>
          <button type="button" id="editButton" class="btn btn-outline-warning rounded-pill btn-sm">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>




<!-- Delete Modal -->
<div class="modal fade" id="delModal" aria-labelledby="delModalLabel"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are You SURE that you want to REMOVE THIS?? </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
          <div class="container-fluid">
            <h5 class="fw-bolder"><br>
              <center>
                FirstName: <span class="fw-light fst-italic" id="dfirstname"></span><br>
                LastName: <span class="fw-light fst-italic" id="dlastname"></span><br>
                Address: <span class="fw-light fst-italic" id="daddress"></span>                
              </center>
            </h5>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill btn-sm" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> No</button>
          <button type="button" id="delButton" class="btn btn-outline-danger rounded-pill btn-sm"><i class="bi bi-check-circle"></i> Yes</button>
        </div>
    </div>
  </div>
</div>