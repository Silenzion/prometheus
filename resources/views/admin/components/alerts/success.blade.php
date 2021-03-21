@if(session('success'))
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('success') }}
            </div>
        </div>
    </div>
@endif
