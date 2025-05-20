<!--==================================== Home map section start================================-->
<?php
    $investment =App\Models\Weoffer::orderBy("id","ASC")->where("publish","draft")->first();
?>
<?php if($investment): ?>

<?php echo $investment->description; ?>

<?php endif; ?>
<!--==================================== Home map section end================================-->
<?php /**PATH F:\Xampp8.0.2\htdocs\aic\projects\resources\views/front/static/map.blade.php ENDPATH**/ ?>