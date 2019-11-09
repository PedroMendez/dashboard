@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="sidebar">
    @include ('layouts.sidebar')
    <div class="main-panel">
      <div class="content">
        <div class="row">
          <div class="col-12">
            @include ('cards.chart')
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            @include ('cards.minchart', [
              'title' => 'Total Shipments',
              'id' => 'chartLinePurple',
              'icon' => 'icon-bell-55',
              'num' => '763,215'
            ])
          </div>
          <div class="col-lg-4">
            @include ('cards.minchart', [
              'title' => 'Daily Sales',
              'id' => 'CountryChart',
              'icon' => 'icon-delivery-fast',
              'num' => '3,500€'
            ])
          </div>
          <div class="col-lg-4">
            @include ('cards.minchart', [
              'title' => 'Completed Tasks',
              'id' => 'chartLineGreen',
              'icon' => 'icon-send',
              'num' => '12,100K'
            ])
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12">
            @include ('cards.tasks')
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="card empty">
              <div class="card-header">
                <h4 class="card-title"> Simple</h4>
              </div>
              <div class="card-body">
              </div>
            </div>
          </div>
        </div>
      </div>
      @include ('footer')
    </div>
  </div>
@include ('fixed')
<script src="/js/chartjs.min.js"></script>
<script src="/js/charts.js"></script>
<script>
  (function() {
    // Javascript method's body can be found in assets/js/demos.js
    charts.initDashboardPageCharts();

  })();

  document.getElementById("whiteBadge").addEventListener("click", clickToWhite);
      
  document.getElementById("blackBadge").addEventListener("click", clickToBlack);
      
  function clickToWhite() {
    document.getElementById("mainBody").classList.add("white-content");
  }  

  function clickToBlack() {
    document.getElementById("mainBody").classList.remove("white-content");
  }  
</script>

@endsection
