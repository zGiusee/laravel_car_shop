<div class="modal" id="delete_modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete the car with id '<span id='car_id_space'></span>'</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cacel delete</button>
                <form method="POST" id="delete_form" action="{{ route('admin.cars.destroy', ['car' => $car->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Confirm delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
