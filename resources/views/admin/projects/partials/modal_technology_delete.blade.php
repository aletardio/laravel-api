<div class="modal fade" id="modal_technology_delete-{{ $technology->id }}" tabindex="-1"
    aria-labelledby="modal_post_delete" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di voler eliminare questa tecnologia <strong>{{ $technology->name }}</strong>
            </div>
            <div class="modal-footer">
                <form class="me-2" title="Elimina progetto"
                    action="{{ route('admin.technologies.destroy', ['technology' => $technology->id]) }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>

            </div>
        </div>
    </div>
</div>
