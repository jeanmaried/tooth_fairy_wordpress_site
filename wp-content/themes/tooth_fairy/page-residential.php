<?php /* Template Name: Residential*/ ?>
<?php
get_header();
?>
<?php
$bannerRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');
if(sizeof($bannerRes[0]) > 0){
	foreach($bannerRes[0] as $banner) { ?>
		<div class="relative">
		<div class="res-banner " style="background: url('<?php echo $banner['image-banner-res']; ?>'); background-size:cover;">
			<h2 class="white-font text-center"> <?php echo $banner['title-banner-res'] ?> </h2>
		</div>
		<h2 class="grey-font zero-bottom home-padding absolute "> <?php echo $banner['description-banner-res'] ?></h2>
		</div>
		<?php
	}} ?>
	<div class="padding-med">
<?php
$i = 2;
while($i < 4) {
  $servicesTitle = get_post_meta( get_the_ID(), 'services-residential_'.$i); ?>
    	<h3><?php	print_r($servicesTitle[0]); ?> </h3>
  <?php $serviceRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_'.$i);
	if(sizeof($serviceRes[0]) > 0){
  foreach($serviceRes[0] as $services) { ?>
		<div>
			<img src= "<?php echo $services['image-res']; ?>">
			<h3><?php echo $services['title-res'];?></h3>
			<p><?php echo $services['description-1']; ?></p>
      <p><?php echo $services['description-2']; ?></p>
      <p><?php echo $services['description-3']; ?></p>
		</div>
		<?php
	} }
  $i++;
}?>
</div>
<?php
    $bookRes = get_post_meta( get_the_ID(), 'scheduleApp');?>
          <button> <?php echo $bookRes[0]?> </button>
<?php
    $bookCorp = get_post_meta( get_the_ID(), 'corpApp');?>
    <p> <?php echo $bookCorp[0]?></p>
<?php get_footer(); ?>
