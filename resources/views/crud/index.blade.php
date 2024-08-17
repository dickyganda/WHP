@extends('layouts.main')
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Profile Statistics</h3>
    </div>
    <div class="page-content">
		@section('content')
		<section class="section">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">
						jQuery Datatable
					</h5>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table" id="table1">
							<thead>
								<tr>
									<th>Date</th>
									<th>Job</th>
									<th>PO</th>
									<th>Qty</th>
									<th>Size</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($job as $j )
								<tr>
									<td>{{ $j->date }}</td>
									<td>{{ $j->job }}</td>
									<td>{{ $j->po }}</td>
									<td>{{ $j->qty }}</td>
									<td>{{ $j->size }}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		
		</section>		
		@endsection
    </div>

</div>
@endsection