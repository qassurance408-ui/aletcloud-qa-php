<?php
echo "<h1>AletCloud QA - PHP Test</h1>";
echo "<p>Framework: PHP</p>";
echo "<p>Server time: " . date('Y-m-d H:i:s') . "</p>";
?>

<?php
$extensions = ['gd', 'intl', 'pdo_mysql', 'pdo_pgsql', 'zip', 'bcmath', 'exif', 'pcntl', 'opcache'];
foreach ($extensions as $ext) {
    echo $ext . ': ' . (extension_loaded($ext) ? 'loaded' : 'MISSING') . '<br>';
}
?>
