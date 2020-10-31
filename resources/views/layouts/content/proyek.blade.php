@extends('layouts.app')

@section('coba')

<div> 
    <div class="row">
        <div class="col-10">
            Dokumentasi Proyek
        </div>
        <div class="col-2">
            <button class="btn btn-primary"> proyek baru </button>
        </div>
    </div>
    <div>
        <div class="modal-body">
        <h5>Popover in a modal</h5>
        <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
        <hr>
        <h5>Tooltips in a modal</h5>
        <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
        </div>
    </div>

    <.div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Nama Proyek</h5>
        <p class="card-text">Oktober</p>
        <a href="#" class="btn btn-primary">lihat</a>
    </div>
    </.div>
</div>

@endsection