<?php $__env->startSection('title', $data->meta_title); ?>
<?php $__env->startSection('keywords', $data->meta_keywords); ?>
<?php $__env->startSection('description', $data->meta_description); ?>
<?php $__env->startSection('logo', $data->image); ?>
<?php $__env->startSection('header-section'); ?>
    <?php echo $data->header_section; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer-section'); ?>
    <?php echo $data->footer_section; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <style>
        .guide-con h6,
        li {
            font-size: 20px !important;
        }

        .faq-header {
            font-family: GothamBold1;
            font-size: 42px;
            border-bottom: 1px dotted #ccc;
            padding: 24px;
        }

        .faq-content {
            margin: 0 auto;
        }

        .faq-question {
            padding: 5px 0;
            font-family: GothamBold1;
            border-bottom: 1px dotted #ccc;
        }

        .panel-title {
            font-size: 24px;
            font-family: GothamBold1;
            width: 100%;
            color: #fff;
            position: relative;
            margin: 0;
            padding: 10px 10px 0 48px;
            display: block;
            cursor: pointer;
        }

        .panel-content {
            font-size: 20px;
            font-family: GothamBold1;
            padding: 0px 1px;
            margin: 0 4px;
            color: #fff;
            height: 0;
            overflow: hidden;
            z-index: -1;
            /* position: relative; */
            opacity: 0;
            -webkit-transition: .4s ease;
            -moz-transition: .4s ease;
            -o-transition: .4s ease;
            transition: .4s ease;
        }

        .panel:checked~.panel-content {
            height: auto;
            opacity: 1;
            padding: 14px;
        }

        .plus {
            position: absolute;
            margin-left: 5px;
            margin-top: 10px;
            color: #fff;
            z-index: 5;
            font-size: 42px;
            font-family: GothamBold1;
            line-height: 100%;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
            -webkit-transition: .2s ease;
            -moz-transition: .2s ease;
            -o-transition: .2s ease;
            transition: .2s ease;
        }

        .panel:checked~.plus {
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .panel {
            display: none;
        }

        .participate-wrapp {
            background: #5b3aee;
            padding: 35px 0px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>

    <?php
        $name = $data->name;
        $bannerImage = asset('front/images/banner.png');
        if ($data->bannerImage) {
            $bannerImage = asset($data->bannerImage);
        }
    ?>


    <section class="participate-wrapp">
        <div class="container">
            <div class="parti-head">

                <h4>FAQ's</h4>
                <div class="row mt-5 pt-5">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="faq-content">
                            <?php $__currentLoopData = App\Models\Faq::orderBy('id', 'asc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="faq-question">
                                    <input id="q<?php echo e($key + 1); ?>." type="checkbox" class="panel">
                                    <div class="plus">+</div>
                                    <label for="q<?php echo e($key + 1); ?>." class="panel-title"> <?php echo e($c->question); ?></label>
                                    <div class="panel-content"> <?php echo $c->answer; ?></div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\school-app\projects\resources\views/front/static/faq.blade.php ENDPATH**/ ?>