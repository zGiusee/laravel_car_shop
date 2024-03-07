<div class="modal" id="delete_modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Are you sure you want to delete the machine with id <span id="space"></span>? 
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark px-4" data-bs-dismiss="modal"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></button>
                <form method="POST" id="delete_form" action="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
