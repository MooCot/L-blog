@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<table class="table table-striped projects">
					<thead>
						<tr>
							<th style="width: 5%">
								Название
							</th>
							<th>
								Категория
							</th>
							<th>
								Дата добавления
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($posts as $post)
						<tr>
							<td>
								{{ $post['id'] }}
							</td>
							<td>
								{{ $post['title'] }}
							</td>
							<td>
								{{ $post->category['title'] }}
							</td>
							<td>
								{{ $post['created_at'] }}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection