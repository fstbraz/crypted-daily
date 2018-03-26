<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<meta name="google-site-verification" content="2TaLH-sMGTWk50ehDYS_y9lJbU4yVX7RD1_BSizOtfQ" />

<meta name="description" content="<?php echo e(\App\Library\SeoHelper::metaDescription(isset($coin) ? $coin : null)); ?>"/>
<meta name="keywords" content="<?php echo e(\App\Library\SeoHelper::metaKeywords(isset($coin) ? $coin : null)); ?>"/>
<meta name="author" content="<?php echo e($app_name); ?>">

<meta property="og:url" content="<?php echo e(url('/')); ?>"/>
<meta property="og:type" content="article"/>
<meta property="og:title" content="<?php echo e(\App\Library\SeoHelper::title(isset($coin) ? $coin : null)); ?>"/>
<meta property="og:description" content="<?php echo e(\App\Library\SeoHelper::metaDescription(isset($coin) ? $coin : null)); ?>"/>
<meta property="og:image" content="<?php echo e(asset('asset/images/coinindex-cryptocurrency-script.png')); ?>"/>

<meta name="twitter:card" content="summary"/>
<meta property="twitter:title" content="<?php echo e(\App\Library\SeoHelper::title(isset($coin) ? $coin : null)); ?>"/>
<meta property="twitter:description"
      content="<?php echo e(\App\Library\SeoHelper::metaDescription(isset($coin) ? $coin : null)); ?>"/>
<meta property="twitter:image" content="<?php echo e(asset('asset/images/coinindex-cryptocurrency-script.png')); ?>"/>


<link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('asset/images/favicon.png')); ?>">

<title><?php echo $__env->yieldContent('title'); ?> - <?php echo e($app_name); ?></title>