@extends('admin.layouts.app')

@section('asside')
@include('admin.layouts.includes.asside')
@endsection

@section('header-section')
<div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">
          Dashboard
        </h2>
      </div>
    </div>
  </div>  
@endsection

@section('main')
<div class="col-sm-6 col-lg-3">
  <div class="card card-sm">
    <div class="card-body">
      <div class="row align-items-center">
        <div class="col-auto">
          <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg>
          </span>
        </div>
        <div class="col">
          <div class="font-weight-medium">
            132 Sales
          </div>
          <div class="text-muted">
            12 waiting payments
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-lg-3">
  <div class="card card-sm">
    <div class="card-body">
      <div class="row align-items-center">
        <div class="col-auto">
          <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="19" r="2" /><circle cx="17" cy="19" r="2" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
          </span>
        </div>
        <div class="col">
          <div class="font-weight-medium">
            78 Orders
          </div>
          <div class="text-muted">
            32 shipped
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-lg-3">
  <div class="card card-sm">
    <div class="card-body">
      <div class="row align-items-center">
        <div class="col-auto">
          <span class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" /></svg>
          </span>
        </div>
        <div class="col">
          <div class="font-weight-medium">
            623 Products
          </div>
          <div class="text-muted">
            16 today
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-lg-3">
  <div class="card card-sm">
    <div class="card-body">
      <div class="row align-items-center">
        <div class="col-auto">
          <span class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
          </span>
        </div>
        <div class="col">
          <div class="font-weight-medium">
            132 Sellers
          </div>
          <div class="text-muted">
            21 today
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-12 col-lg-8">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Social Media Traffic</h3>
    </div>
    <div class="card-body">
      <div id="chart-completion-tasks"></div>
    </div>
  </div>
</div>

<div class="col-sm-12 col-lg-4">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Social Media Traffic</h3>
    </div>
    <div class="card-body">
      <div id="chart-demo-pie"></div>
    </div>
  </div>
</div>
<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Social Media Traffic</h3>
    </div>
    <div class="table-responsive">
      <table
  class="table table-vcenter card-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Role</th>
            <th class="w-1"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td >
              <div class="d-flex py-1 align-items-center">
                <span class="avatar me-2" style="background-image: url(./static/avatars/006m.jpg)"></span>
                <div class="flex-fill">
                  <div class="font-weight-medium">Lorry Mion</div>
                  <div class="text-muted"><a href="#" class="text-reset">lmiona@livejournal.com</a></div>
                </div>
              </div>
            </td>
            <td >
              <div>Automation Specialist IV</div>
              <div class="text-muted">Accounting</div>
            </td>
            <td class="text-muted" >
              User
            </td>
            <td>
              <a href="#">Edit</a>
            </td>
          </tr>
          <tr>
            <td >
              <div class="d-flex py-1 align-items-center">
                <span class="avatar me-2" style="background-image: url(./static/avatars/004f.jpg)"></span>
                <div class="flex-fill">
                  <div class="font-weight-medium">Leesa Beaty</div>
                  <div class="text-muted"><a href="#" class="text-reset">lbeatyb@alibaba.com</a></div>
                </div>
              </div>
            </td>
            <td >
              <div>Editor</div>
              <div class="text-muted">Services</div>
            </td>
            <td class="text-muted" >
              Admin
            </td>
            <td>
              <a href="#">Edit</a>
            </td>
          </tr>
          <tr>
            <td >
              <div class="d-flex py-1 align-items-center">
                <span class="avatar me-2" style="background-image: url(./static/avatars/007m.jpg)"></span>
                <div class="flex-fill">
                  <div class="font-weight-medium">Perren Keemar</div>
                  <div class="text-muted"><a href="#" class="text-reset">pkeemarc@yahoo.com</a></div>
                </div>
              </div>
            </td>
            <td >
              <div>Analog Circuit Design manager</div>
              <div class="text-muted">Services</div>
            </td>
            <td class="text-muted" >
              User
            </td>
            <td>
              <a href="#">Edit</a>
            </td>
          </tr>
          <tr>
            <td >
              <div class="d-flex py-1 align-items-center">
                <span class="avatar me-2">SA</span>
                <div class="flex-fill">
                  <div class="font-weight-medium">Sunny Airey</div>
                  <div class="text-muted"><a href="#" class="text-reset">saireyd@prlog.org</a></div>
                </div>
              </div>
            </td>
            <td >
              <div>Nuclear Power Engineer</div>
              <div class="text-muted">Engineering</div>
            </td>
            <td class="text-muted" >
              Owner
            </td>
            <td>
              <a href="#">Edit</a>
            </td>
          </tr>
          <tr>
            <td >
              <div class="d-flex py-1 align-items-center">
                <span class="avatar me-2" style="background-image: url(./static/avatars/009m.jpg)"></span>
                <div class="flex-fill">
                  <div class="font-weight-medium">Geoffry Flaunders</div>
                  <div class="text-muted"><a href="#" class="text-reset">gflaunderse@loc.gov</a></div>
                </div>
              </div>
            </td>
            <td >
              <div>Software Test Engineer II</div>
              <div class="text-muted">Accounting</div>
            </td>
            <td class="text-muted" >
              Admin
            </td>
            <td>
              <a href="#">Edit</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection

@section('scripts-chart')
    
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
      window.ApexCharts && (new ApexCharts(document.getElementById('chart-demo-pie'), {
          chart: {
              type: "donut",
              fontFamily: 'inherit',
              height: 240,
              sparkline: {
                  enabled: true
              },
              animations: {
                  enabled: false
              },
          },
          fill: {
              opacity: 1,
          },
          series: [44, 55, 12, 2],
          labels: ["Direct", "Affilliate", "E-mail", "Other"],
          grid: {
              strokeDashArray: 4,
          },
          colors: [tabler.getColor("primary"), tabler.getColor("primary", 0.8), tabler.getColor("primary", 0.6), tabler.getColor("gray-300")],
          legend: {
              show: true,
              position: 'bottom',
              offsetY: 12,
              markers: {
                  width: 10,
                  height: 10,
                  radius: 100,
              },
              itemMargin: {
                  horizontal: 8,
                  vertical: 8
              },
          },
          tooltip: {
              fillSeriesColor: false
          },
      })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
      window.ApexCharts && (new ApexCharts(document.getElementById('chart-completion-tasks'), {
          chart: {
              type: "bar",
              fontFamily: 'inherit',
              height: 240,
              parentHeightOffset: 0,
              toolbar: {
                  show: false,
              },
              animations: {
                  enabled: false
              },
          },
          plotOptions: {
              bar: {
                  columnWidth: '50%',
              }
          },
          dataLabels: {
              enabled: false,
          },
          fill: {
              opacity: 1,
          },
          series: [{
              name: "Tasks completion",
              data: [155, 65, 465, 265, 225, 325, 80]
          }],
          grid: {
              padding: {
                  top: -20,
                  right: 0,
                  left: -4,
                  bottom: -4
              },
              strokeDashArray: 4,
          },
          xaxis: {
              labels: {
                  padding: 0,
              },
              tooltip: {
                  enabled: false
              },
              axisBorder: {
                  show: false,
              },
              type: 'datetime',
          },
          yaxis: {
              labels: {
                  padding: 4
              },
          },
          labels: [
              '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26'
          ],
          colors: [tabler.getColor("primary")],
          legend: {
              show: false,
          },
      })).render();
  });
  // @formatter:on
</script>
@endsection