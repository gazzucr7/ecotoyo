<div class="modal fade" id="modal-delete-{{$per->id}}">
	<form action="{{ route('proveedor.destroy', $per->id) }}" method="POST">
		{{ method_field('DELETE') }}
		{{ csrf_field() }}
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Eliminar Proveedor</h4>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden>x</span>
					</button>					
				</div>
				<div class="modal-body">
					<p>
						Confirme si desea Eliminar <strong>{{ $per->nombre }}</strong>
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						Cerrar
					</button>
					<button type="submit" class="btn btn-primary">Cofirmar</button>
				</div>
			</div>
		</div>
	</form>
</div>