<div id="features" class="padding-top50">
	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="post-heading-center">
					<h2><?=$finds->title;?></h2>
				</div>
				<div class="affa-faq">
					<?=$finds->description_long;?>
				</div>
			</div>
		</div>
</section>
</div>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "Phần mềm bán hàng",
  "url": "http://monger.vn/",
  "author": "Monger",
  "image": "<?=base_url();?>blog/thumb/<?=$finds->thumb;?>",
  "description": "<?=$finds->title;?>",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "0911 316 123",
    "contactType": "Hỗ trợ khách hàng"
  }]
}
</script>