<div class="modal fade" id="modalFastEvent" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="message"></div>

                <form id="formFastEvent">

                    <div class="form-group row">
                        <label for="patient_name" class="col-sm-4 col-form-label">Patient</label>
                        <div class="col-sm-8">
                            <input type="text" name="patient_name" class="form-control" id="patient_name">                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-sm-4 col-form-label">Titulo</label>
                        <div class="col-sm-8">
                            <input type="text" name="title" class="form-control" id="title">
                            <input type="hidden" name="id">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="start" class="col-sm-4 col-form-label">Start Time</label>
                        <div class="col-sm-8">
                            <input type="text" name="start" class="form-control time" id="start">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="end" class="col-sm-4 col-form-label">End Time</label>
                        <div class="col-sm-8">
                            <input type="text" name="end" class="form-control time" id="end">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="color" class="col-sm-4 col-form-label">Color</label>
                        <div class="col-sm-8">
                            <input type="color" name="color" class="form-control" id="color">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger deleteFastEvent">Delete</button>
                <button type="button" class="btn btn-primary saveFastEvent">Save</button>
            </div>
        </div>
    </div>
</div>