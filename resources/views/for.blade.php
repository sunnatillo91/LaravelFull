<div>
    @foreach ($records as $record)
        <p>Record id is {{ $record }} - {{ $loop->index }} </p>
    @endforeach
</div>


