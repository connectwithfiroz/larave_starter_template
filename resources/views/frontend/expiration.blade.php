@php
    use Carbon\Carbon;

    // Get the authenticated user's start date
    $startDate = '2025-02-26';
    $currentDate = Carbon::now();

    // Calculate days passed
    $daysPassed = $startDate ? Carbon::parse($startDate)->diffInDays($currentDate) : 0;
@endphp

@if($daysPassed > 30)
    <div style="text-align: center; padding: 20px; background: red; color: white;">
        <h2>Sorry, This site is temporarily down. We'll get back to you soon.</h2>
    </div>
    <?php
    exit() ?>
@endif

