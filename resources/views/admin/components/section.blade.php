<div class="row">
    <div class="col-md-12">
        <div class="card{{ $themeIsDefault() ? '' : ' card-' . $theme }}">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                            data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"
                            data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div {{ $attributes->merge(['class' => 'card-body']) }}>
                {{ $slot }}
            </div>

            {{ $pagination ?? '' }}
        </div>
    </div>
</div>
