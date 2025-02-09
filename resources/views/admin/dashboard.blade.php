@extends('admin.layout.app')
@section('css')
@endsection
@section('content')
    <!--app-content open-->
    <div class="app-content">
        <section class="section">
            <!--page-header open-->
            <div class="page-header">
                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard </li>
                </ol>
                <!-- End breadcrumb -->
                @include('admin.layout.notifications')
            </div>
            <!--page-header closed-->
            <div class="container">
                <h1>Dashboard</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5>Total Donations</h5>
                                <p>{{ $totalDonations }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5>Total Donation Amount</h5>
                                <p>₹{{ number_format($totalDonationAmount, 2) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5>Total Donors</h5>
                                <p>{{ $totalUsers }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
             <!--chart  -->
             <div id="donationChart" style="width: 100%; height: 400px;"></div>
        </section>
    </div>
    <!--app-content closed-->
@endsection
@section('custom-script')
<script src="{{ asset('admin/assets/plugins/chart-echarts/echarts.js') }}"></script>
<script>
    // Prepare donation data for the chart
    const donationData = @json($donationData);

    // Extract labels and values
    const labels = donationData.map(item => item.donation_for);
    const totalDonations = donationData.map(item => item.total_donations);
    const totalAmounts = donationData.map(item => item.total_amount);

    // Initialize ECharts
    var chart = echarts.init(document.getElementById('donationChart'));

    // Set options for the chart
    var options = {
        title: {
            text: 'Donations by Purpose',
            subtext: 'Total Donations and Amounts',
            left: 'center'
        },
        tooltip: {
            trigger: 'axis'
        },
        legend: {
            data: ['Total Donations', 'Total Amount'],
            bottom: 0
        },
        xAxis: {
            type: 'category',
            data: labels
        },
        yAxis: [
            {
                type: 'value',
                name: 'Total Donations',
                position: 'left'
            },
            {
                type: 'value',
                name: 'Total Amount (₹)',
                position: 'right'
            }
        ],
        series: [
            {
                name: 'Total Donations',
                type: 'bar',
                data: totalDonations,
                yAxisIndex: 0
            },
            {
                name: 'Total Amount',
                type: 'line',
                data: totalAmounts,
                yAxisIndex: 1
            }
        ]
    };

    // Render chart
    chart.setOption(options);
</script>
@endsection
