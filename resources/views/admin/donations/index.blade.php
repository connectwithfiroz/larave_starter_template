@extends('admin.layout.app') <!-- Assuming you already have a layout -->

@section('content')
<!--app-content open-->
<div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">
                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i>Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Donation </li>
                </ol><!-- End breadcrumb -->
                @include('admin.layout.notifications')
            </div>
            <!--page-header closed-->

            <!--row open-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card export-database">
                        <div class="card-header">
                            <h4> Donation Records </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="donation_list_table"
                                    class="table table-bordered table-responsive border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Donation For</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile Number</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Payment ID</th>
                                        <th>Order ID</th>
                                        <th>Created At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($donations as $donation)
                                        <tr>
                                            <td>{{ $donation->id }}</td>
                                            <td>{{ $donation->donation_for }}</td>
                                            <td>{{ $donation->name }}</td>
                                            <td>{{ $donation->email }}</td>
                                            <td>{{ $donation->mobile_number }}</td>
                                            <td>₹{{ number_format($donation->amount, 2) }}</td>
                                            <td>
                                                @if (is_null($donation->razorpay_payment_id))
                                                    <span class="badge bg-warning text-dark">Pending</span>
                                                @elseif ($donation->razorpay_payment_id && is_null($donation->razorpay_signature))
                                                    <span class="badge bg-danger">Failed</span>
                                                @else
                                                    <span class="badge bg-success">Success</span>
                                                @endif
                                            </td>
                                            <td>{{ $donation->razorpay_payment_id ?? '-' }}</td>
                                            <td>{{ $donation->razorpay_order_id ?? '-' }}</td>
                                            <td>{{ $donation->created_at->format('d M Y, h:i A') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="10" class="text-center">No donation records found.</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--row closed-->

        </section>
    </div>
    <!--app-content closed-->
@endsection
@section('custom-script')
<script>
   $(document).ready(function () {
        $("#donation_list_table").DataTable({
            // Enable server-side processing for larger datasets
            processing: true,
            serverSide: false, // Set to true if using server-side processing
            // Define default sorting column and order
            order: [[0, "desc"]], // Sort by the first column (index 0) in descending order
            // Add pagination, search, and length change options
            pageLength: 10, // Default number of rows per page
            lengthMenu: [10, 25, 50, 100], // Options for rows per page
            // Add styling and functionality options
            responsive: true, // Make the table responsive
            autoWidth: false, // Disable auto-width to prevent layout issues
            language: {
                search: "Search:", // Customize the search box placeholder
                lengthMenu: "Show _MENU_ entries", // Customize the length menu text
                info: "Showing _START_ to _END_ of _TOTAL_ donations", // Customize the info text
            },
        });
    });

</script>
@endsection
