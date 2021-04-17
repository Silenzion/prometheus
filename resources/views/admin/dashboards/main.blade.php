@extends("prometheus::admin.layouts.admin-panel")
@section("content")
    <div class="position-relative mb-4">
        <canvas id="visitors-chart" height="200"></canvas>
    </div>

    <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This Week
                  </span>

        <span>
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>
    </div>
@endsection