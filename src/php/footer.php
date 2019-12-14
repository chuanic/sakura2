			<!-- footer -->
			<footer id="footer">
				<div class="before" id="footer-before"></div>
				<div class="main">Copyright</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->
		
		<!-- /snackbar -->
		<div id="snackbar" class="mdc-snackbar mdc-snackbar--opening mdc-snackbar--closing">
			<div class="mdc-snackbar__surface">
				<div id="snackbar-text" class="mdc-snackbar__label" role="status" aria-live="polite">
				</div>
				<div class="mdc-snackbar__actions ">
					<button type="button" id="snackbar-button" class="mdc-button mdc-snackbar__action">
						<div class="mdc-button__ripple"></div>
						<div id="snackbar-label" class="mdc-button__label"></div>
					</button>
					<button id="snackbar-close" class="mdc-icon-button mdc-snackbar__dismiss material-icons" title="Dismiss">close</button>
				</div>
			</div>
		</div>

		<?php wp_footer();?>

		<!-- analytics -->
		<?php if (sakura_options('analytics_code_position') == 'foot') {
    echo sakura_options('analytics_code');
}
?>

	</body>
</html>
