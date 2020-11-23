	<!--SCRIPTS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Specific to table sort-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/plug-ins/1.10.15/sorting/stringMonthYear.js"></script>

<!--JavaScript functions for the Table -->
<!-- Uncaught TypeError: n[m] is undefined for the folowing function JavaScript-->
<!-- Uncaught TypeError: i is undefined for the folowing function JavaScript-->
<!-- The folowing script defines the column number where there are dates to sort.
 If this number exeeds the number of columns actualy present in the table,
  one of the preceeding errors mentioned will occure. 
  The other one occures when the column number doesn't match the actual column where dates are stored.-->
<!-- Specifique table sort-->
	<script type="text/javascript">
		$(document).ready(function() {
			$("#sort").DataTable({
				columnDefs: [{
					type: 'date',
					targets: [3]
				}],
			});
		});
	</script>
