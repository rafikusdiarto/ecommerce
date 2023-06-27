@extends("admin.layout.template")
@section('page_title')
    Dashboard | Rawon E-Commerce
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-8 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-primary">Hello !!!! 🎉</h5>
                <p class="mb-4">
                  You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                  your profile.
                </p>

                <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img
                  src="{{asset('dashboard/assets/img/illustrations/man-with-laptop-light.png')}}"
                  height="140"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png"
                  data-app-light-img="illustrations/man-with-laptop-light.png"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 order-1">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgb(38, 107, 249);transform: ;msFilter:;"><path d="M16.604 11.048a5.67 5.67 0 0 0 .751-3.44c-.179-1.784-1.175-3.361-2.803-4.44l-1.105 1.666c1.119.742 1.8 1.799 1.918 2.974a3.693 3.693 0 0 1-1.072 2.986l-1.192 1.192 1.618.475C18.951 13.701 19 17.957 19 18h2c0-1.789-.956-5.285-4.396-6.952z"></path><path d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm1.5 7H8c-3.309 0-6 2.691-6 6v1h2v-1c0-2.206 1.794-4 4-4h3c2.206 0 4 1.794 4 4v1h2v-1c0-3.309-2.691-6-6-6z"></path></svg>
                    {{-- <img
                      src="{{asset('dashboard/assets/img/icons/unicons/chart-success.png')}}"
                      alt="chart success"
                      class="rounded"
                    /> --}}
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">Total Customer</span>
                <h3 class="card-title mb-2">{{$countUser}}</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgb(113, 221, 55);transform: ;msFilter:;"><path d="M22 8a.76.76 0 0 0 0-.21v-.08a.77.77 0 0 0-.07-.16.35.35 0 0 0-.05-.08l-.1-.13-.08-.06-.12-.09-9-5a1 1 0 0 0-1 0l-9 5-.09.07-.11.08a.41.41 0 0 0-.07.11.39.39 0 0 0-.08.1.59.59 0 0 0-.06.14.3.3 0 0 0 0 .1A.76.76 0 0 0 2 8v8a1 1 0 0 0 .52.87l9 5a.75.75 0 0 0 .13.06h.1a1.06 1.06 0 0 0 .5 0h.1l.14-.06 9-5A1 1 0 0 0 22 16V8zm-10 3.87L5.06 8l2.76-1.52 6.83 3.9zm0-7.72L18.94 8 16.7 9.25 9.87 5.34zM4 9.7l7 3.92v5.68l-7-3.89zm9 9.6v-5.68l3-1.68V15l2-1v-3.18l2-1.11v5.7z"></path></svg>
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt6"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                      <a class="dropdown-item" href="{{url('/admin/all-product')}}">View More</a>
                    </div>
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">Total Product</span>
                <h3 class="card-title text-nowrap mb-1 mt-2">{{$countProduct}}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Total Income -->
      <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
        {{-- grafik income --}}
        <div class="card">
            <div class="card-header">
              <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                  <button
                    type="button"
                    class="nav-link active"
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#navs-tabs-line-card-income"
                    aria-controls="navs-tabs-line-card-income"
                    aria-selected="true"
                  >
                  Grafik Income
                  </button>
                </li>
              </ul>
            </div>
            <div class="card-body px-0">
              <div class="tab-content p-0">
                <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                  <div class="d-flex p-4 pt-3">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="{{asset('dashboard/assets/img/icons/unicons/wallet.png')}}" alt="User" />
                    </div>
                    <div>
                      <small class="text-muted d-block">Total Income</small>
                      <div class="d-flex align-items-center">
                        <h6 class="mb-0 me-1">@currency($countAllIncome)</h6>
                      </div>
                    </div>
                  </div>
                  {{-- income cart --}}
                  <div id="incomeChartNew">
                  </div>
                  {{-- income cart --}}
                </div>
              </div>
            </div>
        </div>
        {{-- grafik income --}}


        {{-- grafik product sold --}}
        <div class="card my-5">
            <div class="card-header">
              <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                  <button
                    class="nav-link text-white shadow bg-info"
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#navs-tabs-line-card-income"
                    aria-controls="navs-tabs-line-card-income"
                    aria-selected="true"
                  >
                  Grafik Product Sold
                  </button>
                </li>
              </ul>
            </div>
            <div class="card-body px-0">
              <div class="tab-content p-0">
                <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                  <div class="d-flex p-4 pt-3">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="{{asset('dashboard/assets/img/icons/unicons/chart-success.png')}}" alt="User" />
                    </div>
                    <div>
                      <small class="text-muted d-block">Total Product Sold</small>
                      <div class="d-flex align-items-center">
                        <h6 class="mb-0 me-1">{{$countAllProductSold}}</h6>
                      </div>
                    </div>
                  </div>
                  {{-- income cart --}}
                  <div id="incomeChartNew2">
                  </div>
                  {{-- income cart --}}
                </div>
              </div>
            </div>
        </div>
        {{-- grafik product sold --}}

      </div>
      <!--/ Total Income -->
      <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
        <div class="row">
          <div class="col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="{{asset('dashboard/assets/img/icons/unicons/wallet-info.png')}}" alt="Credit Card" class="rounded" />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt4"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                      <a class="dropdown-item" href="{{url('/admin/pending-order')}}">View More</a>
                    </div>
                  </div>
                </div>
                <span class="d-block mb-1">Total Orders</span>
                <h3 class="card-title text-nowrap mb-2">{{$countOrders}}</h3>
              </div>
            </div>
          </div>
          <div class="col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="{{asset('dashboard/assets/img/icons/unicons/paypal.png')}}" alt="Credit Card" class="rounded" />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt4"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                      <a class="dropdown-item" href="{{url('/admin/pending-order')}}">View More</a>
                    </div>
                  </div>
                </div>
                <span class="d-block mb-1">Order Rejected</span>
                <div class="d-flex">
                    <h3 class="card-title text-nowrap mb-2">{{$countRejectOrders}}</h3>
                    <small class="text-danger mt-1 ms-2 fw-semibold">Orders</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="{{asset('dashboard/assets/img/icons/unicons/cc-primary.png')}}" alt="Credit Card" class="rounded" />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt1"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                      <a class="dropdown-item" href="{{url('/admin/pending-order')}}">View More</a>
                    </div>
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">Order Accepted</span>
                <div class="d-flex">
                    <h3 class="card-title mb-2">{{$countAccOrders}}</h3>
                    <small class="text-success mt-1 ms-2 fw-semibold">Orders</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 mb-4">
            <div class="card {{$getPendingOrders > 0 ? 'bg-warning text-white' : 'bg-white'}}">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="{{asset('dashboard/assets/img/icons/unicons/chart.png')}}" alt="Credit Card" class="rounded" />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt1"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                      <a class="dropdown-item" href="{{url('/admin/pending-order')}}">View More</a>
                    </div>
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">Waiting Orders</span>
                <div class="d-flex">
                    <h3 class="card-title mb-2">{{$getPendingOrders}}</h3>
                    <small class="mt-1 ms-2 fw-semibold">Orders</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                  <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                    <div class="card-title">
                      <h5 class="text-nowrap mb-2">Profile Report</h5>
                      <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                    </div>
                    <div class="mt-sm-auto">
                      <small class="text-success text-nowrap fw-semibold"
                        ><i class="bx bx-chevron-up"></i> 68.2%</small
                      >
                      <h3 class="mb-0">$84,686k</h3>
                    </div>
                  </div>
                  <div id="profileReportChart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Order Statistics -->
      <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between pb-0">
            <div class="card-title mb-0">
              <h5 class="m-0 me-2">Order Statistics</h5>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="d-flex flex-column align-items-center gap-1">
                <h2 class="mb-2">{{$countOrders}}</h2>
                <span>Total Orders</span>
              </div>
              {{-- order category chart --}}
              <div id="orderStatisticsChartNew">

              </div>
                {{-- order category chart --}}

            </div>
            <ul class="p-0 m-0">
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-primary"
                    ><i class="bx bx-mobile-alt"></i
                  ></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Laptops</h6>
                    <small class="text-muted">ROG Gaming, TUF Gaming</small>
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">{{$getOrderLaptops}}</small>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Display & Desktop</h6>
                    <small class="text-muted">Monitors, PC</small>
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">{{$getOrderDisplays}}</small>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Components</h6>
                    <small class="text-muted">Keyboard, Mouse, Graphics Card</small>
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">{{$getOrderComponents}}</small>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Order Statistics -->

      <!-- Expense Overview -->
      <div class="col-md-6 col-lg-4 order-1 mb-4">

      </div>
      <!--/ Expense Overview -->

      <!--/ Transactions -->
    </div>
</div>
@endsection
@section('extraJS')

<script>
    function number_format(number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(',', '').replace(' ', '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function(n, prec) {
        var k = Math.pow(10, prec);
        return '' + Math.round(n * k) / k;
        };
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
    }
    var options = {
          series: [{
          name: 'Income',
          data: [{{$getIncomeJanuary}}, {{$getIncomeFebruary}}, {{$getIncomeMarch}}, {{$getIncomeApril}}, {{$getIncomeMay}}, {{$getIncomeJune}}, {{$getIncomeJuly}}, {{$getIncomeAugust}}, {{$getIncomeSeptember}}, {{$getIncomeOctober}}, {{$getIncomeNovember}}, {{$getIncomeDecember}}]
        },],
          chart: {
          height: 350,
          type: 'area'
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        yaxis: {
            labels: {
                formatter: function (value, index, values) {
                return 'Rp. ' + number_format(value);
                }
            },
        },
        xaxis: {
          categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        },
        };

        var chart = new ApexCharts(document.querySelector("#incomeChartNew"), options);
        chart.render()
</script>
<script>
    var options = {
          series: [{
          name: 'Product Sold',
          data: [{{$getSellingJanuary}}, {{$getSellingFebruary}}, {{$getSellingMarch}}, {{$getSellingApril}}, {{$getSellingMay}}, {{$getSellingJune}}, {{$getSellingJuly}}, {{$getSellingAugust}}, {{$getSellingSeptember}}, {{$getSellingOctober}}, {{$getSellingNovember}}, {{$getSellingDecember}}]
        },],
          chart: {
          height: 350,
          type: 'area'
        },
        colors: ['#00E396'],
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        yaxis: {
            labels: {
                formatter: function (value, index, values) {
                return value;
                }
            },
        },
        xaxis: {
          categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        },
        };

        var chart = new ApexCharts(document.querySelector("#incomeChartNew2"), options);
        chart.render()
</script>

<script>
    'use strict';

(function () {
  let cardColor, headingColor, axisColor, shadeColor, borderColor;

  cardColor = config.colors.white;
  headingColor = config.colors.headingColor;
  axisColor = config.colors.axisColor;
  borderColor = config.colors.borderColor;
  const chartOrderStatistics = document.querySelector('#orderStatisticsChartNew'),
  orderChartConfig = {
    chart: {
      height: 165,
      width: 130,
      type: 'donut'
    },
    labels: ['Laptop', 'Display-Desktop', 'Components'],
    series: [{{$getOrderLaptops}}, {{$getOrderDisplays}}, {{$getOrderComponents}}],
    colors: [config.colors.primary, config.colors.success, config.colors.info],
    stroke: {
      width: 5,
      colors: cardColor
    },
    dataLabels: {
      enabled: false,
      formatter: function (val, opt) {
        return parseInt(val);
      }
    },
    legend: {
      show: false
    },
    grid: {
      padding: {
        top: 0,
        bottom: 0,
        right: 15
      }
    },
    plotOptions: {
      pie: {
        donut: {
          size: '75%',
          labels: {
            show: true,
            value: {
              fontSize: '1.5rem',
              fontFamily: 'Public Sans',
              color: headingColor,
              offsetY: -15,
              formatter: function (val) {
                return parseInt(val) + ' orders';
              }
            },
            name: {
              offsetY: 8,
              fontFamily: 'Public Sans'
            },
            total: {
              show: true,
              fontSize: '0.8125rem',
              color: axisColor,
              label: 'Category',
              formatter: function (w) {
                return '';
              }
            }
          }
        }
      }
    }
  };
if (typeof chartOrderStatistics !== undefined && chartOrderStatistics !== null) {
  const statisticsChart = new ApexCharts(chartOrderStatistics, orderChartConfig);
  statisticsChart.render();
}
})()
</script>
@endsection

