@foreach ($job as $j )
{{ $j->date }}
{{ $j->job }}
{{ $j->po }}
{{ $j->qty }}
{{ $j->size }}
{{-- job.id,
	job.date,
	job.job,
	job.po,
	job.qty,
	detailjob.size,
	detailjob.qty,
	detailjob.isi,
	style.NAME,
	colour.NAME --}}
    
@endforeach