    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Post-it</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('nota.store') }}" method="POST" class="form">
                        @csrf
                        <div class="form-group">
                            <label for="lblTitle">Titulo</label>
                            <input type="text" name="title" class="form-control" placeholder="Titulo">
                        </div>
                        <div class="form-group">
                            <label for="lblContent">Contenido</label>
                            <input type="text" name="content" class="form-control" placeholder="Contenido">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <input type="submit" class="btn btn-primary" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
