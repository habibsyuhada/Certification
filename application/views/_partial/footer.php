				<footer class="footer">
					<div class="w-100 clearfix">
						<span class="text-center text-sm-left d-md-inline-block">Copyright © 2018 ThemeKit v2.0. All Rights Reserved.</span>
						<span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark" target="_blank">Lavalite</a></span>
					</div>
				</footer>
				
			</div>
		</div>

		<script type="text/javascript">
			<?php if($this->session->flashdata('success') == TRUE): ?>
			showSuccessToast('<?php echo $this->session->flashdata('success'); ?>');
      <?php endif; ?>
      <?php if($this->session->flashdata('error') == TRUE): ?>
			showDangerToast('<?php echo $this->session->flashdata('error'); ?>');
			<?php endif; ?>
			$('.data_table').DataTable({
				"order": []
			});
		</script>
		
	</body>	
</html>		
