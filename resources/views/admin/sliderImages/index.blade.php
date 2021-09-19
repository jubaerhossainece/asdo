@extends('layouts.admin.app')
@section('content')
<div class="card">
	<div class="card-header header">
		<h2 class="card-title">Slider images Panel</h2>
		@can(app.sliders.index)
		<a href="{{route('asdo.sliders.create')}}" class="btn btn-primary float-right">
		<i class="fas fa-plus-circle pr-1"></i>
		Add New</a>
		@endcan
	</div>
	<div class="card-body">
		<div class="row">
			<dib class="col-md-12">
				<div class="table-responsive">
					<table id="rolesTable" class="table table-hover align-middle mb-0">
						<thead>
							<tr>
							<th class="text-center">#</th>
							<th class="text-center">Image</th>
							<th class="text-center">category</th>
							<th class="text-center">Caption Header</th>
							@canany(['app.sliders.show', 'app.sliders.edit',  'app.sliders.destroy'])
							<th class="text-center">Action</th>
							@endcanany

						</tr>
						</thead>
						<tbody>
							@foreach($sliders as $key => $slider)
								<tr>
									<td class="text-center">{{$loop->index+1}}</td>
									<td class="text-center"><img src="{{asset('/storage/asdo/images/sliders/'.$slider->photo)}}" alt="" style="height: 100px; width: auto;"></td>
									<td class="text-center">
										{{$slider->category}}
									</td>
									<th class="text-center">{{$slider->caption_header}}</th>


									<td class="text-center">
										@can(app.sliders.edit)
										<a href="{{route('asdo.sliders.edit', $slider->id)}}" class="btn btn-primary btn-sm" data-tooltip="tooltip" data-placement="bottom" title="Edit slider image">
											<i class="fas fa-edit"></i>
										</a>
										@endcan

										@can(app.sliders.show)
				    				<a href="{{route('asdo.sliders.show', $slider->id)}}" class="btn btn-secondary btn-sm" data-tooltip="tooltip" data-placement="bottom" title="show slider image information" >
				    					<i class="fas fa-eye"></i>
				    				</a>
				    				@endcan

				    				@can(app.sliders.destroy)
										<button data-toggle="modal" data-tooltip="tooltip" data-target="#alertModal" data-id = "{{$slider->id}}" data-placement="bottom" title="Delete slider image" onclick="deleteData({{$slider->id}})" class="btn btn-danger btn-sm">
											<i class="fas fa-trash-alt"></i>
										</button>
										<form action="{{route('asdo.sliders.destroy', $slider->id)}}" method="POST" style="display: none;" id="submit-delete-{{$slider->id}}">
											@csrf
											@method('DELETE')
										</form>
										@endcan

									</td>

								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</dib>
		</div>
	</div>
</div>
@push('script')
<script>
	
</script>
@endpush
@endsection