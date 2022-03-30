let today = new Date().toLocaleDateString()

console.log(today)
<!-- <div class="tab-width"><label>Date <span class="req">*</span> </label>
		<input name="date" id="date" value="" type="date">
	</div> -->

	<script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date_picker').attr('min',today);
    </script>