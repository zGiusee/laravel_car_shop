<div class="modal" id="brands_delete_modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Sei sicuro di voler eliminare il brand con id <span id="space"></span>? 
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel delete</button>
                <form method="POST" id="delete_form" action="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Confirm delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
