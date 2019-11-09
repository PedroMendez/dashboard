<div class="card card-chart">
  <div class="card-header">
    <h5 class="card-category">{{$title}}</h5>
    <h3 class="card-title"><i class="tim-icons {{$icon}} text-primary"></i> {{$num}}</h3>
  </div>
  <div class="card-body">
    <div class="chart-area">
      <canvas id="{{$id}}"></canvas>
    </div>
  </div>
</div>
